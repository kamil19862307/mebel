{{--@foreach ($colors as $color)--}}
{{--    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">--}}

{{--            @if($colorEditing && $colorEditing->id == $color->id)--}}
{{--                <input wire:model.defer="colorEditing.name" autofocus--}}
{{--                class="appearance-none bg-transparent border-none w-full text-gray-600 mr-3 py-1 px-2 lineHeight-tight focus:outline-none">--}}
{{--                @error('colorEditing.name')--}}
{{--                    <span class="text-red-500">--}}
{{--                        {{ $message }}--}}
{{--                    </span>--}}
{{--                @enderror--}}
{{--                @else--}}
{{--                    <input placeholder="{{ $color->name }}"--}}
{{--                        class="appearance-none bg-transparent border-none w-full text-gray-600 mr-3 py-1 px-2 lineHeight-tight focus:outline-none">--}}
{{--                @endif--}}


{{--            @if($colorEditing && $colorEditing->id == $color->id)--}}
{{--                <a wire:click="save"--}}
{{--                   class="cursor-pointer flex-shrink-0 bg-green-500 hover:bg-green-700 border-green-500 hover:border-white text-sm border-4 text-white py-1 px-2 mx-2 rounded">--}}
{{--                    Сохранить--}}
{{--                </a>--}}
{{--            @else--}}
{{--                <a wire:click="edit({{ $color->id }})"--}}
{{--                    class="cursor-pointer flex-shrink-0 bg-green-500 hover:bg-green-700 border-green-500 hover:border-white text-sm border-4 text-white py-1 px-2 mx-2 rounded">--}}
{{--                    Редактировать--}}
{{--                </a>--}}

{{--                <button data-modal='colorToppedModal{{ $color->id }}' class="modal-trigger flex-shrink-0 bg-red-500 hover:bg-red-700 border-red-500 hover:border-white text-sm border-4 text-white py-1 px-2 mx-2 rounded"--}}
{{--                        type="button">--}}
{{--                    Удалить--}}
{{--                </button>--}}
{{--            @endif--}}
{{--    </div>--}}
{{--@endforeach--}}

{{--<div class="p-5">--}}
{{--    {{ $colors->links() }}--}}
{{--</div>--}}


<div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Наименование цвета
                            </th>
                            <th scope="col" class="relative px-6 py-3"></th>
                        </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($colors as $color)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($colorEditing && $colorEditing->id == $color->id)
                                        <input wire:model.defer="colorEditing.name" autofocus
                                           class="mt-5 appearance-none bg-transparent border-none w-full text-gray-600 mr-3 py-1 px-2 lineHeight-tight focus:outline-none">

                                        @error('colorEditing.name')
                                            <span class="text-red-500">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    @else
                                        {{ $color->name }}
                                    @endif
                                </td>

                                <td class="px-6 py-4 items-center whitespace-nowrap text-right text-sm font-medium">
                                    @if($colorEditing && $colorEditing->id == $color->id)
                                        <a wire:click="save"
                                           class="cursor-pointer flex-shrink-0 bg-green-500 hover:bg-green-700 border-green-500 hover:border-white text-sm border-4 text-white py-1 px-2 mx-2 rounded">
                                            Сохранить
                                        </a>
                                    @else
                                        <a wire:click="edit({{ $color->id }})"
                                           class="cursor-pointer flex-shrink-0 bg-green-500 hover:bg-green-700 border-green-500 hover:border-white text-sm border-4 text-white py-1 px-2 mx-2 rounded">
                                            Редактировать
                                        </a>

                                        <button data-modal='colorToppedModal{{ $color->id }}'
                                                class="modal-trigger flex-shrink-0 bg-red-500 hover:bg-red-700 border-red-500 hover:border-white text-sm border-4 text-white py-1 px-2 mx-2 rounded"
                                                type="button">
                                            Удалить
                                        </button>
                                        <!-- Topped Destroy Modal -->
                                        <div id='colorToppedModal{{ $color->id }}' class="modal-wrapper">
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
                                                    <div class="delete">
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
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="p-5">
                        {{ $colors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
