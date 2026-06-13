<?php
$basePath        = "../";
$pageTitle       = 'Book an Appointment | NOHSONIC Physiotherapy Clinic, Abuja';
$metaDescription = 'Book your physiotherapy appointment at NOHSONIC Clinic, 29 Agadez Crescent, Wuse II, Abuja. Expert care for pain relief, rehabilitation, and movement restoration.';
$activePage      = "";
$extraScripts    = <<<'HTML'
<script>
$(function () {
    var $form        = $('#appointmentForm');
    var $btn         = $form.find('button[type="submit"]');
    var originalHTML = $btn.html();

    $form.on('submit', function () {
        $btn.prop('disabled', true)
            .html('<span><i class="fa-solid fa-spinner fa-spin" style="margin-right:6px;"></i>booking...</span>');
    });

    new MutationObserver(function () {
        $btn.prop('disabled', false).html(originalHTML);
    }).observe(document.getElementById('msgSubmit'), { childList: true, subtree: true });
});
</script>
HTML;

include $basePath . "includes/header.php";
?>

    <!-- Page Header Start -->
	<div class="page-header appointment-page-header bg-radius-section parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Book an Appointment</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="../">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">book an appointment</li>
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
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Request an Appointment</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Fill in the form below and our team will confirm your appointment within 1 business day. For urgent bookings, call us on <strong>09023333331 / 08131555597</strong>.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Appointment Form Start -->
                    <div class="contact-us-form appointment-form">
                        <form id="appointmentForm" action="" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <select name="services" class="form-control form-select" id="services" required>
                                        <option value="" disabled selected>Select Service</option>
                                        <option value="Sports Injury Rehabilitation">Sports Injury Rehabilitation</option>
                                        <option value="Orthopaedic Rehabilitation">Orthopaedic Rehabilitation</option>
                                        <option value="Neurological Rehabilitation">Neurological Rehabilitation</option>
                                        <option value="Chronic Pain Management">Chronic Pain Management</option>
                                        <option value="Pre &amp; Post-Surgical Rehabilitation">Pre &amp; Post-Surgical Rehabilitation</option>
                                        <option value="Cardiac Rehabilitation">Cardiac Rehabilitation</option>
                                        <option value="Paediatric Physiotherapy">Paediatric Physiotherapy</option>
                                        <option value="Geriatric Care">Geriatric Care</option>
                                        <option value="Women's Health &amp; Pelvic Care">Women's Health &amp; Pelvic Care</option>
                                        <option value="Vestibular Rehabilitation">Vestibular Rehabilitation</option>
                                        <option value="Home &amp; Community Physiotherapy">Home &amp; Community Physiotherapy</option>
                                        <option value="Tele-Physiotherapy">Tele-Physiotherapy</option>
                                        <option value="Ergonomics &amp; Workplace Assessment">Ergonomics &amp; Workplace Assessment</option>
                                        <option value="Oncology Physiotherapy">Oncology Physiotherapy</option>
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
                            <h2 class="text-anime-style-3" data-cursor="-opaque">What Our Patients Say</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Real stories from real patients. Our goal is your recovery &mdash; and these are the results that keep us motivated every day.</p>
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
                                                <p>After my knee surgery, the team at NOHSONIC helped me regain full mobility. The personalised treatment plan and hands-on care made all the difference.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="../images/author-1.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Chukwuemeka O.</h3>
                                                <p>Abuja, FCT</p>
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
                                                <p>I had been dealing with chronic back pain for two years. A few weeks at NOHSONIC and I was back at work without medication. Truly life-changing.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="../images/author-2.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Fatima A.</h3>
                                                <p>Civil Servant, Abuja</p>
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
                                                    <img src="../images/author-3.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>David I.</h3>
                                                <p>Sports Coach, Abuja</p>
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
                                                <p>My mother recovered from a stroke and NOHSONIC&rsquo;s neurological rehab programme was outstanding. The team was patient, thorough, and incredibly supportive.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="../images/author-4.jpg" alt="" loading="lazy">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Ngozi B.</h3>
                                                <p>Wuse II, Abuja</p>
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
                        <h2 class="text-anime-style-3" data-cursor="-opaque">How to Book in 4 Easy Steps</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We make it simple to get the care you need. Here&rsquo;s what happens after you submit your request.</p>
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
                                <img src="../images/icon-booking-process-1.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>Submit Your Request</h3>
                                <p>Fill in the form above with your name, contact details, preferred service, and a convenient date and time.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->

                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>02.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="../images/icon-booking-process-2.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>We Confirm Your Slot</h3>
                                <p>Our team reviews your request and confirms your appointment by phone or email within 1 business day.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->

                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>03.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="../images/icon-booking-process-3.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>Attend Your Session</h3>
                                <p>Visit us at 29 Agadez Crescent, Wuse II, Abuja at your confirmed time. Bring any referral letters or scan results.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->

                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>04.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="../images/icon-booking-process-4.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>Begin Your Recovery</h3>
                                <p>Your physiotherapist will assess you, create a personalised treatment plan, and start you on the path to recovery.</p>
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
