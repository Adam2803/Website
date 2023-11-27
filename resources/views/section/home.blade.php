
  @vite('resources/css/app.css')
  <html>
@include('section.topnotification')
@include('section.nav')
<header
  class="relative flex items-center justify-center h-screen mb-12 mt-24 overflow-hidden"
> <title>Dreadnought | Home</title>
  <div
    class="relative z-30 p-5 items-start text-2xl text-white  bg-opacity-50 rounded-xl"
  >
    
  </div>
  <video
    autoplay
    loop
    muted
    class="absolute z-10 w-auto min-w-full min-h-full max-w-none"
  >
    <source
      src="{{ asset('build\assets\video\DTES.mp4') }}"
      type="video/mp4"
    />
    Your browser does not support the video tag.
  </video>
</header>
<body>
  <section class="mt- mb-12 text-black">
@include('section.herohome')
@include('section.superquality')
  </section>
</body>
</html>

