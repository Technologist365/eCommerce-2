<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 09:00:11
         compiled from "/var/www/fwdcommerce/app/templates/alpha/checkout/_billing.html" */ ?>
<?php /*%%SmartyHeaderCode:194581103551f0e91b8585e7-86445131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29ce84d2b923e3f241678bd823f7ffa48b57033e' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/checkout/_billing.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194581103551f0e91b8585e7-86445131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'order' => 0,
    'payment_settings' => 0,
    'publishable_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f0e91b98c4d1_33414474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0e91b98c4d1_33414474')) {function content_51f0e91b98c4d1_33414474($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['order'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['cart']['order'], null, 0);?>


<?php if (!$_smarty_tpl->tpl_vars['order']->value['billing']&&$_smarty_tpl->tpl_vars['order']->value['shipping']){?>
	<?php $_smarty_tpl->createLocalArrayVariable('order', null, 0);
$_smarty_tpl->tpl_vars['order']->value['billing'] = array('name'=>$_smarty_tpl->tpl_vars['order']->value['name'],'address'=>$_smarty_tpl->tpl_vars['order']->value['shipping']['address'],'zip'=>$_smarty_tpl->tpl_vars['order']->value['shipping']['zip']);?>
<?php }?>

<fieldset class="form-fieldset">
	<h4 class="form-header">Shipping Information</h4>
	<div class="row">
		<p class="form-details span4">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br />
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['address'], ENT_QUOTES, 'UTF-8', true);?>
<br />
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['city'], ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['state'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['zip'], ENT_QUOTES, 'UTF-8', true);?>

			<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']['country']){?>(<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping']['country'];?>
)<?php }?>
		</p>
		<p class="form-details span4">
			Method: <?php echo $_smarty_tpl->tpl_vars['order']->value['shipping']['method'];?>
<br />
			E-mail: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
<br />
			<?php if ($_smarty_tpl->tpl_vars['order']->value['phone']){?>
				Phone: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
<br />
			<?php }?>
		</p>
		<p class="form-details span4">
			<a href="/checkout">Edit details</a>
		</p>
	</div>
</fieldset>

<fieldset class="form-fieldset checkout-billing-info">
	<h4 class="form-header">Payment Information</h4>
	<div class="row">
		<div class="form-field control-group span4">
			<label>Name on card</label>
			<input type="text" class="name" name="order[billing][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['billing']['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
		</div>
	</div>
	<div class="row">
		<div class="form-field control-group span4">
			<label>Credit card number</label>
			<input type="text" class="cardnum focus" autocomplete="off"
				data-default-name="order[billing][card][number]" />
		</div>
	</div>
	<div class="row">
		<div class="form-field control-group span1">
			<label>MM</label>
			<input type="text" class="cardexp_month" maxlength="2" autocomplete="off" placeholder="MM"
				data-default-name="order[billing][card][exp_month]" />
		</div>
		<div class="form-field control-group span1">
			<label>YYYY</label>
			<input type="text" class="cardexp_year" maxlength="4" autocomplete="off" placeholder="YYYY"
				data-default-name="order[billing][card][exp_year]" />
		</div>
		<div class="form-field control-group span2">
			<label title="Usually a 3-4 digit number found on the back of your card">Security code <b class="help-tip">?</b></label>
			<input type="text" class="cardcvc" autocomplete="off"
				data-default-name="order[billing][card][cvc]" />
		</div>
	</div>
</fieldset>

<fieldset class="form-fieldset checkout-billing-info">
	<div class="row">
		<div class="form-field control-group span4">
			<label>Billing address</label>
			<input type="text" class="address" name="order[billing][address]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['billing']['address'], ENT_QUOTES, 'UTF-8', true);?>
" />
		</div>
	</div>
	<div class="row">
		<div class="form-field control-group last span2">
			<label>Zip code</label>
			<input type="text" class="zip" name="order[billing][zip]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['billing']['zip'], ENT_QUOTES, 'UTF-8', true);?>
" />
		</div>
	</div>
	<!-- Suggest billing method (card) -->
	<input type="hidden" name="order[billing][method]" value="card" />
</fieldset>


<?php $_smarty_tpl->tpl_vars['payment_settings'] = new Smarty_variable(get("/settings/payments"), null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['payment_settings']->value['card']['gateway']=='stripe'){?>

	
	<?php $_smarty_tpl->tpl_vars['publishable_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_settings']->value['card']['publishable_key'], null, 0);?>

	<script type="text/javascript" src="https://js.stripe.com/v1/"></script>
	<script type="text/javascript">
	
		$('form.checkout').submit(function (e)
		{
			$form = $(this);
			
			// Clear all previous errors.
			$form.find('input,select,textarea').trigger('error_clear');
			
			// Build stripe card info.
			var card = {
				number: $form.find('.checkout-billing-info input.cardnum').val(),
				cvc: $form.find('.checkout-billing-info input.cardcvc').val(),
				exp_month: $form.find('.checkout-billing-info input.cardexp_month').val(),
				exp_year: $form.find('.checkout-billing-info input.cardexp_year').val(),
				name: $form.find('.checkout-billing-info input.name').val(),
				address_line1: $form.find('.checkout-billing-info input.address').val(),
				address_zip: $form.find('.checkout-billing-info input.zip').val()
			};
			
			// Already validated?
			if ($form.data('stripe-card') && $form.data('stripe-card') == $.param(card))
			{
				// Results will get picked up in $form.data('order')
				return true;
			}
			// Need to validate...
			else
			{
				// Stripe identity.
				Stripe.setPublishableKey('<?php echo $_smarty_tpl->tpl_vars['publishable_key']->value;?>
');
	
				// Validate basic inputs.
				var card_invalid = null;
				
				if (!Stripe.validateCardNumber(card.number))
				{
					card_invalid = 'input.cardnum';
				}
				else if (!Stripe.validateExpiry(card.exp_month, card.exp_year))
				{
					card_invalid = 'input.cardexp_month,input.cardexp_year';
				}
				else if (!Stripe.validateCVC(card.cvc))
				{
					card_invalid = 'input.cardcvc';
				}
				
				// Invalid card field?
				if (card_invalid)
				{
					$form.find(card_invalid).trigger('error', ['']);
					
					$form.trigger('loading_done');
					return false;
				}
				else
				{
					$form.trigger('loading');
					
					try {
						// Get stripe.
						Stripe.createToken(card, function (status, response)
						{
							// Error from stripe?
							if (response.error)
							{
								$form.data('stripe-card', null);
								
								$form.find('input.cardnum').trigger('error', ['('+response.error.message+')']).focus();
								
								$form.trigger('loading_done');
							}
							// Validated token!
							else
							{
								// Remember good card values.
								$form.data('stripe-card', $.param(card));
								
								// Separate stripe token from card object.
								var billing_card = response.card;
								
								response.card = null;
								var billing_stripe = response;
								
								// Save response data and re-submit.
								$form.data('order', 
									$.param({ order: { billing: {
										stripe: billing_stripe, card: billing_card
									}}})
								);
								
								// Trigger form submit again.
								$form.trigger('loading_done');
								$form.trigger('submit');
							}
						});
					}
					catch (err)
					{
						$form.find('input.cardnum').trigger('error', ['('+err+')']);
						$form.trigger('loading_done');
					}
				}
			}
			
			// Prevent submit default.
			return false;
		});

	</script>

<?php }else{ ?>

	
	<script type="text/javascript">
		
		// Append default field names for submission.
		$('.checkout-billing-info input').each(function ()
		{
			if ($(this).data('default-name'))
			{
				$(this).attr('name', $(this).data('default-name'));
			}
		});
		
	</script>
<?php }?><?php }} ?>