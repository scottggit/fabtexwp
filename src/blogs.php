<?php
$page_title = "Blogs | Below Invoice";
include('include/html_head.php');
include('include/navbar.php');
?>
<div class="content">
    <section class="header hdr-grad pt-10 pb-5">
        <span class="animate_circle_border animate_circle_border-left animate_circle_border-primary"></span>
        <span class="animate_circle_border animate_circle_border-right animate_circle_border-secondary"></span>
        <div class="container pt-lg-5">
            <div class="row align-items-center py-5">
                <div class="col-lg-8 offset-lg-2 mb-5">
                    <h1 class="display-2 mb-5 animate__animated text-center" data-animate="slideInLeft">News from <span class="text-primary">blog</span></h1>
                    <form action="#" class="hdr-search mb-5">
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            <div class="c-card blog-featured p-4 p-lg-5 bg-img bg-img-overlay-dark animate__animated" data-animate="slideInUp" data-background-image="../dist/img/cars/lambo-1-lg.png">
                <div class="col-lg-8 col-md-10">
                    <span class="text-bbs text-smallest text-white ltr-spc animate__animated" data-animate="slideInUp">No comments</span>
                    <h2 class="text-white mb-4 animate__animated" data-animate="slideInUp">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h2>
                    <p class="text-white text-smaller ltr-spc mb-5 animate__animated" data-animate="slideInUp">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the</p>
                    
                    <a href="#" class="text-bold link-arrow animate__animated" data-animate="slideInUp">Learn More <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5 my-5 blog_container">
        <span class="animate_circle_border animate_circle_border-left animate_circle_border-secondary"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="blog_list pb-5">
                        <?php 
                            $blogs = [
                                'car_interior.png',
                                'car_on_road.png',
                                'car_rims.png',
                                'car_rims2.png',
                                'car_silver.png',
                                'car_yellow.png',
                            ];
                            foreach($blogs as $blog_img){
                                include('include/blog/blog_item.php'); 
                            }
                        ?>
                    </div>
                    <?php include('include/pagination.php'); ?>
                </div>
                <div class="col-md-4 col-lg-3">
                    <?php include('include/blog/categories.php'); ?>
                    <?php include('include/blog/tags.php'); ?>
                    <?php include('include/blog/get_started.php'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php include('include/contact_us.php'); ?>
</div>
<?php include('include/footer.php'); ?>
<?php include('include/footer_include_scripts.php'); ?>