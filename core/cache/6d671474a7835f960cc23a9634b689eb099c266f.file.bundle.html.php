<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:08:21
         compiled from "/var/www/fwdcommerce/app/templates/admin/products/bundle.html" */ ?>
<?php /*%%SmartyHeaderCode:730279551ee8045ca8244-65102351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d671474a7835f960cc23a9634b689eb099c266f' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/products/bundle.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '730279551ee8045ca8244-65102351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'item_id' => 0,
    'product' => 0,
    'errors' => 0,
    'p' => 0,
    'item' => 0,
    'qty' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee8045db6ed5_77993525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee8045db6ed5_77993525')) {function content_51ee8045db6ed5_77993525($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "products")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>

<?php $_smarty_tpl->tpl_vars['item_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['related_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['item'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['related_entry'], null, 0);?>

<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2><?php if ($_smarty_tpl->tpl_vars['item_id']->value){?>Bundle product #<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
<?php }else{ ?>Add product<?php }?> <small>/ <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</small></h2>
		<div class="actions">
			<a class="btn view-cancel" href="">&times;</a>
		</div>
	</div>
	<form class="view-body" method="post" action="/products/bundle/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/items<?php if ($_smarty_tpl->tpl_vars['item_id']->value){?>/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
<?php }?>?tab=">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<div class="row">
				<div class="field control-group span4">
					<label>Product <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['id'];?>
</span></label>
					<select name="item[id]" class="product">
						<option value="">Choose a product...</option>
						<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = get("/products",array('order'=>"name ASC",'is_bundle'=>array('$ne'=>true),'limit'=>null)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['p']->value['id']==$_smarty_tpl->tpl_vars['item']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['p']->value['sku'];?>
)</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="field control-group span1">
					<?php $_smarty_tpl->tpl_vars['qty'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['quantity']>0 ? $_smarty_tpl->tpl_vars['item']->value['quantity'] : 1, null, 0);?>
					<label>Quantity <span class="error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['quantity']){?>!<?php }?></span></label>
					<input type="text" name="item[quantity]" value="<?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
" />
				</div>
				<div class="field control-group span1">
					<label>Sort order</span></label>
					<input type="text" name="item[sort]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
" />
				</div>
			</div>
		</div>
		<div class="view-footer actions">
			<button type="submit" class="btn btn-primary">Save item</button>
			<button type="button" class="btn view-back">Back</button>
			
			<?php if ($_smarty_tpl->tpl_vars['item_id']->value){?>
				<a class="trash confirm view-link" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/items/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
?item[:delete]=true&tab=" data-post="true"><i class="icon-trash"></i></a>
			<?php }?>
		</div>
	</form>
</div>

<?php }} ?>