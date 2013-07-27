<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:23:10
         compiled from "/var/www/fwdcommerce/app/templates/admin/channels/results.html" */ ?>
<?php /*%%SmartyHeaderCode:35464506951ee83be0e5688-59653561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fe27c833b79c221f3c486db72f63d76fb04e0c2' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/channels/results.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35464506951ee83be0e5688-59653561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'channels' => 0,
    'query' => 0,
    'channel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee83be177961_74746265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee83be177961_74746265')) {function content_51ee83be177961_74746265($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(array('search'=>$_smarty_tpl->tpl_vars['params']->value['search'],'where'=>$_smarty_tpl->tpl_vars['params']->value['where'],'page'=>$_smarty_tpl->tpl_vars['params']->value['page']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['channels']->value = get("/channels", $_smarty_tpl->tpl_vars['query']->value); ?>

<?php  $_smarty_tpl->tpl_vars['channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channel']->key => $_smarty_tpl->tpl_vars['channel']->value){
$_smarty_tpl->tpl_vars['channel']->_loop = true;
?>
	<li>
		<div class="headline">
			<a class="list-item" href="/channels/entry/<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
" id="item_channels_<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
"> 
				<span class="name"><?php echo $_smarty_tpl->tpl_vars['channel']->value['name'];?>
</span>
			</a>
		</div>
		<small>
			<?php echo pluralize(array("word" => ($_smarty_tpl->tpl_vars['channel']->value['entry_count'])." entries")); ?>
			<b class="bull">&bull;</b> <?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['channel']->value['fields']);?>
<?php $_tmp1=ob_get_clean();?><?php echo pluralize(array("word" => $_tmp1." fields")); ?>
			<span class="date">
				<?php echo age_date($_smarty_tpl->tpl_vars['channel']->value['date_created']);?>

			</span>
			<span class="hidden">
				<b class="bull">&bull;</b> <a href="/entries/new/<?php echo $_smarty_tpl->tpl_vars['channel']->value['slug'];?>
" class="view-link">New entry</a>
				<b class="bull">&bull;</b> <a href="/entries/<?php echo $_smarty_tpl->tpl_vars['channel']->value['slug'];?>
">View all &rarr;</a>
			</span>
			<?php if ($_smarty_tpl->tpl_vars['channel']->value['label']){?>
				<span class="label">
					<?php echo $_smarty_tpl->tpl_vars['channel']->value['label'];?>

				</span>
			<?php }?>	
		</small>
	</li>
<?php }
if (!$_smarty_tpl->tpl_vars['channel']->_loop) {
?>
	<li class="empty">No channels found</li>
<?php } ?>

<?php render(array("view" => "loadmore", "with" => $_smarty_tpl->tpl_vars['channels']->value, "query" => $_smarty_tpl->tpl_vars['query']->value, "url" => "/channels")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?><?php }} ?>