<div class="swiper TopSwiper">
  <div class="swiper-wrapper">
  <?php $swiperCid=$this->options->swiperCid;
  if($swiperCid=$this->options->swiperCid):
  $this->widget('Widget_Post_GetCid@GetCid', 'GetCid='.$swiperCid)->to($post);while($post->next()): ?>
    <div class="swiper-slide">
      <a href="<?php $post->permalink();?>" target="_self" >
        <img src="<?php if($post->fields->thumbnail == null){ echo "https://houbunsha.co.jp/img/mv_img/con_item_nPrn_2.png"; }else{ $post->fields->thumbnail(); } ?>" height="210"
          width="420" alt="" class="slider-1767 slide-77396" draggable="false">
      </a>
      <div class="caption-wrap">
        <div class="caption">
        <?php $post->title();?>
        </div>
      </div>
    </div>
    <?php endwhile;else: ?>
      <div class="swiper-slide">
      <a href="<?php $this->options->siteUrl(); ?>" target="_self" >
        <img src="https://s2.loli.net/2023/02/04/yDs3LFcfKn2Z9zM.png  " height="210"
          width="420" alt="" class="slider-1767 slide-77396" draggable="false">
      </a>
      <div class="caption-wrap">
        <div class="caption">
        <?php $this->options->title() ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
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