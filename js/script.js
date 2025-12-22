(function ($) {

  "use strict";

  $(document).ready(function () {
    //  Header sticky
    const headerSticky = function () {
      const header = document.querySelector('#header');
      if (!header) return;
      const trigHeight = 1;

      window.addEventListener('scroll', function () {
        let tj = window.scrollY;

        if (tj > trigHeight) {
          header.classList.add('sticky');
          header.classList.remove('border-bottom');
        } else {
          header.classList.remove('sticky');
          header.classList.add('border-bottom');
        }
      });
    };

    $(".youtube").colorbox({
      iframe: true,
      innerWidth: 960,
      innerHeight: 585
    });

    // document ready
    $(document).ready(function () {
      headerSticky();
      initSlider();
    }); // document ready   

  }); // End of a document




document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".collection-slider");
  const track = document.querySelector(".collection-track");
  const slides = Array.from(track.children);

  let index = 0;
  let startX = 0;
  let isDragging = false;
  let autoTimer;

  function slideWidth() {
    return slides[0].getBoundingClientRect().width;
  }

  function maxIndex() {
    const visible = Math.round(slider.offsetWidth / slideWidth());
    return Math.max(0, slides.length - visible);
  }

  function setPosition(animate = true) {
    track.style.transition = animate ? "transform 0.4s ease" : "none";
    track.style.transform = `translateX(-${index * slideWidth()}px)`;
  }

  function clampIndex() {
    if (index < 0) index = 0;
    if (index > maxIndex()) index = maxIndex();
  }

  function startAuto() {
    stopAuto();
    autoTimer = setInterval(() => {
      index = index >= maxIndex() ? 0 : index + 1;
      setPosition();
    }, 3500);
  }

  function stopAuto() {
    clearInterval(autoTimer);
  }

  function dragStart(x) {
    startX = x;
    isDragging = true;
    stopAuto();
  }

  function dragEnd(x) {
    if (!isDragging) return;

    const diff = startX - x;
    if (Math.abs(diff) > 60) {
      diff > 0 ? index++ : index--;
    }

    clampIndex();
    setPosition();
    isDragging = false;
    startAuto();
  }

  // Touch
  slider.addEventListener("touchstart", e => dragStart(e.touches[0].clientX));
  slider.addEventListener("touchend", e => dragEnd(e.changedTouches[0].clientX));

  // Mouse
  slider.addEventListener("mousedown", e => dragStart(e.clientX));
  slider.addEventListener("mouseup", e => dragEnd(e.clientX));
  slider.addEventListener("mouseleave", () => (isDragging = false));

  window.addEventListener("resize", () => {
    index = 0;
    setPosition(false);
  });

  // INIT (ONLY ONCE)
  setTimeout(() => {
    index = 0;
    setPosition(false);
    startAuto();
  }, 50);
});






var initSlider = function () {

  var swiper = new Swiper(".product-swiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    loopedSlides: 4,          // 🔥 THIS FIXES RIGHT ARROW
    loopAdditionalSlides: 4,
    watchOverflow: false,
    navigation: {
      nextEl: '.icon-caret-arrow.right-side',
      prevEl: '.icon-caret-arrow.left-side',
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      580: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      800: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1299: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
    },
  });

  var swiper = new Swiper(".review-swiper", {
    spaceBetween: 30,
    loop: true,
    loopedSlides: 1,
    watchOverflow: false,
    navigation: {
      nextEl: '.icon-arrow.right-side',
      prevEl: '.icon-arrow.left-side',
    },
  });

};



  // window load
  $(window).load(function () {
    $(".preloader").fadeOut("slow");
  })


  // Product Quantity
  var initProductQty = function () {
    $('.product-qty').each(function () {

      var $el_product = $(this);
      var quantity = 0;

      $el_product.find('.quantity-right-plus').click(function (e) {
        e.preventDefault();
        var quantity = parseInt($el_product.find('#quantity').val());
        $el_product.find('#quantity').val(quantity + 1);
      });

      $el_product.find('.quantity-left-minus').click(function (e) {
        e.preventDefault();
        var quantity = parseInt($el_product.find('#quantity').val());
        if (quantity > 0) {
          $el_product.find('#quantity').val(quantity - 1);
        }
      });

    });
  }


  // document ready
  $(document).ready(function () {
    initSlider();
    initProductQty();
  }); // document ready

})(jQuery);
