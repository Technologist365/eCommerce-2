<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 10:24:30
         compiled from "/var/www/fwdcommerce/app/templates/admin/orders/entry.html" */ ?>
<?php /*%%SmartyHeaderCode:40514375151efab5e2c6758-10077699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24135561b3547c42705bbee26ba603eb68b9a6e5' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/orders/entry.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40514375151efab5e2c6758-10077699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'order' => 0,
    'class' => 0,
    'params' => 0,
    'item' => 0,
    'id' => 0,
    'option' => 0,
    'desc' => 0,
    'act' => 0,
    'role' => 0,
    'card' => 0,
    'parent' => 0,
    'buffer' => 0,
    'payment' => 0,
    'shipment' => 0,
    'payment_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51efab5ebe95f2_68743127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efab5ebe95f2_68743127')) {function content_51efab5ebe95f2_68743127($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.capitalize.php';
?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php render(array("view" => "default-entry", "for" => "orders")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php $_smarty_tpl->tpl_vars['order'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<?php if ($_smarty_tpl->tpl_vars['order']->value['status']=="ready"){?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("label-info", null, 0);?><?php $_smarty_tpl->tpl_vars['since'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value['date_paid'], null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['order']->value['status']=="shipped"){?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("label-success", null, 0);?><?php $_smarty_tpl->tpl_vars['since'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value['date_shipped'], null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['order']->value['status']=="cancelled"){?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("label-important", null, 0);?><?php $_smarty_tpl->tpl_vars['since'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value['date_cancelled'], null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['order']->value['status']=="returned"){?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("label-warning", null, 0);?><?php $_smarty_tpl->tpl_vars['since'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value['date_returned'], null, 0);?><?php }?>
		<h2>Order #<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
 <small>/ <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</small> <span class="label <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span></h2>
		<div class="actions">
			<a class="btn view-back" href="">Back</a>
		</div>
	</div>
	<form class="view-body tabbable" method="post" action="">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<?php $_smarty_tpl->_capture_stack[0][] = array("notices", null, null); ob_start(); ?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value['status']=="pending"&&$_smarty_tpl->tpl_vars['order']->value['date_scheduled']){?>
					Scheduled for <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['date_scheduled']);?>
 &mdash;
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value['parent_id']){?>
					<a href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['parent_id'];?>
" class="view-link">Extended from #<?php echo $_smarty_tpl->tpl_vars['order']->value['parent_id'];?>
</a>&nbsp;
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value['prev_id']){?>
					&nbsp;<a href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['prev_id'];?>
" class="view-link">&laquo; Prev</a>&nbsp;
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value['next_id']){?>
					<?php if (!$_smarty_tpl->tpl_vars['order']->value['parent_id']){?>
						<a href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['next_id'];?>
" class="view-link">Extended into #<?php echo $_smarty_tpl->tpl_vars['order']->value['next_id'];?>
</a> 
					<?php }else{ ?>
						<a href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['next_id'];?>
" class="view-link">Next &raquo;</a>
					<?php }?>
				<?php }?>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if (trim(Smarty::$_smarty_vars['capture']['notices'])){?>
				<div class="alert alert-info">
					<?php echo Smarty::$_smarty_vars['capture']['notices'];?>

				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['order']->value['error']){?>
				<div class="alert alert-error">
					<?php echo $_smarty_tpl->tpl_vars['order']->value['error'];?>

				</div>
			<?php }?>
			<ul class="nav nav-pills">
				<li class="<?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>"><a href="">Details</a></li>
				<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="payment"){?>active<?php }?>"><a href="" data-pane="payment">Payment</a></li>
				<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="shipment"){?>active<?php }?>"><a href="" data-pane="shipment">Shipment</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane default <?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>">
				
					<table class="table table-bordered table-condensed">
						<tr>
							<th>Item</th>
							<th class="qty">Qty</th>
							<th class="total">Price</th>
						</tr>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<tr class="<?php if ($_smarty_tpl->tpl_vars['item']->value['is_cancelled']||$_smarty_tpl->tpl_vars['item']->value['is_returned']){?>strike<?php }?>">
								<td>
									<div class="with-actions">
										<a class="view-link" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
										<?php if ($_smarty_tpl->tpl_vars['item']->value['variant']){?>
											<br /><em><?php echo $_smarty_tpl->tpl_vars['item']->value['variant']['name'];?>
</em>
										<?php }?>
										<code class="act">
											<a class="view-link" href="/orders/item/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/items/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">edit</a>
										</code>
									</div>
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
								<td><?php echo money(($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity']));?>
 <small class="muted nowrap"><?php if ($_smarty_tpl->tpl_vars['item']->value['quantity']>1){?> <?php echo money($_smarty_tpl->tpl_vars['item']->value['price']);?>
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
						<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
							<tr><td colspan="3"><a href="/orders/item/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/items" class="view-link">Add item &rarr;</a></td></tr>
						<?php } ?>
						<tr>
							<td>
								<div class="with-actions">
									Shipping<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']['method']){?>: <?php echo $_smarty_tpl->tpl_vars['order']->value['shipping']['method'];?>
<?php }?>
									<code class="act">
										<a class="view-link" href="/orders/<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']){?>shipmethod<?php }else{ ?>shipping<?php }?>/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']['method']){?>edit<?php }else{ ?>enter shipping<?php }?></a>
									</code>
								</div>
							</td>
							<td class="muted">&mdash;</td>
							<td><?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']['method']){?><?php echo money($_smarty_tpl->tpl_vars['order']->value['shipping_total']);?>
<?php }else{ ?>&mdash;<?php }?></td>
						</tr>
						<tr>
							<td>
								<div class="with-actions">
									<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['order']->value['cart']['taxes']['sales']['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['cart']['taxes']['vat']['name'] : $tmp))===null||$tmp==='' ? "Taxes" : $tmp);?>

									<code class="act">
										<a class="view-link" href="/orders/taxes/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">edit</a>
									</code>
								</div>
							</td>
							<td class="muted">&mdash;</td>
							<td><?php if (count($_smarty_tpl->tpl_vars['order']->value['cart']['taxes'])||$_smarty_tpl->tpl_vars['order']->value['tax_total']>0){?><?php echo money($_smarty_tpl->tpl_vars['order']->value['tax_total']);?>
<?php }else{ ?>&mdash;<?php }?></td>
						</tr>
						<tr>
							<td>
								<div class="with-actions">
									Discount <?php if ($_smarty_tpl->tpl_vars['order']->value['discounts']['coupon']){?>(<a href="/discounts/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['discounts']['coupon']['id'];?>
" class="view-link"><?php echo $_smarty_tpl->tpl_vars['order']->value['coupon_code'];?>
</a>)<?php }?>
									<code class="act">
										<a class="view-link" href="/orders/coupon/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['order']->value['discounts']['coupon']){?>edit<?php }else{ ?>apply<?php }?></a>
									</code>
								</div>
							</td>
							<td class="muted">&mdash;</td>
							<td><?php if ($_smarty_tpl->tpl_vars['order']->value['discount_total']){?><?php echo money((-$_smarty_tpl->tpl_vars['order']->value['discount_total']));?>
<?php }else{ ?>&mdash;<?php }?></td>
						</tr>
						<tr>
							<th>Total</td>
							<th><?php if ($_smarty_tpl->tpl_vars['order']->value['items']){?><?php echo $_smarty_tpl->tpl_vars['order']->value['cart']['quantity'];?>
<?php }else{ ?><span class="muted">&mdash;</span><?php }?></th>
							<th>
								<?php echo money($_smarty_tpl->tpl_vars['order']->value['grand_total']);?>

							</th>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['order']->value['payment_balance']!=0){?>
							<?php if ($_smarty_tpl->tpl_vars['order']->value['payment_balance']>0){?>
								<?php $_smarty_tpl->tpl_vars['act'] = new Smarty_variable("refund", null, 0);?>
								<?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable("Refund due", null, 0);?>
								<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("important", null, 0);?>
							<?php }else{ ?>
								<?php $_smarty_tpl->tpl_vars['act'] = new Smarty_variable("charge", null, 0);?>
								<?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable("Payment due", null, 0);?>
								<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("success", null, 0);?>
							<?php }?>
							<tr class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
								<td colspan="2">
									<div class="with-actions">									
										<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>

										<code class="act">
											<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['method']&&$_smarty_tpl->tpl_vars['order']->value['billing']['method']!="none"){?>
												<a class="view-link" href="/orders/<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/payments?payment[amount]=<?php echo abs($_smarty_tpl->tpl_vars['order']->value['payment_balance']);?>
"><?php echo $_smarty_tpl->tpl_vars['act']->value;?>
 balance</a>
											<?php }else{ ?>
												<a class="view-link" href="/orders/billing/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">enter billing</a>
											<?php }?>
										</code>
									</div>
								</td>
								<td><?php echo money(abs($_smarty_tpl->tpl_vars['order']->value['payment_balance']));?>
</td>
							</tr>
						<?php }?>
					</table>
					<button type="button" class="btn btn-primary view-link" data-href="/orders/item/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/items"><i class="icon-plus-sign icon-white"></i> Add item</button>
					<br />
					<br />
					
					<table class="table table-bordered table-condensed with-actions">
						<tr>
							<th width="60">Account:</th>
							<th>
								<div class="with-actions">
									<a class="view-link" href="/accounts/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['account_id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['account']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
									&nbsp;
									<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['account']['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
										<span class="label"><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</span> &nbsp;
									<?php } ?>
									<code class="act"><a class="view-link" href="/accounts/edit/<?php echo $_smarty_tpl->tpl_vars['order']->value['account']['id'];?>
">edit account</a></code>
								</div>
							</th>
						</tr>
						<tr>
							<td>E-mail:</td>
							<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['account']['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['order']->value['account']['phone']){?>
							<tr>
								<td>Phone:</td>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['account']['phone'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
						<?php }?>
					</table>
					<table class="table table-bordered table-condensed with-actions">
						<tr>
							<th colspan="2">
								<div class="with-actions">
									Shipping
									&nbsp;
									<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']['drop_ship']){?><span class="label label-info">Drop ship</span><?php }?>
									<code class="act"><a href="/orders/shipping/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" class="view-link"><?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']){?>edit<?php }else{ ?>enter<?php }?> shipping</a></code>
								</div>
							</th>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']){?>
							<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']['method']){?>
								<tr>
									<td width="60">Method:</td>
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['shipping']['method'];?>
 (<?php echo money($_smarty_tpl->tpl_vars['order']->value['shipping_total']);?>
)</td>
								</tr>
							<?php }?>
							<tr>
								<td>Name:</td>
								<td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order']->value['shipping']['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['name'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
							<tr>
								<td>Address:</td>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['address'], ENT_QUOTES, 'UTF-8', true);?>
,
									<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']['city']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['city'], ENT_QUOTES, 'UTF-8', true);?>
,<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']['state']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['state'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['zip'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
							<?php if ($_smarty_tpl->tpl_vars['order']->value['comments']){?>
								<tr>
									<td>Comments:</td>
									<td><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['comments'], ENT_QUOTES, 'UTF-8', true));?>
</td>
								</tr>
							<?php }?>
						<?php }else{ ?>
							<tr>
								<td>None entered</td>
							</tr>
						<?php }?>
					</table>
					<table class="table table-bordered table-condensed with-actions">
						<tr>
							<th colspan="2">
								<div class="with-actions">
									Billing <code class="act"><a href="/orders/billing/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" class="view-link"><?php if ($_smarty_tpl->tpl_vars['order']->value['billing']){?>edit<?php }else{ ?>enter<?php }?> billing</a></code>
								</div>
							</th>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']){?>
							<tr>
								<td width="60">Method:</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['method']=="card"){?>
										Credit card
										<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['card']){?>
											<?php $_smarty_tpl->tpl_vars['card'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value['billing']['card'], null, 0);?>
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
									<?php }elseif($_smarty_tpl->tpl_vars['order']->value['billing']['method']){?>
										<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['order']->value['billing']['method']);?>

									<?php }else{ ?>
										None
									<?php }?>
								</td>
							</tr>
							<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['name']){?>
								<tr>
									<td>Name:</td>
									<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['billing']['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
								</tr>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['address']){?>
								<tr>
									<td>Address:</td>
									<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['billing']['address'], ENT_QUOTES, 'UTF-8', true);?>
,
										<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['city']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['billing']['city'], ENT_QUOTES, 'UTF-8', true);?>
,<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['state']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['billing']['state'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['billing']['zip'], ENT_QUOTES, 'UTF-8', true);?>
</td>
								</tr>
							<?php }?>
						<?php }else{ ?>
							<tr>
								<td>None entered</td>
							</tr>
						<?php }?>
					</table>
					<?php if ($_smarty_tpl->tpl_vars['order']->value['schedule']||$_smarty_tpl->tpl_vars['order']->value['date_scheduled']||$_smarty_tpl->tpl_vars['order']->value['status']=="incomplete"){?>
						<table class="table table-bordered table-condensed with-actions">
							<tr>
								<th>
									<div class="with-actions">
										Schedule
										&nbsp;
										<?php if ($_smarty_tpl->tpl_vars['order']->value['schedule']['every']){?><span class="label">Recurring</span><?php }?>
										<?php if ($_smarty_tpl->tpl_vars['order']->value['next_id']==null){?>
											<code class="act"><a href="/orders/schedule/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" class="view-link"><?php if ($_smarty_tpl->tpl_vars['order']->value['schedule']){?>edit<?php }else{ ?>enter<?php }?> schedule</a></code>
										<?php }?>
									</div>
								</th>
							</tr>
							<?php if ($_smarty_tpl->tpl_vars['order']->value['schedule']['buffer']){?>
								<?php $_smarty_tpl->tpl_vars['buffer'] = new Smarty_variable((("Processed ").((pluralize(($_smarty_tpl->tpl_vars['order']->value['schedule']['buffer'])." days")))).(" in advance"), null, 0);?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['order']->value['schedule']['every']){?>
								<tr>
									<td>
										Occurs
										<?php if ($_smarty_tpl->tpl_vars['order']->value['schedule']['span']>1){?>
											every <?php echo $_smarty_tpl->tpl_vars['order']->value['schedule']['span'];?>
 <?php echo mb_strtolower($_smarty_tpl->tpl_vars['order']->value['schedule']['every'], 'UTF-8');?>
s
										<?php }else{ ?>
											<?php echo ucfirst($_smarty_tpl->tpl_vars['order']->value['schedule']['every']);?>
ly
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['order']->value['schedule']['day']){?>
											on day <?php echo $_smarty_tpl->tpl_vars['order']->value['schedule']['day'];?>

										<?php }elseif($_smarty_tpl->tpl_vars['order']->value['parent_id']){?>
											<?php $_smarty_tpl->tpl_vars['parent'] = new Smarty_variable(get("/orders/".($_smarty_tpl->tpl_vars['order']->value['parent_id'])), null, 0);?>
											starting <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['parent']->value['date_created']);?>

										<?php }else{ ?>
											starting <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['date_created']);?>

										<?php }?>
									</td>
								</tr>
							<?php }elseif($_smarty_tpl->tpl_vars['order']->value['date_scheduled']){?>
								<tr>
									<td>Occurs on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['date_scheduled']);?>
</td>
								</tr>
							<?php }else{ ?>
								<tr>
									<td>None entered</td>
								</tr>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['buffer']->value){?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['buffer']->value;?>
</td>
								</tr>
							<?php }?>
						</table>
					<?php }?>
					
					<div class="row">
						<div class="field control-group span2">
							<label><span class="label label-info">Private notes</span> <a class="edit_save" href="">edit</a></label>
							<textarea class="disabled" disabled="disabled" name="order[notes]" rows="8"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['notes'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</div>
		
						<div class="field control-group span2">
							<label><span class="label label-important">Public notes</span> <a class="edit_save" href="">edit</a></label>
							<textarea class="disabled" disabled="disabled" name="order[public_notes]" rows="8"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['public_notes'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</div>
					</div>
					
					<table class="table table-bordered table-condensed with-actions">
						<tr>
							<th colspan="2">
								<div class="with-actions">
									Events </code>
								</div>
							</th>
						</tr>
						<tr>
							<td width="60"><span class="label">Created</span></td>
							<td><?php echo date("Y-m-d @ H:i:s",(strtotime($_smarty_tpl->tpl_vars['order']->value['date_created'])));?>
</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['order']->value['date_scheduled']){?>
							<tr>
								<td><span class="label label-info">Scheduled</span></td>
								<td><?php echo date("Y-m-d @ H:i:s",(strtotime($_smarty_tpl->tpl_vars['order']->value['date_scheduled'])));?>
</td>
							</tr>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['order']->value['date_cancelled']){?>
							<tr>
								<td><span class="label label-important">Cancelled</span></td>
								<td><?php echo date("Y-m-d @ H:i:s",(strtotime($_smarty_tpl->tpl_vars['order']->value['date_cancelled'])));?>
</td>
							</tr>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['order']->value['date_shipped']){?>
							<tr>
								<td><span class="label label-success">Shipped</span></td>
								<td><?php echo date("Y-m-d @ H:i:s",(strtotime($_smarty_tpl->tpl_vars['order']->value['date_shipped'])));?>
</td>
							</tr>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['order']->value['date_returned']){?>
							<tr>
								<td><span class="label label-warning">Returned</span></td>
								<td><?php echo date("Y-m-d @ H:i:s",(strtotime($_smarty_tpl->tpl_vars['order']->value['date_returned'])));?>
</td>
							</tr>
						<?php }?>
					</table>
					
					<?php if ($_smarty_tpl->tpl_vars['order']->value['status']!="incomplete"){?>
						<button type="button" class="btn view-link confirm" data-href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
?order[:email]=true" data-post="true"><i class="icon-share-alt" style="position:relative;top:-1px"></i> Send email receipt</button>
					<?php }?>
					
					<script type="text/javascript">
						$('#view a.edit_save').click(function ()
						{
							$field = $(this).closest('.field').find('textarea');
							if ($field.attr('disabled'))
							{
								$field.attr('disabled', false);
								$(this).text('save');
							}
							else
							{
								$.post(window.view_pages[window.view_index].base, $(this).closest('form').serialize());
								$field.attr('disabled', true);
								$(this).text('edit');
							}
							return false;
						});
					</script>
					
				</div>
				<div class="tab-pane payment <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="payment"){?>active<?php }?>">
				
					<?php if (!$_smarty_tpl->tpl_vars['order']->value['payments']&&!$_smarty_tpl->tpl_vars['order']->value['billing']){?>
						<table class="table table-bordered">
							<tr><td><a class="view-link" href="/orders/billing/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">Enter billing</a> to process payments</td></tr>
						</table>
					<?php }elseif($_smarty_tpl->tpl_vars['order']->value['payments']){?>
						<table class="table table-bordered table-condensed">
							<tr>
								<th>Method</th>
								<th>Amount</th>
								<th>Date</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['payments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value){
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
								<tr>
									<?php if ($_smarty_tpl->tpl_vars['payment']->value['method']=="card"){?>
										<td>
											<div class="with-actions">
												<span class="label label-<?php if ($_smarty_tpl->tpl_vars['payment']->value['action']=="charge"){?>success<?php }else{ ?><?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['reason']);?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['action'];?>
</span>
												<?php $_smarty_tpl->tpl_vars['card'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['payment']->value['card'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['payment']->value['billing']['card'] : $tmp), null, 0);?>
												<?php if ($_smarty_tpl->tpl_vars['card']->value){?>
													<?php echo $_smarty_tpl->tpl_vars['card']->value['type'];?>
 <?php echo $_smarty_tpl->tpl_vars['card']->value['last4'];?>

												<?php }else{ ?>
													Credit card
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['payment']->value['action']=="charge"){?>
													<code class="act">
														<?php if ($_smarty_tpl->tpl_vars['payment']->value['amount_refundable']>0){?>
															<a class="view-link" href="/orders/refund/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/payments?payment[charge_id]=<?php echo $_smarty_tpl->tpl_vars['payment']->value['charge_id'];?>
&payment[amount]=<?php echo $_smarty_tpl->tpl_vars['payment']->value['amount']-$_smarty_tpl->tpl_vars['payment']->value['amount_refunded'];?>
&payment[method]=<?php echo $_smarty_tpl->tpl_vars['payment']->value['method'];?>
">refund<?php if ($_smarty_tpl->tpl_vars['payment']->value['amount']!=$_smarty_tpl->tpl_vars['payment']->value['amount_refundable']){?> <?php echo money($_smarty_tpl->tpl_vars['payment']->value['amount_refundable']);?>
<?php }?></a>
														<?php }elseif($_smarty_tpl->tpl_vars['payment']->value['amount_refunded']){?>
															refunded
														<?php }?>
													</code>
												<?php }?>
											</div>
										</td>
									<?php }elseif($_smarty_tpl->tpl_vars['payment']->value['method']=="credit"){?>
										<td>
											<div class="with-actions">
												<span class="label label-<?php if ($_smarty_tpl->tpl_vars['payment']->value['action']=="charge"){?>success<?php }else{ ?><?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['reason']);?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['action'];?>
</span>
												Account
												<?php if ($_smarty_tpl->tpl_vars['payment']->value['action']=="charge"){?>
													<code class="act">
														<a class="view-link" href="/orders/credit/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/payments?payment[amount]=<?php echo $_smarty_tpl->tpl_vars['payment']->value['amount'];?>
">credit</a>
													</code>
												<?php }?>
											</div>
										</td>
									<?php }elseif($_smarty_tpl->tpl_vars['payment']->value['method']=="invoice"){?>
										<td>
											<div class="with-actions">
												<span class="label label-<?php if (in($_smarty_tpl->tpl_vars['payment']->value['status'],array('sent','paid'))){?>success<?php }elseif(in($_smarty_tpl->tpl_vars['payment']->value['status'],array('overdue','cancelled'))){?>important<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['payment']->value['ref']){?>Reference: <?php echo $_smarty_tpl->tpl_vars['payment']->value['ref'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['payment']->value['status'];?>
</span>
												Invoice
												<code class="act">
													<a class="view-link" href="/orders/invoice/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/payments/<?php echo $_smarty_tpl->tpl_vars['payment']->value['id'];?>
">view</a>
												</code>
											</div>
										</td>
									<?php }else{ ?>
										<td>
											<div class="with-actions">
												<span class="label label-<?php if ($_smarty_tpl->tpl_vars['payment']->value['action']=="charge"){?>success<?php }else{ ?><?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['reason']);?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['action'];?>
</span>
												<?php echo ucfirst($_smarty_tpl->tpl_vars['payment']->value['method']);?>

												<?php if ($_smarty_tpl->tpl_vars['payment']->value['action']=="charge"){?>
													<code class="act">
														<a class="view-link" href="/orders/refund/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/payments?payment[amount]=<?php echo $_smarty_tpl->tpl_vars['payment']->value['amount'];?>
&payment[method]=<?php echo $_smarty_tpl->tpl_vars['payment']->value['method'];?>
">refund</a>
													</code>
												<?php }?>
											</div>
										</td>
									<?php }?>
									<td>
										<?php echo money($_smarty_tpl->tpl_vars['payment']->value['amount']);?>

									</td>
									<td><?php echo age_date($_smarty_tpl->tpl_vars['payment']->value['date_created']);?>
</td>
								</tr>
							<?php } ?>
							<tr>
								<th>Total</th>
								<th colspan="3">
									<?php echo money($_smarty_tpl->tpl_vars['order']->value['payment_total']);?>

								</th>
							</tr>
						</table>
					<?php }else{ ?>
						<table class="table table-bordered">
							<tr><td><?php if ($_smarty_tpl->tpl_vars['order']->value['payment_balance']<0){?><?php if ($_smarty_tpl->tpl_vars['order']->value['auto_payment']){?>Auto payment pending...<?php }else{ ?><?php echo money(abs($_smarty_tpl->tpl_vars['order']->value['payment_balance']));?>
 due. <a class="view-link" href="/orders/charge/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/payments?payment[amount]=<?php echo abs($_smarty_tpl->tpl_vars['order']->value['payment_balance']);?>
">Charge balance &rarr;</a><?php }?><?php }else{ ?>No payments<?php }?></td></tr>
						</table>
					<?php }?>
				</div>
				<div class="tab-pane shipment <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="shipment"){?>active<?php }?>">
				
					<?php if (!$_smarty_tpl->tpl_vars['order']->value['shipping']&&!$_smarty_tpl->tpl_vars['order']->value['shipments']){?>
						<table class="table table-bordered">
							<tr><td><a href="/order/shipping/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" class="view-link">Complete order</a> to process shipments</td></tr>
						</table>
					<?php }elseif($_smarty_tpl->tpl_vars['order']->value['shipments']){?>
						<table class="table table-bordered table-condensed">
							<tr>
								<th>Method</th>
								<th>Tracking</th>
								<th>Date</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['shipment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['shipments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipment']->key => $_smarty_tpl->tpl_vars['shipment']->value){
$_smarty_tpl->tpl_vars['shipment']->_loop = true;
?>
								<tr class="<?php if ($_smarty_tpl->tpl_vars['shipment']->value['is_cancelled']){?>strike<?php }?>">
									<td>
										<div class="with-actions">
											<?php echo $_smarty_tpl->tpl_vars['shipment']->value['method'];?>

											(<?php echo count($_smarty_tpl->tpl_vars['shipment']->value['items']);?>
)
											<code class="act">
												<a class="view-link" href="/orders/shipment/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/shipments/<?php echo $_smarty_tpl->tpl_vars['shipment']->value['id'];?>
">edit</a>
											</code>
										</div>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['shipment']->value['tracking'];?>
</td>
									<td><?php echo age_date($_smarty_tpl->tpl_vars['shipment']->value['date_created']);?>
</td>
								</tr>
							<?php } ?>
						</table>
					<?php }else{ ?>
						<table class="table table-bordered">
							<tr><td>No shipments</td></tr>
						</table>
					<?php }?>
					
				</div>
			</div>
		</div>
		<div class="view-footer actions">
			<span class="tab-controls default">
				<?php if ($_smarty_tpl->tpl_vars['order']->value['status']!="cancelled"&&$_smarty_tpl->tpl_vars['order']->value['status']!="returned"){?>
				
					<?php if ($_smarty_tpl->tpl_vars['order']->value['items']){?>
						<?php if (!$_smarty_tpl->tpl_vars['order']->value['shipping']){?>
							<button type="button" class="btn btn-primary view-link" data-href="/orders/shipping/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">Enter shipping</button>
						<?php }elseif(!$_smarty_tpl->tpl_vars['order']->value['shipping']['method']){?>
							<button type="button" class="btn btn-primary view-link" data-href="/orders/shipmethod/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">Choose shipping method</button>
						<?php }elseif((!$_smarty_tpl->tpl_vars['order']->value['billing']&&$_smarty_tpl->tpl_vars['order']->value['billing_total']>0)){?>
							<button type="button" class="btn btn-primary view-link" data-href="/orders/billing/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">Enter billing</button>
						<?php }elseif($_smarty_tpl->tpl_vars['order']->value['status']=="incomplete"){?>
							<button type="button" class="btn btn-primary view-link" data-href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
?order[status]=pending&order[:email]=true<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['method']=="card"){?>&order[auto_payment]=true<?php }?>" data-post="true">Complete order</button>
						<?php }?>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['order']->value['status']!="hold"){?>
						<button type="button" class="btn view-link" data-href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
?order[status]=hold" data-post="true">Hold order</button>
					<?php }else{ ?>
						<button type="button" class="btn btn-info view-link" data-href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
?order[status]=pending&order[error]=" data-post="true">Remove hold</button>
					<?php }?>

					<?php if (!$_smarty_tpl->tpl_vars['order']->value['shipments']){?>
						<button type="button" class="btn view-link" data-href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
?order[:cancel]=true" data-post="true">Cancel order</button>
					<?php }?>
				<?php }?>
			</span>
			<span class="tab-controls payment">
				<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']){?>
					<?php $_smarty_tpl->tpl_vars['payment_settings'] = new Smarty_variable(get("/settings/payments"), null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['order']->value['account']['has_role']['retailer']&&$_smarty_tpl->tpl_vars['payment_settings']->value['invoice']['enabled']){?>
						<button type="button" class="btn btn-primary invoice view-link" data-href="/orders/invoice/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/payments"><i class="icon-list-alt icon-white"></i> Invoice</button>
					<?php }?>
					<button type="button" class="btn btn-success view-link" data-href="/orders/charge/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/payments"><i class="icon-plus-sign icon-white"></i> Charge</button>
				<?php }?>
				<button type="button" class="btn view-link" data-href="/orders/credit/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/payments">Credit</button>
			</span>
			<span class="tab-controls shipment">
				<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']){?>
					<button type="button" class="btn btn-primary view-link" data-href="/orders/shipment/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/shipments"><i class="icon-plus-sign icon-white"></i> New shipment</button>
				<?php }?>
			</span>
			<button type="button" class="btn view-cancel">Close</button>
			<?php if (!$_smarty_tpl->tpl_vars['order']->value['is_deleted']){?>
				<a class="trash view-link" href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
?order[:delete]=true" data-post="true"><i class="icon-trash"></i></a>
			<?php }else{ ?>
				<a class="trash view-link undo" href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
?order[:restore]=true" data-post="true">Undo <i class="icon-trash"></i></a>
			<?php }?>
		</div>
	</form>
</div>
<?php }} ?>