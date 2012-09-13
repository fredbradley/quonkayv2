<?php /* Smarty version Smarty-3.1.8, created on 2012-09-13 14:21:28
         compiled from "/Users/fredbradley/Sites/smarty_site/quonkay/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10412688605051ddd89aa9a3-69164283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a3a9d498220d2094f3dd57cd04e6962dd9c53b' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/quonkay/templates/admin_notification.tpl',
      1 => 1335404220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10412688605051ddd89aa9a3-69164283',
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
  'unifunc' => 'content_5051ddd89b58e9_82223898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5051ddd89b58e9_82223898')) {function content_5051ddd89b58e9_82223898($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
  <div class="notification information png_bg">
                                                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                                                        <div> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
                                                       </div>
                                                </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>