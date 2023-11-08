<?php get_header(); ?>
     <main>
        <section class="relative section-1 md:h-[96vh]" >
            <div class="flex z-100 flex-col">
                <div>
                    <h1 class="my-style font-extrabold uppercase text-4xl md:text-6xl text-center flex flex-col lg:text-7xl">
                        <div class="typing-container">
                            <span id="sentence" class="sentence"></span>
                            <span class="input-cursor md:h-[73px] h-[45px]"></span>
                        </div>
                    </h1>
                    <h1 class="my-style font-extrabold uppercase text-3xl md:text-5xl text-center flex flex-col lg:text-6xl mt-1">
                        your custodial operation
                    </h1>
                </div>
            
            <div class="flex flex-col z-100">
                    <h2 class="text-2xl z-100 mt-6 text-center md:text-3xl mb-1">
                        Elevate Cleanliness in Your Building
                    </h2>
                    <h2 class="text-xl z-100 sub-title mt-1 text-center md:text-2xl text-gray-600 px-3 font-extralight">
                        Experience the power of transparency, data-driven <br class="md:flex hidden"/> insights, and seamless operations
                    </h2>
              </div>
              <div>
            <div class="flex items-center justify-center w-screen">
              <button class="" onclick="video_modal.showModal()">
                <img class="w-20 md:w-32" src="<?php echo get_template_directory_uri().'/assets/play_btn.png' ?>" alt="">
            </button>
            </div>
              <dialog id="video_modal" class="modal">
                <div class="modal-box bg-transparent max-w-[90vw] md:w-[65vw] w-[90vw] h-[80vh]">
                    <form method="dialog">
                        <button class=" btn-warning text-white btn-sm bg-red-500 btn-circle btn-ghost absolute right-2 md:right-4 top-7">✕</button>
                    </form>
                    <div class="w-full flex items-center justify-center">
                    <div ><iframe src="https://player.vimeo.com/video/878908955?badge=0&amp;autopause=0&amp;quality_selector=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; picture-in-picture" class="md:w-[64vw] w-[93vw] h-[80vh]" title="ORIT"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                        <!-- <iframe  src="https://www.youtube-nocookie.com/embed/eD3Mftx02KE?si=u1PrzOLRZicUiaoX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    </div>
                </div>
                </dialog>
              </div>
              <img class="w-full lg:absolute -z-10 lg:-bottom-80 lg:left-0" src="<?php echo get_template_directory_uri().'/assets/hero_background.png' ?>" alt="">
            </div>
        </section>

        <section class="relative section-2 z-5 flex flex-col justify-center md:gap-20 items-center lg:flex-row mb-10" >
          <div class="flex flex-col gap-14 my-10 justify-center min-w-[300px] relative">
                <img class="absolute w-[250px] md:w-[350px] -z-10 md:top-[10%] left-[10%] md:left-[26%]" src="<?php echo get_template_directory_uri().'/assets/gradient.png' ?>" alt="">
                <div class="flex flex-col gap-10">
                    <div class="hover:bg-[#fff] rounded-lg bg-[#fff] h-28 md:h-40 w-[250px] md:w-[300px] translate-x-14 md:translate-x-36">
                        <button class="btn border-none flex flex-col justify-center items-start shadow-lg w-full h-full text-stone-900 bg-white hover:bg-white md:text-xl text-sm text-left" onclick="my_modal_1.showModal()">
                        <img class="ml-2 w-8" src="<?php echo get_template_directory_uri().'/assets/gradient_small.png' ?>" alt="">
                        <p class="ml-2">
                            In-House <br> Custodial Operators</button>
                        </p>
                    </div>
                    <div class="flex md:flex-row flex-col gap-8">
                        <div class="hover:bg-[#fff] rounded-lg bg-[#fff] h-28 md:h-40 w-[250px] md:w-[300px]">
                            <button class="btn border-none flex flex-col justify-center items-start shadow-lg w-full h-full text-stone-900 bg-white hover:bg-white md:text-xl text-sm text-left" onclick="my_modal_2.showModal()">
                            <img class="ml-2 w-8" src="<?php echo get_template_directory_uri().'/assets/gradient_small.png' ?>" alt="">
                            <p class="ml-2">
                                Property Managers
                            </p>
                        </button>
                        </div>
                        <div class="hover:bg-[#fff] rounded-lg bg-[#fff] h-28 md:h-40 w-[250px] md:w-[300px] translate-x-14 md:translate-x-0  md:translate-y-20">
                                <button class="btn border-none flex flex-col justify-center items-start shadow-lg w-full h-full text-stone-900 bg-white hover:bg-white md:text-xl text-sm text-left" onclick="my_modal_3.showModal()">
                                <img class="ml-2 w-8" src="<?php echo get_template_directory_uri().'/assets/gradient_small.png' ?>" alt="">
                                <p class="ml-2">
                                Building Service Contractors(BCS)
                                </p>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="w-34 px-6 md:px-4 md:text-2xl text-center bg-[#FCB600] text-[#fff] rounded-lg py-5 font-semibold">Book a demo</a>
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box bg-[#eef1f4]">
                    <form method="dialog">
                        <button class="bg-inherit btn btn-sm btn-circle btn-ghost absolute right-2 top-2">&Cross;</button>
                    </form>
                    <p class="py-4 ">ORIT's innovative technology empowers Property Managers by providing real-time insights and transparency into their cleaning operations. 

With ORIT solutions, managers can efficiently oversee their contractors, maintain standard agreements, access live reports, and verify task completion with ease. Gain control and efficiency at your fingertips with ORIT</p>
                    <a href="#" class="bg-[#fcb600] px-2 py-2 rounded-md">Learn more</a>
                </div>
            </dialog>
            
        
            <dialog id="my_modal_2" class="modal">
                <div class="modal-box bg-[#eef1f4]">
                    <form method="dialog">
                        <button class="bg-inherit btn btn-sm btn-circle btn-ghost absolute right-2 top-2">&Cross;</button>
                    </form>
                    <p class="py-4 ">ORIT offers a comprehensive solution for in-house custodial operators, beginning with the digitization and standardization of outdated Excel or manual systems. It facilitates real-time tracking of cleaners or contractors' work progress and effectively addresses staff shortages through dynamic scheduling powered by cutting-edge technology.
Furthermore, ORIT includes auditing, inventory management, and asset tracking functionalities, ensuring a seamless and efficient custodial operation management experience.</p>
                    <a href="#" class="bg-orit px-2 py-2 rounded-md">Learn more</a>
                </div>
            </dialog>

        
            <dialog id="my_modal_3" class="modal">
                <div class="modal-box bg-[#eef1f4]">
                    <form method="dialog">
                        <button class="bg-inherit btn btn-sm btn-circle btn-ghost absolute right-2 top-2">&Cross;</button>
                    </form>
                    <p class="py-4 ">ORIT simplifies the management of service level agreements(SLA) for BSCs across multiple locations, ensuring effortless compliance. Our platform also offers a revenue-boosting opportunity through customizable on-demand tasks, granting clients the flexibility to select tailored services and enhancing profitability. <br>ORIT's intelligent workloading eliminates resource allocation uncertainties and elevates client satisfaction.

ORIT streamlines task verification and supply monitoring, reducing manual checks and minimizing waste. Our comprehensive suite of features empowers Building Service Contractors to thrive in competitive markets, delivering operational efficiency and exceeding client expectations.</p>
                    <a href="#" class="bg-orit px-2 py-2 rounded-md">Learn more</a>
                </div>
            </dialog>
        </section>

        <img class="w-full mt-20 translate-y-8" src="<?php echo get_template_directory_uri() . '/assets/section2_bottom.png' ?>" alt="section 2 bottom">
        
        <!-- Orit online -->
        <section class="section-3 flex lg:flex-row flex-col gap-12 md:gap-32 justify-center items-center  w-full p-6">
            <!-- <img class="self-center md:hidden w-32 flex my-10" src="<?php echo get_template_directory_uri() . '/assets/orit_online_logo.png' ?>" alt=""> -->
            <img class="self-center lg:w-72" src="<?php echo get_template_directory_uri() . '/assets/orit_online_logo.png' ?>" alt="">
                <div class="flex flex-col gap-8 lg:w-1/3 w-full">
                    <div class="card card-side flex flex-col lg:flex-row lg:w-[600px] shadow-xl bg-white">
                        <figure><img src="<?php echo get_template_directory_uri() . '/assets/workloading_icon.png'?>" class="w-[150px] md:w-[200px] lg:w-full"/></figure>
                        <div class="card-body">
                            <h2 class="text-lg font-bold text-center lg:text-left">Work Loading</h2>
                            <p class="text-center lg:text-left">Automates the scheduling of repetitive tasks while accounting for staff availability and 
                                building occupancy.</p>
                                <a href="/workloading" class="underline text-center lg:text-start">Learn more &rarr;</a>
                            </div>
                        </div>
                        <div class="card card-side flex flex-col lg:flex-row lg:w-[600px] shadow-xl bg-white">
                                <figure><img src="<?php echo get_template_directory_uri() . '/assets/inventory_icon.png'?>" class="w-[150px] md:w-[200px] lg:w-full"/></figure>
                                <div class="card-body">
                                    <h2 class="text-lg font-bold text-center lg:text-left">Inventory</h2>
                                    <p class="text-center lg:text-left">Automates the scheduling of repetitive tasks while accounting for staff availability and 
                                        building occupancy.</p>
                                        
                                        <a href="/inventory" class="underline text-center lg:text-start">Learn more &rarr;</a>
                                    </div>
                        </div>
                            
                            
                        <div class="card card-side flex flex-col lg:flex-row lg:w-[600px] shadow-xl bg-white">
                            <figure><img src="<?php echo get_template_directory_uri() . '/assets/asset_icon.png'?>" class="w-[150px] md:w-[200px] lg:w-full"/></figure>
                            <div class="card-body">
                            <h2 class="text-lg font-bold text-center lg:text-left">Asset Management</h2>
                            <p class="text-center lg:text-left">Automates the scheduling of repetitive tasks while accounting for staff availability and 
                                building occupancy.</p>            
                                <a href="/about" class="underline text-center lg:text-start">Learn more &rarr;</a>
                        </div>
                </div>       
            </section>
            <img src="<?php echo get_template_directory_uri() . '/assets/bottom_curve.png' ?>" alt="" class="w-screen">
        

               <section class="section-4 relative">
                <div class="flex flex-col justify-start md:w-[75vw] md:mx-auto">
                    <h1 class="md:text-5xl text-3xl uppercase text-left font-extrabold p-4">
                        our process to optimized <br/>operation
                    </h1>
                    <div class="grid grid-cols-1 lg:grid-cols-3 p-8 lg:p-4 rounded-lg ">
                        <a href="https://docs.google.com/document/d/19hL0zIYV-dlE0cknxAk5yrNbzkDY9SCwKL9dHt61mZE/edit?usp=sharing" target="_blank" class="bg-white text-center my-4 p-10 rounded-lg lg:rounded-none lg:rounded-tl-lg lg:rounded-bl-lg">
                        <h1 class="font-extrabold uppercase text-4xl mb-4">Digitize</h1>
                        <p>Transform your manual processes into a digital format, setting the stage for a streamlined, efficient future.</p>
                        </a>
                    
                        <a href="https://docs.google.com/document/d/19hL0zIYV-dlE0cknxAk5yrNbzkDY9SCwKL9dHt61mZE/edit?usp=sharing" target="_blank" class="bg-white text-center my-4 p-10 rounded-lg lg:rounded-none">
                        <h1 class="font-extrabold uppercase text-4xl mb-4">automate</h1>
                        <p>Automate task trigger points and define schedule generation parameters.</p>
                        </a>
                            
                        <a href="https://docs.google.com/document/d/19hL0zIYV-dlE0cknxAk5yrNbzkDY9SCwKL9dHt61mZE/edit?usp=sharing" target="_blank" class="bg-white text-center my-4 p-10 rounded-lg lg:rounded-none lg:rounded-tr-lg lg:rounded-br-lg">
                        <h1 class="font-extrabold uppercase text-4xl mb-4">analyze</h1>
                        <p>Your data evolves into a strategic asset, incorporating insights from user inputs and historical records.</p>
                        </a>  
                    </div>
                    <div>
                    <div class="flex justify-end items-end">
                        <div class="flex justify-end items-end flex-col p-4">
                            <div class="flex-1">
                                <h1 class="text-3xl font-extrabold uppercase text-start mb-3">unlock the power of data</h1>
                                <div class="flex flex-col gap-8">
                                    <span>
                                        <p>
                                            With ORIT’s powerful analytics, you can make data -driven decisions for your business. </p></span>
                                            <span>
                                                <p>By analyzing key metrics and trends, you can identify areas for improvement, facilitate performance management, allocate resources, track consumption of consumables, and drive efficiency for your organization.</p>
                                            </span>
                                            <span>
                                                <p>With accurate and timely information, you can stay ahead of your industry and make smarter choices for your operation.
                                                    </p>
                                                </span>
                                                
                                                <a href="#" class="font-semibold text-[#fff] bg-[#FCB600] rounded-lg text-center text-2xl w-[200px] px-6 py-4 ">Get Started</a>
                                            </div>
                                        </div>
                         </div>
                         <img src="<?php echo get_template_directory_uri() . '/assets/responsive_screen.png'?>" alt="" class="h-[400px] object-cover lg:block hidden">
                    </div>
                  </div>
                </div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/screen_bottom_curve.png'?>" alt="" class="absolute -bottom-40 hidden lg:block left-0 w-screen">               
                    <img src="<?php echo get_template_directory_uri() . '/assets/pccurve.png'?>" alt="" class="w-screen lg:hidden">
                </div>
            </section>

            <section class="section-5 flex flex-col w-full p-4 gap-4 md:my-40">
                <div class="px-4 md:flex md:flex-row justify-around">
                    <img class="w-3/4 md:w-1/3 mx-auto md:self-center md:grow-0" src="<?php echo get_template_directory_uri() . '/assets/faq.png' ?>" alt="frequently asked questions.">
                  <div class="md:w-2/3">
                  <h1 class="font-extrabold text-4xl text-center italic mt-10">Frequently Asked Questions.</h1>
                    <div class="my-4">      
                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800 rounded-none">
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
                            <div class="collapse collapse-plus border-2 border-stone-800 rounded-none">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        How can ORIT benefit my in-house janitorial operations?
                                    </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>ORIT offers benefits such as efficient task tracking, dynamic scheduling, and supply control. It helps reduce errors, streamline operations, and proactively address challenges, ultimately enhancing your janitorial efficiency.</p>
                                </div>
                            </div>
                            <div class="my-4">

                                <div class="mx-auto w-full self-start">
                                    <div class="collapse collapse-plus border-2 border-stone-800 rounded-none">
                                        <input type="radio" name="my-accordion-1" checked="checked" /> 
                                        <div class="collapse-title text-xl font-medium self-end">
                                            <span>
                                                How does ORIT help Building Service Contractors (BSCs)?
                                            </span>
                                        </div>
                                        <div class="collapse-content"> 
                                            <p>
                                            ORIT empowers BSCs by allowing them to track service level agreements across multiple locations, offer on-demand tasks to clients, improve workloading accuracy, streamline task verification, and manage supplies efficiently. These features enhance service quality and profitability.
                                            </p>
                                        </div>
                                    </div>    
                                    
                    <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800 rounded-none">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        Is ORIT suitable for multi-location businesses?
                                    </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>Absolutely! ORIT is designed to cater to multi-location businesses, making it easy to maintain consistent compliance with service level agreements across various sites.</p>
                                </div>
                    </div>
                    <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800 rounded-none">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                        Can ORIT adapt to staffing changes?
                                    </span>
                                </div>
                                <div class="collapse-content"> 
                                    <p>Yes, ORIT's dynamic task scheduling feature enables it to adapt to staffing fluctuations efficiently. It ensures your operations continue to run smoothly regardless of workforce changes.</p>
                                </div>                
                        </div>
                    </div>
                    <div class="my-4">

                                        <div class="mx-auto w-full self-start">
                                            <div class="collapse collapse-plus border-2 border-stone-800 rounded-none">
                                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                                <div class="collapse-title text-xl font-medium self-end">
                                                    <span>
                                                    How does ORIT's inventory management work?
                                                    </span>
                                                    
                                                </div>
                                                <div class="collapse-content"> 
                                                    <p>ORIT helps you keep track of supplies efficiently, reducing losses and enabling proactive inventory adjustments to minimize waste.</p>
                                                </div>
                                            </div>
                    <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800 rounded-none">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                Is ORIT user-friendly and easy to implement?    
                                </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>Yes, ORIT is designed to be user-friendly and intuitive. Implementation typically involves minimal disruption to your existing operations.</p>
                                </div>                
                        </div>
                    </div>
                    <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800 rounded-none">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                <span>
                                What kind of support is available for ORIT users?
                                </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>ORIT offers customer support to assist with any questions or issues you may encounter. Training and resources are also available to help you make the most of the system.</p>
                                </div>                
                        </div>
                    </div>
                    <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800 rounded-none">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                <span>
                                Is ORIT customizable to specific business needs?
                                </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>Yes, ORIT can be tailored to meet the specific needs and requirements of your business, ensuring it aligns seamlessly with your operational processes.</p>
                                </div>                
                        </div>
                    </div>
                    <div class="my-4">

                        <div class="mx-auto w-full self-start">
                            <div class="collapse collapse-plus border-2 border-stone-800 rounded-none">
                                <input type="radio" name="my-accordion-1" checked="checked" /> 
                                <div class="collapse-title text-xl font-medium self-end">
                                    <span>
                                    How can I get started with ORIT for my facility management needs?
                                </span>
                                    
                                </div>
                                <div class="collapse-content"> 
                                    <p>To get started with ORIT and explore how it can benefit your facility management or janitorial operations, please <a href="#contact">contact</a> us to schedule a demonstration or request more information.</p>
                                </div>                
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-6 flex flex-col h-full px-4 my-5">
                <div class="flex flex-col z-0  w-fit mx-auto self-center rounded-2xl  md:hidden relative">
                    <img src="<?php echo get_template_directory_uri() . '/assets/cta.png' ?>" alt="" class="md:hidden rounded-2xl absolute w-full h-full object-cover -z-10 top-0 left-0">
                    <h1 class="md:text-4xl text-2xl text-white font-extrabold text-start mt-3 px-8">Reach out to us</h1>
                    <div class="flex flex-col p-8">
                            <div class="flex flex-col">
                                <label for="" class="text-xl text-white">First name*</label>
                                <input type="text" class="w-full rounded-md h-12 bg-white">
                            </div>
                            <div class="flex flex-col">
                                <label for="" class="text-xl text-white">Last name*</label>
                                <input type="text" class="w-full rounded-md h-12 bg-white">
                            </div>
                            <div class="flex flex-col">
                                <label for="" class="text-xl text-white">Title*</label>
                                <input type="text" class="w-full rounded-md h-12 bg-white">
                            </div>
                            <div class="flex flex-col">
                                <label for="" class="text-xl text-white">Email address*</label>
                                <input type="text" class="w-full rounded-md h-12 bg-white">
                            </div>
                            <div class="flex flex-col">
                                <label for="" class="text-xl text-white">Phone Number*</label>
                                <input type="text" class="w-full rounded-md h-12 bg-white">
                            </div> 
                        <div class="flex flex-row justify-between">
                            <label for="" class="text-xl text-white">Message*</label>
                        </div>
                        
                        <div class="flex flex-row">
                            <textarea name="message" id="msgId" cols="30" rows="5" class="rounded-lg w-full bg-white"></textarea>
                        </div>
                        <a href="#" class="bg-[#fcb600] text-white rounded-lg text-center px-3 py-2 font-semibold w-36 hover:font-extrabold self-start mt-6 md:self-end">Send</a>

                    </div>
                    
                </div>

                <div class="hidden md:self-center md:flex md:flex-col md:grow-0 w-[70vw] relative rounded-3xl p-8">
                    <img src="<?php echo get_template_directory_uri() . '/assets/cta.png' ?>" alt="" class="hidden md:block rounded-3xl absolute w-full h-full object-cover -z-10 top-0 left-0">
                    <h1 class="md:self-start text-5xl text-white  font-extrabold mb-3">Reach out to us</h1>
                    <form class="md:w-2/3 gap-4 flex flex-col">
                        <div class="flex gap-8">
                            <div class="flex flex-col">
                                <label for="" class="text-xl text-white">First Name*</label>
                                <input type="text" class="w-full rounded-md h-12 bg-white">
                            </div> 
                            <div class="flex flex-col">
                                <label for="" class="text-xl text-white">Last Name*</label>
                                <input type="text" class="w-full rounded-md h-12 bg-white">
                            </div> 
                            <div class="flex flex-col">
                                <label for="" class="text-xl text-white">Title*</label>
                                <input type="text" class="w-full rounded-md h-12 bg-white">
                            </div> 
                        </div>
                        <div class="flex gap-8">
                            <div class="flex flex-col flex-1">
                                <label for="" class="text-xl text-white">Email Address*</label>
                                <input type="text" class="w-full rounded-md h-12 bg-white">
                            </div> 
                            <div class="flex flex-col flex-1">
                                <label for="" class="text-xl text-white">Phone Number*</label>
                                <input type="text" class="w-full rounded-md h-12 bg-white">
                            </div> 
                        </div>
                        <div class="flex gap-8">
                            <div class="flex flex-col flex-1">
                                <label for="" class="text-xl text-white">Message*</label>
                                <textarea name="message" id="msgId" cols="30" rows="3" class="rounded-lg w-full bg-white"></textarea>
                            </div> 
                        </div>
                        <a href="#" class="bg-[#fcb600] text-white rounded-lg text-center px-3 py-2 font-semibold w-36 hover:font-extrabold self-start md:self-end">Send</a>
                        
                        <!-- <img src="<?php echo get_template_directory_uri() . '/assets/contact_us.png' ?>" alt="contact form" class="hidden md:flex md:grow-0 mx-auto z-20"> -->
                    </form>
                    </section>
                </main>

                <script>
                    async function typeSentence(sentence, eleRef, delay = 100) {
                    const letters = sentence.split("");
                    let i = 0;
                    while(i < letters.length) {
                        await waitForMs(delay);
                        document.getElementById(eleRef).append(letters[i]);
                        i++
                    }
                    return;
                    }

                    function waitForMs(ms) {
                    return new Promise(resolve => setTimeout(resolve, ms))
                    }
                    async function deleteSentence(eleRef) {
                    const sentence = document.getElementById(eleRef).innerHTML;
                    const letters = sentence.split("");
                    let i = 0;
                    while(letters.length > 0) {
                        await waitForMs(100);
                        letters.pop();
                        document.getElementById(eleRef).innerHTML = letters.join("");
                        }
                    }
                    const carouselText = [
                    {text: "DIGITIZE"},
                    {text: "AUTOMATE"},
                    {text: "OPTIMIZE"}
                    ]

                    async function carousel(carouselList, eleRef) {
                        var i = 0;
                        while(true) {
                        await typeSentence(carouselList[i].text, eleRef);
                        await waitForMs(1500);
                        await deleteSentence(eleRef);
                        await waitForMs(500);
                        i++
                        if(i >= carouselList.length) {i = 0;}
                        }
                    }
                    document.addEventListener('DOMContentLoaded', async function() {
                        carousel(carouselText, "sentence")
                    });
                </script>
               
    <?php get_footer(); ?>
</body>

</html>