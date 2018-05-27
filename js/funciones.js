function ejercicio1(){
    $.ajax({
        url: 'ejercicio1.php',
        type: "POST",        
        success: function(response) {
            $('#eje1').html(response);    
        }
    });
}

function ejercicio2(){
    $.ajax({
        url: 'ejercicio2.php',
        type: "POST",        
        success: function(response) {
            $('#eje2').html(response);    
        }
    });
}

function ejercicio3(){
    $.ajax({
        url: 'ejercicio3.php',
        type: "POST",        
        success: function(response) {
            $('#tbody_ej3').html(response);    
        }
    });
}

