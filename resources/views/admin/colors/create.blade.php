@extends('layout.admin')
@section('title', 'Добавить товар | Mebel Admin')
@section('content')


    <!--Grid Form-->

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Добавить цвет
            </div>
            <div class="p-3">
                <form method="POST" action="{{ route('admin.colors.store') }}" enctype="multipart/form-data" class="w-full">
                    @csrf

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                   for="grid-first-name">
                                Color Name
                            </label>
                            <input name="name" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                   id="grid-first-name" type="text" placeholder="Color">
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="p-3">
                            <button type="submit" class="bg-transparent hover:bg-green-500 text-green-dark font-semibold hover:text-white py-2 px-4 border border-green hover:border-transparent rounded">
                                Сохранить
                            </button>
                            <button type="reset" class="bg-transparent hover:bg-red-500 text-red-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
                                Сбросить
                            </button>
                            <a href="{{ route('admin.colors.index') }}">
                                <button type="button" class="bg-transparent hover:bg-red-500 text-red-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
                                    Отменить
                                </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/Grid Form-->


@endsection
