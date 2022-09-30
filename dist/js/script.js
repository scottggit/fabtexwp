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

gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.defaults({
  toggleActions: "restart pause resume pause",
});

const sections = gsap.utils.toArray("section");

let snap = ScrollTrigger.create({
  trigger: ".first",
  start: "top top+=60",
  endTrigger: ".last",
  end: "bottom bottom+=100",
  scrub: 1,
  onUpdate: (e) => {
    if(e.progress > 0.3 && e.progress < 0.4)
    {
      $('body').css({'overflow': 'hidden'});
      window.addEventListener("wheel", scrollDetect);
    }
  },
  snap: {
    snapTo: 1 / (sections.length - 1),
    delay: 0.1,
    duration: { min: 0.2, max: 0.2 }, // the snap animation should be at least 0.25 seconds, but no more than 0.75 seconds (determined by velocity)
    ease: "power1.inOut", // the ease of the snap animation ("power3" by default)
  },
});

function removeHandler() {
  window.removeEventListener("wheel", scrollDetect);
}

var count = 0;
function scrollDetect(event)
{
    // let section = document.querySelector('.fabric-chooser');
    let popSection = document.querySelector('.hotspot-pop');

    const delta = Math.sign(event.deltaY);

    if(delta == -1){
      $('body').css({'overflow': 'scroll'});
      $('.hotspot-pop').addClass('invisible');
      $('.hotspot-pop').css({'left': '-901px'})
      removeHandler();
    }

    if(delta == 1)
    {
      $('.hotspot-pop').removeClass('invisible');
      $('.hotspot-pop').css({'left': '1px'});

    }

    if(ScrollTrigger.isInViewport(popSection)){
      setTimeout(() => {
          $('body').css({'overflow': 'scroll'});
          removeHandler();
      }, 1000)
    }

}

// ScrollTrigger.addEventListener("scrollStart", (e) => {
//    if()
// });

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
