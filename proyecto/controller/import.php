<?php
// importar la ruta del php excel 
require '../PHPExcel/Classes/PHPExcel.php';
require '../sql/conexion.php';
// definir la variable para el archivo
$archivos = '../files/empleados.xlsx';

// cargar nuestra hoja excel 
PHPExcel_Settings :: setZipClass (PHPExcel_Settings :: PCLZIP);
$excel = PHPExcel_IOFactory::load($archivos);

// cargar la hoja de calculo que queremos 
$excel -> setActiveSheetIndex(0);

// obtener el numero de filas de nuestro archivo excel 
$numerofila = $excel -> setActiveSheetIndex(0) -> getHighestRow();

for($i=1;$i <= $numerofila;$i++){
    $numero_de_nomina = $excel -> getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
    $nombre = $excel -> getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
    $codigo = $excel -> getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
    $departamento = $excel -> getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
    $puesto = $excel -> getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
    $area = $excel -> getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
    $estatus = $excel -> getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
    $direccion = $excel -> getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
    $localidad = $excel -> getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
    $municipio = $excel -> getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
    $cp = $excel -> getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
    $estado = $excel -> getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
    $fecha_alta = $excel -> getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
    $nss = $excel -> getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
    $curp = $excel -> getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
    $rfc = $excel -> getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
    $fecha_nacimiento = $excel -> getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
    $sexo = $excel -> getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
    $transporte = $excel -> getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
    $locker_asignado = $excel -> getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
    $CONSULTA = "INSERT INTO tb_empleados(numero_de_nomina, nombre, codigo, departamento,
    puesto, area, estatus, direccion, localidad, municipio, cp, estado, fecha_alta, nss, curp,
    rfc, fecha_nacimiento, sexo, transporte, locker_asignado)
    value ('$numero_de_nomina', '$nombre', '$codigo', '$departamento', '$puesto', '$area', '$estatus', '$direccion',
    '$localidad', '$municipio', '$cp', '$estado', '$fecha_alta', '$nss', '$curp', '$rfc', '$fecha_nacimiento', '$sexo',
    '$transporte', '$locker_asignado')";
    $resultado = $conexion->query($CONSULTA);
    
}
?>
