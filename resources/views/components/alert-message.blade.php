@if(session()->has('alertMessage'))

    <div class="w-1/2 flex justify-between text-{{ session('alertColor') }}-100 shadow-inner rounded p-3 my-2 bg-{{ session('alertColor') }}-300">
        <p class="self-center">
            {{ session('alertMessage') }}
        </p>
        <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
    </div>

@endif
