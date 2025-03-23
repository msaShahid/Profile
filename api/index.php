
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Irfan Azam | Web developer</title>

    <!-- <link rel="alternate" href="https://atanubiswas.com/" hreflang="en">
    <link rel="alternate" href="https://atanubiswas.com/" hreflang="x-default"> -->

    <meta content="Best web designer" name="description">
    <meta content="Website developer, AWS developer, server admin, freelancer" name="keywords">

    <!-- Favicons -->
    <link href="http://irfanazam.com/static/theme/1/img/favicon.png" rel="icon">
    <link href="http://irfanazam.com/static/theme/1/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Stylesheet -->
    <link href="static/main.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<meta property="og:site_name" content="Irfan Azam" /> 
<meta property="og:url" content="http://irfanazam.com/" /> 
<meta property="og:locale" content="en_US" /> 
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" /> 
<link rel="canonical" href="http://irfanazam.com/" />
<link rel="amphtml" href="http://irfanazam.com/amp/" />
<meta property="og:title" content="IrfanAzam | Web developer at Nawada, Bihar" /> 
<meta name="twitter:title" content="Irfan Azam | Web developer at Nawada, Bihar" /> 
<meta property="og:description" content="Best web designer at Nawada, Bihar. e-commerce management, and hosting consultant. DriveBird Network & DEAL84" /> 
<meta name="twitter:description" content="Best web designer at Nawada, Bihar. e-commerce management, and hosting consultant. DriveBird Network & DEAL84" /> 
<meta property="og:type" content="profile" /> 
<meta property="profile:first_name" content="Irfan" /> 
<meta property="profile:last_name" content="Azam" /> 
<meta property="profile:username" content="ufo.deep" /> 
<meta property="profile:gender" content="male" /> 
<meta property="fb:app_id" content="699186846841376" /> 
<meta property="twitter:card" content="summary_large_image" /> 
<meta property="og:image" content="http://irfanazam.com/static/irfan-azam-1.jpg" /> 
<meta property="og:image:secure_url" content="http://irfanazam.com/static/irfan-azam-1.jpg" /> 
<meta name="twitter:image" content="http://irfanazam.com/static/irfan-azam-1.jpg" /> 
<meta name="twitter:image:src" content="http://irfanazam.com/static/irfan-azam-1.jpg" /> 
<meta property="og:image:alt" content="Irfan Azam | Web developer at Nawada, Bihar" />
<meta property="og:image:width" content="1920" />
<meta property="og:image:height" content="1280" />

<script src="static/helper.js"></script>
</head>

<body>
<?php
    date_default_timezone_set('Asia/Kolkata');
    $txtfile = date('d-m-Y').'.txt';
    $ip = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    $data =array('time'=> date('H:i'), 'ip' => $ip, 'city' => $details->city, 'country' => $details->country);
    $file = 'static/file/'.$txtfile;
    if(!is_file($file)){
        $contents = '--------File was created---------';
        file_put_contents($file, $contents . PHP_EOL, FILE_APPEND | LOCK_EX); 
    }
    if($details !=""){
        file_put_contents($file, json_encode($data) . PHP_EOL, FILE_APPEND | LOCK_EX);
    }

?>
<div id="hidden" class="d-none"></div>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="https://irfanazam.com/static/img/irfan-azam-2.jpg" alt="Irfan Azam | Web Developer" class="img-fluid rounded-circle">
            <h2 class="text-light"><a href="https://irfanazam.com/">Irfan Azam</a></h2>
            <div class="social-links mt-3 text-center">
                <a href="javascript:void();" class="twitter"><i class="bx bxl-blogger"></i></a>
                <a href="javascript:void();" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="javascript:void();" class="google-plus"><i class="bx bxl-youtube"></i></a>
                <a href="javascript:void();" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="javascript:void();" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="#hero"><i class="bx bx-home"></i><span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i> Software</a></li>
                <li><a href="#tools"><i class="bx bx-briefcase-alt-2"></i> Tools</a></li>
                <li><a href="#contact" id="contactLink"><i class="bx bx-envelope"></i> Contact</a></li>
                <li><a href="blog" id="blogLink"><i class="bx bxl-blogger"></i> Blog</a></li>
            </ul>
        </nav>
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>Irfan Azam</h1>
        <p>I'm a <span class="typed" data-typed-items="Software Developer, Web developer, AWS developer, freelancer"></span></p>
    </div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About myself</h2>
                <p><strong><span id="greetings"></span> I’m Irfan.</strong> Since the beginning of my journey as a freelance designer
                    nearly 5 years ago, I've done remote work for agencies, consulted for
                    startups and collaborated with talented people to create digital products for both business and
                    consumer use. Today i am here to face many challenging and now i know that situation does not come to say.
                    <!-- I'm quietly confident, naturally curious and perpetually working on improving my
                    chops one design problem at a time. -->
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="http://irfanazam.com/static/img/irfan-azam-2.jpg" class="img-fluid img-thumbnail" alt="Irfan Azam | Web Developer">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Software Developer | DevOps | Automation</h3>
                    <p class="font-italic">
                        Before I go to my career related information, I would like to share some of my basic and
                        personal
                        information.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>Birthday:</strong> 15th January 1991
                                </li>
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>Website:</strong>
                                    <a href="https://irfanazam.com/">irfanazam.com</a>
                                </li>
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>Profession:</strong> Software Developer
                                </li>
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>Phone:</strong> +91 7004720165
                                </li>
                               
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>City:</strong> Kolkata, INDIA
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>Age:</strong> 30                                </li>
                                
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>Degree:</strong> Master
                                </li>
                              
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>Email:</strong>
                                    <a href="/cdn-cgi/l/email-protection#75161a1b01141601351401141b00171c060214065b161a18"><span class="__cf_email__" data-cfemail="60030f0e14010314200114010e150209131701134e030f0d">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>WhatsApp:</strong> +91 7004720165
                                </li>
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>Freelance:</strong> Available
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        I help developers, small agencies and businesses bring their ideas to life - on time and on
                        budget.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= hire Section ======= -->
    <!--<section id="hire" class="hire">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-bottom">
                    <div class="jumbotron alert-primary">
                        <h2>Let's work together to bring your vision to life!</h2>
                        <p><i>More than <strong>228+ worldwide clients are happy</strong> to work with me. They say -
                                what I offer is more than what I say ...</i></p>
                        <button class="btn btn-success" onclick="$( '#contactLink' ).click();">HIRE ME</button>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- End hire Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">

            <div class="section-title">
                <h2>Facts</h2>
                <p>Software development is hard. Managing projects is hard. Working remotely is hard. Here are some
                    things I'm good at, to help ease the pain.</p>
                <p>Understand programming concepts first. Conditionals, Loops, Functions, Logic, Recursion, OOP and so on. Take your time.</p>
            </div>

            <div class="about">
                <div class="row content">
                    <div class="col-lg-12" data-aos="fade-down">
                        <ul>
                            <li>
                                <i class="icofont-rounded-right"></i>
                                <strong>Problem Solving:</strong>
                                I can take vague problems and requirements and break them down into steps and solutions.
                            </li>
                            <li>
                                <i class="icofont-rounded-right"></i>
                                <strong>Structuring:</strong>
                                I value simple content structure, clean design patterns and thoughtful interactions.
                            </li>
                            <li>
                                <i class="icofont-rounded-right"></i>
                                <strong>Communicating:</strong>
                                I can explain things clearly, communicate problems quickly and write accurately and
                                concisely.
                            </li>
                            <li>
                                <i class="icofont-rounded-right"></i>
                                <strong>Organising:</strong>
                                I can self-manage, work within deadlines, organise projects and present well-structured
                                and complete deliverables.
                            </li>
                            <li>
                                <i class="icofont-rounded-right"></i>
                                <strong>Caring:</strong>
                                I genuinely care about people and love helping fellow designers work on their craft.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row no-gutters jumbotron">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                        <i class="icofont-worried icofont-5x"></i>
                        <span data-toggle="counter-up">1</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="count-box">
                        <i class="icofont-handshake-deal icofont-5x"></i>
                        <span data-toggle="counter-up">2</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="icofont-code-alt icofont-5x"></i>
                        <span data-toggle="counter-up" data-delay>3</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="count-box">
                        <i class="icofont-simple-smile icofont-5x"></i>
                        <span data-toggle="counter-up">4</span>
                    </div>
                </div>

            </div>

            <div class="section-title">
                <h2>Architecture I follow</h2>
                <p>Creating application that gets a lot of user's attention is not just about knowing various
                    programming languages. I also need to follow some other concepts like - DevTools, Logic, data formats,
                    testing, APIs, authentication, server management and a lot of stuff. Here are some world standard
                    architecture I follow to complete my goal.</p>
            </div>

            <div class="about">
                <div class="row content">
                    <div class="col-lg-4" data-aos="fade-right">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Continuous Integration</strong></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Continuous Delivery</strong></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Microservices</strong></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Infrastructure as Code</strong></li>
                        </ul>
                    </div>
                    <div class="col-lg-4" data-aos="fade-down">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Monitoring and Logging</strong></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Collaboration</strong></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Security & vulnerabilities</strong></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Code versioning & Bug tracking</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4" data-aos="fade-left">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Performance tuneup</strong></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Automation</strong></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Data Collection & Analytics</strong></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Artificial Intelligence</strong></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Skills</h2>
                <p>I have the following skills to achieve project development, testing and deployment.</p>
            </div>

            <div class="row skills-content">

                <div class="col-lg-6" data-aos="fade-up">

                    <div class="progress">
                        <span class="skill">Typescript | React | Node js | MongoDB <i class="val">86%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Website data scraping <i class="val">96%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="96" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">DevOps <i class="val">83%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">AWS <i class="val">87%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">PHP | MySQL | JAVASCRIPT | JQUERY <i class="val">94%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="94" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="progress">
                        <span class="skill">AWS ML | AI <i class="val">68%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Web/Email hosting <i class="val">87%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Search Engine Optimization SEO <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Web application security <i class="val">92%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="92" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Secure payment gateway <i class="val">97%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="97" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>I would like to show you about my important education details and as well as my few experience so you can have a
                    basic idea about me.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Summary</h3>
                    <div class="resume-item pb-0">
                        <h4>Md Irfan Azam</h4>
                        <p><em>Seeking a practical position in the area of web development to utilize my knowledge
                                skills and abilities in a maximum level that offers professional growth while being
                                resourceful, innovative and flexible.</em></p>
                        <ul>
                            <li><strong>Communication: </strong>English, Hindi, Urdu</li>
                            <li><strong>Gender: </strong>Male</li>
                            <li><strong>Religion: </strong>Muslim</li>
                            <li><strong>Nationality: </strong>Indian</li>
                            <li><strong>Marital status: </strong>Single</li>
                            <li><strong>Date of birth: </strong>1991-01-15</li>
                            <li><strong>Contact: </strong>+91 7004720165</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        <h4>Master</h4>
                        <h5>2018 - 2020</h5>
                        <p>
                            <em>
                                <a href="https://en.wikipedia.org/wiki/University_of_Calcutta" target="_blank">SMU</a>, Patna, India
                            </em>
                        </p>
                        <p>
                            Became a MCA Master.
                        </p>
                    </div>
                    <div class="resume-item">
                        <h4>Graduate</h4>
                        <h5>2010 - 2012</h5>
                        <p>
                            <em>
                                <a href="https://www.facebook.com/MoukhaliGopinathpurGouravbalaVidyalaya.UnOfficial/"
                                   target="_blank">National Institute Information Technology (NIIT)</a>, Patna, India
                            </em>
                        </p>
                        <P>
                            Became a BSC-IT Graduate
                        </P>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Professional Experience</h3>
                    <div class="resume-item">
                        <h4>web Developer (Laravel)</h4>
                        <h5>2022 - Present</h5>
                        <p><em>Learning Spiral pvt, Kolkata, India </em></p>
                        <ul>
                            <li>It is product base company as i have been working here till now where the product was developed</li>
                            <li>I have been awarded to give appreciation letter for better performance</li>
                            <li>
                                Lead in the design, development, and implementation of the application layout, and
                                production communication materials.
                            </li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Web developer</h4>
                        <h5>2021 - 2022</h5>
                        <p><em>WEBGRITY, Kolkata, India</em></p>
                        <ul>
                            <li>
                                Managed up to 5 projects and tasks at a given time while under pressure.
                            </li>
                            <li>
                                Recommended and consulted with clients on the most appropriate business logic.
                                Worked accordingly.
                            </li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Web developer</h4>
                        <h5>2019 - 2021</h5>
                        <p><em>Right Brains Technology, Kolkata, India</em></p>
                        <ul>
                            <li>It was my first company, There was my struggle life, There was being seen challenging situation because I was freshere.</li>
                           
                            <li>
                                Recommended and consulted with clients on the most appropriate business logic.
                                Worked accordingly.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-lg-12" data-aos="fade-bottom">
                    <div class="jumbotron alert-dark">
                        <h2>Download my CV to access offline</h2>
                        <p><i>You can download my Curriculum Vitae in-case you want to access this later or
                                offline. </i></p>
                        <a href="https://docs.google.com/document/export?format=pdf&id=1J3bAnpoBLf9-J5HW7tF8MJJsGuFkdRXkbziElZ-EQk4&includes_info_params=true"
                           class="btn btn-success"><i class="bx bx-download"></i> DOWNLOAD</a>
                    </div>
                </div>
            </div> -->

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2>How can I help?</h2>
                <p>A DevOps and web developer's role is to combine design, business logic, deployment and security
                    enhancement to achieve a user-facing product. To do this successfully, a wide skill set is necessary
                    to produce a quality user experience
                    that leads to meeting business goals. With my experience I can:
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="icofont-computer"></i></div>
                    <h4 class="title"><a href="javascript:void(0);">Website Development</a></h4>
                    <p class="description">Create responsive websites that work on a wide range of devices</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="icofont-whatsapp"></i></div>
                    <h4 class="title"><a href="javascript:void(0);">Whatsapp Automation</a></h4>
                    <p class="description">Use Whatsapp numbers as an AI bot to answer your customer's questions.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="icofont-settings"></i></div>
                    <h4 class="title"><a href="https://www.drivebird.com/web-scraping" target="_blank">Data Scraping</a>
                    </h4>
                    <p class="description">Crawl and collect important data from your competitors site.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="icofont-image"></i></div>
                    <h4 class="title"><a href="javascript:void(0);">Logo, Graphics & Video</a></h4>
                    <p class="description">You must have good quality and meaningful artwork for your Brand.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon"><i class="icofont-tasks-alt"></i></div>
                    <h4 class="title"><a href="https://www.drivebird.com/wordpress-virus-removal" target="_blank">WordPress
                            Infection</a></h4>
                    <p class="description">Remove virus from infected WordPress website or blog.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                    <h4 class="title"><a href="javascript:void(0);">SEO & Marketing</a></h4>
                    <p class="description">Maximizing your online presence by SEO and Marketing strategies.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="700">
                    <div class="icon"><i class="icofont-earth"></i></div>
                    <h4 class="title"><a href="javascript:void(0);">Application Deployment</a></h4>
                    <p class="description">Bridge communication gap between designers and developers</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="800">
                    <div class="icon"><i class="icofont-ssl-security"></i></div>
                    <h4 class="title"><a href="javascript:void(0);">Security Enhancement</a></h4>
                    <p class="description">Is your payment architecture secure? Verify now or you may leak money.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="900">
                    <div class="icon"><i class="icofont-at"></i></div>
                    <h4 class="title"><a href="javascript:void(0);">Website/Email Hosting</a></h4>
                    <p class="description">You must have faster and secure hosting for your web application.</p>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Software As A Service (SaaS)</h2>
                <p>
                    I have created few maintenance-free software which you can use against small monthly or pay-as-you-go fees.
                </p>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-6 col-md-6 col-sm-12 portfolio-item filter-app" data-aos="zoom-in" data-aos-delay="0">
                    <div class="portfolio-wrap text-center">
                        <img src="https://atanubiswas.com/static/theme/1/img/software-as-a-service-saas/Asset-Hosting.png" class="img-fluid img-thumbnail" alt="Asset Hosting">
                        <div class="portfolio-links">
                            <a href="https://atanubiswas.com/static/theme/1/img/software-as-a-service-saas/Asset-Hosting.png" data-gall="portfolioGallery" class="venobox" title="Asset Hosting"><i class="bx bx-plus"></i></a>
                            <a href="https://assets.drivebird.com/" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 portfolio-item filter-app" data-aos="zoom-in" data-aos-delay="300">
                    <div class="portfolio-wrap text-center">
                        <img src="https://atanubiswas.com/static/theme/1/img/software-as-a-service-saas/Rent-E-Commerce.png" class="img-fluid img-thumbnail" alt="Rent ECommerce">
                        <div class="portfolio-links">
                            <a href="https://atanubiswas.com/static/theme/1/img/software-as-a-service-saas/Rent-E-Commerce.png" data-gall="portfolioGallery" class="venobox" title="Rent ECommerce"><i class="bx bx-plus"></i></a>
                            <a href="https://deal84.com" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <!--
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="https://cdn.drivebird.com/static/service/issue-tracker/image/Issue-Tracker-640x360.jpg" class="img-fluid" alt="Issue Tracker">
                        <div class="portfolio-links">
                            <a href="https://cdn.drivebird.com/static/service/issue-tracker/image/Issue-Tracker-640x360.jpg" data-gall="portfolioGallery" class="venobox"
                               title="Issue Tracker"><i class="bx bx-plus"></i></a>
                            <a href="https://www.drivebird.com/issue-tracker/about" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="https://cdn.drivebird.com/static/service/whatsapp-automation/image/WhatsApp-Automation-640x360.jpg" class="img-fluid" alt="WhatsApp Automation">
                        <div class="portfolio-links">
                            <a href="https://cdn.drivebird.com/static/service/whatsapp-automation/image/WhatsApp-Automation-640x360.jpg" data-gall="portfolioGallery" class="venobox"
                               title="WhatsApp Automation"><i class="bx bx-plus"></i></a>
                            <a href="https://www.drivebird.com/whatsapp-automation" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="https://cdn.drivebird.com/static/service/anonymous-public-chat/image/Public-Chat-640x360.jpg" class="img-fluid" alt="Anonymous Public Chat">
                        <div class="portfolio-links">
                            <a href="https://cdn.drivebird.com/static/service/anonymous-public-chat/image/Public-Chat-640x360.jpg" data-gall="portfolioGallery" class="venobox"
                               title="Anonymous Public Chat"><i class="bx bx-plus"></i></a>
                            <a href="https://www.drivebird.com/free-chat-page-for-your-website" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="https://cdn.drivebird.com/static/service/url-shortener/image/CU8.in-640x360.jpg" class="img-fluid" alt="URL shortener">
                        <div class="portfolio-links">
                            <a href="https://cdn.drivebird.com/static/service/url-shortener/image/CU8.in-640x360.jpg" data-gall="portfolioGallery" class="venobox"
                               title="URL shortener"><i class="bx bx-plus"></i></a>
                            <a href="https://cu8.in/" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="https://cdn.drivebird.com/static/service/placeholder/image/Placeholder-640x360.jpg" class="img-fluid" alt="Placeholder">
                        <div class="portfolio-links">
                            <a href="https://cdn.drivebird.com/static/service/placeholder/image/Placeholder-640x360.jpg" data-gall="portfolioGallery" class="venobox"
                               title="Placeholder"><i class="bx bx-plus"></i></a>
                            <a href="https://www.drivebird.com/api/placeholder" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="https://cdn.drivebird.com/static/service/wallpapers/image/Wallpapers-640x360.jpg" class="img-fluid" alt="Wallpapers">
                        <div class="portfolio-links">
                            <a href="https://cdn.drivebird.com/static/service/wallpapers/image/Wallpapers-640x360.jpg" data-gall="portfolioGallery" class="venobox"
                               title="Wallpapers"><i class="bx bx-plus"></i></a>
                            <a href="https://www.drivebird.com/wallpapers" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="https://cdn.drivebird.com/static/service/quote-of-the-day/image/Quote-Of-The-Day-640x360.jpg" class="img-fluid" alt="Quote Of The Day">
                        <div class="portfolio-links">
                            <a href="https://cdn.drivebird.com/static/service/quote-of-the-day/image/Quote-Of-The-Day-640x360.jpg" data-gall="portfolioGallery" class="venobox"
                               title="Quote Of The Day"><i class="bx bx-plus"></i></a>
                            <a href="https://www.drivebird.com/api/quote-of-the-day" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="https://cdn.drivebird.com/static/service/contact-explorer/image/Contact-Explorer-640x360.jpg" class="img-fluid" alt="Contact Explorer">
                        <div class="portfolio-links">
                            <a href="https://cdn.drivebird.com/static/service/contact-explorer/image/Contact-Explorer-640x360.jpg" data-gall="portfolioGallery" class="venobox"
                               title="Contact Explorer"><i class="bx bx-plus"></i></a>
                            <a href="https://www.drivebird.com/contact-explorer" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="https://cdn.drivebird.com/static/service/google-my-business/image/Google-My-Business-Rating-API-640x360.jpg" class="img-fluid" alt="Google My Business">
                        <div class="portfolio-links">
                            <a href="https://cdn.drivebird.com/static/service/google-my-business/image/Google-My-Business-Rating-API-640x360.jpg" data-gall="portfolioGallery" class="venobox"
                               title="Google My Business"><i class="bx bx-plus"></i></a>
                            <a href="https://www.drivebird.com/google-my-business-rating-api" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 portfolio-item text-center filter-web">
                    <p></p>
                    <p>
                        <a class="btn btn-success" href="https://www.drivebird.com/" target="_blank"><i class="bx bx-link-external"></i> MORE UTILITIES</a>
                    </p>
                </div>

            </div>

            -->

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Tool Section ========== -->
    <section id="tools" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Utility Tools</h2>
                <p>
                    Must have free utility tools for everyone.
                    These tools are made to easier your life.
                    If you like, share the links so others can get help from it.
                </p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="icofont-key"></i></div>
                    <h4 class="title"><a href="https://atanubiswas.com/tools/strong-password-generator-online">Password Generator</a></h4>
                    <p class="description">Generate secure password for your online accounts.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="icofont-ui-password"></i></div>
                    <h4 class="title"><a href="https://atanubiswas.com/tools/password-checker-online">Password Checker</a></h4>
                    <p class="description">Check if your secret password is actually known to the world!</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="icofont-listine-dots"></i></div>
                    <h4 class="title"><a target="_blank" href="https://www.drivebird.com/issue-tracker/about">Issue Tracker</a></h4>
                    <p class="description">Having complications with your employee? Try Issue Tracker!</p>
                </div>

                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="icofont-ui-chat"></i></div>
                    <h4 class="title"><a target="_blank" href="https://atanubiswas.com/public-chat">Public Chat</a></h4>
                    <p class="description">Chat and have fun with multiple website's users.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="icofont-chat"></i></div>
                    <h4 class="title"><a target="_blank" href="https://atanubiswas.com/anonymous-chat">Anonymous Chat</a></h4>
                    <p class="description">Anonymously chat with other website's users. No login required.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="icofont-ui-text-chat"></i></div>
                    <h4 class="title"><a target="_blank" href="https://atanubiswas.com/psychobot-chat">PsychoBot Chat</a></h4>
                    <p class="description">Chat with this PsychoBot to have fun. Just don't be a mad!</p>
                </div>

                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="icofont-rupee"></i></div>
                    <h4 class="title"><a href="https://atanubiswas.com/tools/emi-calculator-online">EMI Calculator</a></h4>
                    <p class="description">Calculate EMI for home loan, car loan and personal loan!</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="icofont-link"></i></div>
                    <h4 class="title"><a href="https://atanubiswas.com/tools/url-shortener-online">URL Shortener</a></h4>
                    <p class="description">Shorten your long / ugly links and simplify your digital life!</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="icofont-culinary"></i></div>
                    <h4 class="title"><a href="https://atanubiswas.com/tools/calorie-calculator-online">Calorie Calculator</a></h4>
                    <p class="description">Estimate the number of calories you need to consume per day!</p>
                </div>

                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="icofont-qr-code"></i></div>
                    <h4 class="title"><a href="https://atanubiswas.com/tools/qr-code-generator-online">QR Code Generator</a></h4>
                    <p class="description">Simply put your desired information and get a high-quality QR code ready!</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="icofont-lock"></i></div>
                    <h4 class="title"><a href="https://atanubiswas.com/tools/password-protected-text-encryption-decryption-online">Text Encryption Decryption</a></h4>
                    <p class="description">Protect your sensitive text with password-protected encryption tool.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="icofont-baby"></i></div>
                    <h4 class="title"><a href="https://atanubiswas.com/tools/baby-name-generator">Baby Name Generator</a></h4>
                    <p class="description">Looking for the perfect name for your newborn baby? Try this!</p>
                </div>

                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="icofont-price"></i></div>
                    <h4 class="title"><a target="_blank" href="https://deal84.com/price-drop-alert">Price Drop Alert</a></h4>
                    <p class="description">View latest deals and price drop alerts from Amazon, Flipkart & more!</p>
                </div>
                <!--<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="icofont-lock"></i></div>
                    <h4 class="title"><a href="https://atanubiswas.com/tools/password-protected-text-encryption-decryption-online">Text Encryption Decryption</a></h4>
                    <p class="description">Protect your sensitive text with password-protected encryption tool.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="icofont-baby"></i></div>
                    <h4 class="title"><a href="https://atanubiswas.com/tools/baby-name-generator">Baby Name Generator</a></h4>
                    <p class="description">Looking for the perfect name for your newborn baby? Try this!</p>
                </div>-->

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
        <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Get in Touch</h2>
                <p>
                    If you have an application you are interested in developing, a problem that needs solving or a
                    project that needs rescuing, I'd love to help you with it.
                    Don't hesitate! Just throw the message and I will get back to you within ~24 hours.
                </p>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Vill: Piyada Para Rd
                            Bankra, Howrah, West Bengal 711403</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p><a href="/cdn-cgi/l/email-protection#6e0d01001a0f0d1a2e0f1a0f001b0c071d190f1d400d0103"><span class="__cf_email__" data-cfemail="86e5e9e8f2e7e5f2c6e7f2e7e8f3e4eff5f1e7f5a8e5e9eb">[email&#160;protected]</span></a></p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call/Whatsapp:</h4>
                            <p>+91 7004720165</p>
                        </div>
                                                    <!-- <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.0842606869755!2d88.37120411436122!3d22.312652848086227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a026928a2cf4f4d%3A0x1a6449ee44291f3c!2sDeal84%20%3A%3A%20Rent%20an%20online-store!5e0!3m2!1sen!2sin!4v1651148497822!5m2!1sen!2sin"
                                    width="600" height="450" frameborder="0" class="gMap"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                                    <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.334585138889!2d88.27545477481227!3d22.603977631820488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0278841f024c17%3A0x424d1e7026a7092a!2sPiyada%20Para%20Rd%2C%20Bankra%2C%20Howrah%2C%20West%20Bengal%20711403!5e0!3m2!1sen!2sin!4v1736094186223!5m2!1sen!2sin"
                                    width="600" height="450" frameborder="0" class="gMap"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
                                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.334585138889!2d88.27545477481227!3d22.603977631820488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0278841f024c17%3A0x424d1e7026a7092a!2sPiyada%20Para%20Rd%2C%20Bankra%2C%20Howrah%2C%20West%20Bengal%20711403!5e0!3m2!1sen!2sin!4v1736094186223!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                                                </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="#" method="post" role="form" class="contact-form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars"
                                       onKeyUP="this.value = this.value.toUpperCase();"
                                />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                       data-msg="Please enter a valid email"
                                       onKeyUP="this.value = this.value.toLowerCase();"
                                />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                                   data-msg="Please enter at least 8 chars of subject"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required"
                                      data-msg="Please write something for me"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Sending ...</div>
                            <div class="error-message"></div>
                            <div class="sent-message"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <!-- <div class="copyright">
            Founder of
            <strong>
               <span>
                   <a href="https://www.drivebird.com/" target="_blank">DriveBird Network</a>
               </span>
            </strong>
        </div> -->
        <div class="credits">
            <!--            <span>Updated on: --><!--</span>-->
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Compiled Main script file -->
<script src="https://atanubiswas.com/static/theme/1/compiled/main.min.js"></script>

</body>

</html>
