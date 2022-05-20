
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
    <section>
        <div class=" container  ">
            <div class="flex  w-9/12 mx-auto mt-12 flex-col-reverse sm:flex-row   ">

                    <div  class="   mt-2">
                        {{-- <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Product</span>
                        --}}
                        <span class=" text-lg font-bold text-black-600 dark:text-gray-300"> {{$offer['CompanyName']}}</span>
                        <!-- <span class=" text-sm  text-black-600 dark:text-gray-300"> {{$offer['created_at']->format('d M Y')}}</span> -->
                        <div class=" flex-row">
                            <h3
                                class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform  ">Looking
                               {{$offer['OfferTitle']}}</h3>

                        </div>
                        <h2 class=" mx-4 ml-2 mt-3 text-base font-semibold">salary:{{$offer['SalaryRange']}}</h2>
                        <div class=" flex mt-4">
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$offer['County']}}</h2>
                            <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$offer['City']}}</h2>
                        </div>
                        <button class=" mt-3 flex items-center justify-center  px-2 py-1 text-white transition-colors duration-200 transform  bg-sky-400 hover:bg-sky-600 rounded-md focus:outline-none sm:w-auto sm:mx-1   focus:ring  focus:ring-opacity-40">

                            <span class="mx-1">

                                <a  href="mailto:{{ Auth::user()->email }}">respond</a>
                            </span>
                        </button>
                    </div>
                    <div class="  ml-14 w-56  ">
                        <img class="object-cover b h-full"
                        src="{{ asset('uploads/companyImage/'.$offer['Image'] ) }}"
                        alt="Article">
                    </div>
            </div>
                <div class=" w-11/12   md:w-9/12 sm:w-11/12 mx-auto mt-12  justify-start ">
                    <h2 class=" mx-4 ml-2  text-base font-semibold">work expirience: {{$offer['Experience']}}</h2>
                    <div class=" flex mt-4">
                        <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$offer['TimeWork']}}</h2>
                        <h2 class=" mx-4 ml-2 text-sm font-semibold">{{$offer['Remote']}}</h2>

                    </div>
                    <div class="  mt-4">
                        <h2 class=" mx-4 ml-2 text-lg font-semibold">Who we are:</h2>
                        <p class=" sm:w-4/5 mx-4 ml-2 text-sm font-semibold">
                            {{$offer['WhoWeAre']}}
                        </p>

                    </div>
                    <div class="   mt-4">
                        <h2 class=" mx-4 ml-2 text-lg font-semibold">Post Description</h2>
                        <p class=" mx-4 ml-2 text-sm font-semibold">
                            {{$offer['OfferDescription']}}
                        </p>

                    </div>
                    <div class="  mt-4">
                        <h2 class=" mx-4 ml-2 text-lg font-semibold">Requirement</h2>
                        <p class=" mx-4 ml-2 text-sm font-semibold">
                            {{$offer['Requirement']}}

                        </p>

                    </div>
                </div>
        </div>
    </section>

    @include('layouts.footer')
</body>

</html>
