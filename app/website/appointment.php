<?php
$basePath   = "";
$pageTitle  = 'Book an Appointment | NOHSONIC Physiotherapy Clinic, Abuja';
$metaDescription = 'Book your physiotherapy appointment at NOHSONIC Clinic, Wuse II, Abuja. Expert care for pain relief, rehabilitation, and movement restoration.';
include $basePath . "includes/header.php";
?>


    <!-- Page Header Start -->
	<div class="page-header appointment-page-header bg-radius-section parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Make An Appointment</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="./">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">make an appointment</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Book Appointment Section Start -->
    <div class="page-book-appointment bg-radius-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">appointment</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Make an appointment</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Appointment Form Start -->
                    <div class="contact-us-form appointment-form">
                        <form id="appointmentForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Enter Your Email" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <select name="services" class="form-control form-select" id="services" required>
                                        <option value="" disabled selected>Select Service</option>
                                        <option value="manual_therapy">manual therapy</option>
                                        <option value="chronic_pain">chronic pain</option>
                                        <option value="hand_therapy">hand therapy</option>
                                        <option value="sports_therapy">sports therapy</option>
                                        <option value="cupping_therapy">cupping therapy</option>
                                        <option value="laser_therapy">laser therapy</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-5">
                                    <input type="date" name="date" class="form-control" id="date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="time" name="time" class="form-control" id="time" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default btn-highlighted"><span>book appointment</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Appointment Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Book Appointment Section End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonial bg-radius-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">client testimonials</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Our Clients Reviews</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
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
                                                <p>After my knee surgery, the team at Physiocare helped me regain my mobility. The personalized treatment plan was incredible.</p>									
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-1.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>chris w.</h3>
                                                <p>professional athlete</p>
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
                                                <p>I've been to several physio clinics, but none compare to Physiocare. Their staff is knowledgeable, professional, and genuinely care.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-2.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>mark s.</h3>
                                                <p>retired teacher</p>
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
                                                <p>The sports injury rehab program at Physiocare has been a game-changer for me. After a bad ankle sprain, I was back to playing soccer.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-3.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>david a.</h3>
                                                <p>construction worker</p>
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
                                                <p>The therapists here are amazing! I was dealing with chronic back pain, and after just a few sessions, the difference was unbelievable.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-4.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>tom h.</h3>
                                                <p>marathon runner</p>
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

    <!-- Booking Process Section Start -->
    <div class="booking-process bg-radius-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">process</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Easy Steps To Get Our Services</h2>
                        <p>we strive to make accessing our services as straightforward and convenient as possible. Hereâ€™s a simple guide to help you get started with our expert care.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Booking Process Box Start -->
                    <div class="booking-process-box wow fadeInUp">
                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>01.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-booking-process-1.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>Select your Services</h3>
                                <p>services is the first step towards effective mental health support.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->

                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>02.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-booking-process-2.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>make appointment</h3>
                                <p>Follow these easy steps to schedule your appointment at Physiocare.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->

                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>03.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-booking-process-3.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>completed payment</h3>
                                <p>You will receive a payment confirmation of your appointment.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->

                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>04.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-booking-process-4.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>enjoy your therapy</h3>                                
                                <p>Your journey is an important step towards better health.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->
                    </div>
                    <!-- Booking Process Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Process Section End -->

<?php include $basePath . "includes/footer.php"; ?>