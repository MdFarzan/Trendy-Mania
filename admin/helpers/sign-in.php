<?php

/* 
    sign-in.php
    contains admin sign in related functionality

*/
require_once('../../common/db/connection.php');
require_once('../../common/helper/data-sec_helper.php');
require_once('../../common/helper/session_helper.php');
require_once('../../common/helper/cookie_helper.php');




if($_SERVER['REQUEST_METHOD']=='POST'){
    
    // extracting data
    $data = json_decode($_POST['form_data']);
    $email = $data->email;
    $pass = $data->pass;
    $rem_key = $data->rem;

    if(!san_email($email)){
        echo json_encode(['status'=>false, 'desc'=> 'Please enter a valid email!']);
        die();
    }

    else{
        // continue
        $db = get_db();
        $data = $db->query("SELECT id, email, passkey FROM tm_admin_credentials WHERE email = '$email';");
        
        if($data->num_rows>0){
            $data = $data->fetch_assoc();
            $db_pass = $data['passkey'];
            $db_id = $data['id'];
            
            // on password matched
            if(password_verify($pass, $db_pass)){

                // setting up session
                $cred_sess = $data['email'];
                $profile_sess = $db->query("SELECT * FROM tm_admin_profile WHERE id = '$db_id';")->fetch_assoc();
                
                session_start();
                $_SESSION['ADMIN_SIGN'] = true;
                $_SESSION['ADMIN_PROFILE'] = $profile_sess;
                $_SESSION['ADMIN_CRED'] = $cred_sess;
                                
                // setting up cookie if remember me is set
                if($rem_key==true){
                    $rem_token = set_sign_cookie();
                    $db->query("UPDATE tm_admin_credentials SET sign_token = '$rem_token' WHERE id = '$db_id';");
                    
                }

                
                echo json_encode(['status'=>'success', 'desc'=> 'You will be redirected to dashboard shortly...']);
            }

            else{
                echo json_encode(['status'=>false, 'desc'=> 'Email or Password not matched!']);
            }

        }

        else{
            echo json_encode(['status'=>false, 'desc'=> 'Email or Password not matched!']);
        }
    }
    

}

else{
    die();
}



?>