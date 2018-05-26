function ejercicio1(){
    $.ajax({
        url: 'ejercicio1.php',
        type: "POST",        
        success: function(response) {
            $('#eje1').html(response);    
        },
    });
}


