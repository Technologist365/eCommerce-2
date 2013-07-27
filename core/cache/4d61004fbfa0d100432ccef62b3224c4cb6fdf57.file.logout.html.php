<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:17:17
         compiled from "/var/www/fwdcommerce/app/templates/admin/index/logout.html" */ ?>
<?php /*%%SmartyHeaderCode:29085935451ee825dde03f5-50898220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d61004fbfa0d100432ccef62b3224c4cb6fdf57' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/index/logout.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29085935451ee825dde03f5-50898220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee825de56971_40266753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee825de56971_40266753')) {function content_51ee825de56971_40266753($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php $_smarty_tpl->createLocalArrayVariable('session', null, 0);
$_smarty_tpl->tpl_vars['session']->value['account_id'] = null;?>

<?php echo flash(array('notice'=>"You have been logged out",'redirect'=>"/login"),$_smarty_tpl);?>
<?php }} ?>