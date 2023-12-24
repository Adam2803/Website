
@vite('resources/css/app.css')
  <html>
@include('section.topnotification')
@include('section.nav')
<header
> <title>Dreadnought | Home</title>
</header>
<body>
  <section class="relative flex items-center justify-center   mt-20 overflow-hidden text-black font-sans text-4xl font-bold">
 
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>

    <div class="grid grid-cols-1 gap-x-10 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-12">
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

      <!-- More products... -->
    </div>
  </div>
</div>

  </section>
</body>
</html>

