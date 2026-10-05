<header class="main-nav rse-navbar" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-bottom: 1px solid #e2e8f0;">
    <div class="container d-flex align-items-center justify-content-between py-2">
        <?php if (function_exists('view') && @file_exists(APPPATH . 'Views/_parts/_nav.php')): ?>
            <?= view('_parts/_nav'); ?>
        <?php else: ?>
            <a class="navbar-brand py-0 d-flex align-items-center text-decoration-none" href="<?= base_url() ?>">
                <img src="<?= base_url('images/RSE logo.png') ?>" alt="Rwanda Stock Exchange" style="height: 48px; width: auto; object-fit: contain;">
            </a>
            <div class="d-none d-lg-flex align-items-center gap-1">
                <a href="<?= base_url() ?>" class="rse-nav-link text-success fw-bold text-decoration-none px-2 py-1">Home</a>
                <a href="#listed-profiles" class="rse-nav-link text-secondary text-decoration-none px-2 py-1">Listed Profiles</a>
                <a href="#next-gen-q" class="rse-nav-link text-secondary text-decoration-none px-2 py-1">Next Gen Q</a>
                <a href="#login" class="rse-nav-link fw-bold text-decoration-none px-2 py-1" style="color: #0284c7 !important;">Login</a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <i class="bi bi-search text-secondary" style="font-size: 1.05rem; cursor: pointer;"></i>
                <a href="#start-application" class="btn btn-sm btn-success rounded-pill px-4 fw-semibold shadow-sm" style="background-color: #00a84f; border-color: #00a84f;">Start Application</a>
            </div>
        <?php endif; ?>
    </div>
</header>




<style>
    .investment-clinic-page-banner {
        position: relative;
        background: linear-gradient(180deg, #3b8fe8 0%, #257ad6 50%, #155ea7 100%);
        min-height: calc(100vh - 69px);
        overflow: hidden;
    }
    .ic-hero-glow-1 {
        position: absolute;
        top: -10%;
        left: 15%;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(147, 197, 253, 0.45) 0%, rgba(59, 130, 246, 0) 70%);
        pointer-events: none;
        filter: blur(40px);
        animation: heroGlowPulse 8s ease-in-out infinite alternate;
        z-index: 1;
    }
    .ic-hero-glow-2 {
        position: absolute;
        top: 25%;
        right: 10%;
        width: 450px;
        height: 450px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(96, 165, 250, 0.35) 0%, rgba(37, 99, 235, 0) 70%);
        pointer-events: none;
        filter: blur(50px);
        animation: heroGlowPulse 10s ease-in-out infinite alternate-reverse;
        z-index: 1;
    }
    /* Ambient floating bubbles - dispersed organically with low subtle opacity */
    .ic-hero-bubble {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle at 35% 35%, rgba(255, 255, 255, 0.45), rgba(255, 255, 255, 0.12) 65%, rgba(255, 255, 255, 0.02) 100%);
        box-shadow: 0 0 12px rgba(255, 255, 255, 0.15), inset 0 0 6px rgba(255, 255, 255, 0.25);
        border: 1px solid rgba(255, 255, 255, 0.28);
        pointer-events: none;
        z-index: 2;
        opacity: 0.35;
    }
    .ic-b-1 { width: 18px; height: 18px; top: 14%; left: 12%; animation: driftRandom1 18s ease-in-out infinite -4s; opacity: 0.32; }
    .ic-b-2 { width: 28px; height: 28px; top: 26%; left: 78%; animation: driftRandom2 22s ease-in-out infinite -9s; opacity: 0.25; }
    .ic-b-3 { width: 12px; height: 12px; top: 48%; left: 6%; animation: driftRandom3 16s ease-in-out infinite -2s; opacity: 0.28; }
    .ic-b-4 { width: 22px; height: 22px; top: 18%; left: 45%; animation: driftRandom2 20s ease-in-out infinite -12s; opacity: 0.22; }
    .ic-b-5 { width: 16px; height: 16px; top: 62%; left: 88%; animation: driftRandom1 19s ease-in-out infinite -7s; opacity: 0.3; }
    .ic-b-6 { width: 10px; height: 10px; top: 36%; left: 28%; animation: driftRandom4 15s ease-in-out infinite -5s; opacity: 0.26; }
    .ic-b-7 { width: 24px; height: 24px; top: 52%; left: 62%; animation: driftRandom3 24s ease-in-out infinite -14s; opacity: 0.2; }
    .ic-b-8 { width: 14px; height: 14px; top: 10%; left: 86%; animation: driftRandom4 17s ease-in-out infinite -8s; opacity: 0.28; }
    .ic-b-9 { width: 20px; height: 20px; top: 70%; left: 18%; animation: driftRandom2 21s ease-in-out infinite -15s; opacity: 0.25; }

    @keyframes driftRandom1 {
        0% { transform: translate(0px, 0px) scale(1); }
        25% { transform: translate(35px, -28px) scale(1.08); }
        50% { transform: translate(70px, 12px) scale(0.95); }
        75% { transform: translate(25px, 32px) scale(1.05); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    @keyframes driftRandom2 {
        0% { transform: translate(0px, 0px) scale(1); }
        25% { transform: translate(-40px, 30px) scale(0.96); }
        50% { transform: translate(-75px, -15px) scale(1.1); }
        75% { transform: translate(-30px, -35px) scale(1.02); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    @keyframes driftRandom3 {
        0% { transform: translate(0px, 0px) scale(0.98); }
        33% { transform: translate(45px, 35px) scale(1.12); }
        66% { transform: translate(-35px, -25px) scale(0.92); }
        100% { transform: translate(0px, 0px) scale(0.98); }
    }
    @keyframes driftRandom4 {
        0% { transform: translate(0px, 0px) scale(1); }
        30% { transform: translate(-30px, -40px) scale(1.08); }
        70% { transform: translate(35px, 20px) scale(0.94); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    .ic-hero-devices-img {
        max-width: 96%;
        width: 1280px;
        margin: 0 auto;
        vertical-align: bottom;
        filter: drop-shadow(0 -10px 40px rgba(0, 30, 80, 0.22));
        animation: heroDeviceFloat 9.5s cubic-bezier(0.45, 0.05, 0.55, 0.95) infinite alternate;
        transform-origin: bottom center;
        transition: filter 0.8s ease, transform 0.8s ease;
    }
    @keyframes heroDeviceFloat {
        0% { transform: translateY(0px) scale(1); }
        100% { transform: translateY(-8px) scale(1.008); }
    }
    @keyframes heroGlowPulse {
        0% { transform: scale(0.92) translate(0, 0); opacity: 0.5; }
        100% { transform: scale(1.15) translate(20px, 15px); opacity: 0.8; }
    }
</style>

<div class="container-fluid investment-clinic-page-banner d-flex flex-column justify-content-between pt-4">
    <!-- Ambient glowing light orbs -->
    <div class="ic-hero-glow-1"></div>
    <div class="ic-hero-glow-2"></div>
    <!-- Dynamic white bubbles dispersed across the hero section with organic random drift -->
    <div class="ic-hero-bubble ic-b-1"></div>
    <div class="ic-hero-bubble ic-b-2"></div>
    <div class="ic-hero-bubble ic-b-3"></div>
    <div class="ic-hero-bubble ic-b-4"></div>
    <div class="ic-hero-bubble ic-b-5"></div>
    <div class="ic-hero-bubble ic-b-6"></div>
    <div class="ic-hero-bubble ic-b-7"></div>
    <div class="ic-hero-bubble ic-b-8"></div>
    <div class="ic-hero-bubble ic-b-9"></div>

    <div class="position-relative pt-2" style="z-index: 4;">
        <p class="text-center page-indicator mb-3">
            <button class="border-0">Investment Clinic</button>
        </p>

        <div class="container">
            <p class="page-title text-center" style="text-shadow: 0 2px 14px rgba(0, 40, 100, 0.18);">
                <?= web_config()['investment_clinic_title'] ?>
                <br>
            </p>
        </div>
    </div>

    <div class="text-center mt-auto w-100 position-relative" style="line-height: 0; z-index: 3;">
        <?php 
        $clinic_banner = !empty(web_config()['investment_clinic_banner']) ? base_url(web_config()['investment_clinic_banner']) : base_url('images/investment-clinic-hero-bg.png');
        ?>
        <img src="<?= $clinic_banner ?>" alt="Investment Clinic" class="img-fluid ic-hero-devices-img">
    </div>

</div>



<div class="container-fluid mt-5">
    <div class="row justify-content-between">
        <div class="col-md-5 col-xs-6 p-3">
            <p class="about_pg_official_launch">
                <?= web_config()['investment_clinic_below_banner_title'] ?>
            </p>
        </div>
        <div class="col-md-5 col-xs-6 p-3">
            <p class="text-end about_pg_official_launch_right_text">
                <?= web_config()['investment_clinic_below_banner_text'] ?>
            </p>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-end">
                        <!--<a href="javascript:void(0)" class="btn btn-success" onclick="showsweetalerttoast('System Under Maintenance, Check Again Later', 'info')">Start Application <i class="fas fa-arrow-right"></i></a>-->
                        <!--<a href="investmentclinic.rse.rw/signup" class="btn btn-success" target="_blank">Start Application <i class="fas fa-arrow-right"></i></a>-->
                    </p>
                </div>
                
                <div class="col-md-12">
                    <p class="text-end d-flex justify-content-end align-items-center gap-2">
                        <span>Already have an account? Please</span>

                        <a href="investmentclinic.rse.rw/signin"
                            class="btn btn-outline-success">
                            Login Here
                        </a>

                        <a href="investmentclinic.rse.rw/signup" class="btn btn-success" target="_blank">Start Application <i class="fas fa-arrow-right"></i></a>
                    </p>
                </div>
                
                
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-11 pb-5 pt-3">
            <div class="card investiment-clinic-stats-card" style="background-image: url('<?= base_url('assets/images/investment-clinic-stats.jpg') ?>');">
                <div class="card-body d-flex align-items-center">
                    <div class="row w-100">
                        <div class="col-md-3 col-xs-3">
                            <?= web_config()['investment_clinic_stats_total_smes'] ?><br>
                            <small><?= web_config()['investment_clinic_stats_total_smes_label'] ?></small>
                        </div>
                        <div class="col-md-3 col-xs-3 left-border">
                            <?= web_config()['investment_clinic_stats_advisors'] ?><br>
                            <small><?= web_config()['investment_clinic_stats_advisors_label'] ?></small>
                        </div>
                        <div class="col-md-3 col-xs-3 left-border">
                            <?= web_config()['investment_clinic_stats_staff'] ?><br>
                            <small><?= web_config()['investment_clinic_stats_staff_label'] ?></small>
                        </div>
                        <div class="col-md-3 col-xs-3 left-border">
                            <?= web_config()['investment_clinic_stats_partners'] ?><br>
                            <small><?= web_config()['investment_clinic_stats_partners_label'] ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo view('products-pages/parts/profile-listing') ?>


<section class="section-about-rse-role">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p class="sub-text">
                    <?= web_config()['investment_clinic_about_section_title'] ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="sub-2-text">
                    <?= web_config()['investment_clinic_about_title'] ?>
                </p>
            </div>
            <div class="col-md-6 px-5">
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="card investiment-clinic-about-item">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <p class="text-center">
                            <img src="<?= base_url('assets/icons/Group_304.png') ?>" alt="" class="icon">
                        </p>
                        <div class="role-rse-text px-3">
                            <p class="title mt-3 text-center">
                                <?= web_config()['investment_clinic_about_card_1_title'] ?>
                            </p>
                            <p class="text mb-0 text-justify">
                                <?= web_config()['investment_clinic_about_card_1_body'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card investiment-clinic-about-item">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <p class="text-center">
                            <img src="<?= base_url('assets/icons/Group_304.png') ?>" alt="" class="icon">
                        </p>
                        <div class="role-rse-text px-3">
                            <p class="title mt-3 text-center">
                                <?= web_config()['investment_clinic_about_card_2_title'] ?>
                            </p>
                            <p class="text mb-0 text-justify">
                                <?= web_config()['investment_clinic_about_card_2_body'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card investiment-clinic-about-item">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <p class="text-center">
                            <img src="<?= base_url('assets/icons/Group_304.png') ?>" alt="" class="icon">
                        </p>
                        <div class="role-rse-text px-3">
                            <p class="title mt-3 text-center">
                                <?= web_config()['investment_clinic_about_card_3_title'] ?>
                            </p>
                            <p class="text mb-0 text-justify">
                                <?= web_config()['investment_clinic_about_card_3_body'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container glow-bottom-image">
        <img src="<?= base_url('assets/images/Ellipse_10.png') ?>" alt="">
    </div>
</section>



<section class="section-green-window">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p class="sub-text">
                    <?= web_config()['investment_clinic_become_member_section_title'] ?>
                </p>
                <p class="sub-2-text">
                    <?= web_config()['investment_clinic_become_member_subtitle_text'] ?>
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card investment-clinic-become-member" style="background-image: url('<?= base_url('assets/images/become-investment-clinic-card.jpg') ?>');">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <p class="text-center">
                            <img src="<?= base_url('assets/images/icons/holiday-note-white.png') ?>" alt="" class="icon">
                        </p>
                        <p class="title">
                            <?= web_config()['investment_clinic_member_card_1_title'] ?>
                        </p>
                        <p class="body">
                            <?= web_config()['investment_clinic_member_card_1_body'] ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card investment-clinic-become-member" style="background-image: url('<?= base_url('assets/images/become-investment-clinic-card.jpg') ?>');">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <p class="text-center">
                            <img src="<?= base_url('assets/images/icons/holiday-note-white.png') ?>" alt="" class="icon">
                        </p>
                        <p class="title">
                            <?= web_config()['investment_clinic_member_card_2_title'] ?>
                        </p>
                        <p class="body">
                            <?= web_config()['investment_clinic_member_card_2_body'] ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card investment-clinic-become-member" style="background-image: url('<?= base_url('assets/images/become-investment-clinic-card.jpg') ?>');">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <p class="text-center">
                            <img src="<?= base_url('assets/images/icons/holiday-note-white.png') ?>" alt="" class="icon">
                        </p>
                        <p class="title">
                            <?= web_config()['investment_clinic_member_card_3_title'] ?>
                        </p>
                        <p class="body">
                            <?= web_config()['investment_clinic_member_card_3_body'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php echo view('_parts/home-faqs') ?>


<script>
    $(document).ready(function() {
        // Assign data-target dynamically
        $(".invest-clinic-card").each(function(index) {
            $(this).attr("data-target", "#v-investment-clinic-tab-" + (index + 1));
        });

        // Handle click event
        $(".invest-clinic-card").on("click", function() {
            var target = $(this).data("target");

            // Remove active state from all cards
            $(".invest-clinic-card").removeClass("invest-clinic-first-card");

            // Add active state to clicked card
            $(this).addClass("invest-clinic-first-card");

            // Animate tab switching
            $(".tab-pane.show.active").removeClass("show active"); // hide current
            $(target)
                .hide() // hide target first
                .addClass("active") // mark active
                .fadeIn(400, function() {
                    $(this).addClass("show"); // after fade, add show
                });
        });
    });
</script>
</script>