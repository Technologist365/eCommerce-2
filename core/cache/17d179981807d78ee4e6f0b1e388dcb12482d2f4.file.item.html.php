<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 10:24:38
         compiled from "/var/www/fwdcommerce/app/templates/admin/orders/item.html" */ ?>
<?php /*%%SmartyHeaderCode:76767447451efab66dcb6b2-94381222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17d179981807d78ee4e6f0b1e388dcb12482d2f4' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/orders/item.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76767447451efab66dcb6b2-94381222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'for' => 0,
    'request' => 0,
    'all_products' => 0,
    'order' => 0,
    'item_id' => 0,
    'item' => 0,
    'params' => 0,
    'errors' => 0,
    'product' => 0,
    'qty' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51efab670809d2_30958303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efab670809d2_30958303')) {function content_51efab670809d2_30958303($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['for'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['for']->value)===null||$tmp==='' ? "orders" : $tmp), null, 0);?>

<?php ob_start(); render(array("view" => "default-entry", "for" => $_smarty_tpl->tpl_vars['for']->value)); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['order'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>

<?php $_smarty_tpl->tpl_vars['item_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['related_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['item'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['related_entry'], null, 0);?>

<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>


<?php $_smarty_tpl->tpl_vars['all_products']->value = get("/products", array('order'=>"name ASC",'limit'=>null,'pricing'=>array('roles'=>$_smarty_tpl->tpl_vars['order']->value['account']['roles']))); ?>

<div class="view-container">
	<div class="view-header well">
		<h2><?php if ($_smarty_tpl->tpl_vars['item_id']->value){?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }else{ ?>Add item<?php }?> <small>/ Order #<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</small></h2>
		<div class="actions">
			<a class="btn view-cancel" href="">&times;</a>
		</div>
	</div>
	<form class="view-body" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
/item/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/items<?php if ($_smarty_tpl->tpl_vars['item_id']->value){?>/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
<?php }?>?tab=<?php echo $_smarty_tpl->tpl_vars['params']->value['tab'];?>
">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<div class="row">
				<div class="field control-group span4">
					<label>Product <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['id'];?>
</span></label>
					<select name="item[id]" class="product">
						<option value="">Choose a product...</option>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['id']==$_smarty_tpl->tpl_vars['item']->value['id']){?>selected="selected"<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['variants']){?>data-variants="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['product']->value['variants']));?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['variant_id']){?>data-variant-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['variant_id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
 &mdash; <?php if ($_smarty_tpl->tpl_vars['product']->value['low_price']){?><?php echo money($_smarty_tpl->tpl_vars['product']->value['low_price']);?>
-<?php echo money($_smarty_tpl->tpl_vars['product']->value['high_price']);?>
<?php }else{ ?><?php echo money($_smarty_tpl->tpl_vars['product']->value['price']);?>
<?php }?></option>
						<?php } ?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['is_deleted']){?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 &mdash; <?php echo money($_smarty_tpl->tpl_vars['product']->value['price']);?>
 (deleted)</option>
						<?php }?>
					</select>
				</div>
			</div>
			<div class="row variants hidden">
				<div class="field control-group span3">
					<label>Variant <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['variant'];?>
</span></label>
					<select name="item[variant_id]" class="variant">
					</select>
				</div>
			</div>
			<div class="row">
				<div class="field control-group span1">
					<?php $_smarty_tpl->tpl_vars['qty'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['quantity']>0 ? $_smarty_tpl->tpl_vars['item']->value['quantity'] : 1, null, 0);?>
					<label>Quantity <span class="error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['quantity']){?>!<?php }?></span></label>
					<input type="text" name="item[quantity]" value="<?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
" class="numeric" />
				</div>
				<div class="field control-group span1">
					<label>Price $ (each)<span class="error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['price']){?>!<?php }?></span></label>
					<input type="text" name="item[price]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
" class="price numeric" />
				</div>
			</div>
		</div>
		<div class="view-footer actions">
			<button type="submit" class="btn btn-primary">Save item</button>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['is_returned']){?>
				<button type="button" class="btn btn-success confirm view-link" data-href="/<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/items/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
?item[is_returned]=false&tab=<?php echo $_smarty_tpl->tpl_vars['params']->value['tab'];?>
" data-post="true">Undo return</button>
			<?php }elseif($_smarty_tpl->tpl_vars['item']->value['is_cancelled']){?>
				<button type="button" class="btn btn-success confirm view-link" data-href="/<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/items/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
?item[is_cancelled]=false&tab=<?php echo $_smarty_tpl->tpl_vars['params']->value['tab'];?>
" data-post="true">Undo cancel</button>
			<?php }elseif($_smarty_tpl->tpl_vars['item_id']->value){?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value['date_shipped']){?>
					<button type="button" class="btn confirm view-link" data-href="/<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/items/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
?item[is_returned]=true&tab=<?php echo $_smarty_tpl->tpl_vars['params']->value['tab'];?>
" data-post="true">Return item</button>
				<?php }else{ ?>
					<button type="button" class="btn confirm view-link" data-href="/<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/items/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
?item[is_cancelled]=true&tab=<?php echo $_smarty_tpl->tpl_vars['params']->value['tab'];?>
" data-post="true">Cancel item</button>
				<?php }?>
			<?php }?>
			<button type="button" class="btn view-back">Back</button>
			
			<?php if ($_smarty_tpl->tpl_vars['item_id']->value){?>
				<a class="trash confirm view-link" href="/<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
/items/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
?item[:delete]=true&tab=<?php echo $_smarty_tpl->tpl_vars['params']->value['tab'];?>
" data-post="true"><i class="icon-trash"></i></a>
			<?php }?>
		</div>
	</form>
</div>

<script type="text/javascript">

	$('#view select.product').change(function ()
	{
		var $option = $('option:selected', this);
		
		// Set price hint. 
		var name = $option.text().split('$');
		if (name[1])
		{
			$('#view input.price').attr('placeholder', name[1]);
		}
		
		// Set variant selector (if applicable).
		var variants = $option.data('variants');
		if (variants != null && typeof variants == 'object')
		{
			$('#view select.variant').find('option').remove();
			
			for (var_id in variants)
			{
				var sel_var_id = $option.data('variant-id');
				var selected = (sel_var_id && sel_var_id == var_id) ? 'selected="selected"' : '';
				$('#view select.variant').append('<option value="'+var_id+'" '+selected+'>'+variants[var_id].name+'</option>');
				
				// Set variant price hint?
				if (variants[var_id].price)
				{
					$('#view input.price').attr('placeholder', variants[var_id].price);
				}
			}
			
			$('#view .row.variants').show();
		}
		else
		{
			$('#view select.variant').find('option').remove();
			$('#view .row.variants').hide();
		}
	})
	.trigger('change');

</script>

<?php }} ?>