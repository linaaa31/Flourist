<?php

$db = mysqli_connect('localhost','root','','lina_final');


if(!$db){
	echo "connection failed".mysqli_connect_error();
}

?>