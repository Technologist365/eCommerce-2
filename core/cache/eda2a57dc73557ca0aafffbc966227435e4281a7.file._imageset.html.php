<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:07:17
         compiled from "/var/www/fwdcommerce/app/templates/admin/_imageset.html" */ ?>
<?php /*%%SmartyHeaderCode:187991223851ee800506b275-65724785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eda2a57dc73557ca0aafffbc966227435e4281a7' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/_imageset.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187991223851ee800506b275-65724785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'imageset' => 0,
    'name' => 0,
    'displayed' => 0,
    'for' => 0,
    'width' => 0,
    'height' => 0,
    'padded' => 0,
    'default' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee80050f1103_84392044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee80050f1103_84392044')) {function content_51ee80050f1103_84392044($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['type']->value&&!$_smarty_tpl->tpl_vars['imageset']->value){?>
	<?php $_smarty_tpl->tpl_vars['imageset'] = new Smarty_variable(get("/settings/images/".($_smarty_tpl->tpl_vars['type']->value)), null, 0);?>
<?php }?>
<div class="field images">
	<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imageset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['displayed']->value[$_smarty_tpl->tpl_vars['name']->value]){?>
			<?php continue 1?>
		<?php }?>
		<?php $_smarty_tpl->createLocalArrayVariable('displayed', null, 0);
$_smarty_tpl->tpl_vars['displayed']->value[$_smarty_tpl->tpl_vars['name']->value] = true;?>
		<label><b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</b></label>
		<div class="image default" data-upload="/upload/<?php echo pluralize($_smarty_tpl->tpl_vars['type']->value);?>
/<?php echo $_smarty_tpl->tpl_vars['for']->value['id'];?>
">
			<img src="<?php echo image(array('for'=>$_smarty_tpl->tpl_vars['for']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'width'=>(($tmp = @$_smarty_tpl->tpl_vars['width']->value)===null||$tmp==='' ? 190 : $tmp),'height'=>(($tmp = @$_smarty_tpl->tpl_vars['height']->value)===null||$tmp==='' ? 154 : $tmp),'padded'=>(($tmp = @$_smarty_tpl->tpl_vars['padded']->value)===null||$tmp==='' ? true : $tmp),'default'=>(($tmp = @$_smarty_tpl->tpl_vars['default']->value)===null||$tmp==='' ? "/images/blank.png" : $tmp)),$_smarty_tpl);?>
?<?php echo time();?>
" />
			<span><em class="name"></em></span>
			<input type="file" class="upload" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />
			<input type="hidden" class="uploaded" name="<?php echo singularize($_smarty_tpl->tpl_vars['type']->value);?>
[images][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="" />
		</div>
		<br />
	<?php } ?>
</div>
<div class="field span2">
	<br />
	<label>Upload guidelines</label>
	<ul>
		<li>Format: JPG, PNG, or GIF</li>
		<li>Size: &lt; 8 Megabytes</li>
	</ul>
</div><?php }} ?>