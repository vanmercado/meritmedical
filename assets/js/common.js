$(document).ready(function() {
  $('.header_right_nav_item').on({
    'mouseenter': function() {
      $('.header_right_nav_item_sub', this).stop().fadeIn();
    },
    'mouseleave': function() {
      $('.header_right_nav_item_sub', this).stop().fadeOut();
    }
  });

  $('.c_menu').on('click', function() {
    if ($(this).hasClass('is-open')) {
      $('.header_sp').stop().slideUp();
      $(this).removeClass('is-open');
    } else {
      $('.header_sp').stop().slideDown();
      $(this).addClass('is-open');
    }
  });

  $('.header_sp_lists_item.has_child').on('click', function() {
    $('.header_sp_lists_item_sub',this).stop().slideToggle();
    $(this).toggleClass('open');
  });

  var headerHeight = $('header').outerHeight();
  $('body').css('padding-top', headerHeight);

  $('a[href^="#"]').click(function() {
    var headerHeight = $('header').outerHeight();
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHeight;
    $('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });
  var urlHash = location.hash;
  if (urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function() {
      var headerHeight = $('header').outerHeight();
      var speed = 500;
      var target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');
    }, 500);
  }

  var topBtn = $('.page_top');
  topBtn.hide();
  $(window).scroll(function() {
    $(this).scrollTop() > 100 ? topBtn.fadeIn() : topBtn.fadeOut();
  });
  topBtn.on('click', function() {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
  $(window).on('scroll', function() {
    documentHeight = $(document).height();
    scrollPosition = $(this).height() + $(this).scrollTop();
    footerHeight = $('footer').innerHeight();
    footerHeight = footerHeight;

    if (documentHeight - scrollPosition <= footerHeight) {
      if ($(window).width() > 768) {
        $('.page_top').css({
          position: 'absolute',
          bottom: footerHeight
        });
      } else {
        $('.page_top').css({
          position: 'absolute',
          bottom: footerHeight
        });
      }
    } else {
      $('.page_top').css({
        position: 'fixed',
        bottom: 50
      });
    }
  });

});
