<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:27:00
         compiled from "/var/www/fwdcommerce/app/templates/admin/categories/entry.html" */ ?>
<?php /*%%SmartyHeaderCode:195888138851ee84a48a0684-70985051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64703852abd66cc4c001b26fa3a5b65ccbaae2c9' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/categories/entry.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195888138851ee84a48a0684-70985051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'category' => 0,
    'params' => 0,
    'image_settings' => 0,
    'errors' => 0,
    'child' => 0,
    'parent' => 0,
    'product' => 0,
    'imageset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee84a4abc825_62115764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee84a4abc825_62115764')) {function content_51ee84a4abc825_62115764($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "categories")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php $_smarty_tpl->tpl_vars['category'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2><?php if ($_smarty_tpl->tpl_vars['category']->value['parent']){?><?php echo $_smarty_tpl->tpl_vars['category']->value['parent']['name'];?>
 / <?php }?><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
 <small>/ Category #<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
</small></h2>
		<div class="actions">
			<a class="btn view-back" href="">Back</a>
		</div>
	</div>
	<form class="view-body tabbable" method="post" action="/categories/entry/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" enctype="multipart/form-data">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<ul class="nav nav-pills">
				<li class="<?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>"><a href="">Details</a></li>
				<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="products"){?>active<?php }?>"><a href="" data-pane="products">Products</a></li>
				<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="content"){?>active<?php }?>"><a href="" data-pane="content">Content</a></li>
				<?php if ($_smarty_tpl->tpl_vars['category']->value['parent']){?>

					
					<?php $_smarty_tpl->tpl_vars['image_settings'] = new Smarty_variable(get("/settings/images/categories"), null, 0);?>

					<?php if (!isset($_smarty_tpl->tpl_vars['imageset'])) $_smarty_tpl->tpl_vars['imageset'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['imageset']->value = $_smarty_tpl->tpl_vars['image_settings']->value[$_smarty_tpl->tpl_vars['category']->value['parent']['slug']]){?>
						<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="images"){?>active<?php }?>"><a href="" data-pane="images">Images</a></li>
					<?php }?>
				<?php }?>
			</ul>
			<div class="tab-content">
				<div class="tab-pane default <?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>">
					<div class="row">
						<div class="field control-group span2">
							<label>Category name <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['name'];?>
</span></label>
							<input type="text" name="category[name]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" />
						</div>
						<div class="field control-group span2">
							<label>Slug <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['slug'];?>
</span></label>
							<input type="text" name="category[slug]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['slug'];?>
" />
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['category']->value['children']){?>
						<h4>Child categories</h4>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
								<li><a class="view-link" href="/categories/entry/<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a></li>
							<?php } ?>
						</ul>
					<?php }else{ ?>
						<div class="row">
							<div class="field control-group span2">
								<label>Parent category <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['parent_id'];?>
</span></label>
								<select name="category[parent_id]">
									<option value="false">None</option>
									<?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = get("/categories",array('parent_id'=>null)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
$_smarty_tpl->tpl_vars['parent']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['parent']->value['id']!=$_smarty_tpl->tpl_vars['category']->value['id']){?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['parent_id']==$_smarty_tpl->tpl_vars['parent']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['parent']->value['name'];?>
</option>
										<?php }?>
									<?php } ?>
								</select>
							</div>
						</div>
					<?php }?>
				</div>
				<div class="tab-pane products <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="products"){?>active<?php }?>">
				
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
						<h4><a href="/categories/entry/<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
" class="view-link"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a></h4>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
								<li><a class="view-link" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
?tab=categories"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></li>
							<?php }
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
								<li>No products</li>
							<?php } ?>
						</ul>
					<?php }
if (!$_smarty_tpl->tpl_vars['child']->_loop) {
?>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
								<li><a class="view-link" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
?tab=categories"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></li>
							<?php }
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
								<li>No products</li>
							<?php } ?>
						</ul>
					<?php } ?>
					
				</div>
				<div class="tab-pane content <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="content"){?>active<?php }?>">
				
					<div class="row">
						<div class="field control-group span4">
							<label>Description <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['description'];?>
</span></label>
							<textarea name="category[description]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</div>
					</div>
					
				</div>
				<?php if ($_smarty_tpl->tpl_vars['imageset']->value){?>
					
					<?php if (!is_array($_smarty_tpl->tpl_vars['imageset']->value)){?>
						<?php $_smarty_tpl->tpl_vars['imageset'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['imageset']->value), null, 0);?>
					<?php }?>
					<div class="tab-pane images <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="images"){?>active<?php }?>">
						<div class="row">
							<?php render(array("view" => "imageset", "for" => $_smarty_tpl->tpl_vars['category']->value, "type" => "categories", "imageset" => $_smarty_tpl->tpl_vars['imageset']->value)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
						</div>
					</div>
				<?php }?>
			</div>
		</div>
		<div class="view-footer actions">
			<span class="tab-controls default content images">
				<button type="submit" class="btn btn-primary">Save changes</button>
			</span>
			<span class="tab-controls products">
				<?php if (!$_smarty_tpl->tpl_vars['category']->value['children']&&$_smarty_tpl->tpl_vars['category']->value['products']){?>
					<button type="button" class="btn btn-primary view-link" data-href="/categories/products/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">Sort products</button>
				<?php }?>
			</span>
			<button type="button" class="btn view-cancel">Close</button>
			<?php if (!$_smarty_tpl->tpl_vars['category']->value['is_deleted']){?>
				<a class="trash view-link" href="/categories/entry/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
?category[:delete]=true" data-post="true"><i class="icon-trash"></i></a>
			<?php }else{ ?>
				<a class="trash view-link undo" href="/categories/entry/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
?category[:restore]=true" data-post="true">Undo <i class="icon-trash"></i></a>
			<?php }?>
		</div>
	</form>
</div>
<?php }} ?>