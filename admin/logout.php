<?php 

/* 
    logout.php
    used to loggin out a user by destroying session & deleting sign in token
*/

require_once('../common/helper/cookie_helper.php');
require_once('../common/helper/session_helper.php');
sess_start();
sess_end();
rem_sign_cookie();

header('location:index.php');

?>