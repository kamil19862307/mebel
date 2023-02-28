@extends('layout.admin')
@section('title', 'Цвета | Mebel Admin')
@section('content')

    <!--Colors form-->
    <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Цвета
            <x-add-button route="admin.colors.create">
                Добавить цвет
            </x-add-button>

            <x-alertMessage></x-alertMessage>

        </div>
        <div class="p-3">
            {{-- Вывод и быстрое редактирование имеющихся цветов--}}
            <livewire:inline-editing />

        </div>
    </div>
    <!--/Colors form-->

@endsection
