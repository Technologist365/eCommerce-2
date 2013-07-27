<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 08:59:35
         compiled from "/var/www/fwdcommerce/app/templates/alpha/checkout/_shipping.html" */ ?>
<?php /*%%SmartyHeaderCode:209829053551f0e8f7334835-92595729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9251489a8297f993a4e959292fede01ebdbda911' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/checkout/_shipping.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209829053551f0e8f7334835-92595729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'order' => 0,
    'countries' => 0,
    'country' => 0,
    'selected' => 0,
    'code' => 0,
    'state_name' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f0e8f741b8f7_74427748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0e8f741b8f7_74427748')) {function content_51f0e8f741b8f7_74427748($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['order'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['cart']['order'], null, 0);?>


<?php $_smarty_tpl->tpl_vars['countries'] = new Smarty_variable(countries(), null, 0);?>

<fieldset class="form-fieldset">
	<h4 class="form-header">Shipping Address</h4>
	<div class="checkout-shipping-info">
		<div class="row">
			<div class="form-field control-group span4">
				<label>Full name</label>
				<input type="text" class="name" name="order[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
			</div>
		</div>
		<div class="row">
			<div class="form-field control-group span4">
				<label>Address</label>
				<input type="text" class="address" name="order[shipping][address]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['address'], ENT_QUOTES, 'UTF-8', true);?>
" />
			</div>
		</div>
		<div class="row">
			<div class="form-field control-group span2">
				<label>City</label>
				<input type="text" class="city" name="order[shipping][city]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['city'], ENT_QUOTES, 'UTF-8', true);?>
" />
			</div>
			<div class="form-field control-group span2">
				<label>Zip code</label>
				<input type="text" class="zip" name="order[shipping][zip]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['zip'], ENT_QUOTES, 'UTF-8', true);?>
" />
			</div>
		</div>
		<div class="row">
			<div class="form-field control-group span2">
				<label>Country</label>
				<select name="order[shipping][country]" class="country" id="country-select">
					<option value="">Select...</option>
					<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
						<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(($_smarty_tpl->tpl_vars['country']->value['code']==$_smarty_tpl->tpl_vars['order']->value['shipping']['country']), null, 0);?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['code'];?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option>
					<?php } ?>
				</select>
			</div>
			
			<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
				<?php if (!$_smarty_tpl->tpl_vars['country']->value['states']){?>
					<?php continue 1?>
				<?php }?>
				<div class="form-field control-group span2 checkout-state-list hidden" id="<?php echo $_smarty_tpl->tpl_vars['country']->value['code'];?>
-states">
					<label><?php echo (($tmp = @$_smarty_tpl->tpl_vars['country']->value['state_label'])===null||$tmp==='' ? "State" : $tmp);?>
</label>
					<select name="order[shipping][state]" class="state" disabled="disabled">
						<option value="">Select...</option>
						<?php  $_smarty_tpl->tpl_vars['state_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state_name']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['country']->value['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state_name']->key => $_smarty_tpl->tpl_vars['state_name']->value){
$_smarty_tpl->tpl_vars['state_name']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['state_name']->key;
?>
							
							<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable((is_numeric($_smarty_tpl->tpl_vars['code']->value) ? $_smarty_tpl->tpl_vars['state_name']->value : $_smarty_tpl->tpl_vars['code']->value), null, 0);?>
							<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['order']->value['shipping']['state']), null, 0);?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['state_name']->value;?>
</option>
						<?php } ?>
					</select>
				</div>
			<?php } ?>
			<div class="form-field control-group span2 checkout-state-default hidden">
				<label>State/Region</label>
				<input type="text" class="state" name="order[shipping][state]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['shipping']['state'], ENT_QUOTES, 'UTF-8', true);?>
" disabled="disabled" />
			</div>
		</div>
	</div>
</fieldset>

<fieldset class="form-fieldset">
	<h4 class="form-header">Shipping Method</h4>
	<div class="row">
		<div class="form-field control-group">
			<input type="hidden" class="method" name="order[shipping][method]" value="" />
			<div class="checkout-shipping-methods span4">
				<label><em>Loading delivery options</em></label>
				
			</div>
		</div>
	</div>
</fieldset>

<fieldset class="form-fieldset">
	<div class="row">
		<div class="form-field control-group span4">
			<label>E-mail address</label>
			<input type="email" class="email" name="order[email]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" />
		</div>
	</div>
	<!-- Optional phone number <div class="row">
		<div class="form-field control-group span4">
			<label>Phone number</label>
			<input type="tel" class="phone" name="order[phone]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
" />
		</div>
	</div>-->
</fieldset>

<fieldset class="form-fieldset">
	<div class="row">
		<div class="form-field control-group span4">
			<label>Promo code (Optional)</label>
			<input type="text" class="coupon_code" name="coupon_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['cart']['coupon_code'], ENT_QUOTES, 'UTF-8', true);?>
" />
		</div>
	</div>
</fieldset>

<fieldset class="form-fieldset">
	<div class="row">
		<div class="form-field phone control-group span4">
			<label>Comments (Optional)</label>
			<textarea name="order[comments]" rows="3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['comments'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
		</div>
	</div>
</fieldset>

<!-- Checkout shipping form behaviors -->
<script type="text/javascript">

	// Country/state selector.
	$('#country-select').change(function ()
	{
		// Hide/disable all state selectors.
		$('.checkout-state-list').hide();
		$('.checkout-state-list select').attr('disabled', true);
		$('.checkout-state-default').hide();
		$('.checkout-state-default input').attr('disabled', true);
		
		// Show/enable related input.
		$state = $('#'+$(this).val()+'-states');
		if ($state.length)
		{
			$state.find('select').attr('disabled', false);
			$state.show();
		}
		else
		{
			// Show default input.
			$('.checkout-state-default').show();
			$('.checkout-state-default input').attr('disabled', false);
		}
	})
	.trigger('change');

	// Load shipping methods.
	$(document).ready(function ()
	{
		$('.checkout-shipping-methods').closest('form').data('locked', true);
		
		$('.checkout-shipping-methods')
			.css({ opacity: 0.5 })
			.load('/checkout/shipping-methods', function ()
			{
				$(this).closest('form').data('locked', false);
				$(this).css({ opacity: '' });
			});
	});
	
</script><?php }} ?>