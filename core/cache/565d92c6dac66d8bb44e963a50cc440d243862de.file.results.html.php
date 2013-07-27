<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:23:29
         compiled from "/var/www/fwdcommerce/app/templates/admin/carts/results.html" */ ?>
<?php /*%%SmartyHeaderCode:150168412351ee83d12031a1-78186922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '565d92c6dac66d8bb44e963a50cc440d243862de' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/carts/results.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150168412351ee83d12031a1-78186922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'carts' => 0,
    'query' => 0,
    'cart' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee83d12d09f3_36352541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee83d12d09f3_36352541')) {function content_51ee83d12d09f3_36352541($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(array('search'=>$_smarty_tpl->tpl_vars['params']->value['search'],'where'=>$_smarty_tpl->tpl_vars['params']->value['where'],'page'=>$_smarty_tpl->tpl_vars['params']->value['page']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['carts']->value = get("/carts", $_smarty_tpl->tpl_vars['query']->value); ?>

<?php  $_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->key => $_smarty_tpl->tpl_vars['cart']->value){
$_smarty_tpl->tpl_vars['cart']->_loop = true;
?>
	<li>
		<span class="image count<?php if (count($_smarty_tpl->tpl_vars['cart']->value['items'])<=4){?><?php echo count($_smarty_tpl->tpl_vars['cart']->value['items']);?>
<?php }else{ ?>4<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<img src="<?php echo image(array('for'=>$_smarty_tpl->tpl_vars['item']->value,'type'=>"products",'width'=>50,'height'=>50),$_smarty_tpl);?>
" />
			<?php } ?>
			<span class="shadow"></span>
		</span>
		<div class="headline">
			<a class="list-item" href="/carts/entry/<?php echo $_smarty_tpl->tpl_vars['cart']->value['id'];?>
" id="item_carts_<?php echo $_smarty_tpl->tpl_vars['cart']->value['id'];?>
"> 
				<span class="name">Cart #<?php echo $_smarty_tpl->tpl_vars['cart']->value['id'];?>
 <small>/ <?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['cart']->value['items']);?>
<?php $_tmp1=ob_get_clean();?><?php echo pluralize(array("word" => $_tmp1." item")); ?></small></span>
			</a>
		</div>
		<small>
			<span class=""><?php echo money($_smarty_tpl->tpl_vars['cart']->value['sub_total']);?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['cart']->value['order']){?>
				<b class="bull">&bull;</b> <span><?php echo $_smarty_tpl->tpl_vars['cart']->value['order']['name'];?>
</span>
			<?php }?>
			<span class="date">
				<?php echo age_date($_smarty_tpl->tpl_vars['cart']->value['date_updated']);?>

			</span>
			<span class="labels">
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']){?>
					<span class="label label-success">Order #<?php echo $_smarty_tpl->tpl_vars['cart']->value['order_id'];?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['cart']->value['abandoned']){?>
					<span class="label label-important">Abandoned</span>
				<?php }else{ ?>
					<span class="label">Shopping</span>
				<?php }?>
			</span>
		</small>
	</li>
<?php }
if (!$_smarty_tpl->tpl_vars['cart']->_loop) {
?>
	<li class="empty">No carts found</li>
<?php } ?>

<?php render(array("view" => "loadmore", "with" => $_smarty_tpl->tpl_vars['carts']->value, "query" => $_smarty_tpl->tpl_vars['query']->value, "url" => "/carts")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?><?php }} ?>