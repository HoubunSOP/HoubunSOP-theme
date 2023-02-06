<!-- partial:index.partial.html -->
<style>
/*** Mixins & Default Styles ***/
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  overflow-x: hidden;
  overflow-y: scroll;
}

/*** Color Variables ***/
/*** Centering Hack ***/
/*** Header Styles ***/
#Navigation header {
  width: 100vw;
  height: 100vh;
  background: #5661f2;
  display: flex;
}

#Navigation nav {
  background-color: #3752abb3;
  backdrop-filter: saturate(120%) blur(20px);
  transition: 0.3s ease all;
  border-radius: 24px;
}

/*** Navigation Styles ***/
#Navigation nav {
  width: 95vw;
  height: 80px;
  display: grid;
  left: 2.2%;
  grid-template-columns: 1fr 1fr;
  position: fixed;
  z-index: 10;
  transition: all 0.3s;
  transition: box-shadow 0.5s;
  transition: height 0.7s;
}

#Navigation nav.navShadow {
  box-shadow: 0 4px 30px -5px #3752abb3;
  height: 60px;
}

#Navigation ol,
#Navigation ul {
  list-style: none;
}

#Navigation nav.navShadow #word-mark {
  opacity: 0;
}

#Navigation nav.navShadow #menu-toggle {
  height: 40px;
  width: 40px;
}

#Navigation nav.navShadow #logo img {
  height: 30px;
  width: auto;
  vertical-align: unset;
}



#Navigation #brand,
#Navigation #menu,
#Navigation ul {
  display: flex;
  align-items: center;
}

#Navigation #brand {
  padding-left: 40px;
}

#Navigation #logo img {
  width: auto;
  height: 40px;
  cursor: pointer;
  transition: all 0.3s;
}

#Navigation #word-mark {
  width: 120px;
  height: 20px;
  background: #fff;
  border-radius: 90px;
  margin-left: 20px;
  opacity: 1;
  transition: all 0.3s;
}

#Navigation #logoText {
  margin-left: 10px;
  opacity: 1;
  transition: all 0.3s;
}

#Navigation #logoText>a {
  color: #fff;
  text-align: center;
  vertical-align: middle;
  font-size: 1.25em;
}

/*** Menu Styles ***/
#Navigation #menu {
  justify-content: flex-end;
  padding-right: 40px;
}

#Navigation li {
  /*margin-left: 20px;*/
  transition: all 0.3s;
}

#Navigation li:hover {
  background: white;
  display: block;
  border-radius: 90px;
  transition: all 0.3s;
  color: var(--md-ref-palette-primary40);
}

#Navigation li a {
  display: block;
  width: 80px;
  height: 20px;
  text-align: center;
  color: white;
  font-weight: 700;
  margin: 5px;
  transition: all 0.3s;
}

#Navigation li a:hover {

  color: var(--md-ref-palette-primary40);
}

#Navigation #menu-toggle {
  width: 55px;
  height: 55px;
  background: var(--md-ref-palette-primary40);
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  cursor: pointer;
  display: none;
  transition: all 0.3s;
}

#Navigation #menu-toggle:hover .bar {
  width: 25px;
}

#Navigation #menu-toggle.closeMenu .bar {
  width: 25px;
}

#Navigation #menu-toggle.closeMenu .bar:first-child {
  transform: translateY(7px) rotate(45deg);
}

#Navigation #menu-toggle.closeMenu .bar:nth-child(2) {
  transform: scale(0);
}

#Navigation #menu-toggle.closeMenu .bar:last-child {
  transform: translateY(-7px) rotate(-45deg);
}

#Navigation .bar {
  width: 25px;
  height: 2px;
  background: #fff;
  transition: 0.3s ease-in-out;
}

#Navigation .bar:nth-child(2) {
  width: 20px;
  margin: 5px 0;
}

#Navigation .bar:last-child {
  width: 15px;
}


/*** Responsive Menu For Smaller Device ***/
@media screen and (max-width: 767px) {
  #Navigation #menu-toggle {
    display: flex;
  }

  #Navigation nav {
    width: 100vw;
    height: 80px;
    left: 0px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    position: fixed;
    z-index: 10;
    transition: all 0.3s;
    border-radius: 0px;
  }

  #Navigation ul {
    display: inline-block;
    height: 0;
    background-color: #3752abb3;
    position: absolute;
    top: 80px;
    transform: translate();
    box-shadow: 0 5px 30px -4px rgba(0, 0, 0, 0.2);
    transition: all 0.3s;
  }

  #Navigation ul.showMenu {
    height: 90vh;
    background-color: #314997b3;
    backdrop-filter: saturate(120%) blur(20px);
    transition: 0.3s ease all;
    border-radius: 0px 0px 24px 24px;
  }

  #Navigation ul.showMenu li {
    height: 80px;
    opacity: 1;
    visibility: visible;
  }

  #Navigation li {
    width: 50%;
    height: 80px;
    float: left;
    padding-left: 40px;
    opacity: 0;
    visibility: hidden;
    margin-left: 0;
    transition: all 0.3s 0.1s;
  }

  #Navigation li:first-child,
  #Navigation li:nth-child(2) {
    margin-top: 80px;
  }

  #Navigation #head-line {
    transform: scale(0.8);
  }
}
/***********************
 * Essential Structure *
 ***********************/
.flexsearch--wrapper {
  height: auto;
  width: auto;
  max-width: 100%;
  overflow: hidden;
  background: transparent;
  margin: 0;
  position: static;
}

.flexsearch--form {
  overflow: hidden;
  position: relative;
}

.flexsearch--input-wrapper {
  padding: 0 66px 0 0;
  /* Right padding for submit button width */
  overflow: hidden;
}

.flexsearch--input {
  width: 100%;
}

/***********************
 * Configurable Styles *
 ***********************/

.flexsearch--input {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 0 46px 0 10px;
  height: 30px;
  border-color: #888;
  border-radius: 35px;
  /* (height/2) + border-width */
  border-style: solid;
  border-width: 3px;
  color: #333;
  font-family: 'Helvetica', sans-serif;
  font-size: 15px;
  -webkit-appearance: none;
  -moz-appearance: none;
}

.flexsearch--submit {
  position: absolute;
  right: 0;
  top: 0;
  display: block;
  width: 60px;
  height: 60px;
  padding: 0;
  border: none;
  margin-top: -10px;
  /* margin-top + border-width */
  margin-right: 5px;
  /* border-width */
  background: transparent;
  color: #888;
  font-family: 'Helvetica', sans-serif;
  font-size: 20px;
  line-height: 60px;
}

.flexsearch--input:focus {
  outline: none;
  border-color: #333;
}

.flexsearch--input:focus.flexsearch--submit {
  color: #333;
}

.flexsearch--submit:hover {
  color: #333;
  cursor: pointer;
}

::-webkit-input-placeholder {
  color: #888;
}

input:-moz-placeholder {
  color: #888;
}
@media screen and (max-width: 767px){
#Navigation ul.showMenu .flexsearch {
    height: 80px;
    opacity: 1;
    visibility: visible;
}
#Navigation .flexsearch {
    height: 80px;
    float: left;
    padding: 0px 40px;
    opacity: 0;
    visibility: hidden;
    margin-left: 0;
    transition: all 0.3s 0.1s;
}
}
</style>
<header id="Navigation">
  <nav>
    <div id="brand">
      <?php if ($this->options->logoUrl):?>
      <div id="logo">
        <a href="<?php $this->options->siteUrl(); ?>">
          <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>">
        </a>
      </div>
      <?php else: ?>
      <div id="logoText">
        <a href="<?php $this->options->siteUrl(); ?>">
          <?php $this->options->title() ?>
        </a>
      </div>
      <?php endif; ?>
    </div>
    <div id="menu">
      <div id="menu-toggle">
        <div id="menu-icon">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>
      
      <ul>
<div class="flexsearch">
		<div class="flexsearch--wrapper">
			<form class="flexsearch--form" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
				<div class="flexsearch--input-wrapper">
					<input  type="text" id="s" name="s"  class="flexsearch--input" type="search" placeholder="<?php _e('输入关键字搜索'); ?>">
				</div>
				<input class="flexsearch--submit" type="submit" value="&#10140;"/>
			</form>
		</div>
</div>
        <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
        <?php 
          \Widget\Contents\Page\Rows::alloc()->to($pages);
          while ($pages->next()): 
        ?>
        <li>
          <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
          <?php endwhile; ?>
        </li>

      </ul>
    </div>
  </nav>
</header>
<!-- partial -->

<script>
$(() => {
  $(window).scroll(() => {
    var windowTop = $(window).scrollTop()
    windowTop > 100 ?
      $('nav').addClass('navShadow') :
      $('nav').removeClass('navShadow')
    windowTop > 100 ?
      $('ul').css('top', '60px') :
      $('ul').css('top', '80px')
  })

  $('#logo').on('click', () => {
    $('html,body').animate({
        scrollTop: 0,
      },
      500
    )
  })
  $('a[href*="#"]').on('click', function(e) {
    $('html,body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 100,
      },
      500
    )
    e.preventDefault()
  })
  $('#menu-toggle').on('click', () => {
    $('#menu-toggle').toggleClass('closeMenu')
    $('ul').toggleClass('showMenu')

    $('li').on('click', () => {
      $('ul').removeClass('showMenu')
      $('#menu-toggle').removeClass('closeMenu')
    })
  })
})
</script>