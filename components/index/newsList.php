<li class="post-list">
  <a href="<?php $this->permalink(); ?>">
    <img
      src="<?php if($this->fields->thumbnail == null){ echo "https://houbunsha.co.jp/img/mv_img/con_item_nPrn_2.png"; }else{ $this->fields->thumbnail(); } ?>"
      width="120px" height="10" />
  </a>
  <span class="title">
    <a href="<?php $this->permalink() ?>">
      <?php $this->title() ?>
      <span class="date"> <?php $this->date(); ?> </span>
    </a>
  </span>
</li>
