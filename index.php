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

#npcatch-top {
  margin: 0px 0px !important;
}

#npcatch-top li {
  font-size: 12px;
  overflow: hidden;
  clear: both;
  margin: 20px 0px 5px 0px;
  vertical-align: top;
  border-bottom: dashed 1px #969696;
}

#npcatch-top li a {
  transition: color 0.3s;
}

#npcatch-top li a:hover {
  text-decoration: none;
  color: var(--md-sys-color-tertiary);
}

#npcatch-top img {
  float: left;
  margin-left: 4px;
  box-shadow: 0px 0px 7px #bbb;
  margin-bottom: 5px;
  width: 180px;
  height: 120px;
  border-radius: 5px;
  object-fit: cover;
}

#npcatch-top a:hover img {
  opacity: 0.7;
  filter: alpha(opacity=70);
  -ms-filter: â€œalpha(opacity=70);
  transition: 0.2s ease-in-out;
}

#npcatch-top img {
  max-width: 100%;
}

#npcatch-top a img {
  border: 0;
  transition: 0.2s ease-in-out;
}

#npcatch-top img {
  max-width: 100%;
  /* height: auto;*/
  vertical-align: top;
}

#npcatch-top .title {
  /* width: calc(100% - 30%);*/
  float: left;
  height: 10px;
  padding: 0px 10px;
  line-height: 17px;
  font-weight: 700;
  color: #333333;
  line-height: 25px;
  margin-top: 5%;
  margin-left: 15px;
}

#npcatch-top .title a {
  font-weight: 700;
  color: #2b2b2b;
  font-size: 18px;
}

#npcatch-top .date {
  font-size: x-small;
  font-weight: 400;
  display: block;
  color: #666699;
  margin-bottom: 5px;
}

#npcatch-top {
  margin: 0px 0px !important;
}

#npcatch-top {
  list-style: none;
  margin: 0;
}

@media (max-width: 768px) {
  #npcatch-top .title {
    width: calc(100% - 38%);
    float: left;
    padding: 0 10px;
    line-height: 17px;
  }

  #npcatch-top .title a {
    font-size: 13px;
    line-height: 18px;
  }

  #npcatch-top img {
    float: left;
    margin-left: 4px;
    box-shadow: 0px 0px 7px #bbb;
    margin-bottom: 5px;
    width: calc(100% - 70%);
    height: 75px;
    border-radius: 5px;
    object-fit: cover;
  }
}

.post-list {
  transition: all .3s;
}

.post-list:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 10px rgb(204 204 204 / 47%);
  transition: all .2s ease;
}
</style>
</style>
<div class="col-mb-12 col-8" id="main" role="main">
  <?php 
    $this->need('components/index/swiper.php');
    $this->need('components/index/bookSwiper.php');
    $this->need('components/index/newTitle.php');
    ?>
  <div class="newsList">
  <ul id="npcatch-top">
    <?php
    while ($this->next()):
      $this->need('components/index/newsList.php');
    endwhile; ?>
    </ul>
  </div>
  <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>