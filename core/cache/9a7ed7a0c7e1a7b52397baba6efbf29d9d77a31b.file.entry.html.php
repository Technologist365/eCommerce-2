<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:19:42
         compiled from "/var/www/fwdcommerce/app/templates/admin/entries/entry.html" */ ?>
<?php /*%%SmartyHeaderCode:138976309651ee82eea20617-86328797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a7ed7a0c7e1a7b52397baba6efbf29d9d77a31b' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/entries/entry.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138976309651ee82eea20617-86328797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'entry' => 0,
    'version' => 0,
    'field' => 0,
    'field_id' => 0,
    'your_field' => 0,
    'their_account' => 0,
    'conflict' => 0,
    'errors' => 0,
    'their_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee82eebfb951_20462920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee82eebfb951_20462920')) {function content_51ee82eebfb951_20462920($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "entries")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php $_smarty_tpl->tpl_vars['entry'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2><?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['entry']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['entry']->value['title'] : $tmp))===null||$tmp==='' ? "Entry #".($_smarty_tpl->tpl_vars['entry']->value['id']) : $tmp);?>
 <small>/ <?php echo $_smarty_tpl->tpl_vars['entry']->value['channel']['name'];?>
</small></h2>
	</div>
	<form class="view-body" method="post" action="/entries/entry/<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" enctype="multipart/form-data">
		<div class="view-content tabbable">
			<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
			
			
			<?php if (!isset($_smarty_tpl->tpl_vars['version'])) $_smarty_tpl->tpl_vars['version'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['version']->value = $_smarty_tpl->tpl_vars['entry']->value['version_conflicts'][$_smarty_tpl->tpl_vars['request']->value['account']['id']]){?>
			
				<?php $_smarty_tpl->tpl_vars['their_account'] = new Smarty_variable(get("/accounts/".($_smarty_tpl->tpl_vars['version']->value['version_by']['theirs'])), null, 0);?>
				
				<?php  $_smarty_tpl->tpl_vars['conflict'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conflict']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['version']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conflict']->key => $_smarty_tpl->tpl_vars['conflict']->value){
$_smarty_tpl->tpl_vars['conflict']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['conflict']->key;
?>
					<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['channel']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['field']->value['id']!=$_smarty_tpl->tpl_vars['field_id']->value){?>
							<?php continue 1?>
						<?php }?>
						<?php $_smarty_tpl->tpl_vars['your_field'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value, null, 0);?>
						<?php $_smarty_tpl->createLocalArrayVariable('your_field', null, 0);
$_smarty_tpl->tpl_vars['your_field']->value['name'] = ($_smarty_tpl->tpl_vars['your_field']->value['name'])." <span class='label label-info'>Yours</span>";?>
						<?php $_smarty_tpl->createLocalArrayVariable('your_field', null, 0);
$_smarty_tpl->tpl_vars['your_field']->value['size'] = 2;?>
						
						<?php $_smarty_tpl->tpl_vars['their_field'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value, null, 0);?>
						<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['their_account']->value['name'])===null||$tmp==='' ? "Theirs" : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('their_field', null, 0);
$_smarty_tpl->tpl_vars['their_field']->value['name'] = "<span class='label label-success'>".$_tmp1."</span>";?>
						<?php $_smarty_tpl->createLocalArrayVariable('their_field', null, 0);
$_smarty_tpl->tpl_vars['their_field']->value['size'] = 2;?>
						
						<div class="row">
							<?php $_smarty_tpl->createLocalArrayVariable('entry', null, 0);
$_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['conflict']->value['yours'];?>
							<?php render(array("view" => "entries/field", "field" => $_smarty_tpl->tpl_vars['your_field']->value, "entry" => $_smarty_tpl->tpl_vars['entry']->value, "error" => $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['field']->value['id']])) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
							<?php $_smarty_tpl->createLocalArrayVariable('entry', null, 0);
$_smarty_tpl->tpl_vars['entry']->value[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['conflict']->value['theirs'];?>
							<?php render(array("view" => "entries/field", "field" => $_smarty_tpl->tpl_vars['their_field']->value, "entry" => $_smarty_tpl->tpl_vars['entry']->value, "disabled" => "true", "error" => $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['field']->value['id']])) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
						</div>
					<?php } ?>
				<?php } ?>
				<input type="hidden" name="entry[version_conflicts][<?php echo $_smarty_tpl->tpl_vars['request']->value['account']['id'];?>
]" value="" />
				<input type="hidden" name="entry[:version]" value="<?php echo $_smarty_tpl->tpl_vars['version']->value['date_updated']['theirs'];?>
" />
				<input type="hidden" name="entry[version_by]" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['account']['id'];?>
" />
			<?php }else{ ?>
				<div class="entry-fields">
					<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['channel']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
						<div class="row">
							<?php render(array("view" => "entries/field", "field" => $_smarty_tpl->tpl_vars['field']->value, "entry" => $_smarty_tpl->tpl_vars['entry']->value, "error" => $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['field']->value['id']])) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
						</div>
					<?php } ?>
				</div>
				<input type="hidden" class="version" name="entry[:version]" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['date_updated'];?>
" />
				<input type="hidden" name="entry[version_by]" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['account']['id'];?>
" />
			<?php }?>
		</div>
		<div class="view-footer actions">
			<?php if ($_smarty_tpl->tpl_vars['entry']->value['version_conflicts'][$_smarty_tpl->tpl_vars['request']->value['account']['id']]){?>
				<button type="submit" class="btn btn-primary">Save yours</button>
				<button type="button" class="btn btn-danger confirm view-link" data-href="/entries/entry/<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
?entry[version_conflicts][<?php echo $_smarty_tpl->tpl_vars['request']->value['account']['id'];?>
]=" data-post="true">Discard yours</button>
			<?php }else{ ?>
				<button type="submit" class="btn btn-primary">Save entry</button>
			
				<?php if ($_smarty_tpl->tpl_vars['entry']->value['channel']['preview_url']){?>
					<button type="button" class="btn preview" data-href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['channel']['preview_url'];?>
" data-target="_blank">Preview</button>
				<?php }?>
			<?php }?>
			<button type="button" class="btn view-cancel">Close</button>
			<?php if (!$_smarty_tpl->tpl_vars['entry']->value['is_deleted']){?>
				<a class="trash view-link" href="/entries/entry/<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
?entry[:delete]=true" data-post="true"><i class="icon-trash"></i></a>
			<?php }else{ ?>
				<a class="trash view-link undo" href="/entries/entry/<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
?entry[:restore]=true" data-post="true">Undo <i class="icon-trash"></i></a>
			<?php }?>
		</div>
	</form>
</div>

<script type="text/javascript">
	
	// Entry preview.
	$('#view button.preview').click(function ()
	{
		$form = $(this).closest('form');
		var preview_url = $(this).data('href');
		
		// Change field names.
		$form.find('.view-content').find('input, select, textarea').each(function ()
		{
			$(this).data('name', $(this).attr('name'));
			var preview_name = $(this).attr('name').replace(/entry/, 'entry[preview]');
			$(this).attr('name', preview_name);
			
			var id = $(this).closest('.field').data('id');
			
			preview_url = preview_url.replace(new RegExp('\:'+id+''), $(this).val());
		});
		
		$('#view').trigger('loading');
		
		// Post preview data.
		$.post($form.attr('action'), $form.find('.entry-fields').find('input, select, textarea').serialize());
		
		// Wait half a second to save, then go to preview url.
		setTimeout(function ()
		{
			$('#view').trigger('loading', [false]);
			window.open(preview_url, "entry_preview");
			
		}, 500);
		
		// Restore field names.
		$form.find('.view-content').find('input, select, textarea').each(function ()
		{
			$(this).attr('name', $(this).data('name'));
		});
		
		return false;
	});
	
</script>
<?php }} ?>