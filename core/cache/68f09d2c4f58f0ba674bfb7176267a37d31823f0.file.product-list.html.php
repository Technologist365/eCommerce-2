<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:32
         compiled from "/var/www/fwdcommerce/app/templates/alpha/product-list.html" */ ?>
<?php /*%%SmartyHeaderCode:186063651551ee7ee8a51be2-96998015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68f09d2c4f58f0ba674bfb7176267a37d31823f0' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/product-list.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186063651551ee7ee8a51be2-96998015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'with' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ee8a8bc50_13878015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ee8a8bc50_13878015')) {function content_51ee7ee8a8bc50_13878015($_smarty_tpl) {?>
<div class="product-list">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['with']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
?>
			<div class="product-list-item span3">
				<span class="product-list-image">
					<a href="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['slug'];?>
">
						<img src="<?php echo image(array('for'=>$_smarty_tpl->tpl_vars['product']->value,'width'=>200,'height'=>200,'padded'=>true),$_smarty_tpl);?>
" />
					</a>
				</span>
				<a class="product-list-details" href="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['slug'];?>
">
					<span class="product-list-name">
						<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

					</span>
					<span class="product-list-price">
						<?php echo money($_smarty_tpl->tpl_vars['product']->value['price']);?>

					</span>
				</a>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['product']->iteration%4==0){?>
				</div><div class="row">
			<?php }?>
		<?php } ?>
	</div>
</div><?php }} ?>