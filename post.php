<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
          <div class="content">
            <h1><?php $this->title() ?></h1>
            <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>&nbsp;&nbsp;
            <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>&nbsp;&nbsp;
            <?php _e('分类: '); ?><?php $this->category(','); ?>&nbsp;&nbsp;
            <?php $this->content(); ?>
              标签: <?php $this->tags(',', true, 'none'); ?>
            </div>
          <div class="content">
<?php include('comments.php'); ?>
            </div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
