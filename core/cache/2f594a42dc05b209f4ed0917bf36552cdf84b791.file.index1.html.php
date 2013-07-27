<?php /* Smarty version Smarty-3.1.8, created on 2013-07-26 11:04:00
         compiled from "/var/www/fwdcommerce/app/templates/alpha/index1.html" */ ?>
<?php /*%%SmartyHeaderCode:113173264151f2248d0e8251-66480407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f594a42dc05b209f4ed0917bf36552cdf84b791' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/index1.html',
      1 => 1374836634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113173264151f2248d0e8251-66480407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f2248d152a50_06445051',
  'variables' => 
  array (
    'featured_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f2248d152a50_06445051')) {function content_51f2248d152a50_06445051($_smarty_tpl) {?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php $_smarty_tpl->tpl_vars['featured_products'] = new Smarty_variable(get("/products",array('is_active'=>true,'search'=>7788,'limit'=>null)), null, 0);?>

<div class="content-banner">
	<!-- Creatuve banner content goes here -->
</div>

<div class="category-list">
	
	
	<?php render(array("view" => "product-list", "with" => $_smarty_tpl->tpl_vars['featured_products']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
</div>
<?php }} ?>