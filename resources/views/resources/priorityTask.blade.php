<a href="{{ route('task.home', [$task->project, $task->id]) }}" class="w-60 h-60 mr-4 p-2">
    <div class="{{ $priority ? 'bg-blue-500' : 'bg-white' }} w-full h-full rounded-2xl">
        <div class="w-full h-6 rounded-t-2xl" style="background-color: {{ $task->color }}"></div>
        <div class="p-4 h-auto">
            <div class="overflow-scroll w-full">
                <div class="flex w-max">
                    @foreach (\App\Models\TaskLabel::where('project', $task->id)->get() as $taskLabel)
                        <div class="h-16 w-16 flex justify-center items-center 
                            bg-black {{ $priority ? 'bg-opacity-25' : 'bg-opacity-10'}} rounded-xl mr-4">
                            <i class="text-xl {{ \App\Models\Label::find($taskLabel->label)->value }} {{ $priority ? 'text-blue-300' : 'text-gray-800' }}"></i>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="overflow-scroll w-full mt-4">
                <div class="flex w-max">
                    <h1 class="{{ $priority ? 'text-white' : 'text-gray-800 font-semibold' }} text-xl">
                        {{ $task->title }}
                    </h1>
                </div>
            </div>
            <div class="overflow-scroll w-full">
                <div class="flex w-max">
                    <p class="{{ $priority ? 'text-white' : 'text-gray-800' }} text-sm opacity-50">
                        {{ \App\Models\Project::find($task->project)->title }}
                    </p>
                </div>
            </div>
            <div class="mt-2">
                <p class="{{ $priority ? 'text-white' : 'text-gray-800' }} text-xs opacity-75">
                    {{ $task->datetime }}
                </p>
                <div class="w-full h-1 {{ $priority ? 'bg-white' : 'bg-gray-200' }} rounded mt-1">
                    <div class="h-full {{ $priority ? 'bg-yellow-300' : 'bg-green-500' }}"
                    style="width: {{
                        \Carbon\Carbon::parse($task->datetime)
                                ->diffInMinutes(\Carbon\Carbon::parse(\Carbon\Carbon::now())) * 100 / 
                            \Carbon\Carbon::parse($task->datetime)
                                ->diffInMinutes(\Carbon\Carbon::parse(\Carbon\Carbon::today()))
                    }}%"></div>
                </div>
            </div>
        </div>
    </div>
</a>