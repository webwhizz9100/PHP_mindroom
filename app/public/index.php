<?php 

// include 'db.info.php';
// include 'dev-function.php';

// echo '<pre>'.print_r($post,true).'</pre>'; exsit;
// showArray($_GET);
?>



<form action="GET">
    <input type="text" placeholder="Name" name="name">
    <input type="text" placeholder="Country" name="country">
    <button>Go</button>
</form>

<p>I <?= $_GET['name']?> from <?= $_GET['country']?></p>

<?php var_dump($_GET['name']);?>