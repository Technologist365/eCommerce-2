<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 15:21:40
         compiled from "/var/www/fwdcommerce/app/templates/alpha/subscribe.html" */ ?>
<?php /*%%SmartyHeaderCode:145111123051f14284677169-15265558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93990b0c32fea7672621e64e25184fae10c8dad7' => 
    array (
      0 => '/var/www/fwdcommerce/app/templates/alpha/subscribe.html',
      1 => 1374662358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145111123051f14284677169-15265558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'email' => 0,
    'existing' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f1428472f057_84143234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f1428472f057_84143234')) {function content_51f1428472f057_84143234($_smarty_tpl) {?><?php ob_start(); render(array("view" => "session")); ob_end_clean(); ?><?php if (isset($GLOBALS['__view_result'])) { return; } ?>


<?php if (!isset($_smarty_tpl->tpl_vars['email'])) $_smarty_tpl->tpl_vars['email'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['email']->value = $_smarty_tpl->tpl_vars['params']->value['email']){?>

	
	<?php $_smarty_tpl->tpl_vars['existing'] = new Smarty_variable(get("/channels/subscribers/entries",array('name'=>strtolower($_smarty_tpl->tpl_vars['email']->value))), null, 0);?>

	
	<?php if (!$_smarty_tpl->tpl_vars['existing']->value){?>
		<?php echo post("/channels/subscribers/entries",array('name'=>strtolower($_smarty_tpl->tpl_vars['email']->value),'description'=>$_smarty_tpl->tpl_vars['params']->value['description'],':validate'=>array('email'=>array('name'))));?>

	<?php }?>

	
	<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['email']->value);?>
<?php $_tmp1=ob_get_clean();?><?php redirect(array("url" => "/subscribe?thanks=".$_tmp1)) ?>
	
<?php }elseif($_smarty_tpl->tpl_vars['params']->value['thanks']){?>

	<div class="content-page">
		<h1 class="content-page-header">
			Welcome <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['thanks'], ENT_QUOTES, 'UTF-8', true);?>

		</h1>
		<article class="content-page-content">
			<p>You may unsubscribe from our e-mails at any time.</p>
			<div class="form-actions">
				<p><a href="/" class="btn">Go Home</a></h3>
			</div>
		</article>
	</div>

<?php }else{ ?>
	
	<div class="content-page">
		<h1 class="footer-header">Subscribe</h1>
		<form class="signup-newsletter" method="post" action="/subscribe">
			<div class="row">
				<div class="form-field span4">
					<label>Get discounts and updates by e-mail</label>
					<input type="email" name="email" placeholder="your@email.com" />
					<input type="hidden" name="description" value="Subscribed from <?php echo $_smarty_tpl->tpl_vars['request']->value['uri'];?>
" />
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn btn-large btn-cta">Sign Up</button>
			</div>
		</form>
	</div>
<?php }?>
<?php }} ?>