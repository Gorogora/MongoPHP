<?php

     if($_REQUEST['id_noticia']){
        //copiar el parámetro en la variable
        $id = $_REQUEST['id_noticia'];
         
        if($id != ""){
            $resultado="";
            try{
                // Conectar al servidor de MongoDB con usuario y contraseña a la base de
                // datos el pais
                $manager = new MongoDB\Driver\Manager("mongodb://adminpais:apais@127.0.0.1:27017/elpais");

                //Creamos un objeto de tipo Id                
                $id = new MongoDB\BSON\ObjectId($id);
                
                //componer y realizar la consulta
                $filtro = [ "_id" => $id];
                $campos = ["projection" => ['etiqueta_principal' => 1, 'titular' => 1, 'autor' => 1, 'noticia' => 1, 'etiquetas' => 1]];
                $query = new MongoDB\Driver\Query($filtro, $campos);
                $rows = $manager->executeQuery("elpais.noticias", $query);

                //componer resultado de la consulta
                foreach ($rows as $row) {
                    $resultado = '<div class="card-body">';
                    $resultado = $resultado. '<h3 class="card-title">' .$row->titular. '</h5>';
                    $resultado = $resultado. '<h6 class="card-subtitle mb-2 text-muted">' .$row->etiqueta_principal. '</h6>';
                    if(isset($row->noticia)){
                        $resultado = $resultado. $row->noticia;
                    }
                    else{
                        $resultado = $resultado. "La noticia no tiene contenido";
                    }                    
                    $resultado = $resultado. '<footer class="blockquote-footer">by <cite title="Source Title">' .$row->autor. '</cite></footer>';
                    $resultado = $resultado. '</div>';
                    if(!empty($row->etiquetas)){
                        $resultado = $resultado. '<div class="card-footer">';
                        foreach ($row->etiquetas as $etiqueta) {
                            $resultado = $resultado. '#' .$etiqueta. ' ';  
                        }
                        $resultado = $resultado. '</div>';
                    }
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
         
     }
    
?>

