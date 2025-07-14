$(document).ready(function() {

    // Header PC Navigation
    document.querySelectorAll('.newHeader__linksItemWithContent').forEach((element, i) => {
      let arrow = element.querySelector('.newHeader__iconArrow');
      let navNew = $(element.querySelector('.newHeader__linksNewNav'));
      if(arrow != null && navNew != null){
        $(element).mouseover(function() {
           arrow.style.display = 'block';
           navNew.stop().fadeIn(250);
        });

        $(element).mouseout(function() {
            arrow.style.display = 'none';
            navNew.stop().fadeOut(250);
        })
      }
    });


    // Header SP Burger Menu
    $('.newHeader__burgMenu').click(function() {
      if($('.newHeader__navSPContent') != null){
        $('.newHeader__navSPContent').stop().slideToggle();
      }
    });

// Header & Footer SP title menu
$(window).on('resize', function() {
  if (document.querySelectorAll('.navTextPC') != null) {
    document.querySelectorAll('.navTextPC').forEach(element => {
      if (window.innerWidth > 767) {
        // PCサイズ時の処理
        $(element.querySelector('.navListSP')).stop().slideDown();
        element.querySelector('.arrowSP')?.classList.add('arrowIs-active'); // クラス名を確実に追加
        setTimeout(() => {
          if (element.querySelector('.navListSP')) {
            element.querySelector('.navListSP').style.height = '100%';
          }
        }, 500);
      } else {
        // SPサイズ時の処理
        $(element.querySelector('.navListSP')).stop().slideUp();
        element.querySelector('.arrowSP')?.classList.remove('arrowIs-active'); // クラス名を確実に削除
        if (element.querySelector('.arrowSP')) {
          element.querySelector('.arrowSP').style.transform = 'rotate(180deg)';
        }
      }
    });
  }
});

// SPメニューのクリックイベント
document.querySelectorAll('.navTextSP').forEach(element => {
  if (
    element.querySelector('.titleSP') != null &&
    element.querySelector('.navListSP') != null &&
    element.querySelector('.arrowSP') != null
  ) {
    $(element.querySelector('.titleSP')).click(function() {
      if (window.innerWidth <= 767) {
        $(element.querySelector('.navListSP')).stop().slideToggle();
        $(element.querySelector('.arrowSP')).toggleClass('arrowIs-active');
      }
    });
  }
});

    // // Header & Footer SP title menu
    // $(window).on('resize', function() {
    //   if(document.querySelectorAll('.navTextPC') != null){
    //     document.querySelectorAll('.navTextPC').forEach(element => {
    //       if(window.innerWidth > 767) {
    //         $(element.querySelector('.navListSP')).stop().slideDown();
    //         $(element.querySelector('.arrowSP')).toggleClass('arrowIs-active');
    //         setTimeout(() => {
    //           element.querySelector('.navListSP').style.height = '100%';
    //         }, 500)

    //       }else{
    //         $(element.querySelector('.navListSP')).stop().slideUp();
    //         $(element.querySelector('.arrowSP')).removeClass('arrowIs-active')
    //         element.querySelector('.arrowSP').style.transform = 'rotate(180deg)'
    //       }
    //     })
    //   }

    // })

    // document.querySelectorAll('.navTextSP').forEach(element => {

    //   // Show all nav first
    //   // $(element.querySelector('.navListSP')).stop().slideToggle();
    //   // $(element.querySelector('.arrowSP')).toggleClass('arrowIs-active');

    //   if(element.querySelector('.titleSP') != null && element.querySelector('.navListSP') != null &&
    //   element.querySelector('.arrowSP') != null){
    //     $(element.querySelector('.titleSP')).click(function() {
    //       if(window.innerWidth <= 767) {
    //         $(element.querySelector('.navListSP')).stop().slideToggle();
    //         $(element.querySelector('.arrowSP')).toggleClass('arrowIs-active');
    //       }
    //     })
    //   }
    // });


    // Swiper Slider
    let swiperClass = document.querySelectorAll('.swiper-container');
    if (swiperClass.length > 0) {
        const slider01 = new Swiper('.swiper-container', {
            direction: 'horizontal',
            autoplay: {
              delay: 3000,
              disableOnInteraction: false,
              waitForTransition: false,
            },
            speed: 300,
            loop: true,
            spaceBetween: 0,
            simulateTouch: true,
            slidesPerView: 1,
            preloadImages: false,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
        });
    }


});