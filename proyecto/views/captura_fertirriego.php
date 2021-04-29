<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="../js/materialize.min.js"></script>      
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--JavaScript at end of body for optimized loading-->
    <script src="../js/javascript.js"></script>
    <link rel="stylesheet" href="../css/stylesheet.css">
    
  </head>
  <body> 
    <!-- Captura Fertirriego-->
    <ul id="tabs-swipe-demo" class="tabs  center">
        <li class="tab col s3"><a class="active" href="#test-swipe-1">Lunes</a></li>
        <li class="tab col s3"><a href="#test-swipe-2">Martes</a></li>
        <li class="tab col s3"><a href="#test-swipe-3">Miercoles</a></li>
        <li class="tab col s3"><a href="#test-swipe-4">Jueves</a></li>
        <li class="tab col s3"><a href="#test-swipe-5">Viernes</a></li>
        <li class="tab col s3"><a href="#test-swipe-6">Sabado</a></li>
        <li class="tab col s3"><a href="#test-swipe-7">Domingo</a></li>
    </ul>
    <!-- Captura Lunes-->
    <div id="test-swipe-1" class="col s12">
        <div class="container">
                <h4 class="center">Lunes</h4>
            <div class="valign-wrapper center">
                <p class="left">Francisco perez vargas</p>
            </div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                        <select>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="3">D</option>
                        </select>
                            <label for="banda">Niveles</label>
                    </div>
                    <div class="input-field col s3">
                        <select>
                            <option value="" disabled selected>Pago Extra</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago Extra">Pago Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Horas Extra" type="number" class="validate">
                        <label for="Horas Extra">Horas Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <select>
                            <option value="" disabled selected>Pago por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por Guardia">Pago por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <select>
                            <option value="" disabled selected>Pago por dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por dia festivo">Pago por dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select>
                            <option value="" disabled selected>Pago por guardia en dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por guardia en dia festivo">Pago por guardia en dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select>
                            <option value="" disabled selected>Permiso por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Permiso por Guardia">Permiso por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Entrada</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Salida</label>
                    </div>
                    <div class="input-field col s4">
                        <select>
                            <option value="1">Asistencia</option>
                            <option value="2">Inasistencia</option>
                            <option value="3">Permiso</option>
                            <option value="4">Vacaciones</option>
                            <option value="5">Festivo</option>
                        </select>
                        <label>Asistencia</label>
                    </div>
                </div>
                </div>
                <div>
                <div class="center">
                    <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                    <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
                </div>           
            </form>
        </div>
    </div>
    <!-- Captura Martes-->
    <div id="test-swipe-2" class="col s12">
        <div class="container">
                <h4 class="center">Martes</h4>
            <div class="valign-wrapper center">
                <p class="left">Francisco perez vargas</p>
            </div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                        <select>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="3">D</option>
                        </select>
                         <label for="banda">Niveles</label>
                </div>
                <div class="input-field col s3">
                    <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                      <option value="" disabled selected>Pago Extra</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    </select>
                      <label for="Pago Extra">Pago Extra</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Horas Extra" type="number" class="validate">
                    <label for="Horas Extra">Horas Extra</label>
                </div>
                <div class="input-field col s3">
                    <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                        <option value="" disabled selected>Pago por Guardia</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                        <label for="Pago por Guardia">Pago por Guardia</label>
                </div>
                <div class="input-field col s4">
                    <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                        <option value="" disabled selected>Pago por dia festivo</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                        <label for="Pago por dia festivo">Pago por dia festivo</label>
                </div>
                <div class="input-field col s4">
                    <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                        <option value="" disabled selected>Pago por guardia en dia festivo</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                        <label for="Pago por guardia en dia festivo">Pago por guardia en dia festivo</label>
                </div>
                <div class="input-field col s4">
                    <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                        <option value="" disabled selected>Permiso por Guardia</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                        <label for="Permiso por Guardia">Permiso por Guardia</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">access_time</i>
                    <input type="text" class="timepicker">
                    <label for="icon_prefix3">Entrada</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">access_time</i>
                    <input type="text" class="timepicker">
                    <label for="icon_prefix3">Salida</label>
                </div>
                <div class="input-field col s4">
                    <select>
                        <option value="1">Asistencia</option>
                        <option value="2">Inasistencia</option>
                        <option value="3">Permiso</option>
                        <option value="4">Vacaciones</option>
                        <option value="5">Festivo</option>
                    </select>
                    <label>Asistencia</label>
                </div>
                </div>
                </div>
                <div>
                    <div class="center">
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
                    </div>
            </form>
         </div>
    </div>
    <!-- Captura Miercoles-->
    <div id="test-swipe-3" class="col s12">
        <div class="container">
                <h4 class="center">Miercoles</h4>
            <div class="valign-wrapper center">
                <p class="left">Francisco perez vargas</p>
            </div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                        <select>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="3">D</option>
                        </select>
                         <label for="banda">Niveles</label>
                    </div>
                    <div class="input-field col s3">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                        <option value="" disabled selected>Pago Extra</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        </select>
                        <label for="Pago Extra">Pago Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Horas Extra" type="number" class="validate">
                        <label for="Horas Extra">Horas Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por Guardia">Pago por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por dia festivo">Pago por dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por guardia en dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por guardia en dia festivo">Pago por guardia en dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Permiso por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Permiso por Guardia">Permiso por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Entrada</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Salida</label>
                    </div>
                    <div class="input-field col s4">
                        <select>
                            <option value="1">Asistencia</option>
                            <option value="2">Inasistencia</option>
                            <option value="3">Permiso</option>
                            <option value="4">Vacaciones</option>
                            <option value="5">Festivo</option>
                        </select>
                        <label>Asistencia</label>
                    </div>
                </div>
                </div>
                <div>
                    <div class="center">
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
                    </div>
            </form>
        </div>
    </div>
    <!-- Captura Jueves-->
    <div id="test-swipe-4" class="col s12">
        <div class="container">
                <h4 class="center">Jueves</h4>
            <div class="valign-wrapper center">
                <p class="left">Francisco perez vargas</p>
            </div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                        <select>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="3">D</option>
                        </select>
                         <label for="banda">Niveles</label>
                    </div>
                    <div class="input-field col s3">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                        <option value="" disabled selected>Pago Extra</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        </select>
                        <label for="Pago Extra">Pago Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Horas Extra" type="number" class="validate">
                        <label for="Horas Extra">Horas Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por Guardia">Pago por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por dia festivo">Pago por dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por guardia en dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por guardia en dia festivo">Pago por guardia en dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Permiso por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Permiso por Guardia">Permiso por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Entrada</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Salida</label>
                    </div>
                    <div class="input-field col s4">
                        <select>
                            <option value="1">Asistencia</option>
                            <option value="2">Inasistencia</option>
                            <option value="3">Permiso</option>
                            <option value="4">Vacaciones</option>
                            <option value="5">Festivo</option>
                        </select>
                        <label>Asistencia</label>
                    </div>
                </div>
                </div>
                <div>
                    <div class="center">
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
                    </div>
            </form>
        </div>
    </div>
    <!-- Captura Viernes-->
    <div id="test-swipe-5" class="col s12">
        <div class="container">
                <h4 class="center">Viernes</h4>
            <div class="valign-wrapper center">
                <p class="left">Francisco perez vargas</p>
            </div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                        <select>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="3">D</option>
                        </select>
                         <label for="banda">Niveles</label>
                    </div>
                    <div class="input-field col s3">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                        <option value="" disabled selected>Pago Extra</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        </select>
                        <label for="Pago Extra">Pago Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Horas Extra" type="number" class="validate">
                        <label for="Horas Extra">Horas Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por Guardia">Pago por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por dia festivo">Pago por dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por guardia en dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por guardia en dia festivo">Pago por guardia en dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Permiso por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Permiso por Guardia">Permiso por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Entrada</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Salida</label>
                    </div>
                    <div class="input-field col s4">
                        <select>
                            <option value="1">Asistencia</option>
                            <option value="2">Inasistencia</option>
                            <option value="3">Permiso</option>
                            <option value="4">Vacaciones</option>
                            <option value="5">Festivo</option>
                        </select>
                        <label>Asistencia</label>
                    </div>
                </div>
                </div>
                <div>
                    <div class="center">
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
                    </div>
            </form>
        </div>
    </div>
    <!-- Captura Sabado-->
    <div id="test-swipe-6" class="col s12">
        <div class="container">
                <h4 class="center">Sabado</h4>
            <div class="valign-wrapper center">
                <p class="left">Francisco perez vargas</p>
            </div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                        <select>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="3">D</option>
                        </select>
                         <label for="banda">Niveles</label>
                    </div>
                    <div class="input-field col s3">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                        <option value="" disabled selected>Pago Extra</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        </select>
                        <label for="Pago Extra">Pago Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Horas Extra" type="number" class="validate">
                        <label for="Horas Extra">Horas Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por Guardia">Pago por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por dia festivo">Pago por dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por guardia en dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por guardia en dia festivo">Pago por guardia en dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Permiso por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Permiso por Guardia">Permiso por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Entrada</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Salida</label>
                    </div>
                    <div class="input-field col s4">
                        <select>
                            <option value="1">Asistencia</option>
                            <option value="2">Inasistencia</option>
                            <option value="3">Permiso</option>
                            <option value="4">Vacaciones</option>
                            <option value="5">Festivo</option>
                        </select>
                        <label>Asistencia</label>
                    </div>
                </div>
                </div>
                <div>
                    <div class="center">
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
                    </div>
            </form>
        </div>
    </div>
    <!-- Captura Domingo-->
    <div id="test-swipe-7" class="col s12">
        <div class="container">
                <h4 class="center">Domingo</h4>
            <div class="valign-wrapper center">
                <p class="left">Francisco perez vargas</p>
            </div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                        <select>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="3">D</option>
                        </select>
                         <label for="banda">Niveles</label>
                    </div>
                    <div class="input-field col s3">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                        <option value="" disabled selected>Pago Extra</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        </select>
                        <label for="Pago Extra">Pago Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Horas Extra" type="number" class="validate">
                        <label for="Horas Extra">Horas Extra</label>
                    </div>
                    <div class="input-field col s3">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por Guardia">Pago por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por dia festivo">Pago por dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Pago por guardia en dia festivo</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Pago por guardia en dia festivo">Pago por guardia en dia festivo</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                            <option value="" disabled selected>Permiso por Guardia</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                            <label for="Permiso por Guardia">Permiso por Guardia</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Entrada</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker">
                        <label for="icon_prefix3">Salida</label>
                    </div>
                    <div class="input-field col s4">
                        <select>
                            <option value="1">Asistencia</option>
                            <option value="2">Inasistencia</option>
                            <option value="3">Permiso</option>
                            <option value="4">Vacaciones</option>
                            <option value="5">Festivo</option>
                        </select>
                        <label>Asistencia</label>
                    </div>
                </div>
                </div>
                <div>
                    <div class="center">
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
                    </div>
            </form>
         </div>
    </div>
  </body>
</html>
