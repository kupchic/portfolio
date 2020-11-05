 new WOW().init();
 
 var mySwiper = new Swiper ('.swiper-container', {
    speed: 1000,
    loop:true,
    pagination: {
      el: '.swiper-pagination',
      clickable:true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 5000,
    },

});
