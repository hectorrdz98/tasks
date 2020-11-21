<a href="{{ route('project.home', $project->id) }}" class="w-full bg-blue-100 rounded mb-4 flex justify-start items-center">
    <div class="w-2 h-12 rounded" style="background-color: {{ $project->color }}"></div>
    <div class="flex justify-start items-center p-4">
        <i class="fas fa-file-alt text-2xl text-gray-700"></i>
        <div class="ml-4">
            <p class="text-base text-gray-700 font-semibold">
                {{ $project->title }}
            </p>
            <p class="text-xs text-gray-600 -mt-1">
                Missing: {{ \App\Models\Task::where('project', $project->id)
                                ->whereIn('status', [0, 1])->count() }} tasks
            </p>
        </div>
    </div>
</a>