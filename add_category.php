<?php
include_once('resources/sqlCode/init.php');

if (isset($_POST['name'])) {
    $name = trim($_POST['name']);
    
    if (empty($name)) {
        $error = "You must submit a category name.";
    }else if (category_exists($name)) {
        $error = "That category already exists.";
    }else if (strlen($name) > 24) {
        $error = "Category name can only use 24 characters.";
    }   
    if (! isset($error)) {
        add_category($name);
    }
}

    
    
?>
<DOCTYPE html>
    
<html lang ="eng">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        
        <title> Add a category </title>
    </head>
    
    <body>
        <h1> Add a category </h1>
        
        <?php 
        if (isset($error)) {
            echo "<p> {$error} </p\n";
        }
        ?>
        
        <form action="" method="post">
            <div>
                <label for ="name"> Name </label>
                <input type ="text" name="name" value ="">
            </div>
            <div>
                <input type="submit" value="Add Category">
            </div>
            
        </form>
    </body>
</html>

