<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:26:55
         compiled from "/var/www/fwdcommerce/app/templates/admin/trash/list.html" */ ?>
<?php /*%%SmartyHeaderCode:69023548351ee849f129736-72517640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6876958b9f90421ef2e44f33099be9f78b34a580' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/trash/list.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69023548351ee849f129736-72517640',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee849f13d078_14696895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee849f13d078_14696895')) {function content_51ee849f13d078_14696895($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<div class="list-container">
	<div class="list-header well">
		<?php render(array("view" => "search", "for" => "trash")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</div>
	<ul class="list-results">
		<?php render(array("view" => "trash/results")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</ul>
</div>
<?php }} ?>