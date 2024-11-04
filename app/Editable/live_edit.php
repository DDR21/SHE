<?php
include_once("conn.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['nama'])) {
		$update_field.= "nama='".$input['nama']."'";
	} else if(isset($input['nrp'])) {
		$update_field.= "nrp='".$input['nrp']."'";
	} else if(isset($input['section'])) {
		$update_field.= "section='".$input['section']."'";
	} else if(isset($input['age'])) {
		$update_field.= "age='".$input['age']."'";
	} else if(isset($input['designation'])) {
		$update_field.= "designation='".$input['designation']."'";
	}	
	if($update_field && $input['id']) {
		$sql_query = "UPDATE developers SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}


