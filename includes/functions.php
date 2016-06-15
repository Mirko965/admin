<?php
function find_all_admins(){
    global $dbconn;

    $query_admin  = "SELECT * " ;
    $query_admin .= "FROM admin ";
    $query_admin .= "ORDER BY name DESC ";
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

function form_errors($errors=array()) {
	$output = "";
	if (!empty($errors)) {
	  $output .= "<div class=\"error\">";
	  $output .= "Please fix the following errors:";
	  $output .= "<ul>";
	  foreach ($errors as $key => $error) {
	    $output .= "<li>{$error}</li>";
	  }
	  $output .= "</ul>";
	  $output .= "</div>";
	}
	return $output;
}

function find_admin_by_id($admin_id){
    global $dbconn;

    $query = "SELECT * FROM admin WHERE id = $admin_id LIMIT 1 ";
    $result = mysqli_query($dbconn,$query);
    if(!$result){
        die;
    }
    if($admin = mysqli_fetch_assoc($result)){
        return $admin;
    } else {
        null;
    }
}




