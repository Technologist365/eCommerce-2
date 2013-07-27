<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:58
         compiled from "/var/www/fwdcommerce/app/templates/admin/accounts/results.html" */ ?>
<?php /*%%SmartyHeaderCode:35028999051ee7f02d2a202-55681289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78134e593b140793529977da1e5e9a74f986b915' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/accounts/results.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35028999051ee7f02d2a202-55681289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'accounts' => 0,
    'query' => 0,
    'account' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7f02da42c5_55356681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7f02da42c5_55356681')) {function content_51ee7f02da42c5_55356681($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(array('search'=>$_smarty_tpl->tpl_vars['params']->value['search'],'where'=>$_smarty_tpl->tpl_vars['params']->value['where'],'page'=>$_smarty_tpl->tpl_vars['params']->value['page']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['accounts']->value = get("/accounts", $_smarty_tpl->tpl_vars['query']->value); ?>

<?php  $_smarty_tpl->tpl_vars['account'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['account']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['account']->key => $_smarty_tpl->tpl_vars['account']->value){
$_smarty_tpl->tpl_vars['account']->_loop = true;
?>
	<li>
		<div class="headline">
			<a class="list-item" href="/accounts/entry/<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
" id="item_accounts_<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
"> 
				<span class="name"><?php echo $_smarty_tpl->tpl_vars['account']->value['name'];?>
</span>
			</a>
		</div>
		<small>
			<?php echo $_smarty_tpl->tpl_vars['account']->value['email'];?>

			<?php if ($_smarty_tpl->tpl_vars['account']->value['ip_address']){?>
				<b class="bull">&bull;</b> <span class="ip"><?php echo $_smarty_tpl->tpl_vars['account']->value['ip_address'];?>
</span>
			<?php }?>
			<span class="hidden">
			</span>
			<span class="date">
				<?php echo age_date($_smarty_tpl->tpl_vars['account']->value['date_created']);?>

			</span>
			<span class="labels">						
				<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['account']->value['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
					<span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</span>
				<?php } ?>
			</span>
		</small>
	</li>
<?php }
if (!$_smarty_tpl->tpl_vars['account']->_loop) {
?>
	<li class="empty">No accounts found</li>
<?php } ?>

<?php render(array("view" => "loadmore", "with" => $_smarty_tpl->tpl_vars['accounts']->value, "query" => $_smarty_tpl->tpl_vars['query']->value, "url" => "/accounts")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?><?php }} ?>