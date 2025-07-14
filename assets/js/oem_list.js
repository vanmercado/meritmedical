$(document).ready(function() {
  $('.oem_category_item_video_link').on('click', function() {
    let oem_modal = $(this).attr('id');
    oem_modal = '.' + oem_modal;
    $(oem_modal).stop().fadeIn();
  });

  $(".modal_cancel").on('click', function() {
    $(".modal").stop().fadeOut();
  });

  let oem_iframe_src = $('.modal_main_content iframe').attr('src');
  oem_iframe_src = oem_iframe_src + '?enablejsapi=1';
  $('.modal_main_content iframe').attr('src', oem_iframe_src);

  $(".modal_cancel").on('click', function() {
    videoControl("pauseVideo");

    function videoControl(action) {
      var playerWindow = $(".modal_main_content iframe")[0].contentWindow;
      playerWindow.postMessage(
        '{"event":"command","func":"' + action + '","args":""}',
        "*"
      );
    }
  });

  $(".modal_cancel").on('click', function() {
    var video = $('.modal_main_content video').get(0);
    console.log(video);
    video.pause();
  });

  $(".modal_back").on('click', function() {
    $(".modal").stop().fadeOut();
  });
});
