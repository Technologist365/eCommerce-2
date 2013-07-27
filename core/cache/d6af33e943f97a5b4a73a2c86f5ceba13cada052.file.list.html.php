<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:19:39
         compiled from "/var/www/fwdcommerce/app/templates/admin/entries/list.html" */ ?>
<?php /*%%SmartyHeaderCode:6381110551ee82ebef8760-98603987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6af33e943f97a5b4a73a2c86f5ceba13cada052' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/entries/list.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6381110551ee82ebef8760-98603987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'channel_slug' => 0,
    'channel' => 0,
    'action_field' => 0,
    'key' => 0,
    'val' => 0,
    'params' => 0,
    'actions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee82ec059a67_75182267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee82ec059a67_75182267')) {function content_51ee82ec059a67_75182267($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php args(array(0 => 'channel_slug'), $_smarty_tpl) ?>
<?php $_smarty_tpl->tpl_vars['channel']->value = get("/channels/".($_smarty_tpl->tpl_vars['channel_slug']->value), array()); ?>

<div class="list-container">
	<div class="list-header well">
		<?php if ($_smarty_tpl->tpl_vars['channel']->value['fields_by_id']['categories']['type']=='select'){?>
			<?php $_smarty_tpl->tpl_vars['action_field'] = new Smarty_variable("categories", null, 0);?>
		<?php }elseif($_smarty_tpl->tpl_vars['channel']->value['fields_by_id']['status']['type']=='select'){?>
			<?php $_smarty_tpl->tpl_vars['action_field'] = new Smarty_variable("status", null, 0);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['action_field']->value){?>
			<?php $_smarty_tpl->tpl_vars['actions'] = new Smarty_variable(array('all'=>array('where'=>array())), null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel']->value['fields_by_id'][$_smarty_tpl->tpl_vars['action_field']->value]['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
				<?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable((is_numeric($_smarty_tpl->tpl_vars['key']->value) ? $_smarty_tpl->tpl_vars['val']->value : $_smarty_tpl->tpl_vars['key']->value), null, 0);?>
				<?php $_smarty_tpl->createLocalArrayVariable('actions', null, 0);
$_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['key']->value] = array('where'=>array(($_smarty_tpl->tpl_vars['action_field']->value)=>$_smarty_tpl->tpl_vars['key']->value));?>
			<?php } ?>
		<?php }?>
		<?php render(array("view" => "search", "for" => "entries", "name" => mb_strtolower(spacify($_smarty_tpl->tpl_vars['channel_slug']->value), 'UTF-8'), "action" => $_smarty_tpl->tpl_vars['params']->value['action'], "actions" => $_smarty_tpl->tpl_vars['actions']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</div>
	<ul class="list-results">
		<?php render(array("view" => "entries/results", "channel" => $_smarty_tpl->tpl_vars['channel']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</ul>
</div>
<?php }} ?>