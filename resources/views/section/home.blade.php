
  @vite(['resources/css/app.css','resources/js/app.js'])
  <html>
@include('section.topnotification')
@include('section.nav')
<header
  class="relative flex  h-screen overflow-hidden mt-24"
> <title>Dreadnought | Home</title>
  <div    class="absolute z-30 ml-24 mt-72  text-5xl text-white font-sans font-hairline">
          <p class="break-words leading-10">
                  Built by you.
                   </p>
  <p class="break-words leading- ">
  For You.
  </p>
  <p class="break-words leading-10">
  Let's build 
  </p>
  <p class="break-words">
  Incredible things together.
  </p>
  <a href="/shop">
  <button   class="flex justify-center items-center mt-10 gap-2 px-16 py-4  font-montserrat text-lg leading-4  text-white border-red-700 w-55 font-medium border-2" 
        >Shop Now
        </button>
  </a>
  </div>
  
  <video
    autoplay
    loop
    muted
    class="absolute z-10 w-auto min-w-full min-h-full max-w-none mb-12  "
  >
    <source
      src="{{ asset('build\assets\video\DTES.mp4') }}"
      type="video/mp4"
    />
    Your browser does not support the video tag.
  </video>
</header>
<body>
  <section class="mt-0 mb-12 text-black">

@include('section.herohome')

  </section>
    @include('section.footer')
</body>
</html>

