
@vite(['resources/css/app.css','resources/js/app.js'])
  <html>
@include('section.topnotification')
@include('section.nav')
<header
> <title>Dreadnought | Home</title>
</header>
<body>
<section class="overflow-hidden bg-white py-11 font-poppins  mt-20 mb-20">
        <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full mb-8 md:w-1/2 md:mb-0">
                    <div class="sticky top-0 z-50 overflow-hidden ">
                        <div class="relative mb-6 lg:mb-10 lg:h-4/6 bg-gray-200">
                            <img src="{{ asset('build\assets\images\dsadas.png') }}" alt=""
                                class="object-cover w-full lg:h-full ">
                        </div>
                        <div class="flex-wrap hidden md:flex">
                            <div class="w-1/4 p-1 sm:w-1/4">
                                <a href="#" class="block border border-blue-300 hover:border-blue-300">
                                    <img src="{{ asset('build\assets\images\prev1.jpeg') }}" alt=""
                                        class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#" class="block border border-transparent hover:border-blue-300">
                                    <img src="{{ asset('build\assets\images\prev2.jpeg') }}" alt=""
                                        class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            
                          
                        </div>
                        <div class="px-6 pb-6 mt-6 border-t border-gray-300 dark:border-gray-400 ">
                            <div class="flex flex-wrap items-center mt-6">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="w-4 h-4 text-gray-700 dark:text-gray-400 bi bi-truck"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                        </path>
                                    </svg>
                                </span>
                                <h2 class="text-lg font-bold text-gray-700 dark:text-gray-400">Free Shipping</h2>
                            </div>
                            <div class="mt-2 px-7">
                                <a class="text-sm text-blue-400 dark:text-blue-200" href="#">Get delivery dates</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="lg:pl-20">
                        <div class="mb-8 ">
                            <h1 class="max-w-xl mb-1 text-4xl font-bold  md:text-4xl">
                                Dread Plane </h1>
                            <p class="inline-block mb-6 text-4xl font-bold text-gray-700 dark:text-black">
                                <span>Rp150.000</span>
                                <span
                                    class="text-base font-normal text-gray-500 line-through dark:text-gray-400">Rp170.000</span>
                            </p>
                            <p class="max-w-md text-gray-700 dark:text-gray-400">
                                Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet
                                Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet
                            </p>
                        </div>
                        
                        <div class="mb-8 ">
                            <h2
                                class="w-16 pb-1 mb-4 text-xl font-semibold border-b border-red-700 dark:border-gray-600 dark:text-gray-400">
                                SIZE</h2>
                            <div>
                                <div class="flex flex-wrap -mb-2">
                                    <button
                                        class="px-4 py-2 mb-2 mr-4 font-semibold border rounded-md hover:border-red-700 dark:border-gray-400 hover:text-red-700 dark:hover:border-gray-300 dark:text-gray-400">
                                       S
                                    </button>
                                     <button
                                        class="px-4 py-2 mb-2 mr-4 font-semibold border rounded-md hover:border-red-700 dark:border-gray-400 hover:text-red-700 dark:hover:border-gray-300 dark:text-gray-400">
                                       M
                                    </button>
                                    <button
                                        class="px-4 py-2 mb-2 mr-4 font-semibold border rounded-md hover:border-red-700 dark:border-gray-400 hover:text-red-700 dark:hover:border-gray-300 dark:text-gray-400">
                                       L
                                    </button>
                                       <button
                                        class="px-4 py-2 mb-2 mr-4 font-semibold border rounded-md hover:border-red-700 dark:border-gray-400 hover:text-red-700 dark:hover:border-gray-300 dark:text-gray-400">
                                       XL
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                      
                        <div class="w-32 mb-8 ">
                            <label for="quantity-input"
                                class="w-full pb-1 text-xl font-semibold text-gray-700 border-b border-blue-300 dark:border-gray-600 dark:text-gray-400">Quantity</label>
                            <div class="relative flex flex-row w-full h-10 mt-6 bg-transparent rounded-lg">
                                <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                                    class="w-20 h-full text-gray-600 bg-gray-300 rounded-l outline-none cursor-pointer dark:hover:bg-gray-700 dark:text-gray-400 hover:text-gray-700  hover:bg-gray-400">
                                    <span class="m-auto text-2xl font-thin">-</span>
                                </button>
                                <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation"
                                    class="flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-300 outline-none dark:text-gray-400 dark:placeholder-gray-400 focus:outline-none text-md hover:text-black"
                                    placeholder="1">
                                <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                                    class="w-20 h-full text-gray-600 bg-gray-300 rounded-r outline-none cursor-pointer dark:hover:bg-gray-700 dark:text-gray-400  hover:text-gray-700 hover:bg-gray-400">
                                    <span class="m-auto text-2xl font-thin">+</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center gap-4">
                            <button
                                class="w-full p-4 bg-red-700 rounded-md lg:w-2/5 dark:text-gray-200 text-gray-50 hover:bg-red-600 dark:bg-red-700 dark:hover:bg-red-00">
                                Add to cart</button>
                                <button
                                class="w-full p-4 bg-red-700 rounded-md lg:w-2/5 dark:text-gray-200 text-gray-50 hover:bg-red-600 dark:bg-red-700 dark:hover:bg-red-00">
                               Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>