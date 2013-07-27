<?php /* Smarty version Smarty-3.1.8, created on 2013-07-26 08:53:11
         compiled from "/var/www/fwdcommerce/app/templates/alpha/layouts/default.html" */ ?>
<?php /*%%SmartyHeaderCode:180759878751ee7ee8ab4298-25107217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7316df08b11d550001b54785d2580857dbb55916' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/layouts/default.html',
      1 => 1374828788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180759878751ee7ee8ab4298-25107217',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee7ee8bb5d79_63893271',
  'variables' => 
  array (
    'request' => 0,
    'params' => 0,
    'category' => 0,
    'child' => 0,
    'content_for_layout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee7ee8bb5d79_63893271')) {function content_51ee7ee8bb5d79_63893271($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['page_description'], ENT_QUOTES, 'UTF-8', true);?>
" />
	<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['page_keywords'], ENT_QUOTES, 'UTF-8', true);?>
" />
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	
	<title>
		<?php if ($_smarty_tpl->tpl_vars['request']->value['page_title']){?>
			<?php echo $_smarty_tpl->tpl_vars['request']->value['page_title'];?>
 | <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['request']->value['header_logo_block']['value']);?>

		<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['request']->value['header_logo_block']['value'];?>
 | Forward: the platform for custom e-commerce
		<?php }?>
	</title>
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap.min.css">
	
	<!-- Default Theme CSS -->
	<link rel="stylesheet" href="/alpha/css/default.css" />
	
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body id="alpha_<?php echo $_smarty_tpl->tpl_vars['request']->value['action'];?>
">
	<div id="page">
		<div id="header">
			<div class="header-top">
				<div class="container">
					<h2 class="header-logo">
						<a href="/">
							<img src="<?php echo image(array('type'=>'entries','id'=>$_smarty_tpl->tpl_vars['request']->value['header_logo_block']['id'],'name'=>'image'),$_smarty_tpl);?>
" />
							<?php echo $_smarty_tpl->tpl_vars['request']->value['header_logo_block']['value'];?>

						</a>
					</h2>
					<nav class="header-nav-sub">
						<?php if ($_smarty_tpl->tpl_vars['request']->value['layout_for_checkout']){?>
							<b class="header-nav-item">Need help? <?php echo $_smarty_tpl->tpl_vars['request']->value['contact_phone_block']['value'];?>
</b>
						<?php }else{ ?>
							<span class="header-nav-item" id="header-nav-cart">
								<a href="/cart" class="count"><?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['request']->value['cart']['items']);?>
<?php $_tmp1=ob_get_clean();?><?php echo pluralize(array("word" => $_tmp1." Items")); ?></a>
								<a href="/cart" class="checkout">Checkout</a>
							</span>
							<form class="header-nav-item header-nav-search" method="get" action="/search">
								<input type="text" name="q" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['q'];?>
"
									placeholder="Search..." class="query placeholder" />
							</form>
						<?php }?>
					</nav>
				</div>
			</div>
			<nav class="header-nav-main">
				<div class="container">
					<?php if ($_smarty_tpl->tpl_vars['request']->value['layout_for_checkout']){?>
						<span class="header-nav-item">
							<a class="header-nav-item" href="/cart">
								Back to Cart
							</a>
						</span>
					<?php }else{ ?>
						
						<?php $_smarty_tpl->createLocalArrayVariable('request', null, 0);
$_smarty_tpl->tpl_vars['request']->value['nav_categories'] = get("/categories",array('parent_id'=>null));?>
						<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['request']->value['nav_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
							<nav class="header-nav-item">
								<a href="/categories/<?php echo $_smarty_tpl->tpl_vars['category']->value['slug'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>

								</a>
								<section>
									<ul class="header-nav-menu">
										<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
?>
											<li>
												<a href="/categories/<?php echo $_smarty_tpl->tpl_vars['child']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a>
											</li>
											<?php if (count($_smarty_tpl->tpl_vars['category']->value['children'])>10&&$_smarty_tpl->tpl_vars['child']->iteration%round((count($_smarty_tpl->tpl_vars['category']->value['children'])/2))==0){?>
												</ul><ul class="header-nav-menu">
											<?php }?>
										<?php } ?>
									</ul>
								</section>
							</nav>
						<?php } ?>
					<?php }?>
				</div>
			</nav>
		</div>
		<div id="content">
			<div class="container">
				<div class="content">

					<?php echo $_smarty_tpl->tpl_vars['content_for_layout']->value;?>

					
				</div>
			</div>
		</div>
		<div id="footer">
			<?php if (!$_smarty_tpl->tpl_vars['request']->value['layout_for_checkout']){?>
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<section class="about span4">
								<h5 class="footer-header">About</h5>
								<p><?php echo $_smarty_tpl->tpl_vars['request']->value['about_summary_block']['value'];?>
</p>
								<p><a href="/pages/about">More About Us</a></p>
							</section>
							<section class="links span2 offset1">
								<h5 class="footer-header">Shop</h5>
								<ul class="footer-menu">
									<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['request']->value['nav_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
										<li><a href="/categories/<?php echo $_smarty_tpl->tpl_vars['category']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
									<?php } ?>
								</ul>
							</section>
							<section class="signup span4 offset1">
								<h5 class="footer-header">Newsletter</h5>
								<form class="signup-newsletter" method="post" action="/subscribe">
									<div class="form-field">
										<label>Get discounts and updates by e-mail</label>
										<input type="email" name="email" placeholder="your@email.com" />
										<input type="hidden" name="description" value="Subscribed from <?php echo $_smarty_tpl->tpl_vars['request']->value['uri'];?>
" />
									</div>
									<div class="form-actions">
										<button type="submit" class="btn">Sign Up</button>
									</div>
								</form>
							</section>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<!-- Social network links -->
						<div class="social-icons pull-left">
							<a class="blog" href="/blog">Blog</a> &nbsp;
							<a class="fb" target="_blank" href="">Facebook</a> &nbsp;
							<a class="tw" target="_blank" href="">Twitter</a> &nbsp;
							<a class="gp" target="_blank" href="">Google+</a> &nbsp;
							<a class="pn" target="_blank" href="">Pinterest</a>
						</div>
						<small class="footer-attrib pull-right">
							<a href="/pages/privacy">Privacy</a> &mdash;
							<a href="/pages/terms">Terms</a> &mdash;
							Copyright &copy; <?php echo date("Y");?>
 &mdash; Powered by <a href="http://getfwd.com">Forward Commerce</a>
						</small>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
	
	<!-- Default Theme JS -->
	<script type="text/javascript" src="/alpha/js/default.js"></script>

</body>
</html>
<?php }} ?>