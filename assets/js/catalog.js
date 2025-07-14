$(document).ready(function() {
  if ($(".catalog_search_item").length == 0) {
    $(".catalog_search").hide();
  }
  if ($(".video_search_item").length == 0) {
    $(".video_search").hide();
  }
  $('.video_search_item .video_search_item_img, .video_search_item .video_catalog_search_item_title').on('click', function() {
    let oem_modal = $(this).parent('.video_search_item').attr('id');
    oem_modal = '.' + oem_modal;
    $(oem_modal).stop().fadeIn();
  });

  $(".modal_cancel").on('click', function() {
    $(".modal").stop().fadeOut();
  });

  // let oem_iframe_src = $('.modal_main_content iframe').attr('src');
  // oem_iframe_src = oem_iframe_src + '?enablejsapi=1';
  // $('.modal_main_content iframe').attr('src', oem_iframe_src);

  $(".modal_cancel").on('click', function() {
    var count = 0;
    $('.modal_main_content iframe').each(function(index) {
      videoControl("pauseVideo");

      function videoControl(action) {
        var playerWindow = $(".modal_main_content iframe")[count].contentWindow;
        playerWindow.postMessage(
          '{"event":"command","func":"' + action + '","args":""}',
          "*"
        );
      }
      count += 1;
    });
  });

  $(".modal_cancel").on('click', function() {
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
