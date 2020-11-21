@extends('layouts.master')
@section('content')
    @include('layouts.navbar', [
        'return' => route('project.home', 1)
    ])
    <div class="bg-blue-500 pt-14 rounded-b-3xl shadow-2xl">
        <div class="p-4 pt-10 flex justify-center items-center">
            <div class="w-2/3 h-full flex flex-col justify-center items-start">
                <h1 class="text-2xl text-white font-semibold overflow-y-auto leading-6">
                    {{ $task->title }}
                </h1>
                <div class="flex justify-start items-center mt-2">
                    <div id="divChangeColor" class="w-5 h-5 rounded"
                        style="background-color: {{ $project->color }}"></div>
                    <p class="text-white ml-2">
                        {{ $project->title }}
                    </p>
                </div>
            </div>
            <div class="w-1/3 flex justify-end items-center text-white text-3xl">
                <i class="modal-open fas fa-edit mx-4" modal="modalEditTask"></i>
            </div>
        </div>
    </div>
    <div class="mt-4 p-4">
        <div class="w-full flex justify-center items-center">
            <div class="w-2/3">
                <p class="text-sm text-gray-800 font-semibold">
                    Days Remaining
                </p>
                <h3 class="text-3xl text-gray-800 font-semibold">
                    {{ \Carbon\Carbon::parse($task->datetime)->diffInDays(\Carbon\Carbon::parse(\Carbon\Carbon::now())) }} days
                </h3>
                <p class="text-xs text-gray-500 mt-2">
                    {{ $task->datetime }}
                </p>
            </div>
            <div class="w-1/3 h-full flex flex-col justify-center items-center">
                @switch($task->status)
                    @case(0)
                        <div id="change-status" type="1" class="w-14 h-14 bg-red-600 rounded-xl flex justify-center items-center">
                            <i id="change-status-icon" class="far fa-clock text-white text-2xl"></i>
                        </div>
                        <p id="change-status-text" class="text-xs text-gray-800 font-semibold mt-1">
                            To Do
                        </p>
                        @break
                    @case(1)
                        <div id="change-status" type="2" class="w-14 h-14 bg-yellow-600 rounded-xl flex justify-center items-center">
                            <i id="change-status-icon" class="fas fa-adjust text-white text-2xl"></i>
                        </div>
                        <p id="change-status-text" class="text-xs text-gray-800 font-semibold mt-1">
                            Doing
                        </p>
                        @break
                    @case(2)
                        <div id="change-status" type="3" class="w-14 h-14 bg-green-600 rounded-xl flex justify-center items-center">
                            <i id="change-status-icon" class="fa-check-circle text-white text-2xl"></i>
                        </div>
                        <p id="change-status-text" class="text-xs text-gray-800 font-semibold mt-1">
                            Done
                        </p>
                        @break
                @endswitch
            </div>
        </div>
        <div class="mt-4">
            <p class="text-sm text-gray-800 font-semibold">
                Description
            </p>
            <p class="text-sm text-gray-800 leading-5">
                {{ $task->description }}
            </p>
        </div>
        <div class="mt-4">
            <p class="text-sm text-gray-800 font-semibold">
                Labels
            </p>
            <div class="flex justify-start items-start flex-wrap">
                @foreach ($taskLabels as $taskLabel)
                    <div class="h-8 w-8 my-1 flex justify-center items-center bg-black bg-opacity-10 rounded-xl mr-2">
                        <i class="text-sm {{ \App\Models\Label::find($taskLabel->label)->value }} text-gray-800"></i>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('modals/editTask', [
        'id' => 'modalEditTask'
    ])
@endsection
@section('scripts')
<script>
    $("#change-status").click(function () {
        let type = parseInt($(this).attr("type"));
        switch (type) {
            case 1:
                $(this).attr("type", "2");
                $(this).removeClass("bg-red-600");
                $(this).addClass("bg-yellow-600");
                $("#change-status-icon").removeClass("fa-clock");
                $("#change-status-icon").addClass("fa-adjust");
                $("#change-status-icon").removeClass("far");
                $("#change-status-icon").addClass("fas");
                $("#change-status-text").text("Doing");
                break;
            case 2:
                $(this).attr("type", "3");
                $(this).removeClass("bg-yellow-600");
                $(this).addClass("bg-green-600");
                $("#change-status-icon").removeClass("fa-adjust");
                $("#change-status-icon").addClass("fa-check-circle");
                $("#change-status-icon").removeClass("fas");
                $("#change-status-icon").addClass("far");
                $("#change-status-text").text("Done");
                break;
            case 3:
                $(this).attr("type", "1");
                $(this).removeClass("bg-green-600");
                $(this).addClass("bg-red-600");
                $("#change-status-icon").removeClass("fa-check-circle");
                $("#change-status-icon").addClass("fa-clock");
                $("#change-status-text").text("To Do");
                break;
        }
    });
</script>
@endsection