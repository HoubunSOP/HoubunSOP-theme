<li class="post-list">
  <a href="<?php $this->permalink(); ?>">
    <img
      src="<?php if($this->fields->thumbnail == null){ echo "https://www.fwgxt.top/usr/uploads/2023/02/2796890463.png"; }else{ $this->fields->thumbnail(); } ?>"
      width="120px" height="10" />
  </a>
  <span class="title">
    <a href="<?php $this->permalink() ?>">
      <?php $this->title() ?>
      <span class="date"> <?php $this->date(); ?> </span>
    </a>
  </span>
</li>
