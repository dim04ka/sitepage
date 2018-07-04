<?php
    session_start();
    header ( 'Content-Type: text/html;charset=utf-8' );
    include "header.php";
    include "db.php";
?>
<div class="container">
<table class="table">

  <thead class="thead-light">
  <tr>
      <th scope="col">id <span class="active sortid">↓</span><span>↑</span></th>
      <th scope="col">Name <span class="active sortname">↓</span><span>↑</span></th>
      <th scope="col">Price <span class="active sortprice">↓</span><span>↑</span></th>
      <th scope="col">Rating <span class="active sortrating">↓</span><span>↑</span></th>
    </tr>
    </thead>
  <tbody>
      <?php
      $result = mysql_query("SELECT id,name,price,rating FROM product");
      while($row = mysql_fetch_array($result)) {
        echo '<tr>
        <th scope="row">'.$row['id'].'</th>
        <td>'.$row['name'].'</td>
        <td>'.$row['price'].'</td>
        <td>'.$row['rating'].'</td>
        <td><button type="button" id="'.$row['id'].'" class="btn btn-primary edit">edit field</button></td>
        <td><button type="button" id="'.$row['id'].'" class="btn btn-danger delete">delete field</button></td>
    </tr>';
      }
        ?>

  </tbody>

</table>
<button type="button" class="btn btn-primary bye">add field</button>

<div class="modal" id="window">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="b-popup" id="popup1"  method="post" id="ajax_form" action="">
        <div class="form-group">
          <label for="name">name</label>
          <input type="text" class="form-control" name="name" id="name"  placeholder="Enter name">
          <label for="price">price</label>
          <input type="text" class="form-control" name="price" id="price"  placeholder="Enter price">
          <label for="rating">rating</label>
          <input type="text" class="form-control" name="rating" id="rating"  placeholder="Enter rating">
        </div>
        <button type="submit" class="btn btn-primary btn2" data-dismiss="modal" >Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>

</div>



    <?php
    include "main_text.php";
    include "main_text2.php";
    include "footer.php";
?>