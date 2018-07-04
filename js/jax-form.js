/*$(function(){
    $(".btn2").click(function(){
       var name = $("#name").val();
       var price = $("#price").val();
       var rating = $("#rating").val();
       $.ajax({
          type: "POST",
          url: "add_field.php",
          data: {"name": name, "price": price,"rating": rating},
          cache: false,
          success: function(response){
              var messageResp = new Array('Ваше сообщение отправлено','Сообщение не отправлено Ошибка базы данных','Нельзя отправлять пустые сообщения');
              var resultStat = messageResp[Number(response)];
              if(response == 0){
                 
                 $("#name").val("");
                 $("#price").val("");
                 $("#rating").val("");
                 
              }
              $("#resp").text(resultStat).show().delay(1500).fadeOut(800);
                                                                
                                                }
           });
           return false;
                                                                
     });
 });*/

 $(document).ready(function() {
    $('form').submit(function(event){
         event.preventDefault();
        var name = $("#name").val();
        var price = $("#price").val();
        var rating = $("#rating").val();
        $.ajax({
            type: "POST",
            url: "add_field.php",
            data: {"name": name, "price": price,"rating": rating},
            cache: false,
            success: function(response){
                var messageResp = new Array('Ваше сообщение отправлено','Сообщение не отправлено Ошибка базы данных','Нельзя отправлять пустые сообщения');
                var resultStat = messageResp[Number(response)];
                if(response == 0){
                   
                   $("#name").val("");
                   $("#price").val("");
                   $("#rating").val("");
                   
                }
                $("#resp").text(resultStat).show().delay(1500).fadeOut(800);
                                                                  
                                                  }
             });
             return false;
    });

 });