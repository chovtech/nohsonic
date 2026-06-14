<?php
$basePath        = "../";
$pageTitle       = 'Career Opportunities | NOHSONIC Physiotherapy Clinic, Abuja';
$metaDescription = 'Join the NOHSONIC Physiotherapy Clinic team in Abuja. Explore open positions for physiotherapists, technicians, and admin staff and build a meaningful career in healthcare.';
$metaKeywords    = 'physiotherapy jobs Abuja, physiotherapist vacancy Abuja, NOHSONIC careers, healthcare jobs Abuja, physiotherapy clinic jobs';
$activePage      = "career";
$extraScripts    = <<<'HTML'
<script>
(function () {
    var applyModal = document.getElementById('applyModal');
    if (!applyModal) return;
    applyModal.addEventListener('show.bs.modal', function (e) {
        var btn      = e.relatedTarget;
        var role     = btn ? btn.getAttribute('data-role') : '';
        var subject  = btn ? btn.getAttribute('data-subject') : '';
        applyModal.querySelector('#applyModalRole').textContent  = role || 'this role';
        applyModal.querySelector('#applyMailLink').href =
            'mailto:careers@npc.clinic?subject=' + encodeURIComponent(subject || 'Application');
    });
}());
</script>
HTML;

include $basePath . "includes/header.php";
?>

    <!-- Page Header Start -->
    <div class="page-header career-page-header bg-radius-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2">Career Opportunities</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">career</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Current Openings Start -->
    <div class="current-openings">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">open positions</h3>
                        <h2 class="text-anime-style-2">Current <span>Vacancies</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We are growing and looking for talented individuals to join our team. See available roles below.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Job: Physiotherapist -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="job-card">
                        <div class="job-card-header">
                            <div class="job-meta">
                                <span class="job-type full-time">Full-time</span>
                                <span class="job-dept">Clinical</span>
                            </div>
                            <h3>Physiotherapist</h3>
                            <p class="job-location"><i class="fa-solid fa-location-dot"></i> Wuse II, Abuja</p>
                        </div>
                        <div class="job-card-body">
                            <p>We are looking for a registered physiotherapist to assess, diagnose, and treat patients across a wide range of musculoskeletal, neurological, and sports conditions.</p>
                            <ul class="job-responsibilities">
                                <li>Conduct thorough patient assessments and develop individualised treatment plans</li>
                                <li>Deliver hands-on physiotherapy and exercise therapy sessions</li>
                                <li>Maintain accurate clinical records and liaise with referring doctors</li>
                                <li>Educate patients on injury prevention and self-management</li>
                            </ul>
                            <div class="job-requirements">
                                <strong>Requirements:</strong> B.Sc. / M.Sc. in Physiotherapy &bull; MDCN/MRTB registration &bull; Minimum 1 year post-NYSC experience
                            </div>
                        </div>
                        <div class="job-card-footer">
                            <button class="btn-default" data-bs-toggle="modal" data-bs-target="#applyModal" data-role="Physiotherapist" data-subject="Application – Physiotherapist"><span>Apply Now</span></button>
                        </div>
                    </div>
                </div>

                <!-- Job: Physiotherapy Technician -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="job-card">
                        <div class="job-card-header">
                            <div class="job-meta">
                                <span class="job-type full-time">Full-time</span>
                                <span class="job-dept">Clinical</span>
                            </div>
                            <h3>Physiotherapy Technician</h3>
                            <p class="job-location"><i class="fa-solid fa-location-dot"></i> Wuse II, Abuja</p>
                        </div>
                        <div class="job-card-body">
                            <p>Support our clinical team by preparing equipment, assisting during sessions, and helping patients with prescribed exercise programmes under the supervision of a licensed physiotherapist.</p>
                            <ul class="job-responsibilities">
                                <li>Set up and operate physiotherapy equipment (ultrasound, TENS, heat/cold therapy)</li>
                                <li>Assist physiotherapists during treatment sessions</li>
                                <li>Guide patients through prescribed exercise routines</li>
                                <li>Maintain cleanliness and organisation of treatment areas</li>
                            </ul>
                            <div class="job-requirements">
                                <strong>Requirements:</strong> Diploma / OND in Physiotherapy Technology or related field &bull; Good interpersonal skills &bull; Willingness to learn
                            </div>
                        </div>
                        <div class="job-card-footer">
                            <button class="btn-default" data-bs-toggle="modal" data-bs-target="#applyModal" data-role="Physiotherapy Technician" data-subject="Application – Physiotherapy Technician"><span>Apply Now</span></button>
                        </div>
                    </div>
                </div>

                <!-- Job: Front Desk Officer -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="job-card">
                        <div class="job-card-header">
                            <div class="job-meta">
                                <span class="job-type full-time">Full-time</span>
                                <span class="job-dept">Administration</span>
                            </div>
                            <h3>Front Desk Officer</h3>
                            <p class="job-location"><i class="fa-solid fa-location-dot"></i> Wuse II, Abuja</p>
                        </div>
                        <div class="job-card-body">
                            <p>Be the first point of contact for our patients. Manage appointments, handle enquiries, and ensure every patient has a smooth and welcoming experience from arrival to departure.</p>
                            <ul class="job-responsibilities">
                                <li>Receive and direct patients, visitors, and phone calls professionally</li>
                                <li>Schedule and confirm patient appointments</li>
                                <li>Process payments and maintain basic financial records</li>
                                <li>Manage patient files and clinic correspondence</li>
                            </ul>
                            <div class="job-requirements">
                                <strong>Requirements:</strong> B.Sc. / HND in any field &bull; Excellent communication skills &bull; Proficiency in Microsoft Office &bull; Customer service experience preferred
                            </div>
                        </div>
                        <div class="job-card-footer">
                            <button class="btn-default" data-bs-toggle="modal" data-bs-target="#applyModal" data-role="Front Desk Officer" data-subject="Application – Front Desk Officer"><span>Apply Now</span></button>
                        </div>
                    </div>
                </div>

                <!-- Job: Intern Physiotherapist -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="job-card">
                        <div class="job-card-header">
                            <div class="job-meta">
                                <span class="job-type internship">Internship</span>
                                <span class="job-dept">Clinical</span>
                            </div>
                            <h3>Intern Physiotherapist</h3>
                            <p class="job-location"><i class="fa-solid fa-location-dot"></i> Wuse II, Abuja</p>
                        </div>
                        <div class="job-card-body">
                            <p>An excellent opportunity for final-year physiotherapy students or recent graduates to gain hands-on clinical experience in a busy, multi-disciplinary outpatient setting.</p>
                            <ul class="job-responsibilities">
                                <li>Observe and assist licensed physiotherapists during patient sessions</li>
                                <li>Learn assessment, documentation, and treatment techniques</li>
                                <li>Participate in case reviews and clinical discussions</li>
                                <li>Support the team with patient education materials</li>
                            </ul>
                            <div class="job-requirements">
                                <strong>Requirements:</strong> Final year student or recent graduate of Physiotherapy &bull; NYSC posting or student placement letter &bull; Eagerness to learn
                            </div>
                        </div>
                        <div class="job-card-footer">
                            <button class="btn-default" data-bs-toggle="modal" data-bs-target="#applyModal" data-role="Intern Physiotherapist" data-subject="Application – Intern Physiotherapist"><span>Apply Now</span></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Current Openings End -->

    <!-- How to Apply Start -->
    <div class="booking-process bg-radius-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">how to apply</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Ready to Join Our Team?</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Send your CV and a short cover letter to <a href="mailto:careers@npc.clinic">careers@npc.clinic</a> with the job title as the subject line. We review every application personally and respond within 5 business days.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="booking-process-box wow fadeInUp">
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>01.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="../images/icon-booking-process-1.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>prepare your CV</h3>
                                <p>Update your CV and write a 1-page cover letter stating the role and why you want to join NOHSONIC.</p>
                            </div>
                        </div>

                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>02.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="../images/icon-booking-process-2.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>send your application</h3>
                                <p>Email your documents to careers@npc.clinic using the job title as your subject line.</p>
                            </div>
                        </div>

                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>03.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="../images/icon-booking-process-3.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>interview &amp; assessment</h3>
                                <p>Shortlisted candidates attend a phone screening and face-to-face interview. Clinical roles include a practical assessment.</p>
                            </div>
                        </div>

                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>04.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="../images/icon-booking-process-4.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>welcome to the team</h3>
                                <p>Successful applicants receive an offer letter and go through a structured onboarding programme.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How to Apply End -->

    <!-- CTA Box Start -->
    <div class="cta-box bg-radius-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">don&rsquo;t see the right role?</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Send a Speculative Application</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We are always open to hearing from talented healthcare professionals. Send your CV to <a href="mailto:careers@npc.clinic">careers@npc.clinic</a> and we will keep your details on file for future openings.</p>
                        </div>
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.5s">
                            <a href="mailto:careers@npc.clinic?subject=Speculative%20Application" class="btn-default"><span>Send Your CV</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Box End -->

    <!-- Apply Modal Start -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="border-radius:12px;border:none;overflow:hidden;">

                <!-- Modal Header -->
                <div class="modal-header" style="background:var(--primary-color);padding:24px 32px;border:none;">
                    <div>
                        <p style="color:rgba(255,255,255,0.7);font-size:13px;margin:0 0 4px;text-transform:uppercase;letter-spacing:1px;">career opportunity</p>
                        <h5 class="modal-title" id="applyModalLabel" style="color:#fff;font-size:22px;font-weight:700;margin:0;">
                            How to Apply: <span id="applyModalRole"></span>
                        </h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="margin-left:auto;"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body" style="padding:32px;">

                    <p style="color:#555;margin-bottom:24px;">We review every application personally. Follow the steps below to submit yours and we will respond within <strong>5 business days</strong>.</p>

                    <div style="display:flex;flex-direction:column;gap:20px;">

                        <div style="display:flex;gap:16px;align-items:flex-start;">
                            <div style="min-width:36px;height:36px;border-radius:50%;background:var(--primary-color);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:14px;">1</div>
                            <div>
                                <strong style="color:var(--primary-color);">Prepare your documents</strong>
                                <p style="color:#555;margin:4px 0 0;">Update your <strong>CV</strong> (maximum 2 pages) and write a short <strong>cover letter</strong> (1 page) explaining why you want to join NOHSONIC and how your experience makes you a great fit.</p>
                            </div>
                        </div>

                        <div style="display:flex;gap:16px;align-items:flex-start;">
                            <div style="min-width:36px;height:36px;border-radius:50%;background:var(--primary-color);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:14px;">2</div>
                            <div>
                                <strong style="color:var(--primary-color);">Send your application by email</strong>
                                <p style="color:#555;margin:4px 0 0;">Email your CV and cover letter to <a href="mailto:careers@npc.clinic" style="color:var(--primary-color);font-weight:600;">careers@npc.clinic</a>. Use the job title as your <strong>subject line</strong> exactly as shown above so we can route it correctly.</p>
                            </div>
                        </div>

                        <div style="display:flex;gap:16px;align-items:flex-start;">
                            <div style="min-width:36px;height:36px;border-radius:50%;background:var(--primary-color);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:14px;">3</div>
                            <div>
                                <strong style="color:var(--primary-color);">Include your contact details</strong>
                                <p style="color:#555;margin:4px 0 0;">Make sure your email or CV includes your <strong>full name</strong>, <strong>phone number</strong>, and the best time to reach you. For clinical roles, also mention your MRTB registration number if applicable.</p>
                            </div>
                        </div>

                        <div style="display:flex;gap:16px;align-items:flex-start;">
                            <div style="min-width:36px;height:36px;border-radius:50%;background:var(--primary-color);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:14px;">4</div>
                            <div>
                                <strong style="color:var(--primary-color);">Wait for our response</strong>
                                <p style="color:#555;margin:4px 0 0;">Shortlisted candidates will be contacted for a <strong>phone screening</strong> followed by a face-to-face interview. Clinical roles may include a practical assessment. We will notify all applicants of the outcome.</p>
                            </div>
                        </div>

                    </div>

                    <div style="background:#EEF5FF;border-radius:8px;padding:16px 20px;margin-top:28px;">
                        <p style="margin:0;color:#555;font-size:14px;"><i class="fa-solid fa-circle-info" style="color:var(--primary-color);margin-right:8px;"></i>Accepted file formats: <strong>PDF or Word (.docx)</strong>. Maximum attachment size: <strong>5 MB</strong>.</p>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer" style="padding:20px 32px;border-top:1px solid #eee;justify-content:space-between;align-items:center;">
                    <p style="margin:0;color:#999;font-size:13px;">careers@npc.clinic &nbsp;&bull;&nbsp; 09023333331 / 08131555597</p>
                    <a id="applyMailLink" href="mailto:careers@npc.clinic" class="btn-default"><span>Open Email to Apply</span></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Apply Modal End -->

<?php include $basePath . "includes/footer.php"; ?>
