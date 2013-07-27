<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:24:09
         compiled from "/var/www/fwdcommerce/app/templates/admin/accounts/entry.html" */ ?>
<?php /*%%SmartyHeaderCode:29675585251ee83f980df00-27391563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccdc50c6e98a8b6371235343ee7fc0aa19db7f98' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/accounts/entry.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29675585251ee83f980df00-27391563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'request' => 0,
    'account' => 0,
    'role' => 0,
    'card' => 0,
    'payment' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee83f9a717a6_88596842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee83f9a717a6_88596842')) {function content_51ee83f9a717a6_88596842($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.capitalize.php';
?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php if (!$_smarty_tpl->tpl_vars['params']->value['account']['password']){?>
	<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['account']['password'] = null;?>
<?php }?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "accounts")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php $_smarty_tpl->tpl_vars['account'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <small>/ Account #<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
</small></h2>
		<div class="actions">
			<a class="btn view-back" href="">Back</a>
		</div>
	</div>
	<form class="view-body tabbable" method="post" action="/accounts/entry/<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
">
		<div class="view-content">
			<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
			<!--<ul class="nav nav-pills">
				<li class="<?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>"><a href="">Details</a></li>
			</ul>-->
			<div class="tab-content">
				<div class="tab-pane default <?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>">
					<table class="table table-bordered table-condensed with-actions">
						<tr>
							<th width="60">Name:</th>
							<th>
								<div class="with-actions">
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

									&nbsp;
									<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['account']->value['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
										<span class="label"><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</span> &nbsp;
									<?php } ?>
									<code class="act"><a class="view-link" href="/accounts/edit/<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
">edit</a></code>
								</div>
							</th>
						</tr>
						<tr>
							<td>E-mail:</td>
							<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
						</tr>
						<tr>
							<td>Phone:</td>
							<td><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['phone'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Unknown" : $tmp);?>
</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['account']->value['password']){?>
							<tr>
								<td>Password:</td>
								<td><?php echo str_repeat("*",8);?>
</td>
							</tr>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['account']->value['ip_address']){?>
							<tr>
								<td>IP Addr:</td>
								<td><?php echo $_smarty_tpl->tpl_vars['account']->value['ip_address'];?>
</td>
							</tr>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['account']->value['notes']){?>
							<tr>
								<td>Notes:</td>
								<td><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['notes'], ENT_QUOTES, 'UTF-8', true));?>
</td>
							</tr>
						<?php }?>
					</table>
					
					<?php if ($_smarty_tpl->tpl_vars['account']->value['billing']['default']){?>					
						<table class="table table-bordered table-condensed with-actions">
							<tr>
								<th colspan="2">
									<div class="with-actions">
										Default billing <code class="act"><a href="/accounts/billing/<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
" class="view-link"><?php if ($_smarty_tpl->tpl_vars['account']->value['billing']){?>edit<?php }else{ ?>enter<?php }?> billing</a></code>
									</div>
								</th>
							</tr>
							<?php if ($_smarty_tpl->tpl_vars['account']->value['billing']){?>
								<tr>
									<td width="60">Method:</td>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['account']->value['billing']['method']=="card"){?>
											Credit card
											<?php if ($_smarty_tpl->tpl_vars['account']->value['billing']['stripe']){?>
												<?php $_smarty_tpl->tpl_vars['card'] = new Smarty_variable($_smarty_tpl->tpl_vars['account']->value['billing']['card'], null, 0);?>
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
										<?php }elseif($_smarty_tpl->tpl_vars['account']->value['billing']['method']){?>
											<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['account']->value['billing']['method']);?>

										<?php }else{ ?>
											None
										<?php }?>
									</td>
								</tr>
								<?php if ($_smarty_tpl->tpl_vars['account']->value['billing']['name']){?>
									<tr>
										<td>Name:</td>
										<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['billing']['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
									</tr>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['account']->value['billing']['address']){?>
									<tr>
										<td>Address:</td>
										<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['billing']['address'], ENT_QUOTES, 'UTF-8', true);?>
,
											<?php if ($_smarty_tpl->tpl_vars['account']->value['billing']['city']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['billing']['city'], ENT_QUOTES, 'UTF-8', true);?>
,<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['account']->value['billing']['state']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['billing']['state'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value['billing']['zip'], ENT_QUOTES, 'UTF-8', true);?>
</td>
									</tr>
								<?php }?>
							<?php }else{ ?>
								<tr>
									<td>None entered</td>
								</tr>
							<?php }?>
						</table>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['account']->value['credits']){?>
						<table class="table table-bordered table-condensed">
							<tr>
								<th colspan="4">Current balance: <?php echo money($_smarty_tpl->tpl_vars['account']->value['balance']);?>
</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['account']->value['credits']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value){
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
								<tr>
									<td>
										<span class="label label-<?php if ($_smarty_tpl->tpl_vars['payment']->value['action']=="charge"){?>success<?php }else{ ?><?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['reason']);?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['action'];?>
</span>
										Account
									</td>
									<td>
										<?php echo money($_smarty_tpl->tpl_vars['payment']->value['amount']);?>

									</td>
									<td><?php echo age_date($_smarty_tpl->tpl_vars['payment']->value['date_created']);?>
</td>
									<td><a class="view-link" href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['payment']->value['order_id'];?>
"><?php if ($_smarty_tpl->tpl_vars['payment']->value['order_id']){?>Order #<?php echo $_smarty_tpl->tpl_vars['payment']->value['order_id'];?>
<?php }?></a></td>
								</tr>
							<?php } ?>
						</table>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['account']->value['orders']){?>
						<table class="table table-bordered table-condensed">
							<tr>
								<th colspan="4">Orders by this account:</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['account']->value['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
								<tr>
									<td><a class="view-link" href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">Order #<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</a></td>
									<td><?php echo money($_smarty_tpl->tpl_vars['order']->value['grand_total']);?>
</td>
									<td><span class="label"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span></td>
									<td><?php echo age_date($_smarty_tpl->tpl_vars['order']->value['date_created']);?>
</td>
								</tr>
							<?php } ?>
						</table>
					<?php }else{ ?>
						<table class="table table-bordered">
							<tr><td>No orders yet</td></tr>
						</table>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="view-footer actions">
			<span class="tab-controls default">
				<button type="button" class="btn btn-success confirm view-link" data-href="/orders/new?order[account_id]=<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
" data-post="true"><i class="icon-plus-sign icon-white"></i> New order</button>
			</span>
			<button type="button" class="btn view-cancel">Close</button>
			<?php if (!$_smarty_tpl->tpl_vars['account']->value['is_deleted']){?>
				<a class="trash view-link" href="/accounts/entry/<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
?account[:delete]=true" data-post="true"><i class="icon-trash"></i></a>
			<?php }else{ ?>
				<a class="trash view-link undo" href="/accounts/entry/<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
?account[:restore]=true" data-post="true">Undo <i class="icon-trash"></i></a>
			<?php }?>
		</div>
	</form>
</div>
<?php }} ?>