<?php
// ---------------------------- EXAMPLE 1 ----------------------------------
$paola = array('1','2','3'); 

	if (is_array($paola)){ 
	echo 'This is an array....<br>';
	}  

	else{  
	echo 'This is not an array....';
	}

// ------------------------------ EXAMPLE 2 --------------------------------
function get_subjects($obj_name)
{
	if(!is_object($obj_name))
	{
	return(false);
	}

	return($obj_name->subjects);
}

$obj_name = new stdClass;
$obj_name->subjects = Array('Physics', 'Chemistry', 'Mathematics');
var_dump(get_subjects($obj_name));

// ------------------------------- EXAMPLE 3 ---------------------------
$impala = false;

	if (is_bool($impala)){
		echo '<br>This is a boolean.';
	}

	else{
	echo 'This is not a boolean.';
	}

