<?php
function verify_query($result_set)
{

	global $connection;

	if (!$result_set) {
		die("Database query failed: " . mysqli_error($connection));
	}
}

function check_req_fields($req_fields)
{
	// checks required fields
	$errors = array();

	foreach ($req_fields as $field) {
		if (empty(trim($_POST[$field]))) {
			$errors[] = $field . ' is required';
		}
	}
	return $errors;
}

function check_max_len($max_len_fields)
{
	// checks max length
	$errors = array();

	foreach ($max_len_fields as $field => $max_len) {
		if (strlen(trim($_POST[$field])) > $max_len) {
			$errors[] = $field . ' must be less than ' . $max_len . ' characters';
		}
	}
	return $errors;
}

function display_errors($errors)
{
	// format and displays form errors
	echo '<div class="errmsg">';
	echo '<b> There were error(s) on your form.</b><br>';
	foreach ($errors as $error) {
		$error = ucfirst(str_replace("_", " ", $error));
		echo '- ' . $error . '<br>';
	}
	echo '</div>';
}
