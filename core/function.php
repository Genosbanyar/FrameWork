<?php
function view($viewFile, $array=[]){
    extract($array);
    require "view/$viewFile.view.php";
}
