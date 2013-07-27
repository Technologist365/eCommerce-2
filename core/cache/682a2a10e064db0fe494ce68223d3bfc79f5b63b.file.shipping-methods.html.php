<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 08:59:36
         compiled from "/var/www/fwdcommerce/app/templates/alpha/checkout/shipping-methods.html" */ ?>
<?php /*%%SmartyHeaderCode:202644675751f0e8f8ca3734-95955259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682a2a10e064db0fe494ce68223d3bfc79f5b63b' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/checkout/shipping-methods.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202644675751f0e8f8ca3734-95955259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'shipping_methods' => 0,
    'method' => 0,
    'checked' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f0e8f8d99087_17424070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0e8f8d99087_17424070')) {function content_51f0e8f8d99087_17424070($_smarty_tpl) {?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>




<?php $_smarty_tpl->tpl_vars['shipping_methods'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['cart']['shipping_methods'], null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['shipping_methods']->value&&!$_smarty_tpl->tpl_vars['shipping_methods']->value['errors']){?>

	<?php  $_smarty_tpl->tpl_vars['method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['method']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['method']->key => $_smarty_tpl->tpl_vars['method']->value){
$_smarty_tpl->tpl_vars['method']->_loop = true;
 $_smarty_tpl->tpl_vars['method']->index++;
 $_smarty_tpl->tpl_vars['method']->first = $_smarty_tpl->tpl_vars['method']->index === 0;
?>
		<div class="form-field">
			<label class="radio">
				<?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable(($_smarty_tpl->tpl_vars['method']->value['name']==$_smarty_tpl->tpl_vars['request']->value['cart']['order']['shipping']['method'])||($_smarty_tpl->tpl_vars['method']->first&&!$_smarty_tpl->tpl_vars['request']->value['cart']['order']['shipping']['method']), null, 0);?>
				<input type="radio" name="order[shipping][method]" value="<?php echo $_smarty_tpl->tpl_vars['method']->value['name'];?>
"
					<?php if ($_smarty_tpl->tpl_vars['checked']->value){?>checked="checked"<?php }?> />
				<?php echo $_smarty_tpl->tpl_vars['method']->value['name'];?>
 &mdash;
					<?php if ($_smarty_tpl->tpl_vars['method']->value['price']!=0){?><?php echo money($_smarty_tpl->tpl_vars['method']->value['price']);?>
<?php }else{ ?>FREE<?php }?>
			</label>
		</div>
		<?php $_smarty_tpl->tpl_vars['method_exists'] = new Smarty_variable(true, null, 0);?>
	<?php } ?>
	
<?php }else{ ?>

	<div class="form-field">
		<?php if (!$_smarty_tpl->tpl_vars['request']->value['cart']['order']['shipping']){?>
			<label><em>Complete your shipping address to select delivery</em></label>
		<?php }elseif($_smarty_tpl->tpl_vars['shipping_methods']->value['errors']){?>
			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipping_methods']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
				<label><em><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</em></label>
			<?php } ?>
		<?php }else{ ?>
			<label><em>No methods found matching your address</em></label>
		<?php }?>
	</div>
<?php }?>

<!-- Checkout shipping method behaviors -->
<script type="text/javascript">

	if (!window.shipping_methods_loaded)
	{
		// Trigger shipping method reload on shipping info change.
		$('.checkout-shipping-info').find('input,select,textarea').live('keyup', function ()
		{
			clearTimeout(window.checkout_shipping_timer);
			window.checkout_shipping_timer = setTimeout("$('.checkout-shipping-methods').trigger('reload');", 500);
		});
		$('.checkout-shipping-info').find('input,select,textarea').live('change', function ()
		{
			clearTimeout(window.checkout_shipping_timer);
			window.checkout_shipping_timer = setTimeout("$('.checkout-shipping-methods').trigger('reload');", 500);
		});
		
		// Set original zip
		if (!$(this).data('shipping-params'))
		{
			$(this).data('shipping-params',
				$('.checkout-shipping-info input.zip').val()
				+ $('.checkout-shipping-info select.country').val()
			);
		}
		
		// Reload event.
		$('.checkout-shipping-methods').live('reload', function ()
		{
			// Get zip from checkout form.
			var zip = $('.checkout-shipping-info input.zip').val();
			var country = $('.checkout-shipping-info select.country').val();
			
			if (!zip || !country) return;
			
			// Zip changed?
			if ($(this).data('shipping-params') != zip+country)
			{
				$(this).data('shipping-params', zip+country);
				
				// Appear to be loading.
				$('.checkout-shipping-methods').css({ opacity: 0.5 });
				$(this).closest('form').data('locked', true);
				
				// Get shipping data for update.
				var form_data = $('.checkout-shipping-info').find('input.zip,select.country').serialize();
				
				// Post updated shipping info to cart.
				var request = $.ajax("/checkout/index.json", {
					type: 'POST',
					data: form_data,
					dataType: 'json',
					cache: false
				});
				
				// Success.
				request.done(function ()
				{
					$('.checkout-shipping-methods').load('/checkout/shipping-methods', function ()
					{
						$(this).closest('form').data('locked', false);
						$(this).css({ opacity: '' });
					});
				});
				
				// Something went wrong.
				request.error(function (error, text)
				{
					$(this).closest('form').data('locked', false);
					$('.checkout-shipping-methods').css({ opacity: '' });
				});
			}
		});
		
		// Remember this was loaded once.
		window.shipping_methods_loaded = true;
	}

</script>
<?php }} ?>