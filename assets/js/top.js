$(document).ready(function() {
  $(".top_mv_lists").slick({
    infinite: true,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $(".top_video_btn").on('click', function() {
    $(".modal_top").stop().fadeIn();
  });

  $(".modal_oem_btn").on('click', function() {
    $(".modal_oem").stop().fadeIn();
  });

  $(".modal_cancel").on('click', function() {
    $(".modal").stop().fadeOut();
    var count = 0;
    $('.modal_main_content video').each(function(index) {
      var video = $('.modal_main_content video').get(count);
      video.pause();
      count += 1;
    });
  });

  $(".modal_back").on('click', function() {
    $(".modal").stop().fadeOut();
  });

});
