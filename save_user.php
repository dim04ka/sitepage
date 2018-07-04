
    <?php
    include ("db.php");
    if (isset($_POST['login'])) {
         $login = $_POST['login'];
          if ($login == '') { 
              unset($login);
            } 
        }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
            if ($password == '') { 
                unset($password);
            } 
        }
        if (isset($_POST['passwordRe'])) {
            $passwordRe = $_POST['passwordRe'];
                if ($passwordRe == '') { 
                    unset($passwordRe);
                } 
            }
    if (empty($login) or empty($password) or empty($passwordRe)) {
        echo '<div class="alert alert-danger" role="alert">
                login or password empty! Go replace-> <a href="reg.php">Registration Page</a>
            </div>';
        exit;
    }
    if ($password != $passwordRe) {
        echo '<div class="alert alert-danger" role="alert">
                Passwords do not match! Go replace-> <a href="reg.php">Registration Page</a>
            </div>';
        exit;
    }

        $login = trim(strip_tags(htmlspecialchars($login)));
        $password = md5(trim($password));
        $result = mysql_query("SELECT id FROM users WHERE login = '$login'");
        $myrow = mysql_fetch_array($result);
        if (!empty($myrow['id'])) {
            echo '<div class="alert alert-danger" role="alert">
                    login: '.$login.' zanyat! Go replace-> <a href="reg.php">Registration Page</a>
                </div>';
            exit;
        }    
    $result = mysql_query ("INSERT INTO users (login,password) VALUES('$login','$password')");
    if ($result=='TRUE'){
        echo ' <div class="alert alert-success" role="alert">
                    login: '.$login.' accept -> <a href="index.php">Home</a>
                </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                login: '.$login.' danger <a href="reg.php">Registration Page</a>
            </div>';
    }
    ?>

