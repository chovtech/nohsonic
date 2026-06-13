<?php
$basePath        = "../";
$pageTitle       = 'Contact Us | NOHSONIC Physiotherapy Clinic, Abuja';
$metaDescription = 'Get in touch with NOHSONIC Physiotherapy Clinic at 9 Agadez Crescent, Wuse II, Abuja. Call 09023333331 or send a message to book an appointment or ask a question.';
$activePage      = "contact";

$formStatus  = '';
$formMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname   = trim(strip_tags($_POST['fname']    ?? ''));
    $lname   = trim(strip_tags($_POST['lname']    ?? ''));
    $email   = trim(filter_var($_POST['email']    ?? '', FILTER_SANITIZE_EMAIL));
    $phone   = trim(strip_tags($_POST['phone']    ?? ''));
    $message = trim(strip_tags($_POST['message']  ?? ''));

    if ($fname && $lname && filter_var($email, FILTER_VALIDATE_EMAIL) && $phone && $message) {
        $to      = 'info@npc.clinic';
        $subject = "Website Enquiry from $fname $lname";
        $body    = "Name: $fname $lname\r\nEmail: $email\r\nPhone: $phone\r\n\r\nMessage:\r\n$message";
        $headers = implode("\r\n", [
            "From: NOHSONIC Website <no-reply@npc.clinic>",
            "Reply-To: $email",
            "MIME-Version: 1.0",
            "Content-Type: text/plain; charset=UTF-8",
        ]);

        if (mail($to, $subject, $body, $headers)) {
            $formStatus  = 'success';
            $formMessage = 'Thank you! Your message has been sent. We&rsquo;ll be in touch within 1 business day.';
        } else {
            $formStatus  = 'error';
            $formMessage = 'Sorry, there was a problem sending your message. Please call us on 09023333331 or email <a href="mailto:info@npc.clinic">info@npc.clinic</a> directly.';
        }
    } else {
        $formStatus  = 'error';
        $formMessage = 'Please fill in all required fields with a valid email address.';
    }
}

include $basePath . "includes/header.php";
?>

    <!-- Page Header Start -->
	<div class="page-header contact-page-header bg-radius-section parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Contact Us</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="../">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">contact us</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us bg-radius-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Contact Us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get In Touch</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">For inquiries, appointments, or more information about our physiotherapy services, feel free to reach out to our team.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Information List Start -->
                        <div class="contact-info-list wow fadeInUp" data-wow-delay="0.5s">
                            <p>info@npc.clinic</p>
                            <p>09023333331</p>
                            <a href="../appointment.php" class="support-btn">book an appointment</a>
                        </div>
                        <!-- Contact Information List End -->

                        <div class="contact-information-box">
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="../images/icon-location-blue.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Wuse II, Abuja</h3>
                                    <p>9 Agadez Crescent, Wuse II, Abuja, FCT, Nigeria</p>
                                </div>
                            </div>

                            <div class="contact-info-item wow fadeInUp" data-wow-delay="1s">
                                <div class="icon-box">
                                    <img src="../images/icon-mail.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email Us</h3>
                                    <p><a href="mailto:info@npc.clinic">info@npc.clinic</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Send Us a Message</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Fill in the form below and we will respond within 1 business day.</p>
                        </div>
                        <!-- Section Title End -->

                        <?php if ($formStatus === 'success'): ?>
                        <div class="alert alert-success wow fadeInUp" role="alert" style="margin-bottom:20px;padding:16px 20px;background:#d4edda;border:1px solid #c3e6cb;border-radius:8px;color:#155724;">
                            <?= $formMessage ?>
                        </div>
                        <?php elseif ($formStatus === 'error'): ?>
                        <div class="alert alert-danger wow fadeInUp" role="alert" style="margin-bottom:20px;padding:16px 20px;background:#f8d7da;border:1px solid #f5c6cb;border-radius:8px;color:#721c24;">
                            <?= $formMessage ?>
                        </div>
                        <?php endif; ?>

                        <form id="contactForm" action="" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" value="<?= htmlspecialchars($_POST['fname'] ?? '') ?>" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" value="<?= htmlspecialchars($_POST['lname'] ?? '') ?>" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone No" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="message" class="form-control" id="message" rows="5" placeholder="Message" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default"><span>send message</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Start -->
	<div class="google-map bg-radius-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://maps.google.com/maps?q=9+Agadez+Crescent,+Wuse+II,+Abuja,+Nigeria&hl=en&z=15&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>
            </div>
        </div>
    </div>
	<!-- Google Map End -->

    <!-- Contact Faqs Section Start -->
    <div class="contact-faqs bg-radius-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact Faqs Content Start -->
                    <div class="contact-faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Do You Have Any Questions For Us?</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We&rsquo;re here to help. If you have questions about our physiotherapy services, treatments, appointment scheduling, or fees, don&rsquo;t hesitate to reach out.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Section Btn Start -->
                        <div class="section-btn">
                            <a href="../appointment.php" class="btn-default"><span>make an appointment</span></a>
                        </div>
                        <!-- Section Btn End -->
                    </div>
                    <!-- Contact Faqs Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Faqs Section Start -->
                    <div class="about-faq-section">
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        How do I book a physiotherapy appointment?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>You can book by calling 09023333331, emailing info@npc.clinic, or using the contact form on this page. We will confirm your appointment within 1 business day.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        What should I bring to my first appointment?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Please bring a valid ID, any referral letters from your doctor, recent X-ray or scan results (if applicable), and wear comfortable, loose-fitting clothing that allows easy access to the area being treated.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Do you accept health insurance (HMO)?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes, we work with several major HMO providers. Please contact us with your insurer&rsquo;s name before your visit so we can confirm coverage and get the necessary authorisation in place.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        How long does a physiotherapy session take?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>An initial assessment typically lasts 45&ndash;60 minutes. Follow-up treatment sessions are usually 30&ndash;45 minutes depending on your condition and treatment plan.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Do I need a doctor&rsquo;s referral to see a physiotherapist?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>No referral is required for a self-pay appointment. However, if you are using an HMO, a referral letter from your GP or specialist may be required by your insurer before treatment can begin.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- About Faqs Section End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Faqs Section End -->

<?php include $basePath . "includes/footer.php"; ?>
