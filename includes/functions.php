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

function find_admin_by_id($admin_id){
		global $dbconn;

		$safe_admin_id = mysqli_real_escape_string($dbconn, $admin_id);

		$query  = "SELECT * ";
		$query .= "FROM admin ";
		$query .= "WHERE id = {$safe_admin_id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($dbconn, $query);
		 if(!$result){
        die("Databases failed");
        }
		if($admin = mysqli_fetch_assoc($result)) {
			return $admin;
		} else {
			return null;
		}
}
