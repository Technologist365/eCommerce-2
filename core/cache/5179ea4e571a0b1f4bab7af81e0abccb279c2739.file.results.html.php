<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:34:58
         compiled from "/var/www/fwdcommerce/app/templates/admin/discounts/results.html" */ ?>
<?php /*%%SmartyHeaderCode:178074125651ee8682433e59-17935890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5179ea4e571a0b1f4bab7af81e0abccb279c2739' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/discounts/results.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178074125651ee8682433e59-17935890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'discounts' => 0,
    'query' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee86824cce24_74917336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee86824cce24_74917336')) {function content_51ee86824cce24_74917336($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.truncate.php';
?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(array('search'=>$_smarty_tpl->tpl_vars['params']->value['search'],'where'=>$_smarty_tpl->tpl_vars['params']->value['where'],'page'=>$_smarty_tpl->tpl_vars['params']->value['page']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['discounts']->value = get("/discounts", $_smarty_tpl->tpl_vars['query']->value); ?>

<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value){
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
	<li>
		<div class="headline">
			<a class="list-item" href="/discounts/entry/<?php echo $_smarty_tpl->tpl_vars['discount']->value['id'];?>
" id="item_discounts_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id'];?>
"> 
				<span class="name"><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</span>
			</a>
		</div>
		<small>
			<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['discount']->value['description'],60);?>

			<?php if (count($_smarty_tpl->tpl_vars['discount']->value['codes'])>0){?>
				<b class="bull">&bull;</b> <?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['discount']->value['codes']);?>
<?php $_tmp1=ob_get_clean();?><?php echo pluralize(array("word" => $_tmp1." codes")); ?> (<?php echo count($_smarty_tpl->tpl_vars['discount']->value['codes_used']);?>
 uses)
			<?php }?>
			<span class="date"><?php echo age_date($_smarty_tpl->tpl_vars['discount']->value['date_created']);?>
</span>
			<span class="labels">
				<?php if ($_smarty_tpl->tpl_vars['discount']->value['is_valid']){?>
					<span class="label label-success">Valid</span>
				<?php }else{ ?>
					<span class="label">Not valid</span>
				<?php }?>
			</span>
		</small>
	</li>
<?php }
if (!$_smarty_tpl->tpl_vars['discount']->_loop) {
?>
	<li class="empty">No discounts found</li>
<?php } ?>

<?php render(array("view" => "loadmore", "with" => $_smarty_tpl->tpl_vars['discounts']->value, "query" => $_smarty_tpl->tpl_vars['query']->value, "url" => "/discounts", "autoload" => true)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?><?php }} ?>