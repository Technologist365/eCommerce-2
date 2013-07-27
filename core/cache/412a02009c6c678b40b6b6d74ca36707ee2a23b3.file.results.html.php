<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:26:57
         compiled from "/var/www/fwdcommerce/app/templates/admin/categories/results.html" */ ?>
<?php /*%%SmartyHeaderCode:22960011251ee84a18060c2-67492163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '412a02009c6c678b40b6b6d74ca36707ee2a23b3' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/categories/results.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22960011251ee84a18060c2-67492163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'categories' => 0,
    'query' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee84a189f841_01437003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee84a189f841_01437003')) {function content_51ee84a189f841_01437003($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(array('search'=>$_smarty_tpl->tpl_vars['params']->value['search'],'where'=>$_smarty_tpl->tpl_vars['params']->value['where'],'page'=>$_smarty_tpl->tpl_vars['params']->value['page']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['categories']->value = get("/categories", $_smarty_tpl->tpl_vars['query']->value); ?>

<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
	<li>
		<div class="headline">
			<a class="list-item" href="/categories/entry/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" id="item_categories_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"> 
				<span class="name"><?php if ($_smarty_tpl->tpl_vars['category']->value['parent']){?><?php echo $_smarty_tpl->tpl_vars['category']->value['parent']['name'];?>
 / <?php }?><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</span>
			</a>
		</div>
		<small>
			<?php if (!$_smarty_tpl->tpl_vars['category']->value['parent_id']){?>
				<?php echo pluralize(array("word" => ($_smarty_tpl->tpl_vars['category']->value['child_count'])." categories")); ?>
			<?php }else{ ?>
				<?php echo pluralize(array("word" => ($_smarty_tpl->tpl_vars['category']->value['product_count'])." products")); ?>
			<?php }?>
			<b class="bull">&bull;</b> <?php echo $_smarty_tpl->tpl_vars['category']->value['slug'];?>

			<span class="date"><?php echo age_date($_smarty_tpl->tpl_vars['category']->value['date_created']);?>
</span>
		</small>
	</li>
<?php }
if (!$_smarty_tpl->tpl_vars['category']->_loop) {
?>
	<li class="empty">No categories found</li>
<?php } ?>

<?php render(array("view" => "loadmore", "with" => $_smarty_tpl->tpl_vars['categories']->value, "query" => $_smarty_tpl->tpl_vars['query']->value, "url" => "/categories")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?><?php }} ?>