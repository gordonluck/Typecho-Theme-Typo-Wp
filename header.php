<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#FF4C00">
    <meta name="viewport" content="width=device-width">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/app.css'); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/grid.css'); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/index.css'); ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" />
  </head>
  <body>
    <!--[if !IE]><div class="browsehappy">当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>.</div><![endif]-->
      <center>
        <h1><?php $this->options->title() ?></h1>
        <p><?php $this->options->description() ?></p>
      </center>
      <div class="grid grid-pad">
        <div class="col-8-12">
            <div class="content">
              <a href="<?php $this->options->siteUrl(); ?>">首页</a>&nbsp;&nbsp;
                <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<a href="{permalink}">{title}</a>&nbsp;&nbsp;'); ?>
          </div>
