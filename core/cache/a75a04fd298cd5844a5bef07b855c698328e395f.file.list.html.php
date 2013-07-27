<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:18:51
         compiled from "/var/www/fwdcommerce/app/templates/admin/orders/list.html" */ ?>
<?php /*%%SmartyHeaderCode:165818061551ee82bb837b69-96230993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a75a04fd298cd5844a5bef07b855c698328e395f' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/orders/list.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165818061551ee82bb837b69-96230993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee82bb8e2074_21477571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee82bb8e2074_21477571')) {function content_51ee82bb8e2074_21477571($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<div class="list-container">
	<div class="list-header well">
		<?php render(array("view" => "search", "for" => "orders", "action" => $_smarty_tpl->tpl_vars['params']->value['action'], "action_limit" => false, "actions" => array('all'=>array('where'=>array()),'pending'=>array('icon'=>"icon-time",'where'=>array('status'=>"pending")),'ready'=>array('icon'=>"icon-check",'where'=>array('status'=>"ready")),'shipped'=>array('icon'=>"icon-plane",'where'=>array('status'=>"shipped")),'cancelled'=>array('icon'=>"icon-ban-circle",'where'=>array('status'=>"cancelled")),'returned'=>array('icon'=>"icon-share-alt",'where'=>array('status'=>"returned")),'hold'=>array('icon'=>"icon-exclamation-sign",'where'=>array('status'=>"hold"))))) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</div>
	<ul class="list-results with-images">
		<?php render(array("view" => "orders/results")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</ul>
</div><?php }} ?>