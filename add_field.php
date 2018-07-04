<?php 
include ("db.php");
    $name = $_POST['name'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];

    $result = mysql_query("INSERT INTO product (id,
                                               name,
                                               price,
                                               rating) 
                                    VALUE      (null,
                                               '$name',
                                               '$price',
                                               '$rating')");
    if ($result=='TRUE'){
        echo ' <div class="alert alert-success" role="alert">
                    login: '.$login.' accept -> <a href="index.php">Home</a>
                </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                login: '.$login.' danger <a href="index.php">Registration Page</a>
            </div>';
    }


?>