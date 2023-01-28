<div style="padding: 3px 20px; margin: 15px 0;">
  <span class="NewBookTitle">
    未来发售的单行本🔭
  </span>
</div>
<style>
.SwiperCardTag {
  display: block;
  width: 50px;
  height: 20px;
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  left: 5;
  top: 0;
  text-align: center;
  line-height: 15px;
  color: #FFF;
  font-size: 10x;
}
</style>
<div class="swiper NewBookSwiper">
  <div class="swiper-wrapper">
    <?php 
    $this->widget('Widget_Contents_Post_Recent','pageSize=50')->to($recent);
    if($recent->have()):
    while($recent->next()):
    if($recent->fields->IsManga == 1):
    ?>
    <div class="swiper-slide">
      <div class="SwiperCard">
        <div class="SwiperCardTag">
          <?php
          if($recent->fields->UpDate != null){
            echo substr_replace($recent->fields->UpDate,"",0,5);
          }else{
            echo "null";
          }
          ?>
        </div>
        <div>
          <a href="<?php $recent->permalink();?>">
            <img data-src="<?php $recent->fields->thumbnail();?>" alt="" width="1055" height="1500"
              class="alignnone size-full wp-image-60148 swiper-lazy">
            <img data-src="https://houbunsha.co.jp/img/mv_img/label_4.gif" class="swiper-lazy">
          </a>
          <p>
          </p>
          <div style="font-size: 1em; line-height: 20px;text-align:center;">
            <?php $recent->title();?>
          </div>
        </div>
      </div>
    </div>
    <?php endif;endwhile; endif; ?>
  </div>
  <br>
  <div class="swiper-scrollbar"></div>
</div>
<script>
var NewBookSwiper = new Swiper(".NewBookSwiper", {
  slidesPerView: "auto",
  //autoplay: true,
  //centeredSlides: true,
  spaceBetween: 10,
  //loop: true,
  mousewheel: {
    sensitivity: 6,
  },
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
    snapOnRelease: false,
  },
  lazy: {
    loadPrevNext: true,
    loadPrevNextAmount: 8,
  },
});
</script>