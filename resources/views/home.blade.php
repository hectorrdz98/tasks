@extends('layouts.master')
@section('content')
    @include('layouts.navbar')
    <div class="bg-blue-50 h-max min-h-full pt-14">
        <div class="p-4">
            <h1 class="text-2xl text-gray-400 font-normal">
                Hello,
            </h1>
            <h1 class="text-2xl text-gray-800 font-semibold">
                Héctor Rodríguez
            </h1>
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
        <div class="p-4">
            <p class="text-lg text-gray-400 font-semibold flex items-center justify-start">
                My projects <i class="fas fa-plus-circle ml-2 text-3xl"></i>
            </p>
            <div class="mt-4 w-full">
                @for ($i = 0; $i < 5; $i++)
                    @include('resources/projectCard')
                @endfor
            </div>
        </div>
    </div>
@endsection