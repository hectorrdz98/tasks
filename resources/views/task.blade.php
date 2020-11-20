@extends('layouts.master')
@section('content')
    @include('layouts.navbar', [
        'return' => route('project.home', 1)
    ])
    <div class="bg-blue-500 pt-14 rounded-b-3xl shadow-2xl">
        <div class="p-4 pt-10 flex justify-center items-center">
            <div class="w-2/3 h-full flex flex-col justify-center items-start">
                <h1 class="text-2xl text-white font-semibold overflow-y-auto leading-6">
                    Hacer práctica #5 PL Procedures
                </h1>
                <div class="flex justify-start items-center mt-2">
                    <div id="divChangeColor" class="bg-red-600 w-5 h-5 rounded"></div>
                    <p class="text-white ml-2">Taller de BD</p>
                </div>
            </div>
            <div class="w-1/3 flex justify-end items-center text-white text-3xl">
                <i class="modal-open fas fa-edit mx-4" modal="modalNewTask"></i>
            </div>
        </div>
    </div>
    <div class="mt-4 p-4">
        <div class="w-full flex justify-center items-start">
            <div class="w-2/3">
                <p class="text-sm text-gray-800 font-semibold">
                    Days Remaining
                </p>
                <h3 class="text-3xl text-gray-800 font-semibold">
                    2 days
                </h3>
                <p class="text-xs text-gray-500 mt-2">
                    18/11/2020 22:58
                </p>
            </div>
            <div class="w-1/3 h-full flex justify-center items-center p-4">
                <div class="w-14 h-14 bg-red-600 rounded-xl flex justify-center items-center">
                    <i class="far fa-clock text-white text-2xl"></i>
                </div>
                <!--
                <div class="w-14 h-14 bg-red-600 rounded-xl flex justify-center items-center">
                    <i class="far fa-clock text-white text-2xl"></i>
                </div>
                <div class="w-14 h-14 bg-yellow-600 rounded-xl flex justify-center items-center">
                    <i class="fas fa-adjust text-white text-2xl"></i>
                </div>
                <div class="w-14 h-14 bg-green-600 rounded-xl flex justify-center items-center">
                    <i class="far fa-check-circle text-white text-2xl"></i>
                </div>
                -->
            </div>
        </div>
        <div class="mt-4">
            <p class="text-sm text-gray-800 font-semibold">
                Description
            </p>
            <p class="text-sm text-gray-800 leading-5">
                This is a nice task description! This is a nice task description! This is a nice task description!This is a nice task description!This is a nice task description!This is a nice task description!This is a nice task description!This is a nice task description!This is a nice task description!This is a nice task description!This is a nice task description!
            </p>
        </div>
        <div class="mt-4">
            <p class="text-sm text-gray-800 font-semibold">
                Labels
            </p>
            <div class="flex justify-start items-start flex-wrap">
                @for ($i = 0; $i < 20; $i++)
                    <div class="h-8 w-8 my-1 flex justify-center items-center bg-black bg-opacity-10 rounded-xl mr-2">
                        <i class="text-sm fas fa-plane-departure text-gray-800"></i>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    
</script>
@endsection