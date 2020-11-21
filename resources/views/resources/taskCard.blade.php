<a href="{{ route('task.home', [$project->id, $task->id]) }}" class="w-full rounded flex justify-start items-center">
    <div class="w-2/3 flex justify-start items-center">
        @if (\Carbon\Carbon::parse($task->datetime)->diffInDays(\Carbon\Carbon::parse(\Carbon\Carbon::now())) == 0)
            <div class="w-4 h-4 bg-red-600 rounded-full"></div>
        @elseif (\Carbon\Carbon::parse($task->datetime)->diffInDays(\Carbon\Carbon::parse(\Carbon\Carbon::now())) == 1)
            <div class="w-4 h-4 bg-yellow-600 rounded-full"></div>
        @else
            <div class="w-4 h-4 bg-green-600 rounded-full"></div>
        @endif
        <div class="w-full flex flex-col justify-center items-start p-4">
            <p class="text-base leading-4 text-gray-700 font-semibold">
                {{ $task->title }}
            </p>
            <p class="text-xs text-gray-600 mt-1">
                {{ $task->datetime }}
            </p>
        </div>
    </div>
    <div class="overflow-scroll w-1/3">
        <div class="flex w-max">
            @foreach (\App\Models\TaskLabel::where('project', $task->id)->get() as $taskLabel)
                <div class="h-8 w-8 flex justify-center items-center bg-black bg-opacity-10 rounded-xl mr-2">
                    <i class="text-sm {{ \App\Models\Label::find($taskLabel->label)->value }} text-gray-800"></i>
                </div>
            @endforeach
        </div>
    </div>
</a>