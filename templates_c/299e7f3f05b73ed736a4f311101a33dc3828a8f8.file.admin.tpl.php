<?php /* Smarty version Smarty-3.1.8, created on 2012-09-13 14:21:28
         compiled from "/Users/fredbradley/Sites/smarty_site/quonkay/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18929532375051ddd8911052-22642181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '299e7f3f05b73ed736a4f311101a33dc3828a8f8' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/quonkay/templates/admin.tpl',
      1 => 1335935580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18929532375051ddd8911052-22642181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'SITE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5051ddd8968268_40762477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5051ddd8968268_40762477')) {function content_5051ddd8968268_40762477($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  

<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
<?php echo $_smarty_tpl->getSubTemplate ("admin_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="main-content"> <!-- Main Content Section with everything -->

<noscript> <!-- Show a notification if the user has disabled javascript -->
<div class="notification error png_bg">
<div>
Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
</div>
</div>
</noscript>
<?php echo $_smarty_tpl->getSubTemplate ("admin_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- Page Head -->
<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
, welcome to your main dashboard.</h2>
<p id="page-intro">Which task would you like to perform?</p>

<ul class="shortcut-buttons-set"> <!-- Replace the icons URL's with your own -->
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>1){?>
<li><a class="shortcut-button" href="index.php?page=sites&action=add"><span>
<img src="../assets/images/build-icons/add.png" alt="icon" /><br />
Add A New Site
</span></a></li>
<?php }?>

<li><a class="shortcut-button" href="index.php?page=sites"><span>
<img src="../assets/images/build-icons/pencil.png" alt="icon" /><br />
Edit A Site
</span></a></li>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2>1){?>
<li><a class="shortcut-button" href="index.php?page=users"><span>
<img src="../assets/images/build-icons/id.png" alt="icon" /><br />
View Users
</span></a></li>
<?php }?>

<!--<li><a class="shortcut-button" href="#info" rel="modal"><span>
<img src="../assets/images/build-icons/info.png" alt="icon" /></br />Project Info</span></a></li>-->

<li><a class="shortcut-button" href="mailto:hello@webvid.co.uk?subject=webvid.co.uk Website Support&body=<?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 requires help with <?php echo $_smarty_tpl->tpl_vars['SITE']->value['server_name'];?>
 or a website associated with it."><span><img src="../assets/images/build-icons/mail.png" alt="icon" /><br />Email Support</span></a></li>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==9){?>
<li><a class="shortcut-button" href="#messages" rel="modal"><span>
<img src="resources/images/icons/path-to-icon.png" alt="icon" /><br />
Open Modal
</span></a></li>
<?php }?>

</ul><!-- End .shortcut-buttons-set -->

<div class="clear"></div> <!-- End .clear -->


<div class="content-box column-full closed-box">

<div class="content-box-header">

<h3>Welcome (Open / Close)</h3>

</div> <!-- End .content-box-header -->

<div class="content-box-content">

<div class="tab-content default-tab">

<h4>About your SEO solution</h4>
<p>
Hi <?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 & a warm welcome your new SEO solution, built by <a href="http://webvid.co.uk">webvid.co.uk</a>.</p>
<p>You are currently at the <b>Main Dashboard</b> page, a great source of information on how this unique web application works. Every step is covered, but if you find that you require a little more help, just email us by using the <b>Support</b> icon above. We aim to get back to you asap.
</p>

<p>
Remember that to create a great website which ranks highly in Google (and other search engines), the content that you provide at every step must be <b>relevant</b>, <b>well written</b> & <b>concise</b>.
</p>
<p>Have fun building your new set of websites and here's to a better natural search ranking in the future.</p>
<p><img src="resources/images/signature.png">
<br/>
<small>MD Luckythirteen Ltd / webvid.co.uk</small>
</p>			

</div> <!-- End #tab3 -->        

</div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->

<div class="clear"></div>

<div class="content-box column-full closed-box">

<div class="content-box-header">

<h3>Setting Up New Website(s) (Open / Close)</h3>

</div> <!-- End .content-box-header -->

<div class="content-box-content">

<div class="tab-content default-tab">

<h3>Setting up a new website</h3>

<ul>
<li>Goto <a href="http://www.whois-search.com/" target="_blank">Whois? Web Domain Checker</a> and search for available & relevant website addresess.</li>
<li>Navigate to your preferred domain name registrar and make your purchase(s).</li>
<li>Once the purchase has gone through, go in to your domains manager and change the <b>Nameservers</b> to these addresses: <b>ns1.pipedns.com, ns2.pipedns.com, ns3.pipedns.com</b> (This process can take up to 48 hours to validate.)</li>
<li><a href="mailto:hello@webvid.co.uk?subject=NEW DOMAIN NAME(s) NOTIFICATION">Email Us</a> with all the domains you have registered. We will do a little 'under the hood' maintenance & email you back with confirmation.</li>
<li>All done? Great! Now you're ready to start using this web application.</li>
</ul>

</div> <!-- End #tab3 -->        

</div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->

<div class="clear"></div>

<div class="content-box column-full closed-box">

<div class="content-box-header">

<h3>Video Guides (Open / Close)</h3>

</div> <!-- End .content-box-header -->

<div class="content-box-content">

<div class="tab-content default-tab">

<h3>Video Overview</h3>

<p>In the following videos you will see how easy it really is to set up and changing content on your various websites with this unique web application. The videos are set to private, for your viewing only, and request a password to play.</p>
<h3><i>The password is: webvidseo</i></h3>		
<br/><br/><br/>
<center><h3>Setting Up A Website</h3>
<iframe style="border:2px solid black;" src="http://player.vimeo.com/video/41413057" width="500" height="263" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</center>
<br/><br/><br/>
<center><h3>Editing A Website</h3>
<iframe style="border:2px solid black;" src="http://player.vimeo.com/video/41413059" width="500" height="263" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</center>
<br/><br/><br/>
<center><h3>Managing Images</h3>
<iframe style="border:2px solid black;" src="http://player.vimeo.com/video/41413058?title=0&amp;byline=0&amp;portrait=0" width="500" height="263" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</center>		

</div> <!-- End #tab3 -->        

</div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->		




<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>