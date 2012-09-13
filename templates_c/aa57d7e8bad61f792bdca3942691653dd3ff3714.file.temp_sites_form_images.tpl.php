<?php /* Smarty version Smarty-3.1.8, created on 2012-05-01 06:58:40
         compiled from "/home/luckyth1/public_html/bespokesofasuk.co.uk/templates/temp_sites_form_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17052897024f9fcff0a4bed4-06265097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa57d7e8bad61f792bdca3942691653dd3ff3714' => 
    array (
      0 => '/home/luckyth1/public_html/bespokesofasuk.co.uk/templates/temp_sites_form_images.tpl',
      1 => 1335429476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17052897024f9fcff0a4bed4-06265097',
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
  'unifunc' => 'content_4f9fcff0c98391_00215144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9fcff0c98391_00215144')) {function content_4f9fcff0c98391_00215144($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/luckyth1/public_html/libs/plugins/function.html_options.php';
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