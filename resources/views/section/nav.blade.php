
<header class="padding-x py-8 absolute z-10 w-full bg-white">
    <nav class="flex justify-between items-center max-container">
        <a href="/"> 
            <img src="{{ asset('build\assets\images\dsadaddd.svg') }}" alt="logo" width={130} height={29}>
        </a>
        <ul class="flex-1 flex justify-center items-center gap-16 max-lg:hidden ml-96">
            <a class="fonts-montserrat leading-normal text-lg text-slate-gray" href="home"><li>Home</li></a>
            <a class="fonts-montserrat leading-normal text-lg text-slate-gray"><li>Products</li></a>
            <a class="fonts-montserrat leading-normal text-lg text-slate-gray"><li>Shop</li></a>
            <a class="fonts-montserrat leading-normal text-lg text-slate-gray"><li>Contact Us</li></a>
            <a class="fonts-montserrat leading-normal text-lg flex justify-center 
            items-center gap-2 px-7 py-2 border =  rounded-full text-white  bg-red-700 w-55"><li>Sign Up</li></a>
        </ul>
        <div class="hidden max-lg:block gap-1">
        <img src="{{ asset('build\assets\icons\hamburger.svg') }}"  width="25" height="25">
        </div>
    </nav>
</header>
