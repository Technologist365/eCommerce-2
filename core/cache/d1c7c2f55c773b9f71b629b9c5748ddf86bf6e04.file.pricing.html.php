<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:07:16
         compiled from "/var/www/fwdcommerce/app/templates/admin/products/pricing.html" */ ?>
<?php /*%%SmartyHeaderCode:49173203351ee8004f0f822-52915989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1c7c2f55c773b9f71b629b9c5748ddf86bf6e04' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/products/pricing.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49173203351ee8004f0f822-52915989',
  'function' => 
  array (
    'price_tier' => 
    array (
      'parameter' => 
      array (
        'tpl' => false,
        'id' => 'NUM',
        'labels' => true,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'product' => 0,
    'has_price_tiers' => 0,
    'tpl' => 0,
    'id' => 0,
    'value' => 0,
    'pid' => 0,
    'pricing' => 0,
    'has_pricing_tiers' => 0,
    'enabled' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee8005063ff2_91438576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee8005063ff2_91438576')) {function content_51ee8005063ff2_91438576($_smarty_tpl) {?><fieldset class="pricing">
	<?php $_smarty_tpl->tpl_vars['has_price_tiers'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['product']->value['pricing']), null, 0);?>
	<input type="hidden" class="has_price_tiers"
		name="product[pricing]" value="" <?php if ($_smarty_tpl->tpl_vars['has_price_tiers']->value){?>disabled="disabled"<?php }?> />

	<div class="row price_tier_labels <?php if (!$_smarty_tpl->tpl_vars['has_price_tiers']->value){?>hidden<?php }?>">
		<div class="field span1">
			<label>Qty above</label>
		</div>
		<div class="field span1">
			<label>Price $</label>
		</div>
	</div>
	<?php if (!function_exists('smarty_template_function_price_tier')) {
    function smarty_template_function_price_tier($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['price_tier']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
		<div class="row price_tier <?php if ($_smarty_tpl->tpl_vars['tpl']->value){?>tpl hidden disabled<?php }?>">
			<div class="field control-group span1">
				<input type="text" name="product[pricing][<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][quantity]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['quantity'];?>
" class="qty numeric <?php if ($_smarty_tpl->tpl_vars['tpl']->value){?>disabled<?php }?>" />
			</div>
			<div class="field control-group span1">
				<input type="text" name="product[pricing][<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][price]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
" class="price numeric <?php if ($_smarty_tpl->tpl_vars['tpl']->value){?>disabled<?php }?>" />
			</div>
			<div class="field control-group span2">
				<a class="btn remove" href=""><i class="icon-minus-sign"></i></a>
			</div>
			<!-- Restrict tier by role. Un-comment to enable.
			<input type="hidden" name="product[pricing][<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][role]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['role'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl']->value){?>disabled<?php }?>" />
			-->
		</div>
	<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


	<?php smarty_template_function_price_tier($_smarty_tpl,array('tpl'=>true));?>


	<?php  $_smarty_tpl->tpl_vars['pricing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pricing']->_loop = false;
 $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['pricing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['pricing']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['pricing']->key => $_smarty_tpl->tpl_vars['pricing']->value){
$_smarty_tpl->tpl_vars['pricing']->_loop = true;
 $_smarty_tpl->tpl_vars['pid']->value = $_smarty_tpl->tpl_vars['pricing']->key;
 $_smarty_tpl->tpl_vars['pricing']->index++;
 $_smarty_tpl->tpl_vars['pricing']->first = $_smarty_tpl->tpl_vars['pricing']->index === 0;
?>
		<?php smarty_template_function_price_tier($_smarty_tpl,array('id'=>$_smarty_tpl->tpl_vars['pid']->value,'value'=>$_smarty_tpl->tpl_vars['pricing']->value,'labels'=>$_smarty_tpl->tpl_vars['pricing']->first));?>

	<?php } ?>
	
	<?php if ($_smarty_tpl->tpl_vars['has_pricing_tiers']->value||$_smarty_tpl->tpl_vars['enabled']->value){?>
		<a class="btn btn-success add_price_tier" href=""><i class="icon-plus-sign icon-white"></i> Add price tier</a><br />
		<br />
	<?php }?>
</fieldset>
<script type="text/javascript">
	
	// Click "add price tier".
	$('a.add_price_tier').click(function ()
	{
		var num = $('.row.price_tier').length;
		var qty = parseInt($('.row.price_tier:last input.qty').val());
		
		// Clone tpl tier.
		$row = $('.row.price_tier.tpl').clone(true)
			.removeClass('tpl').removeClass('disabled')
			.find('input, select').attr('disabled', false)
			.closest('.price_tier');
		
		// Append after last tier.
		$('.row.price_tier:last').after($row);
		
		// Replace NUM in template with order number.
		$row.find('input, select').each(function ()
		{
			$(this).attr('name', $(this).attr('name').replace(/NUM/, num));
		});
		$row.fadeIn();
		
		// Increment qty value.
		$row.find('input.qty').val(isNaN(qty) ? 1 : qty+1);
		
		// Cheap way to move page down.
		$(this).focus();
		$row.find('input.price').focus();

		// At least 1 tier?
		if ($('.row.price_tier').length > 1)
		{
			$('.row.price_tier_labels').show();
			$('input.has_price_tiers').attr('disabled', true);
		}
		
		return false;
	});

	// Click "remove" price tier.
	$('.row.price_tier a.remove').click(function ()
	{
		$row = $(this).closest('.row.price_tier');
		
		// Remove tier.
		$row.remove();

		// Last tier?
		if ($('.row.price_tier').length == 1)
		{
			$('.row.price_tier_labels').hide();
			$('input.has_price_tiers').attr('disabled', false);
		}
		
		return false;
	});

</script><?php }} ?>