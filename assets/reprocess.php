<?php session_start();
$e = $_POST['username'];
$p = $_POST['password'];
$d = file_get_contents('data/user.json');
$d = json_decode($d, true);
foreach( $d as $k => $v ){
	if ( $e == $v['username'] && $p == $v['password'] ) {
		$_SESSION["username"] = $v["username"];
		$_SESSION["img"] = $v["img"];
		header('location:/cpaCreate.php');
	} else {
		header('location:/index.php');
	};
};
?>
