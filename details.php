<?php
    $x = $_SERVER['QUERY_STRING'];
if( $x == ''){
    header('location:details.php');
};
?>


<!DOCTYPE html>
<html>
<head>
    <title>hi</title>
    <?php include("assets/partials/nav.php");?>
</head>
<body>
    <?php 
    $d = file_get_contents('data/user.json');
    $d = json_decode($d,true);
    
    foreach($d as $k => $v) {
        if($v['id']==$x){
            $w = $d[$k];
        };
    //print_r($w);
    };
    
?>
       <div class="container">
<img src="<?php echo $w['pic']?>" class="img-fluid"><br>
    <h2><?php echo $w['fn']?></h2><br>
    <h3><?php echo $w['zip']?></h3><br>
        
    <ul>
 
    </ul>
    </div>

<img src="">
    hi
</body>
</html>
hihi
