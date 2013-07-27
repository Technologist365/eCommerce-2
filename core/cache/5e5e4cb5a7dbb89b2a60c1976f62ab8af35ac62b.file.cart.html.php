<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 08:59:32
         compiled from "/var/www/fwdcommerce/app/templates/alpha/cart.html" */ ?>
<?php /*%%SmartyHeaderCode:164136890051ee878e89a7f7-48876021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e5e4cb5a7dbb89b2a60c1976f62ab8af35ac62b' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/cart.html',
      1 => 1374742765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164136890051ee878e89a7f7-48876021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee878ea328a1_13339142',
  'variables' => 
  array (
    'request' => 0,
    'params' => 0,
    'session' => 0,
    'item' => 0,
    'option' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee878ea328a1_13339142')) {function content_51ee878ea328a1_13339142($_smarty_tpl) {?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php if ($_smarty_tpl->tpl_vars['request']->value['post']&&$_smarty_tpl->tpl_vars['params']->value['item']){?>

	
	<?php if (!$_smarty_tpl->tpl_vars['request']->value['cart']){?>
	
		<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['cart'] = post("/carts",array('account_id'=>$_smarty_tpl->tpl_vars['session']->value['account_id']));?>
		
		
		<?php $_smarty_tpl->createLocalArrayVariable('session', null, 0);
$_smarty_tpl->tpl_vars['session']->value['cart_id'] = $_smarty_tpl->tpl_vars['request']->value['cart']['id'];?>
	<?php }?>

	
	<?php  post($_smarty_tpl->tpl_vars['request']->value['cart'], array('item'=>$_smarty_tpl->tpl_vars['params']->value['item'])); ?>
	
	<?php redirect(array("url" => "/cart")) ?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['request']->value['cart']){?>

	<?php if ($_smarty_tpl->tpl_vars['request']->value['post']&&$_smarty_tpl->tpl_vars['params']->value['items']){?>
	
		
		<?php  put($_smarty_tpl->tpl_vars['request']->value['cart'], array('items'=>$_smarty_tpl->tpl_vars['params']->value['items'])); ?>
		
		
		<?php if ($_smarty_tpl->tpl_vars['params']->value['checkout']){?>
			<?php redirect(array("url" => "/checkout")) ?>
		<?php }else{ ?>
			<?php redirect(array("url" => "/cart")) ?>
		<?php }?>
		
	<?php }elseif($_smarty_tpl->tpl_vars['params']->value['remove']){?>

		<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['params']->value['remove']);?>
<?php $_tmp1=ob_get_clean();?><?php  delete(($_smarty_tpl->tpl_vars['request']->value['cart'])."/items/".$_tmp1); ?>
		<?php redirect(array("url" => "/".($_smarty_tpl->tpl_vars['request']->value['action']))) ?>
	<?php }?>
<?php }?>


<div class="cart-page">

	<?php if (count($_smarty_tpl->tpl_vars['request']->value['cart']['items'])==0){?>
	
		<h1>Your cart is empty! <a href="/">Go shopping &raquo;</a></h1></h1>
		
	<?php }else{ ?>
		<h1>Your Cart</h1>
		<form class="cart-page-form" method="post" action="http://<?php echo $_smarty_tpl->tpl_vars['request']->value['host'];?>
/cart">
			<table class="table cart-table" cellspacing="0">
				<tr>
					<th class="cart-table-item" colspan="2">Item</th>
					<th class="cart-table-remove">&nbsp;</th>
					<th class="cart-table-qty">Qty</th>
					<th class="cart-table-price">Price</th>
				</tr>
				<tbody>
				
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['request']->value['cart']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<tr>
						<td class="cart-table-image">
							<img src="<?php echo image(array('type'=>'products','id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'width'=>75,'height'=>75),$_smarty_tpl);?>
" />
						</td>
						<td class="cart-table-item">
							<h4 class="name">
								<a href="/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
							</h4>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['variant']){?>
								<small class="variant"><?php echo $_smarty_tpl->tpl_vars['item']->value['variant']['name'];?>
</small>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['options']){?>
								<ul class="options">
									<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
										<li>
											<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>

										</li>
									<?php } ?>
								</ul>
							<?php }?>
						</td>
						<td class="cart-table-remove">
							<a class="remove" href="/cart?remove=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="Remove this item"><i class="icon-remove"></i></a>
						</td>
						<td class="cart-table-qty">
							<input type="text" name="items[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][quantity]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
" />
						</td>
						<td class="cart-table-price">
							<?php if ($_smarty_tpl->tpl_vars['item']->value['price']>0){?>
								<?php if ($_smarty_tpl->tpl_vars['item']->value['quantity']>1){?>
									<span class="each"><?php echo money($_smarty_tpl->tpl_vars['item']->value['price']);?>
 ea.</span>
								<?php }?>
								<?php echo money(($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity']));?>

							<?php }else{ ?>
								&mdash;
							<?php }?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<div class="row">
				<div class="cart-table-actions pull-right">
					<button type="submit" name="update" class="cart-table-update btn btn-large">
						Update</button>
					&nbsp;&nbsp;
					<button type="submit" name="checkout" class="cart-table-checkout btn btn-large btn-cta" value="1">
						Checkout</button>
				</div>
			</div>
		</form>
	<?php }?>
</div>
<?php }} ?>