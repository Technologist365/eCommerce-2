<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:34:58
         compiled from "/var/www/fwdcommerce/app/templates/admin/discounts/info.html" */ ?>
<?php /*%%SmartyHeaderCode:120163635451ee8682515996-15273103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf0279a9e9186a2eff275a210beea77055f9c33d' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/discounts/info.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120163635451ee8682515996-15273103',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee868251b933_21791608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee868251b933_21791608')) {function content_51ee868251b933_21791608($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<div class="info-header">
	<a class="btn view-link" href="/discounts/new"><i class="icon-plus"></i> New discount</a>
	<a class="btn view-link" href="/discounts/code-generate"><i class="icon-barcode"></i> Generate codes</a>
</div>

<div class="info-content">
	<section>
		
	</section>
</div><?php }} ?>