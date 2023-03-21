<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<style>
  .widget>.list--withIcon{
    height:500px;
    overflow-y:scroll;
  }
    .list-item img {
      height: 100px;
    width: 100px;
    border-radius: 12px !important;
    border: none !important;
  }

  .list-item a {
    font-size: 1.2em !important;
    font-weight: 700;
  }
</style>
<div class="col-mb-12 col-offset-1 col-3 kit-hidden-tb" id="secondary" role="complementary">
<?php if ($this->is('post')): ?>
<style>
.index-menu {
	line-height: 1.5;
}

.index-menu ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

.index-menu ul ul {
	padding-left: 2em;
}

.index-menu li a {
	display: inline-block;
	text-decoration: none;
	transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
	border-bottom: none !important;
}

.index-menu>ul> li>a {
	color: #004483;
	font-weight: bold;
	font-size: 1.2em;
}

.index-menu>ul> li> ul> li>a {
	color: #004483;
	font-weight: bold;
	font-size: 1.1em;
}

.index-menu>ul> li>a:before {
	content: "✨";
}

.index-menu>ul> li> ul> li>a:before {
	content: "🔭";
}
</style>

<?php $this->treeMenu(); ?>

<?php endif;?>
<?php BilibiliEcho_Plugin::renderDynamics() ?>
  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
  <section class="widget">
    <h3 class="widget-title"><i class="fa-regular fa-file" style="color: #000c61;"></i> <?php _e('最新文章'); ?> </h3>
    <ul class="widget-list">
      <?php \Widget\Contents\Post\Recent::alloc()->to($contents);
      $num = 0;
      while ($contents->next()):
        if($contents->fields->IsManga != 1 && $num <3):
          $num++;
      ?>
      <li><a href="<?php $contents->permalink() ?>"><?php $contents->title() ?></a></li>
      <?php endif;endwhile;?>
    </ul>
  </section>
  <?php endif; ?>
  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentMangas', $this->options->sidebarBlock)): ?>
  <section class="widget">
    <h3 class="widget-title"><i class="fa-solid fa-book" style="color: #000c61;"></i> <?php _e('最新漫画'); ?> </h3>
    <ul class="widget-list">
      <?php \Widget\Contents\Post\Recent::alloc()->to($contents);
      $num = 0;
      while ($contents->next()):
        if($contents->fields->IsManga == 1 && $num <3):
          $num++;
      ?>
      <li><a href="<?php $contents->permalink() ?>"><?php $contents->title() ?></a></li>
      <?php endif;endwhile;?>
    </ul>
  </section>
  <?php endif; ?>

  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
  <section class="widget">
    <h3 class="widget-title"><i class="fa-regular fa-message" style="color: #000c61;"></i> <?php _e('最近回复'); ?> </h3>
    <ul class="widget-list">
      <?php \Widget\Comments\Recent::alloc()->to($comments); ?>
      <?php while ($comments->next()): ?>
      <li>
        <a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>:
        <?php $comments->excerpt(35, '...'); ?>
      </li>
      <?php endwhile; ?>
    </ul>
  </section>
  <?php endif; ?>

  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
  <section class="widget">
    <h3 class="widget-title"><i class="fa-solid fa-folder-tree" style="color: #000c61;"></i> <?php _e('分类'); ?> </h3>
    <?php \Widget\Metas\Category\Rows::alloc()->listCategories('wrapClass=widget-list'); ?>
  </section>
  <?php endif; ?>

  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
  <section class="widget">
    <h3 class="widget-title"><?php _e('归档'); ?></h3>
    <ul class="widget-list">
      <?php \Widget\Contents\Post\Date::alloc('type=month&format=F Y')
                    ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
    </ul>
  </section>
  <?php endif; ?>
  <!--永远为否，禁止输出-->
  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock) && 1 == 0): ?>
  <section class="widget">
    <h3 class="widget-title"><?php _e('其它'); ?></h3>
    <ul class="widget-list">
      <?php if ($this->user->hasLogin()): ?>
      <li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?>
          (<?php $this->user->screenName(); ?>)</a></li>
      <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
      <?php else: ?>
      <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a>
      </li>
      <?php endif; ?>
      <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
      <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
      <li><a href="http://www.typecho.org">Typecho</a></li>
    </ul>
  </section>
  <?php endif; ?>

</div><!-- end #sidebar -->