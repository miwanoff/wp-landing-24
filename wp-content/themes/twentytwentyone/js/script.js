(function ($, undefined) {
    $(function () {
      $("h2").css("color", "red");
    });
    $(window).scroll(function () {
      /* Скролювати фонові шари з різною швидкістю */
      var winTop = $(window).scrollTop();
      $(".home .mars").css(
        "background-position",
        "center" + -(winTop * 0.5) + "px"
      );
    });
  }) (jQuery);