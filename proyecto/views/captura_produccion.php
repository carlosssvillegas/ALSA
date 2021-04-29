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
    <!-- Captura Producción-->
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
          <h6 class="left">Luis</h6>
          <h6 class="center">Linea 14</h6>
          <h6 class="right">Zona 16 </h6>
        </div>
        <form action="">
          <div class="row clonar">
            <div id="productos">
              <?php require_once("InputDinamico.php") ?>
            </div>  
          </div>
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="entrada">Entrada</label>
            </div>
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="salida">Salida</label>
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
          <div id="contenedor"></div>
          <div class="center">
            <a class="btn-floating btn-large waves-effect green accent-4 left" onClick="AgregarMas();"><i class="material-icons">add</i></a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
          </div>
        </form>
      </div>
    </div>
    
    <!-- Captura Martes-->
    <div id="test-swipe-2" class="col s12">
      <div class="container">
        <h4 class="center">Martes</h4>
        <div class="valign-wrapper center">
          <h6 class="left">Luis</h6>
          <h6 class="center">Linea 14</h6>
          <h6 class="right">Zona 16 </h6>
        </div>
        <form action="">
          <div class="row clonar">
            <div class="input-field col s3">
              <select class="browser-default" name="options[]">
                <option value="1">Cosecha 1</option>
                <option value="2">Cosecha 2</option>
                <option value="3">Cosecha 3</option>
                <option value="3">Cosecha 4</option>
                <option value="1">Deshoje</option>
                <option value="2">Clip</option>
                <option value="3">Aplicación 1</option>
                <option value="3">Aplicación 2</option>
                <option value="3">Otro </option>
                <option value="3">Limpieza</option>
              </select>
            </div>
            <div class="input-field col s3">
              <input  type="text" class="validate" name="propio[]">
              <label for="propio">Propio</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="extra[]">
              <label for="extra">Extra(-)</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="cosecha_extra[]">
              <label for="cosecha_extra2">COSECHA_EXTRA2</label>
            </div>
            <div id="productos2">
              <?php require_once("InputDinamico.php") ?>
            </div>  
          </div>
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="entrada">Entrada</label>
            </div>
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="salida">Salida</label>
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
          <div id="contenedor"></div>
          <div class="center">
            <a class="btn-floating btn-large waves-effect green accent-4 left" onClick="AgregarMas2();"><i class="material-icons">add</i></a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
          </div>
        </form>
      </div>
    </div>

    <!-- Captura Miercoles-->
    <div id="test-swipe-3" class="col s12">
      <div class="container">
        <h4 class="center">Miercoles</h4>
        <div class="valign-wrapper center">
          <h6 class="left">Luis</h6>
          <h6 class="center">Linea 14</h6>
          <h6 class="right">Zona 16 </h6>
        </div>
        <form action="">
          <div class="row clonar">
            <div class="input-field col s3">
              <select class="browser-default" name="options[]">
                <option value="1">Cosecha 1</option>
                <option value="2">Cosecha 2</option>
                <option value="3">Cosecha 3</option>
                <option value="3">Cosecha 4</option>
                <option value="1">Deshoje</option>
                <option value="2">Clip</option>
                <option value="3">Aplicación 1</option>
                <option value="3">Aplicación 2</option>
                <option value="3">Otro </option>
                <option value="3">Limpieza</option>
              </select>
            </div>
            <div class="input-field col s3">
              <input  type="text" class="validate" name="propio[]">
              <label for="propio">Propio</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="extra[]">
              <label for="extra">Extra(-)</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="cosecha_extra[]">
              <label for="cosecha_extra2">COSECHA_EXTRA2</label>
            </div>
            <div id="productos3">
              <?php require_once("InputDinamico.php") ?>
            </div>  
          </div>
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="entrada">Entrada</label>
            </div>
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="salida">Salida</label>
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
          <div id="contenedor"></div>
          <div class="center">
            <a class="btn-floating btn-large waves-effect green accent-4 left" onClick="AgregarMas3();"><i class="material-icons">add</i></a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
          </div>
        </form>
      </div>
    </div>

    <!-- Captura Jueves-->
    <div id="test-swipe-4" class="col s12">
      <div class="container">
        <h4 class="center">Jueves</h4>
        <div class="valign-wrapper center">
          <h6 class="left">Luis</h6>
          <h6 class="center">Linea 14</h6>
          <h6 class="right">Zona 16 </h6>
        </div>
        <form action="">
          <div class="row clonar">
            <div class="input-field col s3">
              <select class="browser-default" name="options[]">
                <option value="1">Cosecha 1</option>
                <option value="2">Cosecha 2</option>
                <option value="3">Cosecha 3</option>
                <option value="3">Cosecha 4</option>
                <option value="1">Deshoje</option>
                <option value="2">Clip</option>
                <option value="3">Aplicación 1</option>
                <option value="3">Aplicación 2</option>
                <option value="3">Otro </option>
                <option value="3">Limpieza</option>
              </select>
            </div>
            <div class="input-field col s3">
              <input  type="text" class="validate" name="propio[]">
              <label for="propio">Propio</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="extra[]">
              <label for="extra">Extra(-)</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="cosecha_extra[]">
              <label for="cosecha_extra2">COSECHA_EXTRA2</label>
            </div>
            <div id="productos4">
              <?php require_once("InputDinamico.php") ?>
            </div>  
          </div>
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="entrada">Entrada</label>
            </div>
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="salida">Salida</label>
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
          <div id="contenedor"></div>
          <div class="center">
            <a class="btn-floating btn-large waves-effect green accent-4 left" onClick="AgregarMas4();"><i class="material-icons">add</i></a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
          </div>
        </form>
      </div>
    </div>

    <!-- Captura Viernes-->
    <div id="test-swipe-5" class="col s12">
      <div class="container">
        <h4 class="center">Viernes</h4>
        <div class="valign-wrapper center">
          <h6 class="left">Luis</h6>
          <h6 class="center">Linea 14</h6>
          <h6 class="right">Zona 16 </h6>
        </div>
        <form action="">
          <div class="row clonar">
            <div class="input-field col s3">
              <select class="browser-default" name="options[]">
                <option value="1">Cosecha 1</option>
                <option value="2">Cosecha 2</option>
                <option value="3">Cosecha 3</option>
                <option value="3">Cosecha 4</option>
                <option value="1">Deshoje</option>
                <option value="2">Clip</option>
                <option value="3">Aplicación 1</option>
                <option value="3">Aplicación 2</option>
                <option value="3">Otro </option>
                <option value="3">Limpieza</option>
              </select>
            </div>
            <div class="input-field col s3">
              <input  type="text" class="validate" name="propio[]">
              <label for="propio">Propio</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="extra[]">
              <label for="extra">Extra(-)</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="cosecha_extra[]">
              <label for="cosecha_extra2">COSECHA_EXTRA2</label>
            </div>
            <div id="productos5">
              <?php require_once("InputDinamico.php") ?>
            </div>  
          </div>
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="entrada">Entrada</label>
            </div>
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="salida">Salida</label>
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
          <div id="contenedor"></div>
          <div class="center">
            <a class="btn-floating btn-large waves-effect green accent-4 left" onClick="AgregarMas5();"><i class="material-icons">add</i></a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
          </div>
        </form>
      </div>
    </div>

    <!-- Captura Sabado-->
    <div id="test-swipe-6" class="col s12">
      <div class="container">
        <h4 class="center">Sabado</h4>
        <div class="valign-wrapper center">
          <h6 class="left">Luis</h6>
          <h6 class="center">Linea 14</h6>
          <h6 class="right">Zona 16 </h6>
        </div>
        <form action="">
          <div class="row clonar">
            <div class="input-field col s3">
              <select class="browser-default" name="options[]">
                <option value="1">Cosecha 1</option>
                <option value="2">Cosecha 2</option>
                <option value="3">Cosecha 3</option>
                <option value="3">Cosecha 4</option>
                <option value="1">Deshoje</option>
                <option value="2">Clip</option>
                <option value="3">Aplicación 1</option>
                <option value="3">Aplicación 2</option>
                <option value="3">Otro </option>
                <option value="3">Limpieza</option>
              </select>
            </div>
            <div class="input-field col s3">
              <input  type="text" class="validate" name="propio[]">
              <label for="propio">Propio</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="extra[]">
              <label for="extra">Extra(-)</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="cosecha_extra[]">
              <label for="cosecha_extra2">COSECHA_EXTRA2</label>
            </div>
            <div id="productos6">
              <?php require_once("InputDinamico.php") ?>
            </div>  
          </div>
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="entrada">Entrada</label>
            </div>
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="salida">Salida</label>
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
          <div id="contenedor"></div>
          <div class="center">
            <a class="btn-floating btn-large waves-effect green accent-4 left" onClick="AgregarMas6();"><i class="material-icons">add</i></a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
            <a href="avances_produccion.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
          </div>
        </form>
      </div>
    </div>

    <!-- Captura Domingo-->
    <div id="test-swipe-7" class="col s12">
      <div class="container">
        <h4 class="center">Domingo</h4>
        <div class="valign-wrapper center">
          <h6 class="left">Luis</h6>
          <h6 class="center">Linea 14</h6>
          <h6 class="right">Zona 16 </h6>
        </div>
        <form action="">
          <div class="row clonar">
            <div class="input-field col s3">
              <select class="browser-default" name="options[]">
                <option value="1">Cosecha 1</option>
                <option value="2">Cosecha 2</option>
                <option value="3">Cosecha 3</option>
                <option value="3">Cosecha 4</option>
                <option value="1">Deshoje</option>
                <option value="2">Clip</option>
                <option value="3">Aplicación 1</option>
                <option value="3">Aplicación 2</option>
                <option value="3">Otro </option>
                <option value="3">Limpieza</option>
              </select>
            </div>
            <div class="input-field col s3">
              <input  type="text" class="validate" name="propio[]">
              <label for="propio">Propio</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="extra[]">
              <label for="extra">Extra(-)</label>
            </div>
            <div class="input-field col s3">
              <input type="text" class="validate" name="cosecha_extra[]">
              <label for="cosecha_extra2">COSECHA_EXTRA2</label>
            </div>
            <div id="productos7">
              <?php require_once("InputDinamico.php") ?>
            </div>  
          </div>
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="entrada">Entrada</label>
            </div>
            <div class="input-field col s4">
              <i class="material-icons prefix">access_time</i>
              <input  type="text" class="validate timepicker">
              <label for="salida">Salida</label>
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
          <div id="contenedor"></div>
          <div class="center">
            <a class="btn-floating btn-large waves-effect green accent-4 left" onClick="AgregarMas7();"><i class="material-icons">add</i></a>
            <a href="lista_produccion.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
            <a href="lista_produccion.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>