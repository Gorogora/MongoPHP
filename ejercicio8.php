<?php

    if($_REQUEST['etiqueta_principal'] && $_REQUEST['titular'] && $_REQUEST['autor']){
        //copiar los parámetros en variables
        $etiqueta = $_REQUEST['etiqueta_principal'];
        $titular = $_REQUEST['titular'];
        $autor = $_REQUEST['autor'];
         
        //comprobar que las variables no están vacías
        if($etiqueta != "" && $titular != "" && $autor != ""){
            $resultado="";
            try{
                // Conectar al servidor de MongoDB con usuario y contraseña a la base de
                // datos el pais
                $manager = new MongoDB\Driver\Manager("mongodb://adminpais:apais@127.0.0.1:27017/elpais");

                //creamos el insert
                $bulk = new MongoDB\Driver\BulkWrite;
                $doc = ['etiqueta_principal' => $etiqueta, 'titular' => $titular, 'autor'=> $autor];
                //realizamos la insercción
                $id = $bulk->insert($doc);
                $manager->executeBulkWrite('elpais.noticias', $bulk);
                 
                //si no delvuelve id es porque no ha podido insertar
                if((String)$id == ""){
                    echo "-1";  //
                }
                else{
                    //componer y realizar la consulta
                    $filtro = [ "_id" => $id];
                    $campos = ["projection" => ['etiqueta_principal' => 1, 'titular' => 1, 'autor' => 1]];
                    $query = new MongoDB\Driver\Query($filtro, $campos);
                    $rows = $manager->executeQuery("elpais.noticias", $query);

                    //componer resultado de la consulta
                    foreach ($rows as $row) {
                        $resultado = '<div class="card-body">';
                        $resultado = $resultado. '<h3 class="card-title">' .$row->titular. '</h5>';
                        $resultado = $resultado. '<h6 class="card-subtitle mb-2 text-muted">' .$row->etiqueta_principal. '</h6>';
                        $resultado = $resultado. '<footer class="blockquote-footer">by <cite title="Source Title">' .$row->autor. '</cite></footer>';
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
    else{
        $resultado = "0";
        echo $resultado;
    }
    
?>

