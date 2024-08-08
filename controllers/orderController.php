<?php
//require "order.view.php";

/*$query->insert([
    "name"=>"Dish D",
    "price"=>30000,
    "category"=>$_POST['name'],
    "create_date"=>"2023-10-29",
    "updated_date"=>"2023-12-25"
],"menu");
*/
//header("Location: /");
App::get("database")->update([
    "name"=>"Dish E",
    "price"=>4000,
    "category"=>$_POST['update']
],"menu", 4);


App::get("database")->delete("menu", $_POST['delete']);
header("Location: /");