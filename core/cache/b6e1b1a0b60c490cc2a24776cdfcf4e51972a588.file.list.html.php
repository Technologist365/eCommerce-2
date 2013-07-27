<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:03:26
         compiled from "/var/www/fwdcommerce/app/templates/admin/products/list.html" */ ?>
<?php /*%%SmartyHeaderCode:33653052151ee7f1e7899a5-31722074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6e1b1a0b60c490cc2a24776cdfcf4e51972a588' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/products/list.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33653052151ee7f1e7899a5-31722074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7f1e7c9776_24845944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7f1e7c9776_24845944')) {function content_51ee7f1e7c9776_24845944($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<div class="list-container">
	<div class="list-header well">
		<?php render(array("view" => "search", "for" => "products", "action" => $_smarty_tpl->tpl_vars['params']->value['action'], "actions" => array('all'=>array('where'=>array()),'active'=>array('icon'=>"icon-star",'where'=>array('is_active'=>"true")),'inactive'=>array('icon'=>"icon-star-empty",'where'=>array('is_active'=>"false")),'discontinued'=>array('icon'=>"icon-minus",'where'=>array('is_active'=>"discontinued"))))) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</div>
	<ul class="list-results with-images">
		<?php render(array("view" => "products/results")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</ul>
</div><?php }} ?>