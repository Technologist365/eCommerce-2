<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:31:20
         compiled from "/var/www/fwdcommerce/app/templates/admin/carts/entry.html" */ ?>
<?php /*%%SmartyHeaderCode:79905358751ee85a8ed0193-93549184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36a809e0ff6d373ece0fcc272bad860f8f395a10' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/carts/entry.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79905358751ee85a8ed0193-93549184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'cart' => 0,
    'params' => 0,
    'item' => 0,
    'option' => 0,
    'role' => 0,
    'card' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee85a92d1798_53571047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee85a92d1798_53571047')) {function content_51ee85a92d1798_53571047($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.capitalize.php';
?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "carts")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php $_smarty_tpl->tpl_vars['cart'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2>Cart #<?php echo $_smarty_tpl->tpl_vars['cart']->value['id'];?>

			<small>/ <?php echo count($_smarty_tpl->tpl_vars['cart']->value['items']);?>
 <?php echo pluralize(array("word" => "item", "if_many" => $_smarty_tpl->tpl_vars['cart']->value['items'])); ?>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']){?>
					<span class="label label-success">Order #<?php echo $_smarty_tpl->tpl_vars['cart']->value['order_id'];?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['cart']->value['abandoned']){?>
					<span class="label label-important">Abandoned</span>
				<?php }else{ ?>
					<span class="label">Shopping</span>
				<?php }?>
			</small>
		</h2>
		<div class="actions">
			<a class="btn view-back" href="">Back</a>
		</div>
	</div>
	<form class="view-body" method="post" action="">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content tabbable">
			
			<div class="tab-content">
				<div class="tab-pane items <?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>">
					
					<?php if ($_smarty_tpl->tpl_vars['cart']->value['items']){?>
						<table class="table table-bordered table-condensed">
							<tr>
								<th>Item</th>
								<th class="qty">Qty</th>
								<th class="total">Price</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<tr>
									<td>
										<a class="view-link" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
										<?php if ($_smarty_tpl->tpl_vars['item']->value['variant']){?>
											<br /><em><?php echo $_smarty_tpl->tpl_vars['item']->value['variant']['name'];?>
</em>
										<?php }?>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
									<td><?php echo money(($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity']));?>
 <small class="muted"><?php if ($_smarty_tpl->tpl_vars['item']->value['quantity']>1){?> <?php echo money($_smarty_tpl->tpl_vars['item']->value['price']);?>
 each<?php }?></small></td>
								</tr>
								<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
									<tr class="option">
										<td>&mdash; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
										<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['option']->value['quantity'])===null||$tmp==='' ? "&mdash;" : $tmp);?>
</td>
										<td><?php if ($_smarty_tpl->tpl_vars['option']->value['price']){?><?php echo money(($_smarty_tpl->tpl_vars['option']->value['price']*$_smarty_tpl->tpl_vars['option']->value['quantity']));?>
 <small class="muted nowrap"><?php if ($_smarty_tpl->tpl_vars['option']->value['quantity']>1){?> <?php echo money($_smarty_tpl->tpl_vars['option']->value['price']);?>
 each<?php }?><?php }else{ ?>&mdash;<?php }?></small></td>
									</tr>
								<?php } ?>
							<?php } ?>
							<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['shipping']['method']){?>
								<tr>
									<td>Shipping: <?php echo $_smarty_tpl->tpl_vars['cart']->value['order']['shipping']['method'];?>
</td>
									<td>&mdash;</td>
									<td><?php echo money(($_smarty_tpl->tpl_vars['cart']->value['shipping_total']-$_smarty_tpl->tpl_vars['cart']->value['shipping_discount']));?>
 <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping_discount']){?><strike class="muted"><?php echo money($_smarty_tpl->tpl_vars['cart']->value['shipping_total']);?>
</strike><?php }?></td>
								</tr>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['cart']->value['tax_total']>0){?>
								<tr>
									<td><?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['cart']->value['taxes']['sales']['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['taxes']['vat']['name'] : $tmp))===null||$tmp==='' ? "Taxes" : $tmp);?>
</td>
									<td>&mdash;</td>
									<td><?php echo money($_smarty_tpl->tpl_vars['cart']->value['tax_total']);?>
</td>
								</tr>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['cart']->value['discount_total']){?>
								<tr>
									<td>
										Discount <?php if ($_smarty_tpl->tpl_vars['cart']->value['discounts']['coupon']){?>(<a href="/discounts/entry/<?php echo $_smarty_tpl->tpl_vars['cart']->value['discounts']['coupon']['id'];?>
" class="view-link"><?php echo $_smarty_tpl->tpl_vars['cart']->value['coupon_code'];?>
</a>)<?php }?>
									</td>
									<td>&mdash;</td>
									<td><?php echo money((-$_smarty_tpl->tpl_vars['cart']->value['discount_total']));?>
</td>
								</tr>
							<?php }?>
							<tr>
								<th>Total</td>
								<th><?php echo $_smarty_tpl->tpl_vars['cart']->value['quantity'];?>
</th>
								<th>
									<?php echo money($_smarty_tpl->tpl_vars['cart']->value['grand_total']);?>

								</th>
							</tr>
						</table>
					<?php }else{ ?>
						<table class="table table-bordered">
							<tr><td>No items</td></tr>
						</table>
					<?php }?>
					
					<table class="table table-bordered table-condensed">
						<?php if ($_smarty_tpl->tpl_vars['cart']->value['account_id']){?>
							<tr>
								<th width="60">Account:</th>
								<th><a class="view-link" href="/accounts/entry/<?php echo $_smarty_tpl->tpl_vars['cart']->value['account_id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['account']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
								&nbsp;<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['account']['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?><span class="label"><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</span> &nbsp;<?php } ?></th>
							</tr>
						<?php }?>
						<tr>
							<td width="60">E-mail:</td>
							<td><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Unknown" : $tmp);?>
</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['phone']){?>
							<tr>
								<td>Phone:</td>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['phone'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
						<?php }?>
					</table>
					
					<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['shipping']){?>
						<table class="table table-bordered table-condensed">
							<tr><th colspan="2">Shipping</th></tr>
							<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['shipping']['method']){?>
								<tr>
									<td width="60">Method:</td>
									<td><?php echo $_smarty_tpl->tpl_vars['cart']->value['order']['shipping']['method'];?>
 (<?php echo money($_smarty_tpl->tpl_vars['cart']->value['shipping_total']);?>
)</td>
								</tr>
							<?php }?>
							<tr>
								<td>Name:</td>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
							<tr>
								<td>Address:</td>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['shipping']['address'], ENT_QUOTES, 'UTF-8', true);?>
,
									<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['shipping']['city']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['shipping']['city'], ENT_QUOTES, 'UTF-8', true);?>
,<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['shipping']['state']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['shipping']['state'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['shipping']['zip'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
						</table>
					<?php }else{ ?>
						<table class="table table-bordered">
							<tr><td>No shipping information</td></tr>
						</table>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['billing']){?>
						<table class="table table-bordered table-condensed">
							<tr><th colspan="2">Billing</th></tr>
							<tr>
								<td width="60">Method:</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['method']=="card"){?>
										Credit card
										<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['card']){?>
											<?php $_smarty_tpl->tpl_vars['card'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['card'], null, 0);?>
											<span class="label label-success">
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['type'], ENT_QUOTES, 'UTF-8', true);?>

												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['last4'], ENT_QUOTES, 'UTF-8', true);?>

												(Expires: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['exp_month'], ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['exp_year'], ENT_QUOTES, 'UTF-8', true);?>
)
											</span>
										<?php }else{ ?>
											<span class="label">missing</span>
										<?php }?>
									<?php }else{ ?>
										<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['method']);?>

									<?php }?>
								</td>
							</tr>
							<tr>
								<td>Name:</td>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
							<tr>
								<td>Address:</td>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['address'], ENT_QUOTES, 'UTF-8', true);?>
,
									<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['city']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['city'], ENT_QUOTES, 'UTF-8', true);?>
,<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['state']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['state'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order']['billing']['zip'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
						</table>
					<?php }else{ ?>
						<table class="table table-bordered">
							<tr><td>No billing information</td></tr>
						</table>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="view-footer actions">
			<?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']){?>
				<button type="button" class="btn btn-success view-link" data-href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['cart']->value['order_id'];?>
">Go to Order #<?php echo $_smarty_tpl->tpl_vars['cart']->value['order_id'];?>
</button>
			<?php }?>
			<button type="button" class="btn view-cancel">Close</button>
			<?php if ($_smarty_tpl->tpl_vars['cart']->value){?>
				<?php if (!$_smarty_tpl->tpl_vars['cart']->value['is_deleted']){?>
					<a class="trash view-link" href="/carts/entry/<?php echo $_smarty_tpl->tpl_vars['cart']->value['id'];?>
?cart[:delete]=true" data-post="true"><i class="icon-trash"></i></a>
				<?php }else{ ?>
					<a class="trash view-link undo" href="/carts/entry/<?php echo $_smarty_tpl->tpl_vars['cart']->value['id'];?>
?cart[:restore]=true" data-post="true">Undo <i class="icon-trash"></i></a>
				<?php }?>
			<?php }?>
		</div>
	</form>
</div>
<?php }} ?>