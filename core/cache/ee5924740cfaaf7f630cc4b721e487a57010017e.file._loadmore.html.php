<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:58
         compiled from "/var/www/fwdcommerce/app/templates/admin/_loadmore.html" */ ?>
<?php /*%%SmartyHeaderCode:207491826051ee7f02de6816-38025533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee5924740cfaaf7f630cc4b721e487a57010017e' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/_loadmore.html',
      1 => 1374571701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207491826051ee7f02de6816-38025533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'request' => 0,
    'with' => 0,
    'query' => 0,
    'title' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7f02e39e98_37334255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7f02e39e98_37334255')) {function content_51ee7f02e39e98_37334255($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['url']->value)===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['request']->value['uri']) : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['with']->value['current']<count($_smarty_tpl->tpl_vars['with']->value['pages'])){?>
	<li class="loadmore">
		<?php $_smarty_tpl->createLocalArrayVariable('query', null, 0);
$_smarty_tpl->tpl_vars['query']->value['page'] = $_smarty_tpl->tpl_vars['with']->value['current']+1;?>
		<div class="loadmore">
			<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/results?<?php echo http_build_query($_smarty_tpl->tpl_vars['query']->value);?>
"><?php if ($_smarty_tpl->tpl_vars['title']->value){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }else{ ?>Load More<?php if ($_smarty_tpl->tpl_vars['label']->value){?> <?php echo pluralize(array("word" => ucfirst($_smarty_tpl->tpl_vars['label']->value), "if_many" => $_smarty_tpl->tpl_vars['with']->value['count'])); ?><?php }?><?php }?></a>
		</div>
	
		<script type="text/javascript">
		
			// Load more.
			$loadmore = $('li.loadmore').click(function ()
			{
				var url = $(this).find('a').attr('href');
				var orig_url = $('#list').data('url');
				
				$('.list-results').opacity(0.6);
				$('#list').trigger('load', [url, null, "append"]);
				$(this).closest('li').remove();
				
				$('#list').data('url', orig_url);
				
				return false;
			});
		
		</script>
	</li>
<?php }?><?php }} ?>