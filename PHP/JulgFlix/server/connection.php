<?php

define("DB_HOST", "localhost:3306");
define("DB_USER","root");
define("DB_PASSWORD", "toor");
define("DB_DATABASE", "jugflix");
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
?>