
<header class="padding-x  absolute z-10 w-full bg-white">
    <nav class="container flex justify-around py-8 mx-auto ">
    <div class="flex items-center">
        <a href="/"> 
            <img src="{{ asset('build\assets\images\dsadaddd.svg') }}" alt="logo" width={130} height={29}>
        </a> 
        </div>   
        <ul class="flex-4 flex justify-center items-center gap-16 max-lg:hidden ml-86">
            <a class="fonts-montserrat leading-normal text-lg text-slate-gray" href="home"><li>Home</li></a>
            <a class="fonts-montserrat leading-normal text-lg text-slate-gray " href="shop "><li>Shop</li></a>
            <a class="fonts-montserrat leading-normal text-lg text-slate-gray" ><li>About Us</li></a>
             <a class="fonts-montserrat leading-normal text-lg text-slate-gray " href="costum" >
             <li>
        <button class="flex justify-center items-center gap-1.5   fonts-montserrat leading-normal text-lg text-white  bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 border rounded-full px-10 py-2  shadow-md hover:shadow-pink-500 shadow-purple-500" 
        >
        <img src="{{ asset('build\assets\icons\logo-costum.svg') }}"  width={10} height={29} alt='logo'
          class='ml-2 rounded-full bg-yellow w-5 h-5'/>
        Costum
        </button>
        </li>
        </a>
            <a class="fonts-montserrat leading-normal text-lg text-slate-gray" href="contact us"><li>Contact</li></a>
            <a class="fonts-montserrat leading-normal text-lg flex justify-center 
            items-center gap-2 px-7 py-2 border =  rounded-full text-white  bg-black w-55 hover:bg-gray-700"><li>Sign Up</li></a>
        </ul>
        <div class="hidden max-lg:block gap-5">
        <img src="{{ asset('build\assets\icons\hamburger.svg') }}"  width="25" height="25">
        </div>
    </nav>
    <hr class=" mb-0">

    
</header>

