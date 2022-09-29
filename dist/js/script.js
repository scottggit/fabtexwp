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

gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.defaults({
  toggleActions: "restart pause resume pause",
});

const sections = gsap.utils.toArray("section");

ScrollTrigger.create({
  trigger: ".first",
  start: "top top-=100",
  endTrigger: ".last",
  end: "bottom bottom+=100",

  //snap: 1 / (sections.length - 1)

  snap: {
    snapTo: 1 / (sections.length - 1),
    duration: { min: 0.25, max: 0.75 }, // the snap animation should be at least 0.25 seconds, but no more than 0.75 seconds (determined by velocity)
    delay: 0.125, // wait 0.125 seconds from the last scroll event before doing the snapping
    ease: "power1.inOut", // the ease of the snap animation ("power3" by default)
  },
});

ScrollTrigger.batch(".our_clients .row>div .lg-n-container", {
  onEnter: (elements) => {
    gsap.from(elements, {
      y: 200,
      stagger: 0.25,
      ease: "Power2.Out",
      yoyo: true,
    });
  },
  once: false,
});

ScrollTrigger.batch(".c-card", {
  onEnter: (elements) => {
    gsap.from(elements, {
      y: 300,
      stagger: 0.15,
      ease: "Power2.Out",
      start: "top 90%",
      end: "top 40%",
      yoyo: true,
    });
  },
  once: false,
});

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

gsap.utils.toArray(".newsletter-wrap").forEach((elem) => {
  let tl = gsap
    .timeline({
      scrollTrigger: {
        trigger: elem,

        yoyo: true,
      },
    })
    .from(elem, {
      width: 0,

      duration: 1,
      ease: "Power2.Out",
    });
});
