<!DOCTYPE html>
<html lang="en" class="mt-20">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orit --- 2</title>

    <?php wp_head() ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="font-mont">
     <?php get_header() ?>
     
     <main class="">
        <section class="section-1 flex flex-col my-20  bg-[url('<?php echo get_template_directory_uri() . "/assets/hero_bg.png"?>')]">
            <div class="md:flex-row flex flex-col gap-4">
                <h1 class="text-white justify-start text-center md:text-justify-start flex flex-col">
                    <span class="font-semibold md:text-6xl text-5xl">
                        Efficiency evolved.
                    </span>
                    <span class="md:text-5xl text-4xl">
                        Occupancy driven workloading
                    </span>
                </h1>

            </div>

            <p class="justify-center text-center md:text-left text-2xl my-4 md:w-1/2">
                ORIT Workloading uses occupancy tracking and advanced algorithms to optimize and streamline workflow, allowing for increased efficiency and productivity.
            </p>

            <a href="#" class="bg-green-400 justify-center px-6 py-3 text-stone-950 rounded-md hover:bg-green-600 md:self-start self-center mt-4">See how it works</a>
        
            <img src="<?php echo get_template_directory_uri() . '/assets/2ndcorner.png' ?>" alt="" class="w-full">
        </section>

        <section class="section-2 flex flex-col p-4 my-20">
            <div class="md:self-start md:mx-8">
                <h2 class="text-green-400 font-bold uppercase text-4xl md:justify-start md:text-3xl">dynamic scheduling</h2>
                <p class="text-white text-2xl md:text-xl">Use innovation to build productive operation.</p>
            </div>
            <div class="flex md:flex-row-reverse flex-col md:justify-around my-4">
                <div class="flex flex-col md:flex-col gap-4 md:w-1/3 md:flex-wrap">
                    <div class="bg-blue-600 text-white text-2xl flex flex-col gap-3 p-4">
                        <h2 class="underline">Occupation Driven</h2>
                        <p class="text-sm">Automated traffic flow monitoring, utilizing anonymous occupancy sensors, optimizes resource allocation by triggering tasks based on set thresholds, allowing efficient workload management.</p>
                    </div>
                    <div class="bg-blue-600 text-white text-2xl">
                        <h2 class="underline">Task Verification</h2>
                    </div>
                    <div class="bg-blue-600 text-white text-2xl">
                        <h2 class="underline">Adaptability to staffing Variations</h2>
                    </div>
                    <div class="bg-blue-600 text-white text-2xl">
                        <h2 class="underline">Automated Scheduling</h2>
                    </div>
                </div>
                <a href="#" class="bg-green-400 px-6 py-3 text-stone-950 rounded-md hover:bg-green-600 md:self-start self-center mt-4">Request a Demo</a>   
            </div>
        </section>

        <section class="section-3 flex flex-col my-20 h-full bg-stone-100">
            <h2 class="font-bold text-3xl text-center text-stone-800 md:text-2xl">
                Experience Streamlined Workflows, and Intelligent Task Management
            </h2>

            <h3 class="my-10 font-bold text-2xl text-center text-green-400">Your Pathway to Operational Excellence and Client Satisfaction</h3>

            <p class="text-xl text-stone-800 text-center flex flex-col gap-6"><span>

                Precision scheduling, tailored to space requirements, guarantees efficient task management, providing supervisors peace of mind. 
            </span>
            <span>

                Our adaptability handles staff changes seamlessly. Cutting-edge technology verifies task excellence, instilling confidence in your team.
            </span>
            <span>

                Occupancy-driven solutions enhance satisfaction and productivity, creating pristine environments for employees and visitors.</p>
            </span>
            
            <a href="#" class="bg-green-400 px-6 py-3 text-stone-950 rounded-md hover:bg-green-600 md:self-start self-center mt-4">Learn More</a>

            <img src="<?php echo get_template_directory_uri() . '/assets/***.png'?>" alt="">
        </section>

        <section class="section-4 flex flex-col h-full my-20">
            <h2 class="md:text-xl text-2xl text-green-400 font-bold mx-auto">Comparison</h2>
            <p class="text-3xl md:text-2xl text-white text-center">In today's fast-paced world, In today's fast-paced world, </p>

            <div class="flex flex-row pt-20 w-full justify-center">
                <div class="flex flex-col justify-around w-1/4 mt-16">
                    <div class="w-full border-2 border-t-blue-500 flex flex-col justify-center border-b-0 border-x-0 p-4">
                        <h2 class="font-bold text-3xl md:text-2xl">The competetion</h2>
                        <p class=" text-left">
                            In today's fast-paced world, In ,  In today's fast-paced world, In today's fast-paced world, 
                        </p>
                    </div>
                    <div class="w-full border-2 border-y-blue-500 flex flex-col justify-center border-b-0 border-x-0 p-4">
                        <h2 class="font-bold text-3xl md:text-2xl">The competetion</h2>
                        <p class=" text-left">
                            In today's fast-paced world, In ,  In today's fast-paced world, In today's fast-paced world, 
                        </p>
                    </div>
                    <div class="w-full border-2 border-y-blue-500 flex flex-col justify-center border-b-0 border-x-0 p-4">
                        <h2 class="font-bold text-3xl md:text-2xl">The competetion</h2>
                        <p class=" text-left">
                            In today's fast-paced world, In ,  In today's fast-paced world, In today's fast-paced world, 
                        </p>
                    </div>
                    <div class="w-full border-2 border-y-blue-500 flex flex-col justify-center border-b-0 border-x-0 p-4">
                        <h2 class="font-bold text-3xl md:text-2xl">The competetion</h2>
                        <p class=" text-left">
                            In today's fast-paced world, In ,  In today's fast-paced world, In today's fast-paced world, 
                        </p>
                    </div>
                    <div class="w-full border-2 border-y-blue-500 flex flex-col justify-center border-x-0 p-4">
                        <h2 class="font-bold text-3xl md:text-2xl">The competetion</h2>
                        <p class=" text-left">
                            In today's fast-paced world, In ,  In today's fast-paced world, In today's fast-paced world, 
                        </p>
                    </div>
                </div>

                <div class="h-full justify-center flex flex-col -translate-y-10 w-1/4 ">
                    <div class=" flex flex-col gap-8 self-center justify-start border-[1px] shadow-md border-stone-950 grow-0 w-full pb-20">
                        <img class="md:w-64 w-40 mx-auto " src="<?php echo get_template_directory_uri() . '/assets/logo.png' ?>" alt="img">
                        <img class="md:w-24 self-center" src="<? echo get_template_directory_uri() . '/assets/tick.png' ?>" alt="img">
                        <img class="md:w-24 self-center" src="<? echo get_template_directory_uri() . '/assets/tick.png' ?>" alt="img">
                        <img class="md:w-24 self-center" src="<? echo get_template_directory_uri() . '/assets/tick.png' ?>" alt="img">
                        <img class="md:w-24 self-center" src="<? echo get_template_directory_uri() . '/assets/tick.png' ?>" alt="img">
                        <img class="md:w-24 self-center" src="<? echo get_template_directory_uri() . '/assets/tick.png' ?>" alt="img">
                    </div>
                </div>
            
            <div class="flex flex-col justify-around w-1/4 mt-14 -translate-y-8">
                    <h2 class="text-3xl text-white font-bold -translate-y-10 text-center">The Competetion</h2>
                    <div class="w-full border-2 border-y-blue-500 flex flex-row justify-center border-b-0 border-x-0">
                        <img src="<?php echo get_template_directory_uri() . '/assets/close.png' ?>" class="md:w-20 self-center py-6">
                    </div>
                    <div class="w-full border-2 border-y-blue-500 flex flex-row justify-center border-b-0 border-x-0">
                        <img src="<?php echo get_template_directory_uri() . '/assets/close.png' ?>" class="md:w-20 self-center py-6">
                    </div>
                    <div class="w-full border-2 border-y-blue-500 flex flex-row justify-center border-b-0 border-x-0">
                        <img src="<?php echo get_template_directory_uri() . '/assets/close.png' ?>" class="md:w-20 self-center py-6">
                    </div>
                    <div class="w-full border-2 border-y-blue-500 flex flex-row justify-center border-b-0 border-x-0">
                        <img src="<?php echo get_template_directory_uri() . '/assets/close.png' ?>" class="md:w-20 self-center py-6">
                    </div>
                    <div class="w-full border-2 border-y-blue-500 flex flex-row justify-center border-x-0">
                        <img src="<?php echo get_template_directory_uri() . '/assets/close.png' ?>" class="md:w-20 self-center py-6">
                    </div>
               </div>
            </div>
        </section>



     </main>

     <?php get_footer() ?>

</body>
</html>