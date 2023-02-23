@extends('layout.admin')
@section('title', 'Изменить товар | Mebel Admin')
@section('content')


    <!--Grid Form-->

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Добавить товар
            </div>
            <div class="p-3">
                <form method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data" class="w-full">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                   for="grid-first-name">
                                First Name
                            </label>
                            <input name="name" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                   id="grid-first-name" type="text" value="{{ $product->name }}">
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full md:w-1/3 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-active">
                                Активный
                            </label>
                            <div class="relative">
                                <select name="active" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-active">

                                    @foreach ($product->active_arr as $active)
                                        <option value="{{ $active }}" @selected($product->active == $active)>
                                            {{ $active }}
                                        </option>
                                    @endforeach

                                </select>
                                @error('active')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-zip">
                                <p class="text-red-500 text-xs italic">Товар будет доступен для просмотра на сайте, только
                                    если он со статусом "Активный"</p>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-city">
                                Weight
                            </label>
                            <input name="weight" class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                   id="grid-city" type="text" value="{{ $product->weight }}">
                            @error('weight')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-state">
                                Категория
                            </label>
                            <div class="relative">
                                <select name="category" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-state">

                                    @foreach ($product->category_arr as $category)
                                        <option value="{{ $category }}" @selected($product->category == $category)>
                                            {{ $category }}
                                        </option>
                                    @endforeach

                                </select>
                                @error('category')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-zip">
                                Price
                            </label>
                            <input name="price" class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                   id="grid-zip" type="text" value="{{ $product->price }}">
                            @error('price')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-zip">
                                Size
                            </label>
                            <input name="size" class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                   id="grid-zip" type="text" value="{{ $product->size }}">
                            @error('size')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-zip">
                                Material
                            </label>
                            <input name="material" class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                   id="grid-zip" type="text" value="{{ $product->material }}">
                            @error('material')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/3 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-color">
                                Цвет
                            </label>
                            <div class="relative">
                                <select name="color" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-color">

                                    @foreach ($product->color_arr as $color)
                                        <option value="{{ $color['name'] }}" @selected($product->color == $color['name'])>
                                            {{ $color['name'] }}
                                        </option>
                                    @endforeach

                                </select>
                                @error('color')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 md:w-1/1 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-textarea">
                                Description
                            </label>
                            <textarea name="description"
                                      id="grid-textarea"
                                      class="appearance-none block w-full bg-grey-200 text-grey-darker
                                       border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none
                                       focus:bg-white focus:border-grey">{{ $product->description }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-textarea">
                                    Загрузить фото
                                </label>
                                @if(isset($product->image))
                                    <img src="/storage/products/{{ $product->image }}" alt="" class="w-full mb-2"/>
                                @endif
                                <input name="image" type="file">
                                @error('image')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    <div class="p-3">
                        <button type="submit" class="bg-transparent hover:bg-green-500 text-green-dark font-semibold hover:text-white py-2 px-4 border border-green hover:border-transparent rounded">
                            Сохранить
                        </button>

                        <x-resetButton></x-resetButton>

                        <a href="{{ route('admin.products.index') }}">
                            <button type="button" class="bg-transparent hover:bg-red-500 text-red-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
                                Отменить
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/Grid Form-->


@endsection
