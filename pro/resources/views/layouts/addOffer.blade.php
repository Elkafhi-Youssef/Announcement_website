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
            <form action="{{ route('offers.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md ">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-3 gap-4 border  ">
                            <div class="">
                                <label for="OfferTitle" class="block text-sm font-medium text-gray-700">Title
                                    offre</label>
                                <input type="text" name="OfferTitle" id="OfferTitle" placeholder="looking for ..."
                                    autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm placeholder:text-xs border-gray-300 rounded-md">
                            </div>

                            <div class=" ">
                                <label for="Experience"
                                    class="block text-sm font-medium text-gray-700">Experience</label>
                                <input type="text" name="Experience" id="Experience" placeholder="Experience requested"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm placeholder:text-xs  border-gray-300 rounded-md">
                            </div>

                            <div class=" ">
                                <label for="SalaryRange	" class="block text-sm font-medium text-gray-700">Salary</label>
                                <input type="text" name="SalaryRange" id="SalaryRange" placeholder="example 1000$-1500$"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full  shadow-sm sm:text-sm placeholder:text-xs  border-gray-300 rounded-md">
                            </div>
                            <div class="">
                                <label for="Remote" class="block text-sm font-medium text-gray-700">Remote</label>
                                <select id="Remote" name="Remote"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="Remote">Remote</option>
                                    <option value="No Remote">No Remote</option>
                                </select>
                            </div>

                            <div class=" ">
                                <label for="TimeWork" class="block text-sm font-medium text-gray-700">Work time</label>
                                <input type="text" name="TimeWork" id="TimeWork" placeholder="full time or few hours"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="flex justify-center">
                                <div class=" w-full">
                                    <label for="Image" class="block text-sm font-medium text-gray-700">Image</label>
                                    <input class="form-control
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file"
                                id="Image" name="Image" multiple>
                                </div>
                            </div>
                            <div class="">
                                <label for="County" class="block text-sm font-medium text-gray-700">Country</label>
                                <input type="text" name="County" id="County" placeholder="County of company"
                                    autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm placeholder:text-xs border-gray-300 rounded-md">
                            </div>

                            <div class=" ">
                                <label for="City" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" name="City" id="City" placeholder="City" autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm placeholder:text-xs  border-gray-300 rounded-md">
                            </div>

                            <div class=" ">
                                <label for="CompanyName" class="block text-sm font-medium text-gray-700">Name
                                    Company</label>
                                <input type="text" name="CompanyName" id="CompanyName" placeholder="name of company"
                                    autocomplete="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full  shadow-sm sm:text-sm placeholder:text-xs  border-gray-300 rounded-md">
                            </div>
                            <div class="w-full mt-4">
                                <label for="WhoWeAre" class="block mb-2 text-sm font-medium">Who We Are</label>

                                <textarea
                                    class="block w-full h-28 px-4 py-2  bg-white border rounded-md  focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                    name="WhoWeAre"></textarea>
                            </div>
                            <div class="w-full mt-4">
                                <label for="Requirement" class="block mb-2 text-sm font-medium ">Requirement</label>

                                <textarea name="Requirement"
                                    class="block w-full h-28 px-4 py-2  bg-white border rounded-md   focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"></textarea>
                            </div>
                            <div class="w-full mt-4">
                                <label for="OfferDescription" class="block mb-2 text-sm font-medium">Description</label>

                                <textarea name="OfferDescription"
                                    class="block w-full h-28 px-4 py-2  bg-white border rounded-md  focus:border-blue-400  focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"></textarea>
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
