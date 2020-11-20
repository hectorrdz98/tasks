<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home($projectID, $taskId)
    {
        return view('task');
    }
}
