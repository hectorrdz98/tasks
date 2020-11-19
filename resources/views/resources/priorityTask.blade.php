<div class="w-60 h-60 mr-4 p-2">
    <div class="{{ $priority ? 'bg-blue-500' : 'bg-white' }} w-full h-full rounded-2xl">
        <div class="w-full bg-red-600 h-6 rounded-t-2xl"></div>
        <div class="p-4 h-auto">
            <div class="overflow-scroll w-full">
                <div class="flex w-max">
                    <div class="h-16 w-16 flex justify-center items-center 
                        bg-black {{ $priority ? 'bg-opacity-25' : 'bg-opacity-10'}} rounded-xl mr-4">
                        <i class="fas fa-plane-departure {{ $priority ? 'text-blue-300' : 'text-gray-800' }}"></i>
                    </div>
                    <div class="h-16 w-16 flex justify-center items-center 
                        bg-black {{ $priority ? 'bg-opacity-25' : 'bg-opacity-10'}} rounded-xl mr-4">
                        <i class="text-xl fas fa-thumbtack {{ $priority ? 'text-blue-300' : 'text-gray-800' }}"></i>
                    </div>
                    <div class="h-16 w-16 flex justify-center items-center 
                        bg-black {{ $priority ? 'bg-opacity-25' : 'bg-opacity-10'}} rounded-xl mr-4">
                        <i class="text-xl fas fa-theater-masks {{ $priority ? 'text-blue-300' : 'text-gray-800' }}"></i>
                    </div>
                    <div class="h-16 w-16 flex justify-center items-center 
                        bg-black {{ $priority ? 'bg-opacity-25' : 'bg-opacity-10'}} rounded-xl mr-4">
                        <i class="text-xl fas fa-drumstick-bite {{ $priority ? 'text-blue-300' : 'text-gray-800' }}"></i>
                    </div>
                </div>
            </div>
            <div class="overflow-scroll w-full mt-4">
                <div class="flex w-max">
                    <h1 class="{{ $priority ? 'text-white' : 'text-gray-800 font-semibold' }} text-xl">
                        Finish Let's Task App
                    </h1>
                </div>
            </div>
            <div class="overflow-scroll w-full">
                <div class="flex w-max">
                    <p class="{{ $priority ? 'text-white' : 'text-gray-800' }} text-sm opacity-50">
                        Mobile Programming
                    </p>
                </div>
            </div>
            <div class="mt-2">
                <p class="{{ $priority ? 'text-white' : 'text-gray-800' }} text-xs opacity-75">
                    18/11/2020 22:58
                </p>
                <div class="w-full h-1 {{ $priority ? 'bg-white' : 'bg-gray-200' }} rounded mt-1">
                    <div class="w-3/4 h-full {{ $priority ? 'bg-yellow-300' : 'bg-green-500' }}"></div>
                </div>
            </div>
        </div>
    </div>
</div>