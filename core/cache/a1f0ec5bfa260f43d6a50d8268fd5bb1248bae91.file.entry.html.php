<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:07:16
         compiled from "/var/www/fwdcommerce/app/templates/admin/products/entry.html" */ ?>
<?php /*%%SmartyHeaderCode:97669297151ee8004b5a3b5-81936626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1f0ec5bfa260f43d6a50d8268fd5bb1248bae91' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/products/entry.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97669297151ee8004b5a3b5-81936626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'product' => 0,
    'params' => 0,
    'value' => 0,
    'item' => 0,
    'cost' => 0,
    'weight' => 0,
    'item_id' => 0,
    'errors' => 0,
    'variant' => 0,
    'id' => 0,
    'categories' => 0,
    'category' => 0,
    'child' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee8004ee5a92_19881357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee8004ee5a92_19881357')) {function content_51ee8004ee5a92_19881357($_smarty_tpl) {?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php ob_start(); render(array("view" => "default-entry", "for" => "products")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
<?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['entry'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value['errors'], null, 0);?>

<div class="view-container">
	<div class="view-header well">
		<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['name'])===null||$tmp==='' ? "Not found" : $tmp);?>
</h2>
		<div class="actions">
			<a class="btn view-cancel" href="">Close</a>
		</div>
	</div>
	<form class="view-body tabbable" method="post" action="/products/entry/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" enctype="multipart/form-data">
		<?php render(array("view" => "messages")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
		<div class="view-content">
			<?php if ($_smarty_tpl->tpl_vars['product']->value){?>
				<ul class="nav nav-pills">
					<li class="<?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>"><a href="">Details</a></li>
					<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="variants"){?>active<?php }?> variants"><a href="" data-pane="variants">Variants</a></li>
					<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="images"){?>active<?php }?> images"><a href="" data-pane="images">Images</a></li>
					<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="categories"){?>active<?php }?>"><a href="" data-pane="categories">Categories</a></li>
					<li class="<?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="stock"){?>active<?php }?>"><a href="" data-pane="stock">Stock</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane default <?php if (!$_smarty_tpl->tpl_vars['params']->value['tab']){?>active<?php }?>">
						<?php if (count($_smarty_tpl->tpl_vars['product']->value['items'])){?>
							<table class="table table-bordered table-condensed">
								<tr>
									<th>Bundle item</th>
									<th>Quantity</th>
								</tr>
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
									<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value+$_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity'], null, 0);?>
									<?php $_smarty_tpl->tpl_vars['cost'] = new Smarty_variable($_smarty_tpl->tpl_vars['cost']->value+$_smarty_tpl->tpl_vars['item']->value['cost']*$_smarty_tpl->tpl_vars['item']->value['quantity'], null, 0);?>
									<?php $_smarty_tpl->tpl_vars['weight'] = new Smarty_variable($_smarty_tpl->tpl_vars['weight']->value+$_smarty_tpl->tpl_vars['item']->value['weight']*$_smarty_tpl->tpl_vars['item']->value['quantity'], null, 0);?>
									<tr>
										<td>
											<div class="with-actions">
												<a class="view-link" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
												<code class="act">
													<a class="view-link" href="/products/bundle/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/items/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
">edit</a>
												</code>
											</div>
										</td>
										<td><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
									</tr>
								<?php } ?>
								<tr>
									<th colspan="2">Value: <?php echo money($_smarty_tpl->tpl_vars['value']->value);?>
 &nbsp; Cost: <?php echo money($_smarty_tpl->tpl_vars['cost']->value);?>
 &nbsp; Weight: <?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
</th>
								</tr>
							</table>
							<button type="button" class="btn btn-success view-link" data-href="/products/bundle/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" data-post="true"><i class="icon-plus-sign icon-white"></i> Add product</button>
							<br />
							<br />
						<?php }elseif($_smarty_tpl->tpl_vars['product']->value['is_bundle']){?>
							<table class="table table-bordered">
								<tr>
									<td><a class="view-link" href="/products/bundle/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">Add product to bundle &rarr;</a></td>
								</tr>
							</table>
						<?php }?>
						<div class="row">
							<div class="field control-group span2">
								<label><?php if ($_smarty_tpl->tpl_vars['product']->value['is_bundle']){?>Bundle<?php }else{ ?>Product<?php }?> name <span class="error"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errors']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['errors']->value['slug'] : $tmp);?>
</span></label>
								<input type="text" name="product[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name']);?>
" />
								<div class="row">
									<?php if (!$_smarty_tpl->tpl_vars['product']->value['is_bundle']){?>
										<div class="field control-group span1">
											<label>SKU <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['sku'];?>
</span></label>
											<input type="text" name="product[sku]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sku'];?>
" />
										</div>
										<div class="field control-group span1">
											<label>Weight (lbs) <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['weight'];?>
</span></label>
											<input type="text" name="product[weight]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['weight'];?>
" />
										</div>
									<?php }?>
									<div class="field control-group span1">
										<label>Price <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['price'];?>
</span></label>
										<input type="text" name="product[price]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
" class="numeric" />
									</div>
									<?php if (!$_smarty_tpl->tpl_vars['product']->value['is_bundle']){?>
										<div class="field control-group span1">
											<label>Cost <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['cost'];?>
</span></label>
											<input type="text" name="product[cost]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['cost'];?>
" class="numeric" />
										</div>
									<?php }?>
								</div>
							</div>
							<div class="field control-group span2">
								<label>Default image</label>
								<div class="image default" data-upload="/upload/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
									<img src="<?php echo image(array('for'=>$_smarty_tpl->tpl_vars['product']->value,'width'=>190,'height'=>154,'padded'=>true,'default'=>"/images/blank.png"),$_smarty_tpl);?>
?<?php echo time();?>
" />
									<span><em class="name"></em></span>
									<input type="file" class="upload" name="default" />
									<input type="hidden" class="uploaded" name="product[images][default]" value="" />
								</div>
							</div>
						</div>
						<!-- Special pricing details -->
						<?php render(array("view" => "products/pricing", "enabled" => false)) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
						<div class="row">
							<div class="field control-group span4">
								<label>Description <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['description'];?>
</span></label>
								<textarea type="text" name="product[description]" rows="6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
							</div>
						</div>
						<div class="row">
							<div class="field control-group span4">
								<label>Slug <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['slug'];?>
</span></label>
								<input type="text" name="product[slug]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['slug'];?>
" />
							</div>
						</div>
						<div class="row">
							<div class="field control-group span2">
								<label>Status</label>
								<select name="product[is_active]">
									<option value="true" <?php if ($_smarty_tpl->tpl_vars['product']->value['is_active']===true){?>selected="selected"<?php }?>>Active</option>
									<option value="false" <?php if (!$_smarty_tpl->tpl_vars['product']->value['is_active']){?>selected="selected"<?php }?>>Not active</option>
									<option value="discontinued" <?php if ($_smarty_tpl->tpl_vars['product']->value['is_active']==="discontinued"){?>selected="selected"<?php }?>>Discontinued</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="field control-group span4">
								<label>Page title <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['page_title'];?>
</span></label>
								<input type="text" name="product[page_title]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['page_title'];?>
" />
							</div>
						</div>
						<div class="row">
							<div class="field control-group span4">
								<label>Page description <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['page_desc'];?>
</span></label>
								<textarea type="text" name="product[page_desc]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['page_desc'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
							</div>
						</div>
						<div class="row">
							<div class="field control-group span4">
								<label>Page keywords <span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['page_keywords'];?>
</span></label>
								<textarea type="text" name="product[page_keywords]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['page_keywords'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
							</div>
						</div>
					</div>
					<div class="tab-pane variants <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=='variants'){?>active<?php }?>">
						<?php if (count($_smarty_tpl->tpl_vars['product']->value['variants'])){?>
							<table class="table table-condensed table-bordered">
								<tr>
									<th>Variant name</th>
									<th>SKU</th>
									<th>Price</th>
								</tr>
								<?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value){
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['variant']->key;
?>
									<tr>
										<td>
											<div class="with-actions">
												<?php echo $_smarty_tpl->tpl_vars['variant']->value['name'];?>

												<code class="act">
													<a class="view-link" href="/products/variant/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/variants/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">edit</a>
												</code>
											</div>
										</td>
										<?php if ($_smarty_tpl->tpl_vars['variant']->value['sku']){?>
											<td><?php echo $_smarty_tpl->tpl_vars['variant']->value['sku'];?>
</td>
										<?php }else{ ?>
											<td class="muted"><?php echo $_smarty_tpl->tpl_vars['product']->value['sku'];?>
</td>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['variant']->value['price']){?>
											<td><?php echo money($_smarty_tpl->tpl_vars['variant']->value['price']);?>
</td>
										<?php }else{ ?>
											<td class="muted"><?php echo money($_smarty_tpl->tpl_vars['product']->value['price']);?>
</td>
										<?php }?>
									</tr>
								<?php } ?>
							</table>
						<?php }else{ ?>
							<table class="table table-bordered">
								<tr>
									<td><a href="/products/variant/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="view-link">Add variant &rarr;</a></td>
								</tr>
							</table>
						<?php }?>
					</div>
					<div class="tab-pane pricing <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=='pricing'){?>active<?php }?>">
						
					</div>
					<div class="tab-pane images <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="images"){?>active<?php }?>">
						<div class="row">
							<?php render(array("view" => "imageset", "for" => $_smarty_tpl->tpl_vars['product']->value, "type" => "products")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
						</div>
					</div>
					<div class="tab-pane categories <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="categories"){?>active<?php }?>">
					
						<input type="hidden" name="product[categories]" value="" />
						
						<?php if (!isset($_smarty_tpl->tpl_vars['categories'])) $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['categories']->value = get("/categories",array('parent_id'=>null))){?>
							<table class="table table-bordered table-condensed">
								<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['category']->value['children']){?>
										<tr>
											<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</th>
										</tr>
										
										<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
											<tr>
												<td class="checkbox">
													<input type="checkbox" name="product[categories][]" value="<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['category_ids']&&in($_smarty_tpl->tpl_vars['child']->value['id'],$_smarty_tpl->tpl_vars['product']->value['category_ids'])){?>checked="checked"<?php }?> id="category_<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
" />
												</td>
												<td>
													<label for="category_<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</label>
												</td>
											</tr>
										<?php } ?>
									<?php }?>
								<?php } ?>
							</table>
							<div class="row">
								<div class="field control-group span4">
									<label>Primary category</label>
									<select name="product[primary_category_id]">
										<option value="">...</option>
										<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
											<optgroup label="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
">
												<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
													<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['primary_category_id']==$_smarty_tpl->tpl_vars['child']->value['id']), null, 0);?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value){?>selected="selected"<?php }?>>
														<?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>

													</option>
												<?php } ?>
											</optgroup>
										<?php } ?>
									</select>
								</div>
							</div>
						<?php }else{ ?>
							<table class="table table-bordered">
								<tr>
									<td>
										None found.
										<a href="/categories/new" class="view-link">Create category &rarr;</a>
									</td>
								</tr>
							</table>
						<?php }?>
						
					</div>
					<div class="tab-pane stock <?php if ($_smarty_tpl->tpl_vars['params']->value['tab']=="stock"){?>active<?php }?>">
					
						<div class="row">
							<div class="field out-of-stock span4">
								<label class="checkbox">
									<input type="hidden" name="product[out_of_stock]" value="false" />
									<input type="checkbox" name="product[out_of_stock]" value="true" <?php if ($_smarty_tpl->tpl_vars['product']->value['out_of_stock']){?>checked="checked"<?php }?> />
									Out of stock?
								</label>
							</div>
						</div>
						<fieldset class="out-of-stock">
							<div class="row">
								<div class="field span4">
									<label>Message (Optional)</label>
									<textarea name="product[restock_message]" rows="10" placeholder="We're sorry, this item is temporarily out of stock."><?php echo $_smarty_tpl->tpl_vars['product']->value['restock_message'];?>
</textarea>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
			<?php }else{ ?>
				<p>Oops.</p>
			<?php }?>
		</div>
		<div class="view-footer actions">
			<?php if ($_smarty_tpl->tpl_vars['product']->value){?>
				<span class="tab-controls default pricing images categories stock">
					<button type="submit" class="btn btn-primary">Save changes</button>
				</span>
				<span class="tab-controls variants">
					<button type="button" class="btn btn-success view-link" data-href="/products/variant/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/variants"><i class="icon-plus-sign icon-white"></i> New variant</button>
				</span>
				<button type="button" class="btn view-cancel">Close</button>
				<?php if (!$_smarty_tpl->tpl_vars['product']->value['is_deleted']){?>
					<a class="trash view-link" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
?product[:delete]=true" data-post="true"><i class="icon-trash"></i></a>
				<?php }else{ ?>
					<a class="trash view-link undo" href="/products/entry/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
?product[:restore]=true" data-post="true">Undo <i class="icon-trash"></i></a>
				<?php }?>
			<?php }?>
		</div>
	</form>
</div>
<?php }} ?>