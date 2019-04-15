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

$idx = end(array_keys($d));

$idx = count($d);
++$idx;
//print_r($id);


echo $idx;

mkdir('user/'.$idx);


switch( $pic['type'] ) {
	case 'image/jpeg':
		$x = '.jpg';
		break;
	case 'image/png':
		$x = '.png';
		break;
	case 'image/gif':
		$x = '.gif';
		break;
	default:
		$x = '';
		break;
};

$tm = $pic['tmp_name'];
//$t = $u['tmp_name']; what is this
if( $x != '' ){
	$u = 'user/'.$idx.'/userimg'.$x;
    //$i = 'users/'.count($d).$x; what is this
move_uploaded_file($tm, $u);
//move_uploaded_file($t, $i); wot y
};

$a = [
    
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
];
$d[$idx] = $a;
//array_push($d, $a); what is this? it dupes

$d = json_encode($d);
file_put_contents('data/user.json', $d);
header('location:../index.php'.$idx); 
?>
