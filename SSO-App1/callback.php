<?php

require "init.php";

$userInfo = $auth0->getUser();


if (!$userInfo) {
    die("Error while logging you in. Please retry");
} else {
    header('Location: http://' . $_SERVER['HTTP_HOST']);
}