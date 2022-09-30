<?php //Template Name: Fabric Search ?>

<?php get_header() ?>
<script src="https://cdn.jsdelivr.net/npm/@jaames/iro"></script>

<div class="h-[350px] relative">
    <div class="pattern absolute z-[-1] bottom-0 top-0 left-0 right-0">
        <img class="fit-cover w-screen h-100" src="/wp-content/themes/fabtex/dist/img/pattern.png">
    </div>
    <div class="container d-flex h-100">
        <div class="m-auto">
            <h1 class="text-[45px]"> Search Fabrics By Color </h1>
            <div class="d-flex text-center mt-3">   
                <a href="" class="font-weight-regular text-[14px] ml-auto text-[#252831]"> Hospitality </a> 
                    <span class="px-3 text-[#252831]"> > </span> 
                <a href="" class="font-weight-regular text-[14px] text-[#252831]"> Window treatment </a>
                    <span class="px-3"> > </span> 
                <p class="font-weight-light text-[#808080] text-[14px] mr-auto"> Search Fabric </>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="wheel" id="colorWheelDemo"></div>
</div>

<?php get_footer() ?>
<script>
    var colorWheel = new iro.ColorPicker("#colorWheelDemo", {
        // options here
    });
</script>
