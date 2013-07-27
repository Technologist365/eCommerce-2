<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:34:58
         compiled from "/var/www/fwdcommerce/app/templates/admin/discounts/list.html" */ ?>
<?php /*%%SmartyHeaderCode:14533785051ee86823e6689-48819145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '480c37baeb92ea71baa729ba003a0a8c30362db9' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/discounts/list.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14533785051ee86823e6689-48819145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee868241ed21_37922920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee868241ed21_37922920')) {function content_51ee868241ed21_37922920($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<div class="list-container">
	<div class="list-header well">
		<?php render(array("view" => "search", "for" => "discounts", "action" => $_smarty_tpl->tpl_vars['params']->value['action'], "actions" => array('all'=>array('where'=>array()),'valid'=>array('icon'=>"icon-star",'where'=>array("is_valid"=>"true")),"not valid"=>array('icon'=>"icon-star-empty",'where'=>array("is_valid"=>"false"))))) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</div>
	<ul class="list-results">
		<?php render(array("view" => "discounts/results")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</ul>
</div><?php }} ?>