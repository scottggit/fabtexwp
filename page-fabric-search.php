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
            <h1 class="text-[45px]"> Search <span class="underlined">Fabrics</span> By Color </h1>
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
            <div class="col-xl-3 col-lg-4">
                <span class="filter-toggle">
                    Filter
                </span>
                <div class="filter-container">
                    <div class="d-flex justify-content-between mb-4">
                        <h3 class="text-[24px]">Filter By</h3>
                        <span class="text-[14px]">CLEAR ALL</span>
                    </div>
                    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
                        <p class="filter-title text-dark"><strong>Application</strong></p>
                        <ul class="mt-3">
                            <li class="mb-2">
                                <input type="checkbox" name="application" id="blinds">
                                <label for="blinds">Blinds (22)</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="application" id="draperies">
                                <label for="draperies">Draperies (4)</label>
                            </li>
                            <li class="">
                                <input type="checkbox" name="application" id="roller_shades">
                                <label for="roller_shades">Roller Shades (15)</label>
                            </li>
                        </ul>
                    </div>
                    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
                        <p class="filter-title text-dark"><strong>Material</strong></p>
                        <ul class="mt-3">
                            <li class="mb-2">
                                <input type="checkbox" name="material" id="linen">
                                <label for="linen">Linen & Natural Weaves</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="material" id="Papel">
                                <label for="Papel">Papel</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="material" id="Polyester">
                                <label for="Polyester">Polyester</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="material" id="Sheers">
                                <label for="Sheers">Sheers</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="material" id="Silk">
                                <label for="Silk">Silk</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="material" id="Synthetic">
                                <label for="Synthetic">Synthetic</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="material" id="Velvet">
                                <label for="Velvet">Velvet</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="material" id="Vinyl">
                                <label for="Vinyl">Vinyl</label>
                            </li>
                            <li class="">
                                <input type="checkbox" name="material" id="Wool">
                                <label for="Wool">Wool & Wool Mixes</label>
                            </li>
                        </ul>
                    </div>
                    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
                        <p class="filter-title text-dark"><strong>Maximum Width</strong></p>
                        <ul class="mt-3">
                            <li class="mb-2">
                                <input type="checkbox" name="max_width" id="max_width_54">
                                <label for="max_width_54">54”</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="max_width" id="max_width_72">
                                <label for="max_width_72">72”</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="max_width" id="max_width_94">
                                <label for="max_width_94">94”</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="max_width" id="max_width_110">
                                <label for="max_width_110">110”</label>
                            </li>
                            <li class="">
                                <input type="checkbox" name="max_width" id="max_width_118">
                                <label for="max_width_118">118”</label>
                            </li>
                        </ul>
                    </div>
                    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
                        <p class="filter-title text-dark"><strong>Patterns & Textures</strong></p>
                        <ul class="mt-3">
                            <li class="mb-2">
                                <input type="checkbox" name="patterns" id="Solids">
                                <label for="Solids">Solids</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="patterns" id="Patterned">
                                <label for="Patterned">Patterned</label>
                            </li>
                            <li class="">
                                <input type="checkbox" name="patterns" id="Texture">
                                <label for="Texture">Texture</label>
                            </li>
                        </ul>
                    </div>
                    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
                        <p class="filter-title text-dark"><strong>Fabric Type</strong></p>
                        <ul class="mt-3">
                            <li class="mb-2">
                                <input type="checkbox" name="fabric_type" id="Blackout">
                                <label for="Blackout">Blackout</label>
                            </li>
                            <li class="mb-2">
                                <input type="checkbox" name="fabric_type" id="UV_Printed">
                                <label for="UV_Printed">UV Printed</label>
                            </li>
                            <li class="">
                                <input type="checkbox" name="fabric_type" id="Woven">
                                <label for="Woven">Woven</label>
                            </li>
                        </ul>
                    </div>
                    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm filter-openness_range">
                        <p class="filter-title text-dark"><strong>Openness</strong></p>
                        <ul class="mt-3">
                            <p class="openness_range_label d-flex justify-content-between">
                                <span>0%</span>
                                <span>5%</span>
                                <span>10%</span>
                            </p>
                            <input type="range" min="0" max="10" value="2" id="fader" step="1">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
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
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/grid-3.png" alt="Grid 3" class="grid-toggle grid-view-3">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/grid-4.png" alt="Grid 4" class="grid-toggle grid-view-4 active">
                    </div>
                </div>

                <div class="fabric-list">
                    <div class="row">
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f01@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f02@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f03@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f04@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f05@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f06@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f01@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f02@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f03@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f04@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f05@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f06@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f01@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f02@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f03@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f04@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f05@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f06@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f01@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f02@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f03@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f04@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f05@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                        <div class="fabric-col col-lg-3 col-md-4 col-6 mb-4">
                            <a href="" class="fabric-item">
                                <span class="fabric-pin"></span>
                                <div class="fabric-img-container bg-img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/fabric/f06@2x.jpg" alt="Fabric" class="fabric-img">
                                </div>
                                <p>Abstract Blue</p>
                                <span>2435932</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer()
?>
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
    $('.grid-toggle').on('click', function() {
        $('.grid-toggle').removeClass('active');
        $(this).toggleClass('active');
        console.log($(this));
        if ($(this).hasClass('grid-view-3')) {
            $('.fabric-list .fabric-col').removeClass('col-lg-3').addClass('col-lg-4');
        } else if ($(this).hasClass('grid-view-4')) {
            $('.fabric-list .fabric-col').removeClass('col-lg-4').addClass('col-lg-3');
        }
    });
</script>


<div class="modal fade" id="colorSelector" tabindex="-1" aria-labelledby="colorSelectorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl align-items-end">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="72px" height="72px" viewBox="0 0 72 72" id="emoji" xmlns="http://www.w3.org/2000/svg">
                        <g id="line">
                            <line x1="17.5" x2="54.5" y1="17.5" y2="54.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                            <line x1="54.5" x2="17.5" y1="17.5" y2="54.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                        </g>
                    </svg>
                </button>

                <h3 class="modal-header h1 pt-0">Search Fabrics By Color</h3>
                <p>Use the color picker to select colors or upload an image.</p>
                <div class="container">
                    <div class="wheel" id="colorWheelDemo"></div>
                </div>
            </div>
        </div>
    </div>
</div>