@extends('layouts.app')

@section('header')
    <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight w-auto">{{ __($title) }}</h2>
        <a class="text-sm font-medium text-gray-700 hover:text-gray-900" href="{!! route('articles') !!}">Back</a>
    </div>
@endsection

@section('body')
<div class="flex flex-row min-h-screen bg-gray-100 text-gray-800">
    <div class="py-12 flex-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @yield('content')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
