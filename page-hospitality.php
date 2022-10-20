<?php get_header() ?>

<section class="hero-banner hero-banner-page mrgt-8">
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
                <div class="tab-pane fade show active" id="window-treatment-tab-pane" role="tabpanel" aria-labelledby="window-treatment-tab" tabindex="0">
                    <p class="p-4 fs-18 mb-4">Turn rooms into homey retreats with window treatments that soften and dress up your space while helping to regulate temperatures, filter out light and glare, block sound, screen unwanted views, or enhance privacy. All window treatment materials are fire-rated and child safe. We also offer ADA-compliant hardware options, as well as exterior shading for public spaces.</p>
                    <div class="d-flex align-items-start">
                        <div class="nav tab-vert flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link bg-img active" id="v-pills-draperies-tab" data-bs-toggle="pill" data-bs-target="#v-pills-draperies" type="button" role="tab" aria-controls="v-pills-draperies" aria-selected="true" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/draperies.jpg">
                                Draperies</button>

                            <button class="nav-link bg-img" id="v-pills-roller-shades-tab" data-bs-toggle="pill" data-bs-target="#v-pills-roller-shades" type="button" role="tab" aria-controls="v-pills-roller-shades" aria-selected="false" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/roller-shades.jpg">
                                Roller Shades</button>

                            <button class="nav-link bg-img" id="v-pills-blinds-tab" data-bs-toggle="pill" data-bs-target="#v-pills-blinds" type="button" role="tab" aria-controls="v-pills-blinds" aria-selected="false" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/blinds.jpg">
                                Blinds</button>

                            <button class="nav-link bg-img" id="v-pills-top-treatments-tab" data-bs-toggle="pill" data-bs-target="#v-pills-top-treatments" type="button" role="tab" aria-controls="v-pills-top-treatments" aria-selected="false" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/top-treatments.jpg">
                                Top Treatments</button>

                            <button class="nav-link bg-img" id="v-pills-hardware-tab" data-bs-toggle="pill" data-bs-target="#v-pills-hardware" type="button" role="tab" aria-controls="v-pills-hardware" aria-selected="false" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/hardware.jpg">
                                Hardware</button>

                            <button class="nav-link bg-img" id="v-pills-specialty-shades-tab" data-bs-toggle="pill" data-bs-target="#v-pills-specialty-shades" type="button" role="tab" aria-controls="v-pills-specialty-shades" aria-selected="false" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/specialty-shades.jpg">
                                Specialty Shades</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active px-sm-4 px-lg-5" id="v-pills-draperies" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Draperies</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/draperies.jpg" alt="Draperies" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE DRAPERY OPTIONS</a>
                            </div>
                            <div class="tab-pane fade px-sm-4 px-lg-5" id="v-pills-roller-shades" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Roller Shades</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/roller-shades.jpg" alt="Roller Shades" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE Roller Shade OPTIONS</a>
                            </div>
                            <div class="tab-pane fade px-sm-4 px-lg-5" id="v-pills-blinds" role="tabpanel" aria-labelledby="v-pills-blinds-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Blinds</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/Blinds.jpg" alt="Blinds" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE Blinds OPTIONS</a>
                            </div>
                            <div class="tab-pane fade px-sm-4 px-lg-5" id="v-pills-top-treatments" role="tabpanel" aria-labelledby="v-pills-top-treatments-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Top Treatments</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/top-treatments.jpg" alt="Top Treatments" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE Top Treatments OPTIONS</a>
                            </div>
                            <div class="tab-pane fade px-sm-4 px-lg-5" id="v-pills-hardware" role="tabpanel" aria-labelledby="v-pills-hardware-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Hardware</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/hardware.jpg" alt="Hardware" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE Hardware OPTIONS</a>
                            </div>
                            <div class="tab-pane fade px-sm-4 px-lg-5" id="v-pills-specialty-shades" role="tabpanel" aria-labelledby="v-pills-specialty-shades-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Specialty Shades</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/specialty-shades.jpg" alt="Specialty Shades" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE Specialty Shades OPTIONS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="bedding-tab-pane" role="tabpanel" aria-labelledby="bedding-tab" tabindex="0">
                    <p class="p-4 fs-18 mb-4">Reimagine the bed into your room’s focal point with our array of functional and decorative beddings. Our artisanal craftsmanship creates a tailored fit that not only provides hygiene and comfort, but a true welcoming hospitality experience. We work with budgets and design requirements of all types including using customers’ own material (COM).</p>
                    <div class="d-flex align-items-start">
                        <div class="nav tab-vert flex-column nav-pills me-3" id="v-bedding-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link bg-img active" id="v-beddings-bed-covers-tab" data-bs-toggle="pill" data-bs-target="#v-beddings-bed-covers" type="button" role="tab" aria-controls="v-beddings-bed-covers" aria-selected="true" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/bed-covers.jpg">
                                Bed Covers</button>

                            <button class="nav-link bg-img" id="v-beddings-roller-shades-tab" data-bs-toggle="pill" data-bs-target="#v-beddings-roller-shades" type="button" role="tab" aria-controls="v-beddings-roller-shades" aria-selected="false" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/roller-shades.jpg">
                                Roller Shades</button>

                            <button class="nav-link bg-img" id="v-beddings-blinds-tab" data-bs-toggle="pill" data-bs-target="#v-beddings-blinds" type="button" role="tab" aria-controls="v-beddings-blinds" aria-selected="false" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/blinds.jpg">
                                Blinds</button>

                            <button class="nav-link bg-img" id="v-beddings-top-treatments-tab" data-bs-toggle="pill" data-bs-target="#v-beddings-top-treatments" type="button" role="tab" aria-controls="v-beddings-top-treatments" aria-selected="false" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/top-treatments.jpg">
                                Top Treatments</button>

                            <button class="nav-link bg-img" id="v-beddings-hardware-tab" data-bs-toggle="pill" data-bs-target="#v-beddings-hardware" type="button" role="tab" aria-controls="v-beddings-hardware" aria-selected="false" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/hardware.jpg">
                                Hardware</button>

                            <button class="nav-link bg-img" id="v-beddings-specialty-shades-tab" data-bs-toggle="pill" data-bs-target="#v-beddings-specialty-shades" type="button" role="tab" aria-controls="v-beddings-specialty-shades" aria-selected="false" data-bg-img="<?php bloginfo('template_directory') ?>/dist/img/specialty-shades.jpg">
                                Specialty Shades</button>
                        </div>
                        <div class="tab-content" id="v-bedding-tabContent">
                            <div class="tab-pane fade show active px-sm-4 px-lg-5" id="v-beddings-draperies" role="tabpanel" aria-labelledby="v-beddings-home-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Draperies</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/draperies.jpg" alt="Draperies" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE DRAPERY OPTIONS</a>
                            </div>
                            <div class="tab-pane fade px-sm-4 px-lg-5" id="v-beddings-roller-shades" role="tabpanel" aria-labelledby="v-beddings-profile-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Roller Shades</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/roller-shades.jpg" alt="Roller Shades" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE Roller Shade OPTIONS</a>
                            </div>
                            <div class="tab-pane fade px-sm-4 px-lg-5" id="v-beddings-blinds" role="tabpanel" aria-labelledby="v-beddings-blinds-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Blinds</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/Blinds.jpg" alt="Blinds" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE Blinds OPTIONS</a>
                            </div>
                            <div class="tab-pane fade px-sm-4 px-lg-5" id="v-beddings-top-treatments" role="tabpanel" aria-labelledby="v-beddings-top-treatments-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Top Treatments</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/top-treatments.jpg" alt="Top Treatments" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE Top Treatments OPTIONS</a>
                            </div>
                            <div class="tab-pane fade px-sm-4 px-lg-5" id="v-beddings-hardware" role="tabpanel" aria-labelledby="v-beddings-hardware-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Hardware</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/hardware.jpg" alt="Hardware" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE Hardware OPTIONS</a>
                            </div>
                            <div class="tab-pane fade px-sm-4 px-lg-5" id="v-beddings-specialty-shades" role="tabpanel" aria-labelledby="v-beddings-specialty-shades-tab" tabindex="0">
                                <h2 class="mb-4 text-[34px]"><u class="underline-primary thick">Specialty Shades</u></h2>
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/specialty-shades.jpg" alt="Specialty Shades" class="img-fluid mb-4">
                                <a href="#" class="btn btn-outline-white text-uppercase">SEE Specialty Shades OPTIONS</a>
                            </div>
                        </div>
                    </div>
                </div>
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