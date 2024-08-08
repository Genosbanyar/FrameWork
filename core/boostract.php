<?php
App::bind("config", require "core/database/config.php");
require "function.php";
App::bind("database", new QueryBuilder(Database::selectAll(App::get("config")['database'])));