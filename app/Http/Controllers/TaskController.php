<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Task;
use App\Models\TaskLabel;

class TaskController extends Controller
{
    public function home($projectID, $taskID)
    {
        $project = Project::findOrFail($projectID);
        $task = Task::findOrFail($taskID);
        $taskLabels = TaskLabel::where('project', $taskID)->get();
        $data = [
            'project' => $project,
            'task' => $task,
            'taskLabels' => $taskLabels
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

    public function updateStatus($projectID, $taskID, Request $request)
    {
        $project = Project::findOrFail($projectID);
        $task = Task::findOrFail($taskID);
        $task->status = $request->status;
        $task->update();
        return true;
    }
}
