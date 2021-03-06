@extends('layouts.master')
@section('content')
    @include('layouts.navbar', [
        'delete' => route('project.delete', ['id' => $project->id])
    ])
    <div class="bg-blue-500 h-max min-h-full pt-14">
        <div class="p-4 h-40 flex justify-center items-center">
            <div class="w-2/3 h-full flex flex-col justify-center items-start">
                <h1 id="projectTitleDesc" class="modal-open text-3xl text-white font-semibold overflow-y-auto"
                    modal="modalChangeProjectTitle">
                    {{ $project->title }}
                </h1>
                <div class="flex justify-start items-center">
                    <div id="divChangeColor" class="modal-open w-5 h-5 rounded"
                        modal="modalChangeProjectColor" style="background-color: {{ $project->color }}"></div>
                    <p class="text-white ml-2">{{ $tasks['done']->count() }} / {{ $tasks['toDo']->count() + $tasks['doing']->count() + $tasks['done']->count() }}</p>
                </div>
            </div>
            <div class="w-1/3 flex justify-end items-center text-white text-3xl">
                <i class="modal-open fas fa-file mx-4" modal="modalNewTask"></i>
            </div>
        </div>
        <div class="p-4 pb-0 bg-white rounded-t-3xl shadow-2xl">
            <div id="panel-to-do">
                <p class="text-lg h-10 text-gray-800 font-semibold flex items-center justify-start">
                    To Do 
                    <span class="ml-2 text-gray-400">({{ $tasks['toDo']->count() }})<span>
                </p>
                <div class="mt-4 w-full overflow-y-auto" style="height: calc(100% - 1rem - 2.5rem - 1rem - 10rem - 3.5rem - 3rem);">
                    @foreach ($tasks['toDo'] as $task)
                        @include('resources/taskCard', [
                            'task' => $task
                        ])
                    @endforeach
                </div>
            </div>
            <div id="panel-doing" class="hidden">
                <p class="text-lg h-10 text-gray-800 font-semibold flex items-center justify-start">
                    Doing
                    <span class="ml-2 text-gray-400">({{ $tasks['doing']->count() }})<span>
                </p>
                <div class="mt-4 w-full overflow-y-auto" style="height: calc(100% - 1rem - 2.5rem - 1rem - 10rem - 3.5rem - 3rem);">
                    @foreach ($tasks['doing'] as $task)
                        @include('resources/taskCard', [
                            'task' => $task
                        ])
                    @endforeach
                </div>
            </div>
            <div id="panel-done" class="hidden">
                <p class="text-lg h-10 text-gray-800 font-semibold flex items-center justify-start">
                    Done
                    <span class="ml-2 text-gray-400">({{ $tasks['done']->count() }})<span>
                </p>
                <div class="mt-4 w-full overflow-y-auto" style="height: calc(100% - 1rem - 2.5rem - 1rem - 10rem - 3.5rem - 3rem);">
                    @foreach ($tasks['done'] as $task)
                        @include('resources/taskCard', [
                            'task' => $task
                        ])
                    @endforeach
                </div>
            </div>
            <div class="w-full h-10 mt-2 flex justify-center items-center">
                <div class="w-full p-2 flex flex-col items-center justify-center">
                    <div id="option-to-do" class="project-options text-white w-full bg-blue-500 flex justify-center items-center rounded">
                        <i class="far fa-clock"></i>
                        <p class="text-base font-semibold ml-2">
                            To Do
                        </p>
                    </div>
                </div>
                <div class="w-1 h-full flex justify-center items-center">
                    <div class="w-full h-2/3 bg-gray-400"></div>
                </div>
                <div class="w-full p-2 flex flex-col items-center justify-center">
                    <div id="option-doing" class="project-options text-gray-800 w-full flex justify-center items-center rounded">
                        <i class="fas fa-adjust"></i>
                        <p class="text-base font-semibold ml-2">
                            Doing
                        </p>
                    </div>
                </div>
                <div class="w-1 h-full flex justify-center items-center">
                    <div class="w-full h-2/3 bg-gray-400"></div>
                </div>
                <div class="w-full p-2 flex flex-col items-center justify-center">
                    <div id="option-done" class="project-options text-gray-800 w-full flex justify-center items-center rounded">
                        <i class="far fa-check-circle"></i>
                        <p class="text-base font-semibold ml-2">
                            Done
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modals/changeProjectColor', [
        'id' => 'modalChangeProjectColor'
    ])
    @include('modals/changeProjectTitle', [
        'id' => 'modalChangeProjectTitle'
    ])
    @include('modals/newTask', [
        'id' => 'modalNewTask'
    ])
@endsection
@section('scripts')
<script>
    $(".project-options").click(function () {
        $(".project-options").removeClass("bg-blue-500");
        $(".project-options").removeClass("text-white");
        $(".project-options").addClass("text-gray-800");
        $(this).addClass("bg-blue-500");
        $(this).removeClass("text-gray-800");
        $(this).addClass("text-white");
    });

    $("#option-to-do").click(function () {
        $("#panel-to-do").slideDown();
        $("#panel-doing").slideUp();
        $("#panel-done").slideUp();
    });

    $("#option-doing").click(function () {
        $("#panel-to-do").slideUp();
        $("#panel-doing").slideDown();
        $("#panel-done").slideUp();
    });

    $("#option-done").click(function () {
        $("#panel-to-do").slideUp();
        $("#panel-doing").slideUp();
        $("#panel-done").slideDown();
    });

    $("#projectTitleBtn").click(function () {
        let projectTitle = $("#projectTitle").val();
        var formData = new FormData();
        formData.append("title", projectTitle);
        $.ajax({
            url: "{{ route('project.updateTitle', ['id' => $project->id]) }}",
            type: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $("#projectTitleDesc").text(projectTitle);
                $(".modal").slideUp();
            }
        });
    });

    $("#projectColorBtn").click(function () {
        let projectColor = $("#projectColor").val();
        var formData = new FormData();
        formData.append("color", projectColor);
        $.ajax({
            url: "{{ route('project.updateColor', ['id' => $project->id]) }}",
            type: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $("#divChangeColor").css("background-color", projectColor);
                $(".modal").slideUp();
            }
        });
    });
</script>
@endsection