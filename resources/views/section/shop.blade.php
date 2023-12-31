
  @vite(['resources/css/app.css','resources/js/app.js'])
  <html>
@include('section.topnotification')
@include('section.nav')
<header
> <title>Dreadnought | shop</title>
</header>
<body>


<div id="default-carousel" class="relative w-full  mt-28" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-auto overflow-hidden  md:h-2/4">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('build\assets\images\banner1.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('build\assets\images\BANNER.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('build\assets\images\sda2.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
    </div>
    <!-- Slider indicators -->

    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<!----------------------------------------------------------------------------->

  <section class="relative flex items-center justify-center  overflow-hidden text-black font-sans text-4xl font-bold mb-56">
 
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class=" text-black font-sans text-4xl font-bold text-center mb-8">Popular Products</h2>

    <div class="grid grid-cols-1 gap-x-14 gap-y-14 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-12">
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden  bg-gray-200 xl:aspect-h-15 xl:aspect-w-7 drop-shadow-lg">        
          <img src="{{ asset('build\assets\images\pics2.png') }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Jersey Pureblue</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">Rp120.000</p>
      </a>

      <a href="detailproduct" class="group">
        <div class="aspect-h-4 aspect-w-1 w-full overflow-hidden  bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 drop-shadow-lg">
          <img src="{{ asset('build\assets\images\pics1.png') }}" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Jersey Tryline</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">Rp120.000</p>
      </a>

      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden  bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 drop-shadow-lg">
          <img src="{{ asset('build\assets\images\pics3.png') }}" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Jersey Bats</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">Rp120.000</p>
      </a>

      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 drop-shadow-lg">
          <img src="{{ asset('build\assets\images\pics4.png') }}" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Jersey Bayern</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">Rp120.000</p>
      </a>

          <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden  bg-gray-200 xl:aspect-h-15 xl:aspect-w-7 drop-shadow-lg mt-6">        
          <img src="{{ asset('build\assets\images\pics2.png') }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Jersey Pureblue</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">Rp120.000</p>
      </a>

     
     
      
      <!-- More products... -->
    </div>
  </div>
</div>

  </section>
  @include('section.footer')
</body>
</html>

