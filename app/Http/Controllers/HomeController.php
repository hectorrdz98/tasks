<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Task;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home()
    {
        $projects = Project::where('user', Auth::user()->id)->get();

        $today = Carbon::today();
        $todayTasks = Task::where('user', Auth::user()->id)
            ->where('datetime', 'LIKE', $today->year.'-'.$today->month.'-'.$today->day.' %')
            ->whereIn('status', [0, 1])->get();

        $data = [
            'projects' => $projects,
            'todayTasks' => $todayTasks
        ];

        return view('home', $data);
    }
}
