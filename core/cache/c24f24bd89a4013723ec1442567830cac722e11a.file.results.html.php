<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:19:40
         compiled from "/var/www/fwdcommerce/app/templates/admin/entries/results.html" */ ?>
<?php /*%%SmartyHeaderCode:68274028451ee82ec077e95-61664424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c24f24bd89a4013723ec1442567830cac722e11a' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/entries/results.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68274028451ee82ec077e95-61664424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'channel_slug' => 0,
    'channel' => 0,
    'params' => 0,
    'entries' => 0,
    'query' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee82ec154ed4_42812428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee82ec154ed4_42812428')) {function content_51ee82ec154ed4_42812428($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.truncate.php';
?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php args(array(0 => 'channel_slug'), $_smarty_tpl) ?>
<?php $_smarty_tpl->tpl_vars['channel']->value = get("/channels/".($_smarty_tpl->tpl_vars['channel_slug']->value), array()); ?>

<?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(array('channel_id'=>$_smarty_tpl->tpl_vars['channel']->value['id'],'search'=>$_smarty_tpl->tpl_vars['params']->value['search'],'where'=>$_smarty_tpl->tpl_vars['params']->value['where'],'page'=>$_smarty_tpl->tpl_vars['params']->value['page']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['entries']->value = get("/entries", $_smarty_tpl->tpl_vars['query']->value); ?>

<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
	<li>
		<div class="headline">
			<a class="list-item" href="/entries/entry/<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id="item_entries_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"> 
				<span class="name"><?php echo htmlspecialchars(((($tmp = @(($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['entry']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['entry']->value['title'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['entry']->value['headline'] : $tmp))===null||$tmp==='' ? "Entry #".($_smarty_tpl->tpl_vars['entry']->value['id']) : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
</span>
			</a>
		</div>
		<small>
			<?php echo htmlspecialchars(((($tmp = @smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entry']->value['description']),100))===null||$tmp==='' ? ((($tmp = @smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value['date']))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['entry']->value['slug'] : $tmp)) : $tmp)), ENT_QUOTES, 'UTF-8', true);?>

			<span class="date">
				<?php echo age_date($_smarty_tpl->tpl_vars['entry']->value['date_created']);?>

			</span>
			<span class="labels">
				<?php if ($_smarty_tpl->tpl_vars['entry']->value['label']||$_smarty_tpl->tpl_vars['entry']->value['category']){?>
					<span class="label">
						<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['entry']->value['label'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['entry']->value['category'] : $tmp)), ENT_QUOTES, 'UTF-8', true);?>

					</span>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['entry']->value['status']){?>
					<span class="label label-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entry']->value['severity'])===null||$tmp==='' ? 'info' : $tmp);?>
">
						<?php echo $_smarty_tpl->tpl_vars['entry']->value['status'];?>

					</span>
				<?php }?>
			</span>
		</small>
	</li>
<?php }
if (!$_smarty_tpl->tpl_vars['entry']->_loop) {
?>
	<li class="empty">No entries found</li>
<?php } ?>

<?php render(array("view" => "loadmore", "with" => $_smarty_tpl->tpl_vars['entries']->value, "query" => $_smarty_tpl->tpl_vars['query']->value, "url" => "/entries/".($_smarty_tpl->tpl_vars['channel_slug']->value))) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?><?php }} ?>