<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:32
         compiled from "/var/www/fwdcommerce/app/templates/alpha/_session.html" */ ?>
<?php /*%%SmartyHeaderCode:182461653451ee7ee8990430-08284047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e12949ba57249a0ecb66cd4a9b79e76c91f6460' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/_session.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182461653451ee7ee8990430-08284047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'setup' => 0,
    'params' => 0,
    'session' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ee89ff512_48902616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ee89ff512_48902616')) {function content_51ee7ee89ff512_48902616($_smarty_tpl) {?>


<?php if (!$_smarty_tpl->tpl_vars['request']->value['session_handled']){?>

	
	<?php $_smarty_tpl->tpl_vars['setup'] = new Smarty_variable(get("/entries/--setup"), null, 0);?>
	<?php if (!$_smarty_tpl->tpl_vars['setup']->value||in($_smarty_tpl->tpl_vars['params']->value['setup'],array('test','yes','no'))){?>
		<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['layout'] = "setup";?>
		<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['setup'] = 'yes';?>
	<?php }?>

	
	<?php if ($_smarty_tpl->tpl_vars['session']->value['cart_id']){?>
		<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['cart'] = get("/carts/".($_smarty_tpl->tpl_vars['session']->value['cart_id']));?>
	<?php }?>
	
	
	<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = get("/channels/blocks/entries"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value){
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
		<?php ob_start();?><?php echo underscore($_smarty_tpl->tpl_vars['block']->value['slug']);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value[$_tmp1."_block"] = $_smarty_tpl->tpl_vars['block']->value;?>
	<?php } ?>
	
	<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['session_handled'] = true;?>
<?php }?><?php }} ?>