<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Task;
use App\Models\TaskLabel;
use App\Models\Label;

class ProjectController extends Controller
{
    public function home($id)
    {
        $user = Auth::user();
        $project = Project::where('user', Auth::user()->id)->where('id', $id)->firstOrFail();
        $labels = Label::all();
        $tasks = [
            'toDo' => Task::where('user', $user->id)->where('project', $project->id)
                ->where('status', 0)->orderBy('datetime', 'asc')->get(),
            'doing' => Task::where('user', $user->id)->where('project', $project->id)
                ->where('status', 1)->orderBy('datetime', 'asc')->get(),
            'done' => Task::where('user', $user->id)->where('project', $project->id)
                ->where('status', 2)->orderBy('datetime', 'asc')->get()
        ];
        $data = [
            'project' => $project,
            'tasks' => $tasks,
            'labels' => $labels
        ];
        return view('project', $data);
    }

    public function create(Request $request)
    {
        $project = Project::create([
            'user' => Auth::user()->id,
            'title' => $request->projectTitle,
            'color' => $request->projectColor
        ]);
        
        return redirect()->route('project.home', ['id' => $project->id]);
    }

    public function updateTitle($id, Request $request)
    {
        $project = Project::where('user', Auth::user()->id)->where('id', $id)->firstOrFail();
        $project->title = $request->title;
        $project->update();
        return true;
    }

    public function updateColor($id, Request $request)
    {
        $project = Project::where('user', Auth::user()->id)->where('id', $id)->firstOrFail();
        $project->color = $request->color;
        $project->update();
        return true;
    }

    public function delete($id)
    {
        $project = Project::where('id', $id)->where('user', Auth::user()->id)->firstOrFail();
        $tasks = Task::where('project', $project->id)->get();
        foreach ($tasks as $key => $task) {
            TaskLabel::where('project', $task->id)->delete();
            $task->delete();
        }
        $project->delete();
        return redirect()->route('home');
    }
}
