<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($metaDescription ?? '') ?>">
    <meta name="keywords" content="<?= htmlspecialchars($metaKeywords ?? '') ?>">
    <meta name="author" content="NOHSONIC Physiotherapy Clinic">
    <!-- Page Title -->
    <title><?= htmlspecialchars($pageTitle ?? 'NOHSONIC Physiotherapy Clinic') ?></title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $basePath ?>images/favicon.png">
    <link rel="icon" type="image/png" href="<?= $basePath ?>images/favicon.png">
    <!-- Open Graph / Social Media -->
<?php
$_ogUrl   = 'https://' . ($_SERVER['HTTP_HOST'] ?? 'www.npc.clinic') . ($_SERVER['REQUEST_URI'] ?? '/');
$_ogImage = $ogImage ?? 'https://www.npc.clinic/images/hero-bg.jpg';
$_ogTitle = $pageTitle ?? 'NOHSONIC Physiotherapy Clinic';
$_ogDesc  = $metaDescription ?? 'Professional physiotherapy services in Wuse II, Abuja. Book your appointment today.';
?>
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="NOHSONIC Physiotherapy Clinic">
    <meta property="og:url" content="<?= htmlspecialchars($_ogUrl) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($_ogTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($_ogDesc) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($_ogImage) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($_ogTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($_ogDesc) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($_ogImage) ?>">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="<?= $basePath ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav CSS -->
    <link href="<?= $basePath ?>css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?= $basePath ?>css/swiper-bundle.min.css">
    <!-- Font Awesome CSS -->
    <link href="<?= $basePath ?>css/all.css" rel="stylesheet" media="screen">
    <!-- Animate CSS -->
    <link href="<?= $basePath ?>css/animate.css" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?= $basePath ?>css/magnific-popup.css">
    <!-- Mouse Cursor CSS -->
    <link rel="stylesheet" href="<?= $basePath ?>css/mousecursor.css">
    <!-- Main Custom CSS -->
    <link href="<?= $basePath ?>css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

<?php if (!empty($showPreloader)): ?>
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="<?= $basePath ?>images/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->
<?php endif; ?>

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-12">
                    <div class="topbar-contact-info">
                        <ul>
                            <li><a href="tel:09023333331"><img src="<?= $basePath ?>images/icon-phone.svg" alt=""> +234 902 333 3331</a></li>
                            <li class="hide-mobile"><a href="tel:08131555597"><img src="<?= $basePath ?>images/icon-phone.svg" alt=""> 081 3155 5597</a></li>
                            <li><a href="mailto:info@npc.clinic"><img src="<?= $basePath ?>images/icon-mail.svg" alt=""> info@npc.clinic</a></li>
                            <li class="hide-mobile"><a href="<?= $basePath ?>contact/"><img src="<?= $basePath ?>images/icon-location.svg" alt=""> 29 Agadez Crescent, Wuse II, Abuja</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-0">
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="<?= $basePath ?>">
                        <img src="<?= $basePath ?>images/nohsonic_logo_white1.png" alt="NOHSONIC Physiotherapy Clinic">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item<?= ($activePage ?? '') === 'home' ? ' active' : '' ?>">
                                    <a class="nav-link" href="<?= $basePath ?>">Home</a>
                                </li>
                                <li class="nav-item<?= ($activePage ?? '') === 'about' ? ' active' : '' ?>">
                                    <a class="nav-link" href="<?= $basePath ?>about/">About Us</a>
                                </li>
                                <li class="nav-item<?= ($activePage ?? '') === 'service' ? ' active' : '' ?>">
                                    <a class="nav-link" href="<?= $basePath ?>service/">Services</a>
                                </li>
                                <li class="nav-item<?= ($activePage ?? '') === 'team' ? ' active' : '' ?>">
                                    <a class="nav-link" href="<?= $basePath ?>team/">Team</a>
                                </li>
                                <li class="nav-item<?= ($activePage ?? '') === 'blog' ? ' active' : '' ?>">
                                    <a class="nav-link" href="<?= $basePath ?>blog/">Blog</a>
                                </li>
                                <li class="nav-item<?= ($activePage ?? '') === 'career' ? ' active' : '' ?>">
                                    <a class="nav-link" href="<?= $basePath ?>career/">Career</a>
                                </li>
                                <li class="nav-item<?= ($activePage ?? '') === 'contact' ? ' active' : '' ?>">
                                    <a class="nav-link" href="<?= $basePath ?>contact/">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-btn d-inline-flex">
                            <a href="<?= $basePath ?>booking/" class="btn-default"><span>Book Appointment</span></a>
                        </div>
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->
