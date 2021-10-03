document.addEventListener("DOMContentLoaded", function() {
  const mySwiper = new Swiper('.swiper', {
    // オプションのパラメーターを指定
    direction: 'horizontal',
    effect: "slide",
    loop: true,
    speed: 800,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: true,
    },
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});