<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


    <div class="post">
        <article class="post-block">
            <h1 class="post-title"><?php $this->title() ?></h1>
<?php $this->need('post-meta.php'); ?>

            <div class="post-content">
                <?php $this->content(); ?>
            
            </div>
        </article>

        <div class="paginator">
            <?php $this->thePrev('%s', '', ['title' => '上一篇', 'tagClass' => 'prev']); ?><?php $this->theNext('%s', '', ['title' => '下一篇', 'tagClass' => 'next']); ?>

        </div>

        <?php $this->need('comments.php'); ?>

    </div>
<?php $this->need('footer.php'); ?>