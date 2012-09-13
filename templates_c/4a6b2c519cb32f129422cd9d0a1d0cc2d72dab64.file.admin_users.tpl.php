<?php /* Smarty version Smarty-3.1.8, created on 2012-05-01 11:17:16
         compiled from "/home/luckyth1/public_html/bespokesofasuk.co.uk/templates/admin_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8179281334fa00c8c1a67e4-17681086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a6b2c519cb32f129422cd9d0a1d0cc2d72dab64' => 
    array (
      0 => '/home/luckyth1/public_html/bespokesofasuk.co.uk/templates/admin_users.tpl',
      1 => 1335429471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8179281334fa00c8c1a67e4-17681086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa00c8c638591_68170768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa00c8c638591_68170768')) {function content_4fa00c8c638591_68170768($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  

	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
<?php echo $_smarty_tpl->getSubTemplate ("admin_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
<?php echo $_smarty_tpl->getSubTemplate ("admin_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



			<h2 id="page-intro">User Management</h2>
			<div class="content-box"><!-- Start Content Box -->
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="add"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_users_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="edit"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_users_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="delete"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_users_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_users_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }}}?>
				
			</div> <!-- End .content-box -->
			
			
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>