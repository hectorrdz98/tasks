@extends('layouts.master')
@section('content')
    @include('layouts.navbar')
    <div class="bg-blue-500 h-max min-h-full pt-14">
        <div class="p-4 h-40 flex flex-col justify-center items-start">
            <h1 class="text-3xl text-white font-semibold">
                Taller de BD
            </h1>
            <div class="flex justify-start items-center">
                <div class="bg-red-600 w-5 h-5 rounded"></div>
                <p class="text-white ml-2">2 / 40</p>
            </div>
        </div>
        <div class="p-4 pb-0 bg-blue-50 rounded-t-3xl shadow-2xl">
            <p class="text-lg h-10 text-gray-800 font-semibold flex items-center justify-start">
                To Do 
                <span class="ml-2 text-gray-400">(30)<span>
            </p>
            <div class="mt-4 w-full overflow-y-auto" style="height: calc(100% - 1rem - 2.5rem - 1rem - 10rem - 3.5rem - 3rem);">
                @for ($i = 0; $i < 5; $i++)
                    @include('resources/taskCard')
                @endfor
            </div>
            <div class="w-full h-10 mt-2 flex justify-center items-center">
                <div class="w-full p-2 flex flex-col items-center justify-center">
                    <div class="w-full bg-blue-500 flex justify-center items-center rounded">
                        <i class="far fa-clock text-white"></i>
                        <p class="text-base text-white font-semibold ml-2">
                            To Do
                        </p>
                    </div>
                </div>
                <div class="w-1 h-full flex justify-center items-center">
                    <div class="w-full h-2/3 bg-gray-400"></div>
                </div>
                <div class="w-full p-2 flex flex-col items-center justify-center">
                    <div class="w-full flex justify-center items-center rounded">
                        <i class="fas fa-adjust text-gray-800"></i>
                        <p class="text-base text-gray-800 font-semibold ml-2">
                            Doing
                        </p>
                    </div>
                </div>
                <div class="w-1 h-full flex justify-center items-center">
                    <div class="w-full h-2/3 bg-gray-400"></div>
                </div>
                <div class="w-full p-2 flex flex-col items-center justify-center">
                    <div class="w-full flex justify-center items-center rounded">
                        <i class="far fa-check-circle text-gray-800"></i>
                        <p class="text-base text-gray-800 font-semibold ml-2">
                            Done
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection