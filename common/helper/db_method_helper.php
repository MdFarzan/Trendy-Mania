
<?php

/* 
    db_method_helper.php
    A db method helper to perform simple db task
*/


// to insert data
function insert_data($db, $data, $table){
    
    $col_name = array_keys($data);
    $col_vals = array_values($data);

    $q = "INSERT INTO $table (" . implode(', ', $col_name) . ") "
    . "VALUES ('" . implode("', '", $col_vals) . "')";
    
    $db->begin_transaction();
    if($db->query($q) === true){
        $sts =  $db->insert_id;
        $db->commit();
        return $sts;
    }

    else{
        $db->rollback();
        return false;
    }
}


// to delete data
function delete_data($db, $con, $table){

    $q = "DELETE FROM $table WHERE $con;";
    
    $db->begin_transaction();
    if($db->query($q) === true){
        $sts = $db->affected_rows;
        $db->commit();
        return $sts;
    }

    else{
        $db->rollback();
        return false;
    }
}


// to update data
function update_data($db, $data, $con, $table){

    $update_q = '';
    foreach($data as $k=>$v){
        $update_q .= $k.' = "'.$v.'",';
    }

    $update_q = substr($update_q, 0, -1);
    $q = "UPDATE $table SET $update_q WHERE $con";
    

    $db->begin_transaction();
    if($db->query($q) === true){
        $sts =  $db->affected_rows;
        $db->commit();
        return $sts;
    }
        

    else{
        $db->rollback();
        return false;
    }
        
}


// to retrieve data
function get_data($db, $table, $con=null){
    $q = '';
    $con == null ? $q = "SELECT * FROM $table" : $q = "SELECT * FROM $table WHERE $con";

    $data = $db->query($q); 

    if($data->num_rows>0){
        $data = $data->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    
    else
        return false;

}

?>