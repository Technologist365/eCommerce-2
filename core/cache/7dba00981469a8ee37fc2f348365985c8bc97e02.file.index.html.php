<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 08:59:35
         compiled from "/var/www/fwdcommerce/app/templates/alpha/checkout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:85196083751f0e8f7133206-25084880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dba00981469a8ee37fc2f348365985c8bc97e02' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/checkout/index.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85196083751f0e8f7133206-25084880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'step' => 0,
    'request' => 0,
    'item' => 0,
    'option' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f0e8f730fc32_38359733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0e8f730fc32_38359733')) {function content_51f0e8f730fc32_38359733($_smarty_tpl) {?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php args(array(0 => 'step'), $_smarty_tpl) ?>


<?php if (!$_smarty_tpl->tpl_vars['request']->value['cart']){?><?php redirect(array("url" => "/cart")) ?><?php }?>


<?php if (!$_smarty_tpl->tpl_vars['request']->value['cart']['order']&&$_smarty_tpl->tpl_vars['step']->value){?><?php redirect(array("url" => "/checkout")) ?><?php }?>


<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['layout_for_checkout'] = true;?>

<div class="checkout-page">

	
	<div class="row">
	
		<?php if (!$_smarty_tpl->tpl_vars['step']->value){?>
		
			<h1 class="span12">Checkout <small>Step 1 of 2</small></h1>
		
			
			<form class="checkout span4" method="post" action="/checkout/billing">
				<?php render(array("view" => "checkout/shipping")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
				<div class="form-actions">
					<button type="submit" class="btn btn-large btn-cta">Continue</button>
				</div>
			</form>
			
		<?php }elseif($_smarty_tpl->tpl_vars['step']->value=='billing'){?>
		
			<h1 class="span12">Checkout <small>Step 2 of 2</small></h1>
		
			
			<form class="checkout span4" method="post" action="/checkout/receipt" data-last-post="true">
				<?php render(array("view" => "checkout/billing")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
				<div class="form-actions">
					<button type="submit" class="btn btn-large btn-cta">Complete Order</button>
				</div>
			</form>
		<?php }?>
		
		
		<div class="span7 offset1">
			<table class="table checkout-table" cellspacing="0">
				<tr>
					<th colspan="3">Items</th>
				</tr>
				<tbody>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['request']->value['cart']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<tr>
						<td class="checkout-table-image">
							<img src="<?php echo image(array('type'=>'products','id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'width'=>40,'height'=>40),$_smarty_tpl);?>
" />
						</td>
						<td class="checkout-table-item">
							<h4 class="name">
								<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
&times; <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

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
						<td class="checkout-table-total">
							<?php if ($_smarty_tpl->tpl_vars['item']->value['price']>0){?>
								<?php echo money(($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity']));?>

							<?php }else{ ?>
								&mdash;
							<?php }?>
						</td>
					</tr>
				<?php } ?>
				
				
				<?php $_smarty_tpl->tpl_vars['order'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['cart']['order'], null, 0);?>
				
				
				<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']['method']&&$_smarty_tpl->tpl_vars['step']->value){?>
					<tr class="checkout-table-subitem">
						<td class="checkout-table-item" colspan="2">
							Shipping: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['method'], ENT_QUOTES, 'UTF-8', true);?>

						</td>
						<td class="checkout-table-total">
							<?php echo money($_smarty_tpl->tpl_vars['request']->value['cart']['shipping_total']);?>

						</td>
					</tr>
				<?php }?>
				
				
				<?php if ($_smarty_tpl->tpl_vars['request']->value['cart']['tax_total']&&$_smarty_tpl->tpl_vars['step']->value){?>
					<tr class="checkout-table-subitem">
						<td class="checkout-table-item" colspan="2">
							<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['request']->value['cart']['taxes']['sales']['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['request']->value['cart']['taxes']['vat']['name'] : $tmp))===null||$tmp==='' ? "Taxes" : $tmp);?>

						</td>
						<td class="checkout-table-total">
							<?php echo money($_smarty_tpl->tpl_vars['request']->value['cart']['tax_total']);?>

						</td>
					</tr>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['request']->value['cart']['discounts']['coupon']){?>
					<tr class="checkout-table-subitem">
						<td class="checkout-table-item" colspan="2">
							<a class="coupon" href="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['cart']['discounts']['coupon']['description']);?>
">
								Discount <?php if ($_smarty_tpl->tpl_vars['request']->value['cart']['coupon_code']){?>(<?php echo $_smarty_tpl->tpl_vars['request']->value['cart']['coupon_code'];?>
)<?php }?></a>
						</td>
						<td class="checkout-table-total">
							<?php if ($_smarty_tpl->tpl_vars['request']->value['cart']['discount_total']>0){?>
								<?php echo money((-$_smarty_tpl->tpl_vars['request']->value['cart']['discount_total']));?>

							<?php }else{ ?>
								&mdash;
							<?php }?>
						</td>
					</tr>
				<?php }?>
				
				<?php if (!$_smarty_tpl->tpl_vars['step']->value){?>
					<tr class="checkout-table-subitem">
						<td class="checkout-table-item" colspan="2">
							<strong>Sub Total</strong>
						</td>
						<td class="checkout-table-total">
							<strong><?php echo money(($_smarty_tpl->tpl_vars['request']->value['cart']['sub_total']-$_smarty_tpl->tpl_vars['request']->value['cart']['sub_discount']));?>
</strong>
						</td>
					</tr>
				<?php }else{ ?>
					<tr class="checkout-table-subitem">
						<td class="checkout-table-item" colspan="2">
							<strong>Total</strong>
						</td>
						<td class="checkout-table-total">
							<strong><?php echo money($_smarty_tpl->tpl_vars['request']->value['cart']['grand_total']);?>
</strong>
						</td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Checkout form behavior -->
<script type="text/javascript">

	// Delegate form submit so that it gets executed last.
	$(document).delegate('form.checkout', 'submit', function (event)
	{
		$form = $(this);
		
		// Form locked?
		if ($form.data('locked'))
		{
			return false;
		}
		
		// Trigger loading anim.
		$form.trigger('loading');
		
		// Clear all previous errors.
		$form.find('input,select,textarea').trigger('error_clear');
		
		// Serialize form data.
		var form_data = $form.serialize();
		
		// Append order data?
		if ($form.data('order'))
		{
			// Should already be serialized.
			form_data += '&'+$form.data('order');
		}
				
		// Submit data by ajax through checkout/index.json.
		var request = $.ajax("/checkout/index.json", {
			type: 'POST',
			data: form_data,
			dataType: 'json',
			cache: false
		});

		// Request done?
		request.done(function (response)
		{
			// Validation errors?
			if (response.errors)
			{
				for (var section in { order: response.errors.order, account: response.errors.account })
				{
					var errors = response.errors[section];
					
					for (var field in errors)
					{
						// Trigger field errors.
						if (typeof errors[field] == "string")
						{
							$form.find('.form-field .'+field).trigger('error', [errors[field]]);
						}
						else
						{
							for (var key in errors[field])
							{
								$form.find('.form-field .'+key).trigger('error', [errors[field][key]]);
							}
						}
					}
				}
				
				$form.trigger('loading_done');
			}
			else
			{
				// Proceed to next step.
				if ($form.data('last-post'))
				{
					// Post to last checkout step action.(form action) with POST.
					$('<form method="post" class="hidden" action="'+$form.attr('action')+'"></form>')
						.appendTo('body')
						.submit();
				}
				else
				{
					// Simply navigate to next step.
					window.location.href = $form.attr('action');
				}
			}
		});
		
		// Request fail?
		request.fail(function (xhr, status)
		{
			$form.trigger('loading_done');
			
			// This should not happen.
			alert('An unknown request error occurred, please try again');
		});
		
		// Prevent default (submit).
		return false;
	});
	
	// Form loading animation.
	$('form.checkout').live('loading', function ()
	{
		$(this).data('locked', true)
			.css({ opacity: 0.5 });
	});
	$('form.checkout').live('loading_done', function ()
	{	
		$(this).data('locked', false)
			.css({ opacity: '' });
			
		// Checkout has errors?
		$error_field = $(this).find('.form-field.error:first');
		
		if ($error_field.length > 0)
		{
			$error_field.find('input,select,textarea').focus();
		}
	});
	
	// Checkout field error.
	$('input,select,textarea').live('error', function (event, error_message)
	{
		$(this).closest('.form-field').addClass('error');
		
		if (error_message && error_message != "required")
		{
			$label = $(this).closest('.form-field').find('label');
			$label.find('span.error').remove();
			$label.append(' <span class="error">'+error_message+'</span>');
		}
	});
	
	// Clear field error.
	$('input,select,textarea').live('error_clear', function ()
	{
		$(this).closest('.form-field')
			.removeClass('error')
			.find('label .error').remove();
	});

</script>
<?php }} ?>