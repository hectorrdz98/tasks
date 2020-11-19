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
                @include('resources/priorityTask', [
                    'priority' => 1
                ])
                @include('resources/priorityTask', [
                    'priority' => 0
                ])
            </div>
        </div>
    </div>
@endsection