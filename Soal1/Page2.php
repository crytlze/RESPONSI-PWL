<?php 
	$username = $_POST['username'];
	$pass = $_POST['password'];


	//$bisalog = array('admin','user','cry');
	$bisalog = 'admin';
	$bisalog = 'user';

	if ($username == $bisalog) {
		echo "SELAMAT ANDA TELAH LOGIN";
	}else{
		echo "DO AJA!!!";
	}
 ?>