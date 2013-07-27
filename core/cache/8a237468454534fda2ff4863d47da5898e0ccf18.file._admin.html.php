<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:33
         compiled from "/var/www/fwdcommerce/app/templates/admin/_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:111152623551ee7ee97b2918-09966535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a237468454534fda2ff4863d47da5898e0ccf18' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/_admin.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111152623551ee7ee97b2918-09966535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session' => 0,
    'request' => 0,
    'requires_login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ee97e5a11_63663048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ee97e5a11_63663048')) {function content_51ee7ee97e5a11_63663048($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['session']->value['account_id']){?>

	
	<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['account'] = get("/accounts/".($_smarty_tpl->tpl_vars['session']->value['account_id']));?>
<?php }?>


<?php if (!$_smarty_tpl->tpl_vars['request']->value['account']&&$_smarty_tpl->tpl_vars['requires_login']->value!==false){?>
		
	<?php redirect(array("url" => "/login")) ?>
<?php }?><?php }} ?>