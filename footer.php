<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </section>

    <footer>
        <div class="copyright">
            &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
            <br>
            <?php _e('<a href="https://www.zhangpeng96.com/" target="_blank">SimpleStone</a> 主题开源 | <a href="https://www.typecho.org">Typecho</a> 强力驱动'); ?>
        </div>
    </footer>
</div>

<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/pangu.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/prism.min.js'); ?>" data-no-instant></script>
<?php if (!empty($this->options->pjax) && in_array('InstantClick', $this->options->pjax)): ?>
<script src="//cdn.bootcss.com/instantclick/3.0.1/instantclick.min.js" data-no-instant></script>
<script data-no-instant>
    InstantClick.on('change', function (isInitialLoad) {
        if (isInitialLoad === false) {
            if (typeof Prism !== 'undefined') Prism.highlightAll(true, null);
        }
    });
    InstantClick.init();
</script>
<?php else: ?>
    <script src="<?php $this->options->themeUrl('js/prism.min.js'); ?>" data-no-instant></script>
<?php endif; ?>

</body>

</html>