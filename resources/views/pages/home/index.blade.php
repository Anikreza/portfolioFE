@extends('master')
@section('content')
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar"
               aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                <div class="text-center">
                    <div class="author-img"
                         style="background-image: url('{{ asset('assets/images/about.jpg') }}');"></div>
                    <h1 id="colorlib-logo"><a>Tanvir Reza Anik</a></h1>
                    <span class="position"><a>Software Engineer</a> </span>
                </div>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                        <ul>
                            <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                            <li><a href="#" data-nav-section="about">About</a></li>
                            <li><a href="#" data-nav-section="services">Services</a></li>
                            <li><a href="#" data-nav-section="skills">Skills</a></li>
                            <li><a href="#" data-nav-section="education">Education</a></li>
                            <li><a href="#" data-nav-section="experience">Experience</a></li>
                            <li><a href="#" data-nav-section="work">Work</a></li>
                            @if(isset($articles) && count($articles) >0)
                                <li><a href="#" data-nav-section="blog">Blog</a></li>
                            @endif
                            <li><a href="#" data-nav-section="contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="colorlib-footer">
                    <p>
                        <small>&copy;
                            {{--                        <script>document.write(new Date().getFullYear());</script>--}}
                            Developed By: <a href="https://github.com/Anikreza" target="_blank">Tanvir Reza Anik</a>.
                            <br/>
                            UI Template By: <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            </span>
                        </small>
                    </p>
                    <ul>
                        <li><a href="https://www.facebook.com/tanventurer" target="_blank"><i
                                    class="icon-facebook2"></i></a></li>
                        <li><a href="https://github.com/Anikreza/" target="_blank"><i class="icon-github"></i></a></li>
                        <li><a href="https://www.instagram.com/tanventurer" target="_blank"><i
                                    class="icon-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/tanvir-reza-anik-92b925241" target="_blank"><i
                                    class="icon-linkedin2"></i></a></li>
                    </ul>
                </div>
            </aside>

            <div id="colorlib-main">
                <section id="colorlib-hero" class="js-fullheight" data-section="home">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <li style="background-image: url('{{ asset('assets/images/bg-h4.avif') }}'); filter: hue-rotate(0deg) saturate(25%);rotate: -180deg">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row" style=" rotate: 180deg">
                                        <div
                                            class="col-md-10 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner js-fullheight">
                                                {{--                                                <div style="border-bottom: 5px solid #0a523f;"></div>--}}
                                                {{--                                                <br/>--}}
                                                <div class="desc">
                                                    <h1 style="color: #0f3d0f; letter-spacing: 2px">Hi! <br>I'm Tanvir
                                                        Reza Anik</h1>
                                                    @php
                                                        $birthYear = 1995; // Replace this with the actual birth year from your data
                                                        $currentYear = now()->year;
                                                        $age = $currentYear - $birthYear;
                                                    @endphp

                                                    <h2 style="font-size: 30px"><span
                                                            style="color: green; font-size: 34px">{{ $age }}</span>
                                                        Year old, enthusiastic, ambivert male
                                                    </h2>

                                                    <h2> Freelance Software Engineer From Bangladesh</h2>
                                                    <div style="display: flex; justify-content: left">
                                                        <p>
                                                            <a href="{{asset('assets/Tanvir-CV.pdf')}}"
                                                               target="_blank"
                                                               class="btn btn-primary btn-learn">
                                                                Download CV <i class="icon-download4"></i>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <a class="btn btn-primary btn-learn" href="#work">
                                                                View Portfolio <i class="icon-briefcase3"></i>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <a class="btn btn-primary btn-learn"
                                                               href="mailto: tanvirrezaanik@gmail.com">
                                                                Contact Me <i class="icon-mail5"></i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div style="border-bottom: 20px solid #0a523f;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{--                            <li style="background-image: url('{{asset('assets/images/bg-h.avif')}}');filter: grayscale(90%); rotate: -180deg">--}}
                            {{--                                <div class="overlay"></div>--}}
                            {{--                                <div class="container-fluid">--}}
                            {{--                                    <div class="row" style=" rotate: 180deg">--}}
                            {{--                                        <div--}}
                            {{--                                            class="col-md-10 col-sm-12 col-xs-12 js-fullheight slider-text">--}}
                            {{--                                            <div class="slider-text-inner">--}}
                            {{--                                                <div class="desc">--}}
                            {{--                                                    <h1>I am a<br>Web/App Developer From Bangladesh</h1>--}}
                            {{--                                                    <p>--}}
                            {{--                                                        <a class="btn btn-primary btn-learn" href="#work">--}}
                            {{--                                                            View Portfolio<i class="icon-briefcase3"></i>--}}
                            {{--                                                        </a>--}}
                            {{--                                                    </p>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </li>--}}
                        </ul>
                    </div>
                </section>

                <section class="colorlib-about" data-section="about">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="col-md-12">
                                        <div class="about-desc">
                                            <span class="heading-meta">About Me</span>
                                            <h2 class="colorlib-heading">Who Am I?</h2>
                                            <p>Hi! <strong> I'm Tanvir.</strong>
                                                I am a freelance software engineer who specializes in React, VueJs and
                                                Laravel applications, which extends to the related technologies like
                                                NextJs, and Blade.
                                            </p>
                                            <p>
                                                I started my career as a remote react developer for a German agency,
                                                settled for a full-time remote job for an UK based company for over a
                                                year.
                                            </p>
                                            <p>
                                                Now my vision is to utilize the 21st century techs to make positive, and
                                                make a large scale impact with my passion for change. Also, I'm
                                                interested in
                                                helping you achieve your dream project.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="services color-1">
                                            <span class="icon2"><i class="icon-bulb"></i></span>
                                            <h3>Web Development</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                                        <div class="services color-3">
                                            <span class="icon2"><i class="icon-globe-outline"></i></span>
                                            <h3>Application Development</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 animate-box" data-animate-effect="fadeInTop">
                                        <div class="services color-2">
                                            <span class="icon2"><i class="icon-data"></i></span>
                                            <h3>Software Management</h3>
                                        </div>
                                    </div>
                                    {{--                                <div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">--}}
                                    {{--                                    <div class="services color-4">--}}
                                    {{--                                        <span class="icon2"><i class="icon-phone3"></i></span>--}}
                                    {{--                                        <h3>Web Design</h3>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                </div>
                                <div class="row">
                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="hire">
                                            <h2>I'm willing to work on contract <br>
                                                To build or modify your web and mobile applications
                                            </h2>
                                            <a href="mailto: tanvirrezaanik@gmail.com" class="btn-hire">Hire me</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="colorlib-services" data-section="services">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-12  animate-box"
                                 data-animate-effect="fadeInLeft">
                                <span class="heading-meta">What I do best?</span>
                                <h2 class="colorlib-heading">Here are some of my expertise</h2>
                            </div>
                        </div>
                        <div class="row row-pt-md">
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-1">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
                                    <div class="desc">
                                        <h3>Database Planning</h3>
                                        <p>From the scratch, to an app building database relationship with sql</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-2">
								<span class="icon">
									<i class="icon-tick"></i>
								</span>
                                    <div class="desc">
                                        <h3>Front End</h3>
                                        <p>Design the face of the project with the latest technologies</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-3">
								<span class="icon">
									<i class="icon-globe2"></i>
								</span>
                                    <div class="desc">
                                        <h3>API Integration</h3>
                                        <p>Bring life to your project through API integration from web</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-4">
								<span class="icon">
									<i class="icon-server"></i>
								</span>
                                    <div class="desc">
                                        <h3>Backend Development</h3>
                                        <p>Dive into the ocean of backend, and build the best optimized app for you</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-5">
								<span class="icon">
									<i class="icon-reload"></i>
								</span>
                                    <div class="desc">
                                        <h3>SEO</h3>
                                        <p>Engage your site to the contacts and contexts it matter the most!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-6">
								<span class="icon">
									<i class="icon-edit"></i>
								</span>
                                    <div class="desc">
                                        <h3>Script Modification</h3>
                                        <p>Create your own application from a script you found online that resemble
                                            yours</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div id="colorlib-counter" class="colorlib-counters" style="background-color: #f1bfbf!important;">
                    <div class="overlay"></div>
                    <div class="colorlib-narrow-content">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="4" data-speed="1000"
                                  data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Years</span>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="11" data-speed="1000"
                                  data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Projects</span>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="9" data-speed="1000"
                                  data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Clients</span>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="colorlib-skills" data-section="skills">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                 data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Skillsets</span>
                                <h2 class="colorlib-heading animate-box">My Areas Of Expertise</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="animate-box skillTags" data-animate-effect="fadeInLeft">
                                <p class="skillTag color1">ReactJS</p>
                                <p class="skillTag color9">NextJS</p>
                                <p class="skillTag color3">VueJS</p>
                                <p class="skillTag color8">Vuetify</p>
                                <p class="skillTag color5">Tailwind Css</p>
                                <p class="skillTag color2">Laravel</p>
                                <p class="skillTag color4">jQuery</p>
                                <p class="skillTag color6">Bootstrap</p>
                                <p class="skillTag color7">Ionic</p>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="colorlib-education" data-section="education">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3"
                                 data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Education</span>
                                <h2 class="colorlib-heading">Education</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" data-animate-effect="fadeInLeft">
                                <div class="fancy-collapse-panel">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseOne"
                                                       aria-expanded="true" aria-controls="collapseOne">
                                                        B.Sc in Computer Science & Engineering
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                 aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="https://ewubd.edu/" target="_blank"
                                                               style="color: #a44242; font-weight: 600; letter-spacing: 1px"
                                                            >
                                                                East West University (2016-2021)
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>
                                                                I pursued my bachelors degree with the most thrilling,
                                                                and
                                                                enjoyable experience
                                                                I ever had in the first part of my life.
                                                                My teachers here brought to me a new world, I learned a
                                                                lot,
                                                                did a lot,
                                                                and you know what, I
                                                                graduated with a CGPA of
                                                                <strong>2.67 </strong>, and a heart full of confidence
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseThree" aria-expanded="false"
                                                       aria-controls="collapseThree">Higher Secondary Certificate (HSC)
                                                        In
                                                        Science
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                 aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="https://bncd.edu.bd/" target="_blank"
                                                               style="color: #1a2769; font-weight: 600; letter-spacing: 1px">
                                                                Bangladesh navy College (2012-2014)
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>
                                                                College days brought to me a new world I never knew
                                                                existed.
                                                                I discovered beyond my
                                                                school, and neighborhood, and travelled a lot during
                                                                this
                                                                period. I was not doing well in the exams.
                                                                <br/>
                                                                <br/>
                                                                I passed my HSC exam with a GPA of <strong>
                                                                    4.50</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFour">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseFour" aria-expanded="false"
                                                       aria-controls="collapseFour"> Secondary School Certificate (SSC)
                                                        In
                                                        Science
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                                 aria-labelledby="headingFour">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="http://aasac.edu.bd/" target="_blank"
                                                               style="color: #6b6b6b; font-weight: 600; letter-spacing: 1px"
                                                            >
                                                                Ali Ahmed High School & College (2010-2012)</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>
                                                                This was the only period when I was both a very bright
                                                                student, and enjoyed
                                                                what I was doing. which I later missed in college and
                                                                university. I was never afraid,
                                                                and last but not least, one of the more honest students
                                                                there could be. I built this
                                                                attitude in me from even earlier days.
                                                                <br/>
                                                                <br/>
                                                                I passed my SSC exam with a GPA of
                                                                <strong>4.88 </strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFive">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseFive" aria-expanded="false"
                                                       aria-controls="collapseFive">Primary Educations
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                                 aria-labelledby="headingFive">
                                                <div class="panel-body">
                                                    <p>I had a <strong>colorful</strong> early life as a student.
                                                        My parents were always moving from place to place, and I was
                                                        making
                                                        new and memorable friends
                                                        from cities to villages, and experienced the life of a free
                                                        bird,
                                                        learned about life & society
                                                        in every way possible
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-experience" data-section="experience">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3"
                                 data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Experience</span>
                                <h2 class="colorlib-heading">Work Experience</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline-centered">

                                    <article class="timeline-entry" data-animate-effect="fadeInRight">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-3">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <a>Savannah Group (UK)</a>
                                                <h2>Software Engineer (Remote)<span
                                                        style="margin-right: 20px; color: #053829"> Feb 2024-Present</span>
                                                </h2>
                                                <p>
                                                    I work on a large scale project for savannah group, which is based
                                                    in react, scss and a complicated redux state management. This was
                                                    the breakthrough job for me that gave me the opportunity to work
                                                    with a really big, and world class team.
                                                </p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry" data-animate-effect="fadeInRight">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-1">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <a>My Pinacle (Bangladesh)</a>
                                                <h2>Lead Software Developer (Part Time)<span
                                                        style="margin-right: 20px; color: #053829"> Mar 2023-Present</span>
                                                </h2>
                                                <p>
                                                    I Develop fullstack web applications such as large scale inventory
                                                    management systems,
                                                    POS and E-commerce websites. I served 7+ clients with their
                                                    business modules, and continuing
                                                    with some more.
                                                </p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-2">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <a>Apvission (Germany)</a>
                                                <h2>Junior Software Engineer (Freelance)<span
                                                        style="margin-right: 20px;"> Apr 2022- Nov 2024</span>
                                                </h2>
                                                <p>
                                                    My role is to develop fullstack react/laravel applications for
                                                    various
                                                    German clients as a freelance basis. I developed and deployed
                                                    several
                                                    projects which are
                                                    playing a vital role for multiple companies.
                                                </p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry begin" data-animate-effect="fadeInBottom"
                                             id="work">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-none">
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-work" data-section="work">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3"
                                 data-animate-effect="fadeInLeft">
                                <span class="heading-meta">My Work</span>
                                <h2 class="colorlib-heading">Recent Works</h2>
                            </div>
                        </div>
                        {{--                    <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">--}}
                        {{--                        <div class="col-md-12">--}}
                        {{--                            <p class="work-menu"><span><a href="#" class="active">Graphic Design</a></span> <span><a--}}
                        {{--                                        href="#">Web Design</a></span> <span><a href="#">Software</a></span> <span><a--}}
                        {{--                                        href="#">Apps</a></span></p>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        <div class="row">
                            <div class="col-md-6" data-animate-effect="fadeInLeft">
                                <div class="project"
                                     style="background-image: url('{{asset('assets/images/img-1.jpg')}}');">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a>Personal Blog</a></h3>
                                            <span>
                                                <strong>Main Tools: </strong>
                                                # Laravel
                                                # Bootstrap
                                                # VueJS
                                                <br/><br/>
                                              <strong>description:</strong>
                                                A multi Language, multi theme, fully responsive Travel blog site with a dynamic admin panel to control the
                                                contents, and the SEO tags & descriptions.
                                                it consists of image and video galleries with lazy loading, effective SEO, comments and share sections for
                                                articles.
                                            </span>
                                            <p class="icon">
                                                {{--                                            <span><a href="#"><i class="icon-share3"></i></a></span>--}}
                                                <span>
                                                <a href="https://tanventurer.com/en" target="_blank">
                                                    <i class="icon-eye"></i> View Live
                                                </a>
                                            </span>
                                                {{--                                            <span><a href="#"><i class="icon-heart"></i> 49</a></span>--}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-animate-effect="fadeInRight">
                                <div class="project"
                                     style="background-image: url('{{asset('assets/images/img-3a.jpg')}}');">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a>Inventory Management cum POS</a></h3>
                                            <span>
                                                <strong>Main Tools: </strong>
                                                # Laravel #Bootstrap #VueJS
                                                <br/>
                                              <strong>description:</strong>
                                                A complete inventory management with POS & HRM system.It is connected dynamically to an E-commerce website which consists a full package for a
                                                variety of businesses.
 <br/>
                                                Test Credential #email: admin@allsolution.com  #pass: Petamine@2021
                                            </span>
                                            <p class="icon">
                                                {{--                                            <span><a href="#"><i class="icon-share3"></i></a></span>--}}
                                                <span>
                                                <a href="https://www.inventory.mypinacle.com" target="_blank">
                                                    <i class="icon-eye"></i> View Live
                                                </a>
                                            </span>
                                                {{--                                            <span><a href="#"><i class="icon-heart"></i> 49</a></span>--}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6" data-animate-effect="fadeInBottom">
                                <div class="project"
                                     style="background-image: url('{{asset('assets/images/img-2.jpg')}}');">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a>E-commerce Site</a></h3>
                                            <span>
                                                <strong>Main Tools: </strong>
                                                # Laravel
                                                # Bootstrap
                                                # LiveWire
                                                # AJAX
                                                <br/><br/>
                                              <strong>description:</strong>
                                                A fullstack E-commerce website which is made with laravel blade and laravel live-wire to achieve the smoothest possible
                                                interaction with the users.
                                            </span>
                                            <p class="icon">
                                                {{--                                            <span><a href="#"><i class="icon-share3"></i></a></span>--}}
                                                <span>
                                                <a href="https://www.onlinepetbazar.com" target="_blank">
                                                    <i class="icon-eye"></i> View Live
                                                </a>
                                            </span>
                                                {{--                                            <span><a href="#"><i class="icon-heart"></i> 49</a></span>--}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-md-12">--}}
                        {{--                                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">--}}
                        {{--                                        Load more--}}
                        {{--                                        <i class="icon-reload"></i>--}}
                        {{--                                    </a>--}}
                        {{--                                </p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </section>

                @if(isset($articles) && count($articles) >0)
                    <section class="colorlib-blog" data-section="blog">
                        <div class="colorlib-narrow-content">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-pull-3"
                                     data-animate-effect="fadeInLeft">
                                    <span class="heading-meta">Read</span>
                                    <h2 class="colorlib-heading">Recent Blog</h2>
                                </div>
                            </div>
                            <div class="row">

                                @foreach($articles as $key=> $article)
                                    <div class="col-md-4 col-sm-6"
                                         data-animate-effect="{{$key%2==0?'fadeInLeft':'fadeInRight'}}">
                                        <div class="blog-entry">
                                            <a href="{{route('articleDetails', ['slug'=>$article['slug']])}}"
                                               class="blog-img"><img
                                                    src="{{env('BE_URL'). $article['image']}}" class="img-responsive"
                                                    alt="{{$article['title']}}"></a>
                                            <div class="desc desc2">
                                    <span>
                                        <small>{{ \Carbon\Carbon::parse($article['created_at'])->format('j F Y') }} </small>
                                        | <small> {{$article['categories'][0]['name']}} </small>
{{--                                        | <small> <i class="icon-bubble3"></i> 4</small>--}}
                                    </span>
                                                <h3><a href="{{route('articleDetails', ['slug'=>$article['slug']])}}">
                                                        {{$article['title']}}
                                                    </a></h3>
                                                <p>
                                                    {{\Illuminate\Support\Str::limit($article['meta_description'], 80)}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            {{--                        <div class="row">--}}
                            {{--                            <div class="col-md-12">--}}
                            {{--                                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i--}}
                            {{--                                            class="icon-reload"></i></a></p>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </div>
                    </section>
                @endif

                <section class="colorlib-contact" data-section="contact">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3"
                                 data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Get in Touch</span>
                                <h2 class="colorlib-heading">Contact</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="colorlib-feature colorlib-feature-sm"
                                     data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-mail"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="mailto: tanvirrezaanik@gmail.com">tanvirrezaanik@gmail.com</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm"
                                     data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-map"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p>Currently in Dhaka, Bangladesh</p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm"
                                     data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p>+88 01687005154</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-md-push-1">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-md-pull-1"
                                         data-animate-effect="fadeInRight">
                                        <form action="{{ route('sendMail') }}" method="POST"
                                              data-action="{{ route('sendMail') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name" id="name"
                                                       name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" id="email"
                                                       name="email" required>
                                                <span id="email-error" class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Subject"
                                                       id="subject" name="subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" id="message" cols="30" rows="7"
                                                          class="form-control" placeholder="Message"
                                                          required></textarea>
                                                <span id="message-error" class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-send-message"
                                                        id="submitBtn">Send Message
                                                </button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <br/>
                <br/>
            </div><!-- end:colorlib-main -->
        </div><!-- end:container-wrap -->
    </div><!-- end:colorlib-page -->
    <script>
        $(document).ready(function () {
            $('#email').on('input', function () {
                // Live validation for email field
                const email = $(this).val();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const emailError = $('#email-error');

                if (emailRegex.test(email)) {
                    emailError.text('');
                } else {
                    emailError.text('Invalid email format');
                }
            });

            $('#message').on('input', function () {
                // Live validation for message field
                const message = $(this).val();
                const messageError = $('#message-error');

                if (message.trim() === '') {
                    messageError.text('Message is required');
                } else {
                    messageError.text('');
                }
            });

            $('form').on('submit', function (event) {
                event.preventDefault();

                // Check if email and message are valid
                const email = $('#email').val();
                const message = $('#message').val();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const emailError = $('#email-error');
                const messageError = $('#message-error');

                if (!emailRegex.test(email)) {
                    emailError.text('Invalid email format');
                    return;
                }

                if (message.trim() === '') {
                    messageError.text('Message is required');
                    return;
                }

                // Disable the submit button and change its text
                const submitBtn = $('#submitBtn');
                submitBtn.text('Please wait...');
                submitBtn.attr('disabled', true);

                // Send data via AJAX
                $.ajax({
                    url: $(this).data('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (response) {
                        submitBtn.after('<p class="text-success">Message sent successfully!</p>');
                    },
                    error: function (error) {
                        submitBtn.after('<p class="text-danger">Message sending failed. Please try again.</p>');
                    },
                    complete: function () {
                        // Re-enable the submit button and reset its text
                        submitBtn.text('Send Message');
                        submitBtn.attr('disabled', false);
                    }
                });
            });
        });
    </script>
@endsection
