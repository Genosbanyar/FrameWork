<?php
$routes->get("", "PagesController@home");
$routes->get("about", "PagesController@about");
$routes->get("contact", "PagesController@contact");
$routes->post("order", "PagesController@order");

