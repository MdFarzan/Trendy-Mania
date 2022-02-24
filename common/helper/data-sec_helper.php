<?php

/* 
    data-sec_helper.php
    contains functions to senatize and validate data on server-side
*/

// to validate & sanitizing email
function san_email($d){
    if($d = filter_var($d, FILTER_VALIDATE_EMAIL)){
        $d = filter_var($d, FILTER_SANITIZE_EMAIL);
        return $d;
    }

    else
        return false;
}

// to simplily sanitizing data
function san_data($d){
    $d = trim($d);
    $d = stripslashes($d);
    $d = htmlspecialchars($d);

    return $d;
}



?>