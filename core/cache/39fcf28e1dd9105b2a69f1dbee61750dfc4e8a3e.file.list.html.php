<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:26:57
         compiled from "/var/www/fwdcommerce/app/templates/admin/categories/list.html" */ ?>
<?php /*%%SmartyHeaderCode:69721407051ee84a17db052-56918777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39fcf28e1dd9105b2a69f1dbee61750dfc4e8a3e' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/categories/list.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69721407051ee84a17db052-56918777',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee84a17eefb0_79898540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee84a17eefb0_79898540')) {function content_51ee84a17eefb0_79898540($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<div class="list-container">
	<div class="list-header well">
		<?php render(array("view" => "search", "for" => "categories")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</div>
	<ul class="list-results">
		<?php render(array("view" => "categories/results")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</ul>
</div>
<?php }} ?>