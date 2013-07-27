<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:34
         compiled from "/var/www/fwdcommerce/app/templates/admin/index/bootstrap.html" */ ?>
<?php /*%%SmartyHeaderCode:65223913151ee7eea4f6ac4-43222309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4da9a4c5d65ca0af11d882a88a48accee26f98de' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/index/bootstrap.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65223913151ee7eea4f6ac4-43222309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'account' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7eea5bf945_89694705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7eea5bf945_89694705')) {function content_51ee7eea5bf945_89694705($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin", "requires_login" => false)); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php if (get("/accounts",array('roles'=>"admin"))){?>
	<?php redirect(array("url" => "/login")) ?>
<?php }?>
	

<?php if ($_smarty_tpl->tpl_vars['params']->value['account']){?>

	
	<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['account']['roles'][] = "admin";?>
	
	
	<?php $_smarty_tpl->tpl_vars['account'] = new Smarty_variable(post("/accounts",$_smarty_tpl->tpl_vars['params']->value['account']), null, 0);?>

	<?php if ($_smarty_tpl->tpl_vars['account']->value['errors']){?>
		<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['account']->value['errors'], null, 0);?>
	<?php }else{ ?>

		
		<?php $_smarty_tpl->createLocalArrayVariable('session', null, 0);
$_smarty_tpl->tpl_vars['session']->value['account_id'] = $_smarty_tpl->tpl_vars['account']->value['id'];?>
		<?php redirect(array("url" => "/accounts")) ?>
	<?php }?>
<?php }?>

<div class="row">
	<div class="span3">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<form class="login well" action="" method="post">
			<fieldset>
				<div class="field control-group">
					<label>Admin name <span class="errors"><?php echo $_smarty_tpl->tpl_vars['errors']->value['name'];?>
</span></label>
					<input type="text" name="account[name]" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['account']['name'];?>
" />
				</div>
				<div class="field control-group">
					<label>Admin e-mail <span class="errors"><?php echo $_smarty_tpl->tpl_vars['errors']->value['email'];?>
</span></label>
					<input type="text" name="account[email]" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['account']['email'];?>
" />
				</div>
				<div class="field control-group">
					<label>Admin password <span class="errors"><?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>
</span></label>
					<input type="password" name="account[password]" value="" />
				</div>
			</fieldset>
			<div class="actions">
				<button type="submit" class="btn btn-primary">Create account</button>
			</div>
		</form>
	</div>
</div>
<?php }} ?>