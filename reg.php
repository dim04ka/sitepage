<?php
header ( 'Content-Type: text/html;charset=utf-8' );
//include "header.php";
?>

<div class="container">
    <form action="save_user.php" method="post" >
      <div class="form-group">
        <p>
        <label>Email address:<br></label>
        <input name="login" type="text" size="25" maxlength="25" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </p>
        <p>
        <label>Password:<br></label>
        <input name="password" type="password" size="15" maxlength="15" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <p>
        <label>Re Password:<br></label>
        <input name="passwordRe" type="password" size="15" maxlength="15" class="form-control" id="exampleInputPassword2" placeholder="Re Password">
        </p>
        <p>
        <input type="submit" name="submit" value="Зарегистрироваться" class="btn btn-primary">
        </p>
      </div>    
    </form>
</div>
    <?php 
   // include "footer.php";
    ?>