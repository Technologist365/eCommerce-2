<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:06:57
         compiled from "/var/www/fwdcommerce/app/templates/admin/_default-entry.html" */ ?>
<?php /*%%SmartyHeaderCode:93285756251ee7ff1d14da9-28390709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8e63c6c764eb2e6536f5fa9ddac289d693b719c' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/_default-entry.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93285756251ee7ff1d14da9-28390709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'related' => 0,
    'related_id' => 0,
    'for' => 0,
    'record' => 0,
    'key' => 0,
    'params' => 0,
    'request' => 0,
    'file' => 0,
    'results' => 0,
    'resource' => 0,
    'result' => 0,
    'success_email' => 0,
    'redirect_related' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ff20345c5_52940570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ff20345c5_52940570')) {function content_51ee7ff20345c5_52940570($_smarty_tpl) {?>

<?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php if (!$_smarty_tpl->tpl_vars['id']->value){?>
	<?php args(array(0 => 'id', 1 => 'related', 2 => 'related_id'), $_smarty_tpl) ?>
	<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['id'] = $_smarty_tpl->tpl_vars['id']->value;?>
	<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['related'] = $_smarty_tpl->tpl_vars['related']->value;?>
	<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['related_id'] = $_smarty_tpl->tpl_vars['related_id']->value;?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['for']->value){?>

	<?php $_smarty_tpl->tpl_vars['resource'] = new Smarty_variable("/".($_smarty_tpl->tpl_vars['for']->value), null, 0);?>

	<?php if (!$_smarty_tpl->tpl_vars['record']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['related']->value){?>
			<?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(singularize($_smarty_tpl->tpl_vars['related']->value), null, 0);?>
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(singularize($_smarty_tpl->tpl_vars['for']->value), null, 0);?>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['record'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['key']->value], null, 0);?>
	<?php }?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['request']->value['post']&&$_smarty_tpl->tpl_vars['related']->value=="upload"){?>

	<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value['_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
		<?php $_smarty_tpl->createLocalArrayVariable('file', null, 0);
$_smarty_tpl->tpl_vars['file']->value['name'] = session_id();?>
		<?php $_smarty_tpl->createLocalArrayVariable('results', null, 0);
$_smarty_tpl->tpl_vars['results']->value[] = put(($_smarty_tpl->tpl_vars['resource']->value)."/".($_smarty_tpl->tpl_vars['id']->value)."/".($_smarty_tpl->tpl_vars['related']->value)."/".($_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl->tpl_vars['file']->value);?>
	<?php } ?>
	
	
	<?php echo json_encode($_smarty_tpl->tpl_vars['results']->value);?>

	

<?php }elseif($_smarty_tpl->tpl_vars['request']->value['post']&&$_smarty_tpl->tpl_vars['record']->value&&$_smarty_tpl->tpl_vars['resource']->value){?>

	
	<?php if ($_smarty_tpl->tpl_vars['related_id']->value){?>

		<?php $_smarty_tpl->tpl_vars['result']->value = put(($_smarty_tpl->tpl_vars['resource']->value)."/".($_smarty_tpl->tpl_vars['id']->value)."/".($_smarty_tpl->tpl_vars['related']->value)."/".($_smarty_tpl->tpl_vars['related_id']->value), $_smarty_tpl->tpl_vars['record']->value); ?>

	<?php }elseif($_smarty_tpl->tpl_vars['related']->value){?>

		<?php $_smarty_tpl->tpl_vars['result']->value = post(($_smarty_tpl->tpl_vars['resource']->value)."/".($_smarty_tpl->tpl_vars['id']->value)."/".($_smarty_tpl->tpl_vars['related']->value), $_smarty_tpl->tpl_vars['record']->value); ?>
		<?php $_smarty_tpl->tpl_vars['related_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['result']->value['id'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['posted_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['related_id']->value, null, 0);?>

	<?php }elseif($_smarty_tpl->tpl_vars['id']->value){?>

		<?php $_smarty_tpl->tpl_vars['result']->value = put(($_smarty_tpl->tpl_vars['resource']->value)."/".($_smarty_tpl->tpl_vars['id']->value), $_smarty_tpl->tpl_vars['record']->value); ?>
	<?php }else{ ?>

		<?php $_smarty_tpl->tpl_vars['result']->value = post(($_smarty_tpl->tpl_vars['resource']->value), $_smarty_tpl->tpl_vars['record']->value); ?>
		<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['result']->value['id'], null, 0);?>
	<?php }?>
	
	
	<?php if (!$_smarty_tpl->tpl_vars['result']->value['errors']){?>
	
		<?php if ($_smarty_tpl->tpl_vars['record']->value[':delete']){?>
		
			<?php echo flash(array('notice'=>"Deleted"),$_smarty_tpl);?>

			
		<?php }elseif($_smarty_tpl->tpl_vars['record']->value[':restore']){?>
		
			<?php echo flash(array('notice'=>"Restored"),$_smarty_tpl);?>

		<?php }else{ ?>
		
			<?php echo flash(array('notice'=>"Success"),$_smarty_tpl);?>

		<?php }?>
		
		
		<?php if ($_smarty_tpl->tpl_vars['success_email']->value){?>
			<?php $_smarty_tpl->createLocalArrayVariable('success_email', null, 0);
$_smarty_tpl->tpl_vars['success_email']->value['result'] = $_smarty_tpl->tpl_vars['result']->value;?>
			<?php  post("/emails", $_smarty_tpl->tpl_vars['success_email']->value); ?>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['params']->value['refresh']){?>
			<?php redirect(array("url" => $_smarty_tpl->tpl_vars['request']->value['uri'])) ?>
		<?php }elseif($_smarty_tpl->tpl_vars['params']->value['redirect']){?>
			<?php redirect(array("url" => $_smarty_tpl->tpl_vars['params']->value['redirect'])) ?>
		<?php }elseif($_smarty_tpl->tpl_vars['params']->value['reload']){?>
			<?php if ($_smarty_tpl->tpl_vars['related_id']->value){?>
				<?php redirect(array("url" => ($_smarty_tpl->tpl_vars['resource']->value)."/".($_smarty_tpl->tpl_vars['request']->value['action'])."/".($_smarty_tpl->tpl_vars['id']->value)."/".($_smarty_tpl->tpl_vars['related']->value)."/".($_smarty_tpl->tpl_vars['related_id']->value)."?tab=".($_smarty_tpl->tpl_vars['params']->value['tab']))) ?>
			<?php }else{ ?>
				<?php redirect(array("url" => ($_smarty_tpl->tpl_vars['resource']->value)."/".($_smarty_tpl->tpl_vars['request']->value['action'])."/".($_smarty_tpl->tpl_vars['id']->value)."?tab=".($_smarty_tpl->tpl_vars['params']->value['tab']))) ?>
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['redirect_related']->value){?>
			<?php redirect(array("url" => "/".($_smarty_tpl->tpl_vars['related']->value)."/entry/".($_smarty_tpl->tpl_vars['related_id']->value)."?tab=".($_smarty_tpl->tpl_vars['params']->value['tab']))) ?>
		<?php }else{ ?>
			<?php redirect(array("url" => ($_smarty_tpl->tpl_vars['resource']->value)."/entry/".($_smarty_tpl->tpl_vars['id']->value)."?tab=".($_smarty_tpl->tpl_vars['params']->value['tab']))) ?>
		<?php }?>
		
	<?php }else{ ?>
	
		
		<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['errors'] = $_smarty_tpl->tpl_vars['result']->value['errors'];?>
		
		<?php if ($_smarty_tpl->tpl_vars['id']->value){?>
			<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['entry'] = get(($_smarty_tpl->tpl_vars['resource']->value)."/".($_smarty_tpl->tpl_vars['id']->value));?>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['related_id']->value){?>
			<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['related_entry'] = get(($_smarty_tpl->tpl_vars['resource']->value)."/".($_smarty_tpl->tpl_vars['id']->value)."/".($_smarty_tpl->tpl_vars['related']->value)."/".($_smarty_tpl->tpl_vars['related_id']->value));?>
		<?php }?>
		
		
		<?php if ($_smarty_tpl->tpl_vars['record']->value){?>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['record']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['related']->value){?>
					<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['related_entry'][$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['val']->value;?>
				<?php }else{ ?>
					<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['entry'][$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['val']->value;?>
				<?php }?>
			<?php } ?>
		<?php }?>
	<?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['resource']->value&&$_smarty_tpl->tpl_vars['id']->value){?>

	<?php if ($_smarty_tpl->tpl_vars['related_id']->value){?>
		<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['related_entry'] = get(($_smarty_tpl->tpl_vars['resource']->value)."/".($_smarty_tpl->tpl_vars['id']->value)."/".($_smarty_tpl->tpl_vars['related']->value)."/".($_smarty_tpl->tpl_vars['related_id']->value));?>
	<?php }?>
	
	<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['entry'] = get(($_smarty_tpl->tpl_vars['resource']->value)."/".($_smarty_tpl->tpl_vars['id']->value));?>
<?php }?><?php }} ?>