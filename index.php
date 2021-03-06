<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <title>PDO+PHP+MongoDB</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <!-- Ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- JS -->
        <script type="text/javascript" src="js/funciones.js"></script>
    </head>
    <body>
        <div class="container">
            <center><h1>PHP + MySQL</h1></center> 
            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-eje1-tab" data-toggle="pill" href="#v-pills-eje1" role="tab" aria-controls="v-pills-eje1" aria-selected="true">Ejercicio 1</a>
                    <a class="nav-link" id="v-pills-eje2-tab" data-toggle="pill" href="#v-pills-eje2" role="tab" aria-controls="v-pills-eje2" aria-selected="false">Ejercicio 2</a>
                    <a class="nav-link" id="v-pills-eje3-tab" data-toggle="pill" href="#v-pills-eje3" role="tab" aria-controls="v-pills-eje3" aria-selected="false">Ejercicio 3</a>
                    <a class="nav-link" id="v-pills-eje4-tab" data-toggle="pill" href="#v-pills-eje4" role="tab" aria-controls="v-pills-eje4" aria-selected="false">Ejercicio 4</a>
                    <a class="nav-link" id="v-pills-eje5-tab" data-toggle="pill" href="#v-pills-eje5" role="tab" aria-controls="v-pills-eje5" aria-selected="false">Ejercicio 5</a>
                    <a class="nav-link" id="v-pills-eje6-tab" data-toggle="pill" href="#v-pills-eje6" role="tab" aria-controls="v-pills-eje6" aria-selected="false">Ejercicio 6</a>
                    <a class="nav-link" id="v-pills-eje7-tab" data-toggle="pill" href="#v-pills-eje7" role="tab" aria-controls="v-pills-eje7" aria-selected="false">Ejercicio 7</a>
                    <a class="nav-link" id="v-pills-eje8-tab" data-toggle="pill" href="#v-pills-eje8" role="tab" aria-controls="v-pills-eje8" aria-selected="false">Ejercicio 8</a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!--        ************************** EJERCICIO 1 **************************  -->
                        <div class="tab-pane fade show active" id="v-pills-eje1" role="tabpanel" aria-labelledby="v-pills-eje1-tab">
                            <h2>Conexión a la base de datos</h2>
                            <button class="btn btn-success btn-lg btn-block" type="button" onclick="ejercicio1();return false;">
                                Conectar
                            </button>  
                            <div id="eje1"></div>
                        </div>
                        
                        <!--        ************************** EJERCICIO 2 **************************  -->
                        <div class="tab-pane fade" id="v-pills-eje2" role="tabpanel" aria-labelledby="v-pills-eje2-tab">
                            <h2>Conexión a la base de datos</h2>
                            <button class="btn btn-success btn-lg btn-block" type="button" onclick="ejercicio2();return false;">
                                Conectar con usuario adminpais
                            </button>  
                            <div id="eje2"></div>
                        </div>
                        
                        <!--        ************************** EJERCICIO 3 **************************  -->
                        <div class="tab-pane fade" id="v-pills-eje3" role="tabpanel" aria-labelledby="v-pills-eje3-tab">
                            <h2>Titulares</h2>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                                <th>Número</th>
                                                <th>Titular</th>
                                        </tr>                                    
                                    </thead>
                                    <?php
                                    include 'ejercicio3.php';
                                    ejercicio3();
                                    ?>
                                    <tbody id="tbody_ej3"></tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!--        ************************** EJERCICIO 4 **************************  -->
                        <div class="tab-pane fade" id="v-pills-eje4" role="tabpanel" aria-labelledby="v-pills-eje4-tab">
                            <h2>Noticias</h2>
                            <?php
                                include 'ejercicio4.php';
                                ejercicio4();
                            ?>
                            <div id="result_ej4"></div>
                        </div>
                        
                        <!--        ************************** EJERCICIO 5 **************************  -->
                        <div class="tab-pane fade" id="v-pills-eje5" role="tabpanel" aria-labelledby="v-pills-eje5-tab">
                            <h2>Noticias de Ciencia</h2>
                            <?php
                                include 'ejercicio5.php';
                                ejercicio5();
                            ?>
                            <div id="result_ej5"></div>
                        </div>
                        
                        <!--        ************************** EJERCICIO 6 **************************  -->
                        <div class="tab-pane fade" id="v-pills-eje6" role="tabpanel" aria-labelledby="v-pills-eje6-tab">
                            <h2>Noticias de Manuel Ansede</h2>
                            <?php
                                include 'ejercicio6.php';
                                ejercicio6();
                            ?>
                            <div id="result_ej6"></div>
                        </div>
                        
                        <!--        ************************** EJERCICIO 7 **************************  -->
                        <div class="tab-pane fade" id="v-pills-eje7" role="tabpanel" aria-labelledby="v-pills-eje7-tab">
                            <?php
                                // Conectar al servidor de MongoDB con usuario y contraseña a la base de
                                // datos el pais
                                $manager = new MongoDB\Driver\Manager("mongodb://adminpais:apais@127.0.0.1:27017/elpais");

                                //componer y realizar la consulta
                                $filtro = [ ];
                                $campos = ["projection" => ['_id' => 1, 'titular' => 1]];
                                $query = new MongoDB\Driver\Query($filtro, $campos);
                                $rows = $manager->executeQuery("elpais.noticias", $query);
                            ?>
                            <label for="selectTitulares">Selecciona un titular para ver la noticia completa</label>
                            <div class="input-group">                                
                                <select class="custom-select" id="selectTitulares">
                                    <option selected>Titulares...</option>
                                    <?php
                                    foreach ($rows as $row) {
                                    ?>
                                        <option value="<?php echo $row->_id; ?>">
                                            <?php echo $row->titular; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>                                    
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" onclick="ejercicio7($('#selectTitulares').val());return false;">
                                            Buscar
                                    </button>
                                </div>
                            </div> 
                            <div class="card text-dark">  
                                <div id="result_ej7"></div>
                            </div>
                        </div>
                        
                        <!--        ************************** EJERCICIO 8 **************************  -->
                        <div class="tab-pane fade" id="v-pills-eje8" role="tabpanel" aria-labelledby="v-pills-eje8-tab">
                            <h2>Insertar una noticia</h2>
                            <div class="card bg-light text-dark">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group row">
                                            <label for="inputEtiqueta" class="col-sm-2 col-form-label">Etiqueta principal</label>
                                            <div class="col-sm-10">
                                              <input type="text" class="form-control" id="inputEtiqueta">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputTitular" class="col-sm-2 col-form-label">Titular</label>
                                            <div class="col-sm-10">
                                              <input type="text" class="form-control" id="inputTitular">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputAutor" class="col-sm-2 col-form-label">Autor</label>
                                            <div class="col-sm-10">
                                              <input type="text" class="form-control" id="inputAutor">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" onclick="ejercicio8($('#inputEtiqueta').val(), $('#inputTitular').val(), $('#inputAutor').val());return false;">Insertar</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card text-dark">  
                                <div id="result_ej8"></div>
                            </div>
                        </div>
                        
                        
                        
                        
                </div>
            </div>
        </div>
    </body>
</html>
