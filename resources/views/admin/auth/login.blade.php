<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <style>
        .login{
            background: url('/storage/images/login-new.jpeg')
        }
    </style>

    @vite([
          'resources/css/admin/all.css',
          'resources/css/admin/styles.css',
    ])
</head>

<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
  <div class="w-full max-w-lg">
    <div class="leading-loose">
      <form method="POST" action="{{ route('admin.login_process') }}" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
        @csrf

        <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
        <div class="mt-2">

            @error('email')
                <label class="block text-sm text-red-600" for="username">{{ $message }}</label>
            @enderror

          <label class="block text-sm text-gray-600" for="username">Email</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="useremail" name="email" type="text" required="" placeholder="Email" aria-label="Email">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password">Password</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="text" required="" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-medium tracking-wider bg-gray-800 rounded" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>

