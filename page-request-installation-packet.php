<?php get_header() ?>

<section class="hero-banner hero-banner-page mrgt-8">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 p-md-0 order-md-2">
                <img src="<?php bloginfo('template_directory') ?>/dist/img/Gallery_Rooms-1_K_Bed_Accessible_02.png" alt="Laughing" class="w-100 img-fluid hero-img" data-aos="slide-left" data-aos-offset="0" data-aos-duration="1500">
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6 pe-lg-5 order-md-1 py-5">
                <h1 class=" font-head display-3 mb-4" data-aos="fade-right" data-aos-offset="0" data-aos-duration="000"><u class="underline-primary">Request</u> Installation Packet</h1>
                <p class="mb-4 text-[18px]">Samples are subject to availability. We’ll send 1 of each pick and ship to US locations only. For special requests, email <a href="mailto:samples@fabtex.com" class="text-primary">samples@fabtex.com</a> with the fabric name & number.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h5 class="text-[24px] mb-4">Your Packet Contains</h5>
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-4 justify-center">
            <div class="bg-white border-dashed border-[3px] border-[#D6D6D6]/[.4] p-4 rounded-2xl">
                <span class="font-light text-[12px]">ITEM</span>
                <strong class="m-0 text-[14px] text-dark d-block">1 X 1 PC</strong>
            </div>
            <div class="bg-white border-dashed border-[3px] border-[#D6D6D6]/[.4] p-4 rounded-2xl">
                <span class="font-light text-[12px]">ITEM</span>
                <strong class="m-0 text-[14px] text-dark d-block">2 X 2 PC</strong>
            </div>
            <div class="bg-white border-dashed border-[3px] border-[#D6D6D6]/[.4] p-4 rounded-2xl">
                <span class="font-light text-[12px]">ITEM</span>
                <strong class="m-0 text-[14px] text-dark d-block">3 X 3 PC</strong>
            </div>
            <div class="bg-white border-dashed border-[3px] border-[#D6D6D6]/[.4] p-4 rounded-2xl">
                <span class="font-light text-[12px]">ITEM</span>
                <strong class="m-0 text-[14px] text-dark d-block">4 X 50 PC</strong>
            </div>
            <div class="bg-white border-dashed border-[3px] border-[#D6D6D6]/[.4] p-4 rounded-2xl">
                <span class="font-light text-[12px]">ITEM</span>
                <strong class="m-0 text-[14px] text-dark d-block">1 X 1 PC</strong>
            </div>
            <div class="bg-white border-dashed border-[3px] border-[#D6D6D6]/[.4] p-4 rounded-2xl">
                <span class="font-light text-[12px]">ITEM</span>
                <strong class="m-0 text-[14px] text-dark d-block">5 X 12 PC</strong>
            </div>
            <div class="bg-white border-dashed border-[3px] border-[#D6D6D6]/[.4] p-4 rounded-2xl">
                <span class="font-light text-[12px]">ITEM</span>
                <strong class="m-0 text-[14px] text-dark d-block">6 X 3 PC</strong>
            </div>
            <div class="bg-white border-dashed border-[3px] border-[#D6D6D6]/[.4] p-4 rounded-2xl">
                <span class="font-light text-[12px]">ITEM</span>
                <strong class="m-0 text-[14px] text-dark d-block">7 X 8 PC</strong>
            </div>
            <div class="bg-white border-dashed border-[3px] border-[#D6D6D6]/[.4] p-4 rounded-2xl">
                <span class="font-light text-[12px]">ITEM</span>
                <strong class="m-0 text-[14px] text-dark d-block">8 X 2 PC</strong>
            </div>
            <div class="bg-white border-dashed border-[3px] border-[#D6D6D6]/[.4] p-4 rounded-2xl">
                <span class="font-light text-[12px]">ITEM</span>
                <strong class="m-0 text-[14px] text-dark d-block">9 X 5 PC</strong>
            </div>
        </div>
    </div>
    <div class="pattern absolute z-[-1] bottom-[-250px] left-0 right-0">
        <img class="fit-cover w-screen" src="<?php bloginfo('template_directory') ?>/dist/img/header-pattern.png" />
    </div>
</section>

<section class="py-5 fab-wizard wizard-request-install bg-white">
    <div class="container">
        <ul class="wizard-step-header">
            <li class="step-1 active" data-wizard-step="step-1">
                <span class="wizard-counter">1</span>
                <span class="wizard-counter-title">Your Info</span>
                <span class="line"></span>
            </li>
            <li class="step-2 " data-wizard-step="step-2">
                <span class="wizard-counter">2</span>
                <span class="wizard-counter-title">Shipping Info</span>
                <span class="line"></span>
            </li>
            <li class="step-3 " data-wizard-step="step-3">
                <span class="wizard-counter">3</span>
                <span class="wizard-counter-title">Review</span>
                <span class="line"></span>
            </li>
            <li class="step-4" data-wizard-step="step-4">
                <span class="wizard-counter">4</span>
                <span class="wizard-counter-title">Done</span>
                <span class="line"></span>
            </li>
        </ul>
        <div class="wizard-step-container py-5 mt-lg-5">
            <div class="container">
                <form action="#">
                    <?php include('inc/requset-sample-your-info.php') ?>
                    <?php include('inc/requset-sample-shipping-info.php') ?>
                    <?php include('inc/requset-sample-review.php') ?>
                    <?php include('inc/requset-sample-done.php') ?>
                </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>