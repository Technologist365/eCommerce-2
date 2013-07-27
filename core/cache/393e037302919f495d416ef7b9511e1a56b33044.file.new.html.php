<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 09:31:25
         compiled from "/var/www/fwdcommerce/app/templates/admin/categories/new.html" */ ?>
<?php /*%%SmartyHeaderCode:93856203051f0f06d4d4c21-50256596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '393e037302919f495d416ef7b9511e1a56b33044' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/categories/new.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93856203051f0f06d4d4c21-50256596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'request' => 0,
    'errors' => 0,
    'category' => 0,
    'categories' => 0,
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f0f06d59b065_06253340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0f06d59b065_06253340')) {function content_51f0f06d59b065_06253340($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "categories", "record" => $_smarty_tpl->tpl_vars['params']->value['category'])); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php $_smarty_tpl->tpl_vars['category'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['category'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2>New category</h2>
		<div class="actions">
			<a class="btn view-back" href="">Back</a>
		</div>
	</div>
	<form class="view-body" method="post" action="/categories/new">
		<div class="view-content">
			<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
			<div class="row">
				<div class="field control-group span2">
					<label>Category name <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['name'];?>
</span></label>
					<input type="text" name="category[name]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" />
				</div>
				<?php if ($_smarty_tpl->tpl_vars['errors']->value['slug']){?>
					<div class="field control-group span2">
						<label>Slug <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['slug'];?>
</span></label>
						<input type="text" name="category[slug]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['slug'];?>
" />
					</div>
				<?php }?>
			</div>
			<?php if (!isset($_smarty_tpl->tpl_vars['categories'])) $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['categories']->value = get("/categories",array('parent_id'=>null))){?>
				<div class="row">
					<div class="field control-group span2">
						<label>Parent category <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['parent_id'];?>
</span></label>
						<select name="category[parent_id]">
							<option value="">None</option>
							<?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
$_smarty_tpl->tpl_vars['parent']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['parent']->value['id']==$_smarty_tpl->tpl_vars['category']->value['parent_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['parent']->value['name'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
			<?php }?>
		</div>
		<div class="view-footer">
			<div class="actions">
				<button type="submit" class="btn btn-primary">Create category</button>
				<button type="button" class="btn view-cancel">Cancel</button>
			</div>
		</div>
	</form>
</div>

<?php }} ?>