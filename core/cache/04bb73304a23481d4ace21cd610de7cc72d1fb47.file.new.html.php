<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 09:32:24
         compiled from "/var/www/fwdcommerce/app/templates/admin/products/new.html" */ ?>
<?php /*%%SmartyHeaderCode:170810678051ee7ff1c4c798-42322840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04bb73304a23481d4ace21cd610de7cc72d1fb47' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/products/new.html',
      1 => 1374645360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170810678051ee7ff1c4c798-42322840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ff1cf3051_08744964',
  'variables' => 
  array (
    'request' => 0,
    'errors' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ff1cf3051_08744964')) {function content_51ee7ff1cf3051_08744964($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "products")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2>New Product</h2>
		<div class="actions">
			<a class="btn view-cancel" href="">&times;</a>
		</div>
	</div>
	<form class="view-body new" method="post" action="/products/new">
		<div class="view-content">
			<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
			<div class="row">
				<div class="field name control-group span2">
					<label>Product name <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['name'];?>
</span></label>
					<input type="text" name="product[name]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
				</div>
				<div class="field price control-group span1">
					<label>Price <span class="error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['price']){?>!<?php }?></span></label>
					<input type="text" name="product[price]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
" class="numeric" />
				</div>
				<?php if ($_smarty_tpl->tpl_vars['errors']->value['slug']){?>				
					<div class="field name control-group span4">
						<label>Slug <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['slug'];?>
</span></label>
						<input type="text" name="product[slug]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['slug'];?>
" />
					</div>
				<?php }?>
			</div>
			<div class="row">
				<div class="field name control-group span2">
					<label>Bundle of other products? <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['is_bundle'];?>
</span></label>
					<select name="product[is_bundle]" class="bundle">
						<option value="false">No</option>
						<option value="true" <?php if ($_smarty_tpl->tpl_vars['product']->value['is_bundle']=="true"){?>selected="selected"<?php }?>>Yes</option>
					</select>
				</div>
			</div>
		</div>
		<div class="view-footer">
			<div class="actions">
				<button type="submit" class="btn btn-primary">Create product</button>
				<button type="button" class="btn view-cancel">Cancel</button>
			</div>
		</div>
	</form>
</div>
<?php }} ?>