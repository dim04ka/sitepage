<?php
    session_start();
 //   include "header.php";
?>
    <html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Главная страница</title>
    </head>
    <body>
    <div class="container">
        <form action="testreg.php" method="post" >
        <div class="form-group">
            <p>
            <label>Email address:<br></label>
            <input name="login" type="text" size="25" maxlength="25" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <p>
            <label>Password:<br></label>
            <input name="password" type="password" size="15" maxlength="15" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <p>
            <input type="submit" name="submit" value="Вход" class="btn btn-primary">
            </p>
        </div>    
        </form>
        <?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    echo '<div class="alert alert-secondary" role="alert">
            Вы вошли на сайт, как гость<br><a href="reg.php">Ссылка для регистрации</a>
        </div>';
        var_dump($_SESSION);
    }
    else
    {
        
    echo '<div class="alert alert-secondary" role="alert">
    Вы вошли на сайт, как " '. $_SESSION['login'] .' "<br><a  href="http://google.ru/">Эта ссылка доступна только  зарегистрированным пользователям</a>
        </div>';
            }
    ?>
    </div>

    </body>
    </html>

    <?php
  //  include "footer.php";
?>