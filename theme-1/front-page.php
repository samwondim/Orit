<!DOCTYPE html>
<html lang="en" class="bg-stone-100">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orit</title>

    <?php wp_head() ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .my-style {
            background: -webkit-linear-gradient(rgb(255, 187, 0), rgb(255, 60, 0));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="font-mont bg-stone-100 text-stone-800 mt-8">
    <?php get_header(); ?>

    <main>
        <section class="section-1 z-10 h-full" id="home">
            <div class="flex flex-col mt-52">
                <h1 class="my-style font-extrabold text-4xl text-center flex flex-col lg:text-7xl">
                    <span>
                        Digitize/ Automate/ Optimize
                    </span>
                    <span>
                        your custodial operation
                    </span>
                </h1>

                <h2 class="font-normal text-3xl mt-8 text-center flex flex-col lg:text-6xl">
                    <span>Elevate Cleanliness:</span>
                    <span>Transparency, Data, Operation - Perfected!</span>
                </h2>
            </div>

            <div class="mt-8">
                <img class="w-full" src="<?php echo get_template_directory_uri().'/assets/hero_background.png' ?>" alt="">
            </div>
        </section>

        <section class="section-2 z-5 flex flex-col justify-center md:flex-row mb-3 -mt-3" >
            <img class="lg:w-1/2 w-full" src="<?php echo get_template_directory_uri() . '/assets/about_1.png' ?>" alt="about 1">
            <a href="#" class="w-34 px-6 md:px-4 md:text-2xl text-center bg-yellow-400 text-white rounded-lg py-5 font-semibold h-full hover:font-extrabold mx-auto my-5 md:self-center md:flex-grow-0">Book a demo</a>
        </section>

        <div class="z-4 mt-10">
            <img class="w-full lg:mt-10" src="<?php echo get_template_directory_uri() . '/assets/section2_bottom.png' ?>" alt="section 2 bottom">
        </div>

        <section class="section-3 flex flex-row gap-4 p-4 justify-around" id="about">
            
            <img class="self-center md:w-80 md:h-40 hidden md:flex" src="<?php echo get_template_directory_uri() . '/assets/Group 35s.png' ?>" alt="">
            <div class="flex flex-col gap-8 w-full">

            <div class="flex flex-row justify-around self-start bg-white rounded-lg md:w-1/2 md:self-center">
                <img class="self-start w-40" src="<?php echo get_template_directory_uri() . '/assets/workloading_icon.png'?>" alt="">
                <div class=""><span class="font-extrabold text-2xl text-stone-900 block">Work Loading</span>Automates the scheduling of repetitive tasks while accounting for staff availability and 
building occupancy.<span class="underline block"><a href="#">Learn more &rarr;</a></span>.</div>
            </div>

            <div class="flex flex-row justify-between gap-2 self-center md:w-1/2">
                <img class="self-center md:hidden" src="<?php echo get_template_directory_uri() . '/assets/Group 35s.png' ?>" alt="">
                <div class="flex flex-row justify-around bg-white rounded-lg md:w-full">
                    <img class="self-start w-40" src="<?php echo get_template_directory_uri() . '/assets/inventory_icon.png' ?>" alt="asset">
                    <div>
                        <span class="font-extrabold text-2xl text-stone-900 block">Inventory</span>Digitally tracks your inventory from receiving to dispensing, telling you where your supplies 
are consumed.<span class="underline block"><a href="#">Learn more &rarr;</a></span>
                    </div>
                </div>
            </div>
                
            
            <div class="flex flex-row justify-around self-end bg-white rounded-lg md:w-1/2 md:self-center">
                <img class="w-40" src="<?php echo get_template_directory_uri() . '/assets/asset_icon.png'?>" alt="">
                <div class=""><span class="font-extrabold text-2xl text-stone-900 block">Asset Management</span>Keep track of your assets and monitors their usage. 
Scheduling of preventative maintenance reduces downtime.
<span class="underline block"><a href="#">Learn more &rarr;</a></span>.</div>
            </div>
            </div>
        </section>
        
        <div class="z-3 mt-10">
            <img src="<?php echo get_template_directory_uri() . '/assets/bottom_curve.png' ?>" alt="" class="w-full lg:mt-10">
        </div>

        <secion class="section-4" id="solutions">
            <h1 class="text-5xl uppercase text-center font-extrabold">
                <span class="sm:block">our process to</span>
                <span>optimized operation</span>
            </h1>

                
                <div class="grid grid-cols-1 mt-20 md:grid-cols-3 p-4 md:w-2/3 md:mx-auto rounded-lg">
                <div class="bg-white text-center my-9 p-4">
                    <h1 class="font-extrabold uppercase text-4xl mb-8">Digitize</h1>
                    <p>Transform your manual processes into a digital format, setting the stage for a streamlined, efficient future.</p>
                    </div>
                
                    <div class="bg-white text-center my-9 p-4">
                        <h1 class="font-extrabold uppercase text-4xl mb-8">automate</h1>
                        <p>Automate task trigger points and define schedule generation parameters.</p>
                        </div>
                        
                        <div class="bg-white text-center my-9 p-4">
                            <h1 class="font-extrabold uppercase text-4xl mb-8">analyze</h1>
                            <p>Your data evolves into a strategic asset, incorporating insights from user inputs and historical records.</p>
                            </div>  
                    </div>
                </div>

                <div class="md:flex md:flex-col flex flex-col">
                    <h1 class="text-3xl font-extrabold uppercase text-center mx-auto md:self-start">unlock the power of data</h1>
                    <div class="flex flex-col gap-8 p-4 md:w-2/3 md:mx-auto">
                        <span>With ORIT’s powerful analytics, you can make data -driven decisions for your business.<p></p></span>
                        <span>
                            <p>By analyzing key metrics and trends, you can identify areas for improvement, facilitate performance management, allocate resources, track consumption of consumables, and drive efficiency for your organization.</p>
                        </span>
                        <span>
                            <p>With accurate and timely information, you can stay ahead of your industry and make smarter choices for your operation.
</p>
                        </span>
                    </div>

                    <a href="#" class="font-semibold text-white bg-yellow-400 rounded-lg text-center text-2xl mx-auto px-6 py-4 hover:font-bold">Get Started</a>
                    <img src="<?php echo get_template_directory_uri() . '/assets/pccurve.png'?>" alt="" class="md:hidden">
                    <img src="<?php echo get_template_directory_uri() . '/assets/curve_pc.png' ?>" alt="no pc" class="hidden md:flex">
                </div>
            </secion>

            <section class="section-5 flex flex-col w-full p-4 gap-4 my-40">
                <h1 class="font-extrabold text-4xl text-center italic hidden md:flex md:mx-auto mb-20">Frequently Asked Questions.</h1>
                <div class="px-4 md:flex md:flex-row justify-around">
                    <img class="w-3/4 md:w-1/3 mx-auto md:self-center md:grow-0" src="<?php echo get_template_directory_uri() . '/assets/faq.png' ?>" alt="frequently asked questions.">
                    <div class="md:w-2/3">

                    
                    <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        What is ORIT
                                    </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>ORIT is a comprehensive facility management solution designed to streamline operations, enhance efficiency, and provide real-time insights for facility managers and Building Service Contractors (BSCs). It encompasses features for task tracking, scheduling, inventory management, and more.</p>
                                </div>
                    </div>
                    <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        How can ORIT benefit my in-house janitorial operations?
                                    </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>hello</p>
                                </div>
                            </div>
                            <div class="my-4">

                                <div class="mx-auto w-full self-start">
                                    <div class="collapse collapse-plus border-2 border-stone-800">
                                        <input type="radio" name="my-accordion-1" checked="checked" /> 
                                        <div class="collapse-title text-xl font-medium self-end">
                                            <span>
                                                How does ORIT help Building Service Contractors (BSCs)?
                                            </span>
                                            
                                        </div>
                                        <div class="collapse-content"> 
                                            <p>hello</p>
                                        </div>
                                    </div>    
                                    <div class="my-4">

                                        <div class="mx-auto w-full self-start">
                                            <div class="collapse collapse-plus border-2 border-stone-800">
                                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                                <div class="collapse-title text-xl font-medium self-end">
                                                    <span>
                                                        How can ORIT benefit my in-house janitorial operations?
                                                    </span>
                                                    
                                                </div>
                                                <div class="collapse-content"> 
                                                    <p>hello</p>
                                                </div>
                                            </div>
                    <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        Is ORIT suitable for multi-location businesses?
                                    </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>hello</p>
                                </div>
                    </div>
                    <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        Can ORIT adapt to staffing changes?
                                    </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>hello</p>
                                </div>                
                    </div>

                <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        Is ORIT user-friendly and easy to implement?
                                    </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>hello</p>
                                </div>                
                        </div>
                    </div>

<div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        What kind of support is available for ORIT users?
                                    </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>hello</p>
                                </div>                
                    </div>

<div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        Is ORIT customizable to specific business needs?
                                    </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>hello</p>
                                </div>                
                    </div>
<div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        How can I get started with ORIT ?
                                    </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>hello</p>
                                </div>                
                    </div>
                </div>
            </section>

            <section class="section-6 flex flex-col h-full px-4 my-5" id="contact">
                <!-- <img src="<?php echo get_template_directory_uri() . '/assets/cf_mob.png' ?>" alt="" class="md:hidden mx-auto z-20 self-end"> -->
                <div class="flex flex-col z-0  w-fit mx-auto self-center bg-gradient-to-tr from-orange-700 to-yellow-300 rounded-lg md:hidden">
                    <h1 class="text-4xl text-white mx-auto font-extrabold self-start">Reach out to us</h1>
                    <div class="flex flex-col p-4">
                        <div class="flex flex-row justify-between">

                            <label for="" class="text-xl text-white">First name*</label>
                            <label for="" class="text-xl text-white self-center">Last name*</label>

                        </div>

                        <div class="flex flex-row justify-around">
                            <input type="text" class="w-1/2 rounded-md h-12 mr-4 bg-white">
                            <input type="text" class="w-1/2 rounded-md h-12 bg-white">
                        </div>

                        <div class="flex flex-row justify-between">
                            <label for="" class="text-xl text-white">Title</label>
                            <label for="" class="text-xl text-white self-center">Email</label>
                        </div>

                        <div class="flex flex-row justify-around">
                            <input type="text" class="w-1/2 rounded-md h-12 mr-4 bg-white">
                            <input type="text" class="w-1/2 rounded-md h-12 bg-white">
                        </div>

                        <div class="flex flex-row justify-between">
                            <label for="" class="text-xl text-white">Phone</label>
                        </div>

                        <div class="flex flex-row mb-4">
                            <input type="text" class="self-start w-1/2 rounded-md h-12 bg-white">
                        </div>
                        
                        <div class="flex flex-row justify-between">
                            <label for="" class="text-xl text-white">Message*</label>
                        </div>
                        
                        <div class="flex flex-row">
                            <textarea name="message" id="msgId" cols="30" rows="5" class="rounded-lg w-full bg-white"></textarea>
                        </div>
                        <a href="#" class="bg-yellow-400 text-white rounded-lg text-center px-3 py-2 font-semibold w-36 hover:font-extrabold self-start mt-6 md:self-end">Send</a>

                    </div>
                    
                </div>

                <div class="hidden md:self-center md:flex md:flex-col md:grow-0 md:w-2/3 md:bg-gradient-to-tr md:from-orange-700 md:to-yellow-300 rounded-lg">
                
                    <h1 class="md:self-start text-4xl text-white  font-extrabold">Reach out to us</h1>
                    <form class="md:w-2/3 flex flex-col p-4">
                        <div class="flex flex-row justify-between gap-x-4">

                            <label for="" class="text-xl text-white md:grow-0">First name*</label>
                            <label for="" class="text-xl text-white self-center">Last name*</label>
                            <label for="" class="text-xl text-white self-center mr-4">Title</label>

                        </div>

                        <div class="flex flex-row justify-around gap-3">
                            <input type="text" class="w-1/3 rounded-md h-12 bg-white">
                            <input type="text" class="w-1/3 rounded-md h-12 bg-white">
                            <input type="text" class="w-1/4 rounded-md h-12 bg-white">
                        </div>
                        
                        <div class="flex flex-row justify-between">
                            <label for="" class="text-xl text-white self-start">Email</label>
                            <label for="" class="text-xl text-white">Phone</label>
                        </div>

                        <div class="flex flex-row gap-x-4">
                            <input type="text" class="w-2/3 rounded-md h-12 self-start bg-white">
                            <input type="text" class="self-start w-1/2 rounded-md h-12 bg-white">
                        </div>

                        
                        <div class="flex flex-row justify-between">
                            <label for="" class="text-xl text-white">Message*</label>
                        </div>
                        
                        <div class="flex flex-row">
                            <textarea name="message" id="msgId" cols="30" rows="5" class="rounded-lg md:w-2/3 bg-white"></textarea>
                        </div>
                        
                        <a href="#" class="bg-yellow-400 text-white rounded-lg text-center px-3 py-2 font-semibold w-36 hover:font-extrabold self-start mt-6 md:self-end">Send</a>
                        
                        <!-- <img src="<?php echo get_template_directory_uri() . '/assets/contact_us.png' ?>" alt="contact form" class="hidden md:flex md:grow-0 mx-auto z-20"> -->
                    </form>
                    </section>
                </main>
                
    <?php get_footer(); ?>
</body>

</html>