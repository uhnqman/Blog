<?php
include_once('resources/sqlCode/init.php');
?>
<DOCTYPE html>
    
<html lang ="eng">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         
        
        <title> Category List </title> 
    </head>      
    <body>
        <?php
        foreach(get_categories() as $category) {
            ?>
        <p><a href ="category.php?id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a> - 
            <a href="delete_category.php?id=<?php echo $category['id']; ?>">Delete</a></p>
        <?php
        }
        ?>
    </body>
</html>

