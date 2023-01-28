<style>
#npcatch-top {
  margin: 0px 0px !important;
}

#npcatch-top li {
  font-size: 12px;
  overflow: hidden;
  clear: both;
  margin: 0px 0px 5px;
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
  width: calc(100% - 30%);
  float: left;
  height: 10px;
  padding: 0px 10px;
  line-height: 17px;
  font-weight: 700;
  color: #333333;
  line-height: 25px;
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
</style>
<ul id="npcatch-top">
  <li>
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
</ul>