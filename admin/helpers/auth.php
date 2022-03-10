<?php 

/* 
    auth.php
    contains authentication functions which does not require enter credential manually
*/

// dependencies
// require_once('../../common/db/connection.php');
// require_once('../../common/helper/cookie_helper.php');
// require_once('../../common/helper/session_helper.php');
// require_once('../../common/helper/db_method_helper.php');

function check_auth(){
    $sts = get_sign_cookie();
    
    // if got cookie
    if($sts != false){
        $db = get_db();
        $c_data = get_data($db, 'tm_admin_credentials', "sign_token = '$sts'");
        

        // if found
        if($c_data != false){
            
            // setting up session
            $cred_sess = $c_data[0]['email'];
            $id = $c_data[0]['id'];
            $profile_sess = $db->query("SELECT * FROM tm_admin_profile WHERE id = '$id';")->fetch_assoc();
            
            session_start();
            $_SESSION['ADMIN_SIGN'] = true;
            $_SESSION['ADMIN_PROFILE'] = $profile_sess;
            $_SESSION['ADMIN_CRED'] = $cred_sess;

            header("location: dashboard.php");
        }


        // if not found
        else{

        }


    }

}

    
// check is admin
function is_admin(){
    if(isset($_SESSION['ADMIN_SIGN']) && $_SESSION['ADMIN_SIGN'] == true)
        return true;
    
    else
        return false;
}




?>