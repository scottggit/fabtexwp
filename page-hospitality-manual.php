<?php get_header(); ?>

<section class="hero-banner ">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-12 p-0 mb-5 mb-lg-0 ">
                <div class="banner-wrap">
           
                         <img src="<?php bloginfo('template_directory') ?>/dist/img/healthcare_banner.png" alt="Laughing" class="w-100 img-fluid hero-img">
               <!-- <div class="container position-relative"> <div class="full-banner-title"><h2 class='display-4'>Manual Systems</h2></div></div> -->
                </div>
            </div>

        </div>
    </div>
    <div class="pattern absolute z-[-1] bottom-[-250px] left-0 right-0">
        <img class="fit-cover w-screen" src="<?php bloginfo('template_directory') ?>/dist/img/pattern.png" />
    </div>
</section>

<section class="tab-container-c mb-5 pb-5">
    <div class="container">
        <ul class="nav nav-tabs tab-horz" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="manual-systems-tab" data-bs-toggle="tab" data-bs-target="#manual-systems-tab-pane" type="button" role="tab" aria-controls="manual-systems-tab-pane" aria-selected="true">Manual Systems</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="motorized-systems-tab" data-bs-toggle="tab" data-bs-target="#motorized-systems-tab-pane" type="button" role="tab" aria-controls="motorized-systems-tab-pane" aria-selected="false">Motorized Systems</button>
            </li>
        </ul>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="tab-content" id="hospitality-manualTabContent">

            <div class="row ">
            <div class="col-lg-12">
            <div class="d-flex  mt-3 pt-5">
            <a href="" class="font-weight-regular text-[14px]  text-[#252831]"> <u>Hospitality</u> </a>
                <span class="px-3 text-[#252831]"> > </span>
                <a href="" class="font-weight-regular text-[14px] text-[#252831]"> <u>Window Treatments</u> </a>
                <span class="px-3 text-[#252831]"> > </span>
                <a href="" class="font-weight-regular text-[14px] text-[#252831]"> <u>Hardware</u> </a>
            </div>    
            </div>    </div> 
            <div class="desc mt-4 pb-5">The foundation for every beautiful window treatment is a properly designed and configured tracking system. Our highly efficient hand-drawn systems for light to heavy treatments come in these options:</div>
                <?php include('inc/hospitality-manual-systems-tab.php')?>
                <?php include('inc/hospitality-motorized-systems-tab.php')?>
            </div>   
        </div>
    </div>
</section>




<section class="resources-section py-4 mb-5 pb-5">
    <div class="container-fluid">
    <div class="row mb-5">
            <div class="col-md-12">
                <h2 class="display-4 text-center">
Resources
</h3>
            </div>
        </div>
    </div>
    <div class="container">
      
        <div class="row resource-block" >
            <div class="col-md-6">
            <div class="resource-wrap">
            <div class="resource-wrap-inner">
                <div class="row">
                <div class="col-md-auto">
                <span>01</span>
                                    </div>
                                    <div class="col-md-10">
                                <h3>Brochure & Specs</h3>  
                </div>
                </div>
     
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="resource-wrap">
                <div class="resource-wrap-inner">
                <div class="row">
                    <div class="col-md-auto">
<span>02</span>
                    </div>
                    <div class="col-md-10">
                    <h3> Care Instructions </h3>
</div>
                </div>     </div>
            </div>   </div>
        </div>

        <div class="row resource-block">
            <div class="col-md-6">
            <div class="resource-wrap">
            <div class="resource-wrap-inner">
            <div class="row">
                    <div class="col-md-auto">
<span>03</span>
                    </div>
                    <div class="col-md-10">
                  <h3>Room Measure Form</h3>  
</div>
                </div>  </div>
            </div>      </div>
            <div class="col-md-6">
                <div class="resource-wrap">
                <div class="resource-wrap-inner">
                <div class="row">
                    <div class="col-md-auto">
<span>04</span>
                    </div>
                    <div class="col-md-10">
                    <h3> Quote Request Form </h3>
</div>  </div>
                </div> </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>