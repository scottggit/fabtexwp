/* Set Background Image */
$(".bg-img").each(function () {
  var imgSrc = $(this).attr("data-background-image");
  if (imgSrc != undefined) {
    $(this).css("background-image", 'url("' + imgSrc + '")');
    //$(this).parent().css('background-position', '50% 0%');
  }
});
/* Vertical Tab Background Image */
$(".tab-vert .nav-link").each(function () {
  var imgPath = $(this).attr("data-bg-img");
  $(this).css("background-image", "url(" + imgPath + ")");
});
/* vert_tab($('.tab-vert .nav-link.active'));
$('.tab-vert').on('click', '.nav-link', function () {
  vert_tab($(this));
});
function vert_tab(el) {
  $('.tab-vert .nav-link').css('background-image', "");
  var imgPath = el.attr('data-bg-img');
  el.css('background-image', "url(" + imgPath + ")");
} */
/* Vertical Tab Background Image */
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

$(".fab-wizard").on("click", "[data-wizard-step]", function () {
  var toggleStep = $(this).attr("data-wizard-step");
  var wizardContainer = $(this)
    .closest(".fab-wizard")
    .find(".wizard-step-container");
  var wizardHeader = $(this).closest(".fab-wizard").find(".wizard-step-header");
  wizardContainer.find(".wizard-step").slideUp("fast").removeClass("active");
  wizardContainer
    .find("." + toggleStep)
    .slideDown("fast")
    .addClass("active");
  if (!wizardHeader.find("." + toggleStep).hasClass("completed")) {
    wizardHeader
      .find("." + toggleStep)
      .prev()
      .addClass("completed")
      .removeClass("active");
    wizardHeader.find("." + toggleStep).addClass("active");
  }
});
$(".speciality_slick").slick({
  slidesToShow: 1,
  centerMode: false,
  arrows: false,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        slidesToShow: 1,
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

$(".clients_slick").slick({
  slidesToShow: 3.1,
  centerMode: true,
  centerPadding: "40px",
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        centerMode: false,
        slidesToShow: 1.2,
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

$(".projects_slick").slick({
  slidesToShow: 1,
  centerMode: true,
  centerPadding: "40px",
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        slidesToShow: 1,
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
  $(".mobile-menu-wrapper .btn-search").click(function () {
    $(".mobile-menu-wrapper .search-box input").css("visibility", "visible");
  });

  /* Element Animate */
  $(".animate__animated").scrolla({
    once: true,
  });

  //   /* Scroll Script */
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

function removeHandler() {
  window.removeEventListener("wheel", scrollDetect);
}

var count = 0;
function scrollDetect(event) {
  // let section = document.querySelector('.fabric-chooser');
  let popSection = document.querySelector(".hotspot-pop");

  const delta = Math.sign(event.deltaY);

  if (delta == -1) {
    $("body").css({ overflow: "scroll" });
    $(".hotspot-pop").addClass("invisible");
    $(".hotspot-pop").css({ left: "-901px" });
    removeHandler();
  }

  if (delta == 1) {
    $(".hotspot-pop").removeClass("invisible");
    $(".hotspot-pop").css({ left: "1px" });
  }

  if (ScrollTrigger.isInViewport(popSection)) {
    setTimeout(() => {
      $("body").css({ overflow: "scroll" });
      removeHandler();
    }, 1000);
  }
}

// ScrollTrigger.addEventListener("scrollStart", (e) => {
//    if()
// // });

// ScrollTrigger.batch(".our_clients .row>div .lg-n-container", {
//   onEnter: (elements) => {
//     gsap.from(elements, {
//       y: 200,
//       stagger: 0.25,
//       ease: "Power2.Out",
//       yoyo: true,
//     });
//   },
//   once: false,
// });

// ScrollTrigger.batch(".c-card", {
//   onEnter: (elements) => {
//     gsap.from(elements, {
//       y: 300,
//       stagger: 0.15,
//       ease: "Power2.Out",
//       start: "top 90%",
//       end: "top 40%",
//       yoyo: true,
//     });
//   },
//   once: false,
// });

gsap.utils.toArray(".contact-form-wrap").forEach((elem) => {
  let tl = gsap
    .timeline({
      scrollTrigger: {
        trigger: elem,

        yoyo: true,
      },
    })
    .from(elem, { y: 100, duration: 1, ease: "Power2.Out" });
});

// gsap.utils.toArray(".newsletter-wrap").forEach((elem) => {
//   let tl = gsap
//     .timeline({
//       scrollTrigger: {
//         trigger: elem,

//         yoyo: true,
//       },
//     })
//     .from(elem, {
//       width: 0,

//       duration: 1,
//       ease: "Power2.Out",
//     });
// });

$(".floating-line1").each(function () {
  const svg = gsap.timeline({
    scrollTrigger: {
      trigger: $(this),
      start: "top 80%",
      end: "bottom 100%", // end after scrolling 500px beyond the start
      scrub: true,
      yoyo: true,

      onEnter: () => $(this).find("#mainSVG").addClass("animate__svg"),
      onLeave: () => $(this).find("#mainSVG").removeClass("animate__svg"),
      onEnterBack: () => $(this).find("#mainSVG").addClass("animate__svg"),
      onLeaveBack: () => $(this).find("#mainSVG").removeClass("animate__svg"),
    },
  });
});

$(".floating-line-3").each(function () {
  const svg = gsap.timeline({
    scrollTrigger: {
      trigger: $(this),
      start: "top 80%",
      end: "bottom -100%", // end after scrolling 500px beyond the start

      onEnter: () => $(this).find("#mainSVG3").addClass("animate__svg3"),
      onLeave: () => $(this).find("#mainSVG3").removeClass("animate__svg3"),
      onEnterBack: () => $(this).find("#mainSVG3").addClass("animate__svg3"),
      onLeaveBack: () => $(this).find("#mainSVG3").removeClass("animate__svg3"),
    },
  });
});

$(".has-mega-menu .item").on("click", function (event) {
  $(this).closest(".has-mega-menu").toggleClass("mega-menu-open");
  $(this).closest(".has-mega-menu").siblings().removeClass("mega-menu-open");

  $(this).closest(".has-mega-menu").find(".mega-menu").slideToggle(300);
  $(this).closest(".has-mega-menu").siblings().find(".mega-menu").slideUp(300);
});

$(".btn-burger, .mobile-menu-close").on("click", function (event) {
  $("body").toggleClass("menu-open");
});
