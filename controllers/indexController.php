<?php
$menus = App::get("database")->make("menu");
view("index",[
    "menus"=>$menus
]);