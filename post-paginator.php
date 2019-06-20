<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if (ceil($this->getTotal() / $this->parameter->pageSize) >= 1): ?>

    <nav class="paginator">
        <div class="paginator-doc">第 <?php if ($this->_currentPage > 1) echo $this->_currentPage; else echo '1'; ?>
 页，共 <?php if ceil($this->getTotal() / $this->parameter->pageSize) == 0 echo '1'; else echo ceil($this->getTotal() / $this->parameter->pageSize)?> 页</div>
    <?php $this->pageLink('上一页'); ?>
    <?php $this->pageLink('下一页', 'next'); ?>

    </nav>
<?php endif; ?>