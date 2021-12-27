function init(){
   
}

$(document).ready(function(){
    var us_id = $('#user_idx').val();

    if ( $('#rol_idx').val() == 1){
        $.post("../../controller/usuario.php?op=total", {us_id:us_id}, function (data) {
            data = JSON.parse(data);
            $('#lbltotal').html(data.TOTAL);
        }); 
    
        $.post("../../controller/usuario.php?op=totalabierto", {us_id:us_id}, function (data) {
            data = JSON.parse(data);
            $('#lbltotalabierto').html(data.TOTAL);
        });
    
        $.post("../../controller/usuario.php?op=totalcerrado", {us_id:us_id}, function (data) {
            data = JSON.parse(data);
            $('#lbltotalcerrado').html(data.TOTAL);
        });

        $.post("../../controller/usuario.php?op=grafico", {us_id:us_id},function (data) {
            data = JSON.parse(data);
    
            new Morris.Bar({
                element: 'divgrafico',
                data: data,
                xkey: 'nom',
                ykeys: ['total'],
                labels: ['Value'],
                barColors: ["#1AB244"], 
            });
        }); 

    }else{
        $.post("../../controller/registro.php?op=total",function (data) {
            data = JSON.parse(data);
            $('#lbltotal').html(data.TOTAL);
        }); 
    
        $.post("../../controller/registro.php?op=totalabierto",function (data) {
            data = JSON.parse(data);
            $('#lbltotalabierto').html(data.TOTAL);
        });
    
        $.post("../../controller/registro.php?op=totalcerrado", function (data) {
            data = JSON.parse(data);
            $('#lbltotalcerrado').html(data.TOTAL);
        });  

        $.post("../../controller/registro.php?op=grafico",function (data) {
            data = JSON.parse(data);
    
            new Morris.Bar({
                element: 'divgrafico',
                data: data,
                xkey: 'nom',
                ykeys: ['total'],
                labels: ['Value']
            });
        }); 

    }

 
});

init();