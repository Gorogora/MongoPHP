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

//función correspondiente al ejercicio 3
function ejercicio3(){
    $.ajax({
        url: 'ejercicio3.php',
        type: "POST",        
        success: function(response) {
            $('#tbody_ej3').html(response);    
        }
    });
}

function ejercicio4(){
    $.ajax({
        url: 'ejercicio4.php',
        type: "POST",        
        success: function(response) {
            $('#result_ej4').html(response);    
        }
    });
}

function ejercicio5(){
    $.ajax({
        url: 'ejercicio5.php',
        type: "POST",        
        success: function(response) {
            $('#result_ej5').html(response);    
        }
    });
}

function ejercicio6(){
    $.ajax({
        url: 'ejercicio6.php',
        type: "POST",        
        success: function(response) {
            $('#result_ej6').html(response);    
        }
    });
}
