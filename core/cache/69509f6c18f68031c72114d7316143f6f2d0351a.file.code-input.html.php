<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:35:00
         compiled from "/var/www/fwdcommerce/app/templates/admin/discounts/code-input.html" */ ?>
<?php /*%%SmartyHeaderCode:90280899851ee868462f7f8-94077608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69509f6c18f68031c72114d7316143f6f2d0351a' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/discounts/code-input.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90280899851ee868462f7f8-94077608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'codes' => 0,
    'name' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee8684666e25_30338628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee8684666e25_30338628')) {function content_51ee8684666e25_30338628($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['codes'] = new Smarty_variable(!is_array($_smarty_tpl->tpl_vars['codes']->value) ? explode("\n",$_smarty_tpl->tpl_vars['codes']->value) : $_smarty_tpl->tpl_vars['codes']->value, null, 0);?>
<textarea rows="<?php echo count($_smarty_tpl->tpl_vars['codes']->value)+1;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php  $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['codes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['code']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['code']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['code']->key => $_smarty_tpl->tpl_vars['code']->value){
$_smarty_tpl->tpl_vars['code']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->iteration++;
 $_smarty_tpl->tpl_vars['code']->last = $_smarty_tpl->tpl_vars['code']->iteration === $_smarty_tpl->tpl_vars['code']->total;
?><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
<?php if (!$_smarty_tpl->tpl_vars['code']->last){?><?php echo "\n";?>
<?php }?><?php } ?></textarea><?php }} ?>