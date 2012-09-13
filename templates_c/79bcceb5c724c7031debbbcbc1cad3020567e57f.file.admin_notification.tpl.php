<?php /* Smarty version Smarty-3.1.8, created on 2012-09-13 14:56:23
         compiled from "/Users/fredbradley/Sites/smarty_site/quonkay/templates/quonkay/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12116015525051e6070ae5c7-78912503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79bcceb5c724c7031debbbcbc1cad3020567e57f' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/quonkay/templates/quonkay/admin_notification.tpl',
      1 => 1335404220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12116015525051e6070ae5c7-78912503',
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
  'unifunc' => 'content_5051e6070b8ca7_97592292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5051e6070b8ca7_97592292')) {function content_5051e6070b8ca7_97592292($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
  <div class="notification information png_bg">
                                                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                                                        <div> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
                                                       </div>
                                                </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>