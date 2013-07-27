<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 13:02:33
         compiled from "/var/www/fwdcommerce/app/templates/alpha/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:23444392751ee7ee90a12f0-66082939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1bfbf1df9de682ee6faddc1fda96ea4c84efb07' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/admin/index.html',
      1 => 1374584067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23444392751ee7ee90a12f0-66082939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ee9102961_23791305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ee9102961_23791305')) {function content_51ee7ee9102961_23791305($_smarty_tpl) {?><?php render(array("view" => "admin/index.php")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>

<?php if ($_smarty_tpl->tpl_vars['request']->value['action']=="upload"){?>
	<?php return; ?>
<?php }?>

<script type="text/javascript">

	// Prefix all relative URLs with /admin.
	function url_needs_prefix (url)
	{
		if (url && url.indexOf('/') == 0 && url.indexOf('/admin') == -1)
		{
			url = '/admin'+url;
		}
		return url;
	}
	$('a').each(function ()
	{
		var url = this.getAttribute('href');
		this.href = url_needs_prefix(url);
	});
	$('form').each(function ()
	{
		var url = this.getAttribute('action');
		this.action = url_needs_prefix(url);
	});
	$('#search').each(function ()
	{
		this.action = '/admin';
	});
	$('#list, #info').each(function ()
	{
		var url = $(this).data('url');
		$(this).data('url', url_needs_prefix(url));
	});
	$('.field .image').each(function ()
	{
		var url = $(this).data('upload');
		$(this).data('upload', url_needs_prefix(url));
	});
	$('.view-link, button').each(function ()
	{
		var url = $(this).data('href');
		$(this).data('href', url_needs_prefix(url));
	});

</script><?php }} ?>