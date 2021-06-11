<?php header('Location:' . getenv('HTTP_REFERER'));?>
<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

if (isset($_POST['Enviar'])){
    if (strlen($_POST["nombre"]) >= 1 && strlen($_POST["codigo_dane"]) >=1 && strlen($_POST["gobierno"]) >=1 && strlen($_POST["poblacion"]) >=1 && strlen($_POST["moneda"]) >=1 && strlen($_POST["departamento"]) >=1 && strlen($_POST["sector"]) >=1 ){
        $nombre = trim($_POST["nombre"]);
        $codigo = trim($_POST["codigo_dane"]);
        $gobierno = trim($_POST["gobierno"]);
        $poblacion = trim($_POST["poblacion"]);
        $moneda = trim ($_POST["moneda"]);
        $departamento = trim($_POST["departamento"]);
        $sector = trim($_POST["sector"]);
        $consulta = "REPLACE INTO paises (codigo_dane, nombre, tipo_gobierno, num_poblacio, moneda, num_departamentos, sector_economico) VALUES ($codigo,$nombre,$gobierno,$poblacion,$moneda,$departamento,$sector)";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
}
}

?>
