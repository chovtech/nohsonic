    <!-- Footer Start -->
    <footer class="main-footer bg-radius-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="footer-logo">
                                    <img src="<?= $basePath ?>images/nohsonic_logo_white1.png" alt="NOHSONIC Physiotherapy Clinic">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="about-footer-content">
                                    <h3>NOHSONIC Physiotherapy Clinic</h3>
                                    <p>Precision care for movement restoration. Located at 29 Agadez Crescent, Wuse II, Abuja &mdash; serving patients across the FCT.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Footer End -->

                    <!-- About Footer List Start -->
                    <div class="about-footer-list">
                        <div class="footer-links quick-links">
                            <h3>quick links</h3>
                            <ul>
                                <li><a href="<?= $basePath ?>about/">about us</a></li>
                                <li><a href="<?= $basePath ?>service/">services</a></li>
                                <li><a href="<?= $basePath ?>career/">career</a></li>
                                <li><a href="<?= $basePath ?>contact/">contact us</a></li>
                            </ul>
                        </div>

                        <div class="footer-links service-links">
                            <h3>more services</h3>
                            <ul>
                                <li><a href="<?= $basePath ?>service/sports-injury-rehabilitation/">sports rehab</a></li>
                                <li><a href="<?= $basePath ?>service/chronic-pain-management/">chronic pain</a></li>
                                <li><a href="<?= $basePath ?>service/orthopedic-rehabilitation/">orthopedic rehab</a></li>
                            </ul>
                        </div>

                        <div class="footer-links social-links">
                            <h3>social media</h3>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="footer-links working-links">
                            <h3>working hours</h3>
                            <ul>
                                <li>mon to fri : 10:00 to 6:00</li>
                                <li>sat : 10:00AM to 3:00PM</li>
                                <li>sun : closed</li>
                            </ul>
                        </div>

                        <div class="footer-links footer-contact-details">
                            <h3>Help and Support</h3>
                            <div class="footer-contact-box">
                                <div class="footer-info-box">
                                    <div class="icon-box"><img src="<?= $basePath ?>images/icon-phone.svg" alt=""></div>
                                    <div class="footer-info-box-content"><p>09023333331 / 08131555597</p></div>
                                </div>
                                <div class="footer-info-box">
                                    <div class="icon-box"><img src="<?= $basePath ?>images/icon-mail.svg" alt=""></div>
                                    <div class="footer-info-box-content"><p>info@npc.clinic</p></div>
                                </div>
                            </div>
                        </div>

                        <div class="footer-links terms-condition-links">
                            <div class="footer-copyright-text">
                                <p>Copyright &copy; <?= date('Y') ?> NOHSONIC Physiotherapy Clinic. All Rights Reserved.</p>
                            </div>
                            <div class="footer-terms-condition">
                                <ul>
                                    <li><a href="<?= $basePath ?>privacy-policy/">privacy policy</a></li>
                                    <li><a href="<?= $basePath ?>terms-conditions/">terms and conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- About Footer List End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Scripts -->
    <script src="<?= $basePath ?>js/jquery-3.7.1.min.js"></script>
    <script src="<?= $basePath ?>js/bootstrap.min.js"></script>
    <script src="<?= $basePath ?>js/validator.min.js"></script>
    <script src="<?= $basePath ?>js/jquery.slicknav.js"></script>
    <script src="<?= $basePath ?>js/swiper-bundle.min.js"></script>
    <script src="<?= $basePath ?>js/jquery.waypoints.min.js"></script>
    <script src="<?= $basePath ?>js/jquery.counterup.min.js"></script>
    <script src="<?= $basePath ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= $basePath ?>js/SmoothScroll.js"></script>
    <script src="<?= $basePath ?>js/parallaxie.js"></script>
    <script src="<?= $basePath ?>js/gsap.min.js"></script>
    <script src="<?= $basePath ?>js/magiccursor.js"></script>
    <script src="<?= $basePath ?>js/SplitText.js"></script>
    <script src="<?= $basePath ?>js/ScrollTrigger.min.js"></script>
    <script src="<?= $basePath ?>js/jquery.mb.YTPlayer.min.js"></script>
    <script src="<?= $basePath ?>js/wow.js"></script>
    <script src="<?= $basePath ?>js/function.js"></script>
<?php if (!empty($extraScripts)) echo $extraScripts; ?>
</body>
</html>
