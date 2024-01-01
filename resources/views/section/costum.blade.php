
@vite(['resources/css/app.css','resources/js/app.js'])
  <html>
@include('section.topnotification')
@include('section.nav')
<header
> <title>Dreadnought | Costum</title>
</header>
<body >
<section class="bg-black">
@include('section.herocostum')
@include('section.info')
</section>

@include('section.footer')

</body>
  </html>