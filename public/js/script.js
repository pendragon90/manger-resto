// swiper start
$(document).ready(function() {
  var swiper = new Swiper('.swiper-trending', {
    slidesPerView: getSlidesPerView(),
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    }
  });

  var swiperInterval = setInterval(function() {
    swiper.slideNext();
  }, 2000);

  $(window).resize(function() {
    swiper.params.slidesPerView = getSlidesPerView();
    swiper.update();
  });

  function getSlidesPerView() {
    return $(window).width() < 576 ? 1 : 3;
  }
});

$(document).ready(function() {
  var swiper = new Swiper('.swiper-ulasan', {
    slidesPerView: getSlidesPerView(),
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    }
  });

  var swiperInterval = setInterval(function() {
    swiper.slideNext();
  }, 2000);

  $(window).resize(function() {
    swiper.params.slidesPerView = getSlidesPerView();
    swiper.update();
  });

  function getSlidesPerView() {
    return $(window).width() > 576 ? 3 : 1;
  }
});


// swiper end
