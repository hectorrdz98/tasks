@extends('layouts.master')
@section('content')
    <div class="bg-blue-50 h-full">
        @include('layouts.navbar')
        <div class="p-4">
            <h1 class="text-2xl text-gray-400 font-normal">Hello,</h1>
            <h1 class="text-2xl text-gray-800 font-semibold">Héctor Rodríguez</h1>
        </div>
        <div class="overflow-scroll w-full p-4">
            <div class="flex w-max">
                <div class="w-60 h-60 mr-4 p-2">
                    <div class="bg-blue-500 w-full h-full rounded-2xl">
                        <div class="w-full bg-red-600 h-6 rounded-t-2xl"></div>
                        <div class="p-4 h-auto">
                            <div class="overflow-scroll w-full">
                                <div class="flex w-max">
                                    <div class="h-16 w-16 flex justify-center items-center 
                                        bg-black bg-opacity-25 rounded-xl mr-4">
                                        <i class="fas fa-plane-departure text-blue-300"></i>
                                    </div>
                                    <div class="h-16 w-16 flex justify-center items-center 
                                        bg-black bg-opacity-25 rounded-xl mr-4">
                                        <i class="text-xl fas fa-thumbtack text-blue-300"></i>
                                    </div>
                                    <div class="h-16 w-16 flex justify-center items-center 
                                        bg-black bg-opacity-25 rounded-xl mr-4">
                                        <i class="text-xl fas fa-theater-masks text-blue-300"></i>
                                    </div>
                                    <div class="h-16 w-16 flex justify-center items-center 
                                        bg-black bg-opacity-25 rounded-xl mr-4">
                                        <i class="text-xl fas fa-drumstick-bite text-blue-300"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-scroll w-full mt-4">
                                <div class="flex w-max">
                                    <h1 class="text-white text-xl">
                                        Finish Let's Task App
                                    </h1>
                                </div>
                            </div>
                            <div class="overflow-scroll w-full">
                                <div class="flex w-max">
                                    <p class="text-white text-sm opacity-50">
                                        Mobile Programming
                                    </p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="text-white text-xs opacity-75">
                                    18/11/2020 22:58
                                </p>
                                <div class="w-full h-1 bg-white rounded mt-1">
                                    <div class="w-3/4 h-full bg-yellow-300"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-60 h-60 mr-4 p-2">
                    <div class="bg-white w-full h-full rounded-2xl">
                        <div class="w-full bg-green-600 h-6 rounded-t-2xl"></div>
                        <div class="p-4 h-auto">
                            <div class="overflow-scroll w-full">
                                <div class="flex w-max">
                                    <div class="h-16 w-16 flex justify-center items-center 
                                        bg-black bg-opacity-10 rounded-xl mr-4">
                                        <i class="fas fa-plane-departure text-gray-800"></i>
                                    </div>
                                    <div class="h-16 w-16 flex justify-center items-center 
                                        bg-black bg-opacity-10 rounded-xl mr-4">
                                        <i class="text-xl fas fa-thumbtack text-gray-800"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-scroll w-full mt-4">
                                <div class="flex w-max">
                                    <h1 class="text-gray-800 text-xl font-semibold">
                                        Finish Let's Task App
                                    </h1>
                                </div>
                            </div>
                            <div class="overflow-scroll w-full">
                                <div class="flex w-max">
                                    <p class="text-gray-800 text-sm opacity-50">
                                        Mobile Programming
                                    </p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="text-gray-800 text-xs opacity-75">
                                    18/11/2020 22:58
                                </p>
                                <div class="w-full h-1 bg-gray-200 rounded mt-1">
                                    <div class="w-3/4 h-full bg-green-500"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection