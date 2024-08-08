<?php
$menus = App::get("database")->make("menu");
view("contact",[
    "menus"=>$menus
]);