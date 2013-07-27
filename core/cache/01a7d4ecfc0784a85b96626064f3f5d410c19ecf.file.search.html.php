<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 12:15:08
         compiled from "/var/www/fwdcommerce/app/templates/alpha/search.html" */ ?>
<?php /*%%SmartyHeaderCode:35670621451f116cca6d9a4-03441454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01a7d4ecfc0784a85b96626064f3f5d410c19ecf' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/search.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35670621451f116cca6d9a4-03441454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f116ccb1c7c9_49325746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f116ccb1c7c9_49325746')) {function content_51f116ccb1c7c9_49325746($_smarty_tpl) {?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(get("/products",array('search'=>$_smarty_tpl->tpl_vars['params']->value['q'],'is_active'=>true,'limit'=>null)), null, 0);?>

<div class="category-list">

	<div class="category-list-header">
		<h1>Search for "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['q'], ENT_QUOTES, 'UTF-8', true);?>
" found <?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo pluralize(array("word" => $_tmp1." items")); ?></h1>
	</div>
	
	
	<?php render(array("view" => "product-list", "with" => $_smarty_tpl->tpl_vars['products']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
</div>

<script type="text/javascript">

	// Auto-focus on search query.
	$('.header-nav-search input.query').focus();
	
</script><?php }} ?>