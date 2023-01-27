<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js">
</script>
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<style>
  .TopSwiper .swiper-horizontal>.swiper-pagination-bullets, 
  .TopSwiper .swiper-pagination-bullets.swiper-pagination-horizontal, 
  .TopSwiper .swiper-pagination-custom, 
  .TopSwiper .swiper-pagination-fraction {
    bottom: 0px;
    left: 0;
    margin-top: 10px;
    width: 100%;
  }
  .TopSwiper .swiper-slide {
  	text-align:center;
  	font-size:18px;
  	background:#fff;
  	/* Center slide text vertically */ display:-webkit-box;
  	display:-ms-flexbox;
  	display:-webkit-flex;
  	display:flex;
  	-webkit-box-pack:center;
  	-ms-flex-pack:center;
  	-webkit-justify-content:center;
  	justify-content:center;
  	-webkit-box-align:center;
  	-ms-flex-align:center;
  	-webkit-align-items:center;
  	align-items:center;
    border-radius: 8px !important;
  }
  .TopSwiper .swiper-slide img {
  	display:block;
  	width:420px;
  	height:210px;
  	object-fit:cover;
  }
  .TopSwiper .swiper-slide {
  	width:420px;
  	height:210px;
  }
  .TopSwiper .caption-wrap {
      line-height: 0px !important;
      height: 40px !important;
      border-radius: 0 0 9px 9px !important;
      font-size: 0.8em !important;
  }
  .TopSwiper .caption-wrap {
      position: absolute;
      bottom: 0;
      left: 0;
      background: black;
      color: white;
      opacity: 0.7;
      margin: 0;
      display: block;
      width: 100%;
      line-height: 1.4em;
  }
  .TopSwiper .caption-wrap > .caption {
    padding: 5px 10px;
      word-wrap: break-word;
      line-height: 15px;
      padding: 0px 0px 0px 0px !important;
      margin: 0px;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
  }
  .TopSwiper .swiper-slide img {
      border-radius: 8px !important;
  }

  .TopSwiper {
      padding-bottom: 20px !important;
      font-size: 0.8em !important;
  }
  .TopSwiper .swiper-wrapper {

      height: 200px;
  }
  .TopSwiper {
      padding-left: 10% !important;
      padding-right: 10% !important;
      filter: drop-shadow(rgba(0, 0, 0, 0.4) 2px 2px 2px);
  }
  @media (min-width: 768px){
  .TopSwiper {
      padding-left: 10px !important;
      padding-right: 10px !important;
      filter: drop-shadow(rgba(0, 0, 0, 0.4) 2px 2px 2px);
  }
  }
  .TopSwiper .swiper-slide a:hover img {
      opacity: 0.7;
      filter: alpha(opacity=70);
      -ms-filter: “alpha( opacity=70 )”;
      transition: all 0.5s ease-in-out;
  }
  .TopSwiper .swiper-slide img {
      opacity: 1;
      transition: all 0.5s ease-in-out;
  }
</style>
<div class="swiper TopSwiper">
	<div class="swiper-wrapper">
  <?php for($i=1; $i<=3; $i++){ ?>
		<div class="swiper-slide">
			<a href="http://yurinavi.com/2023/01/14/yurihime_sale/" target="_self"
			sl-processed="1">
				<img src="http://yurinavi.com/wp-content/uploads/2023/01/citrus-purasu-1-st-400x200.png"
				height="210" width="420" alt="" class="slider-1767 slide-77396" 
				draggable="false">
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
	//如果你初始化时没有定义Swiper实例，后面也可以通过Swiper的HTML元素来获取该实例
	
</script>
<script>
</script>