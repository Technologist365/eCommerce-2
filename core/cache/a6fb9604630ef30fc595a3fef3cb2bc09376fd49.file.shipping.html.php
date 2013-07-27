<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 10:25:15
         compiled from "/var/www/fwdcommerce/app/templates/admin/orders/shipping.html" */ ?>
<?php /*%%SmartyHeaderCode:203652668051efab8b9dc7d2-50104323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6fb9604630ef30fc595a3fef3cb2bc09376fd49' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/orders/shipping.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203652668051efab8b9dc7d2-50104323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'order' => 0,
    'errors' => 0,
    'method' => 0,
    'shipping_method' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51efab8bb3b982_80229322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efab8bb3b982_80229322')) {function content_51efab8bb3b982_80229322($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "orders")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['order'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2><?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']){?>Edit<?php }else{ ?>Complete<?php }?> shipping <small>/ Order #<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</small></h2>
		<div class="actions">
			<a class="btn view-cancel" href="">&times;</a>
		</div>
	</div>
	<form class="view-body edit" method="post" action="/orders/shipping/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<fieldset>
				<div class="row">
					<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping_total']){?>
						<input type="hidden" name="order[shipping_total]" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_total'];?>
" />
					<?php }?>
					<div class="field control-group span3">
						<label>Shipping method <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['shipping']['method'];?>
</span></label>
						<?php $_smarty_tpl->tpl_vars['shipping_method'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value['shipping']['method'], null, 0);?>
						<select name="order[shipping][method]" class="shipping_method">
							<?php  $_smarty_tpl->tpl_vars['method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['method']->_loop = false;
 $_from = get("/shipments/methods"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['method']->key => $_smarty_tpl->tpl_vars['method']->value){
$_smarty_tpl->tpl_vars['method']->_loop = true;
?>
								<option <?php if ($_smarty_tpl->tpl_vars['method']->value['name']==$_smarty_tpl->tpl_vars['shipping_method']->value){?><?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(true, null, 0);?>selected="selected"<?php }?> data-price="<?php echo $_smarty_tpl->tpl_vars['method']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['method']->value['name'];?>
</option>
							<?php } ?>
							<?php if ($_smarty_tpl->tpl_vars['shipping_method']->value&&!$_smarty_tpl->tpl_vars['selected']->value){?>
								<option selected="selected"><?php echo $_smarty_tpl->tpl_vars['shipping_method']->value;?>
</option>
							<?php }?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="field control-group span3">
						<label>Ship to <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['shipping']['name'];?>
</span></label>
						<input type="text" name="order[shipping][name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['order']->value['shipping']['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['account']['name'] : $tmp);?>
" />
					</div>
				</div>
				<div class="row">
					<div class="field control-group span3">
						<label>Shipping address <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['shipping']['address'];?>
</span></label>
						<input type="text" name="order[shipping][address]" value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['order']->value['shipping']['address'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['billing']['address'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['account']['last_order']['shipping']['address'] : $tmp);?>
" />
					</div>
				</div>
				<div class="row">
					<div class="field control-group span2">
						<label>Shipping city <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['shipping']['city'];?>
</span></label>
						<input type="text" name="order[shipping][city]" value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['order']->value['shipping']['city'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['billing']['city'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['account']['last_order']['shipping']['city'] : $tmp);?>
" />
					</div>
					<div class="field control-group span1">
						<label>State <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['shipping']['state'];?>
</span></label>
						<input type="text" name="order[shipping][state]" value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['order']->value['shipping']['state'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['billing']['state'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['account']['last_order']['shipping']['state'] : $tmp);?>
" maxlength="2" />
					</div>
					<div class="field control-group span1">
						<label>Zip <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['shipping']['zip'];?>
</span></label>
						<input type="text" name="order[shipping][zip]" value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['order']->value['shipping']['zip'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['billing']['zip'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order']->value['account']['last_order']['shipping']['zip'] : $tmp);?>
" />
					</div>
				</div>
			</fieldset>
		</div>
		<div class="view-footer actions">
			<input type="hidden" name="order[:recalc]" value="true" />
			<button type="submit" class="btn btn-primary">Save shipping</button>
			<button type="button" class="btn view-back">Back</button>
		</div>
	</form>
</div>
<?php }} ?>