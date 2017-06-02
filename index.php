<?php
/**
 * Typecho-Theme-Typo-Wp
 * 
 * @package Typecho-Theme-Typo-Wp
 * @author ccizm
 * @version 1.2
 * @link http://ccizm.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
          <div class="content">
            <h1>文章</h1>
            <div class="clist">
              <ol>
                  <?php while($this->next()): ?>
                <li><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a><small>-<?php $this->date('Y.m.d'); ?></small></li>
                  <?php endwhile; ?>
                </ol>
                <?php $this->pageNav(); ?>
            </div>
            </div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
