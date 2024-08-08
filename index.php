<?php
require "vendor/autoload.php";
require "core/boostract.php";
Router::load("routes.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);