/* Set Background Image */
$(".bg-img").each(function () {
  var imgSrc = $(this).attr("data-background-image");
  if (imgSrc != undefined) {
    $(this).css("background-image", 'url("' + imgSrc + '")');
    //$(this).parent().css('background-position', '50% 0%');
  }
});

$(".blog_inner_carousel").slick({
  autoplay: true,
  autoplaySpeed: 9000,
  dots: true,
  arrows: false,
});
$(".blog_slick").slick({
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        slidesToShow: 1,
      },
    },
  ],
});

$(".clients_slick").slick({
  slidesToShow: 3.1,
  centerMode: true,
  centerPadding: "40px",
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        arrows: false,
        slidesToShow: 1,
      },
    },
  ],
});
/* Logo Carousel Start */
$(".logo-img_carousel").slick({
  centerMode: true,
  slidesToShow: 6,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 767,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "30px",
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 360,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "10px",
        slidesToShow: 2,
      },
    },
  ],
});
$(".custom_nav").on("click", ".fake-prev", function (event) {
  $(this)
    .closest(".slick-w-custom-nav")
    .find(".slick_trigger")
    .slick("slickPrev");
});
$(".custom_nav").on("click", ".fake-next", function (event) {
  $(this)
    .closest(".slick-w-custom-nav")
    .find(".slick_trigger")
    .slick("slickNext");
});
/* Logo Carousel End */

$(document).ready(function () {
  /* Element Animate */
  $(".animate__animated").scrolla({
    once: true,
  });

  /* Scroll Script */
  window.addEventListener(
    "scroll",
    () => {
      document.body.style.setProperty(
        "--scroll",
        window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
      );
    },
    false
  );
});

$(".slick-carousel").slick({
  infinite: true,
  slidesToShow: 1, // Shows a three slides at a time
  slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
  arrows: false, // Adds arrows to sides of slider
  dots: true, // Adds the dots on the bottom
  customPaging: function (slider, i) {
    return '<div class="pager__item">' + name + " </div>";
  },
  useTransform: true,
  cssEase: "ease-in-out",
});

$(".section-eating-healthy .nav>div>div:first-child").addClass("active");
$(".section-eating-healthy .tab-content").hide();
$(".section-eating-healthy .tabs-content>div:first").show();

// Click function
$(".section-eating-healthy .nav>div>div").mouseenter(function () {
  $(".section-eating-healthy .nav>div>div").removeClass("active");
  // $(this).addClass('active');
  $(".section-eating-healthy .tab-content").hide();

  var activeTab = $(this).find("a").attr("href");

  $(activeTab).fadeIn();
  return false;
});
