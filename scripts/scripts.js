$ = jQuery.noConflict();

$(document).ready(function () {
  AOS.init();
  $(".sandwich").click(function () {
    $(".sandwich").toggleClass("active");
    $(".container-nav").toggleClass("active");
  });

  $("a").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top,
        },
        1000,
        function () {
          window.location.hash = hash;
        }
      );
    }
  });

  $(".input-field").focusin(function (e) {
    $(this).addClass("active");
  });

  $(".input-field").focusout(function (e) {
    if (
      $(this).find(".wpcf7-form-control-wrap input").attr("value").length <= 0
    ) {
      $(this).removeClass("active");
    } else if (
      $(this).find(".wpcf7-form-control-wrap input").attr("value").length >= 0
    ) {
      $(this).addClass("active");
    }
  });
  $("#quienes").fadeIn("slow");
  $(".btn-quien").click(function () {
    console.log(this);
    $(this).addClass("active");
    var item = $(this).data("slide");
    $("#" + item).fadeIn();
    $("#" + item)
      .siblings()
      .fadeOut();

    $(this).parent().siblings().find("a").removeClass("active");
  });
  function addCarousel(
    element,
    index,
    number,
    mover,
    margin,
    itemstablet,
    loop,
    flechas,
    dots,
    autoplay,
    velocidad,
    animateIn,
    animateOut,
    autoWidth,
    slideBy,
    autoWidthMobile,
    margindesktop
  ) {
    $("." + element + ".owl-carousel").owlCarousel({
      loop: loop,
      margin: margin,
      nav: flechas,
      dots: dots,
      autoplay: autoplay,
      mouseDrag: mover,
      startPosition: index,
      autoplayTimeout: velocidad || 3000,
      animateOut: animateOut,
      animateIn: animateIn,
      autoWidth: autoWidthMobile,
      items: number,
      slideBy: slideBy || 1,
      responsive: {
        0: {
          items: 1,
          mouseDrag: false,
          autoWidth: autoWidthMobile,
        },
        600: {
          items: itemstablet,
          mouseDrag: false,
          autoWidth: autoWidth,
          margin: margindesktop,
        },
        1000: {
          items: itemstablet,
          autoWidth: autoWidth,
          margin: margindesktop,
        },
      },
    });
  }
  $(".cotiza").click(function () {
    var product = $(".hero-product__text h2").text();
    $(".product-field input").attr("value", product);
    $(".product-field").addClass("active");

    $("#modalCotiza").addClass("active");
  });
  $(".hero-hecsel__down").click(function () {
    $(this).data("location");

    var location = $(this).data("location");
    if (window.matchMedia("(min-width:768px)").matches) {
      $("html, body").animate(
        {
          scrollTop: $("#" + location).offset().top,
        },
        "slow"
      );
    } else {
      $("html, body").animate(
        {
          scrollTop: $("#" + location).offset().top - 64,
        },
        "slow"
      );
    }
  });

  $(".close").click(function () {
    var modal = $(".close").data("modal");
    $("#" + modal).removeClass("active");
  });

  $(".overlay").click(function () {
    var modal = $(".close").data("modal");
    $("#" + modal).removeClass("active");
  });

  $(".btn-form").click(function () {
    var modal = $(".close").data("modal");
    $("#" + modal).addClass("active");
  });
  var owl = $(".slider-members");

  owl.on("next.owl.carousel", function (event) {
    var pos = parseInt($(".pageinitial").html()) + 1;
    if (pos < 3) {
      $(".pageinitial").html(pos);
    }
  });
  owl.on("prev.owl.carousel", function (event) {
    var posEnd = parseInt($(".pageinitial").html()) - 1;
    if (posEnd > 0) {
      $(".pageinitial").html(posEnd);
    }
  });

  $(".arrowNext").click(function () {
    owl.trigger("next.owl.carousel");
  });
  $(".arrowPrev").click(function () {
    owl.trigger("prev.owl.carousel", [300]);
  });
  addCarousel(
    "products-home__container",
    0,
    1,
    true,
    16,
    3,
    true,
    false,
    false,
    true,
    5000,
    "",
    "",
    true,
    "",
    "",
    32
  );
  addCarousel(
    "projects-home__container",
    0,
    1,
    true,
    16,
    4,
    false,
    false,
    true,
    false,
    3000,
    "",
    "",
    true,
    "",
    "",
    32
  );
  addCarousel(
    "service-home__container",
    0,
    1,
    true,
    16,
    4,
    false,
    false,
    true,
    false,
    3000,
    "",
    "",
    true,
    "",
    "",
    32
  );
  addCarousel(
    "sponsors__container",
    0,
    2,
    true,
    16,
    4,
    false,
    false,
    true,
    false,
    3000,
    "",
    "",
    true,
    "",
    "",
    32
  );
  addCarousel(
    "our-services__container",
    0,
    1,
    true,
    16,
    6,
    false,
    false,
    true,
    false,
    3000,
    "",
    "",
    true,
    1,
    false,
    32
  );
  addCarousel(
    "asked-question__container",
    0,
    1,
    true,
    16,
    3,
    false,
    false,
    true,
    false,
    3000,
    "",
    "",
    true,
    1,
    false,
    16
  );
  addCarousel(
    "slider-members",
    0,
    1,
    true,
    16,
    4,
    false,
    false,
    true,
    false,
    3000,
    "",
    "",
    true,
    "",
    "",
    32
  );
  addCarousel(
    "enginer-solutions_carousel",
    0,
    1,
    true,
    0,
    1,
    false,
    false,
    false,
    false,
    3000,
    "",
    "",
    false,
    "",
    "",
    0
  );

  var owl = $(".enginer-solutions_carousel");
  owl.on("changed.owl.carousel", function (event) {
    console.log(event.item.index);
    if (event.item.index === 0) {
      $("#gruaportico").addClass("active");
      $("#gruaportico").siblings().removeClass("active");
    }
    if (event.item.index === 1) {
      $("#gruapescante").addClass("active");
      $("#gruapescante").siblings().removeClass("active");
    }
    if (event.item.index === 2) {
      $("#puentegrua").addClass("active");
      $("#puentegrua").siblings().removeClass("active");
    }
  });
  $("#gruaportico").click(function () {
    $(".enginer-solutions_carousel").trigger("to.owl.carousel", [0, 500]);
  });

  $("#gruapescante").click(function () {
    $(".enginer-solutions_carousel").trigger("to.owl.carousel", [1, 500]);
  });

  $("#puentegrua").click(function () {
    $(".enginer-solutions_carousel").trigger("to.owl.carousel", [2, 500]);
  });

  if (window.matchMedia("(max-width: 768px)").matches) {
    $("#menu-item-307").click(function () {
      $(".container-nav").addClass("open-submenu");
    });

    $(".portico").addClass("owl-carousel owl-theme");
    addCarousel(
      "portico",
      0,
      1,
      false,
      40,
      4,
      true,
      false,
      false,
      true,
      3000,
      false
    );

    $(".pescante").addClass("owl-carousel owl-theme");
    addCarousel(
      "pescante",
      0,
      1,
      false,
      40,
      4,
      true,
      false,
      false,
      true,
      3000,
      false
    );

    $(".puente-grua").addClass("owl-carousel owl-theme");
    addCarousel(
      "puente-grua",
      0,
      1,
      false,
      40,
      4,
      true,
      false,
      false,
      true,
      3000,
      false
    );

    if ($(".cards-container")) {
      $(".cards-container").addClass("owl-carousel owl-theme");
      addCarousel(
        "cards-container",
        0,
        1,
        false,
        40,
        4,
        false,
        false,
        true,
        false,
        3000,
        false
      );
    }

    $(".valores").addClass("owl-carousel owl-theme");
    addCarousel("valores", 0, 1, true, 0, 2, false, false, true, true, 3000);

    $(".servicios").addClass("owl-carousel owl-theme");

    addCarousel(
      "servicios",
      0,
      1,
      true,
      20,
      1,
      false,
      false,
      true,
      false,
      3000
    );
  } else {
    /* La pantalla tiene menos de 400 píxeles de ancho */
  }

  $(".bio").click(function (e) {
    var bio = e.target.parentNode.parentNode.getAttribute("id");
    var title = $("#" + bio)
      .find(".member__name")
      .html();
    var contenido = $("#" + bio)
      .find(".member__content")
      .html();
    var image = $("#" + bio + " .img").data("image");
    var cargo = $("#" + bio)
      .find(".member__position")
      .html();
    var empresa = $("#" + bio)
      .find(".member__work")
      .html();

    $("#modalMiembro .modal-content .text h3").html(title);
    $("#modalMiembro .modal-content .text span").html(cargo + " - " + empresa);
    $("#modalMiembro .modal-content .text .contenido-bio").html(contenido);
    document.querySelector(
      "#modalMiembro .modal-content .imagen"
    ).style.background = "url(" + image + `)`;
    $("#modalMiembro").addClass("active");
  });

  $(".asked-question__container__item").click(function (e) {
    var title = $(this).find(".question").html();
    var contenido = $(this).find(".member__answer").html();
    var image = $(this).find("img").attr("src");

    $("#modalQuestion .modal-content .text h3").html(title);
    $("#modalQuestion .modal-content .text .contenido-bio").html(contenido);
    document.querySelector(
      "#modalQuestion .modal-content .imagen"
    ).style.background = "url(" + image + `)`;
    $("#modalQuestion").addClass("active");
  });
});
