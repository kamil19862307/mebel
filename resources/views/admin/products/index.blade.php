@extends('layout.admin')
@section('title', 'Главная | Mebel Admin')
@section('content')


<!--Grid Form-->

<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Список товаров
            <x-add-button route="admin.products.create">
                Добавить товар
            </x-add-button>

           <x-alertMessage></x-alertMessage>

        </div>
        <div class="p-3">
            <table class="table-responsive w-full rounded">
                <thead>
                <tr>
                    <th class="border w-1/8 px-4 py-2">Id</th>
                    <th class="border w-1/4 px-4 py-2">Product Name</th>
                    <th class="border w-1/6 px-4 py-2">Category</th>
                    <th class="border w-1/6 px-4 py-2">Color</th>
                    <th class="border w-1/7 px-4 py-2">Price</th>
                    <th class="border w-1/7 px-4 py-2">Status</th>
                    <th class="border w-1/5 px-4 py-2">Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)

                    <tr>
                        <td class="border px-4 py-2">{{ $product->id }}</td>
                        <td class="border px-4 py-2">{{ $product->name }}</td>
                        <td class="border px-4 py-2">{{ $product->category }}</td>
                        @foreach($colors as $color)
                            @if($product->color_id == $color->id)
                                <td class="border px-4 py-2">{{ $color->name }}</td>
                            @endif
                        @endforeach
                        <td class="border px-4 py-2">{{ $product->price }} $</td>
                        <td class="border px-4 py-2">

                            @if($product->active == 1)
                                <i class="fas fa-check text-green-500 mx-2"></i>
                            @else
                                <i class="fas fa-times text-red-500 mx-2"></i>
                            @endif

                        </td>
                        <td class="border px-4 py-2">
                            <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                <i class="fas fa-eye"></i></a>

                            <a href="{{ route('admin.products.edit', $product->id) }}"
                               class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                <i class="fas fa-edit"></i></a>

                            {{--Удаление--}}
                            <button data-modal='toppedModal{{ $product->id }}' class="modal-trigger bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                <i class="fas fa-trash"></i>
                            </button>

                            <!-- Topped Destroy Modal -->
                            <div id='toppedModal{{ $product->id }}' class="modal-wrapper">
                                <div class="overlay close-modal"></div>
                                <div class="modal">
                                    <div class="modal-content shadow-lg p-5">
                                        <div class="border-b p-2 pb-3 pt-0 mb-4">
                                            <div class="flex justify-between items-center">
                                                Требуется подтверждение
                                                <span class='close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200'>
                                                    <i class="fas fa-times text-gray-700"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Modal content -->
                                        <p>
                                            Удалить "{{ $product->name }}" из таблицы?
                                        </p>
                                        <div class="mt-5">
                                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class='bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded'> Да </button>
                                            <span class='close-modal cursor-pointer bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 rounded'> Нет </span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>

                @endforeach
                <tr>
                    <td colspan="7" class="border px-4 py-2"> {{ $products->links() }} </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--/Grid Form-->





@endsection
