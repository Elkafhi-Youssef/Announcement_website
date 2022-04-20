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
    <section class="    relative">
        <section class=" h-52 jobs-banner defaults  flex justify-center items-center text-6xl font-bold text-white"  style="background-image: url('https://cms.jibecdn.com/prod/indeed/assets/JOBS-BANNER-BG-IMG-en-us-1634642573815.svg');">
            <div class="jobs-banner_content">
              <h1 >
                Available jobs
              </h1>
            </div>
          </section>
        <div
            class=" max-w-2xl   mx-auto bg-white h-20 absolute top-40 left-2/4 -translate-x-1/2 ml-3  rounded-xl px-4  flex flex-col justify-center sm:flex-row sm:items-center md:justify-between shadow-lg">
            <div class=" flex flex-row justify-center h-12">

                <div
                    class="  w-80 flex appearance-none border-2 border-sky-500 rounded-xl p-1   mt-0 sm:max-w-screen-sm text-stone-900">
                    <input type="text"
                        class="bg-transparent px-4 py-2 w-64 border-none focus:border-none focus:outline-none "
                        placeholder="Search for ...">
                    <button class="flex items-center justify-center px-5">
                        <a href="{{ route('login') }}">
                            <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                            </path>
                        </svg>
                    </a>
                    </button>
                </div>
            </div>
            <div class="   flex justify-center h-12 ">

                <button
                    class="px-4 py-2 mx-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-500 rounded-md hover:bg-sky-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    <a href="{{ route('login') }}">
                        Add Job
                    </a>
                </button>

                <button
                    class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-500 rounded-md hover:bg-sky-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">

                    <a href="{{ route('login') }}">

                        Add Reuest
                    </a>
                </button>
            </div>
        </div>
        @foreach ($offers as $item)


        <div
            class=" border-l-4 mt-14 border-sky-700  flex-col max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex ">
                <!-- component -->
                <div class="p-6">
                    <div class="">
                        {{-- <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Product</span>
                        --}}
                        <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">21 SEP 2015</span>
                        <div class=" flex-row">
                            <a href="{{ route('login') }}"
                                class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform dark:text-white hover:text-gray-600 hover:underline">{{$item['OfferTitle']}}</a>

                        </div>
                        <h2 class=" mx-4 ml-2 mt-3 text-base font-semibold">Salary Range:{{$item['SalaryRange']}}</h2>
                        <div class=" flex mt-4">
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$item['County']}}</h2>
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$item['Remote']}}</h2>
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$item['TimeWork']}}</h2>

                        </div>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{$item['OfferDescription']}}
                        </p>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <button
                                class="flex items-center justify-center w-28 px-2 py-1 text-white transition-colors duration-200 transform  bg-sky-400 hover:bg-sky-600 rounded-md focus:outline-none sm:w-auto sm:mx-1   focus:ring  focus:ring-opacity-40">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <a href="{{ route('login') }}">
                                    <span class="mx-1">
                                        View
                                    </span>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <img class="object-cover w-1/5 h-40"
                    src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    alt="Article">


            </div>
            {{-- <div class=" w-full h-16 pl-3 flex">
                <h2 class=" mx-4 text-lg font-semibold">Remot</h2>
                <h2 class=" mx-4 text-lg font-semibold">Full time</h2>

            </div> --}}


        </div>
        @endforeach



    </section>

    {{-- @include('layouts.detailOffer') --}}
    @include('layouts.footer')
</body>

</html>
