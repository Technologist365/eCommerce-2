<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:58
         compiled from "/var/www/fwdcommerce/app/templates/admin/_search.html" */ ?>
<?php /*%%SmartyHeaderCode:138376698551ee7f02b9d6c4-72207584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b7f429a0e18b464e7fe8bfcb400a971f8a9903f' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/_search.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138376698551ee7f02b9d6c4-72207584',
  'function' => 
  array (
    'action_link' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'params' => 0,
    'query' => 0,
    'name' => 0,
    'for' => 0,
    'action' => 0,
    'label' => 0,
    'class' => 0,
    'is_selected' => 0,
    'selected_class' => 0,
    'action_limit' => 0,
    'actions' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7f02cd87e5_50202975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7f02cd87e5_50202975')) {function content_51ee7f02cd87e5_50202975($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.capitalize.php';
?><?php ob_start(); render(array("view" => "admin")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(put("/session/search/".($_smarty_tpl->tpl_vars['for']->value),$_smarty_tpl->tpl_vars['params']->value['search']), null, 0);?>
	
<form id="search" class="form-search" method="post" action="">
	<input type="text" class="query input-medium search-query " name="search" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" placeholder="Search <?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['for']->value : $tmp);?>
" autocomplete="off" maxlength="50" />
	<?php if ($_smarty_tpl->tpl_vars['query']->value){?>
		<a class="clear" href="?search=">&times;</a>
	<?php }?>
	<div class="actions">
	
		<?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/fwdcommerce/core/library/smarty/libs/plugins/modifier.capitalize.php';
?><?php if (!function_exists('smarty_template_function_action_link')) {
    function smarty_template_function_action_link($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['action_link']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
			<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['action']->value==$_smarty_tpl->tpl_vars['label']->value||(!$_smarty_tpl->tpl_vars['action']->value&&$_smarty_tpl->tpl_vars['params']->first)){?><?php echo "selected";?><?php }else{ ?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['is_selected'] = new Smarty_variable($_tmp1, null, 0);?>
			<a class="action <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['is_selected']->value){?><?php echo $_smarty_tpl->tpl_vars['selected_class']->value;?>
<?php }?>" href="" data-query="action=<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
&<?php echo http_build_query(array('where'=>$_smarty_tpl->tpl_vars['params']->value['where']));?>
" title="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['label']->value);?>
">
				<?php if ($_smarty_tpl->tpl_vars['params']->value['icon']){?>
					<i class="<?php echo $_smarty_tpl->tpl_vars['params']->value['icon'];?>
 <?php if ($_smarty_tpl->tpl_vars['is_selected']->value){?>icon-white<?php }?>"></i><span> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['label']->value);?>
</span>
				<?php }else{ ?>
					<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['label']->value);?>

				<?php }?>
			</a>
		<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

		
		
		<?php if (!$_smarty_tpl->tpl_vars['action_limit']->value&&$_smarty_tpl->tpl_vars['action_limit']->value!==false){?>
		
			<?php $_smarty_tpl->tpl_vars['action_limit'] = new Smarty_variable(4, null, 0);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['action_limit']->value&&count($_smarty_tpl->tpl_vars['actions']->value)>$_smarty_tpl->tpl_vars['action_limit']->value){?>
			<div class="btn-group">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					<u class="current"><?php echo (($tmp = @(singularize(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value))))===null||$tmp==='' ? "All" : $tmp);?>
</u> <?php echo $_smarty_tpl->tpl_vars['for']->value;?>

					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['params']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['label']->value = $_smarty_tpl->tpl_vars['params']->key;
 $_smarty_tpl->tpl_vars['params']->index++;
 $_smarty_tpl->tpl_vars['params']->first = $_smarty_tpl->tpl_vars['params']->index === 0;
?>
						<li><?php smarty_template_function_action_link($_smarty_tpl,array());?>
</li>
					<?php } ?>
				</ul>
			</div>
		<?php }else{ ?>
			<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['params']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['label']->value = $_smarty_tpl->tpl_vars['params']->key;
 $_smarty_tpl->tpl_vars['params']->index++;
 $_smarty_tpl->tpl_vars['params']->first = $_smarty_tpl->tpl_vars['params']->index === 0;
?>
				<?php smarty_template_function_action_link($_smarty_tpl,array('class'=>"btn",'selected_class'=>"btn-primary"));?>

			<?php } ?>
		<?php }?>
	</div>
</form>

<script type="text/javascript">

	// Search submit.
	$('#search').submit(function (event, url, data)
	{
		$input = $('input.query', this);
		
		$('#list').each(function ()
		{
			if (url)
			{
				$('#search').attr('action', url);
				$form = $('<form method="get" action="'+url+'"><input type="hidden" name="search" value="'+$input.val()+'" /></form>');
				$form.appendTo('body').trigger('submit')
				return true;
			}
			else
			{	
				// Use active action tab also.
				if (qs = $('#search .actions a.selected').data('query'))
				{
					var nvpair = {};
					var pairs = qs.split('&');
					$.each(pairs, function(i, v)
					{
						var pair = v.split('=');
						nvpair[unescape(pair[0])] = unescape(pair[1]);
					});
					
					data = nvpair;
				}
				
				// Data?
				data = data || {};
				data.search = $input.val();
				
				// Trigger list load.
				$(this).trigger('load', [null, data]);
			}
		});
		
		return false;
	});
	
	// Search clear.
	$('#search .clear').click(function ()
	{
		$('#search input.query').val('');
		$('#search').trigger('submit');
		return false;
	});
	
	// Focus on search input?
	$('#search input.query').each(function ()
	{
		$search = $(this);
		
		$search.focus();
	});
	
	// After ready.
	$(document).ready(function ()
	{
		// Search context autocomplete.
		$('#search input.query').typeahead({
			source: [
				'<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
',
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = array('orders','products','accounts'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
					<?php if ($_smarty_tpl->tpl_vars['for']->value!=$_smarty_tpl->tpl_vars['item']->value){?>'<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
'<?php if (!$_smarty_tpl->tpl_vars['item']->last){?>,<?php }?><?php }?>
				<?php } ?>
			],
			matcher: function (item)
			{
				return true;
			},
			sorter: function (items)
			{
				return items;
			},
			highlighter: function (item)
			{
				if (item == '<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
')
				{
					item = '<strong>'+item+'</strong>';
				}
				return '"'+this.query+'" in '+item;
			}
		})
		.bind('autosearch', function (event, context)
		{
			var url = null;
			if (context != '<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
' && context != "")
			{
				url = '/'+context;
			}
			
			$('#search').trigger('submit', [url]);
		});
	});
	
	// Search actions.
	$('#search .actions a.action').click(function ()
	{
		$(this).closest('.actions').find('a').removeClass('selected');
		$(this).addClass('selected');

		if (!$(this).closest('.btn-group').length)
		{
			$(this).closest('.actions').find('a').removeClass('btn-primary').find('i').removeClass('icon-white');
			$(this).addClass('btn-primary').find('i').addClass('icon-white');
		}
		
		$('#search').trigger('submit');
		return false;
	});

</script><?php }} ?>