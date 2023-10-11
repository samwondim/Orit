<header class="md:my-20 md:pt-8">
    <nav class="flex flex-row justify-around gap-16 md:fixed md:top-0 md:w-full md:shadow-md">

        <div class="ml-10 ">
            <img class="w-1/3 lg:w-40" src="<?php echo get_template_directory_uri() . '/assets/logo.png' ?>" alt="orit logo">
        </div>
        
        <div class="hidden md:flex md:flex-row md:justify-between md:gap-20 md:my-auto">
            <a href="#home" class="hover:font-extrabold text-red-600 aria-pressed:text-stone-800">Home</a>
            <a href="#solutions" class="hover:font-extrabold text-red-600">Solutions</a>
            <a href="#about" class="hover:font-extrabold text-red-600">About</a>
            <a href="#contact" class="hover:font-extrabold text-red-600">Contact</a>
        </div>
        
        <div class="hidden lg:col-span-2 lg:grid lg:grid-cols-2 md:gap-6">
            <a href="#" class="bg-green-500 text-stone-800 rounded-md text-center  py-2 px-2 grow-0 my-auto hover:font-bold">Book a Demo</a>
            <a href="#" class="bg-stone-100 text-stone-800 rounded-md text-center  py-2 px-2 my-auto hover:font-bold">Login</a>
        </div>

        <div class="md:hidden  dropdown dropdown-end col-start-3 mt-2 ">
            <label tabindex="0" class="btn-white  scale-150"><img src="<?php echo get_template_directory_uri() .'/assets/hb.png' ?>" alt="hum burger"></label>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2  shadow rounded-box w-52 text-red-600">
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#solutions">Solutions</a>
                </li>
                <li>

                    <a href="#about">About</a>
                </li>
                <li>

                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

   </header>