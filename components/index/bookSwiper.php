<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js">
</script>
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<style>
  .NewBookSwiper .swiper-slide img {
  	display:block;
  	width:100%;
  	height:100%;
  	object-fit:cover;
  }
  .NewBookSwiper .swiper-slide img:nth-child(2n) {
  	width:32px;
  	height:16px;
  	object-fit:cover;
  	margin:5px auto;
  }
  .NewBookSwiper .swiper-slide {
  	width:105.5px;
  }
  .NewBookSwiper img.size-full,img.size-large {
  	max-width:100%;
  	height:auto !important;
  }
  .NewBookSwiper .swiper-horizontal>.swiper-scrollbar,.swiper-scrollbar.swiper-scrollbar-horizontal {
  	margin-top:10px;
  	position:relative;
  	left:1%;
  	bottom:0px;
  	z-index:50;
  	height:10px;
  	width:98%;
  }
  .SwiperCard {
  	opacity:1;
  	transition:all 0.2s ease-in-out;
  }
  .SwiperCard:hover {
  	opacity:0.7;
  	transition:all 0.2s ease-in-out;
  }
</style>
<div style="padding: 3px 10px; margin: 15px 0;">
	<span style="font-size: 1.25em;
	color: #fff;
	margin-top: 0em;
	margin-left: -5px;
	padding: 3px 10px;
	background-color: #ff83ab;
	border-radius: 4px;
	line-height: 20px;
	margin-bottom: 0px;
	border-bottom: 0px solid #f7e7ed;">
		未来发售的单行本🔭
	</span>
</div>
<div class="swiper NewBookSwiper">
	<div class="swiper-wrapper">
    <?php for($i=1; $i<=20; $i++){ ?>
		<div class="swiper-slide">
			<div class="SwiperCard" style="position: relative; float: left; padding-left:5px; width:105.5px;">
				<div style="display: block; width: 37px; height: 15px; background: #ff4848; position: absolute; left: 5; top: 0;  text-align: center; line-height: 15px; color: #FFF; font-size: 10px;">
					漫画
				</div>
				<div>
					<a href="http://yurinavi.com/2023/01/18/nurumeta-3/" sl-processed="1">
						<img data-src="http://yurinavi.com/wp-content/uploads/2023/01/nurumeta-3.jpg"
						alt="" width="1055" height="1500" class="alignnone size-full wp-image-60148 swiper-lazy">
            <img data-src="https://houbunsha.co.jp/img/mv_img/label_4.gif" class="swiper-lazy">
					</a>
					<p>
					</p>
					<div style="font-size: 1em; line-height: 12px;text-align:center;">
						ぬるめた3
					</div>
				</div>
			</div>
		</div>
    <?php } ?>
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
    mousewheel: true,
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