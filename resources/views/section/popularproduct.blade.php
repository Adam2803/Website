<section id='products' class='max-container max-sm:mt-12'>
      <div class='flex flex-col justify-start gap-5'>
        <h2 class='text-4xl font-palanquin font-bold'>
          Our <span class='text-coral-red'> Popular </span> Products
        </h2>
        <p className='lg:max-w-lg mt-2 font-montserrat text-slate-gray'>
          Experience top-notch quality and style with our sought-after
          selections. Discover a world of comfort, design, and value
        </p>
      </div>

      <div class='mt-16 grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 sm:gap-6 gap-14 ' >
      <img
          src="{{ asset('build\assets\images\a1.svg') }}"
          style="background-image: url('/build/assets/images/thumbnail-background.svg')"
          width={127}
          height={103.34}
          class='object-contain flex justify-center items-center bg-card bg-center bg-cover sm:w-40 sm:h-40 rounded-xl max-sm:p-4'
        />
        <img
          src="{{ asset('build\assets\images\a2.svg') }}"
          style="background-image: url('/build/assets/images/thumbnail-background.svg')"
          width={500}
          height={103.34}
          class='object-contain flex justify-center items-center bg-card bg-center bg-cover sm:w-40 sm:h-40 rounded-xl max-sm:p-4'
        />
        <img
          src="{{ asset('build\assets\images\a3.svg') }}"
          style="background-image: url('/build/assets/images/thumbnail-background.svg')"
          width={127}
          height={103.34}
          class='object-contain flex justify-center items-center bg-card bg-center bg-cover sm:w-40 sm:h-40 rounded-xl max-sm:p-4'
        />
      </div>
    </section>