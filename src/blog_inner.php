<?php
$page_title = "Blog Inner | Below Invoice";
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
                    <p class="text-white text-smaller ltr-spc mb-0 animate__animated" data-animate="slideInUp">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5 my-5 blog_container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 pe-lg-5">
                    <div class="blog_content">
                        <p>Globally harness principle-centered communities whereas interdependent web-readiness. Uniquely procrastinate cross-unit collaboration and idea-sharing whereas high standards in customer service. Intrinsicly innovate end-to-end testing procedures after exceptional platforms. Compellingly e-enable fully researched supply chains rather than high-quality mindshare. Collaboratively matrix mission-critical supply chains through cross-platform outsourcing.</p> 
                        <p>Collaboratively disseminate installed base solutions through B2B technology. Objectively incubate long-term high-impact total linkage without customized potentialities. Holisticly synthesize excellent supply chains through scalable infomediaries. Enthusiastically fabricate customer directed convergence through synergistic experiences. Dynamically envisioneer cutting-edge products through mission-critical human capital.</p> 
                        <p>Proactively repurpose process-centric supply chains via backward-compatible solutions. Globally foster quality strategic theme areas with e-business platforms. Objectively underwhelm proactive technologies rather than 2.0 synergy. Uniquely incentivize integrated schemas via diverse value. Credibly deliver robust processes rather than resource-leveling experiences.</p>
                        
                        <h5>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and</h5>
                        <p>Objectively simplify effective portals after seamless portals. Synergistically facilitate alternative communities after business bandwidth. Collaboratively evisculate next-generation materials through backend benefits. Collaboratively fabricate error-free process improvements without user-centric portals. Intrinsicly harness functional processes with standardized sources. </p>
                        <p>Phosfluorescently iterate interdependent platforms whereas principle-centered action items. Enthusiastically envisioneer plug-and-play systems whereas interdependent ideas. Proactively supply superior potentialities with ubiquitous niches. Holisticly productivate fully tested methods of empowerment via functional best practices. Continually evisculate market-driven opportunities without excellent bandwidth.</p>
                        
                        <h5>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and</h5>
                        <p>Objectively simplify effective portals after seamless portals. Synergistically facilitate alternative communities after business bandwidth. Collaboratively evisculate next-generation materials through backend benefits. Collaboratively fabricate error-free process improvements without user-centric portals. Intrinsicly harness functional processes with standardized sources. </p>
                        <p>Phosfluorescently iterate interdependent platforms whereas principle-centered action items. Enthusiastically envisioneer plug-and-play systems whereas interdependent ideas. Proactively supply superior potentialities with ubiquitous niches. Holisticly productivate fully tested methods of empowerment via functional best practices. Continually evisculate market-driven opportunities without excellent bandwidth.</p>
                    </div>    
                </div>
                <div class="col-md-4 col-lg-3">
                <div class="c-card p-4 mb-5 animate__animated" data-animate="slideInUp">
                    <h3 class="mb-4">Recent Post</h3>
                    <div class="blog_inner_carousel">
                        <?php 
                            $blogs = [
                                'car_rims.png',
                                'car_rims2.png',
                                'car_silver.png',
                                'car_yellow.png',
                            ];
                            foreach($blogs as $blog_img){
                                include('include/blog/blog_inner_carousel.php'); 
                            }
                        ?>
                    </div>
                </div>
                    <?php include('include/blog/categories.php'); ?>
                    <?php include('include/blog/tags.php'); ?>
                    <?php include('include/blog/get_started.php'); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 slick-w-custom-nav position-relative">
        <span class="bg-grad"></span>
        <div class="container">
            <div class="row">
                <div class="col-xl-2 order-xl-1 animate__animated" data-animate="slideInUp">
                    <div class="lg-n-container mb-xl-5">
                        <div class="lg-n-detail ps-4">
                            <h5 class="text-primary-light animate__animated" data-animate="slideInUp">Related</h5>
                        
                            <h3 class="display-5 mb-0 animate__animated" data-animate="slideInUp"><span class="text-primary">Posts</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 order-xl-3 pb-4 pb-xl-0 animate__animated" data-animate="slideInUp">
                    <div class="custom_nav_container blogs_slick_nav justify-content-end justify-content-xl-between">
                        <div class="custom_nav flex-xl-column animate__animated" data-animate="slideInUp">
                            <span class="fake-prev me-xl-0 mb-xl-3"></span>
                            <span class="fake-next"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 order-xl-2 animate__animated" data-animate="slideInUp">
                    <div class="blog_list blog_slick slick_trigger">
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
                </div>
            </div>
        </div>
    </section>
    <?php include('include/contact_us.php'); ?>
</div>
<?php include('include/footer.php'); ?>
<?php include('include/footer_include_scripts.php'); ?>