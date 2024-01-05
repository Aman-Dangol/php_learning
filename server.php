<?php
// start session 

session_start();
//  $_SESSION
// set session?
$_SESSION['name'] = 'aman';

// get session ?
$name = $_SESSION['name'];

var_dump($_SESSION);

// destry session
session_destroy();