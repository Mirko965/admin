<?php
function find_all_admins(){
    global $dbconn;

    $query_admin  = "SELECT * " ;
    $query_admin .= "FROM admin ";
    $result_admin = mysqli_query($dbconn, $query_admin);
    if(!$result_admin){
        die("Databases failed");
    }
    return($result_admin);
}

function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}
