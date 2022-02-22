<?php

/* 
    session_helper.php
    this file contains admin & user session management functionalities

*/

// to start session
function sess_start(){
    session_start();
}



// to end session
function sess_end(){
    session_unset();
    session_destroy();
}

// to add a variable into session
// only first value will be saved others will be discarded
function sess_set($data){
    $key = array_keys($data)[0];
    $val = array_values($data)[0];

    // checking is session started
    if(!is_sess()){
        die('please start the session before setting a vlaue!');
    }

    else{
        $_SESSION[$key] = $val;
        return true;
    }

}

// to get values from session
function sess_get($key){

    if(!is_sess()){
        die('Please start the session first!');
    }

    else{
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }

        else{
            return false;
        }
    }

}


// checking is session started
function is_sess(){

    if(isset($_SESSION)){
        return true;
    }

    else{
        return false;
    }

}

?>