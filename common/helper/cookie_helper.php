<?php

/* 
    cookie_helper.php
    container cookie management related functions
*/

/* default values for cookies arguments */
define('NAME', 'SIGN_IN_COOKIE_2/22/2022'); // random | day of creation
define('EXP_TIME', time() + (86400 * 30)); // 30 Days
define('PATH', '/'); // root

// to set cookie for sign in
function set_sign_cookie(){
    $val = substr(hash("sha256", SHA1(rand(1,10000))),0, 40);
    setcookie(NAME, $val, EXP_TIME, PATH);
    return strlen($val);
}


function get_sign_cookie(){

    if(isset($_COOKIE[NAME]))
        return $_COOKIE[NAME];

    else
        return false;

}


function rem_sign_cookie(){
    setcookie(NAME, '', time() - 3600, PATH);
}



?>