<?php
$basePath   = "";
$pageTitle  = 'NOHSONIC Physiotherapy Clinic — Precision Care for Movement Restoration';
$activePage      = "home";
$extraScripts    = '<script>
        // Body map â€” list hover highlights corresponding dot
        document.querySelectorAll(\'.bm-list-item\').forEach(function(item) {
            item.addEventListener(\'mouseenter\', function() {
                var id = this.dataset.target;
                document.querySelectorAll(\'.bm-hotspot\').forEach(function(h) { h.classList.remove(\'bm-highlighted\'); });
                var dot = document.querySelector(\'.bm-hotspot[data-id="\' + id + \'"]\');
                if (dot) dot.classList.add(\'bm-highlighted\');
                document.querySelectorAll(\'.bm-list-item\').forEach(function(i) { i.classList.remove(\'bm-list-active\'); });
                this.classList.add(\'bm-list-active\');
            });
            item.addEventListener(\'mouseleave\', function() {
                document.querySelectorAll(\'.bm-hotspot\').forEach(function(h) { h.classList.remove(\'bm-highlighted\'); });
                this.classList.remove(\'bm-list-active\');
            });
        });
        // Mobile â€” tap dot to toggle active state
        document.querySelectorAll(\'.bm-hotspot\').forEach(function(dot) {
            dot.addEventListener(\'click\', function(e) {
                var isActive = this.classList.contains(\'bm-active\');
                document.querySelectorAll(\'.bm-hotspot\').forEach(function(d) { d.classList.remove(\'bm-active\'); });
                if (!isActive) { this.classList.add(\'bm-active\'); e.stopPropagation(); }
            });
        });
        document.addEventListener(\'click\', function() {
            document.querySelectorAll(\'.bm-hotspot\').forEach(function(d) { d.classList.remove(\'bm-active\'); });
        });
    </script>';
include $basePath . "includes/header.php";
?>


    <!-- Hero Section Start -->
	<div class="hero hero-video bg-radius-section">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <video autoplay muted loop id="myVideo" poster="images/hero-poster.jpg"><source src="video/hero-bg-video.mp4" type="video/mp4"></video>
            <!-- Selfhosted Video End -->

            <!-- Youtube Video Start -->
            <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Video End -->
		<div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Precision Care for Movement Restoration</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We help you move better, hurt less, and recover faster. Whether you're dealing with back pain, a sports injury, or a long-term condition â€” our team provides hands-on, personalised physiotherapy care in Abuja.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#" class="btn-default"><span>explore services</span></a>
                            <a href="#" class="btn-default btn-highlighted"><span>book appointment</span></a>
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
	</div>
	<!-- Hero Section End -->

    <!-- Our Benefits Secton Start -->
    <div class="our-benefits bg-radius-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Benefits Item Start -->
                    <div class="benefits-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="images/icon-benefits-1.svg" alt="">
                        </div>
                        <div class="benefits-content">
                            <h3>expert therapists</h3>
                            <p>Easy treatment with expert</p>
                        </div>
                    </div>
                    <!-- Benefits Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Benefits Item Start -->
                    <div class="benefits-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="images/icon-benefits-2.svg" alt="">
                        </div>
                        <div class="benefits-content">
                            <h3>Emergency Service</h3>
                            <p>24/7 Emergency Available</p>
                        </div>
                    </div>
                    <!-- Benefits Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Benefits Item Start -->
                    <div class="benefits-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="images/icon-benefits-3.svg" alt="">
                        </div>
                        <div class="benefits-content">
                            <h3>Personalised Care</h3>
                            <p>Advice with Experts</p>
                        </div>
                    </div>
                    <!-- Benefits Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Benefits Secton End -->

    <!-- About Us Section Start -->
	<div class="about-us bg-radius-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Abuja's trusted physiotherapy clinic</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">At NOHSONIC, we focus on the root cause â€” not just the symptom. Our physiotherapists assess your movement, identify what's holding you back, and build a recovery plan that fits your life. From spine conditions to post-surgery rehab, we've got you covered.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Content Body Start -->
                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <!-- About Content List Start -->
                                    <div class="about-content-list">
                                        <!-- About List Item Start -->
                                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="icon-box">
                                                <img src="images/icon-about-list-1.svg" alt="">
                                            </div>
                                            <div class="about-list-content">
                                                <p>expert therapist</p>
                                            </div>
                                        </div>
                                        <!-- About List Item End -->

                                        <!-- About List Item Start -->
                                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                            <div class="icon-box">
                                                <img src="images/icon-about-list-2.svg" alt="">
                                            </div>
                                            <div class="about-list-content">
                                                <p>advanced techniques</p>
                                            </div>
                                        </div>
                                        <!-- About List Item End -->

                                        <!-- About List Item Start -->
                                        <div class="about-list-item wow fadeInUp" data-wow-delay="1s">
                                            <div class="icon-box">
                                                <img src="images/icon-about-list-3.svg" alt="">
                                            </div>
                                            <div class="about-list-content">
                                                <p>personalized care</p>
                                            </div>
                                        </div>
                                        <!-- About List Item End -->
                                    </div>
                                    <!-- About Content List End -->
                                </div>

                                <div class="col-md-6">
                                    <div class="about-trusted-customer wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="trusted-customer-image">
                                            <img src="images/about-trusted-customer-img.jpg" alt="" loading="lazy">
                                        </div>
                                        <div class="trusted-customer-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="trusted-customer-content">
                                            <p>trusted by <span class="counter">4</span>k+ customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About Content Body End -->

                        <!-- About Content Footer Start -->
                        <div class="about-content-footer wow fadeInUp" data-wow-delay="1.25s">
                            <a href="#" class="btn-default"><span>book appointment</span></a>
                        </div>
                        <!-- About Content Footer End -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <div class="about-image img-box-1">
                            <figure class="image-anime">
                                <img src="images/about-us-img-1.jpg" alt="" loading="lazy">
                            </figure>
                        </div>

                        <div class="about-image img-box-2">
                            <figure class="image-anime">
                                <img src="images/about-us-img-2.jpg" alt="" loading="lazy">
                            </figure>
                        </div>

                        <div class="about-image img-box-3">
                            <figure class="image-anime">
                                <img src="images/about-us-img-3.jpg" alt="" loading="lazy">
                            </figure>
                        </div>

                        <div class="about-image img-box-4">
                            <figure class="image-anime">
                                <img src="images/about-us-img-4.jpg" alt="" loading="lazy">
                            </figure>
                        </div>

                        <div class="about-circle-logo">
                            <img src="images/about_us_logo.png" alt="">
                        </div>
                    </div>
                    <!-- About Us Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services bg-radius-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">services</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Specialist Care for Every Condition</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">From acute injuries to long-term conditions, our physiotherapists deliver hands-on, evidence-based care tailored to your specific needs.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp">
                        <a href="#" class="btn-default"><span>make an appointment</span></a>
                    </div>
                    <!-- Section Btn End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <!-- Service Item Image Start -->
                        <div class="service-item-image">
                            <figure>
                                <img src="images/services/orthopedic-rehabilitation/main.jpg" alt="Orthopedic Rehabilitation" loading="lazy">
                            </figure>
                        </div>
                        <!-- Service Item Image End -->

                        <!-- Service Item Icon Start -->
                        <div class="icon-box">
                            <img src="images/icon-service-1.svg" alt="">
                        </div>
                        <!-- Service Item Icon ENd -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <h3>Orthopedic Rehabilitation</h3>
                                <p>Joint pain, back pain, fractures, or a frozen shoulder â€” we restore your movement and get you back to full function.</p>
                            </div>
                            <!-- Service Content End -->

                             <!-- Service Btn Start -->
                            <div class="service-btn">
                                <a href="service/orthopedic-rehabilitation/"><img src="images/arrow-readmore-btn.svg" alt=""></a>
                            </div>
                            <!-- Service Btn End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Service Item Image Start -->
                        <div class="service-item-image">
                            <figure>
                                <img src="images/services/sports-injury-rehabilitation/main.jpg" alt="Sports Injury Rehabilitation" loading="lazy">
                            </figure>
                        </div>
                        <!-- Service Item Image End -->

                        <!-- Service Item Icon Start -->
                        <div class="icon-box">
                            <img src="images/icon-service-2.svg" alt="">
                        </div>
                        <!-- Service Item Icon ENd -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <h3>Sports Injury Rehabilitation</h3>
                                <p>From ACL tears to muscle strains, we help athletes and active people recover fully and return to the game they love.</p>
                            </div>
                            <!-- Service Content End -->

                             <!-- Service Btn Start -->
                            <div class="service-btn">
                                <a href="service/sports-injury-rehabilitation/"><img src="images/arrow-readmore-btn.svg" alt=""></a>
                            </div>
                            <!-- Service Btn End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Service Item Image Start -->
                        <div class="service-item-image">
                            <figure>
                                <img src="images/services/chronic-pain-management/main.jpg" alt="Chronic Pain Management" loading="lazy">
                            </figure>
                        </div>
                        <!-- Service Item Image End -->

                        <!-- Service Item Icon Start -->
                        <div class="icon-box">
                            <img src="images/icon-service-3.svg" alt="">
                        </div>
                        <!-- Service Item Icon ENd -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <h3>Chronic Pain Management</h3>
                                <p>Living with pain that won't go away? We help you manage it, reduce it, and get back to the things that matter.</p>
                            </div>
                            <!-- Service Content End -->

                             <!-- Service Btn Start -->
                            <div class="service-btn">
                                <a href="service/chronic-pain-management/"><img src="images/arrow-readmore-btn.svg" alt=""></a>
                            </div>
                            <!-- Service Btn End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Service Item Image Start -->
                        <div class="service-item-image">
                            <figure>
                                <img src="images/services/pre-post-surgical-rehabilitation/main.jpg" alt="Pre and Post-Surgical Rehabilitation" loading="lazy">
                            </figure>
                        </div>
                        <!-- Service Item Image End -->

                        <!-- Service Item Icon Start -->
                        <div class="icon-box">
                            <img src="images/icon-service-4.svg" alt="">
                        </div>
                        <!-- Service Item Icon ENd -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <h3>Pre & Post-Surgical Rehabilitation</h3>
                                <p>We prepare your body before surgery and guide your recovery after â€” so you heal faster and come back stronger.</p>
                            </div>
                            <!-- Service Content End -->

                             <!-- Service Btn Start -->
                            <div class="service-btn">
                                <a href="service/pre-post-surgical-rehabilitation/"><img src="images/arrow-readmore-btn.svg" alt=""></a>
                            </div>
                            <!-- Service Btn End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <!-- Service Item Image Start -->
                        <div class="service-item-image">
                            <figure>
                                <img src="images/services/womens-health-pelvic-care/main.jpg" alt="Women's Health and Pelvic Care" loading="lazy">
                            </figure>
                        </div>
                        <!-- Service Item Image End -->

                        <!-- Service Item Icon Start -->
                        <div class="icon-box">
                            <img src="images/icon-service-5.svg" alt="">
                        </div>
                        <!-- Service Item Icon ENd -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <h3>Women's Health & Pelvic Care</h3>
                                <p>Specialist care for pregnancy-related pain, postpartum recovery, and pelvic floor issues â€” delivered with sensitivity and expertise.</p>
                            </div>
                            <!-- Service Content End -->

                             <!-- Service Btn Start -->
                            <div class="service-btn">
                                <a href="service/womens-health-pelvic-care/"><img src="images/arrow-readmore-btn.svg" alt=""></a>
                            </div>
                            <!-- Service Btn End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.25s">
                        <!-- Service Item Image Start -->
                        <div class="service-item-image">
                            <figure>
                                <img src="images/services/neurological-rehabilitation/main.jpg" alt="Neurological Rehabilitation" loading="lazy">
                            </figure>
                        </div>
                        <!-- Service Item Image End -->

                        <!-- Service Item Icon Start -->
                        <div class="icon-box">
                            <img src="images/icon-service-6.svg" alt="">
                        </div>
                        <!-- Service Item Icon ENd -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <h3>Neurological Rehabilitation</h3>
                                <p>For stroke, Parkinson's, and nerve injuries â€” we help you rebuild movement, strength, and independence step by step.</p>
                            </div>
                            <!-- Service Content End -->

                             <!-- Service Btn Start -->
                            <div class="service-btn">
                                <a href="service/neurological-rehabilitation/"><img src="images/arrow-readmore-btn.svg" alt=""></a>
                            </div>
                            <!-- Service Btn End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- More Service Btn Start -->
                    <div class="more-service-btn wow fadeInUp" data-wow-delay="1.5s">
                        <a href="service/">View All Services<img src="images/arrow-long-white.svg" alt=""></a>                      
                    </div>
                    <!-- More Service Btn End -->
                </div>
            </div>
        </div>
    </div>
    <div class="bg-section bg-radius-section"></div>
    <!-- Our Services Section End -->


    <!-- Care Rehabilitation Section Start -->
    <div class="care-rehabilitation bg-radius-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">rehabilitation</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Excellence In Care And Rehabilitation</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp">
                        <a href="#" class="btn-default"><span>make an appointment</span></a>
                    </div>
                    <!-- Section Btn End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Rehab Benefits Item Start -->
                    <div class="rehab-benefits-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="images/icon-rehab-benefits-1.svg" alt="">
                        </div>
                        <div class="rehab-benefits-content">
                            <h3>experienced team</h3>
                        </div>
                    </div>
                    <!-- Rehab Benefits Item End -->
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Rehab Benefits Item Start -->
                    <div class="rehab-benefits-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="images/icon-rehab-benefits-2.svg" alt="">
                        </div>
                        <div class="rehab-benefits-content">
                            <h3>advanced technology</h3>
                        </div>
                    </div>
                    <!-- Rehab Benefits Item End -->
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Rehab Benefits Item Start -->
                    <div class="rehab-benefits-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="images/icon-rehab-benefits-3.svg" alt="">
                        </div>
                        <div class="rehab-benefits-content">
                            <h3>personalized treatment</h3>
                        </div>
                    </div>
                    <!-- Rehab Benefits Item End -->
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Rehab Benefits Item Start -->
                    <div class="rehab-benefits-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="images/icon-rehab-benefits-4.svg" alt="">
                        </div>
                        <div class="rehab-benefits-content">
                            <h3>convenient and accessible</h3>
                        </div>
                    </div>
                    <!-- Rehab Benefits Item End -->
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Rehab Benefits Item Start -->
                    <div class="rehab-benefits-item wow fadeInUp" data-wow-delay="1s">
                        <div class="icon-box">
                            <img src="images/icon-rehab-benefits-5.svg" alt="">
                        </div>
                        <div class="rehab-benefits-content">
                            <h3>expertise and experience</h3>
                        </div>
                    </div>
                    <!-- Rehab Benefits Item End -->
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Rehab Benefits Item Start -->
                    <div class="rehab-benefits-item wow fadeInUp" data-wow-delay="1.25s">
                        <div class="icon-box">
                            <img src="images/icon-rehab-benefits-6.svg" alt="">
                        </div>
                        <div class="rehab-benefits-content">
                            <h3>community involvement</h3>
                        </div>
                    </div>
                    <!-- Rehab Benefits Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Care Rehabilitation Section End -->

    <!-- Quality Treatment Section Start -->
    <div class="our-quality bg-radius-section">
        <div class="quality-treatment">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <!-- Quality Treatment Content Start -->
                        <div class="quality-treatment-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">quality treatment</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">We Proudly Give Quality Treatment</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.25s">We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt and effective care to help you manage.</p>
                            </div>
                            <!-- Section Title End -->
    
                            <!-- Quality Treatment Body Start -->
                            <div class="quality-treatment-body wow fadeInUp" data-wow-delay="0.5s">
                                <ul>
                                    <li>We understand that injuries</li>
                                    <li>can happen unexpectedly, Our emergency</li>
                                    <li>We understand that injuries</li>
                                </ul>
                            </div>
                            <!-- Quality Treatment Body End -->
    
                            <!-- Quality Treatment Footer Start -->
                            <div class="quality-treatment-footer wow fadeInUp" data-wow-delay="0.75s">
                                <a href="#" class="btn-default"><span>make an appointment</span></a>
                            </div>
                            <!-- Quality Treatment Footer End -->
                        </div>
                        <!-- Quality Treatment Content End -->
                    </div>
    
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Quality Treatment Section End -->

    <!-- How It Work Section Start -->
    <div class="how-it-work bg-radius-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <!-- How Work Images Start -->
                    <div class="how-work-images">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <!-- How Work Image Box Start -->
                                <div class="how-work-image-box-1">
                                    <div class="how-work-img-1">
                                        <figure class="image-anime reveal">
                                            <img src="images/how-work-img-1.jpg" alt="Book your appointment" loading="lazy">
                                        </figure>
                                    </div>
                                    <div class="how-work-img-3">
                                        <figure class="image-anime reveal">
                                            <img src="images/how-work-img-3.jpg" alt="Personalised treatment" loading="lazy">
                                        </figure>
                                    </div>
                                </div>      
                                <!-- How Work Image Box End -->                          
                            </div>

                            <div class="col-8">
                                <!-- How Work Image Box Start -->
                                <div class="how-work-image-box-2">
                                    <div class="how-work-img-2">
                                        <figure class="image-anime reveal">
                                            <img src="images/how-work-img-2.jpg" alt="Initial assessment" loading="lazy">
                                        </figure>
                                    </div>
                                    <div class="how-work-img-4">
                                        <figure class="image-anime reveal">
                                            <img src="images/how-work-img-4.jpg" alt="Track your recovery" loading="lazy">
                                        </figure>
                                    </div>
                                </div>  
                                <!-- How Work Image Box End -->                              
                            </div>
                        </div>
                    </div>
                    <!-- How Work Images End -->
                </div>

                <div class="col-lg-6 order-lg-2 order-1">
                    <!-- How Work Content Start -->
                    <div class="how-work-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">how it works</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Your Path From Pain to Full Recovery</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- How Work Accordion Start -->
                        <div class="how-work-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">                                
                                <h2 class="accordion-header" id="heading1">
                                    <span class="icon-box">
                                        <img src="images/icon-how-it-work-1.svg" alt="">
                                    </span>
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        book your appointment
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Call us, send an email, or use our online booking form to schedule your first session at a time that suits you.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">                                
                                <h2 class="accordion-header" id="heading2">
                                    <span class="icon-box">
                                        <img src="images/icon-how-it-work-2.svg" alt="">
                                    </span>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        initial assessment
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Your physiotherapist evaluates your condition, movement patterns, pain history, and goals to build a complete picture of your needs.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading3">
                                    <span class="icon-box">
                                        <img src="images/icon-how-it-work-2.svg" alt="">
                                    </span>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        personalised treatment
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We deliver a tailored programme of hands-on therapy, targeted exercises, and patient education designed around your specific condition.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="heading4">
                                    <span class="icon-box">
                                        <img src="images/icon-how-it-work-4.svg" alt="">
                                    </span>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        track your recovery
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We review your progress at every stage and adapt your treatment plan so you keep moving forward until you reach your goals.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- How Work Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How It Work Section End -->

    <!-- Body Map Section Start -->
    <div class="body-map-section bg-radius-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">find your treatment</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Where Does It Hurt?</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Select a condition below or hover a point on the body to find the right physiotherapy service for you.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center bm-layout-row">

                <!-- Left Service List -->
                <div class="col-lg-3 d-none d-lg-block">
                    <ul class="bm-service-list">
                        <li class="bm-list-item" data-target="4">
                            <span class="bm-list-circle"></span>
                            <a href="service/orthopedic-rehabilitation/">Orthopedic Rehabilitation</a>
                        </li>
                        <li class="bm-list-item" data-target="11">
                            <span class="bm-list-circle"></span>
                            <a href="service/sports-injury-rehabilitation/">Sports Injury Rehabilitation</a>
                        </li>
                        <li class="bm-list-item" data-target="8">
                            <span class="bm-list-circle"></span>
                            <a href="service/chronic-pain-management/">Chronic Pain Management</a>
                        </li>
                        <li class="bm-list-item" data-target="5">
                            <span class="bm-list-circle"></span>
                            <a href="service/cardiac-rehabilitation/">Cardiac Rehabilitation</a>
                        </li>
                        <li class="bm-list-item" data-target="9">
                            <span class="bm-list-circle"></span>
                            <a href="service/womens-health-pelvic-care/">Women's Health &amp; Pelvic</a>
                        </li>
                        <li class="bm-list-item" data-target="12">
                            <span class="bm-list-circle"></span>
                            <a href="service/paediatric-care/">Paediatric Care</a>
                        </li>
                        <li class="bm-list-item" data-target="13">
                            <span class="bm-list-circle"></span>
                            <a href="service/tele-physiotherapy/">Tele-Physiotherapy</a>
                        </li>
                    </ul>
                </div>

                <!-- Body Figure -->
                <div class="col-lg-6 col-12">
                    <div class="body-map-wrapper">
                        <img src="images/body-map-figure.jpg" alt="Body map â€” NOHSONIC Physiotherapy" class="body-map-figure" loading="lazy">

                        <div class="bm-hotspot" data-id="1" style="--bm-top: 12%; --bm-left: 50%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-right"><h4>Neurological Rehabilitation</h4><p>Stroke, Parkinson's, and nerve injuries</p><a href="service/neurological-rehabilitation/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="2" style="--bm-top: 14%; --bm-left: 63%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-right"><h4>Vestibular Rehabilitation</h4><p>Dizziness, vertigo, and balance disorders</p><a href="service/vestibular-rehabilitation/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="3" style="--bm-top: 22%; --bm-left: 31%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-left"><h4>Ergonomics &amp; Workplace</h4><p>Neck, shoulder, and back strain from work</p><a href="service/ergonomics-workplace-assessment/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="4" style="--bm-top: 27%; --bm-left: 69%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-right"><h4>Orthopedic Rehabilitation</h4><p>Joints, bones, tendons, and ligaments</p><a href="service/orthopedic-rehabilitation/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="5" style="--bm-top: 34%; --bm-left: 37%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-left"><h4>Cardiac Rehabilitation</h4><p>Recovery after heart-related conditions</p><a href="service/cardiac-rehabilitation/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="6" style="--bm-top: 30%; --bm-left: 63%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-right"><h4>Oncology Physiotherapy</h4><p>Support during and after cancer treatment</p><a href="service/oncology-physiotherapy/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="7" style="--bm-top: 43%; --bm-left: 26%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-left"><h4>Pre &amp; Post-Surgical Rehab</h4><p>Prepare and recover from surgery faster</p><a href="service/pre-post-surgical-rehabilitation/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="8" style="--bm-top: 46%; --bm-left: 54%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-right"><h4>Chronic Pain Management</h4><p>Long-term pain relief and quality of life</p><a href="service/chronic-pain-management/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="9" style="--bm-top: 54%; --bm-left: 44%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-left"><h4>Women's Health &amp; Pelvic Care</h4><p>Pregnancy, postpartum, and pelvic floor</p><a href="service/womens-health-pelvic-care/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="10" style="--bm-top: 59%; --bm-left: 65%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-right"><h4>Home &amp; Community Physiotherapy</h4><p>Expert treatment at your home or community</p><a href="service/home-community-physiotherapy/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="11" style="--bm-top: 68%; --bm-left: 37%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-left"><h4>Sports Injury Rehabilitation</h4><p>Return to sport faster and stronger</p><a href="service/sports-injury-rehabilitation/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="12" style="--bm-top: 72%; --bm-left: 63%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-right"><h4>Paediatric Care</h4><p>Physiotherapy for children and adolescents</p><a href="service/paediatric-care/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="13" style="--bm-top: 79%; --bm-left: 36%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-left"><h4>Tele-Physiotherapy</h4><p>Expert care via video from anywhere</p><a href="service/tele-physiotherapy/">Learn more</a></div>
                        </div>
                        <div class="bm-hotspot" data-id="14" style="--bm-top: 87%; --bm-left: 63%;">
                            <div class="bm-dot"></div>
                            <div class="bm-card bm-card-right"><h4>Geriatric Care Physiotherapy</h4><p>Mobility and independence for older adults</p><a href="service/geriatric-care/">Learn more</a></div>
                        </div>
                    </div>
                </div>

                <!-- Right Service List -->
                <div class="col-lg-3 d-none d-lg-block">
                    <ul class="bm-service-list bm-list-right">
                        <li class="bm-list-item" data-target="1">
                            <span class="bm-list-circle"></span>
                            <a href="service/neurological-rehabilitation/">Neurological Rehabilitation</a>
                        </li>
                        <li class="bm-list-item" data-target="2">
                            <span class="bm-list-circle"></span>
                            <a href="service/vestibular-rehabilitation/">Vestibular Rehabilitation</a>
                        </li>
                        <li class="bm-list-item" data-target="3">
                            <span class="bm-list-circle"></span>
                            <a href="service/ergonomics-workplace-assessment/">Ergonomics &amp; Workplace</a>
                        </li>
                        <li class="bm-list-item" data-target="6">
                            <span class="bm-list-circle"></span>
                            <a href="service/oncology-physiotherapy/">Oncology Physiotherapy</a>
                        </li>
                        <li class="bm-list-item" data-target="7">
                            <span class="bm-list-circle"></span>
                            <a href="service/pre-post-surgical-rehabilitation/">Pre &amp; Post-Surgical Rehab</a>
                        </li>
                        <li class="bm-list-item" data-target="10">
                            <span class="bm-list-circle"></span>
                            <a href="service/home-community-physiotherapy/">Home &amp; Community Physio</a>
                        </li>
                        <li class="bm-list-item" data-target="14">
                            <span class="bm-list-circle"></span>
                            <a href="service/geriatric-care/">Geriatric Care Physiotherapy</a>
                        </li>
                    </ul>
                </div>

                <!-- Mobile Fallback Grid -->
                <div class="col-12 d-lg-none">
                    <div class="body-map-mobile">
                        <a class="bm-mobile-item" href="service/orthopedic-rehabilitation/">Orthopedic Rehabilitation</a>
                        <a class="bm-mobile-item" href="service/sports-injury-rehabilitation/">Sports Injury Rehabilitation</a>
                        <a class="bm-mobile-item" href="service/pre-post-surgical-rehabilitation/">Pre &amp; Post-Surgical Rehab</a>
                        <a class="bm-mobile-item" href="service/chronic-pain-management/">Chronic Pain Management</a>
                        <a class="bm-mobile-item" href="service/neurological-rehabilitation/">Neurological Rehabilitation</a>
                        <a class="bm-mobile-item" href="service/cardiac-rehabilitation/">Cardiac Rehabilitation</a>
                        <a class="bm-mobile-item" href="service/womens-health-pelvic-care/">Women's Health &amp; Pelvic Care</a>
                        <a class="bm-mobile-item" href="service/paediatric-care/">Paediatric Care</a>
                        <a class="bm-mobile-item" href="service/tele-physiotherapy/">Tele-Physiotherapy</a>
                        <a class="bm-mobile-item" href="service/home-community-physiotherapy/">Home &amp; Community Physiotherapy</a>
                        <a class="bm-mobile-item" href="service/ergonomics-workplace-assessment/">Ergonomics &amp; Workplace</a>
                        <a class="bm-mobile-item" href="service/geriatric-care/">Geriatric Care Physiotherapy</a>
                        <a class="bm-mobile-item" href="service/oncology-physiotherapy/">Oncology Physiotherapy</a>
                        <a class="bm-mobile-item" href="service/vestibular-rehabilitation/">Vestibular Rehabilitation</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Body Map Section End -->

    <!-- Therapist Team Section Start -->
    <div class="therapist-team bg-radius-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">therapist team</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our dedicated & experienced therapist team</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp">
                        <a href="team/" class="btn-default"><span>view all team</span></a>
                    </div>
                    <!-- Section Btn End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team/obum-nwankwo/">
                                <figure class="image-anime">
                                    <img src="images/team/Dr Obum Nwankwo.png" alt="Dr. Obum Nwankwo" loading="lazy">
                                </figure>
                            </a>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="team/obum-nwankwo/">dr. obum nwankwo</a></h3>
                            <p>founder & chief medical director</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team/placeholder.svg" alt="Team Member">
                            </figure>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>coming soon</h3>
                            <p>physiotherapist</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team/placeholder.svg" alt="Team Member">
                            </figure>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>coming soon</h3>
                            <p>physiotherapist</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team/placeholder.svg" alt="Team Member">
                            </figure>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>coming soon</h3>
                            <p>physiotherapist</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Therapist Team Section End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonial bg-radius-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">patient testimonials</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">What Our Patients Say</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Our patients' recoveries are our greatest measure of success. Here is what some of them have shared about their experience at NOHSONIC Physiotherapy Clinic.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="col-lg-7">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>After my knee surgery, the team at NOHSONIC helped me regain my mobility faster than I expected. The personalised treatment plan was incredible.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-1.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Emeka O.</h3>
                                                <p>Post-surgical patient</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
            
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>I had chronic lower back pain for years. After just a few sessions at NOHSONIC, the difference was unbelievable. I finally feel like myself again.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-2.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Ngozi A.</h3>
                                                <p>Chronic pain patient</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>The sports rehab programme at NOHSONIC was a game-changer for me. After a bad ankle injury, I was back on the field within six weeks.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-3.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Chidi B.</h3>
                                                <p>Football player</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>Professional, caring, and results-driven. The physiotherapists at NOHSONIC genuinely care about your recovery. Highly recommended in Abuja.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-4.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Fatima M.</h3>
                                                <p>Orthopedic patient</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
				                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

    <!-- Our Blog Section Start -->
    <div class="our-blog bg-radius-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">news & blog</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Physiotherapy Insights From Our Experts</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <div class="section-btn wow fadeInUp">
                        <a href="blog/" class="btn-default"><span>view all blog</span></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Post 1: Pillar -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp">
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog/complete-guide-physiotherapy-abuja/" class="image-anime" data-cursor-text="View">
                                    <img src="images/blog/complete-guide-physiotherapy-abuja.jpg" alt="Complete Guide to Physiotherapy in Abuja" loading="lazy">
                                </a>
                            </figure>
                            <div class="post-tags">
                                <a href="blog/complete-guide-physiotherapy-abuja/">physiotherapy abuja</a>
                            </div>
                        </div>
                        <div class="post-item-content">
                            <div class="article-meta">
                                <ul><li><a href="#">June 2026</a></li></ul>
                            </div>
                            <div class="post-item-body">
                                <h2><a href="blog/complete-guide-physiotherapy-abuja/">The Complete Guide to Physiotherapy in Abuja</a></h2>
                            </div>
                            <div class="post-item-footer">
                                <a href="blog/complete-guide-physiotherapy-abuja/" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post 2: Back Pain -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog/back-pain-treatment-abuja/" class="image-anime" data-cursor-text="View">
                                    <img src="images/blog/back-pain-treatment-abuja.jpg" alt="Back Pain Treatment in Abuja" loading="lazy">
                                </a>
                            </figure>
                            <div class="post-tags">
                                <a href="blog/back-pain-treatment-abuja/">back pain</a>
                            </div>
                        </div>
                        <div class="post-item-content">
                            <div class="article-meta">
                                <ul><li><a href="#">June 2026</a></li></ul>
                            </div>
                            <div class="post-item-body">
                                <h2><a href="blog/back-pain-treatment-abuja/">Back Pain Treatment in Abuja: How Physiotherapy Gives You Lasting Relief</a></h2>
                            </div>
                            <div class="post-item-footer">
                                <a href="blog/back-pain-treatment-abuja/" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post 3: Office Workers -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog/neck-back-pain-office-workers-abuja/" class="image-anime" data-cursor-text="View">
                                    <img src="images/blog/neck-back-pain-office-workers-abuja.jpg" alt="Neck and Back Pain Office Workers Abuja" loading="lazy">
                                </a>
                            </figure>
                            <div class="post-tags">
                                <a href="blog/neck-back-pain-office-workers-abuja/">office pain</a>
                            </div>
                        </div>
                        <div class="post-item-content">
                            <div class="article-meta">
                                <ul><li><a href="#">June 2026</a></li></ul>
                            </div>
                            <div class="post-item-body">
                                <h2><a href="blog/neck-back-pain-office-workers-abuja/">Neck &amp; Back Pain for Office Workers in Abuja: Causes and Solutions</a></h2>
                            </div>
                            <div class="post-item-footer">
                                <a href="blog/neck-back-pain-office-workers-abuja/" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog End -->

<?php include $basePath . "includes/footer.php"; ?>