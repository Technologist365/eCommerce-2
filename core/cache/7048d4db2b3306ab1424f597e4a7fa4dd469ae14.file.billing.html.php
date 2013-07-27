<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 10:25:56
         compiled from "/var/www/fwdcommerce/app/templates/admin/orders/billing.html" */ ?>
<?php /*%%SmartyHeaderCode:13506831151efabb46d0dd2-76626749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7048d4db2b3306ab1424f597e4a7fa4dd469ae14' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/orders/billing.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13506831151efabb46d0dd2-76626749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'order' => 0,
    'errors' => 0,
    'payment_settings' => 0,
    'settings' => 0,
    'method' => 0,
    'selected' => 0,
    'card' => 0,
    'publishable_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51efabb48b3062_45209219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efabb48b3062_45209219')) {function content_51efabb48b3062_45209219($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "orders")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['order'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>


<?php $_smarty_tpl->tpl_vars['payment_settings'] = new Smarty_variable(get("/settings/payments"), null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2><?php if ($_smarty_tpl->tpl_vars['order']->value['billing']){?>Edit<?php }else{ ?>Complete<?php }?> billing <small>/ Order #<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</small></h2>
		<div class="actions">
			<a class="btn view-cancel" href="">&times;</a>
		</div>
	</div>
	<form class="view-body edit" method="post" action="/orders/billing/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<fieldset>
				<div class="row">
					<div class="field control-group span3">
						<label>Billing method <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['billing']['method'];?>
</span></label>
						<select name="order[billing][method]" class="billing_method">
							<option value="none">None</option>
							<?php  $_smarty_tpl->tpl_vars['settings'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['settings']->_loop = false;
 $_smarty_tpl->tpl_vars['method'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payment_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['settings']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['settings']->key => $_smarty_tpl->tpl_vars['settings']->value){
$_smarty_tpl->tpl_vars['settings']->_loop = true;
 $_smarty_tpl->tpl_vars['method']->value = $_smarty_tpl->tpl_vars['settings']->key;
 $_smarty_tpl->tpl_vars['settings']->index++;
 $_smarty_tpl->tpl_vars['settings']->first = $_smarty_tpl->tpl_vars['settings']->index === 0;
?>
								
								<?php if (is_array($_smarty_tpl->tpl_vars['settings']->value['roles'])&&((is_array($_smarty_tpl->tpl_vars['order']->value['account']['roles'])&&!array_intersect($_smarty_tpl->tpl_vars['order']->value['account']['roles'],$_smarty_tpl->tpl_vars['settings']->value['roles']))||!is_array($_smarty_tpl->tpl_vars['order']->value['account']['roles'])&&($_smarty_tpl->tpl_vars['order']->value['billing']['method']!=$_smarty_tpl->tpl_vars['method']->value))){?>
									<?php continue 1?>
								<?php }?>
								<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable((!$_smarty_tpl->tpl_vars['order']->value['billing']['method']&&$_smarty_tpl->tpl_vars['settings']->first)||($_smarty_tpl->tpl_vars['order']->value['billing']['method']==$_smarty_tpl->tpl_vars['method']->value), null, 0);?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value){?>selected="selected"<?php }?>><?php echo ucfirst((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['method']->value : $tmp));?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
			</fieldset>
			<fieldset class="billing_method card <?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['method']!="card"){?>hidden<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['card']){?>
					<?php $_smarty_tpl->tpl_vars['card'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value['billing']['card'], null, 0);?>
					<h4><span class="label label-success">
						Card on file:
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['type'], ENT_QUOTES, 'UTF-8', true);?>

						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['last4'], ENT_QUOTES, 'UTF-8', true);?>

						(Expires: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['exp_month'], ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['exp_year'], ENT_QUOTES, 'UTF-8', true);?>
)
					</span></h4>
				<?php }else{ ?>
					<h4>Add credit card to order</h4>
				<?php }?>
				<div class="row">
					<div class="field control-group span3">
						<label>Credit card number</label>
						<input type="text" class="cardnum" autocomplete="off"
							data-default-name="order[billing][card][number]" />
					</div>
				</div>
				<div class="row">
					<div class="field control-group span1">
						<label>Expire date</label>
						<input type="text" class="cardexp_month" autocomplete="off" placeholder="MM"
							data-default-name="order[billing][card][exp_month]" />
					</div>
					<div class="field control-group span1">
						<label>&nbsp;</label>
						<input type="text" class="cardexp_year" autocomplete="off" placeholder="YYYY"
							data-default-name="order[billing][card][exp_year]" />
					</div>
					<div class="field control-group span1">
						<label>CVC code</label>
						<input type="text" class="cardcode" autocomplete="off"
							data-default-name="order[billing][card][cvc]" />
					</div>
				</div>
			</fieldset>
			<fieldset class="billing_method invoice <?php if ($_smarty_tpl->tpl_vars['order']->value['billing']['method']!="invoice"){?>hidden<?php }?>">
				
			</fieldset>
			<fieldset class="billing_method card invoice">
				<div class="row">
					<div class="field control-group span3">
						<label>Billing name <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['billing']['name'];?>
</span></label>
						<input type="text" name="order[billing][name]" class="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['order']->value['billing']['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['account']['name'] : $tmp);?>
" />
					</div>
				</div>
				<div class="row">
					<div class="field control-group span2">
						<label>Billing address <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['billing']['address'];?>
</span></label>
						<input type="text" name="order[billing][address]" class="address" value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['order']->value['billing']['address'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['shipping']['address'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['account']['last_order']['billing']['address'] : $tmp);?>
" />
					</div>
					<div class="field control-group span1">
						<label>Zip <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['billing']['zip'];?>
</span></label>
						<input type="text" name="order[billing][zip]" class="zip" value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['order']->value['billing']['zip'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['shipping']['zip'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['account']['last_order']['billing']['zip'] : $tmp);?>
" />
					</div>
				</div>
			</fieldset>
		</div>
		<div class="view-footer actions">
			<input type="hidden" name="order[:recalc]" value="true" />
			<button type="submit" class="btn btn-primary">Save billing</button>
			<button type="button" class="btn view-back">Cancel</button>
		</div>
	</form>
</div>

<script type="text/javascript">

	// Change billing method.
	$('form.edit select.billing_method').change(function ()
	{
		$('form.edit fieldset.billing_method').hide().find('input, textarea, select').attr('disabled', true);
		
		if ($(this).val() != "")
		{
			$('form.edit fieldset.billing_method.'+$(this).val()).show().find('input, textarea, select').attr('disabled', false);
		}
		
		$('#view').trigger('resize');
	})
	.trigger('change');
	
</script>


<?php if ($_smarty_tpl->tpl_vars['payment_settings']->value['card']['gateway']=='stripe'){?>

	
	<?php $_smarty_tpl->tpl_vars['publishable_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_settings']->value['card']['publishable_key'], null, 0);?>
	
	<script type="text/javascript" src="https://js.stripe.com/v1/"></script>
	<script type="text/javascript">
	
		// Submit edit order.
		$('form.edit').submit(function ()
		{
			$form = $(this);
			
			// Form locked?
			if (window.form_locked)
			{
				return false;
			}
			
			// Clear field errors.
			$form.find('input, select, textarea').trigger('error_clear');
			
			// Loading animation.
			$('#view .view-content').addClass('loading');
				
			$loader = $('#view .loader');
			
			if ($loader.length == 0)
			{
				$loader = $('<div class="loader"></div>').appendTo('#view');
			}
			
			$loader.spin({
				speed: 3,
				length: 5,
				width: 2,
				radius: 6
			});
			
			var card = {
				number: $form.find('input.cardnum').val(),
				cvc: $form.find('input.cardcode').val(),
				exp_month: $form.find('input.cardexp_month').val(),
				exp_year: $form.find('input.cardexp_year').val(),
				name: $form.find('input.name').val(),
				address_line1: $form.find('input.address').val(),
				address_zip: $form.find('input.zip').val()
			};
			
			// Any field will trigger token request.
			if (card.number || card.cvc || card.exp_month || card.exp_year)
			{
				// Need stripe?
				if (!$form.data('stripe') || $form.data('card') != $.param(card))
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
						card_invalid = 'input.cardcode';
					}
					
					// Invalid card field?
					if (card_invalid)
					{
						$form.find(card_invalid).trigger('error', ['']);
						$('#view').trigger('loaded');
					}
					else
					{
						try {
							// Get stripe.
							Stripe.createToken(card, function (status, response)
							{
								window.form_locked = false;
								
								// Error from stripe?
								if (response.error)
								{
									$form.data('stripe', null);
									
									$form.find('input.cardnum').trigger('error', ['('+response.error.message+')']);
									
									$('#view').trigger('loaded');
								}
								// Validated token!
								else
								{
									// Remember good card values.
									$form.data('card', $.param(card));
									
									// Separate stripe token from card object.
									var billing_card = response.card;
									response.card = null;
									var billing_stripe = response;
									
									// Convert/save stripe response and re-submit.
									$form.data('stripe', { order: { billing: {
										stripe: billing_stripe, card: billing_card
									}}});
									
									$form.trigger('submit');
								}
							});
							
							// Lock the form while getting stripe.
							window.form_locked = true;
						}
						catch (err)
						{
							$('#view').trigger('loaded');
							$form.find('input.cardnum').trigger('error', ['('+err+')']);
							window.form_locked = false;
						}
					}
					
					return false;
				}
			}
			
			// Add stripe data to form.
			if ($form.data('stripe'))
			{
				$form.attr('action', $form.attr('action')+'?'+$.param($form.data('stripe')));
			}
		});
	
	</script>

<?php }else{ ?>

	
	<script type="text/javascript">
		
		// Append default field names for submission.
		$('.billing_method.card input').each(function ()
		{
			if ($(this).data('default-name'))
			{
				$(this).attr('name', $(this).data('default-name'));
			}
		});
		
	</script>
<?php }?><?php }} ?>