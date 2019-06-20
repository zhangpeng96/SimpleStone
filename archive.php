<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<h3 class="archive-title"><?php $this->archiveTitle(array(
        'category' => _t('分类 %s 下的文章'),
        'search' => _t('包含关键字 %s 的文章'),
        'tag' => _t('标签 %s 下的文章'),
        'author' => _t('%s 发布的文章')
    ), '', ''); ?></h3>

<ul class="home post-list">
    <?php if ($this->have()): ?>
        <?php while ($this->next()): ?>

            <li class="post-list-item">
                <article class="post-block">
                    <h2 class="post-title"><a href="<?php $this->permalink() ?>" class="post-title-link"><?php $this->title() ?></a></h2>
<?php $this->need('post-meta.php'); ?>

                    <div class="post-content">
                        <?php $this->summary(); ?>

                    </div>
                </article>
            </li>

        <?php endwhile; ?>
    <?php else: ?>
        <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
    <?php endif; ?>

<?php $this->need('post-paginator.php'); ?>

<?php $this->need('footer.php'); ?>
