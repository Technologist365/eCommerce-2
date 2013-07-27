<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:58
         compiled from "/var/www/fwdcommerce/app/templates/admin/accounts/list.html" */ ?>
<?php /*%%SmartyHeaderCode:131762900951ee7f02b2d983-93092609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '216bcdbb07d64594e16f0aaec12654f2acc75f23' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/accounts/list.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131762900951ee7f02b2d983-93092609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role' => 0,
    'params' => 0,
    'actions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7f02b776a0_26603815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7f02b776a0_26603815')) {function content_51ee7f02b776a0_26603815($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<div class="list-container">
	<div class="list-header well">
		<?php $_smarty_tpl->tpl_vars['actions'] = new Smarty_variable(array('all'=>array('where'=>array())), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['perms'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perms']->_loop = false;
 $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable;
 $_from = get("/settings/roles"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perms']->key => $_smarty_tpl->tpl_vars['perms']->value){
$_smarty_tpl->tpl_vars['perms']->_loop = true;
 $_smarty_tpl->tpl_vars['role']->value = $_smarty_tpl->tpl_vars['perms']->key;
?>
			<?php $_smarty_tpl->createLocalArrayVariable('actions', null, 0);
$_smarty_tpl->tpl_vars['actions']->value[pluralize($_smarty_tpl->tpl_vars['role']->value)] = array('where'=>array('roles'=>$_smarty_tpl->tpl_vars['role']->value));?>
		<?php } ?>
		<?php render(array("view" => "search", "for" => "accounts", "action" => $_smarty_tpl->tpl_vars['params']->value['action'], "actions" => $_smarty_tpl->tpl_vars['actions']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</div>
	<ul class="list-results">
		<?php render(array("view" => "accounts/results")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</ul>
</div>
<?php }} ?>