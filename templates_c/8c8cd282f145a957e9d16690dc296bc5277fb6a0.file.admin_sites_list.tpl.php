<?php /* Smarty version Smarty-3.1.8, created on 2012-05-01 06:55:31
         compiled from "/home/luckyth1/public_html/bespokesofasuk.co.uk/templates/admin_sites_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7418750294f9fcf33b31960-94794181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c8cd282f145a957e9d16690dc296bc5277fb6a0' => 
    array (
      0 => '/home/luckyth1/public_html/bespokesofasuk.co.uk/templates/admin_sites_list.tpl',
      1 => 1335429468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7418750294f9fcf33b31960-94794181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sites' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9fcf33bd3989_89654828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9fcf33bd3989_89654828')) {function content_4f9fcf33bd3989_89654828($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_relative_date')) include '/home/luckyth1/public_html/libs/plugins/modifier.relative_date.php';
?><div class="content-box-header">

<h3>Sites List</h3>


<div class="clear"></div>

</div> <!-- End .content-box-header -->

<div class="content-box-content">

<table>

<thead>
<tr>
<th><input class="check-all" type="checkbox" /></th>
<th>Website URL</th>
<th>Name</th>
<th>Last Updated</th>
<th>Edit</th>
</tr>

</thead>

<tfoot>
<tr>
<td colspan="6">
<!--    <div class="bulk-actions align-left">
<select name="dropdown">
<option value="option1">Choose an action...</option>
<option value="option2">Edit</option>
<option value="option3">Delete</option>
</select>
<a class="button" href="#">Apply to selected</a>
</div>

<div class="pagination">
<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
<a href="#" class="number" title="1">1</a>
<a href="#" class="number" title="2">2</a>
<a href="#" class="number current" title="3">3</a>
<a href="#" class="number" title="4">4</a>
<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
</div> --> <!-- End .pagination -->
<div class="clear"></div>
</td>
</tr>
</tfoot>
<tbody>
<?php  $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['site']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['site']->key => $_smarty_tpl->tpl_vars['site']->value){
$_smarty_tpl->tpl_vars['site']->_loop = true;
?>
<tr>
<td><input type="checkbox" /></td>
<td><a href="index.php?page=sites&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['site']->value['server_name'];?>
</a></td>
<td><?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
</td>
<td><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['site']->value['updated']);?>
</td>
<td>
<a href="index.php?page=sites&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
<a href="index.php?page=sites&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
<!--    <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
-->     </td>

</tr>
<?php } ?>
</tbody>

</table>

</div> <!-- End Content Box Content -->
<?php }} ?>