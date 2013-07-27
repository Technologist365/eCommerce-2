<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:03:26
         compiled from "/var/www/fwdcommerce/app/templates/admin/products/results.html" */ ?>
<?php /*%%SmartyHeaderCode:100807164051ee7f1e7dfe99-34650992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '481c9c03a3efec684fd7f2ea11cca7c309428b73' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/products/results.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100807164051ee7f1e7dfe99-34650992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'products' => 0,
    'query' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7f1e8b3946_17665945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7f1e8b3946_17665945')) {function content_51ee7f1e8b3946_17665945($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(array('search'=>$_smarty_tpl->tpl_vars['params']->value['search'],'where'=>$_smarty_tpl->tpl_vars['params']->value['where'],'page'=>$_smarty_tpl->tpl_vars['params']->value['page']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['products']->value = get("/products", $_smarty_tpl->tpl_vars['query']->value); ?>

<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<li>
		<span class="image">
			<img src="<?php echo image(array('for'=>$_smarty_tpl->tpl_vars['product']->value,'width'=>50,'height'=>50,'default'=>'/images/blank.png'),$_smarty_tpl);?>
" />
			<span class="shadow"></span>
		</span>
		<div class="headline">
			<a class="list-item" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" id="item_products_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"> 
				<span class="name">
					<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

					<?php if ($_smarty_tpl->tpl_vars['product']->value['is_bundle']){?>
						<small>/ <?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['product']->value['items']);?>
<?php $_tmp1=ob_get_clean();?><?php echo pluralize(array("word" => $_tmp1." items")); ?></small>
					<?php }elseif($_smarty_tpl->tpl_vars['product']->value['sku']){?>
						<small>/ <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['product']->value['sku'], 'UTF-8');?>
</small>
					<?php }?>
				</span>
			</a>
		</div>
		<small>
			<?php echo money($_smarty_tpl->tpl_vars['product']->value['price']);?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value['cost']){?>
				&nbsp;/&nbsp; <?php echo money($_smarty_tpl->tpl_vars['product']->value['cost']);?>

			<?php }?>
			<span class="date">
				<?php echo age_date($_smarty_tpl->tpl_vars['product']->value['date_created']);?>

			</span>
			<span class="label label-<?php if ($_smarty_tpl->tpl_vars['product']->value['is_active']===true){?>success<?php }elseif($_smarty_tpl->tpl_vars['product']->value['is_active']!==false){?>warning<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['product']->value['is_active']===true){?>
					Active
				<?php }elseif(!$_smarty_tpl->tpl_vars['product']->value['is_active']){?>
					Not Active
				<?php }else{ ?>
					<?php echo $_smarty_tpl->tpl_vars['product']->value['is_active'];?>

				<?php }?>
			</span>
		</small>
	</li>
<?php }
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
	<li class="empty">No products found</li>
<?php } ?>

<?php render(array("view" => "loadmore", "with" => $_smarty_tpl->tpl_vars['products']->value, "query" => $_smarty_tpl->tpl_vars['query']->value, "url" => "/products")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?><?php }} ?>