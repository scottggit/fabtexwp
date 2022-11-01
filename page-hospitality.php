<?php get_header() ?>

<section class="hero-banner hero-banner-page mrgt-8 mt-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 p-md-0 order-md-2">
                <div class="video-container">
                    <a href="https://www.youtube.com/watch?v=C0DPdy98e4c" class="video-w-poster videoPopup" data-aos="slide-left" data-aos-offset="0" data-aos-duration="1500">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/hospitality.jpg" alt="Laughing" class="w-100 img-fluid hero-img">
                    </a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6 pe-lg-5 order-md-1 py-5">
                <h1 class=" font-head display-3 mb-4" data-aos="fade-right" data-aos-offset="0" data-aos-duration="000"><u class="underline-primary">Hospitality</u></h1>
                <p class="mb-4">Fabtex works closely with the finest branded international hotels and cruise lines to create window treatments and beddings that comply with approved corporate standards and reflect a brand personality that is uniquely yours.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#" class="btn btn-dark">SEE SPECS BY BRANDS</a>
                    <a href="#" class="btn btn-white">SEE OUR PROCESS</a>
                </div>
            </div>
        </div>
    </div>
    <div class="pattern absolute z-[-1] bottom-[-250px] left-0 right-0">
        <img class="fit-cover w-screen" src="<?php bloginfo('template_directory') ?>/dist/img/pattern.png" />
    </div>
</section>
<section class="tab-container-c">
    <div class="container">
        <ul class="nav nav-tabs tab-horz" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="window-treatment-tab" data-bs-toggle="tab" data-bs-target="#window-treatment-tab-pane" type="button" role="tab" aria-controls="window-treatment-tab-pane" aria-selected="true">Window Treatments</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="bedding-tab" data-bs-toggle="tab" data-bs-target="#bedding-tab-pane" type="button" role="tab" aria-controls="bedding-tab-pane" aria-selected="false">Beddings</button>
            </li>
        </ul>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <?php include('inc/hospitality-window-treatment-tab.php')?>
                <?php include('inc/hospitality-beddings-tab.php')?>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <h3 class="h1">Window Treatments</h3>
                <p>Turn rooms into homey retreats with window treatments that soften and dress up your space while helping to regulate temperatures, filter out light and glare, block sound, screen unwanted views, or enhance privacy. All window treatment materials are fire-rated and child safe. We also offer ADA-compliant hardware options, as well as exterior shading for public spaces.</p>
            </div>
        </div>
    </div>
</section>
<section class="side-img-content img-l-content-r py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="<?php bloginfo('template_directory') ?>/dist/img/hospitality.jpg" alt="" data-aos="slide-right" data-aos-offset="0" data-aos-duration="1500">
            </div>
            <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 py-4">
                <h3 class="h2 mb-4"><u class="underline-primary">Draperies</u></h3>
                <p class="mb-4 mb-lg-5">From clean, modern sheers to full privacy window coverings, we have fully customizable options that perfectly blend color, fullness, fit, and texture. Our popular folds are pinch pleat, accordia and ripplefold.</p>
                <a href="#" class="btn btn-outline-white">SEE DRAPERY OPTIONS</a>
            </div>
        </div>
    </div>
</section>
<section class="side-img-content img-r-content-l py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 offset-lg-1 order-md-2">
                <img src="<?php bloginfo('template_directory') ?>/dist/img/hospitality.jpg" alt="" data-aos="slide-left" data-aos-offset="0" data-aos-duration="1500">
            </div>
            <div class="col-xl-4 col-lg-5 offset-xl-1 col-md-6 order-md-1 py-4">
                <h3 class="h2 mb-4"><u class="underline-primary">Roller</u> Shades</h3>
                <p class="mb-4 mb-lg-5">Iconic patterns, intricate weaves, timeless designs. Bring large-scale, custom art to guestrooms and public spaces with easy to operate and energy-efficient shades. With full motorization and automated controls, you can easily minimize outside temperature, light and noise while creating depth and dimension to any room.</p>
                <a href="#" class="btn btn-outline-white">SEE ROLLER SHADE OPTIONS</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>