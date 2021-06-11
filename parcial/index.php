<h1>Formulario de paises</h1>

<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT codigo_dane, nombre, tipo_gobierno, num_poblacio, moneda, num_departamentos, sector_economico FROM paises";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$codigo = (isset($_POST['codigo_dane'])) ? $_POST['codigo_dane'] : '';
$gobierno = (isset($_POST['gobierno'])) ? $_POST['gobierno'] : '';
$poblacion = (isset($_POST['poblacion'])) ? $_POST['poblacion'] : '';
$moneda = (isset($_POST['moneda'])) ? $_POST['moneda'] : '';
$departamento = (isset($_POST['departamento'])) ? $_POST['departamento'] : '';
$sector = (isset($_POST['sector'])) ? $_POST['sector'] : '';
?>

<form action="registro.php" method="POST"> 
nombre: 
<input type="text" name="nombre" maxlength="50"><br>
    <br>
Codigo Dane:
<input type="text" name="codigo_dane"></input><br>
<br>
Tipo de Gobierno:
<input type="text" name="gobierno"></input><br>
<br>
Numero de Poblacion:
<input type="text" name="poblacion"></input><br>
<br>
Tipo de moneda:
<input type="text" name="moneda"></input><br>
<br>
Numero de Departamentos:
<input type="text" name="departamento"></input><br>
<br>
Sector economico principal:
<input type="text" name="sector"></input><br>
<br>
<button id="btnNuevo" type="submit" class="btn btn-success" data-toggle="modal" name="Enviar">Enviar</button>
</form>
<br>
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>codigo_dane</th>
                                <th>Nombre del pais</th>
                                <th>Tipo de gobierno</th>
                                <th>Numero de poblacion</th>
                                <th>tipo de moneda</th>
                                <th>Numero de departamentos</th>
                                <th>Sector economico principal</th>
                            </tr>
                        </thead>
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
