<?php /* Smarty version Smarty-3.1.8, created on 2012-09-13 14:53:41
         compiled from "/Users/fredbradley/Sites/smarty_site/quonkay/templates/quonkay/site_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19215318785051e5656788d4-66899764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2f880ba65573d9e0ec5adef566efd7b08d3a5d' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/quonkay/templates/quonkay/site_index.tpl',
      1 => 1338446640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19215318785051e5656788d4-66899764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5051e56570d151_26320351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5051e56570d151_26320351')) {function content_5051e56570d151_26320351($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("site_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
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
" title="Seriously Sofas 1">
		<img src="assets/uploadedpics/thumbs/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery1'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" alt="Seriously Sofas 1" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery2'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" title="Seriously Sofas 2">
		<img src="assets/uploadedpics/thumbs/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery2'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" alt="Seriously Sofas 2" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
		</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery3'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" title="Seriously Sofas 3">
		<img src="assets/uploadedpics/thumbs/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery3'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" alt="Seriously Sofas 3" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery4'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" title="Seriously Sofas 4">
		<img src="assets/uploadedpics/thumbs/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery4'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" alt="Seriously Sofas 4" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery5'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" title="Seriously Sofas 5">
		<img src="assets/uploadedpics/thumbs/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITE']->value['gallery5'])===null||$tmp==='' ? 'sofa_logo.png' : $tmp);?>
" alt="Seriously Sofas 5" width="174" height="94" />
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

<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['SITE']->value['content_html'],'&amp;nbsp;',' ');?>


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

<h4>Related: <a href="http://www.customisedchairs.co.uk">Customised Chairs</a> | <a href="http://www.modularunitsuk.co.uk">Modular Units</a> | <a href="http://www.bespokesofasuk.co.uk">Bespoke Sofas</a> | <a href="http://www.cornerunitsuk.co.uk">Corner Units</a> | <a href="http://www.bed4living.co.uk">Bed 4 Living</a> | <a href="http://www.sofasexdisplay.co.uk">Ex Display</a> | <a href="http://www.lariosofabed.co.uk">Lario Sofa Bed</a> | <a href="http://www.famauk.co.uk">Fama UK Stockist</a> | <a href="http://www.sofabedskingston.co.uk">Sofa Beds In Kingston</a></h4>

<a href="http://seriouslysofas.co.uk/important-information" target="_blank">Terms, Privacy, Address, Conditions & Important Information</a>

</div> 

</div>

<!-- Content Container Ends -->

</div>

<!-- Content Ends -->

<?php echo $_smarty_tpl->getSubTemplate ("site_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>