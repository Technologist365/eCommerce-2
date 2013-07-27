<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:18:51
         compiled from "/var/www/fwdcommerce/app/templates/admin/orders/results.html" */ ?>
<?php /*%%SmartyHeaderCode:192064046551ee82bb8fbce7-31407283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a24174da8ce40874523fc55b39212fd5f25ae2a' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/orders/results.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192064046551ee82bb8fbce7-31407283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'orders' => 0,
    'query' => 0,
    'order' => 0,
    'item' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee82bba43f36_49666724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee82bba43f36_49666724')) {function content_51ee82bba43f36_49666724($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(array('search'=>$_smarty_tpl->tpl_vars['params']->value['search'],'where'=>$_smarty_tpl->tpl_vars['params']->value['where'],'page'=>$_smarty_tpl->tpl_vars['params']->value['page']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['orders']->value = get("/orders", $_smarty_tpl->tpl_vars['query']->value); ?>

<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
	<li>
		<span class="image count<?php if (count($_smarty_tpl->tpl_vars['order']->value['items'])<=4){?><?php echo count($_smarty_tpl->tpl_vars['order']->value['items']);?>
<?php }else{ ?>4<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
				<?php if ($_smarty_tpl->tpl_vars['item']->iteration>4){?>
					<?php break 1?>
				<?php }?>
				<img src="<?php echo image(array('for'=>$_smarty_tpl->tpl_vars['item']->value,'type'=>'products','width'=>50,'height'=>50),$_smarty_tpl);?>
" />
			<?php } ?>
			<span class="shadow"></span>
		</span>
		<div class="headline">
			<a class="list-item" href="/orders/entry/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" id="item_orders_<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
"> 
				<span class="name">Order #<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
 <small>/ <?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
</small></span>
			</a>
		</div>
		<small>
			<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['order']->value['items']);?>
<?php $_tmp1=ob_get_clean();?><?php echo pluralize(array("word" => $_tmp1." items")); ?>
			<b class="bull">&bull;</b> <?php echo money($_smarty_tpl->tpl_vars['order']->value['grand_total']);?>

			<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']['method']){?>
				<b class="bull">&bull;</b> <span><?php echo $_smarty_tpl->tpl_vars['order']->value['shipping']['method'];?>
</span>
			<?php }?>
			<span class="date">
				<?php echo age_date($_smarty_tpl->tpl_vars['order']->value['date_created']);?>

			</span>
			<span class="labels">
				<?php if ($_smarty_tpl->tpl_vars['order']->value['notes']){?>
					<span class="label <?php if ($_smarty_tpl->tpl_vars['order']->value['public_notes']){?>label-important<?php }?>">Notes</span>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value['error']){?>
					<span class="label label-important">Payment Error</span>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value['overdue']){?>
					<span class="label label-important">Payment Overdue</span>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value['date_scheduled']){?>
					<span class="label <?php if ($_smarty_tpl->tpl_vars['order']->value['status']=='pending'){?>label-info<?php }?>">
						<?php if ($_smarty_tpl->tpl_vars['order']->value['schedule']['every']){?>Recurring<?php }else{ ?>Scheduled<?php }?>
					</span>
				<?php }?>
				<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value['status']=="ready"){?>
					<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("info", null, 0);?>
				<?php }elseif($_smarty_tpl->tpl_vars['order']->value['status']=="shipped"){?>
					<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("success", null, 0);?>
				<?php }elseif($_smarty_tpl->tpl_vars['order']->value['status']=="cancelled"){?>
					<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("important", null, 0);?>
				<?php }elseif($_smarty_tpl->tpl_vars['order']->value['status']=="returned"){?>
					<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("warning", null, 0);?>
				<?php }?>
				<span class="label label-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span>
			</span>
		</small>
	</li>
<?php }
if (!$_smarty_tpl->tpl_vars['order']->_loop) {
?>
	<li class="empty">No orders found</li>
<?php } ?>

<?php render(array("view" => "loadmore", "with" => $_smarty_tpl->tpl_vars['orders']->value, "query" => $_smarty_tpl->tpl_vars['query']->value, "url" => "/orders")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?><?php }} ?>