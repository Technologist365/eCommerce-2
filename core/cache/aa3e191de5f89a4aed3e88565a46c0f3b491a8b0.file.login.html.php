<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:33
         compiled from "/var/www/fwdcommerce/app/templates/admin/index/login.html" */ ?>
<?php /*%%SmartyHeaderCode:36837930651ee7ee9d939e5-26088831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa3e191de5f89a4aed3e88565a46c0f3b491a8b0' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/index/login.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36837930651ee7ee9d939e5-26088831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'my_account' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ee9e4e250_01942988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ee9e4e250_01942988')) {function content_51ee7ee9e4e250_01942988($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin", "requires_login" => false)); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	

<?php if ($_smarty_tpl->tpl_vars['params']->value['account']){?>
	
	<?php $_smarty_tpl->tpl_vars['my_account'] = new Smarty_variable(get("/accounts",array('login'=>$_smarty_tpl->tpl_vars['params']->value['account'],'role'=>'admin')), null, 0);?>
	
	<?php if (!$_smarty_tpl->tpl_vars['my_account']->value['errors']){?>
	
		
		<?php $_smarty_tpl->createLocalArrayVariable('session', null, 0);
$_smarty_tpl->tpl_vars['session']->value['account_id'] = $_smarty_tpl->tpl_vars['my_account']->value['id'];?>
		<?php redirect(array("url" => "/")) ?>
		
	<?php }else{ ?>
		<?php echo flash(array('error'=>"Invalid login, try again"),$_smarty_tpl);?>

	<?php }?>

<?php }else{ ?>

	
	<?php if (!get("/accounts",array('roles'=>"admin"))){?>
		<?php redirect(array("url" => "/bootstrap")) ?>
	<?php }?>

<?php }?>
	

<?php if ($_smarty_tpl->tpl_vars['request']->value['ajax']){?>

	<script type="text/javascript">window.location.href = "/login";</script>
	
<?php }else{ ?>

	<div class="row">
		<div class="span3">
			<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
			<form class="login well" action="" method="post">
				<fieldset>
					<div class="field email control-group">
						<label>E-mail</label>
						<input type="text" name="account[email]" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['account']['email'];?>
" />
					</div>
					<div class="field password control-group">
						<label>Password</label>
						<input type="password" name="account[password]" />
					</div>
				</fieldset>
				<div class="actions">
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div>
	</div>
	
<?php }?>
<?php }} ?>