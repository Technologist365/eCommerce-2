<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 14:03:10
         compiled from "/var/www/fwdcommerce/app/templates/admin/channels/field.html" */ ?>
<?php /*%%SmartyHeaderCode:76401816951ee8d1e8449f2-48570343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82f0093ea91424fc4b8b612731f48c125eb7856a' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/channels/field.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76401816951ee8d1e8449f2-48570343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'params' => 0,
    'values' => 0,
    'val' => 0,
    'parts' => 0,
    'value' => 0,
    'label' => 0,
    'field' => 0,
    'channel' => 0,
    'field_id' => 0,
    'errors' => 0,
    'key' => 0,
    'ch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee8d1eab8869_16078968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee8d1eab8869_16078968')) {function content_51ee8d1eab8869_16078968($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php if ($_smarty_tpl->tpl_vars['request']->value['post']&&is_string($_smarty_tpl->tpl_vars['params']->value['field']['values'])){?>

	<?php $_smarty_tpl->tpl_vars['values'] = new Smarty_variable(explode("\n",$_smarty_tpl->tpl_vars['params']->value['field']['values']), null, 0);?>
	<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['field']['values'] = array();?>
	
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['val']->value==''){?><?php continue 1?><?php }?>
		<?php $_smarty_tpl->tpl_vars['parts'] = new Smarty_variable(preg_split("/[\s]*\=\>[\s]*/",$_smarty_tpl->tpl_vars['val']->value), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(trim($_smarty_tpl->tpl_vars['parts']->value[0]), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['label'] = new Smarty_variable($_smarty_tpl->tpl_vars['parts']->value[1] ? $_smarty_tpl->tpl_vars['parts']->value[1] : $_smarty_tpl->tpl_vars['value']->value, null, 0);?>
		<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['field']['values'][$_smarty_tpl->tpl_vars['value']->value] = trim($_smarty_tpl->tpl_vars['label']->value);?>
	<?php } ?>
<?php }?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "channels")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['channel'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['field_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['related_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['related_entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>


<div class="view-container">
	<div class="view-header well">
		<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['name'])===null||$tmp==='' ? "New field" : $tmp);?>
 <small>/ <?php echo $_smarty_tpl->tpl_vars['channel']->value['name'];?>
</small></h2>
		<div class="actions">
			<a class="btn view-cancel" href="">&times;</a>
		</div>
	</div>
	<form class="view-body field" method="post" action="/channels/field/<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
/fields<?php if ($_smarty_tpl->tpl_vars['field_id']->value){?>/<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
<?php }?>">
		<div class="view-content">
			<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
			<div class="row">
				<div class="field control-group span2">
					<label>Field name <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['name'];?>
</span></label>
					<input type="text" name="field[name]" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" />
				</div>
				<div class="field control-group span2">
					<label>Field key <?php if (!$_smarty_tpl->tpl_vars['field_id']->value){?>(Optional)<?php }?> <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['id'];?>
</span></label>
					<input type="text" name="field[id]" value="<?php echo underscore((($tmp = @$_smarty_tpl->tpl_vars['field']->value['id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['field']->value['name'] : $tmp));?>
" />
				</div>
			</div>
			<div class="row">
				<div class="field control-group span2">
					<label>Field type <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['type'];?>
</span></label>
					<select name="field[type]" class="field_type">
						<option value="text" <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="text"){?>selected="selected"<?php }?>>Text</option>
						<option value="textarea" <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="textarea"){?>selected="selected"<?php }?>>Textarea</option>
						<option value="html" <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="html"){?>selected="selected"<?php }?>>HTML/Markdown</option>
						<option value="number" <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="number"){?>selected="selected"<?php }?>>Number</option>
						<option value="select" <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="select"){?>selected="selected"<?php }?>>Select</option>
						<option value="channel" <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="channel"){?>selected="selected"<?php }?>>Channel</option>
						<option value="image" <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="image"){?>selected="selected"<?php }?>>Image</option>
					</select>
				</div>
				<div class="field control-group span1">
					<label>Sort order <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['sort'];?>
</span></label>
					<input type="text" name="field[sort]" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['sort'];?>
" />
				</div>
			</div>
			<div class="row options field_type_select">
				<div class="field control-group span3">
					<label>Select values (one per line, value => label) <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['values'];?>
</span></label>
					<textarea name="field[values]" rows="5"><?php if (is_string($_smarty_tpl->tpl_vars['field']->value['values'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['values']);?>
<?php }else{ ?><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
 $_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
?><?php if ($_smarty_tpl->tpl_vars['key']->value!=$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 => <?php }?><?php echo str_replace("\n",'',$_smarty_tpl->tpl_vars['value']->value);?>
<?php if (!$_smarty_tpl->tpl_vars['value']->last){?><?php echo "\n";?>
<?php }?><?php } ?><?php }?></textarea>
				</div>
				<div class="field control-group span2">
					<label>Default value <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['default'];?>
</span></label>
					<input type="text" name="field[default]" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['default'];?>
" />
				</div>
			</div>
			<div class="row options field_type_channel">
				<div class="field control-group span2">
					<label>Channel <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['channel_id'];?>
</span></label>
					<select name="field[channel_id]">
						<?php  $_smarty_tpl->tpl_vars['ch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ch']->_loop = false;
 $_from = get("/channels",array('limit'=>null)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ch']->key => $_smarty_tpl->tpl_vars['ch']->value){
$_smarty_tpl->tpl_vars['ch']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['ch']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['channel_id']==$_smarty_tpl->tpl_vars['ch']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['ch']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="row options field_type_select field_type_channel">
				<div class="field control-group span2">
					<label>Multi-select? <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['multi'];?>
</span></label>
					<select name="field[multi]">
						<option value="false" <?php if ($_smarty_tpl->tpl_vars['field']->value['multi']=="false"){?>selected="selected"<?php }?>>No</option>
						<option value="true" <?php if ($_smarty_tpl->tpl_vars['field']->value['multi']=="true"){?>selected="selected"<?php }?>>Yes</option>
					</select>
				</div>
			</div>
			<div class="row options field_type_text field_type_number">
				<div class="field control-group span2">
					<label>Size (1-4) <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['size'];?>
</span></label>
					<input type="text" name="field[size]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['size'])===null||$tmp==='' ? 4 : $tmp);?>
" />
				</div>
			</div>
			<div class="row options field_type_text field_type_textarea field_type_html field_type_number">
				<div class="field control-group span2">
					<label>Hint text (optional) <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['placeholder'];?>
</span></label>
					<input type="text" name="field[placeholder]" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" />
				</div>
			</div>
			<!--<div class="row options field_type_text field_type_textarea field_type_html field_type_number">
				<div class="field control-group span2">
					<label>Static? (Uneditable) <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['static'];?>
</span></label>
					<select name="field[static]">
						<option value="false" <?php if ($_smarty_tpl->tpl_vars['field']->value['static']==false){?>selected="selected"<?php }?>>No</option>
						<option value="true" <?php if ($_smarty_tpl->tpl_vars['field']->value['static']==true){?>selected="selected"<?php }?>>Yes</option>
					</select>
				</div>
			</div>-->
		</div>
		<div class="view-footer actions">
			<button type="submit" class="btn btn-primary">Save field</button>
			<button type="button" class="btn view-back">Back</button>
			<?php if ($_smarty_tpl->tpl_vars['field']->value){?>
				<a class="trash confirm view-link" href="/channels/field/<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
/fields/<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
?field[:delete]=true" data-post="true"><i class="icon-trash"></i></a>
			<?php }?>
		</div>
	</form>
</div>

<script type="text/javascript">

	$('form.field select.field_type').change(function ()
	{
		$('form.field .row.options').hide().find('input, textarea, select').attr('disabled', true);
		$('form.field .row.field_type_'+$('option:selected', this).val()).show().find('input, textarea, select').attr('disabled', false);
	})
	.trigger('change');

</script>
<?php }} ?>