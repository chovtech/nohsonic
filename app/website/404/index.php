<?php
http_response_code(404);
$basePath        = "/";
$pageTitle       = 'Page Not Found | NOHSONIC Physiotherapy Clinic';
$metaDescription = 'The page you are looking for could not be found. Return to the NOHSONIC Physiotherapy Clinic homepage.';
$activePage      = "";
include __DIR__ . '/../includes/header.php';
?>

    <!-- Page Header Start -->
    <div class="page-header contact-page-header bg-radius-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Page Not Found</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">404</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- 404 Content Start -->
    <div class="page-contact-us bg-radius-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" style="padding:60px 0 80px;">

                    <div style="font-size:120px;font-weight:800;line-height:1;color:var(--primary-color);opacity:0.12;margin-bottom:-20px;letter-spacing:-4px;">
                        404
                    </div>

                    <div class="section-title">
                        <h3 class="wow fadeInUp">oops!</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">That Page Doesn&rsquo;t Exist</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            The page you&rsquo;re looking for may have been moved, deleted, or the link may be incorrect.
                            Let&rsquo;s get you back on track.
                        </p>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.4s" style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;margin-top:32px;">
                        <a href="/" class="btn-default"><span>go to homepage</span></a>
                        <a href="/contact/" class="btn-default" style="background:transparent;border:2px solid var(--primary-color);color:var(--primary-color);"><span style="color:var(--primary-color);">contact us</span></a>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.5s" style="margin-top:48px;padding-top:32px;border-top:1px solid #eee;">
                        <p style="color:#999;font-size:14px;margin-bottom:12px;">Looking for something specific? Try one of these:</p>
                        <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
                            <a href="/service/" style="color:var(--primary-color);font-size:14px;font-weight:600;text-decoration:none;">Our Services</a>
                            <span style="color:#ddd;">|</span>
                            <a href="/booking/" style="color:var(--primary-color);font-size:14px;font-weight:600;text-decoration:none;">Book Appointment</a>
                            <span style="color:#ddd;">|</span>
                            <a href="/about/" style="color:var(--primary-color);font-size:14px;font-weight:600;text-decoration:none;">About Us</a>
                            <span style="color:#ddd;">|</span>
                            <a href="/blog/" style="color:var(--primary-color);font-size:14px;font-weight:600;text-decoration:none;">Blog</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- 404 Content End -->

<?php include __DIR__ . '/../includes/footer.php'; ?>
