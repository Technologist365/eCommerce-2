<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:23:13
         compiled from "/var/www/fwdcommerce/app/templates/admin/channels/entry.html" */ ?>
<?php /*%%SmartyHeaderCode:129986797951ee83c1e81c39-94246875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba33980d9d9563c9b4fa8baa24f953e19874ec85' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/channels/entry.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129986797951ee83c1e81c39-94246875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'channel' => 0,
    'errors' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee83c2033e75_75122574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee83c2033e75_75122574')) {function content_51ee83c2033e75_75122574($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	
<?php ob_start(); render(array("view" => "default-entry", "for" => "channels")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php $_smarty_tpl->tpl_vars['channel'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>


<div class="view-container">
	<div class="view-header well">
		<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['channel']->value['name'])===null||$tmp==='' ? "[no name]" : $tmp);?>
 <small>/ Channel #<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
</small></h2>
	</div>
	<form class="view-body" method="post" action="/channels/entry/<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
">
		<div class="view-content tabbable">
			<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
			<div class="tab-content">
				<div class="row">
					<div class="field control-group span2">
						<label>Channel name <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['name'];?>
</span></label>
						<input type="text" name="channel[name]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['name'];?>
" />
					</div>
					<div class="field control-group span2">
						<label>Channel slug <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['slug'];?>
</span></label>
						<input type="text" name="channel[slug]" value="<?php echo hyphenate((($tmp = @$_smarty_tpl->tpl_vars['channel']->value['slug'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['channel']->value['name'] : $tmp));?>
" />
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['channel']->value['fields']){?>
					<table class="table table-bordered table-condensed">
						<tr>
							<th colspan="2">Channel fields</th>
							<th>Type</th>
						</tr>
						<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['field']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->iteration++;
?>
							<tr>
								<td>#<?php echo $_smarty_tpl->tpl_vars['field']->iteration;?>
</td>
								<td>
									<div class="with-actions">
										<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

										<code class="act">
											<a href="/channels/field/<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
/fields/<?php echo $_smarty_tpl->tpl_vars['field']->key;?>
" class="view-link">edit</a>
										</code>
									</div>
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['field']->value['type'];?>
</td>
							</tr>
						<?php } ?>
					</table>
				<?php }?>
				<button type="button" class="btn btn-success view-link" data-href="/channels/field/<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
"><i class="icon-plus-sign icon-white"></i> Add field</button>
				<br />
				<br />
				
				<div class="row">
					<div class="field control-group span4">
						<label>Preview (Optional, http://example.com/page/:slug/preview) <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['preview_url'];?>
</span></label>
						<input type="text" name="channel[preview_url]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['preview_url'];?>
" />
					</div>
				</div>
			</div>
		</div>
		<div class="view-footer actions">
			<button type="submit" class="btn btn-primary">Save channel</button>
			<button type="button" class="btn view-cancel">Close</button>
			<?php if (!$_smarty_tpl->tpl_vars['channel']->value['is_deleted']){?>
				<a class="trash view-link" href="/channels/entry/<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
?channel[:delete]=true" data-post="true"><i class="icon-trash"></i></a>
			<?php }else{ ?>
				<a class="trash view-link undo" href="/channels/entry/<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
?channel[:restore]=true" data-post="true">Undo <i class="icon-trash"></i></a>
			<?php }?>
		</div>
	</form>
</div>
<?php }} ?>