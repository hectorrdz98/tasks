<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home()
    {
        $projects = Project::all();

        $today = Carbon::today();
        $todayTasks = Task::where('datetime', 'LIKE', $today->year.'-'.$today->month.'-'.$today->day.' %')
            ->whereIn('status', [0, 1])->get();

        $data = [
            'projects' => $projects,
            'todayTasks' => $todayTasks
        ];

        return view('home', $data);
    }
}
