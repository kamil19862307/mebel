@extends('layout.admin')
@section('title', 'Главная | Mebel Admin')
@section('content')


    <!--Underline form-->
    <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Color add or delete
            <x-add-button route="admin.colors.create">
                Добавить цвет
            </x-add-button>

            <x-alertMessage></x-alertMessage>

        </div>
        <div class="p-3">
            <form class="w-full">
                @foreach($colors as $color)
                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                        <input class="appearance-none bg-transparent border-none w-full text-gray-600 mr-3 py-1 px-2 lineHeight-tight focus:outline-none"
                               type="text" value="{{ $color->name }}" aria-label="Full name">
                        <a href="{{ route('admin.colors.edit', $color->id) }}">
                            <button class="flex-shrink-0 bg-green-500 hover:bg-green-700 border-green-500 hover:border-white text-sm border-4 text-white py-1 px-2 mx-2 rounded"
                                    type="button">
                                Изменить
                            </button>
                        </a>
                        <button data-modal='toppedModal{{ $color->id }}' class="modal-trigger flex-shrink-0 bg-red-500 hover:bg-red-700 border-red-500 hover:border-white text-sm border-4 text-white py-1 px-2 mx-2 rounded"
                                type="button">
                            Удалить
                        </button>
                        <!-- Topped Destroy Modal -->
                            <div id='toppedModal{{ $color->id }}' class="modal-wrapper">
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
                                    Удалить "{{ $color->name }}" из таблицы?
                                </p>
                                <div class="mt-5">
                                    <form action="{{ route('admin.colors.destroy', $color->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class='bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded'> Да </button>
                                        <span class='close-modal cursor-pointer bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 rounded'> Нет </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                @endforeach
            </form>
        </div>
    </div>
    <!--/Underline form-->





@endsection
