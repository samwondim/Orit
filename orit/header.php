<!DOCTYPE html>
<html lang="en" class="mt-20 bg-[#EEF1F4]">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/dist/output' ?>.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .my-style {
            background: -webkit-linear-gradient(rgb(255, 187, 0), rgb(255, 60, 0));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
      @keyframes blink {
        0% {opacity: 1;}
        40% {opacity: 1;}
        60% {opacity: 0;}
        100% {opacity: 0;}
      }
      .typing-container {
        display: flex;
        justify-content: center;
        align-items: center;}
      .input-cursor {
        display: inline-block;
        width: 2px;
        background-color: orange;
        margin-left: 8px;
        animation: blink .6s linear infinite alternate;
        }
        nav {
            z-index: 100;
        }
        
        ul {
            background-color: #0e1922;
        }
      
        textarea::placeholder {
            color: #69f215;
        }

        textarea:focus {
            outline: none;
        }

        input:focus {
            outline: none;
        }

       
        

        .bg-orit {
            background-color: #FCB600;
            text-align: center;
            margin: auto 0;
        }

        .bg-login {
            background-color: #F8F5F5;
            margin: auto 0;
            text-align: center;
            border-radius: 10px;
        }
    </style>

</head>
<body class="font-mont text-stone-800">
    

    <header class="mb-20">
        <div class="p-4 top-0 w-full flex flex-row justify-between fixed bg-[#eef1f4] z-[100] border-b-gray-50 h-[70px] md:h-20 shadow-sm">
                <img class="h-12 object-cover lg:hidden" src="<?php echo get_template_directory_uri() . '/assets/orit-tran.png' ?>" alt="orit-logo">
                <div class="lg:hidden flex flex-col  dropdown-left dropdown justify-center bg-inherit md:mr-6">
                    <label tabindex="0" class="scale-150 cursor-pointer"><img src="<?php echo get_template_directory_uri() .'/assets/hb.png' ?>" alt="hum burger"></label>
                    <div class="dropdown dropdown-end bt-inherit">
                        <?php 
                       wp_nav_menu(
                           array(
                               'menu_class' => 'primary',
                               'container' => '',
                               'theme_location' => 'primary',
                               'items_wrap' => '<ul id="" class="bg-[#eef1f4] dropdown-content rounded-box z-[1] menu w-40 p-2 lg:flex lg:flex-row lg:justify-around lg:gap-20 lg:align-middle lg:mx-auto lg:my-auto text-stone-800 lg:w-2/3 gap-2 text-center">%3$s</ul>'
                               )
                            );
                            ?>    
                    </div>
                </div>
            </div>

            <nav class="flex flex-row lg:justify-between lg:w-full lg:h-20 lg:gap-8 p-6 justify-around fixed top-0 bg-inherit">
            


            <?php 
                // if( function_exists('the_custom_logo') ) {
                //     $custom_logo_id = get_theme_mod('custom_logo');
                //     $logo = wp_get_attachment_image_src($custom_logo_id);
                // }
                // ?>
            

            <div class="hidden w-full lg:flex flex-row md:justify-between md:w-full md:fixed md:top-0 md:h-20 bg-inherit sm:opacity-100">
                <img class="w-44" src="<?php echo get_template_directory_uri() . '/assets/orit-tran.png' ?>" alt="orit-logo">
                    <?php 
                       wp_nav_menu(
                           array(
                               'menu_class' => 'primary',
                               'container' => '',
                               'theme_location' => 'primary',
                               'items_wrap' => '<ul id="" class="rounded-box z-[100] menu w-40  flex items-center justify-center text-stone-800 font-semibold md:w-2/3 gap-2 text-center bg-inherit">%3$s</ul>'
                           )
                       );
                   ?>
                   <!-- <ul class="bg-inherit dropdown-content rounded-box z-[1] menu w-40 p-2 md:flex md:flex-row md:justify-around md:gap-20 md:align-middle md:mx-auto md:my-auto text-stone-800 md:w-2/3 gap-2 text-center">
                        <li><a href="home" class="font-semibold btn-home">Home</a></li>
                        <li><a href="#" class="font-semibold">Solutions</a></li>
                        <li><a href="#" class="font-semibold btn-about">About</a></li>
                        <li><a href="#contact" class="font-semibold btn-contact">Contact</a></li>
                        <li><a href="#" class="bg-orit font-semibold px-2 py-2">Book a Demo</a></li>
                        <li><a href="#" class="bg-login font-semibold">Login</a></li>
                    </ul> -->
            </div>
    </nav>
   </header>
