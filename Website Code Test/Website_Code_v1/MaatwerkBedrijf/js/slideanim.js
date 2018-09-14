$(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
  
      var winTop = $(window).scrollTop();
      if (pos < winTop + 800) {
        $(this).addClass("slide");
      }
    });
  });
  
  $(window).scroll(function() {
    $(".anim").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
      if (pos < winTop + 700) {
        $(this).addClass("animated pulse");
      }
    });
  });

  $(window).scroll(function() {
    $(".anim1").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
      if (pos < winTop + 900) {
        $(this).addClass("animated bounceInLeft");
      }
    });
  });
  
  $('#blogCarousel').carousel({
    interval: 5000
});

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

$(function() {
  $('img').on('click', function() {
      $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
      $('#enlargeImageModal').modal('show');
  });
});