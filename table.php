<html>

<head>
    <title>hi</title>
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php require_once('partials/nav.php') ?>

    <h2>Table</h2>
    <table>
                <table border=1 cellpadding=10>
        <tr>
            <th>Image</th>
            <th>Full name</th>
            <th>Zip</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Password Repeat</th>
            <th>Textboxx</th>
        </tr>
        <?php
					$d = file_get_contents('assets/data/user.json');
					$d = json_decode($d, true);
            
                  
					
foreach( $d as $k => $v ){
echo '

<tr>
<td>
<a href="details.php?
'.$v[‘idx’].''>
'.$v[‘fn’].’
</a>
</td>
<td>'.$v['img'].'</td>
<td>'.$v['fn'].'</td>
<td>'.$v['zip'].'</td>
<td>'.$v['em'].'</td>
<td>'.$v['un'].'</td>
<td>'.$v['pw'].'</td>
<td>'.$v['pwr'].'</td>
<td>'.$v['text'].'</td>
</tr>
';
};
?>
        </table></table>
        <?php require_once('partials/footer.php') ?>
</body>
</html>
