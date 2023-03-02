@extends('layout.admin')
@section('title', 'Бренды | Mebel Admin')
@section('content')

    <!--Brands form-->
    <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Бренды
            <x-add-button route="admin.brands.create">
                Добавить бренд
            </x-add-button>

            <x-alertMessage></x-alertMessage>

        </div>
        <div class="p-3">
            {{-- Вывод и быстрое редактирование имеющихся брендов--}}
            <livewire:brand-inline-editing />

        </div>
    </div>
    <!--/Brands form-->

@endsection
