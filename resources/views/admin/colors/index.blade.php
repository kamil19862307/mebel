@extends('layout.admin')
@section('title', 'Главная | Mebel Admin')
@section('content')


    <!--Underline form-->
    <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Color add or delete
        </div>
        <div class="p-3">
            <form class="w-full">
                @foreach($colors as $color)
                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                        <input class="appearance-none bg-transparent border-none w-full text-gray-600 mr-3 py-1 px-2 lineHeight-tight focus:outline-none"
                               type="text" value="{{ $color->name }}" aria-label="Full name">
                        <button class="flex-shrink-0 bg-green-500 hover:bg-green-700 border-green-500 hover:border-white text-sm border-4 text-white py-1 px-2 rounded"
                                type="button">
                            Удалить
                        </button>
                    </div>
                @endforeach
            </form>
    <x-test></x-test>
        </div>
    </div>
    <!--/Underline form-->





@endsection
