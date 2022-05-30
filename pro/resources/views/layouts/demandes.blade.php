
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
              <h1 class=" text-2xl md:text-5xl " >
                Available requests
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
            </div>
            <div class=" mt-3 sm:mt-0 flex justify-center h-12 ">
                <button
                    class="px-2 py-1 mx-4 w-fit font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-500 rounded-md hover:bg-sky-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    <a class=" text-sm" href="{{ route('demandes.create') }}">
                        Add Request
                    </a>
                </button>

                <button
                    class="px-2 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-500 rounded-md hover:bg-sky-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">

                    <a class=" text-sm" href="#">

                        Update Reuest
                    </a>
                </button>
            </div>
        </div>



        @foreach ($demandes as $item)
        <div
        class="   border-l-4 mt-14  border-sky-700  flex-col max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md ">
        {{$item['user']['name']}}
            <div class="flex    mb-4 flex-wrap-reverse  sm:flex-nowrap relative justify-center">
                <!-- component -->
                <div class="p-6 w-full sm:w-3/4">
                    @if ($item['user_id'] == auth()->user()->id)

                    <div class=" absolute top-0 left-0 ">

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
                                    <form action="{{route('demandes.destroy',$item['id'])}}" method="post">
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
                            {{-- href="{{ route('demandes.show', ['offer' => $item['id']]) }}" --}}
                            <a

                                class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform   hover:underline">{{$item['Job']}} </a>

                        </div>
                        {{-- <h2 class=" mx-4 ml-2 mt-3 text-base font-semibold">Salary Range:{{$item['SalaryRange']}}</h2> --}}
                        <div class=" flex mt-4">
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">Age : {{$item['Age']}}</h2>
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$item['Country']}}</h2>
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$item['City']}}</h2>

                        </div>
                        <div class=" flex ">

                            <p class="mt-2 text-sm   text-gray-600 dark:text-gray-400">
                                <span class=" text-xl text-black font-bold">Skills:</span>
                                {{$item['Skills']}}
                             </p>

                        </div>

                        <p class="mt-2 text-sm   text-gray-600 dark:text-gray-400">
                            {{$item['Biographie']}}
                        </p>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <button  id="ember1550" class="flex items-center justify-center w-28 px-2 py-1 text-white transition-colors duration-200 transform  bg-sky-400 hover:bg-sky-600 rounded-md focus:outline-none sm:w-auto sm:mx-1   focus:ring  focus:ring-opacity-40" role="link">  <li-icon aria-hidden="true" type="link-external" class="artdeco-button__icon" size="small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" data-supported-dps="16x16" fill="currentColor" class="mercado-match" width="16" height="16" focusable="false">
                                <path d="M15 1v6h-2V4.41L7.41 10 6 8.59 11.59 3H9V1zm-4 10a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1h2V3H5a3 3 0 00-3 3v5a3 3 0 003 3h5a3 3 0 003-3V9h-2z"></path>
                              </svg></li-icon>

                              <span class="artdeco-button__text">
                                  Apply
                              </span></button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        @endforeach
        <div class=" mt-2">


        </div>


    </section>



    {{-- @include('layouts.detailOffer') --}}
    @include('layouts.footer')
</body>

</html>
