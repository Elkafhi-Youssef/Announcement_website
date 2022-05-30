
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

    {{-- @include('layouts.addOffer') --}}
    {{-- @include('layouts.body') --}}
    <section class="    relative">
        @if(Session::has('status'))

        <div class="text-center py-4 lg:px-4 absolute left-0 ">
            <div class="p-2 bg-green-400 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
                <span class="font-semibold mr-2 text-left flex-auto">{{session('status')}}</span>

            </div>
        </div>

    @endif
        <section class=" h-52 mb-28 jobs-banner defaults  flex justify-center items-center text-6xl font-bold text-white"  style="background-image: url('https://cms.jibecdn.com/prod/indeed/assets/JOBS-BANNER-BG-IMG-en-us-1634642573815.svg');">
            <div class="jobs-banner_content">
              <h1 >
                Available jobs
              </h1>
            </div>
         </section>
        <div
            class=" max-w-2xl mb-14  mx-auto bg-white h-32 sm:20 absolute top-40 left-2/4 -translate-x-1/2 ml-3  rounded-xl px-4  flex flex-col justify-center sm:flex-row sm:items-center md:justify-between shadow-lg">
            <div class=" flex flex-row justify-center h-12">

                <form  action="{{ route('offers.search') }}" method="GET">
                <div
                    class="  w-80 flex appearance-none border-2 border-sky-500 rounded-xl p-1   mt-0 sm:max-w-screen-sm text-stone-900">
                        <input  type="text"
                        name="search"

                        class="bg-transparent px-4 py-2 w-64 border-none focus:border-none focus:outline-none "
                        placeholder="Search for ...">
                        <button class="flex items-center justify-center px-5" type="submit">
                                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </button>

                    </div>
                </form>
                {{-- <form action="{{ route('offers.search') }}" method="GET">
                    <input type="text" name="search" required/>
                    <button type="submit">Search</button>
                </form> --}}

            </div>
            <div class=" mt-3 sm:mt-0 flex justify-center h-12 ">
                <button
                    class="px-2 py-1 mx-4 w-fit font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-500 rounded-md hover:bg-sky-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    <a class=" text-sm" href="{{ route('offers.create') }}">
                        Add Offer
                    </a>
                </button>

                <button
                    class="px-2 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-500 rounded-md hover:bg-sky-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">

                    <a class=" text-sm" href="#">

                        Add Reuest
                    </a>
                </button>
            </div>
        </div>


        @foreach ($offers as $item)
        <div
        class="   border-l-4 mt-14  border-sky-700  flex-col max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md ">
                {{$item['user']['name']}}
            <div class="flex    mb-4 flex-wrap-reverse  sm:flex-nowrap relative justify-center">
                <!-- component -->
                <div class="p-6 w-full sm:w-3/4">
                    {{-- {{$item.['user'].['name']}} --}}
                    @if ($item['user_id'] == auth()->user()->id)

                    <div class="  absolute top-0 left-0    ">
                        {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex flex-row items-center w-40 px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 focus:outline-none focus:shadow-outline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg z-40">
                              <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('offers.edit',  $item['id']) }}">Edit{{ $item['id']}}</a>
                                <div @click.away="show = false" class="relative" x-data="{ show: false }">
                                <a @click="show = !show " class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">delete</a>
                                <div x-show="show" x-transition:enter="transition ease-out          duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="  absolute  -top-8 left-40  mt-2 origin-top-right rounded-md w-96 z-50 bg-white shadow-xl h-24">
                                    <div @click="show = !show">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                          </svg>
                                    </div >
                                    <form action="{{route('offers.destroy',$item['id'])}}" method="post">
                                        <h1 class=" text-center w-full">Are you sure you want to delete</h1>
                                       <div class=" flex float-right">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-xl">
                                                Delete
                                            </button>
                                       </div>
                                    </form>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    @endif

                    <div class=" mt-3">

                        <span class="mx-1 text-xs text-gray-600 ">21 SEP 2015</span>
                        <div class=" flex-row">
                            <a href="{{ route('offers.show', ['offer' => $item['id']]) }}"

                                class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform   hover:underline">{{$item['OfferTitle']}}</a>

                        </div>
                        <h2 class=" mx-4 ml-2 mt-3 text-base font-semibold">Salary Range:{{$item['SalaryRange']}}</h2>
                        <div class=" flex mt-4">
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$item['County']}}</h2>
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$item['Remote']}}</h2>
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$item['TimeWork']}}</h2>

                        </div>
                        <p class="mt-2 text-sm   text-gray-600 dark:text-gray-400">{{$item['OfferDescription']}}
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
                                <a href="{{ route('offers.show', ['offer' => $item['id']]) }}">
                                    <span class="mx-1">
                                        View
                                    </span>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <img class="object-cover  sm:w-1/4 md:w-1/4 sm:float-right md:float-right  h-40"

                    src="{{ asset('uploads/companyImage/'.$item['Image'] ) }}"
                    alt="Article">


            </div>



        </div>
        @endforeach
        <div class=" mt-2">

            {{-- {{ $offers->links() }} --}}
        </div>


    </section>



    {{-- @include('layouts.detailOffer') --}}
    @include('layouts.footer')

</body>
</html>
