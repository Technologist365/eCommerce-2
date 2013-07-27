<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:35:00
         compiled from "/var/www/fwdcommerce/app/templates/admin/discounts/ruledesc.html" */ ?>
<?php /*%%SmartyHeaderCode:139364320051ee86845452d7-10657960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17e2389a3059a41545843e2300cc592ddcbd4a58' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/discounts/ruledesc.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139364320051ee86845452d7-10657960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rule' => 0,
    'product' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee8684629d12_18431708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee8684629d12_18431708')) {function content_51ee8684629d12_18431708($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['rule']->value['type']=="product"){?>
	
	<?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable(get("/products/".($_smarty_tpl->tpl_vars['rule']->value['product_id'])), null, 0);?>
	<a class="view-link" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['rule']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
	<?php if ($_smarty_tpl->tpl_vars['rule']->value['quantity']||$_smarty_tpl->tpl_vars['rule']->value['add']||$_smarty_tpl->tpl_vars['rule']->value['min_quantity']){?>
		<br />
		<span class="muted">
			<?php if ($_smarty_tpl->tpl_vars['rule']->value['quantity']){?>&bull; limit <?php echo $_smarty_tpl->tpl_vars['rule']->value['quantity'];?>
<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rule']->value['add']){?>&bull; add to cart<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rule']->value['min_quantity']){?>&bull; min qty <?php echo $_smarty_tpl->tpl_vars['rule']->value['min_quantity'];?>
<?php }?>
		</span>
	<?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['rule']->value['type']=="category"){?>
	
	<?php $_smarty_tpl->tpl_vars['category'] = new Smarty_variable(get("/categories/".($_smarty_tpl->tpl_vars['rule']->value['category_id'])), null, 0);?>
	<a class="view-link" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['rule']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
	<br />
	<span class="muted">
		<?php if ($_smarty_tpl->tpl_vars['rule']->value['quantity']){?>&bull; limit <?php echo $_smarty_tpl->tpl_vars['rule']->value['quantity'];?>
<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rule']->value['limit']>0){?>&bull; any <?php echo pluralize(array("word" => ($_smarty_tpl->tpl_vars['rule']->value['limit'])." item")); ?><?php }else{ ?>&bull; any item<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rule']->value['min_quantity']){?>&bull; min qty <?php echo $_smarty_tpl->tpl_vars['rule']->value['min_quantity'];?>
<?php }?>
	</span>
<?php }elseif($_smarty_tpl->tpl_vars['rule']->value['type']=="shipping"){?>
	
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['rule']->value['method'])===null||$tmp==='' ? "Any shipping method" : $tmp);?>

	<?php if ($_smarty_tpl->tpl_vars['rule']->value['min_total']){?>
		<br />
		<span class="muted">
			<?php if ($_smarty_tpl->tpl_vars['rule']->value['min_total']){?>&bull; min total <?php echo money($_smarty_tpl->tpl_vars['rule']->value['min_total']);?>
<?php }?>
		</span>
	<?php }?>
<?php }else{ ?>
	
	<?php if ($_smarty_tpl->tpl_vars['rule']->value['min_total']){?>
		<br />
		<span class="muted">
			<?php if ($_smarty_tpl->tpl_vars['rule']->value['min_total']){?>&bull; min total <?php echo money($_smarty_tpl->tpl_vars['rule']->value['min_total']);?>
<?php }?>
		</span>
	<?php }else{ ?>
		&mdash;
	<?php }?>
<?php }?><?php }} ?>