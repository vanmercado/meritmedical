$(function () {
  if($(".main_content_first_left .slider .slick-img").length > 1){
    $(".slider").slick({
      autoplay: false,
      arrows: false,
    });
    $(".main_content_first_left .thumbnail-img").on("click",function(){
      let index=$(this).attr("data-slick-index");
      $(".main_content_first_left .slider").slick("slickGoTo",index);
    });
  } else {
    $(".main_content_first_left .slider").addClass('slider_single');
    $(".main_content_first_left .thumbnail").hide();
  }
});
