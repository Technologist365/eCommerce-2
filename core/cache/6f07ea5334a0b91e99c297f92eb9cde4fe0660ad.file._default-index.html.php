<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:33
         compiled from "/var/www/fwdcommerce/app/templates/admin/_default-index.html" */ ?>
<?php /*%%SmartyHeaderCode:170615759851ee7ee9761c00-66953687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f07ea5334a0b91e99c297f92eb9cde4fe0660ad' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/_default-index.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170615759851ee7ee9761c00-66953687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'for' => 0,
    'id' => 0,
    'context' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ee97ade06_78302798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ee97ade06_78302798')) {function content_51ee7ee97ade06_78302798($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php if (!isset($_smarty_tpl->tpl_vars['context'])) $_smarty_tpl->tpl_vars['context'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['context']->value = $_smarty_tpl->tpl_vars['for']->value){?>

	<?php args(array(0 => 'id'), $_smarty_tpl) ?>

	<div class="row">
		<div class="span12" id="content">
			<div class="outline"></div>
			<div class="row">
				<div class="span7" id="list" data-url="/<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
/list<?php if ($_smarty_tpl->tpl_vars['id']->value){?>/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>">
					<?php render(array("view" => ($_smarty_tpl->tpl_vars['context']->value)."/list")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
				</div>
				<div class="span5" id="info" data-url="/<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
/info<?php if ($_smarty_tpl->tpl_vars['id']->value){?>/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>">
					<div id="view"></div>
					<div class="info-container">
						<?php render(array("view" => ($_smarty_tpl->tpl_vars['context']->value)."/info")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?><?php }} ?>