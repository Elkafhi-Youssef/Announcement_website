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

    @include('layouts.navbar')
    <div class="mt-10 sm:mt-0 mb-6 ">
        <!-- 3 -->
        <div class="mt-5 md:mt-0 md:col-span-2 ">
            <form action="{{ route('demandes.index')}}" method="POST" >
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md ">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-2 gap-4   ">
                            <div class="">
                                <label for="Job" class="block text-sm font-medium text-gray-700">Your Domains</label>
                                <input type="text" name="Job" id="Job" placeholder="looking for ..."
                                    autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm placeholder:text-xs border-gray-300 rounded-md">
                            </div>


                            <div class="">
                                <label for="County" class="block text-sm font-medium text-gray-700">Country</label>
                                <input type="text" name="Country" id="Country" placeholder="County of company"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm placeholder:text-xs border-gray-300 rounded-md">
                            </div>

                            <div class=" ">
                                <label for="City" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" name="City" id="City" placeholder="City" autocomplete="family-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm placeholder:text-xs  border-gray-300 rounded-md">
                            </div>

                            <div class=" ">
                                <label for="Age" class="block text-sm font-medium text-gray-700">Age
                                </label>
                                <input type="number" name="Age" id="Age" placeholder="how old are you?"

                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full  shadow-sm sm:text-sm placeholder:text-xs  border-gray-300 rounded-md">
                            </div>

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="col-span-2 ">
                                <label for="Skills"
                                    class="block text-sm font-medium text-gray-700">Skills</label>
                                    <input type="text" name="Skills" id="Skills"
                                    placeholder="please enter your skills (js,php,css,html,...) "
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full  shadow-sm sm:text-sm placeholder:text-xs  border-gray-300 rounded-md" >


                            </div>
                            <div class=" col-span-2  w-full mt-4">
                                <label for="Biographie" class="block mb-2 text-sm font-medium">Biographie</label>
                                <textarea
                                    class=" block w-full h-20 px-4 py-2  bg-white border rounded-md  focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                    name="Biographie"></textarea>
                            </div>



                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-sky-400 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>
