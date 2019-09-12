<?php 
    // function dd($array){
    //     echo '<pre>' . print_r($array, true) . '</pre>'; 
    //     die();
    // }
    foreach($_GET as $key =>$value){
        $$key = '<b>'.$value.'</b>';
    }
    // $name = $_GET['name'];
    // $dob = $_GET['dob'];
    // $passport = $_GET['passport'];

include 'view/invite.php'
?>


