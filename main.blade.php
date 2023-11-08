
<!doctype html>
<html>
<head>
  <title>Dreadnought | Official</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/svg+xml" href="/favicon.ico" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  @include('section.nav')
<section class="heros xl-padding-1 wide:padding-r padding-b ">
  @include('section.hero')
<section class="padding">
  @include('section.popularproduct')
</section>
<section class="padding">
  @include('section.superquality')
</section>
<section class="bg-pale-blue padding">
  @include('section.CostumerReview')
</section>
<section class="padding-x sm:py-32 py-16 w-full">
  @include('section.subsribe')
</section>
<section class="bg-black padding-x padding-t pb-8">
  @include('section.footer')
</section>

</body>
</html>
