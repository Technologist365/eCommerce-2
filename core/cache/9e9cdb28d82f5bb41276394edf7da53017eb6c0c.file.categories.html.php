<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:32
         compiled from "/var/www/fwdcommerce/app/templates/alpha/categories.html" */ ?>
<?php /*%%SmartyHeaderCode:156647765351ee7ee8892057-78097135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e9cdb28d82f5bb41276394edf7da53017eb6c0c' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/categories.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156647765351ee7ee8892057-78097135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_slug' => 0,
    'category' => 0,
    'categories' => 0,
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ee898a0f7_38362475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ee898a0f7_38362475')) {function content_51ee7ee898a0f7_38362475($_smarty_tpl) {?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php args(array(0 => 'category_slug'), $_smarty_tpl) ?>


<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['category_slug']->value);?>
<?php $_tmp1=ob_get_clean();?><?php if (!isset($_smarty_tpl->tpl_vars['category'])) $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['category']->value = get("/categories/".$_tmp1)){?>

	
	<?php if ($_smarty_tpl->tpl_vars['category']->value['children']){?>
		<?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['children'], null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['category']->value), null, 0);?>
	<?php }?>
	
	
	<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
		<?php $_smarty_tpl->createLocalArrayVariable('category', null, 0);
$_smarty_tpl->tpl_vars['category']->value['active_products'] = get("/products",array('category_ids'=>$_smarty_tpl->tpl_vars['category']->value['id'],'is_active'=>true,'limit'=>100));?>
	<?php } ?>
<?php }else{ ?>

	
	<?php render(array("view" => "404")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php }?>

<div class="category-list">

	<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
		<?php if (!$_smarty_tpl->tpl_vars['category']->value['active_products']){?>
			<?php continue 1?>
		<?php }?>
		<div class="category-list-header">
			<div class="category-list-crumbs">
				<?php $_smarty_tpl->tpl_vars['parent'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['parent'], null, 0);?>
				<?php while ($_smarty_tpl->tpl_vars['parent']->value){?>
					<a class="crumb" href="/categories/<?php echo $_smarty_tpl->tpl_vars['parent']->value['slug'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['parent']->value['name'];?>
</a> /
					<?php $_smarty_tpl->tpl_vars['parent'] = new Smarty_variable($_smarty_tpl->tpl_vars['parent']->value['parent'], null, 0);?>
				<?php }?>
				<a class="crumb" href="/categories/<?php echo $_smarty_tpl->tpl_vars['category']->value['slug'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
			</div>
		</div>
		
		
		<?php render(array("view" => "product-list", "with" => $_smarty_tpl->tpl_vars['category']->value['active_products'])) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	<?php } ?>
</div>
<?php }} ?>