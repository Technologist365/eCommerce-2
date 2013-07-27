<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 16:21:10
         compiled from "/var/www/fwdcommerce/app/templates/alpha/pages.html" */ ?>
<?php /*%%SmartyHeaderCode:159486907451eead7664c4c1-95926124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9687c7e18ea21330a53bd52fb96efceef563835' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/pages.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159486907451eead7664c4c1-95926124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entry_slug' => 0,
    'preview' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51eead76744107_84559765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51eead76744107_84559765')) {function content_51eead76744107_84559765($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.truncate.php';
?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php args(array(0 => 'entry_slug', 1 => 'preview'), $_smarty_tpl) ?>


<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['entry_slug']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable(get("/entries/".$_tmp1,array('channel'=>"pages",'status'=>"published")), null, 0);?>


<?php if (!$_smarty_tpl->tpl_vars['page']->value){?>
	<?php render(array("view" => "404")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['preview']->value=="preview"){?>
	<?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value['preview'], null, 0);?>
<?php }?>


<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['page_title'] = (($tmp = @$_smarty_tpl->tpl_vars['page']->value['page_title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['page']->value['title'] : $tmp);?>
<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['page_description'] = smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', markdown((($tmp = @$_smarty_tpl->tpl_vars['page']->value['page_description'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['page']->value['content'] : $tmp)))),200);?>
<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['page_keywords'] = $_smarty_tpl->tpl_vars['page']->value['page_keywords'];?>

<div class="content-page">
	<div class="row">
		<div class="span8">
			<h1 class="content-page-header">
				<?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>

				<?php if ($_smarty_tpl->tpl_vars['preview']->value){?><small>Preview</small><?php }?>
			</h1>
			<article class="content-page-content">
				
				<?php echo markdown($_smarty_tpl->tpl_vars['page']->value['content']);?>

			</article>
		</div>
		<div class="content-page-sidebar span3 offset1">
			<h4>More</h4>
			<ul class="content-page-menu">
				<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = get("/channels/pages/entries"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
					<li><a href="/pages/<?php echo $_smarty_tpl->tpl_vars['page']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div><?php }} ?>