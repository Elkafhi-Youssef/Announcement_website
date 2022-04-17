<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class=" bg-slate-100">
   @include('layouts.navBar')

  {{-- @include('layouts.body') --}}

<section>
    <div class=" container border border-red-400 h-screen">
        <div class=" border border-red-400 w-9/12 mx-auto mt-12 flex justify-around ">

                <div  class=" border border-red-400">
                    {{-- <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Product</span>
                    --}}
                    <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">21 SEP 2015</span>
                    <div class=" flex-row">
                        <h3
                            class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">Looking
                            for a Full stack dev</h3>

                    </div>
                    <h2 class=" mx-4 ml-2 mt-3 text-base font-semibold">salary:1000$-1500$</h2>
                    <div class=" flex mt-4">
                        <h2 class=" mx-4 ml-2 text-sm font-semibold">USA</h2>
                        <h2 class=" mx-4 ml-2 text-sm font-semibold">New York</h2>
                    </div>
                    <button class="flex items-center justify-center w-full px-2 py-1 text-white transition-colors duration-200 transform bg-gray-200 bg-sky-400 hover:bg-sky-600 rounded-md focus:outline-none sm:w-auto sm:mx-1   focus:ring  focus:ring-opacity-40">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="mx-1">
                            View
                        </span>
                    </button>
                </div>
                <div class=" ml-14 border border-red-400">
                    <img class="object-cover b h-40"
                src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                alt="Article">
                </div>


        </div>
    </div>
</section>
    <!-- component -->


    {{-- @include('layouts.footer') --}}
</body>

</html>
