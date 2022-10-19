<?php //Template Name: Fabric Search 
?>
<?php get_header() ?>
<style>
    body {
        overflow: auto !important;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/@jaames/iro"></script>

<div class="h-[450px] relative bg-[url('<?php bloginfo('template_directory') ?>/dist/img/header-pattern.png')]">
    <div class="container d-flex h-100">
        <div class="m-auto">
            <h1 class="text-[45px]"> Search <u class="underline-primary">Fabrics</u> By Color </h1>
            <div class="d-flex text-center mt-3">
                <a href="" class="font-weight-regular text-[14px] ml-auto text-[#252831]"> <u>Hospitality</u> </a>
                <span class="px-3 text-[#252831]"> > </span>
                <a href="" class="font-weight-regular text-[14px] text-[#252831]"> <u>Window treatment</u> </a>
                <span class="px-3"> > </span>
                <p class="font-weight-light text-[#808080] text-[14px] mr-auto"> Search Fabric </>
            </div>
        </div>
    </div>
</div>
<div class="search-container position-relative mt-n-3r pb-5 mb-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <?php include('inc/side-filter.php'); ?>
            </div>
            <div class="col-xl-9 col-md-8">
                <div class="filter-side d-flex flex-wrap justify-content-between mb-4">
                    <div class="filter-left">
                        <span class="color-search" data-bs-toggle="modal" data-bs-target="#colorSelector">
                            <span class="color-selector"></span>
                            Color Search
                        </span>

                        <div class="filter-sortby-container">
                            <div class="filter-sortby">
                                <span>Sort By</span>
                                <ul>
                                    <li class="py-1"><a href="#">Privacy Curtains</a></li>
                                    <li class="py-1"><a href="#">Shower Curtains</a></li>
                                    <li class="py-1"><a href="#">Hardware</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="filter-right">

                        <span class="filter-toggle text-dark"></span>
                        <div class="filter-grid">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/grid-3.png" alt="Grid 3" class="grid-toggle grid-view-3">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/grid-4.png" alt="Grid 4" class="grid-toggle grid-view-4 active">
                        </div>
                    </div>
                </div>

                <div class="fabric-list">
                    <div class="row">
                        <?php for ($i = 1; $i < 2; $i++) : ?>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f07@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f08@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f09@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f10@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f11@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f12@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f01@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f02@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f03@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f04@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f05@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                            <div class="fabric-col col-xl-3 col-lg-4 col-6 mb-4">
                                <a href="" class="fabric-item">
                                    <span class="fabric-pin"></span>
                                    <div class="fabric-img-container bg-img">
                                        <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f06@2x.jpg" alt="Fabric" class="fabric-img">
                                    </div>
                                    <p>Abstract Blue</p>
                                    <span>2435932</span>
                                </a>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <?php include('inc/pagination.php'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer()?>
<script>
    var colorWheel = new iro.ColorPicker("#colorWheelDemo", {
        // options here
    });
</script>
<script>
    $('.filter-title').on('click', function() {
        $(this).toggleClass('active');
        $(this).closest('.filter-item').find('ul').slideToggle('fast');
    });

    $('.filter-toggle').on('click', function() {
        $('.filter-container').addClass('active');
    });
    $('.filter-toggle-close').on('click', function() {
        $('.filter-container').removeClass('active');
    });

    $('.grid-toggle').on('click', function() {
        $('.grid-toggle').removeClass('active');
        $(this).toggleClass('active');
        console.log($(this));
        if ($(this).hasClass('grid-view-3')) {
            $('.fabric-list .fabric-col').removeClass('col-xl-3').addClass('col-xl-4');
        } else if ($(this).hasClass('grid-view-4')) {
            $('.fabric-list .fabric-col').removeClass('col-xl-4').addClass('col-xl-3');
        }
    });


    gsap.defaults({
        ease: "power3"
    });


    gsap.set(".fabric-col", {
        opacity: 0
    });

    ScrollTrigger.batch(".fabric-col", {

        once: true,

        interval: 0.1,
        batchMax: 3,

        onEnter: (batch) => {
            gsap.to(batch, {
                autoAlpha: 1,
                stagger: 0.15,
                overwrite: true
            })
        },
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