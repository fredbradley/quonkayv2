<?php /* Smarty version Smarty-3.1.8, created on 2012-04-27 03:52:17
         compiled from "/home/luckyth1/public_html/mediagym.co.uk/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14047344594f9a5e4101b969-09273883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71fd5cadc17734fb79902b1ac6c6ad0507e26186' => 
    array (
      0 => '/home/luckyth1/public_html/mediagym.co.uk/templates/admin_notification.tpl',
      1 => 1335429465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14047344594f9a5e4101b969-09273883',
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
  'unifunc' => 'content_4f9a5e41080597_97502772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9a5e41080597_97502772')) {function content_4f9a5e41080597_97502772($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
  <div class="notification information png_bg">
                                                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                                                        <div> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
                                                       </div>
                                                </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>