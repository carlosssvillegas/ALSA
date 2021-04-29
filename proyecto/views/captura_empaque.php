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
              <h6 class="Right">Linea 1</h6>
              <h6 class="left">Maquina 2</h6>
          </div>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s4">
                    <select>
                      <option value="" disabled selected>Banda</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="3">4</option>
                    </select>
                      <label for="banda">Banda</label>
                </div>
                  <div class="input-field col s5">
                    <select name="presentacion" id="presentacion" onchange="seleccionarPresentacion();">
                          <option value="" disabled selected>Presentación</option>
                          <option value="Carton TOV 11Lb">1</option>
                          <option value="Carton OTOV 11Lb">2</option>
                          <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                          <option value="TOV Polybag 13Lb">4</option>
                          <option value="TOV Nude 13Lb">5</option>
                          <option value="TOV Meshbag 17Lb">6</option>
                          <option value="BEEF Nude 15Lb">7</option>
                          <option value="BEEF Nude 10Lb">8</option>
                          <option value="OBEEF Nude 15Lb">9</option>
                          <option value="OBEEF Nude 10Lb">10</option>
                          <option value="Nacional">11</option>
                          <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                          <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                          <option value="Carton Polybag TOV 11Lb">14</option>
                          <option value="Carton Polybag OTOV 11Lb">15</option>
                          <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                          <option value="Nacional A granel (sin acomodo)">17</option>
                          <option value="Cajas maquina">18</option>
                          <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                          <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                          <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                          <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                          <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                          <option value="Clamshell 3 pack 17libras">24</option>
                          <option value="Cocktail 10Lb">25</option>
                          <option value="Cocktail 12Lb">26</option>
                    </select>
                          <label for="Presentacion">Presentación</label>
                            <div class="center">
                                <label id="andphone" style="display: none">Carton TOV 11 Lb</label>
                                <label id="ot" style="display: none">Carton OTOV  11 Lb</label>
                                <label id="racimo" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                <label id="polybag" style="display: none">TOV Polybag 13 Lb</label>
                                <label id="nude" style="display: none">TOV Nude 13 Lb</label>
                                <label id="meshbag" style="display: none">TOV Meshbag 17 Lb</label>
                                <label id="beef15" style="display: none">BEEF Nude 15 Lb</label>
                                <label id="beef16" style="display: none">BEEF Nude 10Lb</label>
                                <label id="beef17" style="display: none">OBEEF Nude 15Lb</label>
                                <label id="beef18" style="display: none">OBEEF Nude 10Lb</label>
                                <label id="beef19" style="display: none">Nacional</label>
                                <label id="beef20" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                <label id="beef21" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                <label id="beef22" style="display: none">Carton Polybag TOV 11Lb</label>
                                <label id="beef23" style="display: none">Carton Polybag OTOV 11Lb</label>
                                <label id="beef24" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                <label id="beef25" style="display: none">Nacional A granel (sin acomodo)</label>
                                <label id="beef26" style="display: none">Cajas maquina</label>
                                <label id="beef27" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                <label id="beef28" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                <label id="beef29" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                <label id="beef30" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="beef31" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="beef32" style="display: none">Clamshell 3 pack 17libras</label>
                                <label id="beef33" style="display: none">Cocktail 10Lb</label>
                                <label id="beef34" style="display: none">Cocktail 12Lb</label>
                            </div>
                  </div>
                    <div class="input-field col s3">
                      <input placeholder="cantidad" type="number" class="validate">
                      <label for="cantidad">Cantidad</label>
                    </div>
                      <div class="col s12">
                      </div>
                        <div class="input-field col s3">
                          <select name="turno" id="turno" onchange="seleccionarTurno();">
                            <option value="" disabled selected>Turno</option>
                            <option value="normal">Normal</option>
                            <option value="extra">Extra</option>
                          </select>
                            <label for="turno">Turno</label>
                          </div>
                            <div class="input-field col s2" id="espphone" style="display: none">
                              <select>
                                <option value="" disabled selected>Banda</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                              </select>
                                <label for="banda">Banda</label>
                            </div>
                              <div class="input-field col s5" id="frphone" style="display: none">
                                <select name="presentacion2" id="presentacion2" onchange="seleccionarPresentacion2();">
                                  <option value="" disabled selected>Presentación</option>
                                  <option value="Carton TOV 11Lb">1</option>
                                  <option value="Carton OTOV 11Lb">2</option>
                                  <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                                  <option value="TOV Polybag 13Lb">4</option>
                                  <option value="TOV Nude 13Lb">5</option>
                                  <option value="TOV Meshbag 17Lb">6</option>
                                  <option value="BEEF Nude 15Lb">7</option>
                                  <option value="BEEF Nude 10Lb">8</option>
                                  <option value="OBEEF Nude 15Lb">9</option>
                                  <option value="OBEEF Nude 10Lb">10</option>
                                  <option value="Nacional">11</option>
                                  <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                                  <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                                  <option value="Carton Polybag TOV 11Lb">14</option>
                                  <option value="Carton Polybag OTOV 11Lb">15</option>
                                  <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                                  <option value="Nacional A granel (sin acomodo)">17</option>
                                  <option value="Cajas maquina">18</option>
                                  <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                                  <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                                  <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                                  <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                                  <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                                  <option value="Clamshell 3 pack 17libras">24</option>
                                  <option value="Cocktail 10Lb">25</option>
                                  <option value="Cocktail 12Lb">26</option>
                                </select>
                                  <label for="Presentacion2">Presentación</label>
                                    <div class="center">
                                      <label id="andphonee" style="display: none">Carton TOV 11 Lb</label>
                                      <label id="oto" style="display: none">Carton OTOV  11 Lb</label>
                                      <label id="racimop" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                      <label id="polybagg" style="display: none">TOV Polybag 13 Lb</label>
                                      <label id="nudes" style="display: none">TOV Nude 13 Lb</label>
                                      <label id="meshbagg" style="display: none">TOV Meshbag 17 Lb</label>
                                      <label id="beef155" style="display: none">BEEF Nude 15 Lb</label>
                                      <label id="beef35" style="display: none">BEEF Nude 10Lb</label>
                                      <label id="beef36" style="display: none">OBEEF Nude 15Lb</label>
                                      <label id="beef37" style="display: none">OBEEF Nude 10Lb</label>
                                      <label id="beef38" style="display: none">Nacional</label>
                                      <label id="beef39" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                      <label id="beef40" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                      <label id="beef41" style="display: none">Carton Polybag TOV 11Lb</label>
                                      <label id="beef42" style="display: none">Carton Polybag OTOV 11Lb</label>
                                      <label id="beef43" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                      <label id="beef44" style="display: none">Nacional A granel (sin acomodo)</label>
                                      <label id="beef45" style="display: none">Cajas maquina</label>
                                      <label id="beef46" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                      <label id="beef47" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                      <label id="beef48" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                      <label id="beef49" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="beef50" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="beef51" style="display: none">Clamshell 3 pack 17libras</label>
                                      <label id="beef52" style="display: none">Cocktail 10Lb</label>
                                      <label id="beef53" style="display: none">Cocktail 12Lb</label>
                                    </div>
                              </div>
                                <div class="input-field col s2" id="turn" style="display: none" >
                                  <input placeholder="cantidad" type="number" class="validate">
                                  <label for="cantidad">Cantidad</label>
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
                                      <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="entrada" type="text" class="validate timepicker" name="entrada">
                                          <label for="entrada">Entrada</label>
                                      </div>
                                        <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="salida" type="text" class="validate timepicker" name="salida">
                                          <label for="salida">Salida</label>
                                        </div>
              </div>
                <div class="center">
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
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
              <h6 class="Right">Linea 1</h6>
              <h6 class="left">Maquina 2</h6>
          </div>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s4">
                    <select>
                      <option value="" disabled selected>Banda</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="3">4</option>
                    </select>
                      <label for="banda">Banda</label>
                </div>
                  <div class="input-field col s5">
                    <select name="presentacion3" id="presentacion3" onchange="seleccionarPresentacion3();">
                          <option value="" disabled selected>Presentación</option>
                          <option value="Carton TOV 11Lb">1</option>
                          <option value="Carton OTOV 11Lb">2</option>
                          <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                          <option value="TOV Polybag 13Lb">4</option>
                          <option value="TOV Nude 13Lb">5</option>
                          <option value="TOV Meshbag 17Lb">6</option>
                          <option value="BEEF Nude 15Lb">7</option>
                          <option value="BEEF Nude 10Lb">8</option>
                          <option value="OBEEF Nude 15Lb">9</option>
                          <option value="OBEEF Nude 10Lb">10</option>
                          <option value="Nacional">11</option>
                          <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                          <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                          <option value="Carton Polybag TOV 11Lb">14</option>
                          <option value="Carton Polybag OTOV 11Lb">15</option>
                          <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                          <option value="Nacional A granel (sin acomodo)">17</option>
                          <option value="Cajas maquina">18</option>
                          <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                          <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                          <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                          <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                          <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                          <option value="Clamshell 3 pack 17libras">24</option>
                          <option value="Cocktail 10Lb">25</option>
                          <option value="Cocktail 12Lb">26</option>
                    </select>
                          <label for="Presentacion3">Presentación</label>
                            <div class="center">
                                <label id="andphone2" style="display: none">Carton TOV 11 Lb</label>
                                <label id="ot2" style="display: none">Carton OTOV  11 Lb</label>
                                <label id="racimo2" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                <label id="polybag2" style="display: none">TOV Polybag 13 Lb</label>
                                <label id="nude2" style="display: none">TOV Nude 13 Lb</label>
                                <label id="meshbag2" style="display: none">TOV Meshbag 17 Lb</label>
                                <label id="beef152" style="display: none">BEEF Nude 15 Lb</label>
                                <label id="beef55" style="display: none">BEEF Nude 10Lb</label>
                                <label id="beef56" style="display: none">OBEEF Nude 15Lb</label>
                                <label id="beef57" style="display: none">OBEEF Nude 10Lb</label>
                                <label id="beef58" style="display: none">Nacional</label>
                                <label id="beef59" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                <label id="beef60" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                <label id="beef61" style="display: none">Carton Polybag TOV 11Lb</label>
                                <label id="beef62" style="display: none">Carton Polybag OTOV 11Lb</label>
                                <label id="beef63" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                <label id="beef64" style="display: none">Nacional A granel (sin acomodo)</label>
                                <label id="beef65" style="display: none">Cajas maquina</label>
                                <label id="beef66" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                <label id="beef67" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                <label id="beef68" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                <label id="beef69" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="beef70" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="beef71" style="display: none">Clamshell 3 pack 17libras</label>
                                <label id="beef72" style="display: none">Cocktail 10Lb</label>
                                <label id="beef73" style="display: none">Cocktail 12Lb</label>
                            </div>
                  </div>
                    <div class="input-field col s3">
                      <input placeholder="cantidad" type="number" class="validate">
                      <label for="cantidad">Cantidad</label>
                    </div>
                      <div class="col s12">
                      </div>
                        <div class="input-field col s3">
                          <select name="turno2" id="turno2" onchange="seleccionarTurno2();">
                            <option value="" disabled selected>Turno</option>
                            <option value="normal2">Normal</option>
                            <option value="extra2">Extra</option>
                          </select>
                            <label for="turno2">Turno</label>
                          </div>
                            <div class="input-field col s2" id="espphone2" style="display: none">
                              <select>
                                <option value="" disabled selected>Banda</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                              </select>
                                <label for="banda">Banda</label>
                            </div>
                              <div class="input-field col s5" id="frphone2" style="display: none">
                                <select name="presentacion4" id="presentacion4" onchange="seleccionarPresentacion4();">
                                  <option value="" disabled selected>Presentación</option>
                                  <option value="Carton TOV 11Lb">1</option>
                                  <option value="Carton OTOV 11Lb">2</option>
                                  <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                                  <option value="TOV Polybag 13Lb">4</option>
                                  <option value="TOV Nude 13Lb">5</option>
                                  <option value="TOV Meshbag 17Lb">6</option>
                                  <option value="BEEF Nude 15Lb">7</option>
                                  <option value="BEEF Nude 10Lb">8</option>
                                  <option value="OBEEF Nude 15Lb">9</option>
                                  <option value="OBEEF Nude 10Lb">10</option>
                                  <option value="Nacional">11</option>
                                  <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                                  <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                                  <option value="Carton Polybag TOV 11Lb">14</option>
                                  <option value="Carton Polybag OTOV 11Lb">15</option>
                                  <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                                  <option value="Nacional A granel (sin acomodo)">17</option>
                                  <option value="Cajas maquina">18</option>
                                  <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                                  <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                                  <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                                  <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                                  <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                                  <option value="Clamshell 3 pack 17libras">24</option>
                                  <option value="Cocktail 10Lb">25</option>
                                  <option value="Cocktail 12Lb">26</option>
                                </select>
                                  <label for="Presentacion4">Presentación</label>
                                    <div class="center">
                                      <label id="andphone3" style="display: none">Carton TOV 11 Lb</label>
                                      <label id="ot3" style="display: none">Carton OTOV  11 Lb</label>
                                      <label id="racimo3" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                      <label id="polybag3" style="display: none">TOV Polybag 13 Lb</label>
                                      <label id="nude3" style="display: none">TOV Nude 13 Lb</label>
                                      <label id="meshbag3" style="display: none">TOV Meshbag 17 Lb</label>
                                      <label id="beef153" style="display: none">BEEF Nude 15 Lb</label>
                                      <label id="beef75" style="display: none">BEEF Nude 10Lb</label>
                                      <label id="beef76" style="display: none">OBEEF Nude 15Lb</label>
                                      <label id="beef77" style="display: none">OBEEF Nude 10Lb</label>
                                      <label id="beef78" style="display: none">Nacional</label>
                                      <label id="beef79" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                      <label id="beef80" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                      <label id="beef81" style="display: none">Carton Polybag TOV 11Lb</label>
                                      <label id="beef82" style="display: none">Carton Polybag OTOV 11Lb</label>
                                      <label id="beef83" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                      <label id="beef84" style="display: none">Nacional A granel (sin acomodo)</label>
                                      <label id="beef85" style="display: none">Cajas maquina</label>
                                      <label id="beef86" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                      <label id="beef87" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                      <label id="beef88" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                      <label id="beef89" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="beef90" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="beef91" style="display: none">Clamshell 3 pack 17libras</label>
                                      <label id="beef92" style="display: none">Cocktail 10Lb</label>
                                      <label id="beef93" style="display: none">Cocktail 12Lb</label>
                                    </div>
                              </div>
                                <div class="input-field col s2" id="turn2" style="display: none" >
                                  <input placeholder="cantidad" type="number" class="validate">
                                  <label for="cantidad">Cantidad</label>
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
                                      <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="entrada" type="text" class="validate timepicker" name="entrada">
                                          <label for="entrada">Entrada</label>
                                      </div>
                                        <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="salida" type="text" class="validate timepicker" name="salida">
                                          <label for="salida">Salida</label>
                                        </div>
              </div>
                <div class="center">
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
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
              <h6 class="Right">Linea 1</h6>
              <h6 class="left">Maquina 2</h6>
          </div>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s4">
                    <select>
                      <option value="" disabled selected>Banda</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="3">4</option>
                    </select>
                      <label for="banda">Banda</label>
                </div>
                  <div class="input-field col s5">
                    <select name="presentacion5" id="presentacion5" onchange="seleccionarPresentacion5();">
                          <option value="" disabled selected>Presentación</option>
                          <option value="Carton TOV 11Lb">1</option>
                          <option value="Carton OTOV 11Lb">2</option>
                          <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                          <option value="TOV Polybag 13Lb">4</option>
                          <option value="TOV Nude 13Lb">5</option>
                          <option value="TOV Meshbag 17Lb">6</option>
                          <option value="BEEF Nude 15Lb">7</option>
                          <option value="BEEF Nude 10Lb">8</option>
                          <option value="OBEEF Nude 15Lb">9</option>
                          <option value="OBEEF Nude 10Lb">10</option>
                          <option value="Nacional">11</option>
                          <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                          <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                          <option value="Carton Polybag TOV 11Lb">14</option>
                          <option value="Carton Polybag OTOV 11Lb">15</option>
                          <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                          <option value="Nacional A granel (sin acomodo)">17</option>
                          <option value="Cajas maquina">18</option>
                          <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                          <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                          <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                          <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                          <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                          <option value="Clamshell 3 pack 17libras">24</option>
                          <option value="Cocktail 10Lb">25</option>
                          <option value="Cocktail 12Lb">26</option>
                    </select>
                          <label for="Presentacion5">Presentación</label>
                            <div class="center">
                                <label id="andphone5" style="display: none">Carton TOV 11 Lb</label>
                                <label id="ot5" style="display: none">Carton OTOV  11 Lb</label>
                                <label id="racimo5" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                <label id="polybag5" style="display: none">TOV Polybag 13 Lb</label>
                                <label id="nude5" style="display: none">TOV Nude 13 Lb</label>
                                <label id="meshbag5" style="display: none">TOV Meshbag 17 Lb</label>
                                <label id="beef156" style="display: none">BEEF Nude 15 Lb</label>
                                <label id="m15" style="display: none">BEEF Nude 10Lb</label>
                                <label id="m16" style="display: none">OBEEF Nude 15Lb</label>
                                <label id="m17" style="display: none">OBEEF Nude 10Lb</label>
                                <label id="m18" style="display: none">Nacional</label>
                                <label id="m19" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                <label id="m20" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                <label id="m21" style="display: none">Carton Polybag TOV 11Lb</label>
                                <label id="m22" style="display: none">Carton Polybag OTOV 11Lb</label>
                                <label id="m23" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                <label id="m24" style="display: none">Nacional A granel (sin acomodo)</label>
                                <label id="m25" style="display: none">Cajas maquina</label>
                                <label id="m26" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                <label id="m27" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                <label id="m28" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                <label id="m29" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="m30" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="m31" style="display: none">Clamshell 3 pack 17libras</label>
                                <label id="m32" style="display: none">Cocktail 10Lb</label>
                                <label id="m33" style="display: none">Cocktail 12Lb</label>
                            </div>
                  </div>
                    <div class="input-field col s3">
                      <input placeholder="cantidad" type="number" class="validate">
                      <label for="cantidad">Cantidad</label>
                    </div>
                      <div class="col s12">
                      </div>
                        <div class="input-field col s3">
                          <select name="turno3" id="turno3" onchange="seleccionarTurno3();">
                            <option value="" disabled selected>Turno</option>
                            <option value="normal3">Normal</option>
                            <option value="extra3">Extra</option>
                          </select>
                            <label for="turno3">Turno</label>
                          </div>
                            <div class="input-field col s2" id="espphone3" style="display: none">
                              <select>
                                <option value="" disabled selected>Banda</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                              </select>
                                <label for="banda">Banda</label>
                            </div>
                              <div class="input-field col s5" id="frphone3" style="display: none">
                                <select name="presentacion6" id="presentacion6" onchange="seleccionarPresentacion6();">
                                <option value="" disabled selected>Presentación</option>
                                <option value="Carton TOV 11Lb">1</option>
                                <option value="Carton OTOV 11Lb">2</option>
                                <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                                <option value="TOV Polybag 13Lb">4</option>
                                <option value="TOV Nude 13Lb">5</option>
                                <option value="TOV Meshbag 17Lb">6</option>
                                <option value="BEEF Nude 15Lb">7</option>
                                <option value="BEEF Nude 10Lb">8</option>
                                <option value="OBEEF Nude 15Lb">9</option>
                                <option value="OBEEF Nude 10Lb">10</option>
                                <option value="Nacional">11</option>
                                <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                                <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                                <option value="Carton Polybag TOV 11Lb">14</option>
                                <option value="Carton Polybag OTOV 11Lb">15</option>
                                <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                                <option value="Nacional A granel (sin acomodo)">17</option>
                                <option value="Cajas maquina">18</option>
                                <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                                <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                                <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                                <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                                <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                                <option value="Clamshell 3 pack 17libras">24</option>
                                <option value="Cocktail 10Lb">25</option>
                                <option value="Cocktail 12Lb">26</option>
                                </select>
                                  <label for="Presentacion4">Presentación</label>
                                    <div class="center">
                                      <label id="andphone6" style="display: none">Carton TOV 11 Lb</label>
                                      <label id="ot6" style="display: none">Carton OTOV  11 Lb</label>
                                      <label id="racimo6" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                      <label id="polybag6" style="display: none">TOV Polybag 13 Lb</label>
                                      <label id="nude6" style="display: none">TOV Nude 13 Lb</label>
                                      <label id="meshbag6" style="display: none">TOV Meshbag 17 Lb</label>
                                      <label id="beef157" style="display: none">BEEF Nude 15 Lb</label>
                                      <label id="mi15" style="display: none">BEEF Nude 10Lb</label>
                                      <label id="mi16" style="display: none">OBEEF Nude 15Lb</label>
                                      <label id="mi17" style="display: none">OBEEF Nude 10Lb</label>
                                      <label id="mi18" style="display: none">Nacional</label>
                                      <label id="mi19" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                      <label id="mi20" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                      <label id="mi21" style="display: none">Carton Polybag TOV 11Lb</label>
                                      <label id="mi22" style="display: none">Carton Polybag OTOV 11Lb</label>
                                      <label id="mi23" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                      <label id="mi24" style="display: none">Nacional A granel (sin acomodo)</label>
                                      <label id="mi25" style="display: none">Cajas maquina</label>
                                      <label id="mi26" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                      <label id="mi27" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                      <label id="mi28" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                      <label id="mi29" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="mi30" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="mi31" style="display: none">Clamshell 3 pack 17libras</label>
                                      <label id="mi32" style="display: none">Cocktail 10Lb</label>
                                      <label id="mi33" style="display: none">Cocktail 12Lb</label>
                                    </div>
                              </div>
                                <div class="input-field col s2" id="turn3" style="display: none" >
                                  <input placeholder="cantidad" type="number" class="validate">
                                  <label for="cantidad">Cantidad</label>
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
                                      <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="entrada" type="text" class="validate timepicker" name="entrada">
                                          <label for="entrada">Entrada</label>
                                      </div>
                                        <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="salida" type="text" class="validate timepicker" name="salida">
                                          <label for="salida">Salida</label>
                                        </div>
              </div>
                <div class="center">
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
                </div>
            </form>
      </div>
    </div>
    <!-- Captura jueves-->
    <div id="test-swipe-4" class="col s12">
      <div class="container">
        <h4 class="center">Jueves</h4>
          <div class="valign-wrapper center">
              <h6 class="left">Luis</h6>
              <h6 class="Right">Linea 1</h6>
              <h6 class="left">Maquina 2</h6>
          </div>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s4">
                    <select>
                      <option value="" disabled selected>Banda</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="3">4</option>
                    </select>
                      <label for="banda">Banda</label>
                </div>
                  <div class="input-field col s5">
                    <select name="presentacion7" id="presentacion7" onchange="seleccionarPresentacion7();">
                                <option value="" disabled selected>Presentación</option>
                                <option value="Carton TOV 11Lb">1</option>
                                <option value="Carton OTOV 11Lb">2</option>
                                <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                                <option value="TOV Polybag 13Lb">4</option>
                                <option value="TOV Nude 13Lb">5</option>
                                <option value="TOV Meshbag 17Lb">6</option>
                                <option value="BEEF Nude 15Lb">7</option>
                                <option value="BEEF Nude 10Lb">8</option>
                                <option value="OBEEF Nude 15Lb">9</option>
                                <option value="OBEEF Nude 10Lb">10</option>
                                <option value="Nacional">11</option>
                                <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                                <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                                <option value="Carton Polybag TOV 11Lb">14</option>
                                <option value="Carton Polybag OTOV 11Lb">15</option>
                                <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                                <option value="Nacional A granel (sin acomodo)">17</option>
                                <option value="Cajas maquina">18</option>
                                <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                                <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                                <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                                <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                                <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                                <option value="Clamshell 3 pack 17libras">24</option>
                                <option value="Cocktail 10Lb">25</option>
                                <option value="Cocktail 12Lb">26</option>
                    </select>
                          <label for="Presentacion7">Presentación</label>
                            <div class="center">
                                <label id="andphone7" style="display: none">Carton TOV 11 Lb</label>
                                <label id="ot7" style="display: none">Carton OTOV  11 Lb</label>
                                <label id="racimo7" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                <label id="polybag7" style="display: none">TOV Polybag 13 Lb</label>
                                <label id="nude7" style="display: none">TOV Nude 13 Lb</label>
                                <label id="meshbag7" style="display: none">TOV Meshbag 17 Lb</label>
                                <label id="beef158" style="display: none">BEEF Nude 15 Lb</label>
                                <label id="j15" style="display: none">BEEF Nude 10Lb</label>
                                <label id="j16" style="display: none">OBEEF Nude 15Lb</label>
                                <label id="j17" style="display: none">OBEEF Nude 10Lb</label>
                                <label id="j18" style="display: none">Nacional</label>
                                <label id="j19" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                <label id="j20" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                <label id="j21" style="display: none">Carton Polybag TOV 11Lb</label>
                                <label id="j22" style="display: none">Carton Polybag OTOV 11Lb</label>
                                <label id="j23" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                <label id="j24" style="display: none">Nacional A granel (sin acomodo)</label>
                                <label id="j25" style="display: none">Cajas maquina</label>
                                <label id="j26" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                <label id="j27" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                <label id="j28" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                <label id="j29" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="j30" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="j31" style="display: none">Clamshell 3 pack 17libras</label>
                                <label id="j32" style="display: none">Cocktail 10Lb</label>
                                <label id="j33" style="display: none">Cocktail 12Lb</label>
                            </div>
                  </div>
                    <div class="input-field col s3">
                      <input placeholder="cantidad" type="number" class="validate">
                      <label for="cantidad">Cantidad</label>
                    </div>
                      <div class="col s12">
                      </div>
                        <div class="input-field col s3">
                          <select name="turno4" id="turno4" onchange="seleccionarTurno4();">
                            <option value="" disabled selected>Turno</option>
                            <option value="normal4">Normal</option>
                            <option value="extra4">Extra</option>
                          </select>
                            <label for="turno4">Turno</label>
                          </div>
                            <div class="input-field col s2" id="espphone4" style="display: none">
                              <select>
                                <option value="" disabled selected>Banda</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                              </select>
                                <label for="banda">Banda</label>
                            </div>
                              <div class="input-field col s5" id="frphone4" style="display: none">
                                <select name="presentacion8" id="presentacion8" onchange="seleccionarPresentacion8();">
                                  <option value="" disabled selected>Presentación</option>
                                  <option value="Carton TOV 11Lb">1</option>
                                  <option value="Carton OTOV 11Lb">2</option>
                                  <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                                  <option value="TOV Polybag 13Lb">4</option>
                                  <option value="TOV Nude 13Lb">5</option>
                                  <option value="TOV Meshbag 17Lb">6</option>
                                  <option value="BEEF Nude 15Lb">7</option>
                                  <option value="BEEF Nude 10Lb">8</option>
                                  <option value="OBEEF Nude 15Lb">9</option>
                                  <option value="OBEEF Nude 10Lb">10</option>
                                  <option value="Nacional">11</option>
                                  <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                                  <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                                  <option value="Carton Polybag TOV 11Lb">14</option>
                                  <option value="Carton Polybag OTOV 11Lb">15</option>
                                  <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                                  <option value="Nacional A granel (sin acomodo)">17</option>
                                  <option value="Cajas maquina">18</option>
                                  <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                                  <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                                  <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                                  <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                                  <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                                  <option value="Clamshell 3 pack 17libras">24</option>
                                  <option value="Cocktail 10Lb">25</option>
                                  <option value="Cocktail 12Lb">26</option>
                                </select>
                                  <label for="Presentacion4">Presentación</label>
                                    <div class="center">
                                      <label id="andphone8" style="display: none">Carton TOV 11 Lb</label>
                                      <label id="ot8" style="display: none">Carton OTOV  11 Lb</label>
                                      <label id="racimo8" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                      <label id="polybag8" style="display: none">TOV Polybag 13 Lb</label>
                                      <label id="nude8" style="display: none">TOV Nude 13 Lb</label>
                                      <label id="meshbag8" style="display: none">TOV Meshbag 17 Lb</label>
                                      <label id="beef159" style="display: none">BEEF Nude 15 Lb</label>
                                      <label id="ju15" style="display: none">BEEF Nude 10Lb</label>
                                      <label id="ju16" style="display: none">OBEEF Nude 15Lb</label>
                                      <label id="ju17" style="display: none">OBEEF Nude 10Lb</label>
                                      <label id="ju18" style="display: none">Nacional</label>
                                      <label id="ju19" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                      <label id="ju20" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                      <label id="ju21" style="display: none">Carton Polybag TOV 11Lb</label>
                                      <label id="ju22" style="display: none">Carton Polybag OTOV 11Lb</label>
                                      <label id="ju23" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                      <label id="ju24" style="display: none">Nacional A granel (sin acomodo)</label>
                                      <label id="ju25" style="display: none">Cajas maquina</label>
                                      <label id="ju26" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                      <label id="ju27" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                      <label id="ju28" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                      <label id="ju29" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="ju30" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="ju31" style="display: none">Clamshell 3 pack 17libras</label>
                                      <label id="ju32" style="display: none">Cocktail 10Lb</label>
                                      <label id="ju33" style="display: none">Cocktail 12Lb</label>
                                    </div>
                              </div>
                                <div class="input-field col s2" id="turn4" style="display: none" >
                                  <input placeholder="cantidad" type="number" class="validate">
                                  <label for="cantidad">Cantidad</label>
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
                                      <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="entrada" type="text" class="validate timepicker" name="entrada">
                                          <label for="entrada">Entrada</label>
                                      </div>
                                        <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="salida" type="text" class="validate timepicker" name="salida">
                                          <label for="salida">Salida</label>
                                        </div>
              </div>
                <div class="center">
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
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
              <h6 class="Right">Linea 1</h6>
              <h6 class="left">Maquina 2</h6>
          </div>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s4">
                    <select>
                      <option value="" disabled selected>Banda</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="3">4</option>
                    </select>
                      <label for="banda">Banda</label>
                </div>
                  <div class="input-field col s5">
                    <select name="presentacion9" id="presentacion9" onchange="seleccionarPresentacion9();">
                      <option value="" disabled selected>Presentación</option>
                      <option value="Carton TOV 11Lb">1</option>
                      <option value="Carton OTOV 11Lb">2</option>
                      <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                      <option value="TOV Polybag 13Lb">4</option>
                      <option value="TOV Nude 13Lb">5</option>
                      <option value="TOV Meshbag 17Lb">6</option>
                      <option value="BEEF Nude 15Lb">7</option>
                      <option value="BEEF Nude 10Lb">8</option>
                      <option value="OBEEF Nude 15Lb">9</option>
                      <option value="OBEEF Nude 10Lb">10</option>
                      <option value="Nacional">11</option>
                      <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                      <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                      <option value="Carton Polybag TOV 11Lb">14</option>
                      <option value="Carton Polybag OTOV 11Lb">15</option>
                      <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                      <option value="Nacional A granel (sin acomodo)">17</option>
                      <option value="Cajas maquina">18</option>
                      <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                      <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                      <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                      <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                      <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                      <option value="Clamshell 3 pack 17libras">24</option>
                      <option value="Cocktail 10Lb">25</option>
                      <option value="Cocktail 12Lb">26</option>
                    </select>
                          <label for="Presentacion7">Presentación</label>
                            <div class="center">
                                <label id="andphone9" style="display: none">Carton TOV 11 Lb</label>
                                <label id="ot9" style="display: none">Carton OTOV  11 Lb</label>
                                <label id="racimo9" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                <label id="polybag9" style="display: none">TOV Polybag 13 Lb</label>
                                <label id="nude9" style="display: none">TOV Nude 13 Lb</label>
                                <label id="meshbag9" style="display: none">TOV Meshbag 17 Lb</label>
                                <label id="beef1510" style="display: none">BEEF Nude 15 Lb</label>
                                <label id="v15" style="display: none">BEEF Nude 10Lb</label>
                                <label id="v16" style="display: none">OBEEF Nude 15Lb</label>
                                <label id="v17" style="display: none">OBEEF Nude 10Lb</label>
                                <label id="v18" style="display: none">Nacional</label>
                                <label id="v19" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                <label id="v20" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                <label id="v21" style="display: none">Carton Polybag TOV 11Lb</label>
                                <label id="v22" style="display: none">Carton Polybag OTOV 11Lb</label>
                                <label id="v23" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                <label id="v24" style="display: none">Nacional A granel (sin acomodo)</label>
                                <label id="v25" style="display: none">Cajas maquina</label>
                                <label id="v26" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                <label id="v27" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                <label id="v28" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                <label id="v29" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="v30" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="v31" style="display: none">Clamshell 3 pack 17libras</label>
                                <label id="v32" style="display: none">Cocktail 10Lb</label>
                                <label id="v33" style="display: none">Cocktail 12Lb</label>
                            </div>
                  </div>
                    <div class="input-field col s3">
                      <input placeholder="cantidad" type="number" class="validate">
                      <label for="cantidad">Cantidad</label>
                    </div>
                      <div class="col s12">
                      </div>
                        <div class="input-field col s3">
                          <select name="turno5" id="turno5" onchange="seleccionarTurno5();">
                            <option value="" disabled selected>Turno</option>
                            <option value="normal5">Normal</option>
                            <option value="extra5">Extra</option>
                          </select>
                            <label for="turno5">Turno</label>
                          </div>
                            <div class="input-field col s2" id="espphone5" style="display: none">
                              <select>
                                <option value="" disabled selected>Banda</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                              </select>
                                <label for="banda">Banda</label>
                            </div>
                              <div class="input-field col s5" id="frphone5" style="display: none">
                                <select name="presentacion10" id="presentacion10" onchange="seleccionarPresentacion10();">
                                  <option value="" disabled selected>Presentación</option>
                                  <option value="Carton TOV 11Lb">1</option>
                                  <option value="Carton OTOV 11Lb">2</option>
                                  <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                                  <option value="TOV Polybag 13Lb">4</option>
                                  <option value="TOV Nude 13Lb">5</option>
                                  <option value="TOV Meshbag 17Lb">6</option>
                                  <option value="BEEF Nude 15Lb">7</option>
                                  <option value="BEEF Nude 10Lb">8</option>
                                  <option value="OBEEF Nude 15Lb">9</option>
                                  <option value="OBEEF Nude 10Lb">10</option>
                                  <option value="Nacional">11</option>
                                  <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                                  <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                                  <option value="Carton Polybag TOV 11Lb">14</option>
                                  <option value="Carton Polybag OTOV 11Lb">15</option>
                                  <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                                  <option value="Nacional A granel (sin acomodo)">17</option>
                                  <option value="Cajas maquina">18</option>
                                  <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                                  <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                                  <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                                  <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                                  <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                                  <option value="Clamshell 3 pack 17libras">24</option>
                                  <option value="Cocktail 10Lb">25</option>
                                  <option value="Cocktail 12Lb">26</option>
                                </select>
                                  <label for="Presentacion4">Presentación</label>
                                    <div class="center">
                                      <label id="andphone10" style="display: none">Carton TOV 11 Lb</label>
                                      <label id="ot10" style="display: none">Carton OTOV  11 Lb</label>
                                      <label id="racimo10" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                      <label id="polybag10" style="display: none">TOV Polybag 13 Lb</label>
                                      <label id="nude10" style="display: none">TOV Nude 13 Lb</label>
                                      <label id="meshbag10" style="display: none">TOV Meshbag 17 Lb</label>
                                      <label id="beef1511" style="display: none">BEEF Nude 15 Lb</label>
                                      <label id="vi15" style="display: none">BEEF Nude 10Lb</label>
                                      <label id="vi16" style="display: none">OBEEF Nude 15Lb</label>
                                      <label id="vi17" style="display: none">OBEEF Nude 10Lb</label>
                                      <label id="vi18" style="display: none">Nacional</label>
                                      <label id="vi19" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                      <label id="vi20" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                      <label id="vi21" style="display: none">Carton Polybag TOV 11Lb</label>
                                      <label id="vi22" style="display: none">Carton Polybag OTOV 11Lb</label>
                                      <label id="vi23" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                      <label id="vi24" style="display: none">Nacional A granel (sin acomodo)</label>
                                      <label id="vi25" style="display: none">Cajas maquina</label>
                                      <label id="vi26" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                      <label id="vi27" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                      <label id="vi28" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                      <label id="vi29" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="vi30" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="vi31" style="display: none">Clamshell 3 pack 17libras</label>
                                      <label id="vi32" style="display: none">Cocktail 10Lb</label>
                                      <label id="vi33" style="display: none">Cocktail 12Lb</label>
                                    </div>
                              </div>
                                <div class="input-field col s2" id="turn5" style="display: none" >
                                  <input placeholder="cantidad" type="number" class="validate">
                                  <label for="cantidad">Cantidad</label>
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
                                      <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="entrada" type="text" class="validate timepicker" name="entrada">
                                          <label for="entrada">Entrada</label>
                                      </div>
                                        <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="salida" type="text" class="validate timepicker" name="salida">
                                          <label for="salida">Salida</label>
                                        </div>
              </div>
                <div class="center">
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
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
              <h6 class="Right">Linea 1</h6>
              <h6 class="left">Maquina 2</h6>
          </div>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s4">
                    <select>
                      <option value="" disabled selected>Banda</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="3">4</option>
                    </select>
                      <label for="banda">Banda</label>
                </div>
                  <div class="input-field col s5">
                    <select name="presentacion11" id="presentacion11" onchange="seleccionarPresentacion11();">
                      <option value="" disabled selected>Presentación</option>
                      <option value="Carton TOV 11Lb">1</option>
                      <option value="Carton OTOV 11Lb">2</option>
                      <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                      <option value="TOV Polybag 13Lb">4</option>
                      <option value="TOV Nude 13Lb">5</option>
                      <option value="TOV Meshbag 17Lb">6</option>
                      <option value="BEEF Nude 15Lb">7</option>
                      <option value="BEEF Nude 10Lb">8</option>
                      <option value="OBEEF Nude 15Lb">9</option>
                      <option value="OBEEF Nude 10Lb">10</option>
                      <option value="Nacional">11</option>
                      <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                      <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                      <option value="Carton Polybag TOV 11Lb">14</option>
                      <option value="Carton Polybag OTOV 11Lb">15</option>
                      <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                      <option value="Nacional A granel (sin acomodo)">17</option>
                      <option value="Cajas maquina">18</option>
                      <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                      <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                      <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                      <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                      <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                      <option value="Clamshell 3 pack 17libras">24</option>
                      <option value="Cocktail 10Lb">25</option>
                      <option value="Cocktail 12Lb">26</option>
                    </select>
                          <label for="Presentacion11">Presentación</label>
                            <div class="center">
                                <label id="andphone11" style="display: none">Carton TOV 11 Lb</label>
                                <label id="ot11" style="display: none">Carton OTOV  11 Lb</label>
                                <label id="racimo11" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                <label id="polybag11" style="display: none">TOV Polybag 13 Lb</label>
                                <label id="nude11" style="display: none">TOV Nude 13 Lb</label>
                                <label id="meshbag11" style="display: none">TOV Meshbag 17 Lb</label>
                                <label id="beef1512" style="display: none">BEEF Nude 15 Lb</label>
                                <label id="s15" style="display: none">BEEF Nude 10Lb</label>
                                <label id="s16" style="display: none">OBEEF Nude 15Lb</label>
                                <label id="s17" style="display: none">OBEEF Nude 10Lb</label>
                                <label id="s18" style="display: none">Nacional</label>
                                <label id="s19" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                <label id="s20" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                <label id="s21" style="display: none">Carton Polybag TOV 11Lb</label>
                                <label id="s22" style="display: none">Carton Polybag OTOV 11Lb</label>
                                <label id="s23" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                <label id="s24" style="display: none">Nacional A granel (sin acomodo)</label>
                                <label id="s25" style="display: none">Cajas maquina</label>
                                <label id="s26" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                <label id="s27" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                <label id="s28" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                <label id="s29" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="s30" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="s31" style="display: none">Clamshell 3 pack 17libras</label>
                                <label id="s32" style="display: none">Cocktail 10Lb</label>
                                <label id="s33" style="display: none">Cocktail 12Lb</label>
                            </div>
                  </div>
                    <div class="input-field col s3">
                      <input placeholder="cantidad" type="number" class="validate">
                      <label for="cantidad">Cantidad</label>
                    </div>
                      <div class="col s12">
                      </div>
                        <div class="input-field col s3">
                          <select name="turno6" id="turno6" onchange="seleccionarTurno6();">
                            <option value="" disabled selected>Turno</option>
                            <option value="normal6">Normal</option>
                            <option value="extra6">Extra</option>
                          </select>
                            <label for="turno6">Turno</label>
                          </div>
                            <div class="input-field col s2" id="espphone6" style="display: none">
                              <select>
                                <option value="" disabled selected>Banda</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                              </select>
                                <label for="banda">Banda</label>
                            </div>
                              <div class="input-field col s5" id="frphone6" style="display: none">
                                <select name="presentacion12" id="presentacion12" onchange="seleccionarPresentacion12();">
                                  <option value="" disabled selected>Presentación</option>
                                  <option value="Carton TOV 11Lb">1</option>
                                  <option value="Carton OTOV 11Lb">2</option>
                                  <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                                  <option value="TOV Polybag 13Lb">4</option>
                                  <option value="TOV Nude 13Lb">5</option>
                                  <option value="TOV Meshbag 17Lb">6</option>
                                  <option value="BEEF Nude 15Lb">7</option>
                                  <option value="BEEF Nude 10Lb">8</option>
                                  <option value="OBEEF Nude 15Lb">9</option>
                                  <option value="OBEEF Nude 10Lb">10</option>
                                  <option value="Nacional">11</option>
                                  <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                                  <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                                  <option value="Carton Polybag TOV 11Lb">14</option>
                                  <option value="Carton Polybag OTOV 11Lb">15</option>
                                  <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                                  <option value="Nacional A granel (sin acomodo)">17</option>
                                  <option value="Cajas maquina">18</option>
                                  <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                                  <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                                  <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                                  <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                                  <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                                  <option value="Clamshell 3 pack 17libras">24</option>
                                  <option value="Cocktail 10Lb">25</option>
                                  <option value="Cocktail 12Lb">26</option>
                                </select>
                                  <label for="Presentacion4">Presentación</label>
                                    <div class="center">
                                      <label id="andphone12" style="display: none">Carton TOV 11 Lb</label>
                                      <label id="ot12" style="display: none">Carton OTOV  11 Lb</label>
                                      <label id="racimo12" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                      <label id="polybag12" style="display: none">TOV Polybag 13 Lb</label>
                                      <label id="nude12" style="display: none">TOV Nude 13 Lb</label>
                                      <label id="meshbag12" style="display: none">TOV Meshbag 17 Lb</label>
                                      <label id="beef1513" style="display: none">BEEF Nude 15 Lb</label>
                                      <label id="sa15" style="display: none">BEEF Nude 10Lb</label>
                                      <label id="sa16" style="display: none">OBEEF Nude 15Lb</label>
                                      <label id="sa17" style="display: none">OBEEF Nude 10Lb</label>
                                      <label id="sa18" style="display: none">Nacional</label>
                                      <label id="sa19" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                      <label id="sa20" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                      <label id="sa21" style="display: none">Carton Polybag TOV 11Lb</label>
                                      <label id="sa22" style="display: none">Carton Polybag OTOV 11Lb</label>
                                      <label id="sa23" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                      <label id="sa24" style="display: none">Nacional A granel (sin acomodo)</label>
                                      <label id="sa25" style="display: none">Cajas maquina</label>
                                      <label id="sa26" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                      <label id="sa27" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                      <label id="sa28" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                      <label id="sa29" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="sa30" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="sa31" style="display: none">Clamshell 3 pack 17libras</label>
                                      <label id="sa32" style="display: none">Cocktail 10Lb</label>
                                      <label id="sa33" style="display: none">Cocktail 12Lb</label>
                                    </div>
                              </div>
                                <div class="input-field col s2" id="turn6" style="display: none" >
                                  <input placeholder="cantidad" type="number" class="validate">
                                  <label for="cantidad">Cantidad</label>
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
                                      <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="entrada" type="text" class="validate timepicker" name="entrada">
                                          <label for="entrada">Entrada</label>
                                      </div>
                                        <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="salida" type="text" class="validate timepicker" name="salida">
                                          <label for="salida">Salida</label>
                                        </div>
              </div>
                <div class="center">
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
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
              <h6 class="Right">Linea 1</h6>
              <h6 class="left">Maquina 2</h6>
          </div>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s4">
                    <select>
                      <option value="" disabled selected>Banda</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="3">4</option>
                    </select>
                      <label for="banda">Banda</label>
                </div>
                  <div class="input-field col s5">
                    <select name="presentacion13" id="presentacion13" onchange="seleccionarPresentacion13();">
                      <option value="" disabled selected>Presentación</option>
                      <option value="Carton TOV 11Lb">1</option>
                      <option value="Carton OTOV 11Lb">2</option>
                      <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                      <option value="TOV Polybag 13Lb">4</option>
                      <option value="TOV Nude 13Lb">5</option>
                      <option value="TOV Meshbag 17Lb">6</option>
                      <option value="BEEF Nude 15Lb">7</option>
                      <option value="BEEF Nude 10Lb">8</option>
                      <option value="OBEEF Nude 15Lb">9</option>
                      <option value="OBEEF Nude 10Lb">10</option>
                      <option value="Nacional">11</option>
                      <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                      <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                      <option value="Carton Polybag TOV 11Lb">14</option>
                      <option value="Carton Polybag OTOV 11Lb">15</option>
                      <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                      <option value="Nacional A granel (sin acomodo)">17</option>
                      <option value="Cajas maquina">18</option>
                      <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                      <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                      <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                      <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                      <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                      <option value="Clamshell 3 pack 17libras">24</option>
                      <option value="Cocktail 10Lb">25</option>
                      <option value="Cocktail 12Lb">26</option>
                    </select>
                          <label for="Presentacion13">Presentación</label>
                            <div class="center">
                                <label id="andphone13" style="display: none">Carton TOV 11 Lb</label>
                                <label id="ot13" style="display: none">Carton OTOV  11 Lb</label>
                                <label id="racimo13" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                <label id="polybag13" style="display: none">TOV Polybag 13 Lb</label>
                                <label id="nude13" style="display: none">TOV Nude 13 Lb</label>
                                <label id="meshbag13" style="display: none">TOV Meshbag 17 Lb</label>
                                <label id="beef1514" style="display: none">BEEF Nude 15 Lb</label>
                                <label id="d15" style="display: none">BEEF Nude 10Lb</label>
                                <label id="d16" style="display: none">OBEEF Nude 15Lb</label>
                                <label id="d17" style="display: none">OBEEF Nude 10Lb</label>
                                <label id="d18" style="display: none">Nacional</label>
                                <label id="d19" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                <label id="d20" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                <label id="d21" style="display: none">Carton Polybag TOV 11Lb</label>
                                <label id="d22" style="display: none">Carton Polybag OTOV 11Lb</label>
                                <label id="d23" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                <label id="d24" style="display: none">Nacional A granel (sin acomodo)</label>
                                <label id="d25" style="display: none">Cajas maquina</label>
                                <label id="d26" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                <label id="d27" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                <label id="d28" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                <label id="d29" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="d30" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                <label id="d31" style="display: none">Clamshell 3 pack 17libras</label>
                                <label id="d32" style="display: none">Cocktail 10Lb</label>
                                <label id="d33" style="display: none">Cocktail 12Lb</label>
                            </div>
                  </div>
                    <div class="input-field col s3">
                      <input placeholder="cantidad" type="number" class="validate">
                      <label for="cantidad">Cantidad</label>
                    </div>
                      <div class="col s12">
                      </div>
                        <div class="input-field col s3">
                          <select name="turno7" id="turno7" onchange="seleccionarTurno7();">
                            <option value="" disabled selected>Turno</option>
                            <option value="normal7">Normal</option>
                            <option value="extra7">Extra</option>
                          </select>
                            <label for="turno7">Turno</label>
                          </div>
                            <div class="input-field col s2" id="espphone7" style="display: none">
                              <select>
                                <option value="" disabled selected>Banda</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                              </select>
                                <label for="banda">Banda</label>
                            </div>
                              <div class="input-field col s5" id="frphone7" style="display: none">
                                <select name="presentacion14" id="presentacion14" onchange="seleccionarPresentacion14();">
                                  <option value="" disabled selected>Presentación</option>
                                  <option value="Carton TOV 11Lb">1</option>
                                  <option value="Carton OTOV 11Lb">2</option>
                                  <option value="TOV 8X24 12Lb (racimo pesado, bolsa sellada)">3</option>
                                  <option value="TOV Polybag 13Lb">4</option>
                                  <option value="TOV Nude 13Lb">5</option>
                                  <option value="TOV Meshbag 17Lb">6</option>
                                  <option value="BEEF Nude 15Lb">7</option>
                                  <option value="BEEF Nude 10Lb">8</option>
                                  <option value="OBEEF Nude 15Lb">9</option>
                                  <option value="OBEEF Nude 10Lb">10</option>
                                  <option value="Nacional">11</option>
                                  <option value="Carton TOV  4&5  Meshbag 11Lb">12</option>
                                  <option value="Carton OTOV 4&5 Meshbag 11Lb">13</option>
                                  <option value="Carton Polybag TOV 11Lb">14</option>
                                  <option value="Carton Polybag OTOV 11Lb">15</option>
                                  <option value="Carton OTOV  2&3 Meshbag 11Lb">16</option>
                                  <option value="Nacional A granel (sin acomodo)">17</option>
                                  <option value="Cajas maquina">18</option>
                                  <option value="OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)">19</option>
                                  <option value="Carton TOV 11Lb  Polybag (sellada)">20</option>
                                  <option value="Carton Polybag  (sellada) OTOV 11Lb">21</option>
                                  <option value="Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV">22</option>
                                  <option value="Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV">23</option>
                                  <option value="Clamshell 3 pack 17libras">24</option>
                                  <option value="Cocktail 10Lb">25</option>
                                  <option value="Cocktail 12Lb">26</option>
                                </select>
                                  <label for="Presentacion4">Presentación</label>
                                    <div class="center">
                                      <label id="andphone14" style="display: none">Carton TOV 11 Lb</label>
                                      <label id="ot14" style="display: none">Carton OTOV  11 Lb</label>
                                      <label id="racimo14" style="display: none">TOV 8X24 12 Lb (racimo pesado, bolsa sellada)</label>
                                      <label id="polybag14" style="display: none">TOV Polybag 13 Lb</label>
                                      <label id="nude14" style="display: none">TOV Nude 13 Lb</label>
                                      <label id="meshbag14" style="display: none">TOV Meshbag 17 Lb</label>
                                      <label id="beef1515" style="display: none">BEEF Nude 15 Lb</label>
                                      <label id="di15" style="display: none">BEEF Nude 10Lb</label>
                                      <label id="di16" style="display: none">OBEEF Nude 15Lb</label>
                                      <label id="di17" style="display: none">OBEEF Nude 10Lb</label>
                                      <label id="di18" style="display: none">Nacional</label>
                                      <label id="di19" style="display: none">Carton TOV  4&5  Meshbag 11Lb</label>
                                      <label id="di20" style="display: none">Carton OTOV 4&5 Meshbag 11Lb</label>
                                      <label id="di21" style="display: none">Carton Polybag TOV 11Lb</label>
                                      <label id="di22" style="display: none">Carton Polybag OTOV 11Lb</label>
                                      <label id="di23" style="display: none">Carton OTOV  2&3 Meshbag 11Lb</label>
                                      <label id="di24" style="display: none">Nacional A granel (sin acomodo)</label>
                                      <label id="di25" style="display: none">Cajas maquina</label>
                                      <label id="di26" style="display: none">OTOV  12Lb Polybag MS  (racimo pesado, bolsa sellada)</label>
                                      <label id="di27" style="display: none">Carton TOV 11Lb  Polybag (sellada)</label>
                                      <label id="di28" style="display: none">Carton Polybag  (sellada) OTOV 11Lb</label>
                                      <label id="di29" style="display: none">Carton Polybag 13LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="di30" style="display: none">Carton Polybag 11LB  (racimo pesado, bolsa sellada) OTOV</label>
                                      <label id="di31" style="display: none">Clamshell 3 pack 17libras</label>
                                      <label id="di32" style="display: none">Cocktail 10Lb</label>
                                      <label id="di33" style="display: none">Cocktail 12Lb</label>
                                    </div>
                              </div>
                                <div class="input-field col s2" id="turn7" style="display: none" >
                                  <input placeholder="cantidad" type="number" class="validate">
                                  <label for="cantidad">Cantidad</label>
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
                                      <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="entrada" type="text" class="validate timepicker" name="entrada">
                                          <label for="entrada">Entrada</label>
                                      </div>
                                        <div class="input-field col s4">
                                          <i class="material-icons prefix">access_time</i>
                                          <input id="salida" type="text" class="validate timepicker" name="salida">
                                          <label for="salida">Salida</label>
                                        </div>
              </div>
                <div class="center">
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                  <a href="lista_empaque.php" class="modal-close waves-effect green accent-4 btn ">Capturar</a>
                </div>
            </form>
      </div>
    </div>
  </body>
</html>