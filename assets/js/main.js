$(document).ready(function () {
  var card_width = $(".single-rule-2 .img").width();

  $(".single-rule-2 .img").height(card_width - 40 + "px");
  //   $("#vectorOne").load("/assets/images/vectorOne.svg");
  $("#big-shape").load("/assets/images/big-shape.svg");
});
$(document).ready(function () {
  $("select:not(.ignore)").niceSelect();
});
$(".rating > input").on("change", function () {
  $(".single-page-review .btn-rate-box").slideDown();
});

var window_height;
var window_width;
var navbar_initialized = false;
var nav_toggle;

var offCanvas = {
  sidenav: {
    // Sidenav is not visible by default.
    // Change to 1 if necessary
    sidenav_visible: 0,
  },
  initSideNav: function initSideNav() {
    if (!navbar_initialized) {
      var $nav = $("nav");

      // Add the offcanvas class to the navbar if it's not initialized
      $nav.addClass("navbar-offcanvas");

      // Clone relevant navbars
      var $navtop = $nav.find(".navbar-top").first().clone(true);
      var $navbar = $nav.find(".navbar-collapse").first().clone(true);

      // Let's start with some empty vars
      var ul_content = "";
      var top_content = "";

      // Set min-height of the new sidebar to the screen height
      $navbar.css("min-height", window.screen.height);

      // Take the content of .navbar-top
      $navtop.each(function () {
        var navtop_content = $(this).html();
        top_content = top_content + navtop_content;
      });

      // Take the content of .navbar-collapse
      $navbar.children("ul").each(function () {
        var nav_content = $(this).html();
        ul_content = ul_content + nav_content;
      });

      // Wrap the new content inside an <ul>
      ul_content = '<ul class="navbar-nav sidebar-nav">' + ul_content + "</ul>";

      // Insert the html content into our cloned content
      $navbar.html(ul_content);
      $navtop.html(top_content);

      // Append the navbar to body,
      // and insert the content of the navicons navbar just below the logo/nav-image
      $("body").append($navbar);
      $(".nav-image").after($navtop);

      // Set the toggle-variable to the Bootstrap navbar-toggler button
      var $toggle = $(".navbar-toggler");

      // Add/remove classes on toggle and set the visiblity of the sidenav,
      // and append the overlay. Also if the user clicks the overlay,
      // the sidebar will close
      $toggle.on("click", function () {
        if (offCanvas.sidenav.sidenav_visible == 1) {
          $("html").removeClass("nav-open");
          offCanvas.sidenav.sidenav_visible = 0;
          $("#overlay").remove();
          setTimeout(function () {
            $toggle.removeClass("toggled");
          }, 300);
        } else {
          setTimeout(function () {
            $toggle.addClass("toggled");
          }, 300);

          // Add the overlay and make it close the sidenav on click
          var div = '<div id="overlay"></div>';
          $(div)
            .appendTo("body")
            .on("click", function () {
              $("html").removeClass("nav-open");
              offCanvas.sidenav.sidenav_visible = 0;
              $("#overlay").remove();
              setTimeout(function () {
                $toggle.removeClass("toggled");
              }, 300);
            });

          $("html").addClass("nav-open");
          offCanvas.sidenav.sidenav_visible = 1;
        }
      });
      // Set navbar to initialized
      navbar_initialized = true;
    }
  },
};

$(document).ready(function () {
  window_width = $(window).width();

  nav_toggle = $("nav").hasClass("navbar-offcanvas") ? true : false;

  // Responsive checks
  if (window_width < 992 || nav_toggle) {
    offCanvas.initSideNav();
  }

  // Close the sidebar if the user clicks a link or a dropdown-item,
  // and close the sidebar
  $(".nav-link:not(.dropdown-toggle), .dropdown-item").on("click", function () {
    var $toggle = $(".navbar-toggler");

    $("html").removeClass("nav-open");
    offCanvas.sidenav.sidenav_visible = 0;
    setTimeout(function () {
      $toggle.removeClass("toggled");
    }, 300);
  });
});

$(window).resize(function () {
  window_width = $(window).width();

  // More responsive checks if the user resize the browser
  if (window_width < 992) {
    offCanvas.initSideNav();
  }

  if (window_width > 992 && !nav_toggle) {
    $("nav").removeClass("navbar-offcanvas");
    offCanvas.sidenav.sidenav_visible = 1;
    navbar_initialized = false;
  }
});

$(window).on("load", function () {
  let vector_1 = gsap.timeline({
    // yes, we can add it to an entire timeline!
    scrollTrigger: {
      trigger: "#vectorOne",
    },
    repeat: 5,
    repeatDelay: 2,
  });

  vector_1.to("#tablee", { duration: 1.5, x: 0, y: 0 });

  vector_1.to("#person_and_cheir", {
    duration: 1.5,
    x: 0,
    y: 0,
  });
  vector_1.to("#laptop", {
    duration: 1.5,
    x: 181,
    y: 371,
  });
  let vector_2 = gsap.timeline({
    // yes, we can add it to an entire timeline!
    scrollTrigger: {
      trigger: "#vectorTwo",
    },
    // repeat: 5,
    // repeatDelay: 2,
  });
  let message = gsap.timeline({
    // yes, we can add it to an entire timeline!

    repeat: -1,
    repeatDelay: 0,
  });
  vector_2.to("#backshadows", { duration: 0.5, x: 0, y: 0 });
  vector_2.to("#bottom-presons", { duration: 0.5, x: 0, y: 0 });
  vector_2.to("#top-backshadows", { duration: 0.5, x: 0, y: 0 });
  vector_2.to("#other-vector-2", { duration: 0.5, x: 0, y: 0 });
  vector_2.to("#woman-vector-2", { duration: 0.5, x: 0, y: 0 });
  vector_2.to("#man-vector-2", { duration: 0.5, x: 0, y: 0 });
  vector_2.to("#messages-vector-2", { duration: 0.5, x: 0, y: 0 });

  message.to(".vector-message", { duration: 1.5, x: 0, y: 20 });
  message.to(".vector-message", { duration: 1.5, x: 0, y: 5 });


});
