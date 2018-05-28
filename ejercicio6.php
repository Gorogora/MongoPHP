<?php
    try{
        // Conectar al servidor de MongoDB con usuario y contraseña a la base de
        // datos el pais
        $manager = new MongoDB\Driver\Manager("mongodb://adminpais:apais@127.0.0.1:27017/elpais");
        
        //componer y realizar la consulta
        $filtro = [ "autor" => "Manuel Ansede"];
        $campos = ["projection" => ['etiqueta_principal' => 1, 'titular' => 1, 'autor' => 1, 'noticia' => 1, 'noticias_relacionadas' => 1]];
        $query = new MongoDB\Driver\Query($filtro, $campos);
        $rows = $manager->executeQuery("elpais.noticias", $query);

        //componer resultado de la consulta
        foreach ($rows as $row) {
            $resultado = $resultado. '<p><b>Etiqueta principal: </b>' .$row->etiqueta_principal. '</p>';
            $resultado = $resultado. '<p><b>Titular: </b>' .$row->titular. '</p>';
            $resultado = $resultado. '<p><b>Autor: </b>' .$row->autor. '</p>';
            $resultado = $resultado. '<p><b>Noticia: </b>' .$row->noticia. '</p>';
            
            $resultado = $resultado. '<p><b>Noticias relacionadas:</b></p>';
            if(empty($row->noticias_relacionadas)){               
                $resultado = $resultado. '<ul>';
                foreach ($row->noticias_relacionadas as $noticia) {
                    
                    $filtro2 = [ "_id" => $noticia];
                    $campos2 = ["projection" => ['titular' => 1]];
                    $query2 = new MongoDB\Driver\Query($filtro2, $campos2);
                    $rows2 = $manager->executeQuery("elpais.noticias", $query2);
                    
                    foreach ($rows2 as $row2){
                        $resultado = $resultado. '<li>' .$row2->titular. '</li>';
                    }                   
                }
                $resultado = $resultado. '</ul>';                
            }
            else{
                $resultado = $resultado. '<p>No hay noticias relacionadas con ' .$row->titular. '</p>';
            } 
        }        
    } 
    catch (MongoDB\Driver\Exception\Exception $e) {
        $resultado = "<p>";
        $resultado = $resultado. "Exception:". $e->getMessage() . "<br>"; 
        $resultado = $resultado. "In file:". $e->getFile().  "<br>"; 
        $resultado = $resultado. "On line:". $e->getLine(). "<br>"; 
        $resultado = $resultado. "<p>";
        echo $resultado;
    }
    
?>

