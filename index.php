<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>NeoHull</title>
    <meta name="description" content="">
    <meta name="company" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ===============================================
    === -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html"><img src="images/logo.png" alt="Homepage"></a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
				<li><a class="smoothscroll"  href="#mission" title="blog">Mission</a></li>
                <li><a class="smoothscroll"  href="#about" title="about">Team</a></li>
                <li><a class="smoothscroll"  href="#journey" title="journey">Journey</a></li>
                <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


   <!-- home
   ================================================== -->
   <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Your choice for underwater autonomy</h3></br>

                <h1>NeoSpeed. <br/>
                    NeoEndurance. <br/>
                    NeoDesign. <p></p>
                    We are NeoHull.
                </h1>
				<?php $image =  basename("images/brochure.png"); ?>

                <div class="home-content__buttons">
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        About Us
                    </a>
                    <a download="<?php echo $image; ?>" href="images/brochure.png" class="btn btn--stroke">
                        Get Brochure
                    </a>
                </div>

            </div>
			
        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="#"><i class="im im-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-pinterest" aria-hidden="true"></i><span>Pinterest</span></a>
            </li>
        </ul> 
        <!-- end home-social -->
		
    </section> <!-- end s-home -->



	<section id="mission" class="s-contact-2 target-section">

        <div class="overlay"></div>

        <div class="row narrow section-intro">
            <div class="col-full">
                <h3>Our Mission</h3>
				<p></p>
                <p class="lead">To offer our customers premium underwater services for commercial,<br> 
				defence and scientific purposes all around the world through cutting edge<br>
				technology with focus on safety, environment and community.</p>
            </div>
			
			 <div class="col-full">
                <h3>Our Vision</h3>
				<p></p>
                <p class="lead">To be the partner of choice for any business that wishes to do anything <br>
				underwater by exploring new opportunities every day.</p>
            </div>
        </div>
	</section>
    <!-- about
    ================================================== -->
    <section class="target-section" id="about">
    <div class="s-testimonials-2">

        <div class="row testimonials-header">
            <div class="col-full">
                <h1 class="h02">Meet the team.</h1>
            </div>
        </div>

        <div class="row testimonials">

            <div class="col-full testimonials__slider">

                <div class="testimonials__slide">
                    <img src="images/avatars/user-14.jpg" alt="Author image" class="testimonials__avatar">
                    <p>Manish is the founder of Rooman Technologies. He is a Computer Engineer and alumni of IIM, 
					Bangalore He comes with over 15 years of experience in Networking and Security Training.
                    He is qualified with advanced International Certifications such as CCSI, CCSE, CCSA, ISS, CEH, CHFI, 
					MCP, CCNA, CEI and is also a Certified Lead Auditor.</p>
                    <div class="testimonials__author h06">
                        Manish Kumar
                        <span>DIRECTOR</span>
                    </div>
                </div>

                <div class="testimonials__slide">
                    <img src="images/avatars/user-11.jpg" alt="Author image" class="testimonials__avatar">
                    <p>Siddhant is the founder and head of Dream Team (IISc MSME Center of Excellence, Govt. of India). 
					He is the founder of AMSPL and is born with the entrepreneurial spoon in his mouth.
					 He holds AIR 2 for Conceptual Design report presentation (National Institute of Ocean Technology, Chennai)
					and has won the most Innovative Green Idea in India Region from HULT Organization. </p>
                    <div class="testimonials__author h06">
                        Siddhant Bajpai
                        <span>CEO</span>
                    </div>
                </div>

                <div class="testimonials__slide">
                    <img src="images/avatars/user-12.jpg" alt="Author image" class="testimonials__avatar">
                    <p>Christen is a full stack developer. He has interned at Citrix R&D India Pvt. Ltd. and has
					completed several technical projects for RVCE including Heuristic Optimization for the driver relay problem developed
					in collaboration with Optym. He secured AIR 2 in the prestigious Indian Engineering Olympiad in the year 2017 and has
					a sound working knowledge of all modern programming constructs.</p>
                    <div class="testimonials__author h06">
                        Christen Dsouza
                        <span>CTO</span>
                    </div>
                </div>

                <div class="testimonials__slide">
                    <img src="images/avatars/user-13.jpg" alt="Author image" class="testimonials__avatar">
                    <p>Madhur is the ideal operations engineer. He holds a dual degree in BTech and Economics from 
					BITS and has worked as the consulting director for 
					180 Degree Consulting at BITS Goa. He was also an S&O intern at the prestigious 
					Deloitte Consulting, India. He also interned at Grofers India as well as worked as a
					 Marketing and Sales intern for SAIL, Rourkela Steel Plant.</p>
                    <div class="testimonials__author h06">
                        Madhur Garg
                        <span>COO</span>
                    </div>
                </div>
                
            </div> <!-- end testimonials__slider -->

        </div> <!-- end testimonials -->

    </div> <!-- end s-testimonials -->
</section>
    <section class="s-about target-section" id="journey">
        <div class="row about-content about-content--timeline">

            <div class="col-full text-center">
                <h3>Our Journey.</h3>
            </div>

            <div class="col-six tab-full left">
                <div class="timeline">

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">August 2018 - Present</p>
                            <h3>Defence India Startup Challenge</h3>
                            <h5>A competitor</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>A competitor in the prestigious Defence India Startup Challenge which was thrown
                            open by our Raksha Mantri, Mrs. Nirmala Sitharaman herself. An 8 month long endeavour, this
                            competition will see us bring out the greatest innovations in the defence sector. Our motives
                            are firm, our goal is one.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">January 2018 - Present</p>
                            <h3>NITI Aayog</h3>
                            <h5>Incubation Phase</h5>
                        </div>
                        <div class="timeline__desc">	
                            <p>We are proudly incubated under the foremost startup incubation scheme
                            of the Indian government, NITI Aayog. It is a first of its kind initiative in India under
                            the Pradhan Mantri Yojana and we are among the first few to receive the LOI from them. Over the 
                            course of the following months, we shall design our model according to the problem statements in the 
                            link below.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                </div> <!-- end timeline -->
            </div> <!-- end left -->

            <div class="col-six tab-full right">
                <div class="timeline">

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">Aug 2017 - June 2018</p>
                            <h3>IISc Project</h3>
                            <h5>A new oppurtunity</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>In the spring of 2017, we embarked on an exciting new journey where we were offered to 
                            take up out project under the one and only Indian Institute of Science. With funding from the Ministry 
                            of MSME and support from top scientists at IISc, Dr. Jamdhani and Dr. Jamakhandi, we succesfully completed our two projects envisioned under them.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">June 2017 - Aug 2017</p>
                            <h3>Our journey begins</h3>
                            <h5>Kick off</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>A group of highly motivated students from RVCE, Bangalore meet and decide that working
                            on underwater vessels will be their lifelong mission. To this effect, they started a technical team 
                            called Team Hydra which focused on designing an AUV spearheaded by none other than our current CEO,
                            Siddhant.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                </div> <!-- end timeline -->
            </div> <!-- end right -->

            <div class="row about-content about-content--buttons">

            <div class="col-six tab-full left">
                <a href="http://aim.gov.in/atal-new-india-challenge.php" class="btn btn--primary full-width">Visit NITI Aayog</a>
            </div>
            <div class="col-six tab-full right">
                <a href="https://www.youtube.com/watch?v=PzT_XW_QQas" class="btn full-width">View Kraken 2.0</a>
            </div>

        </div> <!-- end about-content buttons -->

        </div> <!-- end about-content timeline -->
    </section>
    
    
    <!-- testimonials
    ================================================== -->
	
	<!--
    <section id="people" class="target-section">
    <div class="s-testimonials">

        <div class="overlay"></div>

        <div class="row testimonials-header">
            <div class="col-full">
                <h1 class="h02">What People Say.</h1>
            </div>
        </div>

        <div class="row testimonials">

            <div class="col-full testimonials__slider">

                <div class="testimonials__slide">
                    <img src="images/avatars/user-15.jpg" alt="Author image" class="testimonials__avatar">
                    <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                    Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>
                    <div class="testimonials__author h06">
                        Dr. Prasanna
                        <span>Professor, RVCE</span>
                    </div>
                </div>

                <div class="testimonials__slide">
                    <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                    <p>Qui ipsam temporibus quisquam velMaiores eos cumque distinctio nam accusantium ipsum. 
                    Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium quos qui praesentium corpori.</p>
                    <div class="testimonials__author h06">
                        Mr. Pradeep Mehra
                        <span>Founder, Atal Incubation Centre, Shiv Nada University</span>
                    </div>
                </div>

                <div class="testimonials__slide">
                    <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                    <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                    Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>
                    <div class="testimonials__author h06">
                        Mr. Maheshwarappa
                        <span>Chief Engineer, BWSSB, Bangalore.</span>
                    </div>
                </div>
                
            </div> <!-- end testimonials__slider -->

        <!--</div> <!-- end testimonials -->

    <!--</div> <!-- end s-testimonials -->
    <!--</section>

    <!-- s-stats
    ================================================== -->
    <section id="stats" class="s-stats">
        <div class="row block-1-4 block-tab-1-2 block-mob-full stats">

            <div class="col-block stats__col ">
                <div class="stats__count">
                    4
                </div>
                <h4>Individuals</h4>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">
                    1000
                </div>
                <h4>Cups of Coffee</h4>
            </div>
            <div class="col-block stats__col stats__col--highlight">
                <div class="stats__upsign">
                    <a href="#"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
                <div class="stats__count">
                    1
                </div>
                <h4>Goal</h4>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">
                    10000
                </div>
                <h4>Ideas</h4> 
            </div>

        </div>
    </section> <!-- end s-stats -->


    <!-- s-stats
    ================================================== -->
    <section id="contact" class="s-contact target-section">

        <div class="overlay"></div>

        <div class="row narrow section-intro">
            <div class="col-full">
                <h3>Contact</h3>
                <h1>Get in touch with us.</h1>
                
                <p class="lead">We thank you for taking time to view our site. <br>
                We're excited to know what you think! <br>
                Drop us a mail and we'll get right back.</p>
            </div>
        </div>

        <div class="row contact__main">
            <div class="col-eight tab-full contact__form">
                <form name="contactForm" id="contactForm" method="post" action="">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Submit</button>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>
                        
            </div>
            <div class="col-four tab-full contact__infos">
                <h4 class="h06">Phone</h4>
                <p>Phone: 8197228485<br>
                Mobile: 9901865755<br>
                </p>

                <h4 class="h06">Email</h4>
                <p><a href="mailto:info%40neohull.com">info@neohull.com</a><br>
                </p>

                <h4 class="h06">Address</h4>
                <p>
                Plot#15 B, SyNo: 20, Pradhan Mantri Kausal Kendra,<br>
                Keonics Electronic City, Phase 1, Begur, <br>
                Bengaluru, Karnataka 560110
                </p>
            </div>

        </div>

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="images/logo.png" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="#0">
                        <i class="im im-facebook" aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-twitter" aria-hidden="true"></i>
                        <span>Twitter</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-behance" aria-hidden="true"></i>
                        <span>Behance</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-pinterest" aria-hidden="true"></i>
                        <span>Pinterest</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Andromeda Maritime Solutions Pvt. Ltd. 2018</span> 
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>