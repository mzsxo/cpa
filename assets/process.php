<?php

$pic = $_FILES['pic'];
$services = $_POST['services'];
$industry = $_POST['industry'];
$full = $_POST['fn'];
$zip = $_POST['zip'];
$email = $_POST['em'];
$username = $_POST['un'];
$pass = $_POST['pw'];
$repeat = $_POST['pwr'];
$text = $_POST['text'];

$d = file_get_contents('data/user.json');
	$d = json_decode($d, true);


//print_r($d);
	
	$id = count($d);
	++$id;
	//print_r($id);
	mkdir('users/'.$id);

$postmp = $_FILES['pic']['tmp_name'];
	$posname = $_FILES['pic']['name'];
	
	$img = 'users/'.$id.'/'.$posname;
	move_uploaded_file($postmp,$img );


$ig = 'users/'.$id.'/'.$posresname;
	
	move_uploaded_file($postres,$ig );

$a = array(

    "pic" => 'assets/'.$u,
    "services" => $services,
    "industry" => $industry,
    "fn" => $full,
    "zip" => $zip,
	"em" => $email,
    "un" => $username,
 	"pw" => $pass,
    "pwr" => $repeat,
    "text" => $text

//print_r($a);

array_unshift($d, $_GET);
	array_push ($d, $a);
	$d = json_encode($d);
	file_put_contents('data/user.json', $d);
	
	header('location: table.php');
	
	?>
