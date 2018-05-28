<?php
function ejercicio5(){
    $resultado = "";
    try{
        // Conectar al servidor de MongoDB con usuario y contraseña a la base de
        // datos el pais
        $manager = new MongoDB\Driver\Manager("mongodb://adminpais:apais@127.0.0.1:27017/elpais");
        
        //componer y realizar la consulta
        $filtro = [ "etiquetas" => ['$in' => ['Ciencia']]];
        $campos = ["projection" => ['titular' => 1, 'frases_destacadas' => 1]];
        $query = new MongoDB\Driver\Query($filtro, $campos);
        $rows = $manager->executeQuery("elpais.noticias", $query);

        //componer resultado de la consulta
        foreach ($rows as $row) {
            $resultado = $resultado. '<p><b>Titular: </b>' .$row->titular. '</p>';
            $resultado = $resultado. '<p><b>Frases destacadas:</b></p>';
            if(empty($row->frases_destacadas)){
                $resultado = $resultado. '<ul>';
                foreach ($row->frases_destacadas as $frase) {
                    $resultado = $resultado. '<li>' .$frase. '</li>';
                }
                $resultado = $resultado. '</ul>';                
            }
            else{
                $resultado = $resultado. '<p>No hay frases destacadas en esta noticia para mostrar</p>';
            } 
            $resultado = $resultado. '<div class="mt-4 pt-4"></div>';
        } 
        echo $resultado;
    } 
    catch (MongoDB\Driver\Exception\Exception $e) {
        $resultado = "<p>";
        $resultado = $resultado. "Exception:". $e->getMessage() . "<br>"; 
        $resultado = $resultado. "In file:". $e->getFile().  "<br>"; 
        $resultado = $resultado. "On line:". $e->getLine(). "<br>"; 
        $resultado = $resultado. "<p>";
        echo $resultado;
    }
}   
?>

