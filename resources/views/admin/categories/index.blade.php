@extends('layout.admin')
@section('title', 'Категории | Mebel Admin')
@section('content')

    <!--Categories form-->
    <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Цвета
            <x-add-button route="admin.categories.create">
                Добавить категорию
            </x-add-button>

            <x-alertMessage></x-alertMessage>

        </div>
        <div class="p-3">
            {{-- Вывод и быстрое редактирование имеющихся категорий--}}
            <livewire:category-inline-editing />

        </div>
    </div>
    <!--/Categories form-->

@endsection
