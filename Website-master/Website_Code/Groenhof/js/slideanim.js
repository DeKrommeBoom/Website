$(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
  
      var winTop = $(window).scrollTop();
      if (pos < winTop + 800) {
        $(this).addClass("slide");
      }
    });
  });

  window.onbeforeunload = function () {
    window.scrollTo(0, 0);
  }