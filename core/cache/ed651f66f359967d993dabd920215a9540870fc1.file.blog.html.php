<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:53:44
         compiled from "/var/www/fwdcommerce/app/templates/alpha/blog.html" */ ?>
<?php /*%%SmartyHeaderCode:182270240951ee8ae8979a19-11558923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed651f66f359967d993dabd920215a9540870fc1' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/blog.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182270240951ee8ae8979a19-11558923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entry_slug' => 0,
    'preview' => 0,
    'blog' => 0,
    'params' => 0,
    'blogs' => 0,
    'parts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee8ae8b3e494_00243730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee8ae8b3e494_00243730')) {function content_51ee8ae8b3e494_00243730($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.date_format.php';
?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php args(array(0 => 'entry_slug', 1 => 'preview'), $_smarty_tpl) ?>

<?php if ($_smarty_tpl->tpl_vars['entry_slug']->value){?>

	
	<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['entry_slug']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['blog'] = new Smarty_variable(get("/entries/".$_tmp1,array('channel'=>"blogs",'status'=>"published")), null, 0);?>
	
	
	<?php if (!$_smarty_tpl->tpl_vars['blog']->value){?>
		<?php render(array("view" => "404")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	<?php }?>
<?php }else{ ?>

	
	<?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable(get("/entries",array('channel'=>"blogs",'status'=>"published",'page'=>$_smarty_tpl->tpl_vars['params']->value['page'],'limit'=>10)), null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['preview']->value=="preview"){?>
	<?php $_smarty_tpl->tpl_vars['blog'] = new Smarty_variable($_smarty_tpl->tpl_vars['blog']->value['preview'], null, 0);?>
<?php }?>


<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['page_title'] = $_smarty_tpl->tpl_vars['blog']->value['title'];?>
<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['page_description'] = smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', markdown((($tmp = @$_smarty_tpl->tpl_vars['blog']->value['page_description'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['blog']->value['content'] : $tmp)))),200);?>
<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['page_keywords'] = $_smarty_tpl->tpl_vars['blog']->value['page_keywords'];?>

<?php if ($_smarty_tpl->tpl_vars['blog']->value){?>

	
	<div class="blog-page row">
		<div class="span8">
			<div class="blog-entry">
				<h1 class="blog-entry-header">
					<a href="/blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['preview']->value){?><small>Preview</small><?php }?>
				</h1>
				<small class="blog-entry-meta">
					Posted on <?php echo smarty_modifier_date_format((strtotime((($tmp = @$_smarty_tpl->tpl_vars['blog']->value['date_published'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['blog']->value['date_created'] : $tmp))));?>

					<?php if ($_smarty_tpl->tpl_vars['blog']->value['author']){?> by <?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
<?php }?>
				</small>
				<article class="blog-entry-content">
					
					<?php echo markdown($_smarty_tpl->tpl_vars['blog']->value['content']);?>

					
					<p><a href="/blog">Back to blog</a></p>
				</article>
			</div>
		</div>
	</div>
	
<?php }elseif($_smarty_tpl->tpl_vars['blogs']->value){?>

	
	<div class="blog-page row">
		<div class="span8">
		<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
			<div class="blog-entry">
				<h1 class="blog-entry-header">
					<a href="/blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</a>
				</h1>
				<small class="blog-entry-meta">
					Posted on <?php echo smarty_modifier_date_format((strtotime((($tmp = @$_smarty_tpl->tpl_vars['blog']->value['date_published'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['blog']->value['date_created'] : $tmp))));?>

					<?php if ($_smarty_tpl->tpl_vars['blog']->value['author']){?> by <?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
<?php }?>
				</small>
				<article class="blog-entry-content">
					
					<?php $_smarty_tpl->tpl_vars['parts'] = new Smarty_variable(explode("<!--MORE-->",$_smarty_tpl->tpl_vars['blog']->value['content']), null, 0);?>
					
					
					<?php echo markdown($_smarty_tpl->tpl_vars['parts']->value[0]);?>

					
					
					<?php if ($_smarty_tpl->tpl_vars['parts']->value[1]){?>
						<p><a href="/blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value['slug'];?>
">Read More</a></p>
					<?php }?>
				</article>
			
				
				<div class="blog-pagination<?php if (count($_smarty_tpl->tpl_vars['blogs']->value['pages'])==1){?>hidden<?php }?>">
					<?php if (count($_smarty_tpl->tpl_vars['blogs']->value['pages'])>$_smarty_tpl->tpl_vars['blogs']->value['current']){?>
						<a href="/blog?page=<?php echo $_smarty_tpl->tpl_vars['blogs']->value['current']+1;?>
" class="pull-left">&larr; Older</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['blogs']->value['current']>1){?>
						<a href="/blog?page=<?php echo $_smarty_tpl->tpl_vars['blogs']->value['current']-1;?>
" class="pull-right">Newer &rarr;</a>
					<?php }?>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
<?php }?>
<?php }} ?>