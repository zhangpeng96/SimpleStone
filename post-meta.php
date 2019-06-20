<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

            <div class="post-info">
                <div>
                    <i class="fa fa-user"></i> 
                    <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                </div>
                <div>
                    <i class="fa fa-calendar"></i> 
                    <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y/m/d'); ?></time>
                </div>
                <div>
                    <i class="fa fa-folder-open"></i> 
                    <?php $this->category(' '); ?>

                </div>
                <?php if(tagsExisted($this)): ?>
                
                <div>
                    <i class="fa fa-tags"></i> 
                    <?php $this->tags(' ', true); ?>

                </div>
                <?php endif; ?>

                <?php if(commentsExisted($this)): ?>

                <div>
                    <i class="fa fa-comments"></i> 
                    <a href="#comments"><?php $this->commentsNum(_t(''), _t('1 条'), _t('%d 条')); ?></a>
                </div>
                <?php endif; ?>
                <?php if ($this->user->hasLogin()): ?>

                <div>
                    <i class="fa fa-edit"></i> 
                    <a href="<?php $this->options->adminUrl(); ?>write-<?php if ($this->is('post')): ?>post<?php else: ?>page<?php endif; ?>.php?cid=<?php echo $this->cid; ?>" target="_blank">编辑</a>
                </div>
                <?php endif; ?>

            </div>