<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

$cssVersion = "1.1";
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="<?php $this->options->charset(); ?>">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>

  <!-- 使用url函数转换相关路径 -->
  <?php if($this->options->icoUrl): ?>
  <link rel="icon" href="<?php $this->options->icoUrl() ?>">
  <?php endif;?>
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/normalize.css'); ?>?v=<?php echo $cssVersion;?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/grid.css'); ?>?v=<?php echo $cssVersion;?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/style.css'); ?>?v=<?php echo $cssVersion;?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/color/theme.css'); ?>?v=<?php echo $cssVersion;?>">
  <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/misans@3.1.1/lib/misans-400-regular.min.css">
  <script src="//cdn.jsdelivr.net/npm/spacingjs" defer></script>
  <script src="https://cdn.bootcss.com/jquery/3.5.1/jquery.min.js"></script>
  <script src="//instant.page/5.1.1" type="module" integrity="sha384-MWfCL6g1OTGsbSwfuMHc8+8J2u71/LA8dzlIN3ycajckxuZZmF+DNjdm7O6H3PSq"></script>

  <!-- 通过自有函数输出HTML头部信息 -->
  <?php $this->header(); ?>
</head>

<body>
  <?php 
  //永false判断
  if(1 != 1):
  ?>
  <header id="header" class="clearfix">
    <div class="container">
      <div class="row">
        <div class="site-name col-mb-12 col-9">
          <?php if ($this->options->logoUrl): ?>
          <a id="logo" href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
          </a>
          <?php else: ?>
          <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
          <p class="description"><?php $this->options->description() ?></p>
          <?php endif; ?>
        </div>
        <div class="site-search col-3 kit-hidden-tb">
          <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
            <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
            <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
            <button type="submit" class="submit"><?php _e('搜索'); ?></button>
          </form>
        </div>
        <div class="col-mb-12">
          <nav id="nav-menu" class="clearfix" role="navigation">
            <a<?php if ($this->is('index')): ?> class="current" <?php endif; ?>
              href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
              <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
              <?php while ($pages->next()): ?>
              <a<?php if ($this->is('page', $pages->slug)): ?> class="current" <?php endif; ?>
                href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
          </nav>
        </div>
      </div><!-- end .row -->
    </div>
  </header><!-- end #header -->
  <?php else:
    $this->need('components/header/nav.php');
  endif;
    ?>
  <style>
/* width */
::-webkit-scrollbar {
  width: 8px;
}

/* Track */
::-webkit-scrollbar-track {
     background: rgba(0,0,0,.1); border-radius: 10px; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
      background: #3E72B6;
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
 background: #D7E9F8
}
  <?php if($this->options->enterCur): ?>

    *{
      
      cursor: url(<?php $this->options->themeUrl('assets/cursors/default.cur'); ?>), auto;
      
    }
    a{
      cursor: url(<?php $this->options->themeUrl('assets/cursors/pointer.cur'); ?>), pointer;
    }
    input{
      cursor: url(<?php $this->options->themeUrl('assets/cursors/text.cur'); ?>), text;
    }
      /* 修改选择时的颜色 */
  ::selection {
    cursor: url(<?php $this->options->themeUrl('assets/cursors/text.cur'); ?>), text;
  }

  ::-moz-selection {
    cursor: url(<?php $this->options->themeUrl('assets/cursors/text.cur'); ?>), text;
  }

  ::-webkit-selection {
    cursor: url(<?php $this->options->themeUrl('assets/cursors/text.cur'); ?>), text;
  }
    <?php endif;?>
  body {
    background: url(<?php $this->options->backgroundUrl() ?>);
    background-size: 100% 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    /*关键*/
    background-position: center;
  }

  #main,
  #secondary {
    background-color: rgb(255 255 255/80%);
    backdrop-filter: saturate(120%) blur(20px);
    transition: 0.3s ease all;
    border-radius: 24px;
    margin-top: 20px;
    border: 1px solid white;
  }

  #main>*,
  #secondary>* {
    margin-left: 20px;
    margin-right: 20px;
  }

  #body>.container {
    top: 100px;
    position: relative;
  }

  /* 修改选择时的颜色 */
  ::selection {
    cursor: url(<?php $this->options->themeUrl('assets/cursors/text.cur'); ?>), text;
    background-color: #FF6D00;
    color: white;
  }

  ::-moz-selection {
    cursor: url(<?php $this->options->themeUrl('assets/cursors/text.cur'); ?>), text;
    background-color: #FF6D00;
    color: white;
  }

  ::-webkit-selection {
    cursor: url(<?php $this->options->themeUrl('assets/cursors/text.cur'); ?>), text;
    background-color: #FF6D00;
    color: white;
  }

  /* -----------------------------------------
   流れ星
   -----------------------------------------*/

  @keyframes nagareboshi01 {
    0% {
      left: -10px;
      top: 40%;
      opacity: 1;
    }

    15% {
      left: 100%;
      top: 80%;
      opacity: 0;
    }
  }

  .move_star01 {
    animation: nagareboshi01 infinite;
    animation-duration: 15s;
    animation-delay: 10s;
    position: absolute;
    width: 1%;
    opacity: 0;
    z-index: 51;
  }


  @keyframes nagareboshi02 {
    0% {
      left: -10%;
      top: 10%;
      opacity: 1;
    }

    30% {
      left: 100%;
      top: 25%;
      opacity: 0;
    }
  }

  .move_star02 {
    animation: nagareboshi02 infinite;
    animation-duration: 20s;
    animation-delay: 2s;
    position: absolute;
    width: 1%;
    opacity: 0;
    z-index: 52;
  }





  @keyframes nagareboshi03 {
    0% {
      left: -10%;
      top: 0%;
      opacity: 1;
    }

    30% {
      left: 100%;
      top: 10%;
      opacity: 0;
    }
  }

  .move_star03 {
    animation: nagareboshi02 infinite;
    animation-duration: 30s;
    animation-delay: 2s;
    position: absolute;
    width: 1.8%;
    opacity: 0;
    z-index: 52;
  }


  .ms_m {
    left: -10%;
  }
  </style>
  <div id="body">
    <div class="move_star01 img_100">
      <img src="<?php $this->options->themeUrl('assets/img/star.png'); ?>" width="133" height="133" alt="">
    </div>
    <div class="move_star02 img_100">
      <img src="<?php $this->options->themeUrl('assets/img/star.png'); ?>" width="133" height="133" alt="">
    </div>
    <div class="move_star03 img_100 style_mobile">
      <img src="<?php $this->options->themeUrl('assets/img/star.png'); ?>" width="133" height="133" alt="">
    </div>
    <div class="container drop-shadow">
      <div class="row">