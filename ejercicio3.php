<?php
function ejercicio3(){
    $resultado = "";
    try{
        // Conectar al servidor de MongoDB con usuario y contraseña a la base de
        // datos el pais
        $manager = new MongoDB\Driver\Manager("mongodb://adminpais:apais@127.0.0.1:27017/elpais");
        
        //componer y realizar la consulta
        $filtro = [ ];
        $campos = ["projection" => ['_id' => 1, 'titular' => 1]];
        $query = new MongoDB\Driver\Query($filtro, $campos);
        $rows = $manager->executeQuery("elpais.noticias", $query);

        //mostrar los resultados (cuerpo de la tabla)
        foreach ($rows as $id => $row) {
            $resultado = $resultado. '<tr>';
            $resultado = $resultado. '<td>'.($id + 1).'</td>';
            $resultado = $resultado. '<td>'.$row->titular.'</td>';
            $resultado = $resultado. '</tr>';
        }
        
        if($resultado!=""){
            echo $resultado;
        }
        
        else{
            echo "<center>No hay titulares para mostrar</center>";
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
}   
?>

