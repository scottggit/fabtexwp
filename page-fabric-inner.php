<?php get_header() ?>
<script src="https://cdn.jsdelivr.net/npm/@jaames/iro"></script>

<div class="fabric-detail-container pddt-8 pb-5 mb-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="fabric-container">
                    <div class="fabric-portfolio">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f11@2x.jpg" alt="Fabric" class="fabric-portfolio-main-img img-fluid">
                        <div class="fabric-portfolio-info">
                            <p class="mb-2"><i>For illustration purposes only. Patterns may differ in size, and colors may vary based on display conditions, printer settings, and dye lot variations.</i></p> 
                            <p><i>Request a sample to verify color, texture, and design scale. Yardage is subject to availability.</i></p>
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/icon-cross.svg" alt="Close" class="fabric-info-toggle fabric-portfolio-info-close">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/icon-info.svg" alt="Show" class="fabric-info-toggle fabric-portfolio-info-show">
                        </div>
                        <ul class="fabric-portfolio-thumbnail">
                            <li><img src="<?php bloginfo('template_directory') ?>/dist/img/Gallery_Rooms-1_K_Bed_Accessible_02@2x.png" alt="Fabric" class="fabric-portfolio-img"></li>
                            <li><img src="<?php bloginfo('template_directory') ?>/dist/img/h1.jpg" alt="Fabric" class="fabric-portfolio-img"></li>
                            <li><img src="<?php bloginfo('template_directory') ?>/dist/img/home-video.png" alt="Fabric" class="fabric-portfolio-img"></li>
                        </ul>
                    </div>
                    <div class="color-profiles">
                        <div class="color-profile">
                            <span>Color Profile: </span>
                            <ul>
                                <li><span class="color-profile-color" data-bg-color="#393F45"></span></li>
                                <li><span class="color-profile-color" data-bg-color="#195693"></span></li>
                                <li><span class="color-profile-color" data-bg-color="#9FBBD8"></span></li>
                                <li><span class="color-profile-color" data-bg-color="#FFFFFF"></span></li>
                            </ul>
                        </div>
                        <span class="btn btn-white find-similar text-capitalize">Find Similar</span>
                    </div>
                    <span class="color-search my-lg-3" data-bs-toggle="modal" data-bs-target="#colorSelector">
                        <span class="color-selector"></span>
                        Color Search
                    </span>
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <?php include('inc/fabric-detail.php')?>
            </div>
        </div>
    </div>
</div>
<div class="fabric-related py-5">
    <div class="container">
        <h3 class="h1 mb-4">Recently Viewed</h3>
        <div class="row">
            <div class="fabric-col col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="" class="fabric-item">
                    <span class="fabric-pin"></span>
                    <div class="fabric-img-container bg-img">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f07@2x.jpg" alt="Fabric" class="fabric-img">
                    </div>
                    <p>Abstract Blue</p>
                    <span>2435932</span>
                </a>
            </div>
            <div class="fabric-col col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="" class="fabric-item">
                    <span class="fabric-pin"></span>
                    <div class="fabric-img-container bg-img">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f08@2x.jpg" alt="Fabric" class="fabric-img">
                    </div>
                    <p>Abstract Blue</p>
                    <span>2435932</span>
                </a>
            </div>
            <div class="fabric-col col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="" class="fabric-item">
                    <span class="fabric-pin"></span>
                    <div class="fabric-img-container bg-img">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f09@2x.jpg" alt="Fabric" class="fabric-img">
                    </div>
                    <p>Abstract Blue</p>
                    <span>2435932</span>
                </a>
            </div>
            <div class="fabric-col col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="" class="fabric-item">
                    <span class="fabric-pin"></span>
                    <div class="fabric-img-container bg-img">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f10@2x.jpg" alt="Fabric" class="fabric-img">
                    </div>
                    <p>Abstract Blue</p>
                    <span>2435932</span>
                </a>
            </div>
            <div class="fabric-col col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="" class="fabric-item">
                    <span class="fabric-pin"></span>
                    <div class="fabric-img-container bg-img">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f11@2x.jpg" alt="Fabric" class="fabric-img">
                    </div>
                    <p>Abstract Blue</p>
                    <span>2435932</span>
                </a>
            </div>
            <div class="fabric-col col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="" class="fabric-item">
                    <span class="fabric-pin"></span>
                    <div class="fabric-img-container bg-img">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f12@2x.jpg" alt="Fabric" class="fabric-img">
                    </div>
                    <p>Abstract Blue</p>
                    <span>2435932</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
<script>
    $('.fabric-portfolio-img').on('click', function() {
        var temp_src = $(this).attr('src');
        $(this).attr('src', $('.fabric-portfolio-main-img').attr('src'));
        $('.fabric-portfolio-main-img').attr('src', temp_src);
    });
    $('.fabric-info-toggle').on('click', function() {
        $('.fabric-portfolio-info').toggleClass('fabric-info-show');
    });
    $('.color-profile-color').each(function() {
        var color_style = $(this).attr('data-bg-color');
        console.log(color_style);

        $(this).css('background', color_style);
    });
</script>
<div class="modal fade" id="colorSelector" tabindex="-1" aria-labelledby="colorSelectorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl align-items-end">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="72px" height="72px" viewBox="0 0 72 72" id="emoji" xmlns="http://www.w3.org/2000/svg">
                        <g id="line">
                            <line x1="17.5" x2="54.5" y1="17.5" y2="54.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4" />
                            <line x1="54.5" x2="17.5" y1="17.5" y2="54.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4" />
                        </g>
                    </svg>
                </button>

                <h3 class="h1 pt-0">Search Fabrics By Color</h3>
                <p>Use the color picker to select colors or upload an image.</p>
                <div class="container mt-4">
                    <div class="wheel" id="colorWheelDemo"></div>
                </div>
            </div>
        </div>
    </div>
</div>