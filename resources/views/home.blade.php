@extends('layouts.master')
@section('content')
    @include('layouts.navbar')
    <div class="bg-blue-50 h-max min-h-full pt-14">
        <div class="p-4">
            <h1 class="text-2xl text-gray-400 font-normal">
                Hello,
            </h1>
            <h1 class="text-2xl text-gray-800 font-semibold">
                {{ Auth::user()->name }}
            </h1>
        </div>
        <div class="overflow-scroll w-full p-4">
            <div class="flex w-max">
                @foreach ($todayTasks as $key => $task)
                    @include('resources/priorityTask', [
                        'priority' => $key % 2 == 0 ? 1 : 0
                    ])
                @endforeach
            </div>
        </div>
        <div class="p-4">
            <p class="text-lg text-gray-400 font-semibold flex items-center justify-start">
                My projects <i modal="modalNewProject" class="modal-open fas fa-plus-circle ml-2 text-3xl"></i>
            </p>
            <div class="mt-4 w-full">
                @foreach ($projects as $project)
                    @include('resources/projectCard', [
                        'project' => $project
                    ])
                @endforeach
            </div>
        </div>
    </div>
    @include('modals/newProject', [
        'id' => 'modalNewProject'
    ])
@endsection