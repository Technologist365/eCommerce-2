<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:19:40
         compiled from "/var/www/fwdcommerce/app/templates/admin/entries/info.html" */ ?>
<?php /*%%SmartyHeaderCode:36155062651ee82ec17b4a2-66627466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eff1ff9ea3ddfdab7c82a10eb21418332880d8c9' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/entries/info.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36155062651ee82ec17b4a2-66627466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'channel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee82ec19b4c3_58986474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee82ec19b4c3_58986474')) {function content_51ee82ec19b4c3_58986474($_smarty_tpl) {?><?php args(array(0 => 'id'), $_smarty_tpl) ?>

<?php $_smarty_tpl->tpl_vars['channel']->value = get("/channels/".($_smarty_tpl->tpl_vars['id']->value), array()); ?>

<div class="info-header">
	<a class="btn view-link" href="/entries/new/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="icon-plus"></i> New entry</a>
	<a class="btn view-link" href="/channels/entry/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="icon-pencil"></i> Edit <?php echo mb_strtolower($_smarty_tpl->tpl_vars['channel']->value['name'], 'UTF-8');?>
</a>
</div>
<div class="info-content">
	<section>
		
	</section>
</div><?php }} ?>