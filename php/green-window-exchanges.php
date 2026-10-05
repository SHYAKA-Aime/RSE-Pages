<?php 
$hero_banner = !empty(web_config()['green_window_exchange_banner']) ? base_url(web_config()['green_window_exchange_banner']) : base_url('images/original-hero-image-bg.png');
?>
<div class="section-green-windows-top" style="background: linear-gradient(90deg, rgba(8, 42, 18, 0.90) 0%, rgba(10, 53, 24, 0.80) 42%, rgba(10, 53, 24, 0.35) 70%, rgba(0, 0, 0, 0.08) 100%), url('<?= $hero_banner ?>') right 20% center / cover no-repeat;">
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
                    <a href="#real-time-data" class="rse-nav-link text-secondary text-decoration-none px-2 py-1">GEW Sustainable Securities</a>
                    <a href="#downloads" class="rse-nav-link text-secondary text-decoration-none px-2 py-1">GEW Publications</a>
                    <a href="#gew-datahub" class="rse-nav-link text-secondary text-decoration-none px-2 py-1">GEW DataHub</a>
                    <a href="#esg-gps" class="rse-nav-link text-secondary text-decoration-none px-2 py-1">ESG GPS</a>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-search text-secondary" style="font-size: 1.05rem; cursor: pointer;"></i>
                    <a href="#contact" class="btn btn-sm btn-success rounded-pill px-4 fw-semibold shadow-sm" style="background-color: #00a84f; border-color: #00a84f;">Start investing</a>
                </div>
            <?php endif; ?>
        </div>
    </header>




    <div class="container-fluid d-flex align-items-center py-5" style="min-height: 75vh;">
        <div class="row w-100 align-items-center justify-content-between g-4">
            <div class="col-lg-7 col-md-7 col-xs-12 green_window-exchange-top-stats">
                <p>Green Exchange Window</p>
                <p class="title">
                    <?= web_config()['green_window_exchange_hero_subtitle'] ?>
                </p>
                <p>
                    <?= web_config()['green_window_exchange_hero_title'] ?>
                </p>
                <div class="row">
                    <div class="col-md-4 col-xs-4">
                        <p class="stats-nbr"><?= web_config()['green_window_exchange_hero_stats_value_1'] ?></p>
                        <p><?= web_config()['green_window_exchange_hero_stats_label_1'] ?></p>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <p class="stats-nbr"><?= web_config()['green_window_exchange_hero_stats_value_2'] ?></p>
                        <p><?= web_config()['green_window_exchange_hero_stats_label_2'] ?></p>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <p class="stats-nbr"><?= web_config()['green_window_exchange_hero_stats_value_3'] ?></p>
                        <p><?= web_config()['green_window_exchange_hero_stats_label_3'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 d-none d-md-flex justify-content-end align-items-start pe-lg-4">
                <div class="position-relative d-inline-block p-2">
                    <img src="<?= base_url('images/logo over bg image.png') ?>" alt="RSE Green Exchange Window" class="img-fluid" style="max-width: 68px;">
                    <img src="<?= base_url('images/bubble over bg image.png') ?>" alt="" class="position-absolute" style="top: -4px; right: -6px; width: 14px;">
                    <img src="<?= base_url('images/bubble over bg image.png') ?>" alt="" class="position-absolute" style="bottom: -4px; left: -8px; width: 10px;">
                </div>
            </div>
        </div>
    </div>

</div>




<div class="container-fluid" style="background-image: url('<?= base_url('assets/images/green-windows-exchange-stats.jpg') ?>');">
    <div class="row p-7 justify-content-center green-window-exchange-why-created">
        <div class="col-md-10 col-xs-12 p-3">
            <p class="text-center text-white title">
                <?= web_config()['green_window_exchange_why_created_title'] ?>
            </p>
            <p class="text-center text-white">
                <?= web_config()['green_window_exchange_why_created_body'] ?>
            </p>
        </div>
    </div>
</div>










<section class="section-green-window green_window_exchange_advantage" style="background-color: #ffffff;">

    <div class="container-fluid">

        <div class="row mt-5">

            <div class="col-md-5 text-center">
                <img src="<?= base_url(web_config()['green_window_exchange_advantage_image']) ?>" alt="" class="green_window_exchange_advantage_image">
            </div>
            <div class="col-md-7">
                <h4 class="main-title"><?= web_config()['green_window_exchange_advantage_title'] ?></h4>
                <div class="row">

                    <div class="col-md-6 col-xs-6">
                        <div class="card green-windows-exchange-qualification-item">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/images/icons/holiday-note-green.png') ?>" alt="" class="advantage-icon">
                                    <span class="for-title">For Issuers</span>
                                </div>
                                <div class="role-rse-text px-3">
                                    <p class="mt-3  text-center">
                                        <?= web_config()['green_window_exchange_advantage_for_issuers'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-6 col-xs-6">
                        <div class="card green-windows-exchange-qualification-item">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/images/icons/holiday-note-green.png') ?>" alt="" class="advantage-icon">
                                    <span class="for-title">For Investors</span>
                                </div>
                                <div class="role-rse-text px-3">
                                    <p class="mt-3  text-center">
                                        <?= web_config()['green_window_exchange_advantage_for_investors'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>






<section class="section-green-window what-green-windows-offers pt-7 pb-7" id="gew-datahub">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <p class="sub-text text-white">
                    WHAT THE Green Exchange Window OFFERS
                </p>
                <p class="sub-2-text  text-white">
                    <?= web_config()['green_window_exchange_what_offers'] ?>
                </p>
            </div>
        </div>
        <div class="row mt-5">



            <div class="col-md-6 col-xs-6">
                <div class="card green-windows-exchange-qualification-item">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <p class="text-center">
                            <img src="<?= base_url('assets/images/icons/holiday-note-green.png') ?>" alt="" class="icon" style="margin-bottom: 0 !important;">
                        </p>
                        <div class="role-rse-text px-3">
                            <p class="title mt-3  text-center">
                                <?= web_config()['green_window_exchange_what_offers_title_1'] ?>
                            </p>
                            <p class="text mb-0 text-justify">
                                <?= web_config()['green_window_exchange_what_offers_body_1'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-md-6 col-xs-6">
                <div class="card green-windows-exchange-qualification-item">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <p class="text-center">
                            <img src="<?= base_url('assets/images/icons/holiday-note-green.png') ?>" alt="" class="icon" style="margin-bottom: 0 !important;">
                        </p>
                        <div class="role-rse-text px-3">
                            <p class="title mt-3  text-center">
                                <?= web_config()['green_window_exchange_what_offers_title_2'] ?>
                            </p>
                            <p class="text mb-0 text-justify">
                                <?= web_config()['green_window_exchange_what_offers_body_2'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>








<section class="section-about-rse-role" id="real-time-data">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <p class="sub-text">
                    Latest Updates at the GEW
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="sub-2-text">
                    <?= web_config()['green_window_exchange_updates_subtitle_text'] ?>
                </p>
            </div>
            <div class="col-md-6 px-5 text-end">
                <img src="<?= base_url('assets/images/icons/Ellipse878787871.png') ?>" alt="" width="10">
                Last updated - <?= isset($bonds[0]['updated_at']) ? date('d M H:i', strtotime($bonds[0]['updated_at'])) : '-' ?>
            </div>
        </div>

        <div class="row align-items-center mt-5">

            <table class="table green-window-exchange-bond-table">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Bonds</th>
                        <th>Code</th>
                        <th>Issue Date</th>
                        <th>Maturity Date</th>
                        <th>Coupon Rate</th>
                        <th>Yield TM</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bonds as $index => $bond): ?>
                        <tr>
                            <td class="text-center"><?= $index + 1 ?></td>
                            <td><img src="<?= base_url('assets/images/icons/Group_100.png') ?>" alt="" class="bond-icons"><?= $bond['t_bonds_no'] ?><span class="badge bg-success"><?= $bond['bond_category'] ?></span></td>
                            <td><?= $bond['isin_code'] ?></td>
                            <td><?= date('d M Y', strtotime($bond['issue_date'])) ?></td>
                            <td><?= date('d M Y', strtotime($bond['maturity_date'])) ?></td>
                            <td><?= number_format($bond['coupon_rate'], 2) ?>%</td>
                            <td><?= number_format($bond['yield_tm'], 2) ?>%</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

    </div>

    <div class="container glow-bottom-image">
        <img src="<?= base_url('assets/images/Ellipse_10.png') ?>" alt="">
    </div>
</section>




<section class="green_window_exchange_transparency-section gew-transparency-banner position-relative d-flex align-items-center" id="esg-gps"
    style="background: linear-gradient(90deg, rgba(0, 0, 0, 0.05) 0%, rgba(0, 0, 0, 0.28) 45%, rgba(0, 0, 0, 0.38) 100%), #739ecb url('<?= base_url('images/transparency-banner-bg.png') ?>') left center / cover no-repeat;">
    <!-- Floating RSE logo bubble matching design -->
    <img src="<?= base_url('images/logo over bg image.png') ?>" alt="RSE" class="gew-transparency-rse-bubble d-none d-md-block" style="position: absolute; left: 32%; top: 50%; transform: translateY(-50%); width: 60px; height: 60px; opacity: 0.95; filter: brightness(2.6) contrast(1.1) drop-shadow(0 4px 10px rgba(0, 0, 0, 0.15)); pointer-events: none;">

    <div class="container-fluid position-relative">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-5 col-xs-12"></div>
            <div class="col-md-7 col-lg-7 col-xs-12">
                <h2 class="gew-transparency-title text-white">
                    <?= web_config()['green_window_exchange_transparency_title'] ?>
                </h2>
                <p class="gew-transparency-text text-white">
                    <?= web_config()['green_window_exchange_transparency_body'] ?>
                </p>
            </div>
        </div>
    </div>
</section>





<section class="section-about-rse-role" id="downloads">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <p class="sub-text">
                    More About the Green Exchange Window
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="sub-2-text">
                    <?= web_config()['learn_more_about_green_bonds_subtitle_text'] ?>
                </p>
            </div>
            <div class="col-md-6 px-5">

            </div>
        </div>

        <div class="row align-items-center mt-5">

            <?php foreach ($guidelines as $guideline) { ?>
                <div class="col-md-4">
                    <div class="card guidelines-card-item shadow mb-5">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <img src="<?= base_url('assets/images/icons/pdf-green.png') ?>" alt="" class="pdf-icon">
                                <a href="<?= $guideline['file'] ?>"  target="_blank" rel="noopener noreferrer"  class="download-btn-a">Download <img src="<?= base_url('assets/images/icons/download-green.png') ?>" alt=""></a>
                            </div>
                            <p class="guideline-title" style="color: #00A84F !important;">
                                <?= $guideline['report_title'] ?>
                                <br>
                                <span class="guideline-size"><?= $guideline['file_size'] ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>

    <div class="container glow-bottom-image">
        <img src="<?= base_url('assets/images/Ellipse_10.png') ?>" alt="">
    </div>
</section>






<section class="section-green-window">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <p class="sub-text">
                    OTHER SERVICES
                </p>
                <p class="sub-2-text">
                    <?= web_config()['green_window_exchange_order_services_title'] ?>
                </p>
            </div>
        </div>
        <div class="row mt-5">

            <div class="col-md-6 col-xs-6">
                <div class="card green-windows-exchange-qualification-item">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <p class="text-center">
                            <img src="<?= base_url('assets/images/icons/holiday-note-green.png') ?>" alt="" class="icon">
                        </p>
                        <div class="role-rse-text px-3">
                            <p class="title mt-3  text-center">
                                <?= web_config()['green_window_exchange_other_services_title_1'] ?>
                            </p>
                            <p class="text mb-0 text-justify">
                                <?= web_config()['green_window_exchange_other_services_body_1'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-6">
                <div class="card green-windows-exchange-qualification-item">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <p class="text-center">
                            <img src="<?= base_url('assets/images/icons/holiday-note-green.png') ?>" alt="" class="icon">
                        </p>
                        <div class="role-rse-text px-3">
                            <p class="title mt-3  text-center">
                                <?= web_config()['green_window_exchange_other_services_title_2'] ?>
                            </p>
                            <p class="text mb-0 text-justify">
                                <?= web_config()['green_window_exchange_other_services_body_2'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>













<section class="section-about-rse-role">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <p class="sub-text">
                    OUR PARTNERS
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="sub-2-text">
                    <?= web_config()['green_window_exchange_partners'] ?>
                </p>
            </div>
            <div class="col-md-6 px-5">

            </div>
        </div>

        <div class="row align-items-center mt-5">

            <?php foreach ($partners as $partner) { ?>
                <div class="col-md-3">
                    <div class="card green-window-exchange-partners-item shadow mb-5">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <a href="<?= ensure_http($partner['website']) ?>" target="_blank">
                                <img src="<?= base_url($partner['logo']) ?>" alt="" class="partner-icon">
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>

    </div>

    <div class="container glow-bottom-image">
        <img src="<?= base_url('assets/images/Ellipse_10.png') ?>" alt="">
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function animateStats() {
            $('.stats-nbr').each(function() {
                const $element = $(this);

                if ($element.hasClass('animated')) return;

                const elementTop = $element.offset().top;
                const elementBottom = elementTop + $element.outerHeight();
                const viewportTop = $(window).scrollTop();
                const viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    const originalText = $element.text().trim();

                    // Parse the value dynamically
                    let value, prefix = '',
                        suffix = '';

                    // Handle formats like: "$100m+", "RWF36.25 billions", "150+", etc.
                    const match = originalText.match(/([^\d]*)([\d.,]+)([^\d]*)/);

                    if (match) {
                        prefix = match[1] || '';
                        const numberStr = match[2].replace(/,/g, '');
                        suffix = match[3] || '';
                        value = parseFloat(numberStr);

                        let multiplier = 1;
                        if (suffix.toLowerCase().includes('m')) multiplier = 1000000;
                        if (suffix.toLowerCase().includes('b')) multiplier = 1000000;

                        const finalValue = value * multiplier;

                        // Animate from 0 to final value
                        let startTimestamp = null;
                        const duration = 2000;

                        const step = (timestamp) => {
                            if (!startTimestamp) startTimestamp = timestamp;
                            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                            const easeOut = 1 - Math.pow(1 - progress, 4);
                            const current = finalValue * easeOut;

                            // Format display value
                            let displayValue;
                            if (multiplier === 1000000) {
                                displayValue = (current / 1000000).toFixed(2).replace(/\.00$/, '');
                                $element.text(prefix + displayValue + suffix);
                            } else {
                                displayValue = Math.floor(current).toLocaleString();
                                $element.text(prefix + displayValue + suffix);
                            }

                            if (progress < 1) {
                                window.requestAnimationFrame(step);
                            }
                        };

                        window.requestAnimationFrame(step);
                        $element.addClass('animated');
                    }
                }
            });
        }

        animateStats();
        $(window).on('scroll', animateStats);
    });
</script>
</script>