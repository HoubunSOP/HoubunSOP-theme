<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
  <h1 class="post-title" itemprop="name headline">
    <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
  </h1>
  <ul class="post-meta">
    <li itemprop="author" itemscope itemtype="http://schema.org/Person">
      <?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>"
        rel="author"><?php $this->author(); ?></a>
    </li>
    <li><?php _e('时间: '); ?>
      <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
    </li>
    <li class="catList"><?php $this->category(' ', true, '<a>暂无分类</a>'); ?></li>
  </ul>
  <div class="post-content" itemprop="articleBody">
    <?php $this->content(); ?>
  </div>
  <p itemprop="keywords" class="tags"><?php $this->tags(' ', true, '<a>暂无标签</a>'); ?></p>
<<<<<<< HEAD
=======
  <?php $this->tags(); ?>
>>>>>>> 8effb1e2daaa9d3b74c23a871e0ae81b61f8a655
</article>
<style>
  .post{
    border-bottom: none;
  }
 .post .tags{
    margin-top: 1.5em;
    padding: 0;
    color: #999;
    font-size: 0.92857em;
  }
  .post .tags>a {
  color: #ffffff;
  padding: 2px 20px;
  background: var(--md-sys-color-secondary-light);
  float: left;
  font-weight: bold;
  margin: 6px;
  border-radius: 4px;
  font-size: 14px;
}
.catList>a {
  color: #ffffff;
  padding: 2px 20px;
  background: var(--md-ref-palette-secondary10);
  font-weight: bold;
  border-radius: 4px;
  font-size: 14px;
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

.entry-content h1,
.entry-content h2,
.entry-content h3,
.entry-content h4,
.entry-content h5 {
  color: #004483;
  font-weight: 700;
  margin-top: 25px;
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
}

.post-content p {
  margin: 10px 0;
}

.post-content ul {
  margin-left: 20px;
}

.gallery>img {
  margin: 10px 0 20px 0;
  transition: 0.3s ease all;
  border-radius: 10px;
}

.gallery>img:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 30px -5px #3752abb3;
  cursor: pointer;
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