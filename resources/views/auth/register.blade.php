@extends('layout.layout')
@section('title', 'Mebel - login')
@section('content')

<!-- register -->
<div class="contain py-16">
    <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
        <h2 class="text-2xl uppercase font-medium mb-1">Create an account</h2>
        <p class="text-gray-600 mb-6 text-sm">
            Register for new cosutumer
        </p>
        <form action="{{ route('register_process') }}" method="post" autocomplete="off">
            @csrf

            <div class="space-y-2">
                <div>
                    <label for="name" class="text-gray-600 mb-2 block">Full Name</label>
                    @error('name')
                        <label for="name" class="text-red-600 mb-2 block">{{ $message }}</label>
                    @enderror
                    <input type="text" name="name" id="name"
                           class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded
                           @error('name')
                             border-red-600
                           @enderror
                           focus:ring-0 focus:border-primary placeholder-gray-400"
                           placeholder="fulan fulana"
                           value="{{ old('name') }}"
                    >
                </div>
                <div>
                    <label for="email" class="text-gray-600 mb-2 block">Email address</label>
                    @error('email')
                        <label for="email" class="text-red-600 mb-2 block">{{ $message }}</label>
                    @enderror
                    <input type="email" name="email" id="email"
                           class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded
                           @error('email')
                             border-red-600
                           @enderror
                           focus:ring-0 focus:border-primary placeholder-gray-400"
                           placeholder="youremail.@domain.com"
                           value="{{ old('email') }}"
                    >
                </div>
                <div>
                    <label for="password" class="text-gray-600 mb-2 block">Password</label>
                    @error('password')
                        <label for="password" class="text-red-600 mb-2 block">{{ $message }}</label>
                    @enderror
                    <input type="password" name="password" id="password"
                           class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded
                           @error('password')
                             border-red-600
                           @enderror
                           focus:ring-0 focus:border-primary placeholder-gray-400"
                           placeholder="*******"
                    >
                </div>
                <div>
                    <label for="confirm" class="text-gray-600 mb-2 block">Confirm password</label>
                    <input type="password" name="password_confirmation" id="confirm"
                           class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                           placeholder="*******"
                    >
                </div>
            </div>
            <div class="mt-6">
                <div class="flex items-center">
                    <input type="checkbox" name="aggrement" id="aggrement"
                           class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="aggrement" class="text-gray-600 ml-3 cursor-pointer">I have read and agree to the
                        <a href="#" class="text-primary">terms & conditions</a></label>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit"
                        class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">create
                    account</button>
            </div>
        </form>

        <!-- login with -->
        <div class="mt-6 flex justify-center relative">
            <div class="text-gray-600 uppercase px-3 bg-white z-10 relative">Or signup with</div>
            <div class="absolute left-0 top-3 w-full border-b-2 border-gray-200"></div>
        </div>
        <div class="mt-4 flex gap-4">
            <a href="#"
               class="w-1/2 py-2 text-center text-white bg-blue-800 rounded uppercase font-roboto font-medium text-sm hover:bg-blue-700">facebook</a>
            <a href="#"
               class="w-1/2 py-2 text-center text-white bg-red-600 rounded uppercase font-roboto font-medium text-sm hover:bg-red-500">google</a>
        </div>
        <!-- ./login with -->

        <p class="mt-4 text-center text-gray-600">Already have account?
            <a href="{{ route('login') }}" class="text-primary">Login now</a>
        </p>
    </div>
</div>
<!-- ./register -->

@endsection
