<?php /* Smarty version Smarty-3.1.8, created on 2012-04-27 04:02:59
         compiled from "/home/luckyth1/public_html/mediagym.co.uk/templates/admin_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2765078354f9a60c3084b80-68670643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ef0ad8f35524dd5af3b0dbcb645453fccea0323' => 
    array (
      0 => '/home/luckyth1/public_html/mediagym.co.uk/templates/admin_images.tpl',
      1 => 1335514935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2765078354f9a60c3084b80-68670643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'large_image_width' => 0,
    'large_image_height' => 0,
    'action' => 0,
    'options' => 0,
    'large_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9a60c3239433_16161864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9a60c3239433_16161864')) {function content_4f9a60c3239433_16161864($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  

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

<?php if ($_POST){?>

<script type="text/javascript">
function preview(img, selection) {
        var scaleX = 174 / selection.width;
        var scaleY = 94 / selection.height;

        $('#thumbnail + div > img').css({
                width: Math.round(scaleX * <?php echo $_smarty_tpl->tpl_vars['large_image_width']->value;?>
) + 'px',
                height: Math.round(scaleY * <?php echo $_smarty_tpl->tpl_vars['large_image_height']->value;?>
) + 'px',
                marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px',
                marginTop: '-' + Math.round(scaleY * selection.y1) + 'px'
        });
        $('#x1').val(selection.x1);
        $('#y1').val(selection.y1);
        $('#x2').val(selection.x2);
        $('#y2').val(selection.y2);
        $('#w').val(selection.width);
        $('#h').val(selection.height);
}

$(document).ready(function () {
        $('#save_thumb').click(function() {
                var x1 = $('#x1').val();
                var y1 = $('#y1').val();
                var x2 = $('#x2').val();
                var y2 = $('#y2').val();
                var w = $('#w').val();
                var h = $('#h').val();
                if(x1=="" || y1=="" || x2=="" || y2=="" || w=="" || h==""){
                        alert("You must make a selection first");
                        return false;
                }else{
                        return true;
                }
        });
});

$(window).load(function () {
//$(document).ready(function () {
        $('#thumbnail').imgAreaSelect({ aspectRatio: '174:94', onSelectChange: preview });
});

</script>

<?php }?>


			<h2 id="page-intro">Image Manager</h2>

<div class="content-box">
<div class="content-box-header"><h3>Upload Image</h3></div>
<div class="content-box-content">
<form name="uploadphoto" enctype="multipart/form-data" action="inc/imageupload.php" method="post">
<input type="file" name="image" class="small-input" size="30" />
<br/><br/>
<input class="button" type="submit" name="photoupload" value="Upload" />
</form>
<br/>
<i>At present you can only upload JPEG or .JPG files. Anything else will result in an error.</i>
</div>				

</div>
			
			<div class="content-box"><!-- Start Content Box -->
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="add"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_sites_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="edit"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_sites_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="delete"){?>
                                        <?php echo $_smarty_tpl->getSubTemplate ("admin_sites_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{ ?>
					<?php }}}?>

<div class="content-box-header"><h3>Create a Thumbnail</h3></div>
<div class="content-box-content">
<form name="getnewthumb" method="post" action="index.php?page=images">
<select name="thumb">
<?php echo $_smarty_tpl->tpl_vars['options']->value;?>

</select>
<input class="button" type="submit" name="submit" value="Choose" />
</form>

</div>
</div>
 <!-- End .content-box -->	


<div class="clearfix clear"></div>
<?php if ($_POST){?>
<div class="content-box">
	<div class="content-box-header"><h3>Create Thumbnail</h3></div>
	<div class="content-box-content">



        <img src="../assets/uploadedpics/<?php echo $_smarty_tpl->tpl_vars['large_image']->value;?>
" style="float:left;margin-right: 10px;" id="thumbnail" alt="Create Thumbnail" />
                        <div style="float: left; position:relative; overflow:hidden; margin-top:10px; width:174px; height:94px; border:2px solid #cccccc;">
                                <img src="../assets/uploadedpics/<?php echo $_smarty_tpl->tpl_vars['large_image']->value;?>
" style="position: relative;" alt="Thumbnail Preview" />
                        </div>
	<?php if (file_exists("../assets/uploadedpics/thumbs/".($_smarty_tpl->tpl_vars['large_image']->value))){?>
	<img src="../assets/uploadedpics/thumbs/<?php echo $_smarty_tpl->tpl_vars['large_image']->value;?>
" style="margin-top:10px;margin-left:20px;border:2px green solid;" />
	<?php }?>
<div class="clearfix clear"></div>
  <form name="thumbnail" action="index.php?page=images" method="post">
                                <input type="hidden" name="x1" value="" id="x1" />
                                <input type="hidden" name="y1" value="" id="y1" />
                                <input type="hidden" name="x2" value="" id="x2" />
                                <input type="hidden" name="y2" value="" id="y2" />
                                <input type="hidden" name="w" value="" id="w" />
                                <input type="hidden" name="h" value="" id="h" />
                                <input type="hidden" name="thumb" value="<?php echo $_smarty_tpl->tpl_vars['large_image']->value;?>
" />
                                <input type="submit" name="upload_thumbnail" value="Save Thumbnail" id="save_thumb" />
                        </form>
<div class="clearfix clear"></div>

	</div>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>