<?php /* Smarty version Smarty-3.1.8, created on 2012-09-13 14:27:59
         compiled from "/Users/fredbradley/Sites/smarty_site/quonkay/templates/seriouslysofas/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3064136205051df5fdf4bf7-09554233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7201b02584da93e0b6787f6b24c7915baaf2271' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/quonkay/templates/seriouslysofas/admin_notification.tpl',
      1 => 1335404220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3064136205051df5fdf4bf7-09554233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'dbresult' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5051df5fe00a91_89418067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5051df5fe00a91_89418067')) {function content_5051df5fe00a91_89418067($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
  <div class="notification information png_bg">
                                                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                                                        <div> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
                                                       </div>
                                                </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>