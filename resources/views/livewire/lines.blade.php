<div>
    @if ($errors->any())
        <div class="mb-10 bg-indigo-500 p-5 text-center rounded text-white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @foreach($lines as $index => $line)
        <div wire:key="line-{{ $index }}" class="bg-white p-5 border-b shadow-lg flex">
            <input wire:model="lines.{{ $index }}.name" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                                    placeholder-gray-500 text-gray-900 rounded focus:outline-none
                                    focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ $line["name"] }}">

            @if(count($lines) > 1)
                <a href="#" wire:click="delete({{ $index }})" class="ml-5 items-center justify-center px-4 py-2 border border-transparent rounded-b shadow-sm text-sm font-medium text-red-600 bg-white hover:bg-red-50">
                    @lang('ui.delete')
                </a>
            @endif
        </div>
    @endforeach

    <a href="#" wire:click="add" class="flex items-center justify-center px-4 py-2 border border-transparent rounded-b shadow-sm text-sm font-medium text-indigo-600 bg-white hover:bg-indigo-50">
        @lang('ui.add')
    </a>
</div>