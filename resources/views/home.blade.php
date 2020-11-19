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
                    <div class="bg-blue-500 w-full h-full rounded-2xl"></div>
                </div>
                <div class="w-60 h-60 mr-4 p-2">
                    <div class="bg-white w-full h-full rounded-2xl"></div>
                </div>
                <div class="w-60 h-60 mr-4 p-2">
                    <div class="bg-blue-500 w-full h-full rounded-2xl"></div>
                </div>
            </div>
        </div>
    </div>
@endsection