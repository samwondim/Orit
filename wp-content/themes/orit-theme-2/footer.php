<footer class="h-full  flex flex-col py-2 mt-60">
    <div class="grid grid-cols-2 md:grid-cols-5 gap-6 px-6">
        <div class="hidden md:flex flex-col">
            <img src="<?php echo get_template_directory_uri() . '/assets/logo.png' ?>" alt="" class="mx-auto my-4 md:flex hidden">
            <a href="#" class="hidden md:flex text-center">Terms of service | Privacy Policy</a>
        </div>

            <div class="md:col-start-2">
                <h1 class="text-2xl font-semibold">About us</h1>
                <ul class="">
                    <li><a href="#" class="my-8">About ORIT</a></li>
                    <li><a href="#" class="my-8">Contact us</a></li>
                    <li><a href="#"class="my-8">Features</a></li>
                    <li><a href="#"class="my-8">Careers</a></li>
                </ul>
            </div>

            <div>
                <h1 class="text-2xl font-semibold">Products</h1>
                <ul>
                    <li><a href="#" class=""class="my-8">Product</a></li>
                    <li><a href="#"class="my-8">Book a demo</a></li>
                    <li><a href="#"class="my-8">Login</a></li>
                </ul>
            </div>

            <div>
                <h1 class="text-2xl font-semibold">Resources</h1>
                <ul class="">
                    <li><a href="#"class="my-8">Help center</a></li>
                    <li><a href="#"class="my-8">Book a demo</a></li>
                </ul>
            </div>

            <div>
                <h1 class="text-2xl font-semibold">Get in touch</h1>
                <ul>
                    <li><a href="#"class="my-8">Questions or feedback?</a></li>
                    <li><a href="#"class="my-8">We'd love to here from you</a></li>
                </ul>
            </div>
            <div class="flex flex-row gap-4 col-start-2 row-span-2 w-full md:col-start-5">
                <a href="#">
                    <!-- <img src="<?php echo get_template_directory_uri() .'/assets/footer/linkedin.svg' ?>" alt="" class=""> -->
                </a>

                <a href="#">
                    <img src="<?php echo get_template_directory_uri() .'/assets/footer/youtube.svg' ?>" alt="" class="">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() .'/assets/footer/telegram.svg' ?>" alt="" class="">

                </a>
            </div>

            <div class="mx-auto col-span-2 my-8 flex flex-col md:hidden">
                <a href="#" ><span class="hover:border-2 ">
                    Terms of service
                    
                </span>
                |
                <span class="hover:border-2">

                    Privacy Policy
                </span></a>
                <img src="<?php echo get_template_directory_uri() . '/assets/logo.png' ?>" alt="" class="mx-auto my-4 md:hidden">
            </div>       
    </div>

</footer>