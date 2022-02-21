<?php 

/* 
    connection.php
    contains db connection establishing & closing connection functions    
*/


require_once('cred.php');

// to create db connection
function get_db(){
    $db = new mysqli(DB_HOST, USER, PASSKEY, DB);

    // if not able to connect
    if($db->connect_errno){
        echo "<strong>Unable to connect</strong>
                <hr>" , $db->connect_error ;

             die();
    }

    // if connected successfully
    else{
        return $db;
    }

}


// to close db connection
function close_db($db){
    echo $db->close();
}

?>