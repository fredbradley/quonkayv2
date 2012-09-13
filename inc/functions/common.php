<?php

function getMsg($type, $content) {
	$output = "<div class=\"notification ".$type." png_bg\">";
	$output .= "<div>".$content."</div>";
	$output .= "</div>";
	return $output;
}



function getDirectory($relpath) {
	if ($handle = opendir($relpath)) {
		while (false !== ($file = readdir($handle))) {
			if ($file != "." && $file != "..") {
				$thelist .= '<option value="'.$file.'">'.$file.'</option>';
			}
		}
	closedir($handle);
	}
	$output = '<option value="">--- PLEASE SELECT ---</option>';
	$output .= $thelist;
	return $output;
}


function getDirectoryArray($relpath) {
	$array = array("--- PLEASE SELECT ---");
        if ($handle = opendir($relpath)) {
                while (false !== ($file = readdir($handle))) {
                        if ($file != "." && $file != "..") {
                                array_push($array, $file);
                        }
                }
        closedir($handle);
        }
//        $output = '<option value="">--- PLEASE SELECT ---</option>';
      //  $output .= $thelist;
        return $array;
}
function my_default_template_handler_func($type, $name, &$content, &$modified, Smarty $smarty) {
    if (false) {
        // return corrected filepath
        return "/Users/fredbradley/Sites/smarty_site/quonkay/templates/";
    } elseif (false) {
        // return a template directly
        $content = "the template source";
        $modified = time();
        return true;
    } else {
echo 'Sorry I failed';
        // tell smarty that we failed
        return false;
    }
}
	?>
