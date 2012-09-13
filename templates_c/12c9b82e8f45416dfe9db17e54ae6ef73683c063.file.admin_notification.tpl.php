<?php /* Smarty version Smarty-3.1.8, created on 2012-05-01 06:55:28
         compiled from "/home/luckyth1/public_html/bespokesofasuk.co.uk/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9571151374f9fcf30ea93a4-54992407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12c9b82e8f45416dfe9db17e54ae6ef73683c063' => 
    array (
      0 => '/home/luckyth1/public_html/bespokesofasuk.co.uk/templates/admin_notification.tpl',
      1 => 1335429465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9571151374f9fcf30ea93a4-54992407',
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
  'unifunc' => 'content_4f9fcf30ecb555_75307246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9fcf30ecb555_75307246')) {function content_4f9fcf30ecb555_75307246($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
  <div class="notification information png_bg">
                                                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                                                        <div> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
                                                       </div>
                                                </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>