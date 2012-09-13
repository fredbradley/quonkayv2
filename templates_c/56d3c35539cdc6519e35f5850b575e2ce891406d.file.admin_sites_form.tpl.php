<?php /* Smarty version Smarty-3.1.8, created on 2012-04-27 03:58:08
         compiled from "/home/luckyth1/public_html/mediagym.co.uk/templates/admin_sites_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20428191414f9a5e410843b4-12496010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d3c35539cdc6519e35f5850b575e2ce891406d' => 
    array (
      0 => '/home/luckyth1/public_html/mediagym.co.uk/templates/admin_sites_form.tpl',
      1 => 1335517089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20428191414f9a5e410843b4-12496010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9a5e41144452_96307578',
  'variables' => 
  array (
    'action' => 0,
    'edit' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9a5e41144452_96307578')) {function content_4f9a5e41144452_96307578($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/luckyth1/public_html/libs/plugins/modifier.date_format.php';
?><div class="content-box-header">

<h3>Add / Edit A Website</h3>


<div class="clear"></div>

</div> <!-- End .content-box-header -->

<div class="content-box-content">

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='delete'){?>
<form action="index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">
<fieldset class="column-left">
<p>Are you 100% sure you want to delete <span class="highlight"><?php echo $_smarty_tpl->tpl_vars['edit']->value['server_name'];?>
</span> from the database?</p>
<p>There is no recovering this method, apart from adding the entire content of the site again!</p>
</fieldset>
<fieldset class="column-right">
<fieldset class="column-left"><a href="index.php?message=Cancelled"><button class="button-cancel">Cancel</button></a>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
" />
</fieldset><fieldset class="column-right"><input type="submit" class="button-confirm" name="confirm-delete" value="Confirm" />
</fieldset></fieldset>
<div style="clear:both;"></div></form>
<?php }else{ ?>

<! Content Form For Website Starts Here -->

<form action="index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">

<fieldset class=""> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
" />
<h2>Step 1: The SEO Basics</h2>
<br/>
<p>
<label>Website URL (eg. abc.com)</label>
<input class="text-input large-input" type="text" id="server_name" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['server_name'];?>
" name="server_name" />
<br/>
<i><small>no http:// or www. & lower case is preferable.</small></i>
</p>
<input type="hidden" name="template" id="template" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['template'];?>
" />
<p>
<label>Website Title (SEO)</label>
<input class="text-input large-input" type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['name'];?>
"/> 
<br/>
<i><small>text that sits in the tab of your browser & is referenced by Search Engines.</small></i>
</p>
<p>
<label>Relevant Keywords</label>
<textarea class="text-input textarea" type="text" id="keywords" name="keywords" cols="30" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['keywords'];?>
</textarea>
<br/>
<i><small>Separate keywords with a comma. (Use keywords that directly relate to this particular website.)</small></i>
</p>
<p>
<label>Short Description Of Website</label>
<textarea class="text-input textarea" id="description" name="description" cols="30" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['description'];?>
</textarea>
<i><small>Write a short relevant description about the purpose of this website/business. (This will help with Search Engine rankings.)</small></i>

</p>
<br/>
<h2>Step 2: Your Relevant Content</h2>
<br/>
<p>
<label>Main Title Of Your Website (Top Center)</label>
<input class="text-input large-input" type="text"
id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['title'];?>
" maxlength="36"/>
<br/><i><small>Maximum 36 Characters, No HTML</small></i>
</p>
<p><label>Sub-heading Title (Top Left Box) </label>
<input class="text-input large-input" id="offer_subhead" name="offer_subhead" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['offer_subhead'];?>
" maxlength="27"/>
<br/><i><small>Maximum 27 Characters, No HTML</small></i></p>
<p>
<label>Eye Catching Description (Top Left Box)</label>
<textarea class="text-input textarea" id="offer_description" name="offer_description" cols="70" rows="10" maxlength="550"><?php echo $_smarty_tpl->tpl_vars['edit']->value['offer_description'];?>
</textarea>
<br /><i><small>Maximum 550 Characters. Basic HTML tags allowed.&lt;p&gt; - Paragragh&lt;strong&gt; - Bold, &lt;i&gt; - Italic, &lt;br/&gt;- Line Break</small></i>
</p>
<div class="clearfix clear"></div>

<p>
<label>Video (HTML/iFrame Embed Code - Top Right Box)</label>
<textarea class="text-input large-input textarea" id="video" name="video" cols="10" rows="10"><?php echo $_smarty_tpl->tpl_vars['edit']->value['video'];?>
</textarea>
<br/><small>Full Video Embed Code - YouTube/Vimeo/Viddler etc. Display settings must be changed to (w) 598px x (h) 335px or smaller.</small>
<br/><small>Example Embed Code From Vimeo: &lt;iframe src="http://player.vimeo.com/video/40505084?title=0&amp;byline=0&amp;portrait=0" width="598" height="335" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen&gt;&lt;/iframe&gt;</small>
</p> 

<?php echo $_smarty_tpl->getSubTemplate ("temp_sites_form_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                                              
<p><label>Secondary Title (Above Main Full Width Description)</label>
<input class="text-input large-input" id="content_headline" name="content_headline" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['content_headline'];?>
"/>
<br /><i><small>Keep it relevant and snappy, No HTML</small></i>
</p>

<p>
<label>Main Description (Full Width Center Box, Below Photos)</label>
<textarea class="text-input wysiwyg textarea" id="content_html" name="content_html" cols="70" rows="15"><?php echo $_smarty_tpl->tpl_vars['edit']->value['content_html'];?>
</textarea>
<br /><i><small>Include a well written, relevant, text piece. HTML snippets from your favourite social media sites can be included, but always check it to make sure you've input the correct code. To stay safe - just include text.</small></i>

</p>

<p><label>Box One Headline</label><input class="text-input large-input" id="box_one_headline" name="box_one_headline" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['box_one_headline'];?>
" /></p>
<p><label>Box One Content</label><textarea class="text-input large-input textarea" id="box_one" name="box_one" cols="10" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['box_one'];?>
</textarea></p>
<p><label>Box Two Headline</label><input class="text-input large-input" id="box_two_headline" name="box_two_headline" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['box_two_headline'];?>
" /></p>
<p><label>Box Two Content</label><textarea class="text-input large-input textarea" id="box_two" name="box_two" cols="10" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['box_two'];?>
</textarea></p>
<p><label>Box Three Headline</label><input class="text-input large-input" id="box_three_headline" name="box_three_headline" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['box_three_headline'];?>
" /></p>
<p><label>Box Three Content</label><textarea class="text-input large-input textarea" id="box_three" name="box_three" cols="10" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['box_three'];?>
</textarea></p>
<p>
        <label>URL of "Visit This Site"</label>
        <input type="text" class="text-input medium-input" name="visiturl" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['visiturl'];?>
" /><br /><i><small>The Full URL (including http://) of the web page you want to be directed to when you click 'Visit This Site' at the bottom of your page</small></i>
</p>


<br/>
<h2>Step 3 - Stats & Misc</h2>
<br/>
<p><label>Analytics / Stats Code</label><textarea class="text-input large-input textarea" id="analytics" name="analytics" cols="10" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['analytics'];?>
</textarea></p>
<p><label>Time Stamp Your Update</label><input class="text-input large-input" id="updated" name="updated" value="<?php echo time();?>
" readonly /><br /><small><?php echo smarty_modifier_date_format(time());?>
</small></p>
<p><label>Last Updated By</label><input class="text-input large-input" id="updatedby" name="updatedby" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" readonly /><br /><small>User <i><strong><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</strong></i> will be logged as the author of this latest change.</small> 

<p>
<input style="text-decoration:none;" class="button" type="submit" value="Save Your Website" />
</p>

</fieldset>

<div class="clear"></div><!-- End .clear -->

</form> <?php }?>
</div> <!-- End Content Box Content -->
<?php }} ?>