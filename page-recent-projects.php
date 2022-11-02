<?php get_header(); ?>

<section class="hero-banner ">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-12 p-0 mb-5 mb-lg-0 ">
                <div class="banner-wrap">

                    <img src="<?php bloginfo('template_directory') ?>/dist/img/healthcare_banner.png" alt="Laughing" class="w-100 img-fluid hero-img">
                    <div class="container">
                        <div class="centered-banner-title">
                            <h2 class='display-4'>Featured Projects</h2>
                            <form role="search" method="get" class="search-projects" action="http://localhost/visionwp/">
                                <input type="search" name="s" placeholder="Search By Projects" title="Search.." required="">

                                <button class="btn-search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.961" height="16.964" viewBox="0 0 16.961 16.964">
                                        <path id="Icon_awesome-search" data-name="Icon awesome-search" d="M16.73,14.666l-3.3-3.3a.794.794,0,0,0-.563-.232h-.54a6.888,6.888,0,1,0-1.193,1.193v.54a.794.794,0,0,0,.232.563l3.3,3.3a.792.792,0,0,0,1.123,0l.938-.938a.8.8,0,0,0,0-1.126ZM6.891,11.131a4.24,4.24,0,1,1,4.24-4.24A4.238,4.238,0,0,1,6.891,11.131Z" fill="#244523"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="pattern absolute z-[-1] bottom-[-250px] left-0 right-0">
        <img class="fit-cover w-screen" src="<?php bloginfo('template_directory') ?>/dist/img/pattern.png" />
    </div>
</section>

<section class="projects-wrap mt-5 pt-5 ">
    <div class="container">
        <div class="row">
            <?php
            $count = 1;
            $args = array(
                'post_type'        => 'featured-projects',
                'posts_per_page'   => -1,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>

                    <div class="col-md-4">
                        <div class="project-item mb-4 bg-img" style="background-image: url(<?php bloginfo('template_directory') ?>/dist/img/marriot.jpg);">
                            <a href="#" class="img-wrap projectPopup-trigger" data-modal-trigger="projectPopup-<?php echo $count; ?>">

                                <div class="detail-wrap mb-5">
                                    <h4><?php echo get_the_title(); ?></h4>
                                    <p class="text-uppercase">KANSAS CITY, MISSOURI</p>
                                </div>

                            </a>
                        </div>
                    </div>

            <?php
                    $count++;
                } // end while
            } // end if
            wp_reset_query();
            ?>





        </div>
    </div>
</section>


<div class="modal fade projectPopup" id="projectPopup" tabindex="-1" aria-labelledby="projectPopupLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <i class="fa-solid fa-xmark close" data-bs-dismiss="modal" aria-label="Close"></i>
            <div class="modal-body">
                <div class="container">
                    <div class="projects_container mt-5">
                        <div class="recent_projects_slick slick_trigger">
                            <?php
                            query_posts(array(
                                'post_type' => 'featured-projects',
                                'showposts' => -1
                            ));
                            ?>

                            <?php
                            $count = 1;
                            while (have_posts()) : the_post();
                            ?>
                                <div class="project-slide" id="project-slide-<?php echo $count; ?>-tab">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="project-background">
                                    <div class="project-detail white-box white-box-w-border white-box-w-bd-lt white-box-w-shadow">
                                        <div class="project-logo">
                                            <img src="<?php bloginfo('template_directory') ?>/dist/img/Marriott-Logo-dark.png" alt="" class="img-fluid mb-4 w-75">
                                        </div>
                                        <span class="font-small font-light ttext-uppercase d-block">MARRIOT EXECUTIVE APARTMENTS</span>
                                        <span class="font-small text-[#808080] font-light d-block mb-4">Kansas City, Missouri</span>
                                        <ul>
                                            <li>Drapery</li>
                                            <li>Custom Print</li>
                                            <li>Roller Shades</li>
                                            <li>Bed Covers</li>
                                            <li>Guestroom & Public Space</li>
                                        </ul>
                                    </div>
                                    <?php //echo get_the_id(); 
                                    ?>
                                    <?php //the_title(); 
                                    ?>

                                </div>

                            <?php
                                $count++;
                            endwhile;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var projectPopup = document.getElementById('projectPopup');

    projectPopup.addEventListener('shown.bs.modal', function() {
        initProject();
    });


    function initProject() {

        if (!$('.recent_projects_slick').hasClass('slick-initialized')) {
            $(".recent_projects_slick").slick({
                slidesToShow: 1,
                infinite: false
            });

        }
    }
</script>
<?php get_footer() ?>