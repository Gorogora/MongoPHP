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

function ejercicio6(titular){
    $.ajax({
        url: 'ejercicio6.php',
        type: "POST",        
        success: function(response) {
            $('#result_ej6').html(response);    
        }
    });
}

function ejercicio7(id_noticia){
    $.ajax({
        url: 'ejercicio7.php',
        type: "POST",  
        data: {id_noticia: id_noticia},
        success: function(response) {
            $('#result_ej7').html(response);            
        }
    });
}

function ejercicio8(etiqueta_principal, titular, autor){
    $.ajax({
        url: 'ejercicio8.php',
        type: "POST",  
        data: {etiqueta_principal: etiqueta_principal, titular: titular, autor: autor},
        success: function(response) {             
            if(response == -1){
                response = "<center>No se ha podido insertar</centar>";
                $('#result_ej8').html(response);
            }
            else if (response == 0) {
                response = "<center>Faltan campos por completar</centar>";
                $('#result_ej8').html(response);
            }
            else{
                $('#result_ej8').html(response); 
            }         
        }
    });
}
