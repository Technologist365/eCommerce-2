<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:08:14
         compiled from "/var/www/fwdcommerce/app/templates/admin/index/upload.html" */ ?>
<?php /*%%SmartyHeaderCode:12649047451ee803e48d653-22535344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02620e80aa7d98ed442a66560222875e339a5a6a' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/index/upload.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12649047451ee803e48d653-22535344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'context' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee803e4fa014_40671017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee803e4fa014_40671017')) {function content_51ee803e4fa014_40671017($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php args(array(0 => 'context', 1 => 'id'), $_smarty_tpl) ?>

<?php render(array("view" => "default-entry", "related" => "upload", "for" => $_smarty_tpl->tpl_vars['context']->value, "id" => $_smarty_tpl->tpl_vars['id']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['layout'] = null;?><?php }} ?>