<?php 
/**
 * 文章分类
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
  <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    <h1 class="post-title" itemprop="name headline">
      <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
    </h1>
    <div class="post-content cat-content" itemprop="articleBody">
    <ul>
    <?php $this->widget('Widget_Metas_Category_List')->to($category);
    while ($category->next()):
     ?>
     <?php if ($category->levels === 0): ?>
    <h3><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a></h3>
    <?php elseif ($category->levels === 1): ?>
      <h5><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a></h5>
    <?php else:?>
     <li><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a></li>
     <?php endif;endwhile;?>
     </ul>
    </div>
  </article>
</div><!-- end #main-->
<style>
.cat-content li{
  margin-left: 30px;
}
.cat-content ul{
  margin-left: 0px !important;
}
.post-content {
  color: #24292e;
  line-height: 2em;
}

.post-content h2 {
  font-size: 180%;
  transform: rotate(0.03deg);
  font-weight: 700;
  font-style: normal;
  line-height: 1.4;
}

.post-title {
  font-size: 200%;
}

.post-content h1,
.post-content h2,
.post-content h3,
.post-content h4,
.post-content h5,
.post-content h6 {
  line-height: 1.4;
  font-weight: 700;
  margin: 30px 0 10px 0;
  color: #004483;
}
.post-content h5 a{
  border-bottom: rgba(45, 67, 144, 0.2) 2px dotted !important;
}
.post-content p {
  margin: 10px 0;
}

.post-content ul {
  margin-left: 20px;
}

.gallery>img {
  margin: 10px 0 20px 0;
}

.post-content a:not(.gallery) {
  text-decoration: none;
  color: rgba(0, 68, 131, 1.00);
  font-weight: 600;
  border-bottom: rgba(45, 67, 144, 1.00) 2px dotted;
}

.post-content a:not(.gallery):after {
  content: ' \f08e';
  font-family: "Font Awesome 6 Free";
}

.post-content li::marker {
  content: '☄️';
  color: red;
  font-size: 3px;
}

.post-content h2:before {
  content: "⭐";
}

.post-content h2:after {
  content: "⭐";
}

.post-content h3 {
  font-size: 165%;
  transform: rotate(0.03deg);
  font-weight: 700;
  font-style: normal;
  line-height: 1.4;
}

.post-content h3:before {
  content: "✨";
}

.post-content h4 {
  font-size: 140%;
  transform: rotate(0.03deg);
  font-weight: 700;
  font-style: normal;
  line-height: 1.4;
  border-bottom: 2px solid var(--md-sys-color-on-primary-container);
}

.post-content h4:before {
  content: "🔭";
}

h5 {
  transform: rotate(0.03deg);
  font-weight: 700;
  font-size: 120%;
  border-bottom: rgb(0, 68, 131) 3px dotted;
  margin-bottom: 7px;
  line-height: 1.4;
  color: #004483;
}

.post-content h5:before {
  content: "🌙";
}

/* 预计制作 */
.ns_h4 {
  position: relative;
  background: #E9F0FB;
  padding: 10px 10px 10px 13px;
  font-size: 115%;
  color: #004483;
  border-left: rgba(71, 116, 185, 1.00) 10px solid;
  box-sizing: border-box;
  font-family: 'M PLUS Rounded 1c', sans-serif;
  transform: rotate(0.03deg);
  font-weight: 700;
  line-height: 1.4;
}

/* 预计制作 */
.ns_waku {
  background-color: rgba(223, 229, 252, 1.00);
  border-radius: 20px;
  padding: 10px 15px;
}
</style>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>