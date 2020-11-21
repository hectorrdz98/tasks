<nav class="fixed w-full bg-blue-50 top-0">
    <div id="sideMenuContainer" class="fixed bg-white w-3/5 h-full transition-all duration-500">
        <h1 class="p-4 flex justify-center items-center border-b border-gray-300 border-opacity-60">
            <i class="fas fa-tasks text-xl text-gray-800"></i>
            <span class="text-xl text-gray-800 font-bold ml-2">
                Let's
            </span>
            <span class="text-xl text-gray-800 font-semibold ml-1">
                Task!
            </span>
        </h1>
        <div class="flex flex-col items-center justify-center w-full mt-4">
            <a href="{{ route('home') }}"
                class="flex justify-start items-center w-full px-4 py-2">
                <i class="fas fa-home text-base text-gray-600"></i>
                <p class="text-base text-gray-600 ml-4 font-semibold">
                    Home
                </p>
            </a>
            <div class="flex justify-start items-center w-full px-4 py-2">
                <i class="far fa-question-circle text-base text-gray-600"></i>
                <p class="text-base text-gray-600 ml-4 font-semibold">
                    About
                </p>
            </div>
            <a href="{{ route('logout') }}" class="flex justify-start items-center w-full px-4 py-2">
                <i class="fas fa-sign-out-alt text-base text-gray-600"></i>
                <p class="text-base text-gray-600 ml-4 font-semibold">
                    Logout
                </p>
            </a>
        </div>
    </div>
    <div id="sideMenuBlack" class="fixed bg-black w-full h-full bg-opacity-60 transition-all duration-500"></div>
    <div class="flex justify-between items-center w-full p-4">
        @isset($return)
            <a href="{{ $return }}" class="flex justify-center items-center w-6 h-6">
                <i id="returnBtn" class="text-3xl fas fa-angle-left text-gray-800"></i>
            </a>
        @else
            <div id="sideMenuBtn" class="flex flex-col items-start justify-around w-6 h-6">
                <div class="w-full h-1 bg-gray-800 rounded"></div>
                <div class="w-full h-1 bg-gray-800 rounded"></div>
                <div id="sideMenuBarSemi" class="w-1/2 h-1 bg-gray-800 rounded transition-all duration-200"></div>
            </div>
        @endisset
        <div>
            <i class="text-xl fas fa-bell text-gray-400"></i>
        </div>
    </div>
</nav>