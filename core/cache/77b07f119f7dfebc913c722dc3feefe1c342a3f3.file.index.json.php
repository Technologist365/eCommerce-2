<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 08:59:48
         compiled from "/var/www/fwdcommerce/app/templates/alpha/checkout/index.json" */ ?>
<?php /*%%SmartyHeaderCode:172161114751f0e904d30b29-33915940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77b07f119f7dfebc913c722dc3feefe1c342a3f3' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/checkout/index.json',
      1 => 1374644607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172161114751f0e904d30b29-33915940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'email' => 0,
    'ex_account' => 0,
    'new_account' => 0,
    'request' => 0,
    'account_id' => 0,
    'coupon_result' => 0,
    'result' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f0e904e8f221_46376821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0e904e8f221_46376821')) {function content_51f0e904e8f221_46376821($_smarty_tpl) {?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>



<?php if ($_smarty_tpl->tpl_vars['params']->value['order']){?>

	
	<?php if (!isset($_smarty_tpl->tpl_vars['email'])) $_smarty_tpl->tpl_vars['email'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['email']->value = $_smarty_tpl->tpl_vars['params']->value['order']['email']){?>
	
		<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['email']->value);?>
<?php $_tmp1=ob_get_clean();?><?php if (!isset($_smarty_tpl->tpl_vars['ex_account'])) $_smarty_tpl->tpl_vars['ex_account'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['ex_account']->value = get("/accounts/".$_tmp1)){?>
		
			
			<?php $_smarty_tpl->tpl_vars['ex_account'] = new Smarty_variable(put("/accounts/".($_smarty_tpl->tpl_vars['ex_account']->value['id']),array('email'=>$_smarty_tpl->tpl_vars['email']->value,'name'=>$_smarty_tpl->tpl_vars['params']->value['order']['name'],'phone'=>$_smarty_tpl->tpl_vars['params']->value['order']['phone'])), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['account_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['ex_account']->value['id'], null, 0);?>
			
		<?php }else{ ?>
		
			
			<?php $_smarty_tpl->tpl_vars['new_account'] = new Smarty_variable(post("/accounts",array('email'=>$_smarty_tpl->tpl_vars['email']->value,'name'=>$_smarty_tpl->tpl_vars['params']->value['order']['name'],'phone'=>$_smarty_tpl->tpl_vars['params']->value['order']['phone'])), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['account_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['new_account']->value['id'], null, 0);?>
		<?php }?>
	<?php }else{ ?>
	
		
		<?php $_smarty_tpl->tpl_vars['account_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['cart']['account_id'], null, 0);?>
	<?php }?>

	
	
	<?php if ($_smarty_tpl->tpl_vars['params']->value['order']['billing']){?>
		<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['order']['billing']['method'] = "card";?>
	<?php }?>
	
	
	<?php $_smarty_tpl->tpl_vars['result'] = new Smarty_variable(put($_smarty_tpl->tpl_vars['request']->value['cart'],array('order'=>$_smarty_tpl->tpl_vars['params']->value['order'],'account_id'=>$_smarty_tpl->tpl_vars['account_id']->value)), null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['params']->value['coupon_code']!==null){?>

	<?php $_smarty_tpl->tpl_vars['coupon_result'] = new Smarty_variable(put($_smarty_tpl->tpl_vars['request']->value['cart'],array('coupon_code'=>$_smarty_tpl->tpl_vars['params']->value['coupon_code'])), null, 0);?>

	
	<?php if ($_smarty_tpl->tpl_vars['coupon_result']->value['errors']){?>
	
		<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['result']->value['errors'], null, 0);?>
		<?php $_smarty_tpl->createLocalArrayVariable('errors', null, 0);
$_smarty_tpl->tpl_vars['errors']->value['order']['coupon_code'] = $_smarty_tpl->tpl_vars['coupon_result']->value['errors']['coupon_code'];?>
		<?php $_smarty_tpl->createLocalArrayVariable('result', null, 0);
$_smarty_tpl->tpl_vars['result']->value['errors'] = $_smarty_tpl->tpl_vars['errors']->value;?>
	<?php }?>
	
	
	<?php if (!$_smarty_tpl->tpl_vars['params']->value['coupon_code']){?>
		<?php  delete(($_smarty_tpl->tpl_vars['request']->value['cart'])."/discounts"); ?>
	<?php }?>
<?php }?>


<?php $GLOBALS['__view_result'] = json_encode($_smarty_tpl->tpl_vars['result']->value); return; ?>
<?php }} ?>