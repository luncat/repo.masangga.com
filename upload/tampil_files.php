<?php
    $jml_file = 0;
    $dir = "files/";
    if($opendir = opendir($dir)) {
        while($file = readdir($opendir)) {
            if(is_file($dir.$file)) {
                $jml_file++;
                $ext = explode(".",$file);
                $ext = end($ext);
                echo "
                    <img src='http://www.4shared.com/icons/32x32/$ext.png' width='16px'/>
                    <a href='".$dir.$file."'>$file</a><br/>
                ";
            }
        }
        closedir($opendir);
    }
    if($jml_file==0) { echo "Tidak ada file."; }
?>
