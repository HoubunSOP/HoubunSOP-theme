<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if($this->options->commentImgUrl !=null):?>
<style>
textarea#comment {
  background-image: url('<?php echo $this->options->commentImgUrl; ?>');
  background-color: #ffffff;
  transition: all 0.25s ease-in-out 0s;
}
</style>
<?php endif;?>
<style>
#comments h3:before {
  content: "💭";
}

textarea#comment:focus {
  background-position-y: 200px;
  transition: all 0.25s ease-in-out 0s;

}

#author_info {
  float: left;
  width: 100%;
  margin: 10px 5px 10px 5px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

#author_info input {
  height: 2.5em;
  border-radius: 10px;
}

.form-control {
  padding: 6px 12px;
  font-size: 14px;
}

.form-control:focus {
  border-color: #448bff;
  color: inherit;
  box-shadow: 0 0 0 0.2rem rgb(68 139 255 / 25%);
}

#comment {
  resize: vertical;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: right;
  margin-bottom: 2px;
}

#comment-form label {
  color: #777;
  margin-bottom: 1em;
}

textarea.form-control {
  height: auto;
  border-radius: 10px;
}

:focus {
  outline: 0 !important;
}

.padder-v-sm {
  padding-top: 10px;
  padding-bottom: 10px;
}

label {
  font-weight: 400;
}

label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: 700;
}

.row-sm>div {
  padding-right: 10px;
  padding-left: 10px;
  width: 400px;
}

.form-group {
  margin-bottom: 15px;
}

.comment-avatar img {
  border-radius: 50%;
}

.comment-meta time {
  font-size: 12px;
}

.comment-content {
  margin-top: 10px;
}

.welcomeInfo {
  margin: 20px 0;
  font-size: 0.9em;
}

.submit {
  color: #fff;
  border: none;
  background: #3752abb3;
  padding-top: 6px;
  padding-bottom: 6px;
  transition: all .2s ease;
  margin: 10px;
  padding-right: 30px;
  padding-left: 30px;
  border-radius: 24px;
  cursor: pointer;
}

.submit:hover {
  background: #3752ab;
}

.comment-list li {
  padding: 14px;
  margin-top: 10px;
  border: none;
}
</style>
<div id="comments">
  <?php $this->comments()->to($comments); ?>

  <?php if ($this->allow('comment')): ?>
  <div id="<?php $this->respondId(); ?>" class="respond">
    <div class="cancel-comment-reply">
      <?php $comments->cancelReply(); ?>
    </div>

    <h3 id="response"><?php _e('发表评论'); ?></h3>
    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
      <?php if ($this->user->hasLogin()): ?>
      <p class="welcomeInfo"><?php _e('登录身份: '); ?><a
          href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>.
        <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
      </p>
      <?php else: ?>
      <div id="author_info" class="row row-sm">
        <div class="comment-form-author form-group col-sm-6 col-md-4">
          <label for="author">
            名称
            <span class="required text-danger">
            </span>
          </label>
          <div>
            <input id="author" class="form-control" name="author" type="text"
              value="<?php $this->remember('author'); ?>" maxlength="245" placeholder="姓名或昵称" required>
          </div>
        </div>
        <div class="comment-form-email form-group col-sm-6 col-md-4">
          <label for="email" <?php if ($this->options->commentsRequireMail): ?> class="required" <?php endif; ?>>
            邮箱
          </label>
          <input type="text" name="mail" id="mail" class="form-control" value="<?php $this->remember('mail'); ?>"
            <?php if ($this->options->commentsRequireMail): ?> placeholder="邮箱 (必填,将保密)"
            required<?php else: ?>placeholder="邮箱 (选填,将保密)" <?php endif; ?>>
        </div>
      </div>
      <?php endif; ?>
      <p>
        <label for="textarea" class="required"><?php _e('内容'); ?></label>
        <textarea id="comment" class="textarea form-control OwO-textarea" name="text" rows="5"
          placeholder="说点什么吧……"><?php $this->remember('text'); ?></textarea>
      </p>
      <p>
        <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
      </p>
    </form>
    <?php if ($comments->have()): ?>
    <h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有1条评论'), _t('%d 条评论')); ?></h3>

    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

    <?php endif; ?>
  </div>
  <?php else: ?>
  <h3><?php _e('评论已关闭'); ?></h3>
  <?php endif; ?>
</div>