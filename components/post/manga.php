<style>
#article h1 {
  padding-bottom: 3px;
}

.entry-title,
.entry-title a {
  color: #555;
}

.entry-content {
  padding-bottom: 3px;
  padding-top: 3px;
  display: block;
  overflow: hidden;
}

.syoseki-page1 {
  float: left;
  display: block;
  width: 375px;
  text-align: center;
  vertical-align: baseline;
  margin: 5px -30px -5px 0px;
}

@media (max-width: 768px) {
  .syoseki-page1 {
    width: 100%;
  }
}

.entry-content img,
.comment-content img,
.widget img {
  max-width: 100%;
}

.MangaAuthor {
  line-height: 50px;
  color: #fff;
  background-color: #272b446e;
  padding: 5px 25px;
  border-radius: 4px;
}

.MangaAuthorName {
  font-weight: bold;
}

.syoseki-page2 {
  float: left;
  width: 380px;
}

.syoseki-page2>p {
  margin-left: 13px;
}

.clear {
  clear: both;
}

.clear hr {
  display: none;
}

.syoseki-page3 {
  float: left;
  width: 400px;
  margin: 5px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.btn-a {
  color: #fff;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%);
  font-weight: bold;
  border-radius: 4px;
  margin: 0.5em auto;
  padding: 8px 0px;
  text-align: center;
  line-height: 30px;
  transition: all .2s ease;
  position: relative;
  margin: 5px;
  float: left;
}

.gaibu {
  margin-right: calc(-1em - 1px);
  opacity: 1 !important;
}

.btn-a:hover {
  box-shadow: none;
  transform: translateY(2px);
  opacity: 0.8;
}

#article h3,
#article h4,
#article h5,
#article h6 {
  padding-bottom: 0px;
}

.bookIntroduction {
  margin: 20px 0;
}

.tagList>a {
  color: #ffffff;
  padding: 2px 20px;
  background: var(--md-sys-color-secondary-light);
  float: left;
  font-weight: bold;
  margin: 6px;
  border-radius: 4px;
  font-size: 14px;
}

.relatedLink {
  margin: 0 10px;
}
</style>
<article>
  <header class="entry-header">
    <h1 class="entry-title">
      <?php $this->title(); ?>
    </h1>
    <!-- .entry-title -->
  </header>
  <div class="entry-content clearfix">
    <div class="syoseki-page1">
      <img
        src="<?php if($this->fields->thumbnail == null){ echo "https://houbunsha.co.jp/img/mv_img/con_item_nPrn_2.png"; }else{ $this->fields->thumbnail(); } ?>"
        alt="" width="250" height="994" class="alignnone size-large">
      <br>
      <span class="MangaAuthor">
        <span class="MangaAuthorName">
          Quro
        </span>
      </span>
    </div>
    <div class="syoseki-page2">
      <div class="tagList">
        <?php $this->tags(' ', true, "<a>暂无标签</a>"); ?>
      </div>
      <div class="clear">
        <hr>
      </div>
      <h3 class="kanren">
        书籍详细
      </h3>
      <p style="line-height: 1.2em;">
        <span style="font-size: 0.8em;">
          发售日:2023/1/26
          <br>
          出版社:芳文社
          <br>
          刊载杂志:
          <br>
          标签:まんがタイムKRコミックス
        </span>
      </p>
      <div class="clear">
        <hr>
      </div>
      <h3 class="kanren" style="
      margin-top: 25px;
      ">
        书籍简介
      </h3>
      <p class="bookIntroduction" style="line-height: 1.2em;">
        <span style="font-size: 0.8em;">
          <?php if($this->content == null){echo "<strong>暂无简介</strong>";}else{$this->content();} ?>
        </span>
      </p>
    </div>
    <div class="syoseki-page3">
      <!--相关链接-->
      <?php if($this->fields->MelonBookUrl != null):?>
      <a href="<?php $this->fields->MelonBookUrl();?>" target="_blank" rel="nofollow noopener noreferrer">
        <div class="btn-a" style="background-color:#66cb63;">
          <center>
            <span class="relatedLink" style="font-size: 1.1em;color: #fff;">
              MelonBooks
              <i class="fa-solid fa-arrow-up-right-from-square" style=" font-size: 10px; "></i>
            </span>
          </center>
        </div>
      </a>
      <?php endif;
      if($this->fields->AnimateUrl != null):?>
      <a href="<?php $this->fields->AnimateUrl();?>" target="_blank" rel="nofollow noopener noreferrer">
        <div class="btn-a" style="background-color:#285490;">
          <center>
            <span class="relatedLink" style="font-size: 1.1em;color: #fff;">
              Animate
              <i class="fa-solid fa-arrow-up-right-from-square" style=" font-size: 10px; "></i>
            </span>
          </center>
        </div>
      </a>
      <?php endif;
      if($this->fields->GamersUrl != null):?>
      <a href="<?php $this->fields->GamersUrl();?>" target="_blank" rel="nofollow noopener noreferrer">
        <div class="btn-a" style="background-color:#ed7203;">
          <center>
            <span class="relatedLink" style="font-size: 1.1em;color: #fff;">
              Gamers
              <i class="fa-solid fa-arrow-up-right-from-square" style=" font-size: 10px; "></i>
            </span>
          </center>
        </div>
      </a>
      <?php endif;?>
      <!--相关链接 end-->
    </div>

    <p>
      &nbsp;
    </p>
    <div class="clear">
      <hr>
    </div>
    <hr>
    <p>
    </p>
    <!--<div align="right">
      <a href="#"
        rel="nofollow noopener noreferrer" target="_blank" >
        <span style="font-size: 0.8em; color:#7f7f7f;">
          此信息需要修正
        </span>
      </a>
    </div>-->
    <p>
    </p>
    <p>
      &nbsp;
    </p>
    <!-- #comments .comments-area -->
</article>