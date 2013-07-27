<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:19:42
         compiled from "/var/www/fwdcommerce/app/templates/admin/entries/_field.html" */ ?>
<?php /*%%SmartyHeaderCode:202995096251ee82eec42e23-58017331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb858687f777e26947409b31c7c14faac7d75271' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/entries/_field.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202995096251ee82eec42e23-58017331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'field_size' => 0,
    'id' => 0,
    'error' => 0,
    'entry' => 0,
    'disabled' => 0,
    'editable' => 0,
    'value' => 0,
    'label' => 0,
    'checked' => 0,
    'selected' => 0,
    'channel_entries' => 0,
    'ch_entry' => 0,
    'channel_values' => 0,
    'channel_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee82eef09421_55261467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee82eef09421_55261467')) {function content_51ee82eef09421_55261467($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['field_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['size']>0&&$_smarty_tpl->tpl_vars['field']->value['size']<4 ? $_smarty_tpl->tpl_vars['field']->value['size'] : 4, null, 0);?>

<div class="field control-group span<?php echo $_smarty_tpl->tpl_vars['field_size']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
	<label><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
 <span class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></label>
	
	<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="text"){?>
	
		
		<input type="text" name="entry[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" <?php if ($_smarty_tpl->tpl_vars['disabled']->value){?>disabled="disabled"<?php }?> />
		
	<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=="textarea"){?>
	
		
		<?php if (!$_smarty_tpl->tpl_vars['field']->value['static']||$_smarty_tpl->tpl_vars['editable']->value){?>
			<textarea name="entry[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" <?php if ($_smarty_tpl->tpl_vars['disabled']->value){?>disabled="disabled"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]);?>
</textarea>
		<?php }else{ ?>
			<div class="static-text">
				<p><?php echo nl2br($_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]);?>
</p>
			</div>
		<?php }?>
		
	<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=="html"){?>
	
		
		<?php if (!$_smarty_tpl->tpl_vars['field']->value['static']||$_smarty_tpl->tpl_vars['editable']->value){?>
			<textarea name="entry[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" <?php if ($_smarty_tpl->tpl_vars['disabled']->value){?>disabled="disabled"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]);?>
</textarea>
		<?php }else{ ?>
			<div class="static-text">
				<?php echo markdown($_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]);?>

			</div>
		<?php }?>
		
	<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=="number"){?>
	
		
		<input type="text" name="entry[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" class="numeric" <?php if ($_smarty_tpl->tpl_vars['disabled']->value){?>disabled="disabled"<?php }?> />
		
	<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=="select"){?>
	
		
		<?php if ($_smarty_tpl->tpl_vars['field']->value['multi']){?>
		
			
			<div class="multi">
				<input type="hidden" name="entry[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value="" />
				<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
					<label class="checkbox">
						<input type="checkbox" name="entry[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ((is_array($_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value])&&in_array($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]))||$_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]){?><?php $_smarty_tpl->createLocalArrayVariable('checked', null, 0);
$_smarty_tpl->tpl_vars['checked']->value[$_smarty_tpl->tpl_vars['id']->value] = true;?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['disabled']->value){?>disabled="disabled"<?php }?> />
						<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

					</label>
				<?php } ?>
				<?php if (!$_smarty_tpl->tpl_vars['checked']->value[$_smarty_tpl->tpl_vars['id']->value]&&$_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]){?>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
						<label class="checkbox">
							<input type="checkbox" name="entry[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value];?>
" checked="checked" <?php if ($_smarty_tpl->tpl_vars['disabled']->value){?>disabled="disabled"<?php }?> />
							<?php echo $_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value];?>

						</label>
					<?php } ?>
				<?php }?>
			</div>
		<?php }else{ ?>
		
			
			<select name="entry[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" <?php if ($_smarty_tpl->tpl_vars['disabled']->value){?>disabled="disabled"<?php }?>>
				<?php if (!$_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]){?>
					<?php $_smarty_tpl->createLocalArrayVariable('entry', null, 0);
$_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value] = $_smarty_tpl->tpl_vars['field']->value['default'];?>
				<?php }?>
				<option value=""></option>
				<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]==$_smarty_tpl->tpl_vars['value']->value){?><?php $_smarty_tpl->createLocalArrayVariable('selected', null, 0);
$_smarty_tpl->tpl_vars['selected']->value[$_smarty_tpl->tpl_vars['id']->value] = true;?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
				<?php } ?>
				<?php if (!$_smarty_tpl->tpl_vars['selected']->value[$_smarty_tpl->tpl_vars['id']->value]&&$_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value]&&!is_array($_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value])){?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['id']->value];?>
</option>
				<?php }?>
			</select>
		<?php }?>
		
	<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=="channel"){?>
	
		
		<?php $_smarty_tpl->tpl_vars['channel_entries']->value = get("/entries?".($_smarty_tpl->tpl_vars['field']->value['channel_params']), array('channel_id'=>$_smarty_tpl->tpl_vars['field']->value['channel_id'],'limit'=>null)); ?>
		
		
		<?php $_smarty_tpl->tpl_vars['channel_values'] = new Smarty_variable(array(), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['ch_entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ch_entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel_entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ch_entry']->key => $_smarty_tpl->tpl_vars['ch_entry']->value){
$_smarty_tpl->tpl_vars['ch_entry']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['label'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['ch_entry']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ch_entry']->value['title'] : $tmp), null, 0);?>
			<?php $_smarty_tpl->createLocalArrayVariable('channel_values', null, 0);
$_smarty_tpl->tpl_vars['channel_values']->value[$_smarty_tpl->tpl_vars['ch_entry']->value['id']] = $_smarty_tpl->tpl_vars['label']->value;?>
		<?php } ?>
	
		
		<?php $_smarty_tpl->tpl_vars['channel_field'] = new Smarty_variable(array('id'=>$_smarty_tpl->tpl_vars['field']->value['id'],'type'=>"select",'multi'=>$_smarty_tpl->tpl_vars['field']->value['multi'],'values'=>$_smarty_tpl->tpl_vars['channel_values']->value), null, 0);?>
		<div class="row">
			<?php render(array("view" => "entries/field", "field" => $_smarty_tpl->tpl_vars['channel_field']->value, "entry" => $_smarty_tpl->tpl_vars['entry']->value, "error" => $_smarty_tpl->tpl_vars['error']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		</div>
	
	<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=="image"){?>
		
		
		<?php if ($_smarty_tpl->tpl_vars['entry']->value['id']){?>
			<div class="image default" data-upload="/upload/entries/<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
				<img src="<?php echo image(array('type'=>'entries','id'=>$_smarty_tpl->tpl_vars['entry']->value['id'],'name'=>$_smarty_tpl->tpl_vars['field']->value['id'],'width'=>190,'height'=>150,'padded'=>true,'default'=>'/images/blank.png'),$_smarty_tpl);?>
?<?php echo time();?>
" />
				<span><em class="name"></em></span>
				<input type="file" class="upload" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['disabled']->value){?>disabled="disabled"<?php }?> />
				<input type="hidden" class="uploaded" name="entry[images][<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value="" />
			</div>
		<?php }else{ ?>
			<input type="text" placeholder="Create entry to upload..." disabled="disabled" />
		<?php }?>

	<?php }?>
</div>
<?php }} ?>