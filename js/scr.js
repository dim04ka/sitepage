
/*-------------open window and add field in table --------------*/
$('.bye').click(function(){
    $('.modal').modal();
    
});

/*-------------close window  --------------*/
$('.bye2').click(function(){
    //$('.modal').modal('hide');
    
    
});
/*-------------open window and edit field in table --------------*/
$('.edit').click(function(){
   // $('.modal').modal();
    $id = this.id;
    $name = $row['name'];
    //$result = mysql_query("SELECT id,name,price,rating FROM product WHERE id=1");


    //var name = $(this).val('name');
    //$('#name').val() = $del;
    alert($name);
    //var_dump($name);
    
});


/*-------------delete field--------------*/
$('.delete').click(function(){
    $del = this.id;
    alert($del);
   // $result = mysql_query("SELECT id,name,price,rating FROM product");
   mysql_query("DELETE FROM product WHERE id=1");
   // return false;
});