<?php 
include 'db.info.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<ul class="menu">
    <li><a href="/?author=Myles Hart">Myles</a></li>
    <li><a href="/?author=Sarah Russo">Sarah</a></li>
</ul>
    <?php 
    $i = 0;
    foreach($post as $bio):?>
        <? if(array_key_exists('author',$_GET)){
            
            if($bio['author_name'] !=$_GET['author'])continue;
        }
            ?>

        <li>
            <h1><?= $bio['title']?></h1>
            by
            <em><?= $bio['author_name'] ?></em>
        </li>
       
       

   


<?php endforeach?>
</body>
</html>
 