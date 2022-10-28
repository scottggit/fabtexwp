<?php get_header(); ?> 

<section class="hero-banner ">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-12 p-0 mb-5 mb-lg-0 ">
                <div class="banner-wrap">
           
                         <img src="<?php bloginfo('template_directory') ?>/dist/img/healthcare_banner.png" alt="Laughing" class="w-100 img-fluid hero-img">
             <div class="container">
                 <div class="centered-banner-title"><h2 class='display-4'>Featured Projects</h2>
                 <form role="search" method="get" class="search-projects"  action="http://localhost/visionwp/">
	<input type="search" name="s" placeholder="Search By Projects" title="Search.." required="">
    
	<button class="btn-search">
	<svg xmlns="http://www.w3.org/2000/svg" width="16.961" height="16.964" viewBox="0 0 16.961 16.964">
		<path id="Icon_awesome-search" data-name="Icon awesome-search" d="M16.73,14.666l-3.3-3.3a.794.794,0,0,0-.563-.232h-.54a6.888,6.888,0,1,0-1.193,1.193v.54a.794.794,0,0,0,.232.563l3.3,3.3a.792.792,0,0,0,1.123,0l.938-.938a.8.8,0,0,0,0-1.126ZM6.891,11.131a4.24,4.24,0,1,1,4.24-4.24A4.238,4.238,0,0,1,6.891,11.131Z" fill="#244523"></path>
	</svg>
</button>
    </form></div>
                
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
$count=1;
						$args = array(
							'post_type'        => 'featured-projects',
							'posts_per_page'   => -1 ,
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

 



</div></div>
</section>


<div class="modal fade projectPopup" id="projectPopup" tabindex="-1" aria-labelledby="projectPopupLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <i class="fa-solid fa-xmark gallery-close" data-bs-dismiss="modal" aria-label="Close">Close</i>
            <div class="modal-body">
                <div class="projects_container mt-5">
                  
        <!-- <div class="projects_slick slick_trigger"> -->

<div class="projects_slick slick_trigger">
                        <?php 
                            query_posts(array( 
                                'post_type' => 'featured-projects',
                                'showposts' => -1 
                            ) );  
                                ?>

                            <?php 
                            $count=1;
                            while (have_posts()) : the_post(); 
                            ?>
                                 <div 
                                class="project-slide" 
                                id="project-slide-<?php echo $count; ?>-tab" 
                            > 

                       
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <?php echo get_the_id(); ?>
                            <?php the_title(); ?>
                   
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
    projectPopup.addEventListener('hidden.bs.modal', function () { 
        /* Remove Active class from tab nav and pane */ 
        $('.projectPopup .tab-pane').removeClass('active show');
        $('.projectPopup .nav-gallery').removeClass('active');
    });

    projectPopup.addEventListener('shown.bs.modal', function () { 
        /* Initiate Slick Slider on First Modal open */
        initGallery();
        
        /* Initiate Slick Slider on Tab Click */
        $('.gallery_year .nav-gallery').on('shown.bs.tab', function(event){
            initGallery();
        });
        
        $('.custom_nav').on('click', '.fake-prev', function(event) {
            $('.projectPopup .tab-pane.active.show').find('.slider-nav').slick('slickPrev');
        });
        $('.custom_nav').on('click', '.fake-next', function(event) {
            $('.projectPopup .tab-pane.active.show').find('.slider-nav').slick('slickNext');
        });
    });


    function initGallery(){    
        var getSliderID = $('.tab-pane.active').attr('id');
        var getYear = getSliderID.split("-");
        var mainSlider = '.slider-for-'+getYear[1];
        var navSlider = '.slider-nav-'+getYear[1];

        if(!$(mainSlider).hasClass('slick-initialized')){
            $(mainSlider).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: navSlider
            });
            $(navSlider).slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: mainSlider,
                centerMode: true,
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '30px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 360,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '10px',
                            slidesToShow: 3
                        }
                    }
                ]
            });
        }
    }
</script>
<?php get_footer() ?>