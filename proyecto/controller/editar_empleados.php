<?php
if(isset($_POST)){
    //Conexion a la bd
    require_once '../sql/conexion.php';
    //sesion start
    session_start();
    //Recoger los valores del formulario de Actualizar empleados
    $id = isset ($_POST['idempleado']) ? $_POST['idempleado'] : false;
    $numero_de_nomina = isset ($_POST['numero_de_nomina']) ? $_POST['numero_de_nomina'] : false;
    $nombre = isset ($_POST['nombre']) ? $_POST['nombre'] : false;
    $codigo = isset ($_POST['codigo']) ? $_POST['codigo'] : false;
    $departamento = isset ($_POST['departamento']) ? $_POST['departamento'] : false; 
    $puesto = isset ($_POST['puesto']) ? $_POST['puesto'] : false;
    $area = isset ($_POST['area']) ? $_POST['area'] : false;
    $estatus = isset ($_POST['estatus']) ? $_POST['estatus'] : false;
    $direccion = isset ($_POST['direccion']) ? $_POST['direccion'] : false;
    $localidad = isset ($_POST['localidad']) ? $_POST['localidad'] : false;
    $municipio = isset ($_POST['municipio']) ? $_POST['municipio'] : false;
    $cp = isset ($_POST['cp']) ? $_POST['cp'] : false;
    $estado = isset ($_POST['estado']) ? $_POST['estado'] : false;
    $fecha_alta = isset ($_POST['fecha_alta']) ? $_POST['fecha_alta'] : false;
    $nss = isset ($_POST['nss']) ? $_POST['nss'] : false;
    $curp = isset ($_POST['curp']) ? $_POST['curp'] : false;
    $rfc = isset ($_POST['rfc']) ? $_POST['rfc'] : false;
    $fecha_nacimiento = isset ($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : false;
    $sexo = isset ($_POST['sexo']) ? $_POST['sexo'] : false;
    $transporte = isset ($_POST['transporte']) ? $_POST['transporte'] : false;
    $locker_asignado = isset ($_POST['locker_asignado']) ? $_POST['locker_asignado'] : false;
    $numero_uniforme = isset ($_POST['numero_uniforme']) ? $_POST['numero_uniforme'] : false;
    $color = isset ($_POST['color']) ? $_POST['color'] : false;
    $talla = isset ($_POST['talla']) ? $_POST['talla'] : false;
    // Array de errores 
    $errores = array();

    //Validar los datos antes de guardarlos en la bd
    // validar el numero de nomina
    if(!empty($numero_de_nomina)){
        $numero_de_nomina_validado = true;
    }else{
        $numero_de_nomina_validado = false;
        $errores['numero_de_nomina'] = "El numero de nomina esta vacio";
    }
    // Validar el nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    // validar el codigo
    if(!empty($codigo)){
        $codigo_validado = true;
    }else{
        $codigo_validado = false;
        $errores['codigo'] = "El codigo esta vacio";
    }
    // Validar el departamento
    if(!empty($departamento) && !is_numeric($departamento) && !preg_match("/[0-9]/", $departamento)){
        $departamento_validado = true;
    }else{
        $departamento_validado = false;
        $errores['departamento'] = "El departamento no es valido";
    }
    // Validar el puesto
    if(!empty($puesto)){
        $puesto_validado = true;
    }else{
        $puesto_validado = false;
        $errores['puesto'] = "El puesto esta vacio";
    }
     // validar el area
     if(!empty($area)){
        $area_validado = true;
    }else{
        $area_validado = false;
        $errores['area'] = "El area esta vacia";
    }
    // Validar el estatus
    if(!empty($estatus) && !is_numeric($estatus) && !preg_match("/[0-9]/", $estatus)){
        $estatus_validado = true;
    }else{
        $estatus_validado = false;
        $errores['estatus'] = "El estatus no es valido";
    }
   // validar la direccion
     if(!empty($direccion)){
        $direccion_validado = true;
    }else{
        $direccion_validado = false;
        $errores['direccion'] = "La direccion esta vacia";
    }
    // Validar localidad
    if(!empty($localidad) && !is_numeric($localidad) && !preg_match("/[0-9]/", $localidad)){
        $localidad_validado = true;
    }else{
        $localidad_validado = false;
        $errores['localidad'] = "La localidad no es valida";
    }
    // Validar el municipio
    if(!empty($municipio) && !is_numeric($municipio) && !preg_match("/[0-9]/", $municipio)){
        $municipio_validado = true;
    }else{
        $municipio_validado = false;
        $errores['municipio'] = "El municipio no es valido";
    }
    // validar el codigo postal
    if(!empty($cp)){
        $cp_validado = true;
    }else{
        $cp_validado = false;
        $errores['cp'] = "el codigo postal esta vacio";
    }
    // Validar el estado 
    if(!empty($estado) && !is_numeric($estado) && !preg_match("/[0-9]/", $estado)){
        $estado_validado = true;
    }else{
        $estado_validado = false;
        $errores['estado'] = "El estado no es valido";
    }
    // validar fecha alta
    if(!empty($fecha_alta)){
        $fecha_alta_validado = true;
    }else{
        $fecha_alta_validado = false;
        $errores['fecha_alta'] = "La fecha alta esta vacia";
    }
    // validar nss
    if(!empty($nss)){
        $nss_validado = true;
    }else{
        $nss_validado = false;
        $errores['nss'] = "El nss esta vacio";
    }
    // validar Curp
    if(!empty($curp)){
        $curp_validado = true;
    }else{
        $curp_validado = false;
        $errores['curp'] = "La curp esta vacia";
    }
    // validar RFC
    if(!empty($rfc)){
        $rfc_validado = true;
    }else{
        $rfc_validado = false;
        $errores['rfc'] = "El RFC esta vacio";
    }
    // validar fecha nacimiento
    if(!empty($fecha_nacimiento)){
        $fecha_nacimiento_validado = true;
    }else{
        $fecha_nacimiento_validado = false;
        $errores['fecha_nacimiento'] = "La fecha de nacimiento esta vacia";
    }
    // Validar el sexo
    if(!empty($sexo) && !is_numeric($sexo) && !preg_match("/[0-9]/", $sexo)){
        $sexo_validado = true;
    }else{
        $sexo_validado = false;
        $errores['sexo'] = "El sexo no es valido";
    }
    // Validar el transporte
    if(!empty($transporte) && !is_numeric($transporte) && !preg_match("/[0-9]/", $transporte)){
        $transporte_validado = true;
    }else{
        $transporte_validado = false;
        $errores['transporte'] = "El transporte no es valido";
    }
    // validar numero uniforme
    if(!empty($numero_uniforme)){
        $numero_uniforme_validado = true;
    }else{
        $numero_uniforme_validado = false;
        $errores['numero_uniforme'] = "El numero del uniforme esta vacio";
    }
    // Validar Color
    if(!empty($color) && !is_numeric($color) && !preg_match("/[0-9]/", $color)){
        $color_validado = true;
    }else{
        $color_validado = false;
        $errores['color'] = "El color no es valido";
    }
    // Validar la talla 
    if(!empty($talla)){
        $talla_validado = true;
    }else{
        $talla_validado = false;
        $errores['talla'] = "La talla esta vacia";
    }
    

        // Actualizar EMPLEADO EN LA TABLA DE EMPLEADOS DE LA BBDD
        $sql = "UPDATE tb_empleados SET numero_de_nomina = :numero_de_nomina, nombre = :nombre, codigo = :codigo, departamento = :departamento,
                puesto = :puesto, area = :area, estatus = :estatus, direccion = :direccion, localidad= :localidad, municipio = :municipio,
                cp = :cp, fecha_alta = :fecha_alta, nss = :nss, curp = :curp, rfc = :rfc, fecha_nacimiento = :fecha_nacimiento, 
                sexo = :sexo, transporte = :transporte, locker_asignado = :locker_asignado, numero_uniforme = :numero_uniforme, color = :color,
                talla = :talla WHERE idempleado = :id";
                $stmt = $conexion->prepare($sql);
                $stmt->bindParam(":numero_de_nomina", $numero_de_nomina);
                $stmt->bindParam(":nombre", $nombre);
                $stmt->bindParam(":codigo", $codigo);
                $stmt->bindParam(":departamento", $departamento);
                $stmt->bindParam(":puesto", $puesto);
                $stmt->bindParam(":area", $area);
                $stmt->bindParam(":estatus", $estatus);
                $stmt->bindParam(":direccion", $direccion);
                $stmt->bindParam(":localidad", $localidad);
                $stmt->bindParam(":municipio", $municipio);
                $stmt->bindParam(":cp", $cp);
                $stmt->bindParam(":fecha_alta", $fecha_alta);
                $stmt->bindParam(":nss", $nss);
                $stmt->bindParam(":curp", $curp);
                $stmt->bindParam(":rfc", $rfc);
                $stmt->bindParam(":fecha_nacimiento", $fecha_nacimiento);
                $stmt->bindParam(":sexo", $sexo);
                $stmt->bindParam(":transporte", $transporte);
                $stmt->bindParam(":locker_asignado", $locker_asignado);
                $stmt->bindParam(":numero_uniforme", $numero_uniforme);
                $stmt->bindParam(":color", $color);
                $stmt->bindParam(":talla", $talla);
                if($stmt->execute()){
                    header("location: ../views/lista_empleados.php");
                }else{
                    print "Error al actualizar";
                }

        
       
}
