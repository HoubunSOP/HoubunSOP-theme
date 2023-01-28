<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/normalize.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/grid.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/color/theme.css'); ?>">
  <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/6.2.1/css/all.min.css">

  <!-- 通过自有函数输出HTML头部信息 -->
  <?php $this->header(); ?>
</head>

<body>

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
  <style>
  body {
    background: url(https://s2.loli.net/2023/01/27/SU9M1XWPgdycYAF.jpg);
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
  </style>
  <div id="body">
    <div class="container drop-shadow">
      <div class="glass"></div>
      <div class="row">