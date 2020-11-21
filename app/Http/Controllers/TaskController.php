<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Task;
use App\Models\TaskLabel;
use App\Models\Label;

class TaskController extends Controller
{
    public function home($projectID, $taskID)
    {
        $project = Project::findOrFail($projectID);
        $task = Task::findOrFail($taskID);
        $taskLabels = TaskLabel::where('project', $taskID)->get();
        $labels = Label::all();
        $data = [
            'project' => $project,
            'task' => $task,
            'taskLabels' => $taskLabels,
            'labels' => $labels
        ];
        return view('task', $data);
    }

    public function create($projectID, Request $request)
    {
        $task = Task::create([
            'user' => Auth::user()->id,
            'project' => $projectID,
            'title' => $request->taskTitle,
            'description' => $request->taskDesc,
            'datetime' => $request->taskDate,
            'status' => 0
        ]);

        foreach ($request->labels as $key => $value) {
            TaskLabel::create([
                'project' => $task->id,
                'label' => $key
            ]);
        }
        
        return redirect()->route('task.home', [
            'id' => $projectID,
            'taskId' => $task->id
        ]);
    }

    public function edit($projectID, $taskID, Request $request)
    {
        $task = Task::findOrFail($taskID);
        $task->title = $request->taskTitle;
        $task->description = $request->taskDesc;
        $task->datetime = $request->taskDate;
        $task->update();

        TaskLabel::where('project', $task->id)->delete();

        foreach ($request->labels as $key => $value) {
            TaskLabel::create([
                'project' => $taskID,
                'label' => $key
            ]);
        }
        
        return redirect()->route('task.home', [
            'id' => $projectID,
            'taskId' => $taskID
        ]);
    }

    public function updateStatus($projectID, $taskID, Request $request)
    {
        $project = Project::findOrFail($projectID);
        $task = Task::findOrFail($taskID);
        $task->status = $request->status;
        $task->update();
        return true;
    }

    public function delete($projectID, $taskID)
    {
        $project = Project::where('id', $projectID)->where('user', Auth::user()->id)->firstOrFail();
        $task = Task::findOrFail($taskID);
        TaskLabel::where('project', $task->id)->delete();
        $task->delete();
        return redirect()->route('project.home', ['id' => $projectID]);
    }
}
