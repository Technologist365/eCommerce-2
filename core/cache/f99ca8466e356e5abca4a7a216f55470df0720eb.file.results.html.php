<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:26:55
         compiled from "/var/www/fwdcommerce/app/templates/admin/trash/results.html" */ ?>
<?php /*%%SmartyHeaderCode:171470565351ee849f154a34-65493593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99ca8466e356e5abca4a7a216f55470df0720eb' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/trash/results.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171470565351ee849f154a34-65493593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'trash' => 0,
    'query' => 0,
    'doc' => 0,
    'doc_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee849f1f3564_71181615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee849f1f3564_71181615')) {function content_51ee849f1f3564_71181615($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(array('search'=>$_smarty_tpl->tpl_vars['params']->value['search'],'where'=>$_smarty_tpl->tpl_vars['params']->value['where'],'page'=>$_smarty_tpl->tpl_vars['params']->value['page']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['trash']->value = get("/trash", $_smarty_tpl->tpl_vars['query']->value); ?>

<?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['doc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trash']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value){
$_smarty_tpl->tpl_vars['doc']->_loop = true;
?>
	<li>
		<div class="headline">
			<a class="list-item" href="/trash/entry<?php echo $_smarty_tpl->tpl_vars['doc']->value['deleted_uri'];?>
" id="item_trash_<?php echo $_smarty_tpl->tpl_vars['trash']->value['id'];?>
"> 
				<span class="name">
					<?php echo $_smarty_tpl->tpl_vars['doc']->value['deleted_uri'];?>

					<?php if (!isset($_smarty_tpl->tpl_vars['doc_name'])) $_smarty_tpl->tpl_vars['doc_name'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['doc_name']->value = htmlspecialchars(((($tmp = @(($tmp = @(($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['doc']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['doc']->value['title'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['doc']->value['subject'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['doc']->value['email'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['doc']->value['code'] : $tmp)), ENT_QUOTES, 'UTF-8', true)){?>
						<small>&mdash; <?php echo $_smarty_tpl->tpl_vars['doc_name']->value;?>
</small>
					<?php }?>
				</span>
			</a>
		</div>
		<small>
			Document has <?php echo count($_smarty_tpl->tpl_vars['doc']->value);?>
 fields
			<span class="date"><?php echo age_date($_smarty_tpl->tpl_vars['doc']->value['date_deleted']);?>
</span>
		</small>
	</li>
<?php }
if (!$_smarty_tpl->tpl_vars['doc']->_loop) {
?>
	<li class="empty">None found</li>
<?php } ?>

<?php render(array("view" => "loadmore", "with" => $_smarty_tpl->tpl_vars['trash']->value, "query" => $_smarty_tpl->tpl_vars['query']->value, "url" => "/trash")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?><?php }} ?>