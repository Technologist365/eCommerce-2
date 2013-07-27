<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:23:29
         compiled from "/var/www/fwdcommerce/app/templates/admin/carts/list.html" */ ?>
<?php /*%%SmartyHeaderCode:169925594851ee83d11b8f13-68201871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '376dc55e750e8dca2f87c461e6f33f397cf3f785' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/carts/list.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169925594851ee83d11b8f13-68201871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee83d11ec1a1_94033027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee83d11ec1a1_94033027')) {function content_51ee83d11ec1a1_94033027($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<div class="list-container">
	<div class="list-header well">
		<?php render(array("view" => "search", "for" => "carts", "action" => $_smarty_tpl->tpl_vars['params']->value['action'], "actions" => array('all'=>array('where'=>array()),'converted'=>array('where'=>array('order_id'=>array('$exists'=>"true"))),'shopping'=>array('where'=>array('order_id'=>array('$exists'=>"false")))))) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</div>
	<ul class="list-results with-images">
		<?php render(array("view" => "carts/results")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</ul>
</div>
<?php }} ?>