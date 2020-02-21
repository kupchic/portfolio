 new WOW().init();
 
 var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    // direction: 'vertical',
    // loop: true,
    speed: 1000,
    loop:true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable:true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    //   hideOnClick:false,
    //   hiddenClass:'swiper-button-hidden',
    //   disabledClass:'swiper-button-disable'
    },
    autoplay: {
      delay: 5000,
    },
   

})
