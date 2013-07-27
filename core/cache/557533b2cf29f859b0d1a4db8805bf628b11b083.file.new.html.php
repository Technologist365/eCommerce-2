<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:31:01
         compiled from "/var/www/fwdcommerce/app/templates/admin/orders/new.html" */ ?>
<?php /*%%SmartyHeaderCode:201351227951ee8595285a29-61965160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '557533b2cf29f859b0d1a4db8805bf628b11b083' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/orders/new.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201351227951ee8595285a29-61965160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'errors' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee859531ee58_15472130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee859531ee58_15472130')) {function content_51ee859531ee58_15472130($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['order']['status'] = "incomplete";?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "orders")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['order'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2>New order</h2>
		<div class="actions">
			<a class="btn view-cancel" href="">&times;</a>
		</div>
	</div>
	<form class="view-body" method="post" action="">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<table class="table table-bordered">
				<tr><td>Create new account below or <a href="/accounts">choose an existing account</a></td></tr>
			</table>
			<fieldset>
				<div class="row">
					<div class="field control-group span2">
						<label>Name <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['account']['name'];?>
</span></label>
						<input type="text" name="order[account][name]" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['account']['name'];?>
" />
					</div>
					<div class="field control-group span2">
						<label>E-mail address <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['account']['email'];?>
</span></label>
						<input type="text" name="order[account][email]" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['account']['email'];?>
" />
					</div>
					<div class="field control-group span2">
						<label>Phone (optional) <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['account']['phone'];?>
</span></label>
						<input type="text" name="order[account][phone]" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['account']['phone'];?>
" />
					</div>
				</div>
			</fieldset>
		</div>
		<div class="view-footer">
			<div class="actions">
				<button type="submit" class="btn btn-primary">Create order</button>
				<button type="button" class="btn view-cancel">Close</button>
			</div>
		</div>
	</form>
</div>

<?php }} ?>