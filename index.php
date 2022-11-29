<?php

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="./packages/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="./packages/css/styles.css">

        <title>Sadia's Portfolio</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Sadia Elias</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">
                                <i class="uil uil-estate nav__icon"></i>Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i>About
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i>Skills
                            </a>
                        </li>
                          <li class="nav__item">
                            <a href="#services" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i>Services
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i>Portfolio                                
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i>Contact                               
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>
                <div class="nav__btns">
                    <!-- Theme change button -->

                    <i class="uil uil-moon change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="#" target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>
                            <a href="#" target="_blank" class="home__social-icon">
                                <i class="uil uil-twitter-alt"></i>
                            </a>
                    
                        </div>

                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                    <image class="home__blob-img" x="" xlink:href="packages/images/eva-1.png" width="80" height="185"/>
                                </g>
                            </svg>
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">Hi, I'm Sadia</h1>
                            <h3 class="home__subtitle">Web Developer</h3>
                            <p class="home__description">Intermediate level experience in web development knowledge and digital designing with quality work.</p>
                            <a href="#contact" class="button button--flex home__button">
                                Contact Me<i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll-name">Scroll Down</span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">My Introduction</span>

                <div class="about__container container grid">
                    <img src="packages/images/eva-2.png" width="80" height="185" alt="" class="about__img">
                    <div class="about__data">
                        <p class="about__description">
                            Web Developer, with extensive knowledge and years of experience, 
                            working in web technologies and other web developement tools, 
                            delivering quality work.
                        </p>
                        <div class="about__info">
                            <div>
                                <span class="about__info-title">01+</span>
                                <span class="about__info-name">Years <br> experience</span>
                            </div>
                            <div>
                                <span class="about__info-title">02+</span>
                                <span class="about__info-name">Completed <br> certifications</span>
                            </div>
                            <div>
                                <span class="about__info-title">01+</span>
                                <span class="about__info-name">companies<br>worked</span>
                            </div>
                        </div>

                        <div class="about__buttons">
                            <a download="" href="#" class="button button--flex">
                                Download CV<i class="uil uil-download-alt button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">My technical level</span>

                <div class="skills__container container grid">
                    <div>
                         <!--==================== SKILL-1 ====================-->
                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-analytics skills__icon"></i>
                               <div>
                                   <h1 class="skills__title">Web Developer</h1>
                                   <span class="skills__subtitle">More than 1 year</span>
                               </div>

                               <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__python"></span>
                                    </div>
                                </div>
                               <div class="skills__data">
                                   <div class="skills__titles">
                                       <h3 class="skills__name">CSS</h3>
                                       <span class="skills__number">80%</span>
                                   </div>
                                   <div class="skills__bar">
                                       <span class="skills__percentage skills__tab"></span>
                                   </div>
                               </div>
                               <div class="skills__data">
                                   <div class="skills__titles">
                                       <h3 class="skills__name">Java Script</h3>
                                       <span class="skills__number">60%</span>
                                   </div>
                                   <div class="skills__bar">
                                       <span class="skills__percentage skills__sql"></span>
                                   </div>
                               </div>
                            </div>
                        </div>
                         <!--==================== SKILLS 2 ====================-->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-money-bill skills__icon"></i>
                               <div>
                                   <h1 class="skills__title">Designer</h1>
                                   <span class="skills__subtitle">More than 1 year</span>
                               </div>

                               <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__bank"></span>
                                    </div>
                               </div>
                               <div class="skills__data">
                                   <div class="skills__titles">
                                       <h3 class="skills__name">SCSS3</h3>
                                       <span class="skills__number">80%</span>
                                   </div>
                                   <div class="skills__bar">
                                       <span class="skills__percentage skills__counter"></span>
                                   </div>
                               </div>
                               
                            </div>
                        </div>
                    </div>

                    <div>
                        <!--==================== SKILLS 3 ====================-->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                               <i class="uil uil-brackets-curly skills__icon"></i>
                               <div>
                                   <h1 class="skills__title">Java Scripts Writter</h1>
                                   <span class="skills__subtitle">More than 1 years</span>
                               </div>

                               <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                
                               <div class="skills__data">
                                   <div class="skills__titles">
                                       <h3 class="skills__name">JavaScript</h3>
                                       <span class="skills__number">60%</span>
                                   </div>
                                   <div class="skills__bar">
                                       <span class="skills__percentage skills__js"></span>
                                   </div>
                               </div>
                               
                           </div>
                       </div>
                    </div>
                </div>
            </section>

              <!--==================== QUALIFICATION ====================-->
        <section class="qualification__section">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My personal journey</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target='#education'>
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>

                    <div class="qualification__button button--flex" data-target="#work">
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Work
                    </div>
                </div>

                <div class="qualification__sections">
            <!--==================== QUALIFICATION CONTENT 1 ====================-->
            <div class="qualification__content qualification__active" data-content id="education">
             <!--==================== QUALIFICATION 1 ====================--> 
             <div class="qualification__data">
                 <div>
                     <h3 class="qualification__title">Secondary School Certificate </h3>
                     <span class="qualification__subtitle">Chittagong, Bangladesh</span>
                     <div class="qualification__calendar">
                        <i class="uil uil-calendar-alt"></i>
                        2016 - 2018
                     </div>
                 </div>

                 <div>
                     <span class="qualification__rounder"></span>
                     <span class="qualification__line"></span>
                 </div>
             </div>
             
             <!--==================== QUALIFICATION 2 ====================--> 
             <div class="qualification__data">
                <div></div>
                <div>
                   <span class="qualification__rounder"></span>
                   <span class="qualification__line"></span>
                </div>

                <div>
                    <h3 class="qualification__title">Higher Secondary Certificate</h3>
                    <span class="qualification__subtitle">Chittagong, Bangladesh</span>
                    <div class="qualification__calendar">
                       <i class="uil uil-calendar-alt"></i>
                       2018 - 2020
                    </div>
                </div>
            </div> 

            <!--==================== QUALIFICATION 3 ====================--> 
            <div class="qualification__data">
                <div>
                    <h3 class="qualification__title">BSc in CSE</h3>
                    <span class="qualification__subtitle">International Islamic University Chittagong</span>
                    <div class="qualification__calendar">
                       <i class="uil uil-calendar-alt"></i>
                       2020 - Current
                    </div>
                </div>

                <div>
                    <span class="qualification__rounder"></span>
                    <span class="qualification__line"></span>
                </div>
            </div> 
            </div>
            
            <!--==================== QUALIFICATION CONTENT 2 ====================-->
            <div class="qualification__content" data-content id="work">
                <!--==================== QUALIFICATION 1 ====================--> 
                <div class="qualification__data">
                    <div>
                        <h3 class="qualification__title">Trainee Developer Assistant</h3>
                        <span class="qualification__subtitle">Sarowar's Institution, Chittagong</span>
                        <div class="qualification__calendar">
                           <i class="uil uil-calendar-alt"></i>
                           2021 - 2022
                        </div>
                    </div>
   
                    <div>
                        <span class="qualification__rounder"></span>
                        <span class="qualification__line"></span>
                    </div>
                </div>
                
                <!--==================== QUALIFICATION 2 ====================--> 
                <div class="qualification__data">
                   <div></div>
                   <div>
                      <span class="qualification__rounder"></span>
                      <span class="qualification__line"></span>
                   </div>
   
                   <div>
                       <h3 class="qualification__title">Developer Assistant</h3>
                       <span class="qualification__subtitle">Sarowar's Institution, Chittagong</span>
                       <div class="qualification__calendar">
                          <i class="uil uil-calendar-alt"></i>
                          2022 - 2022
                       </div>
                   </div>
               </div> 
   
               <!--==================== QUALIFICATION 3 ====================--> 
               <div class="qualification__data">
                   <div>
                       <h3 class="qualification__title">Web developer</h3>
                       <span class="qualification__subtitle">Sarowar's Institution, Chittagong</span>
                       <div class="qualification__calendar">
                          <i class="uil uil-calendar-alt"></i>
                          2022 - Present
                       </div>
                   </div>
   
                   <div>
                       <span class="qualification__rounder"></span>
                       <!-- <span class="qualification__line"></span> -->
                   </div>
               </div> 
          
               </div> 
             
               </div>
            </div>
        </section>
      
        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">
            <h2 class="section__title">Services</h2>
            <span class="section__subtitle">What I offer</span>

            <div class="services__container container grid">
        <!--==================== SERVICES 1 ====================-->  
        <div class="services__content">
            <div>
                <i class="uil uil-analytics skills__icon"></i>
                <h3 class="services__title">Web Development<br></h3>
            </div>
            <span class="button button--flex button--small button--link services__button">
                View more
                <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
                <div class="services__modal-content">
                    <h4 class="services__modal-title">Web Development<br></h4>
                    <i class="uil uil-times services__modal-close"></i>

                    <ul class="services__modal-services grid">
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I do web developement.</p>
                        </li>

                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p> Master Sarowar taught me web developing  </p>
                        </li>

                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>Master Sarowar is great </p>
                        </li>

                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>Master Sarowar knows a lot </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
        
        <!--==================== SERVICES 2 ====================--> 
        <div class="services__content">
            <div>
                <i class="uil uil-money-bill skills__icon"></i>
                <h3 class="services__title">Web Desinging<br> </h3>
            </div>
            <span class="button button--flex button--small button--link services__button">
                View more
                <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
                <div class="services__modal-content">
                    <h4 class="services__modal-title">Web Desinging<br></h4>
                    <i class="uil uil-times services__modal-close"></i>

                    <ul class="services__modal-services grid">
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I do web designing.</p>
                        </li>

                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>Master Sarowar taught me web designing</p>
                        </li>

                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>Master Sarowar is great</p>
                        </li>

                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>Master Sarowar knows a lot</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
       
        <!--==================== SERVICES 3 ====================-->
        <div class="services__content">
            <div>
                <i class="uil uil-arrow services__icon"></i>
                <h3 class="services__title">JS Writing<br></h3>
            </div>
            <span class="button button--flex button--small button--link services__button">
                View more
                <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
                <div class="services__modal-content">
                    <h4 class="services__modal-title">JS Writing<br></h4>
                    <i class="uil uil-times services__modal-close"></i>

                    <ul class="services__modal-services grid">
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I write Java Scripts.</p>
                        </li>

                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>Master Sarowar taught me writing scripts</p>
                        </li>

                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>Master Sarowar is great</p>
                        </li>

                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>Master Sarowar knows a lot</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div> 
  
       
        </div>
        </section>
        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">

            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Most recent works</span>

            <div class="portfolio__container container swiper-container">
                <div class="swiper-wrapper">
        <!--==================== PORTFOLIO 1 ====================-->
        
            <div class="portfolio__content grid swiper-slide">
                <img src="./packages/images/portfolio1.jpg" alt="" class="portfolio__img">

                <div class="portfolio_">
                    <h3 class="portfolio__title">Modern Dashboard</h3>
                    <p class="portfolio__description">Data analitical dashboard adaptable to all devices, 
                        with ui components and animated interactions.</p>
                    <a href="#" class="button button--flex button--small portfolio__button">
                        Demo
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                </div>
            </div>

            <!--==================== PORTFOLIO 2 ====================-->
        
            <div class="portfolio__content grid swiper-slide">
                <img src="./packages/images/portfolio3.PNG" alt="" class="portfolio__img">

                <div class="portfolio_">
                    <h3 class="portfolio__title">E-Commerce website</h3>
                    <p class="portfolio__description">Above Amazon clone is adaptable to all devices, with 
                        ui components and animated interactions.</p>
                    <a href="#" class="button button--flex button--small portfolio__button">
                        Demo
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                </div>
            </div>

            <!--==================== PORTFOLIO 3 ====================-->
        
            <div class="portfolio__content grid swiper-slide">
                <img src="./packages/images/portfolio2.png" alt="" class="portfolio__img">

                <div class="portfolio_">
                    <h3 class="portfolio__title">Brand Design</h3>
                    <p class="portfolio__description">Tesla Clone is adaptable to all devices, with 
                        ui components and animated interactions.</p>
                    <a href="#" class="button button--flex button--small portfolio__button">
                        Demo
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                </div>
            </div>
                </div>

            <!-- add arrows-->
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
            </div>

            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            
        
        </div>

        </section>

        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section">

            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title">You have a new project?</h2>
                        <p class="project__description">Contact me now and get discounts on your Web development projects.</p>
                        <a href="#contact" class="button button--flex button--white">Contact me
                            <i class="uil uil-message project__icon button__icon"></i>
                        </a>
                       
                    </div>
                    <!-- <img src="assets/img/project.png" alt="" class="project__img"> -->
                </div>
            </div>

        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section">

            <h2 class="section__title">Testimonials</h2>
            <span class="section__subtitle">My client saying</span>

            <div class="testimonial__container container swiper-container">
                <div class="swiper-wrapper">
                <!--==================== TESTIMONIAL 1 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="./packages/images/bubbles.png" alt="" class="testimonial__img">
                                
                                <div>
                                    <h3 class="testimonial__name">Bubbles</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>
                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">Sadia is such a kind hearted and delivers works on time.
                        </p>
                    </div>
                    <!--==================== TESTIMONIAL 2 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="./packages/images/buttercup.jpg" alt="" class="testimonial__img">
                                
                                <div>
                                    <h3 class="testimonial__name">Buttercup</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>
                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">Sadia is a pretty cute lady who has a great wisdom to work smartly.
                        </p>
                    </div>
                    

                <!--Add pagination-->
                <div class="swiper-pagination swiper-pagination-testimonial"></div>
            </div>
            </section>

        <!--==================== CONTACT ME ====================-->
        <section class="contact section" id="contact">
            <h2 class="section__title">Contact me</h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone-alt contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Call me</h3>
                            <span class="contatc__subtitle">+88XXXXXXXXXXX</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">E-mail</h3>
                            <span class="contatc__subtitle">XXXXXXXX@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contatc__subtitle">Badurtala, Chittagong</span>
                        </div>
                    </div>
                </div>

                <form method="post" action="contact.php" class="contact__form grid">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="Name" class="contact__label">Name</label>
                            <input type="text" name="txtName" id="txtName" class="contact__input">
                        </div>

                        <div class="contact__content">
                            <label for="email" class="contact__label">E-mail</label>
                            <input type="email" name="txtEmail" id="txtEmail" class="contact__input">
                        </div>
                    </div>

                    <div class="contact__content">
                        <label for="subject" class="contact__label">Subject</label>
                        <input type="text" name="txtSubject" id="txtSubject" class="contact__input">
                    </div>

                    <div class="contact__content">
                        <label for="message" class="contact__label">Description</label>
                        <textarea name="txtMessage" id="txtMessage" cols="0" rows="7" class="contact__input"></textarea>
                    </div>


                    <div>
                        
                           <input type="submit" name="Send" value="Send">
                           
                        </a>
                    </div>
                </form>
            </div>

        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">

        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Sadia Elias</h1>
                    <span class="footer__subtitle">Web Developer</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="#" target="_blank" class="footer__social">
                        <i class="uil uil-facebook"></i>
                    </a>
                    <a href="#" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="#" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy">&#169; SadiaOne. All rights reserved.</p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>
    

    <!--==================== SWIPER JS ====================-->
    <script src="./packages/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="./packages/js/main.js"></script>
</body>

</html>