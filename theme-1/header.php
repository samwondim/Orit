<header class="mb-40">
    <nav class="grid md:grid-cols-3 lg:grid-cols-7  md:border-stone-300 py-2 md:fixed md:top-0 md:w-full md:bg-stone-100 md:shadow-md">

        <div class="ml-10 md:col-span-2 lg:col-span-1">
            <img class="w-1/3 lg:w-40" src="<?php echo get_template_directory_uri() . '/assets/logo.png' ?>" alt="orit logo">
        </div>
        
        <div class="hidden lg:col-span-4 lg:grid gap-1 grid-cols-4 mt-4 mx-2">
            <a href="#home" class="hover:font-extrabold">Home</a>
            <a href="#solutions" class="hover:font-extrabold">Solutions</a>
            <a href="#about" class="hover:font-extrabold">About</a>
            <a href="#contact" class="hover:font-extrabold">Contact</a>
        </div>
        
        <div class="hidden lg:col-span-2 lg:grid lg:grid-cols-2 gap-2">
            <a href="#" class="bg-yellow-400 text-white rounded-lg text-center px-3 py-5 font-semibold w-2/3 h-full hover:font-extrabold">Book a demo</a>
            <a href="#" class="bg-stone-300 rounded-lg text-center px-3 py-5 font-semibold w-2/3 h-full hover:font-extrabold">Login</a>
        </div>

        <div class="md:hidden  dropdown dropdown-end col-start-3 mt-2 bg-stone-100">
            <label tabindex="0" class="btn-white  scale-150"><img src="<?php echo get_template_directory_uri() .'/assets/hb.png' ?>" alt="hum burger"></label>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2  shadow rounded-box w-52">
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