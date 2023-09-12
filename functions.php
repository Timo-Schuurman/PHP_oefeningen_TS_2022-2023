<?php 
//geeft plaatjes uit de map images
class functions{

    function pngShow(){
        $png = glob('images/*.{png,gif}',GLOB_BRACE);
        $gal ='';
        for($i = 0; $i <2; $i++) {
            $gal .= "<li style=\"display: inline\"><img src=\"$png[$i]\" width=\"300\" height=\"300\"></li>";
        }
        print_r($gal);
        die;
    } 
}
$myfunctions = new functions();
$myfunctions -> pngShow();
?>