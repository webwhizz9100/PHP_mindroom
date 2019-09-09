<?php

$posts=[
    [
        "Author" => "Charls Dickens",
        "Content" => "Christmas Carrols"
],
    [
        "Author" => "J.K.Rowling",
        "Content" =>"Harry Potter"
    ],
    [
        "Author"=> "J.R.R Tolkin",
        "Content" => "Lord of the Rings"
    ]
];
?>
<?php foreach($posts as $each) : ?>
  
    <div class="card"> 
        <?php echo $each["Content"];?> was written by
        <?php echo $each["Author"]; ?>
    </div>

 <?php endforeach ?>
<style>
    
</style>

 