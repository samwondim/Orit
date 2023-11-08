<!DOCTYPE html>
<html lang="en" class="mt-20 bg-[#0e1922]">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/dist/output' ?>.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        nav {
            background-color: #0e1922;
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

        html {
            color: #0e1922;
        }
        

        .invisible {
            visibility: hidden;
        }
        
        .section-1 {
            background-image: url('<?php echo get_template_directory_uri() ?>/assets/wlbg.png');
            background-repeat: no-repeat;
            
            background-size: cover;
            
        } 
        
        ul .menu-item a {
            font-size: 16px;
            font-weight: 400;
        }

        .bg-orit {
            background-color: #69f215;
            color: #0e1922;
            margin: auto 0;
        }

        .bg-login {
            background-color: #f7f7f7;
            border-radius: 10px;
            color: #0e1922;
            
        }

        .section-4ab {
            background-image: url('./assets/bigbg.png');
            background-repeat: no-repeat;
            background-position: top;
            background-size: cover;
        }

        .section-5ab {
            background-image: url('./assets/a3.png');
            background-repeat: no-repeat;
            background-position: right bottom;
            background-size: cover;
        }

        @media (max-width: 640px) {
            .section-5ab {
                background-image: none;
            }
        }
        .section-2inv {
            background-image: url('assets/Rectangle\ 65\ 1.png');
            background-repeat: no-repeat;
            background-position: bottom;
            background-size: fill;
        }

        .section-4inv {
            background-image: url('./assets/invFooter.png');
            background-repeat: no-repeat;
            background-position: bottom;
            background-size: 100% 300px;

        }

        @media (max-width: 640px) {
            .section-2inv {
                background-image: none;
            }

            .section-4inv {
                background-image: none;
            }

        }

       
    </style>

</head>
<body class="font-mont text-white">
    
<header class="">
    <div class="p-4 top-0 w-full flex flex-row justify-between bg-[#0e1922] fixed z-[100] border-b-gray-50 h-[70px] md:h-20 shadow-sm">                
        <img class="h-12 object-cover lg:hidden" src="<?php echo get_template_directory_uri() . '/assets/orit-tran.png' ?>" alt="orit-logo">
        <div class="lg:hidden flex flex-col bg-[#141f28] dropdown-left dropdown justify-center">
        <label tabindex="0" class="scale-150 cursor-pointer"><img src="<?php echo get_template_directory_uri() .'/assets/hb.png' ?>" alt="hum burger"></label>
        <div class="dropdown dropdown-end"> 
                <?php 
                       wp_nav_menu(
                           array(
                               'menu_class' => 'primary',
                               'container' => '',
                               'theme_location' => 'primary',
                               'items_wrap' => '<ul id="" class="dropdown-content rounded-box z-[1] menu w-40 p-2 lg:flex lg:flex-row lg:justify-around lg:gap-20 lg:align-middle lg:mx-auto lg:my-auto text-white lg:w-2/3 gap-2 text-center">%3$s</ul>'
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
            

            
            
            <div class="hidden w-full lg:flex flex-row md:justify-between md:w-full md:fixed md:top-0 md:h-20 bg-[#0e1922] sm:opacity-100">                
                <img class="w-44" src="<?php echo get_template_directory_uri() . '/assets/orit-tran.png' ?>" alt="orit-logo">
                    <?php 
                       wp_nav_menu(
                           array(
                               'menu_class' => 'primary',
                               'container' => '',
                               'theme_location' => 'primary',
                               'items_wrap' => '<ul id="" class="rounded-box z-[100] menu w-40  flex items-center justify-center text-red-600 font-semibold md:w-2/3 gap-2 text-center bg-inherit">%3$s</ul>'
                           )
                       );
                   ?>
            </div>
        </nav>
   </header>