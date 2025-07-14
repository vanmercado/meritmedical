$(document).ready(function(){
  $('.sub_album_slider').slick({
      infinite: true,
      dots: true,
      arrows: true,
      autoplay: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      prevArrow: '<button class="slide-arrow prev-arrow"></button>',
      nextArrow: '<button class="slide-arrow next-arrow"></button>',
      responsive: [
          {
            breakpoint: 767,
            settings: {
                centerPadding: "20px",
            }
          }
      ]
  });

  $(window).on("load resize scroll", function() {
    var width = $(window).width();
    if (width <= 768) {
      var slider_item_height = $('.sub_album_slider_item_img').outerHeight();
      var sub_album_arrow_top = slider_item_height / 2;
      $('.sub_album .slide-arrow').css('top', sub_album_arrow_top + 'px');
    }
  });
});
