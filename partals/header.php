<?php $defaultTitle = "Pizza"  ?>
<!DOCTYPE html>
<html>
<title>
    <?php 
        if(isset($title))
            echo $title;
        else
            echo $defaultTitle;
    ?>
</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="it.css">
<body>