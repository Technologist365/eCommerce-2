<?php /* Smarty version Smarty-3.1.8, created on 2013-07-26 13:00:07
         compiled from "/var/www/fwdcommerce/app/templates/alpha/index.html" */ ?>
<?php /*%%SmartyHeaderCode:26126414251ee7f0ceee3d7-29388566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3214f1f6f2ea30eda23270fa0d9d2599a23204dd' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/index.html',
      1 => 1374843605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26126414251ee7f0ceee3d7-29388566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7f0d013633_72431120',
  'variables' => 
  array (
    'featured_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7f0d013633_72431120')) {function content_51ee7f0d013633_72431120($_smarty_tpl) {?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php $_smarty_tpl->tpl_vars['featured_products'] = new Smarty_variable(get("/products",array('is_active'=>true,'limit'=>8)), null, 0);?>

<div class="content-banner">
	<!-- Creatuve banner content goes here -->
</div>
<div style="margin:auto">
				<iframe style="width:100%;height:1100px;border:0px"  src="http://solitaires.jewelskart.com/widget.php"></iframe>

</div>
<div class="category-list">
	
	
	<?php render(array("view" => "product-list", "with" => $_smarty_tpl->tpl_vars['featured_products']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


</div>

<?php }} ?>