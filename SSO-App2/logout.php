<?php
require "init.php";

$auth0->logout(); 
header('Location: http://' . $_SERVER['HTTP_HOST']);
die();