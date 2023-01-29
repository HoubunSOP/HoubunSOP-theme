<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div><!-- end .row -->
</div>
</div><!-- end #body -->
<style>
#footer {
  background-color: rgb(255 255 255/80%);
  backdrop-filter: saturate(120%) blur(20px);
  transition: 0.3s ease all;
  border-radius: 24px 24px 0 0;
  margin-top: 20px;
  border: 1px solid white;
}
</style>
<footer id="footer" role="contentinfo">
  <div>
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('<a href="https://space.bilibili.com/1585955812" target="_blank">©️ 芳文观星台</a>'); ?>.
  </div>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>

</html>