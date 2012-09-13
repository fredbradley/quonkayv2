<?php /* Smarty version Smarty-3.1.8, created on 2012-04-27 03:52:05
         compiled from "/home/luckyth1/public_html/mediagym.co.uk/templates/site_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19393269074f9a5e35a2f4b2-15231631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86af55544a7eca33e07aa25703720e6651c9ddbb' => 
    array (
      0 => '/home/luckyth1/public_html/mediagym.co.uk/templates/site_index.tpl',
      1 => 1335450579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19393269074f9a5e35a2f4b2-15231631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9a5e35be2190_73838063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9a5e35be2190_73838063')) {function content_4f9a5e35be2190_73838063($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("site_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
<!-- Top Area -->

<div id="top">

<!-- Header Area -->

<div id="header">

<!-- Header Container -->

<div class="container">

<!-- Dynamic Logo -->

<div id="logo">
<a href="" title=""><img src="assets/images/sofa_logo.png" alt="UK Bespoke Sofas" /></a>
</div>

<!-- Logo Ends -->

<!-- Top Contacts -->

<div id="topcontacts">

<!-- Top Contacts - Email -->

<div id="top-email" class="email-link"> <a href="mailto:info@seriouslysofas.co.uk">info@seriouslysofas.co.uk</a></div>

<!-- Top Contacts - Email Ends -->

<!-- Top Contacts - Phone -->

<div id="top-phone" class="">+44 020 8549 1233</div>

<!-- Top Contacts - Phone Ends -->

</div>

<!-- Top Contacts Ends -->

</div>

<!-- Header Container Ends -->

</div>

<!-- Header Area Ends -->

<!-- Offer Area Container -->

<!--Dynamic Page Title For SEO-->

<center><br/><br/><h1><?php echo $_smarty_tpl->tpl_vars['SITE']->value['title'];?>
</h1></center>

<!--Dynamic Page Title For SEO Ends-->

<div class="container clearfix">

<!-- Offer Area -->

<div id="offer" class="clearfix">

<!-- Dynamic Text Box 1 -->

<div id="offercontent">

<h3><?php echo $_smarty_tpl->tpl_vars['SITE']->value['offer_subhead'];?>
</h3>

<div id="offercontent-wrap">

<p class="description"><?php echo $_smarty_tpl->tpl_vars['SITE']->value['offer_description'];?>
</p>

</div>

</div>

<!-- Dynamic Text Box 1 End -->


<!-- Video Embed 598*335 -->

<div id="offerslider">


<ul id="offerslider-items">

<li><?php echo $_smarty_tpl->tpl_vars['SITE']->value['video'];?>
</li>

</ul>


</div>

<!-- Video Embed End -->

</div>

<!-- Offer Area Ends -->

</div>

<!-- Offer Area Container Ends -->

</div>

<!-- Top Area Ends -->

<!-- Lightbox Gallery - One small Thumbnail & One Large -->

<div id="gallery" class="clearfix">
<div class="container clearfix">

<ul>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['SITE']->value['gallery4'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="--- PLEASE SELECT ---"){?>
<?php $_smarty_tpl->tpl_vars["SITE.gallery4"] = new Smarty_variable('', null, 0);?>
<?php }?>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery1'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" title="Gallery Item #1">
		<img src="assets/uploadedpics/thumbs/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery1'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" alt="Gallery Item #1" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery2'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" title="Gallery Item #2">
		<img src="assets/uploadedpics/thumbs/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery2'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" alt="Gallery Item #2" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
		</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery3'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" title="Gallery Item #3">
		<img src="assets/uploadedpics/thumbs/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery3'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" alt="Gallery Item #3" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery4'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" title="Gallery Item #4">
		<img src="assets/uploadedpics/thumbs/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery4'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" alt="Gallery Item #4" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery5'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" title="Gallery Item #5">
		<img src="assets/uploadedpics/thumbs/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery5'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" alt="Gallery Item #5" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
</ul>

</div>
</div>

<!-- Gallery End -->

<!-- Content Starts -->

<div id="content" class="clearfix">

<!-- Content Container -->

<div class="container clearfix" style="padding-top: 90px;">

<!-- Main HTML Box -->

<div class="col-full">
<center><h3><?php echo $_smarty_tpl->tpl_vars['SITE']->value['content_headline'];?>
</h3></center>
<p class="description"><?php echo $_smarty_tpl->tpl_vars['SITE']->value['content_html'];?>
</p>

</div>

<div class="col-one-third">

<div class="product-feature">

<img src="assets/images/icons/sofa_small.png" title="" alt="" />

<h3><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_one_headline'];?>
</h3>

<p><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_one'];?>
</p>

</div>

</div>

<div class="col-one-third">

<div class="product-feature">

<img src="assets/images/icons/sofa_small.png" title="" alt="" />

<h3><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_two_headline'];?>
</h3>

<p><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_two'];?>
</p>

</div>

</div>

<div class="col-one-third col-last">

<div class="product-feature">

<img src="assets/images/icons/sofa_small.png" title="" alt="" />

<h3><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_three_headline'];?>
</h3>

<p><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_three'];?>
</p>

</div>

</div>

<div class="clear"></div>

<!-- Product Features End -->

</div>        

<div class="container clearfix">        

<div class="clear"></div>


<!-- Dynamic Main Link -->

<div id="action-bottom" class="clearfix">

<a href="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['visiturl'];?>
" target="_blank" class="actionbutton">Visit Our Site</a>

</div>

<!-- Dynamic Main Link End -->

<!-- Facebook Comments -->

<div class="fb-comments" data-href="http://www.facebook.com/seriouslysofas" data-num-posts="20" data-width="960"></div>

<!-- Facebook Comments Ends -->

<div align="center" class="email-link">

<a href="http://seriouslysofas.co.uk/important-information" target="_blank">Terms, Privacy, Address, Conditions & Important Information</a>

</div> 

</div>

<!-- Content Container Ends -->

</div>

<!-- Content Ends -->

<?php echo $_smarty_tpl->getSubTemplate ("site_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>