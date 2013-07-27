<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:33:29
         compiled from "/var/www/fwdcommerce/app/templates/admin/accounts/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:39252513351ee86296eb2b3-67498286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d3d09c44c1675e255a1564cc93a9785ccaa3d24' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/accounts/edit.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39252513351ee86296eb2b3-67498286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'account' => 0,
    'errors' => 0,
    'role' => 0,
    'opt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee862982ada7_04977994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee862982ada7_04977994')) {function content_51ee862982ada7_04977994($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.capitalize.php';
?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "accounts")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['account'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2>Edit Account <small>/ <?php echo $_smarty_tpl->tpl_vars['account']->value['name'];?>
</small></h2>
		<div class="actions">
			<a class="btn view-cancel" href="">&times;</a>
		</div>
	</div>
	<form class="view-body edit" method="post" action="/accounts/edit/<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<div class="row">
				<div class="field control-group span2">
					<label>E-mail <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['email'];?>
</span></label>
					<input type="text" name="account[email]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" />
				</div>
				<div class="field control-group span2">
					<label>Name <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['name'];?>
</span></label>
					<input type="text" name="account[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
				</div>
			</div>
			<div class="row">
				<div class="field control-group span2">
					<label>Password <?php if (!$_smarty_tpl->tpl_vars['request']->value['post']){?><?php if ($_smarty_tpl->tpl_vars['account']->value['password']){?>(reset)<?php }else{ ?>(optional)<?php }?><?php }?>
						<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>
</span></label>
					<input type="password" name="account[password_reset]" value="" />
				</div>
				<div class="field control-group span2">
					<label>Phone (optional)<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['phone'];?>
</span></label>
					<input type="text" name="account[phone]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
" />
				</div>
			</div>
			<?php if (!$_smarty_tpl->tpl_vars['account']->value['password']&&is_array($_smarty_tpl->tpl_vars['account']->value['roles'])&&in_array("admin",$_smarty_tpl->tpl_vars['account']->value['roles'])){?>
				<div class="row">
					<label class="checkbox span4">
						<input type="checkbox" name="account[:auth]" value="true" />
						Send auth e-mail?
					</label>
				</div>
			<?php }?>
			<br />
			<input type="hidden" name="account[roles]" value="" />
			<table class="table table-bordered table-condensed checkboxes">
				<tr>
					<th colspan="2">Roles</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable;
 $_from = get("/settings/roles"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value){
$_smarty_tpl->tpl_vars['opt']->_loop = true;
 $_smarty_tpl->tpl_vars['role']->value = $_smarty_tpl->tpl_vars['opt']->key;
?>
					<?php $_smarty_tpl->tpl_vars['role'] = new Smarty_variable(is_numeric($_smarty_tpl->tpl_vars['role']->value)&&is_string($_smarty_tpl->tpl_vars['opt']->value) ? $_smarty_tpl->tpl_vars['opt']->value : $_smarty_tpl->tpl_vars['role']->value, null, 0);?>
					<?php if (!is_numeric($_smarty_tpl->tpl_vars['role']->value)){?>
						<tr>
							<td class="checkbox">
								<input type="checkbox" name="account[roles][]" value="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['account']->value['roles'])&&in_array($_smarty_tpl->tpl_vars['role']->value,$_smarty_tpl->tpl_vars['account']->value['roles'])){?>checked="checked"<?php }?> id="role_<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" />
							</td>
							<td>
								<label for="role_<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
"><?php echo smarty_modifier_capitalize(spacify($_smarty_tpl->tpl_vars['role']->value));?>

								<?php if ($_smarty_tpl->tpl_vars['opt']->value['description']){?>
									<em class="muted">&mdash; <?php echo $_smarty_tpl->tpl_vars['opt']->value['description'];?>
</em>
								<?php }?>
								</label>
							</td>
						</tr>
					<?php }?>
				<?php } ?>
			</table>
			<div class="row">
				<div class="field control-group span4">
					<label><span class="label label-info">Private notes</span></label>
					<textarea name="account[notes]" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['notes'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
				</div>
			</div>
		</div>
		<div class="view-footer actions">
			<button type="submit" class="btn btn-primary">Save account</button>
			<button type="button" class="btn view-back">Cancel</button>
		</div>
	</form>
</div>
<?php }} ?>