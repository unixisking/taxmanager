jQuery(document).ready(function ($) {
  "use strict";
  //  //***************************
  //  // Sticky Header Function
  //  //***************************
  
  //***************************
  // BannerOne Functions
  //***************************
  jQuery(".testimonial-slider").slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 3000,
	infinite: true,
	dots: true,
	arrows: false,
	// prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
	// nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
	fade: false,
	responsive: [
	  {
		breakpoint: 1024,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  infinite: true,
		},
	  },
	  {
		breakpoint: 800,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		},
	  },
	  {
		breakpoint: 400,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		},
	  },
	],
  });
  
  // initianlizing nice scroll
  $("html").niceScroll();

  // setting  nice scroll

  $("body").niceScroll({
	  cursorcolor: "#E0C56E", // change cursor color in hex
	  cursoropacitymin: 0, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
	  cursoropacitymax: 1, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
	  cursorwidth: "5px", // cursor width in pixel (you can also write "5px")
	  cursorborder: "5px solid #E0C56E", // css definition for cursor border
	  cursorborderradius: "5px", // border radius in pixel for cursor
	  scrollspeed: 10, // scrolling speed
	  mousescrollstep: 10, // scrolling speed with mouse wheel (pixel)
  });
  
  // Scrolling to the top of page 

  $('#uptoTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
  });


  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 170) {
      jQuery("body").addClass("tax-sticky");
    } else {
      jQuery("body").removeClass("tax-sticky");
    }
  });

  $(".nav-mega-menu").parent("li").addClass("icon");
  $(".nav-dropdown").parent("li").addClass("icon");

  // playing the video
  $("#btn-play").on("click", function () {
    $("#btn-play").fadeOut(1000);
    $("#video").css("display", "block");
    $("#video").trigger("play");
    $(".border-img").css("backgroundColor", "#D2D9DB");
  });

  // pause the video
  $("#video").on("click", function () {
    $("#btn-play").fadeIn(200);
    $("#video").trigger("pause");
    $("#video").css("display", "none");
    $(".border-img").css("backgroundColor", "transparent");
  });

  var path = window.location.pathname.split("/").pop();
  var target = $('a[href="' + path + '"]');
  target.addClass("active");
  target.parents("li.tax-side-dropdown").addClass("active");

  $(".tax-side-dropdown").click(function () {
    $(".tax-side-dropdown").not($(this)).removeClass("active");
    $(this).toggleClass("active");
  });

  jQuery(".icon").on("click", function () {
    jQuery(".nav-mega-menu").slideToggle("slow");
  });

  jQuery(".icon.b > .nav-link").on("click", function () {
    var width = $(window).width();
    if (width < 767) {
      jQuery(".nav-dropdown.b").slideToggle("slow");
      return false;
    }
  });

  jQuery(".icon.a > .nav-link").on("click", function () {
    var width = $(window).width();
    if (width < 767) {
      jQuery(".nav-dropdown.a").slideToggle("slow");
      return false;
    }
  });

  //***************************
  // SearchToggle Function
  //***************************
  jQuery(".ec-search-popup-btn").on("click", function () {
    jQuery(".ec-search-popup").slideToggle("slow");
    return false;
  });

  jQuery(".tax-fr").on("click", function () {
    jQuery(".lang").slideToggle("slow");
    return false;
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
});

// Add smooth scrolling to all links
$("a.bottom-scroll").on("click", function (event) {
  if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $("html, body").animate(
      {
        scrollTop: $(hash).offset().top,
      },
      1000,
      function () {}
    );
    return false;
  } // End if
});

$("#contact-form,#contact-form-1").validate({
  rules: {
    name: {
      required: true,
    },
    email: {
      required: true,
      email: true,
    },
    phone_number: {
      required: true,
      number: true,
    },
    subject: {
      required: true,
    },
    message: {
      required: true,
    },
  },
  messages: {
    name: {
      required: "Please provide a name",
    },
    email: {
      required: "Please provide an email",
      email: "Please enter valid email address",
    },
    phone_number: {
      required: "Please provide phone number",
      email: "Please enter only number",
    },
    subject: {
      required: "Please provide a subject",
    },
    message: {
      required: "Please provide a message",
    },
  },
});

$("#n_letter").validate({
  rules: {
    n_email: {
      required: true,
      email: true,
      maxlength: 100,
    },
  },
  messages: {
    n_email: {
      required: "Please provide an email",
      email: "Please enter valid email address",
      maxlength: "Max 100 characters are allowed",
    },
  },
});
$("#n_letter_1").validate({
  rules: {
    n_email: {
      required: true,
      email: true,
      maxlength: 100,
    },
  },
  messages: {
    n_email: {
      required: "Please provide an email",
      email: "Please enter valid email address",
      maxlength: "Max 100 characters are allowed",
    },
  },
});