<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=x, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Scripts -->

    <title>@yield('title')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>
<body>

  <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-4 dark:bg-gray-800">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
      <a class="flex-none text-xl font-semibold dark:text-white" style="color: #09C269" href="{{route('subscribers.home')}}">Mailer Lite Test</a>
      <div class="flex flex-row items-center gap-5 mt-5 sm:justify-end sm:mt-0 sm:pl-5">
        <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500" href="{{route('subscribers.create')}}">Create Subscriber</a>
      </div>
    </nav>
  </header>
    
    @yield('content')

</body>
</html>