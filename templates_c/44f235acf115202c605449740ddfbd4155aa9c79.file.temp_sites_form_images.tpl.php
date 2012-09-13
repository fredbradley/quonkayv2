<?php /* Smarty version Smarty-3.1.8, created on 2012-04-27 03:52:17
         compiled from "/home/luckyth1/public_html/mediagym.co.uk/templates/temp_sites_form_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10379755014f9a5e41149505-56692936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44f235acf115202c605449740ddfbd4155aa9c79' => 
    array (
      0 => '/home/luckyth1/public_html/mediagym.co.uk/templates/temp_sites_form_images.tpl',
      1 => 1335429476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10379755014f9a5e41149505-56692936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'diroptions' => 0,
    'edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9a5e41233738_66701171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9a5e41233738_66701171')) {function content_4f9a5e41233738_66701171($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/luckyth1/public_html/libs/plugins/function.html_options.php';
?><fieldset>
<p>
	<label>Image One</label>
	<?php echo smarty_function_html_options(array('name'=>"gallery1",'class'=>"medium-input",'output'=>$_smarty_tpl->tpl_vars['diroptions']->value,'values'=>$_smarty_tpl->tpl_vars['diroptions']->value,'selected'=>$_smarty_tpl->tpl_vars['edit']->value['gallery1']),$_smarty_tpl);?>

</p>
<p>
	<label>Image Two</label>
	<?php echo smarty_function_html_options(array('name'=>"gallery2",'class'=>"medium-input",'values'=>$_smarty_tpl->tpl_vars['diroptions']->value,'output'=>$_smarty_tpl->tpl_vars['diroptions']->value,'selected'=>$_smarty_tpl->tpl_vars['edit']->value['gallery2']),$_smarty_tpl);?>

</p>
<p>
	<label>Image Three</label>
	<?php echo smarty_function_html_options(array('name'=>"gallery3",'class'=>"medium-input",'values'=>$_smarty_tpl->tpl_vars['diroptions']->value,'output'=>$_smarty_tpl->tpl_vars['diroptions']->value,'selected'=>$_smarty_tpl->tpl_vars['edit']->value['gallery3']),$_smarty_tpl);?>

</p>
<p>
	<label>Image Four</label>
	<?php echo smarty_function_html_options(array('name'=>"gallery4",'class'=>"medium-input",'values'=>$_smarty_tpl->tpl_vars['diroptions']->value,'output'=>$_smarty_tpl->tpl_vars['diroptions']->value,'selected'=>$_smarty_tpl->tpl_vars['edit']->value['gallery4']),$_smarty_tpl);?>

</p>
<p>
	<label>Image Five</label>
	<?php echo smarty_function_html_options(array('name'=>"gallery5",'class'=>"medium-input",'values'=>$_smarty_tpl->tpl_vars['diroptions']->value,'output'=>$_smarty_tpl->tpl_vars['diroptions']->value,'selected'=>$_smarty_tpl->tpl_vars['edit']->value['gallery5']),$_smarty_tpl);?>

</p>
</fieldset>
<div class="clearfix clear"></div>
<?php }} ?>