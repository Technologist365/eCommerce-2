<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:08:50
         compiled from "/var/www/fwdcommerce/app/templates/admin/products/variant.html" */ ?>
<?php /*%%SmartyHeaderCode:137267929551ee806266b979-51395748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f56954a47dcec6cff560f5854556f72e5aee7ae3' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/products/variant.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137267929551ee806266b979-51395748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'variant_id' => 0,
    'variant' => 0,
    'product' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee806274bca8_52455915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee806274bca8_52455915')) {function content_51ee806274bca8_52455915($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "products")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>

<?php $_smarty_tpl->tpl_vars['variant_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['related_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['variant'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['related_entry'], null, 0);?>

<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2><?php if ($_smarty_tpl->tpl_vars['variant_id']->value){?><?php echo $_smarty_tpl->tpl_vars['variant']->value['name'];?>
<?php echo $_smarty_tpl->tpl_vars['variant_id']->value;?>
<?php }else{ ?>Add variant<?php }?> <small>/ <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</small></h2>
		<div class="actions">
			<a class="btn view-cancel" href="">&times;</a>
		</div>
	</div>
	<form class="view-body" method="post" action="/products/variant/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/variants<?php if ($_smarty_tpl->tpl_vars['variant_id']->value){?>/<?php echo $_smarty_tpl->tpl_vars['variant_id']->value;?>
<?php }?>?tab=">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<div class="row">
				<div class="field control-group required span2">
					<label>Variant name <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['name'];?>
</span></label>
					<input type="text" name="variant[name]" value="<?php echo $_smarty_tpl->tpl_vars['variant']->value['name'];?>
" class="focus" />
					<input type="hidden" name="variant[:validate][required][]" value="name" />
				</div>
				<div class="field control-group span1">
					<label>SKU <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['sku'];?>
</span></label>
					<input type="text" name="variant[sku]" value="<?php echo $_smarty_tpl->tpl_vars['variant']->value['sku'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['product']->value['sku'];?>
" />
				</div>
				<div class="field control-group span1">
					<label>Price <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['price'];?>
</span></label>
					<input type="text" name="variant[price]" value="<?php echo $_smarty_tpl->tpl_vars['variant']->value['price'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
" class="numeric" />
				</div>
			</div>
		</div>
		<div class="view-footer actions">
			<button type="submit" class="btn btn-primary">Save variant</button>
			<button type="button" class="btn view-back">Back</button>
			
			<?php if ($_smarty_tpl->tpl_vars['variant_id']->value){?>
				<a class="trash confirm view-link" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/variants/<?php echo $_smarty_tpl->tpl_vars['variant_id']->value;?>
?variant[:delete]=true&tab=variants" data-post="true"><i class="icon-trash"></i></a>
			<?php }?>
		</div>
	</form>
</div>

<?php }} ?>