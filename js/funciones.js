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

