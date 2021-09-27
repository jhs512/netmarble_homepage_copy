function SwiperBox1__init() {
  const swiper = new Swiper(".swiper-box-1 .swiper", {
    loop:true,
    autoplay: {
      delay: 2500,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        let txt = "";

        if ( index == 0 ) {
          txt = "내용1";
        }
        else if ( index == 1 ) {
          txt = "내용2";
        }
        else if ( index == 2 ) {
          txt = "내용3";
        }

        className += ' index-' + index;

        return '<span class="' + className + '"><div>' + txt + "</div></span>";
      },
    },
  });
}

SwiperBox1__init();