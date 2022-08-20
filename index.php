<!DOCTYPE html>
<html lang="en" class="md:scroll-smooth ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="/assets/logo.png">
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://www.goat1000.com/jquery.tagcanvas.min.js"></script>

</head> 



<body class="bg-c-main-color text-c-main-text-color font-['Comfortaa'] leading-[1.6] relative overflow-x-hidden w-full">
    <!-- starting animation -->
        <div class="absolute top-0 left-0 w-full h-[100vh] z-[7] bg-[#18435F] flex flex-col items-center justify-center gap-[20px] animate-start_window overflow-hidden origin-center">
            <!-- <div> -->
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 54.187 47.879" class="w-[10%] min-w-[100px] opacity-0 animate-start_logo">
                    <g id="Group_4" data-name="Group 4" transform="translate(-714.976 -613.034)">
                      <path id="Path_17" data-name="Path 17" d="M2140.976,854.173l19.871-42.138,13.625,27.756-9.147,1.829-4.479-8.768-11.67,26.873Z" transform="translate(-1426 -199)" fill="#fff"/>
                      <path id="Path_18" data-name="Path 18" d="M2168.669,849.19l4.163,9.841h11.229l-6.939-14.446Z" transform="translate(-1426 -199)" fill="#fff"/>
                      <path id="Path_19" data-name="Path 19" d="M2149.113,859.913l46.05-25.3-39.174,9.021Z" transform="translate(-1426 -199)" fill="#fff"/>
                    </g>
                  </svg>         

            <!-- </div> -->
        </div>
    <!-- End starting animation -->

    <!-- particles -->
    <canvas id="nokey" class="absolute top-0 left-0 w-full h-[100vh] bg-c-main-color z-[1]">
        Your Browser Don't Support Canvas, Please Download Chrome ^_^``
    </canvas>
    <!-- END - particles -->


    <!-- menu -->

    <div class="bg-[#18435f] w-[100vw] md:w-[0px] h-[100vh] fixed left-0 top-[-100vh] z-[4] flex flex-col items-center justify-center gap-[20px]" id="menu">
        <a class="text-3xl menu-links" href="#about">About</a>
        <a class="text-3xl menu-links" href="#projects">Projects</a>
        <a class="text-3xl menu-links" href="#contact">Contact</a>
        <a class="text-3xl menu-links p-[10px] border-solid border-[1px] border-c-call-to-action-color" href="assets/Resume.pdf" target="_blank">Resume</a>

    </div>
    <!-- End menu -->

    <!-- contact -->
    <div class="z-[0] opacity-[0] fixed top-0 left-0 bg-[#18435f88] w-full h-[100vh] transition-opacity duration-[0.4s]" id="contact">
        <div class="flex flex-col w-[45px] h-[30px] justify-between absolute right-[10px] top-[10px] cursor-pointer" id="close_contact">
            <span class="bg-white w-[100%] h-[3px]  rounded translate-y-[14px] rotate-[45deg]"></span>
            <span class="bg-white w-[100%] h-[3px] rounded opacity-[0]"></span>
            <span class="bg-white w-[100%] h-[3px]  rounded translate-y-[-14px] rotate-[-45deg]"></span>
        </div>
        <div class="w-[90%] h-[75vh] mx-auto my-[12.5vh] flex flex-col items-center justify-evenly gap-[20px] bg-[#18435f]">
            <div class="font-[Audiowide] text-2xl md:text-5xl lg:text-7xl text-center text-c-main-headers-color">
                Contact Me
            </div>
            <div class="flex flex-col items-center justify-center gap-[20px] md:w-[80%] md:max-w-[700px]">
                <div class="flex flex-col md:flex-row items-center justify-center gap-[20px] md:w-[100%] w-full">
                    <input type="text" name="" id="name" class="w-full disable-roder transition-all  bg-[#1e6391b5] h-[40px] p-[10px]  outline-none focus:outline-none md:w-[50%]"placeholder="Name">
                    <input type="email" name="" id="email" class="w-full disable-roder transition-all  bg-[#1e6391b5] h-[40px] p-[10px] outline-none focus:outline-none md:w-[50%]"placeholder="Email">
                </div>
                <input type="text" name="" id="subject" class="outline-none disable-roder transition-all w-full bg-[#1e6391b5] h-[40px] p-[10px] focus:outline-none"placeholder="Subject">
                <textarea name="" id="message" class="outline-none disable-roder transition-all w-full bg-[#1e6391b5] p-[10px] h-[80px] focus:outline-none"placeholder="Message"></textarea>
                <div class="flex flex-col justify-between items-center gap-[10px]">

                    <div class="group border-c-call-to-action-color border-[1px] w-[140px] h-[40px] flex justify-center items-center relative overflow-hidden cursor-pointer">
                        <span class="bg-c-call-to-action-color w-[0px] h-full absolute left-[-5%] skew-x-[-11deg] z-[1] group-hover:w-[110%] transition-[width] duration-[.4s]">
                            
                        </span>
                        <span class=" relative z-[2]" id="send">
                            Send message
                        </span>
                    </div>
                    <div class="text-center text-c-main-headers-color opacity-[0] transition-all" id="res">
                        Please fill out the highlighted fields.
                    </div>
                </div>
            <div class="w-[25px] h-[25px]">

                <a href="https://www.linkedin.com/in/abdullatif-treifi" target="_blank">

                    <svg viewBox="0 0 128 128" class="fill-[#fff]">
                        <path d="M116 3H12a8.91 8.91 0 00-9 8.8v104.42a8.91 8.91 0 009 8.78h104a8.93 8.93 0 009-8.81V11.77A8.93 8.93 0 00116 3zM39.17 107H21.06V48.73h18.11zm-9-66.21a10.5 10.5 0 1110.49-10.5 10.5 10.5 0 01-10.54 10.48zM107 107H88.89V78.65c0-6.75-.12-15.44-9.41-15.44s-10.87 7.36-10.87 15V107H50.53V48.73h17.36v8h.24c2.42-4.58 8.32-9.41 17.13-9.41C103.6 47.28 107 59.35 107 75z"></path>
                        </svg>
                </a>
                  
                    </div>
                </div>
        </div>
    </div>
    <!-- End contact -->
    
    <header class="w-[100%] h-[0px] relative z-[5] overflow-hidden animate-start_site_header">
        <div class="w-[90%] mx-auto flex justify-between py-[20px]">

            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="54.187" height="47.879" viewBox="0 0 54.187 47.879">
                    <g id="Group_4" data-name="Group 4" transform="translate(-714.976 -613.034)">
                      <path id="Path_17" data-name="Path 17" d="M2140.976,854.173l19.871-42.138,13.625,27.756-9.147,1.829-4.479-8.768-11.67,26.873Z" transform="translate(-1426 -199)" fill="#2cdaef"/>
                      <path id="Path_18" data-name="Path 18" d="M2168.669,849.19l4.163,9.841h11.229l-6.939-14.446Z" transform="translate(-1426 -199)" fill="#2cdaef"/>
                      <path id="Path_19" data-name="Path 19" d="M2149.113,859.913l46.05-25.3-39.174,9.021Z" transform="translate(-1426 -199)" fill="#5f50df"/>
                    </g>
                  </svg>              
            </div>
            <nav>
                <ul class="md:flex justify-between gap-[20px] hidden items-center">
                    <li>
                        <a href="#about" class="p-[10px] block group border-b-[1px] border-b-c-call-to-action-color relative">
                            <span >

                                About
                            </span>
                            <span class="group-hover:scale-x-[0] origin-right transition-all duration-[0.4s] absolute bg-c-main-color h-[1px] w-full bottom-[-1px] left-0">

                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#projects" class="p-[10px] block group border-b-[1px] border-b-c-call-to-action-color relative">
                            <span class="">

                                Projects
                            </span>
                            <span class="group-hover:scale-x-[0] origin-right transition-all duration-[0.4s] absolute bg-c-main-color h-[1px] w-full bottom-[-1px] left-0">

                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact-sec" class="p-[10px] block group border-b-[1px] border-b-c-call-to-action-color relative">
                            <span >

                                Contact
                            </span>
                            <span class="group-hover:scale-x-[0] origin-right transition-all duration-[0.4s] absolute bg-c-main-color h-[1px] w-full bottom-[-1px] left-0">

                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="/assets/Resume.pdf" target="_blank" class=" group block p-[10px] border-solid border-[1px] border-c-call-to-action-color transition-all duration-[0.4s] relative z-[0]">
                            <span>
                                Resume
                            </span>
                            <span class="group-hover:scale-x-[0] origin-center transition-all duration-[0.4s] absolute bg-c-main-color h-[1px] w-[70%] top-[-1px] left-[15%]"></span>
                            <span class="group-hover:scale-x-[0] origin-center transition-all duration-[0.4s] absolute bg-c-main-color h-[1px] w-[70%] bottom-[-1px] left-[15%]"></span>
                            <span class="group-hover:scale-y-[0] origin-center transition-all duration-[0.4s] absolute bg-c-main-color h-[70%] w-[1px] top-[15%] left-[-1px]"></span>
                            <span class="group-hover:scale-y-[0] origin-center transition-all duration-[0.4s] absolute bg-c-main-color h-[70%] w-[1px] top-[15%] right-[-1px]"></span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="flex md:hidden flex-col w-[45px] h-[30px] justify-between relative cursor-pointer" id="menu_button">
                <span class="bg-white w-[100%] h-[3px]  rounded menu_top"></span>
                <span class="bg-white w-[100%] h-[3px] rounded menu_middle"></span>
                <span class="bg-white w-[100%] h-[3px]  rounded menu_bottom"></span>
            </div>
        </div>
    </header>

    <main class="relative z-[1] h-0 overflow-hidden animate-start_site_main">
        <!-- hero -->
        <div class="flex flex-col justify-center w-[90%] mx-auto md:w-[70%] md:ml-[5%] gap-[15px] h-[calc(100vh-70px)]">
            <span class="text-c-main-headers-color text-sm md:text-base font-['Carter One']">
                Hi, my name is
            </span>
            <span class="font-[Audiowide] md:text-5xl smd:text-3xl lg:text-7xl text-2xl text-c-main-text-color mt-[12px]">
                Abdullatif Treifi
            </span>
            <span class="font-[Audiowide] md:text-5xl smd:text-3xl lg:text-7xl text-2xl text-c-main-text-color-shadwo">
                I build things for the web.
            </span>
            <span class="mt-[12px] md:w-[50%] w-[90%]">
                I’m a full-stack web developer with a bachelor degree in computer engineering.I specialize in building exceptional digital experiences.
            </span>
            <div class=" contact-button group mt-[12px] border-c-call-to-action-color border-[1px] w-[140px] h-[40px] flex justify-center items-center relative overflow-hidden cursor-pointer">
                <span class="bg-c-call-to-action-color w-[0px] h-full absolute left-[-5%] skew-x-[-11deg] z-[1] group-hover:w-[110%] transition-[width] duration-[.4s]">
                    
                </span>
                <span class=" relative z-[2]">
                    Contact me !
                </span>
            </div>
        </div>
        <!-- END - hero -->




        <div class="main">

            <!-- About me -->
            <div id="about"class="flex w-[90%] mx-auto items-center gap-[calc(calc(50%-500px)/2)] lg:flex-row sm:flex-col mt-[200px]">
                <div class="flex flex-col gap-[20px] lg:w-[50%] w-[100%]">
                    <div class="font-[Audiowide] text-2xl md:text-5xl lg:text-7xl text-c-main-headers-color mt-[12px] text-center lg:text-left">
                        About Me
                    </div>
                    <div class="mt-[20px]">
                        Hello! My name is Abdullatef and I enjoy creating things that live on the internet. My interest in web development started back in 2016 when I decided to build a blog site for a collage assignment which taught me a lot about HTML & CSS, and made me really curious about how to create content dynamically and how to make the site interactive, and from there my journey in PHP & JavaScript started, and I've been coding for the web since. I worked both as a freelancer and as an employee, and I loved every second of both worlds.
                    </div>
                </div>
                <div class=" sm:w-[100%] csm:w-[50%] mx-auto">
                    <div id="myCanvasContainer" class="w-[100%] h-full">
                        <canvas class="h-full mx-auto"id="myCanvas" width="500" height="500">
                         <p>Anything in here will be replaced on browsers that support the canvas element</p>
                         <ul>
                          <!-- <li><a href="http://www.google.com" target="_blank">Google</a></li> -->
                          <li><a class="stop">HTML</a></li>
                          <li><a class="stop">CSS</a></li>
                          <li><a class="stop">Tailwind CSS</a></li>
                          <li><a class="stop">JavaScript</a></li>
                          <li><a class="stop">PHP</a></li>
                          <li><a class="stop">Laravel</a></li>
                          <li><a class="stop">AlpineJS</a></li>
                          <li><a class="stop">JQuery</a></li>
                          <li><a class="stop">Json</a></li>
                          <li><a class="stop">REST</a></li>
                          <li><a class="stop">GIT</a></li>
                          <li><a class="stop">npm</a></li>
                          <li><a class="stop">SQL</a></li>
                          <li><a class="stop">Livewire</a></li>
                         </ul>
                        </canvas>
                       </div>
                </div>
            </div>
            <!-- END - About me -->

            <!-- projects -->
            <div id="projects" class="flex flex-col w-[90%] mx-auto mt-[200px]">
                <div class="font-[Audiowide] text-2xl md:text-5xl lg:text-7xl text-center lg:text-left text-c-main-headers-color mt-[12px]">
                    Projects
                </div>
    
                <div class="flex flex-col gap-[120px] mt-[100px]">
    
                    <!-- project odd -->
                    <div class="project project-odd">
                        <div class="project-img-container group animation-left">
                            <a href="https://stonestox.com" target="_blank">
    
                                <div class="img-filter"></div>
                            </a>
                            <img src="assets/projects/stonestox.png" class="project-img" alt="">
                        </div>
                        <div class="project-info animation-right">
                            <div class="project-title">StonesTox</div>
                            <div class="project-description">Stonestox enables companies to promote their products to customers who can browse and search for products and also contact the suppliers through the platform.</div>
                            <div class="project-stack">Laravel MysQl TailwindCSS AlpineJS Cloudways</div>
                            <a class="project-link" href="https://stonestox.com" target="_blank">
                                <span>

                                    Visit the site
                                </span>
                                <span class="h-[20px] w-[20px]">
                                    <svg class="h-[20px] w-[20px]" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><title>External Link</title><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- End project odd -->
    
                    <!-- project even -->
                    <div class="project project-even">
                        <div class="project-info-even animation-left">
                            <div class="project-title-even">The wedding hack</div>
                            <div class="project-description-even">Website where users can plan their weddings, search for vendors, keep track of their deadlines and budgets, and also manage the guest list.</div>
                            <div class="project-stack-even">Laravel MysQl TailwindCSS alpineJS JQuery Cloudways</div>
                            <a class="project-link-even" href="https://theweddinghack.com" target="_blank">
                                <span>

                                    Visit the site
                                </span>
                                <span class="h-[20px] w-[20px]">
                                    <svg class="h-[20px] w-[20px]" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><title>External Link</title><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                </span>
                            </a>
                        </div>
                        <div class="project-img-container-even group animation-right">
                            <a href="https://theweddinghack.com" target="_blank">
    
                                <div class="img-filter"></div>
                            </a>
                            <img src="assets/projects/twh.png" class="project-img" alt="">
                        </div>
                    </div>
                    <!-- End project even -->
                    <!-- project odd -->
                    <div class="project project-odd">
                        <div class="project-img-container group animation-left">
                            <a href="https://midar.net" target="_blank">
    
                                <div class="img-filter"></div>
                            </a>
                            <img src="assets/projects/midar.png" class="project-img" alt="">
                        </div>
                        <div class="project-info animation-right">
                            <div class="project-title">Midar</div>
                            <div class="project-description">A news website (blog) with custome features.</div>
                            <div class="project-stack">Laravel MysQl TailwindCSS AlpineJS Cloudways</div>
                            <a class="project-link" href="https://midar.net" target="_blank">
                                <span>

                                    Visit the site
                                </span>
                                <span class="h-[20px] w-[20px]">
                                    <svg class="h-[20px] w-[20px]" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><title>External Link</title><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- End project odd -->
    
                    <!-- project even -->
                    <!-- DALIL -->
                    <!-- <div class="project project-even">
                        <div class="project-info-even">
                            <div class="project-title-even">StonesTox</div>
                            <div class="project-description-even">A minimal, dark blue theme for VS Code, Sublime Text, Atom, iTerm, and more. Available on Visual Studio Marketplace, Package Control, Atom Package Manager, and npm.</div>
                            <div class="project-stack-even">HTML CSS Laravel AlpineJS JavaScript PHP TailwindCSS</div>
                            <div class="project-link-even">link</div>
                        </div>
                        <div class="project-img-container-even group">
                            <a href="https://google.com">
    
                                <div class="img-filter"></div>
                            </a>
                            <img src="assets/projects/stonestox.png" class="project-img" alt="">
                        </div>
                    </div> -->
                    <!-- End project even -->
    
    
    
                </div>
            </div>
            <!-- End projects -->

            <!-- Contact -->
            <div id="contact-sec" class="w-[90%] mx-auto mt-[200px] flex flex-col justify-center items-center gap-[20px] lg:items-start">
                <div class="font-[Audiowide] text-2xl md:text-5xl lg:text-7xl text-c-main-headers-color mt-[12px] text-center lg:text-left">
                    Get In Touch
                </div>
                <div class="text-center">
                    I'm currently looking for work. However if you have another request or question, don't hesitate to reach out.
                </div>
                <div class=" contact-button group mt-[12px] border-c-call-to-action-color border-[1px] w-[140px] h-[40px] flex justify-center items-center relative overflow-hidden cursor-pointer">
                    <span class="bg-c-call-to-action-color w-[0px] h-full absolute left-[-5%] skew-x-[-11deg] z-[1] group-hover:w-[110%] transition-[width] duration-[.4s]">
                        
                    </span>
                    <span class=" relative z-[2]">
                        Contact me !
                    </span>
                </div>
            </div>
            <!-- End Contact -->

            <!-- footer -->
            <div class="w-[90%] mx-auto flex flex-col justify-center items-center gap-[20px] mt-[200px] mb-[30px]">
                <div class="text-sm">
                    Designed & Built by Abdullatif Treifi
                </div>
                <div class="w-[25px] h-[25px]">
            <a href="https://www.linkedin.com/in/abdullatif-treifi" target="_blank">

                <svg viewBox="0 0 128 128" class="fill-[#fff]">
                    <path d="M116 3H12a8.91 8.91 0 00-9 8.8v104.42a8.91 8.91 0 009 8.78h104a8.93 8.93 0 009-8.81V11.77A8.93 8.93 0 00116 3zM39.17 107H21.06V48.73h18.11zm-9-66.21a10.5 10.5 0 1110.49-10.5 10.5 10.5 0 01-10.54 10.48zM107 107H88.89V78.65c0-6.75-.12-15.44-9.41-15.44s-10.87 7.36-10.87 15V107H50.53V48.73h17.36v8h.24c2.42-4.58 8.32-9.41 17.13-9.41C103.6 47.28 107 59.35 107 75z"></path>
                    </svg>
            </a>
              
                </div>
            </div>
            <!-- Endfooter -->

        </div>
    </main>
    
</body>


<script type="text/javascript">
    // window.onload = function() {
    //   try {
    //     TagCanvas.Start('myCanvas');
    //     // $('#myCanvas').tagcanvas(options, tagListId);
    //   } catch(e) {
    //     // something went wrong, hide the canvas container
    //     document.getElementById('myCanvasContainer').style.display = 'none';
    //   }
    // };
  </script>

<script src="main.js"></script>
</html>