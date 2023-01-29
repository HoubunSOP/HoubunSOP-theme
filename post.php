<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="col-mb-12 col-8" id="main" role="main">
  <?php 
if($this->fields->IsManga == 1){
  $this->need('components/post/manga.php');
}else{
  $this->need('components/post/post.php');
}
?>

  <?php $this->need('comments.php'); ?>

  <ul class="post-near">
    <li>上一篇: <?php $this->thePrev('%s', '没有了'); ?></li>
    <li>下一篇: <?php $this->theNext('%s', '没有了'); ?></li>
  </ul>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>