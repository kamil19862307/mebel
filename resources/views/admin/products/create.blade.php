@extends('layout.admin')
@section('title', 'Добавить товар | Mebel Admin')
@section('content')

    <!--Grid Form-->

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Добавить товар
            </div>
            <div class="p-3">
                <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data"
                      class="w-full">
                    @csrf

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                   for="grid-first-name">
                                First Name
                            </label>
                            <input name="name"
                                   value="{{ old('name') }}"
                                   class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                   id="grid-first-name" type="text" placeholder="Name">
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
                                <select name="active"
                                        class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-active">
                                    <option value="1">Да</option>
                                    <option value="0">Нет</option>
                                </select>
                                @error('active')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-color">
                                Цвет
                            </label>
                            <div class="relative">
                                <select name="color_id"
                                        class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-color">

                                    @foreach($colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                    @endforeach

                                </select>
                                @error('color_id')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-city">
                                Weight
                            </label>
                            <input name="weight"
                                   value="{{ old('weight') }}"
                                   class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                   id="grid-city" type="text" placeholder="Weight">
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
                                <select name="category_id"
                                        class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-category">

                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-zip">
                                Price
                            </label>
                            <input name="price"
                                   value="{{ old('price') }}"
                                   class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                   id="grid-zip" type="text" placeholder="Price">
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
                            <input name="size"
                                   value="{{ old('size') }}"
                                   class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                   id="grid-zip" type="text" placeholder="Size">
                            @error('size')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-zip">
                                Material
                            </label>
                            <input name="material"
                                   value="{{ old('material') }}"
                                   class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                   id="grid-zip" type="text" placeholder="material">
                            @error('material')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-state">
                                Бренд
                            </label>
                            <div class="relative">
                                <select name="brand_id"
                                        class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-brand">

                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach

                                </select>
                                @error('brand_id')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
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
                                       focus:bg-white focus:border-grey">{{ old('description') }}</textarea>
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
                            <img src="/storage/images/products/product1.jpg" alt="" class="w-full mb-2"/>
                            <input name="image" type="file">
                            @error('image')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="p-3">
                        <button type="submit"
                                class="bg-transparent hover:bg-green-500 text-green-dark font-semibold hover:text-white py-2 px-4 border border-green hover:border-transparent rounded">
                            Сохранить
                        </button>
                        <button type="reset"
                                class="bg-transparent hover:bg-red-500 text-red-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
                            Сбросить
                        </button>
                        <a href="{{ route('admin.products.index') }}">
                            <button type="button"
                                    class="bg-transparent hover:bg-red-500 text-red-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
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
