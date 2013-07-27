<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:46
         compiled from "/var/www/fwdcommerce/app/templates/alpha/products.html" */ ?>
<?php /*%%SmartyHeaderCode:139222598151ee7ef6bb6a28-06907110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abff06c88e8cd35c807d767d11c993a6a42e6dfa' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/products.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139222598151ee7ef6bb6a28-06907110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_slug' => 0,
    'product' => 0,
    'product_description' => 0,
    'id' => 0,
    'variant' => 0,
    'image' => 0,
    'src' => 0,
    'related_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ef6cfbac6_04264477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ef6cfbac6_04264477')) {function content_51ee7ef6cfbac6_04264477($_smarty_tpl) {?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php args(array(0 => 'product_slug'), $_smarty_tpl) ?>


<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['product_slug']->value);?>
<?php $_tmp1=ob_get_clean();?><?php if (!isset($_smarty_tpl->tpl_vars['product'])) $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['product']->value = get("/products/".$_tmp1)){?>

	
	<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['page_title'] = $_smarty_tpl->tpl_vars['product']->value['name'];?>
	
	
	<?php $_smarty_tpl->tpl_vars['product_description'] = new Smarty_variable(markdown($_smarty_tpl->tpl_vars['product']->value['description']), null, 0);?>
	<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['page_description'] = trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product_description']->value),200);?>

	
	<?php if ($_smarty_tpl->tpl_vars['product']->value['primary_category_id']){?>
	
		<?php $_smarty_tpl->tpl_vars['category'] = new Smarty_variable(get("/categories/".($_smarty_tpl->tpl_vars['product']->value['primary_category_id'])), null, 0);?>
	
		
		<?php $_smarty_tpl->tpl_vars['related_products'] = new Smarty_variable(get("/products",array('id'=>array('$ne'=>$_smarty_tpl->tpl_vars['product']->value['id']),'category_ids'=>$_smarty_tpl->tpl_vars['product']->value['primary_category_id'],'is_active'=>true,'limit'=>4)), null, 0);?>
	<?php }?>
<?php }else{ ?>

	
	<?php render(array("view" => "404")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php }?>

<div class="product-page">
	<div class="row">
		<div class="product-page-details span6 pull-right">
			<div class="product-page-header">
				<h1><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h1>
				<div class="product-page-price">
					<?php echo money($_smarty_tpl->tpl_vars['product']->value['price']);?>

				</div>
			</div>
			<div class="product-page-form">
				<form class="cart-add" method="post" action="/cart">
					<?php if ($_smarty_tpl->tpl_vars['product']->value['variants']){?>
						<div class="row">
							<div class="form-field span3">
								<select name="item[variant_id]">
									<?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value){
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['variant']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['variant']->value['name'];?>
</option>
									<?php } ?>
								</select>
							</div>
						</div>
					<?php }?>
					<input type="hidden" name="item[id]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" />
					<input type="hidden" name="item[quantity]" value="1" />
					<button type="submit" class="btn btn-large btn-success">Add to cart</button>
					<!-- Optional: Quantity input style
					<div class="row">
						<div class="field span1">
							<label>Quantity</label>
							<input type="text" name="item[quantity]" value="1" />
						</div>
						<div class="field span2">
							<label>&nbsp;</label>
							<button type="submit" class="btn btn-success">Add to cart</button>
						</div>
					</div>-->
				</form>
			</div>
			<div class="product-page-description">
				<h5>Description</h5>
				<?php echo $_smarty_tpl->tpl_vars['product_description']->value;?>

			</div>
		</div>
		<div class="product-page-image span6 pull-left">
			<img src="<?php echo image(array('for'=>$_smarty_tpl->tpl_vars['product']->value,'width'=>440,'height'=>440),$_smarty_tpl);?>
" class="default" />
			<div class="product-page-imgalt">
				<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['src'] = new Smarty_variable(image(array('for'=>$_smarty_tpl->tpl_vars['product']->value,'name'=>$_smarty_tpl->tpl_vars['image']->value['name'],'width'=>75,'height'=>75)), null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['src']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
" /><?php }?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>


<?php if ($_smarty_tpl->tpl_vars['related_products']->value){?>
	<div class="category-list product-page-related">
		<div class="category-list-header">
			<b>Related Items</b>
		</div>
		<?php render(array("view" => "product-list", "with" => $_smarty_tpl->tpl_vars['related_products']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</div>
<?php }?><?php }} ?>