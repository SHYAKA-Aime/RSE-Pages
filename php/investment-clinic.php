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
                <a href="#login" class="rse-nav-link text-secondary text-decoration-none px-2 py-1">Login</a>
                <a href="#start-application" class="rse-nav-link text-secondary text-decoration-none px-2 py-1">Start Application</a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <i class="bi bi-search text-secondary" style="font-size: 1.05rem; cursor: pointer;"></i>
                <a href="#start-application" class="btn btn-sm btn-success rounded-pill px-4 fw-semibold shadow-sm" style="background-color: #00a84f; border-color: #00a84f;">Start Application</a>
            </div>
        <?php endif; ?>
    </div>
</header>




<div class="container-fluid investment-clinic-page-banner d-flex flex-column justify-content-between pt-4" style="min-height: calc(100vh - 69px); overflow: hidden;">

    <p class="text-center page-indicator">
        <button>Investment Clinic</button>
    </p>


    <div class="container">
        <p class="page-title text-center">
            <?= web_config()['investment_clinic_title'] ?>
            <br>
        </p>
    </div>

    <div class="text-center mt-auto w-100" style="line-height: 0;">
        <?php 
        $clinic_banner = !empty(web_config()['investment_clinic_banner']) ? base_url(web_config()['investment_clinic_banner']) : base_url('images/investment-clinic-hero-bg.png');
        ?>
        <img src="<?= $clinic_banner ?>" alt="Investment Clinic" class="img-fluid" style="max-width: 96%; width: 1280px; margin: 0 auto; vertical-align: bottom; filter: drop-shadow(0 -5px 30px rgba(0, 0, 0, 0.15));">
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