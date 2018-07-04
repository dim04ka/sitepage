<?php
session_start();

include ("db.php");

    if (!(isset($_POST['login']) && !empty($_POST['login'])) || 
        !(isset($_POST['password']) && !empty($_POST['password']))) {
    echo '<div class="alert alert-danger" role="alert">
            login or password empty! Go replace-> <a href="index.php">Registration Page</a>
        </div>';
    exit;
    }
    $login = trim(strip_tags(htmlspecialchars($_POST['login'])));
    $password = md5(trim($_POST['password']));

    $result = mysql_query("SELECT * FROM users WHERE login = '$login'");
    $row = mysql_fetch_array($result);

    if (empty($row['password'])) {
        echo '<div class="alert alert-danger" role="alert">
            Login: '.$login.' NO REGISTER! User Let\'s go register page-> <a href="reg.php">Registration Page</a>
        </div>';
        
        exit;
    }else{
        if ($row['password'] == $password) {
            echo '<div class="alert alert-success" role="alert">
                HELLO '.$login.' <a href="index.php">Главная страница</a>
            </div>';
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = $row['login'];
        //var_dump($_SESSION);
        }else
        echo '<div class="alert alert-danger" role="alert">
            Login or PASSWORD ne veren -> <a href="index.php">Главная страница</a>
        </div>';
    }
?>