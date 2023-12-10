/*
   Template Name:  Logicraft | The Multi-Purpose HTML5 Template
   Author: tripples
   Author URI: https://themehunt.com/profile/Tripples
   Description:  Logicraft | The Multi-Purpose HTML5 Template
   Version: 1.0

	1. Fixed header
	2. Main slideshow
	3. Owl Carousel
	4. Images popup
	5. Counter
	6. Contact form
	7. Back to top
  
*/

jQuery(function ($) {
  "use strict";

  $(window).on("load", function () {
    checkScreenSize();
    menuFixed();
  });

  /* ----------------------------------------------------------- */
  /*  Fixed header
   /* ----------------------------------------------------------- */

  function menuFixed() {
    var wWidth = $(window).width();
    if (wWidth > 974) {
      if ($("#header-2 .site-nav-inner").length) {
        var sticky = $("#header-2 .site-nav-inner"),
          scroll = $(window).scrollTop();

        if (scroll >= 400) sticky.addClass("fixed");
        else sticky.removeClass("fixed");
      }
    }
  }
  $(document).on("scroll", function () {
    menuFixed();
  });

  /* ----------------------------------------------------------- */
  /*  Mobile Menu
   /* ----------------------------------------------------------- */

  $(".dropdown-menu li").on("click", function () {
    $(".dropdown-menu li").removeClass("active");
    $(this).addClass("active");
  });

  function checkScreenSize() {
    var newWindowWidth = $(window).width();
    if (newWindowWidth < 991) {
      $("li.nav-item a").on("click", function () {
        $(this).parent("li").find(".dropdown-menu").slideToggle();
        $(this).find("i").toggleClass("fa-angle-down fa-angle-up");
      });
    } else {
      $("li.nav-item a").on("click", function () {
        console.log("do nothing");
      });
    }
  }

  /* ----------------------------------------------------------- */
  /*  Main slideshow
   /* ----------------------------------------------------------- */

  $("#main-slide").carousel({
    pause: true,
    interval: 6000,
  });

  /* ----------------------------------------------------------- */
  /*  Owl Carousel
   /* ----------------------------------------------------------- */

  //Page slide

    $(".page-slider").owlCarousel({
      loop: true,
      autoplay: true,
      autoplayHoverPause: true,
      nav: true,
      margin: 0,
      dots: false,
      mouseDrag: true,
      touchDrag: true,
      smartSpeed: 800,
      navText: [
        "<i class='icon icon-left-arrow2'></i>",
        "<i class='icon icon-right-arrow2'></i>",
      ],
      items: 1,
      responsive: {
        0: {
          items: 1,
          nav: false,
        },
        600: {
          items: 1,
          nav: false,
        },
        1000: {
          items: 1,
          nav: true,
        },
      },
    });

  //Page slide
  $(".featured-cases-slide").owlCarousel({
    loop: false,
    autoplay: false,
    autoplayHoverPause: true,
    nav: true,
    margin: 0,
    dots: false,
    mouseDrag: true,
    touchDrag: true,
    smartSpeed: 900,
    navText: [
      "<i class='icon icon-left-arrow2'></i>",
      "<i class='icon icon-right-arrow2'></i>",
    ],
    items: 1,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      1000: {
        animateOut: "fadeOut",
      },
    },
  });

  /* ----------------------------------------------------------- */
  /*  Images popup
   /* ----------------------------------------------------------- */
  $(document).ready(function () {
    $(".gallery-popup").colorbox({
      rel: "gallery-popup",
      transition: "fade",
      innerHeight: "500",
    });

    $(".popup").colorbox({
      iframe: true,
      innerWidth: 600,
      innerHeight: 400,
    });
  });

  /* ----------------------------------------------------------- */
  /*  Counter
   /* ----------------------------------------------------------- */

  $(".counterUp").counterUp({
    delay: 10,
    time: 1000,
  });

  /* ----------------------------------------------------------- */
  /*  Back to top
   /* ----------------------------------------------------------- */

  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $("#back-to-top").fadeIn();
    } else {
      $("#back-to-top").fadeOut();
    }
  });

  // scroll body to 0px on click
  $("#back-to-top").on("click", function () {
    $("#back-to-top").tooltip("hide");
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      800
    );
    return false;
  });

  $("#back-to-top").tooltip("hide");

  /* ----------------------------------------------------------- */
  /*  Packery
   /* ----------------------------------------------------------- */

  if ($(".carrer-gallery-layout").length > 0) {
    $(".carrer-gallery-layout").packery({
      percentPosition: true,
      gutter: 10,
    });
  }
});
