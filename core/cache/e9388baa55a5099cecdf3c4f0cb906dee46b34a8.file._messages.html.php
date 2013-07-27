<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:34
         compiled from "/var/www/fwdcommerce/app/templates/admin/_messages.html" */ ?>
<?php /*%%SmartyHeaderCode:69812282051ee7eea5cc531-27869873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9388baa55a5099cecdf3c4f0cb906dee46b34a8' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/_messages.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69812282051ee7eea5cc531-27869873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'field' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7eea627033_34954535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7eea627033_34954535')) {function content_51ee7eea627033_34954535($_smarty_tpl) {?>
<div class="view-messages">
	<?php if ($_smarty_tpl->tpl_vars['request']->value['errors']){?>
		<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['request']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['message']->key;
?>
			<?php if (is_numeric($_smarty_tpl->tpl_vars['field']->value)&&is_string($_smarty_tpl->tpl_vars['message']->value)){?>
				<div class="alert alert-error">
					<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

				</div>
			<?php }?>
		<?php } ?>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['request']->value['warnings']){?>
		<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['request']->value['warnings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
			<div class="alert">
				<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

			</div>
		<?php } ?>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['request']->value['notices']){?>
		<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['request']->value['notices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
			<div class="alert alert-success">
				<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

			</div>
		<?php } ?>
	<?php }?>
</div><?php }} ?>