<?php /* Smarty version Smarty-3.1.11, created on 2012-09-13 16:21:03
         compiled from "/Users/fredbradley/Sites/quonkay/templates/quonkay/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8112357305051f9df5eed73-38607072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a03c36bbceac832f5c4526a766b8027c24550194' => 
    array (
      0 => '/Users/fredbradley/Sites/quonkay/templates/quonkay/admin_login.tpl',
      1 => 1336108680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8112357305051f9df5eed73-38607072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE' => 0,
    'msg' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5051f9df632fa7_27126465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5051f9df632fa7_27126465')) {function content_5051f9df632fa7_27126465($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body id="login">
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
				<h1><?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
</h1>
				<!-- Logo (221px width) -->
				<a href="http://www.webvid.co.uk"><img id="logo" src="../assets/images/sofa_logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
 logo" /></a>
			</div> <!-- End #logn-top -->
			<div id="login-content">
				<form action="index.php" method="POST">
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> 
						<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

					<?php }?>
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>
					<div class="notification error png_bg">
						<div>
							<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

						</div>
					</div>
					<?php }?>
					
					<p>
						<label>Username</label>
						<input class="text-input" name="username" type="text" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="password" />
					</p>
			<!-- COMMENTED OUT THE REMEMBER ME CHECKBOX AS THIS SCRIPT IS NOT USING COOKIES -->
<!--			 		<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" />Remember me
					</p> -->
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>
				</form>
				
				<div class="clear"></div>
				<p>developed by <a href="http://webvid.co.uk">webvid.co.uk</a> | e: <a href="mailto:hello@webvid.co.uk?subject=Support Query">hello@webvid.co.uk</a></p>
				<p>t: <strong>020 81331728</strong> &copy luckythirteen ltd 2012</p>

			</div> <!-- End #login-content -->
		</div> <!-- End #login-wrapper -->	
		
  </body>  
</html>

<?php }} ?>