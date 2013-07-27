<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:58
         compiled from "/var/www/fwdcommerce/app/templates/admin/_default-info.html" */ ?>
<?php /*%%SmartyHeaderCode:2311775351ee7f02e49ce1-37883730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2455b793c5e093d3369f80008f80958f9ad6cdf' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/_default-info.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2311775351ee7f02e49ce1-37883730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'for' => 0,
    'id' => 0,
    'new' => 0,
    'context' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7f02e801e2_98396922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7f02e801e2_98396922')) {function content_51ee7f02e801e2_98396922($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php if (!isset($_smarty_tpl->tpl_vars['context'])) $_smarty_tpl->tpl_vars['context'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['context']->value = $_smarty_tpl->tpl_vars['for']->value){?>

	<?php args(array(0 => 'id'), $_smarty_tpl) ?>

	<?php if ($_smarty_tpl->tpl_vars['new']->value!==false){?>
		<div class="info-header">
			<a class="btn view-link" href="/<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
/new<?php if ($_smarty_tpl->tpl_vars['id']->value){?>/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>"><i class="icon-plus"></i> New <?php echo mb_strtolower(singularize($_smarty_tpl->tpl_vars['context']->value), 'UTF-8');?>
</a>
		</div>
	<?php }else{ ?>
		<div class="info-header">
			<h2>&nbsp;</h2>
		</div>
	<?php }?>
	<div class="info-content">
		<section>
			<!-- @TODO -->
		</section>
	</div>
<?php }?><?php }} ?>