<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:23:10
         compiled from "/var/www/fwdcommerce/app/templates/admin/_default-list.html" */ ?>
<?php /*%%SmartyHeaderCode:18963131751ee83be0b8355-05413140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e60beeb08a5db157ca3f4d44c4c69147ca44049' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/_default-list.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18963131751ee83be0b8355-05413140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'for' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee83be0d23d8_18818677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee83be0d23d8_18818677')) {function content_51ee83be0d23d8_18818677($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<div class="list-container">
	<div class="list-header well">
		<?php render(array("view" => "search", "for" => $_smarty_tpl->tpl_vars['for']->value, "name" => $_smarty_tpl->tpl_vars['name']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</div>
	<ul class="list-results">
		<?php render(array("view" => ($_smarty_tpl->tpl_vars['for']->value)."/results")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</ul>
</div><?php }} ?>