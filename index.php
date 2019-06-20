<?php
/**
 * SimpleStone 是一款优美的极简主义主题，用于替代 Typecho 的默认主题
 *
 * @package SimpleStone
 * @author zhangpeng96
 * @version 0.2.4
 * @link https://github.com/zhangpeng96/SimpleStone
 * 源代码魔改自 Apollo
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

    <ul class="home post-list">
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

<?php $this->need('post-paginator.php'); ?>

<?php $this->need('footer.php'); ?>
