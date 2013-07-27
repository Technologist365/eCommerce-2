<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:35:00
         compiled from "/var/www/fwdcommerce/app/templates/admin/discounts/entry.html" */ ?>
<?php /*%%SmartyHeaderCode:161124386051ee86842a0289-34050470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595d8d55bee388b7b973a5e800db2ef2fac42722' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/discounts/entry.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161124386051ee86842a0289-34050470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'discount' => 0,
    'params' => 0,
    'rule' => 0,
    'rule_id' => 0,
    'errors' => 0,
    'role' => 0,
    'opt' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee8684503332_22577541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee8684503332_22577541')) {function content_51ee8684503332_22577541($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.capitalize.php';
?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "discounts")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php $_smarty_tpl->tpl_vars['discount'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2>
			<?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>

			<small>
				<?php if ($_smarty_tpl->tpl_vars['discount']->value['is_valid']){?>
					<span class="label label-success">Valid</span>
				<?php }else{ ?>
					<span class="label">Not valid</span>
				<?php }?>
			</small>
		</h2>
		<div class="actions">
			<a class="btn view-back" href="">Back</a>
		</div>
	</div>
	<form class="view-body tabbable" method="post" action="/discounts/entry/<?php echo $_smarty_tpl->tpl_vars['discount']->value['id'];?>
">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<ul class="nav nav-pills">
				<li class="<?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>"><a href="">Details</a></li>
				<?php if ($_smarty_tpl->tpl_vars['discount']->value['apply_to']){?>
					<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="apply"){?>active<?php }?>"><a href="" data-pane="apply"><?php echo pluralize(array("word" => ucfirst($_smarty_tpl->tpl_vars['discount']->value['apply_to']))); ?></a></li>
				<?php }?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="orders"){?>active<?php }?>"><a href="" data-pane="orders">Orders</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane default <?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>">
				
					<?php if ($_smarty_tpl->tpl_vars['discount']->value['rules']){?>
						<table class="table table-bordered table-condensed">
							<tr>
								<th colspan="3">Discount rules</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rule']->_loop = false;
 $_smarty_tpl->tpl_vars['rule_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['discount']->value['rules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rule']->key => $_smarty_tpl->tpl_vars['rule']->value){
$_smarty_tpl->tpl_vars['rule']->_loop = true;
 $_smarty_tpl->tpl_vars['rule_id']->value = $_smarty_tpl->tpl_vars['rule']->key;
?>
								<tr>
									<td>
										<div class="with-actions">
											<span class="label"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rule']->value['type'])===null||$tmp==='' ? "sub-total" : $tmp);?>
</span>&nbsp;
											<?php echo $_smarty_tpl->tpl_vars['rule']->value['value'];?>
 off
											<code class="act">
												<a class="view-link" href="/discounts/rule/<?php echo $_smarty_tpl->tpl_vars['discount']->value['id'];?>
/rules/<?php echo $_smarty_tpl->tpl_vars['rule_id']->value;?>
">edit</a>
											</code>
										</div>
									</td>
									<td>
										<?php render(array("view" => "discounts/ruledesc", "rule" => $_smarty_tpl->tpl_vars['rule']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
									</td>
								</tr>
							<?php } ?>
						</table>
					<?php }else{ ?>
						<!--<table class="table table-bordered">
							<tr>
								<td>No discounts</td>
							</tr>
						</table>-->
					<?php }?>
					<button type="button" class="btn btn-success view-link" data-href="/discounts/rule/<?php echo $_smarty_tpl->tpl_vars['discount']->value['id'];?>
/rules"><i class="icon-plus-sign icon-white"></i> Add discount</button>
					<br /><br />
					<div class="row">
						<div class="field control-group span2">
							<label>Discount name <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['name'];?>
</span></label>
							<input type="text" name="discount[name]" value="<?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
" />
						</div>
					</div>
					<div class="row">
						<div class="field control-group span4">
							<label>Public description <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['description'];?>
</span></label>
							<textarea name="discount[description]" cols="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['description']);?>
</textarea>
						</div>
					</div>
					<div class="row">
						<div class="field control-group span2">
							<label>Valid from (date) <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['conditions']['date_valid'];?>
</span></label>
							<input type="text" name="discount[conditions][date_valid]" value="<?php echo $_smarty_tpl->tpl_vars['discount']->value['conditions']['date_valid'];?>
" />
						</div>
						<div class="field control-group span2">
							<label>Expires on (date) <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['conditions']['date_expires'];?>
</span></label>
							<input type="text" name="discount[conditions][date_expires]" value="<?php echo $_smarty_tpl->tpl_vars['discount']->value['conditions']['date_expires'];?>
" />
						</div>
					</div>
					<div class="row">
						<div class="field control-group span2">
							<label>Status</label>
							<select name="discount[conditions][is_active]">
								<option value="true" <?php if ($_smarty_tpl->tpl_vars['discount']->value['conditions']['is_active']){?>selected="selected"<?php }?>>Active</option>
								<option value="false" <?php if (!$_smarty_tpl->tpl_vars['discount']->value['conditions']['is_active']){?>selected="selected"<?php }?>>Not active</option>
							</select>
						</div>
						<div class="field control-group span1">
							<label>Expire after # uses? <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['conditions']['max'];?>
</span></label>
							<input type="text" name="discount[conditions][max]" value="<?php echo $_smarty_tpl->tpl_vars['discount']->value['conditions']['max'];?>
" />
						</div>
					</div>
					
				</div>
				<div class="tab-pane apply <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="apply"){?>active<?php }?>">
				
					<?php if ($_smarty_tpl->tpl_vars['discount']->value['apply_to']=="code"){?>
					
						
						<div class="row">
							<div class="field control-group span2">
								<label>Enter discount codes (<?php echo count($_smarty_tpl->tpl_vars['discount']->value['codes']);?>
) <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['codes'];?>
</span></label>
								<?php render(array("view" => "discounts/code-input", "codes" => $_smarty_tpl->tpl_vars['discount']->value['codes'], "name" => "discount[codes]")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
							</div>
							<div class="field control-group span1">
								<label>Max # uses per code <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['conditions']['max_per_code'];?>
</span></label>
								<input type="text" name="discount[conditions][max_per_code]" value="<?php echo $_smarty_tpl->tpl_vars['discount']->value['conditions']['max_per_code'];?>
" />
							</div>
						</div>
						
					<?php }elseif($_smarty_tpl->tpl_vars['discount']->value['apply_to']=="role"){?>
					
						
						<input type="hidden" name="discount[account_roles]" value="" />
						<table class="table table-bordered table-condensed checkboxes">
							<tr>
								<th colspan="2">Apply valid discount to:</th>
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
											<input type="checkbox" name="discount[account_roles][]" value="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['discount']->value['account_roles'])&&in_array($_smarty_tpl->tpl_vars['role']->value,$_smarty_tpl->tpl_vars['discount']->value['account_roles'])){?>checked="checked"<?php }?> id="role_<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
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
						
					<?php }elseif($_smarty_tpl->tpl_vars['discount']->value['apply_to']=="account"){?>
					
						
						<div class="row">
							<div class="field control-group span3">
								<label>Apply valid discount to Account ID #:</label>
								<input type="text" name="discount[account_ids][]" value="<?php echo $_smarty_tpl->tpl_vars['discount']->value['account_ids'][0];?>
" />
							</div>
						</div>
					<?php }?>
				
				</div>
				<div class="tab-pane orders <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="orders"){?>active<?php }?>">
					
					<?php if ($_smarty_tpl->tpl_vars['discount']->value['orders']){?>
						<table class="table table-bordered table-condensed">
							<tr>
								<th colspan="5">Order(s) that used this discount:</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discount']->value['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
								<tr>
									<td><a class="view-link" href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">Order #<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</a></td>
									<td><?php echo money($_smarty_tpl->tpl_vars['order']->value['grand_total']);?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['coupon_code'];?>
</td>
									<td><?php echo age_date($_smarty_tpl->tpl_vars['order']->value['date_created']);?>
</td>
								</tr>
							<?php } ?>
						</table>
					<?php }else{ ?>
						<table class="table table-bordered">
							<tr>
								<td>No orders have used this discount</td>
							</tr>
						</table>
					<?php }?>
					
				</div>
			</div>
		</div>
		<div class="view-footer actions">
			<span class="tab-controls default">
				<button type="submit" class="btn btn-primary">Save changes</button>
				<?php if (!$_smarty_tpl->tpl_vars['discount']->value['is_deleted']){?>
					<a class="trash view-link" href="/discounts/entry/<?php echo $_smarty_tpl->tpl_vars['discount']->value['id'];?>
?discount[:delete]=true" data-post="true"><i class="icon-trash"></i></a>
				<?php }else{ ?>
					<a class="trash view-link undo" href="/discounts/entry/<?php echo $_smarty_tpl->tpl_vars['discount']->value['id'];?>
?discount[:restore]=true" data-post="true">Undo <i class="icon-trash"></i></a>
				<?php }?>
			</span>
			<span class="tab-controls apply">
				<button type="submit" class="btn btn-primary">Save changes</button>
				<?php if ($_smarty_tpl->tpl_vars['discount']->value['apply_to']=="code"){?>
					<button type="button" class="btn view-link" data-href="/discounts/code-history/<?php echo $_smarty_tpl->tpl_vars['discount']->value['id'];?>
">View history</button>
				<?php }?>
			</span>
			<button type="button" class="btn view-cancel">Close</button>
		</div>
	</form>
</div>
<?php }} ?>