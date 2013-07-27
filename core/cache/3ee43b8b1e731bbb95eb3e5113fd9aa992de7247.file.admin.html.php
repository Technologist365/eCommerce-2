<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 09:53:04
         compiled from "/var/www/fwdcommerce/app/templates/admin/layouts/admin.html" */ ?>
<?php /*%%SmartyHeaderCode:174067244751ee7eea62c531-39877527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ee43b8b1e731bbb95eb3e5113fd9aa992de7247' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/admin/layouts/admin.html',
      1 => 1374659579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174067244751ee7eea62c531-39877527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7eea74e419_31180022',
  'variables' => 
  array (
    'request' => 0,
    'channel' => 0,
    'name' => 0,
    'label' => 0,
    'menu' => 0,
    'section' => 0,
    'channels' => 0,
    'content_for_layout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7eea74e419_31180022')) {function content_51ee7eea74e419_31180022($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php if ($_smarty_tpl->tpl_vars['request']->value['page_title']){?><?php echo $_smarty_tpl->tpl_vars['request']->value['page_title'];?>
 |<?php }?> Admin</title>
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['request']->value['page_description'];?>
">

		<!-- CSS -->
		<link href="/bootstrap/2.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="/admin/css/admin.responsive.css" rel="stylesheet">
		<link href="/admin/css/admin.css" rel="stylesheet">
		
		<!-- jQuery -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		
		<!-- No IE support yet -->
		<!--[if IE]>
			<script> if (location.pathname != '/browser-support') { location.href = '/browser-support'; } </script>
		<![endif]-->
	</head>

	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>		
					</a>
					<a class="brand" href="/">Admin</a>
					<div class="nav-collapse">
						<ul class="nav">
							<?php if ($_smarty_tpl->tpl_vars['request']->value['account']){?>
								<li class="<?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],"/orders")!==false){?>active<?php }?>"><a href="/orders">Orders</a></li>
								<li class="<?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],"/carts")!==false){?>active<?php }?>"><a href="/carts">Carts</a></li>
								<li class="<?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],"/accounts")!==false){?>active<?php }?>"><a href="/accounts">Accounts</a></li>
								<li class="<?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],"/discounts")!==false){?>active<?php }?>"><a href="/discounts">Discounts</a></li>
								<li class="<?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],"/products")!==false){?>active<?php }?>"><a href="/products">Products</a></li>
								<li class="<?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],"/categories")!==false){?>active<?php }?>"><a href="/categories">Categories</a></li>
								<li class="divider-vertical"></li>
								<?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable(array('Content'=>array()), null, 0);?>
								<?php  $_smarty_tpl->tpl_vars['channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channel']->_loop = false;
 $_from = get("/channels"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channel']->key => $_smarty_tpl->tpl_vars['channel']->value){
$_smarty_tpl->tpl_vars['channel']->_loop = true;
?>
									<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable(explode(":",$_smarty_tpl->tpl_vars['channel']->value['name']), null, 0);?>
									<?php $_smarty_tpl->tpl_vars['label'] = new Smarty_variable(($_smarty_tpl->tpl_vars['name']->value[1] ? (trim($_smarty_tpl->tpl_vars['name']->value[0])) : "Content"), null, 0);?>
									<?php $_smarty_tpl->createLocalArrayVariable('menu', null, 0);
$_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->tpl_vars['label']->value][] = array('name'=>(($tmp = @$_smarty_tpl->tpl_vars['name']->value[1])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['name']->value[0]) : $tmp),'slug'=>$_smarty_tpl->tpl_vars['channel']->value['slug']);?>
								<?php } ?>
								<?php  $_smarty_tpl->tpl_vars['channels'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channels']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['channels']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['channels']->iteration=0;
 $_smarty_tpl->tpl_vars['channels']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['channels']->key => $_smarty_tpl->tpl_vars['channels']->value){
$_smarty_tpl->tpl_vars['channels']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['channels']->key;
 $_smarty_tpl->tpl_vars['channels']->iteration++;
 $_smarty_tpl->tpl_vars['channels']->index++;
 $_smarty_tpl->tpl_vars['channels']->first = $_smarty_tpl->tpl_vars['channels']->index === 0;
 $_smarty_tpl->tpl_vars['channels']->last = $_smarty_tpl->tpl_vars['channels']->iteration === $_smarty_tpl->tpl_vars['channels']->total;
?>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['section']->value;?>
 <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<?php  $_smarty_tpl->tpl_vars['channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channel']->key => $_smarty_tpl->tpl_vars['channel']->value){
$_smarty_tpl->tpl_vars['channel']->_loop = true;
?>
												<li><a href="/entries/<?php echo $_smarty_tpl->tpl_vars['channel']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['channel']->value['name'];?>
</a></li>
											<?php } ?>
											<?php if ($_smarty_tpl->tpl_vars['channels']->first){?>
												<li class="divider"></li>
												<li><a href="/channels">Manage channels</a></li>
											<?php }?>
										</ul>
									</li>
									<?php if ($_smarty_tpl->tpl_vars['channels']->last){?>
										<li class="divider-vertical"></li>
									<?php }?>
								<?php } ?>
								<!--<li class="<?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],"/settings")!==false){?>active<?php }?>"><a href="/settings">Settings</a></li>
								<li class="divider-vertical"></li>-->
								<li class="<?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],"/trash")!==false){?>active<?php }?>"><a class="logout" href="/trash"><i class="icon-trash icon-white"></i></a></li>
							<?php }else{ ?>
								<li></li>
							<?php }?>
						</ul>
						<?php if ($_smarty_tpl->tpl_vars['request']->value['account']){?>
							<ul class="nav pull-right sub">
								<li><a class="logout" href="/logout" title="logout"><i class="icon-off icon-white"></i> Logout</a></li>
							</ul>
						<?php }?>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<?php echo $_smarty_tpl->tpl_vars['content_for_layout']->value;?>


		</div>

		<!-- Javascript -->
		<script type="text/javascript" src="/bootstrap/2.0.0/js/bootstrap-dropdown.js"></script>
		<script type="text/javascript" src="/bootstrap/2.0.0/js/bootstrap-typeahead.js"></script>
		<script type="text/javascript" src="/admin/js/admin.js"></script>
		
		<?php render(array("view" => "index/analytics")) ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>
	</body>
</html>
<?php }} ?>