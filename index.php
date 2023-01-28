<?php
/**
 * 芳文观星台官网
 *
 * @package HoubunSOP
 * @author 芳文观星台
 * @version 0.1
 * @link https://space.bilibili.com/1585955812
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->need('components/index/link.php');
?>
<style>
.newsList {
  margin-top: 50px;
  margin-bottom: 30px;
}
</style>
<div class="col-mb-12 col-8" id="main" role="main">
  <?php 
    $this->need('components/index/swiper.php');
    $this->need('components/index/bookSwiper.php');
    $this->need('components/index/newTitle.php');
    ?>
  <div class="newsList">
    <?php
    while ($this->next()):
      $this->need('components/index/newsList.php');
    endwhile; ?>
  </div>
  <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>