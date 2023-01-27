<div class="swiper TopSwiper">
  <div class="swiper-wrapper">
    <?php for($i=1; $i<=3; $i++){ ?>
    <div class="swiper-slide">
      <a href="http://yurinavi.com/2023/01/14/yurihime_sale/" target="_self" sl-processed="1">
        <img src="http://yurinavi.com/wp-content/uploads/2023/01/citrus-purasu-1-st-400x200.png" height="210"
          width="420" alt="" class="slider-1767 slide-77396" draggable="false">
      </a>
      <div class="caption-wrap">
        <div class="caption">
          一迅社・百合姫セール
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <br>
  <br>
  <br>
  <div class="swiper-pagination">
  </div>
</div>
<script>
var mySwiper = new Swiper(".swiper", {
  slidesPerView: "auto",
  autoplay: true,
  centeredSlides: true,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
</script>