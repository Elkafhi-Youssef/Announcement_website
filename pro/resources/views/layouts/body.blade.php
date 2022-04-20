<section class=" mt-9">
<div class=" mx-auto  lg:container  flex flex-col justify-center sm:flex-row sm:items-center md:justify-between">
    <div class=" flex flex-row justify-center h-12" >

        <div class="  w-80 flex appearance-none border-2 border-sky-500 rounded-xl p-1   mt-0 sm:max-w-screen-sm text-stone-900">
            <input type="text" class="appearance-none bg-transparent px-4 py-2 w-64 border-none focus:border-none focus:outline-none" placeholder="Search for ...">
            <button class="flex items-center justify-center px-5">
            <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"></path>
            </svg>
            </button>
        </div>
    </div>
    <div class="   flex justify-center h-12 ">

    <button class="px-4 py-2 mx-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
        <a href="#">
            Add Job
        </a>
    </button>

    <button class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">

        <a href="#">

            Add Reuest
        </a>
    </button>
    </div>
</div>
        @foreach ($offers as $item)
        <h1>{{$item['OfferTitle']}}</h1>

        @endforeach
    <div
        class=" border-l-4 border-sky-700 mt-4 flex-col max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex ">
            <!-- component -->
            <div class="p-6">
                <div class="">
                    {{-- <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Product</span>
                    --}}
                    <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">21 SEP 2015</span>
                    <div class=" flex-row">
                        <a href="#"
                            class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform dark:text-white hover:text-gray-600 hover:underline">Looking
                            for a Full stack dev</a>

                    </div>
                    <h2 class=" mx-4 ml-2 mt-3 text-base font-semibold">salary:1000$-1500$</h2>
                    <div class=" flex mt-4">
                        <h2 class=" mx-4 ml-2 text-sm font-semibold">USA</h2>
                        <h2 class=" mx-4 ml-2 text-sm font-semibold">Remot</h2>
                        <h2 class=" mx-4 ml-2 text-sm font-semibold">FULL TIME</h2>

                    </div>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Molestie parturient et sem ipsum volutpat vel. Natoque sem et aliquam
                        mauris egestas quam volutpat viverra. In pretium nec senectus erat. Et malesuada lobortis.
                    </p>
                </div>

                <div class="mt-4">
                    <div class="flex items-center">
                        <button class="flex items-center justify-center w-28 px-2 py-1 text-white transition-colors duration-200 transform  bg-sky-400 hover:bg-sky-600 rounded-md focus:outline-none sm:w-auto sm:mx-1   focus:ring  focus:ring-opacity-40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="mx-1">
                                View
                            </span>
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

</section>
