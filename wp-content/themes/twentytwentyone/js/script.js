(function ($, undefined) {
  $(window).scroll(function () {
    /* Скроллировать фоновые слои с разной скоростью */
    let winTop = $(window).scrollTop();
    let pos = "center " + (-90 - winTop * 0.5) + "px";
    $(".mars").css("background-position", pos);

    $(".mov_slideInRight").each(function () {
      // для кожного блоку с класом mov_slideInRight
      var pos = $(this).offset().top; // зчитуємо його координату по осі Y у вікні браузера
      if (pos < $(window).scrollTop() + 600) {
        //якщо до верху сторінки залишається 600px,
        $(this).addClass("animate__animated animate__slideInRight"); // додаємо до блоку клас з анімацією slideInRight
      }
    });
  });
})(jQuery);
