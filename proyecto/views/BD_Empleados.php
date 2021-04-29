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
    <!--Navbar-->
    <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper teal #ffffff white">
        <a href="#" class="brand-logo">
          <img src="../images/logo.jpg" height="50" width="100" style="vertical-align: middle;" class="circle">
          <label for="">BD_Empleados</label>
          <a href="#" class="sidenav-trigger" data-target="mobile-nav">
            <i class="material-icons black-text">menu</i>
          </a>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down"> 
          <li>    
            <div class="center row">
               <div class="col s12 " >
                 <div class="row" id="topbarsearch">
                   <div class="input-field col s6 s12 black-text">
                     <i class="black-text material-icons prefix">search</i>
                     <input type="text" placeholder="search" id="autocomplete-input" class="autocomplete black-text" >
                     </div>
                   </div>
                 </div>
               </div>          
           </li> 
           <!--Buttons Actions-->
           <li><a class="modal-trigger black-text" href="#modal6">Añadir Empleado</a></li> 
           <li><a class="modal-trigger black-text" href="https://solucionfactible.com/sfic/resources/files/nomina.pdf">Crear Pdf</a></li>    
           <li><a class="modal-trigger black-text">Reiniciar Archivo</a></li>  
           <li><a class="modal-trigger black-text" href="#modal1">Importar Reloj</a></li> 
           <li><a class="modal-trigger black-text">Procesar Nómina</a></li>  
           <li><a href="#" class="black-text">John Doe<i class="large sidenav-trigger black-text material-icons right" data-target="mobile-nav">account_circle</i></a></li>
           
        </ul>
    </nav>
  </div>
</div>
  <!--Sidenav-->
  <ul id="mobile-nav" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="../images/background.jpg">
      </div>
      <a><img class="circle" src="../images/perfil.jpg"></a>
      <a><span class="white-text name">John Doe</span></a>
      <a><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a class="black-text" href="Nomina.html">Nómina</a></li>
    <li><a class="black-text" href="Lineas.html">Líneas</a></li>
    <li><a class="black-text" href="Descuentos.html">Descuentos</a></li>
    <li><a class="black-text" href="Ingresos.html">Ingresos</a></li>
    <li><a class="black-text" href="Bases.html">Bases</a></li>
    <li><a class="black-text" href="BD_Empleados.html">BD Empleados</a></li>
    <li><a class="modal-trigger black-text" href="#modal8">añadir usuario</a></li>
    <li><div class="divider"></div></li>
    <li><a href="Login.html">Cerrar sesion</a></li>
  </ul>


<!-- Modal Personal de Destajo -->
<div id="modal1" class="modal">
  <div class="modal-content">
   <h4 class="center">Personal Destajo</h4>
   <p>Acosta Lira Pablo Gabino</p>
  <div class="row">
    <form class="col s6">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">access_time</i>
          <input type="text" class="timepicker">
          <label for="icon_prefix3">Entrada</label>
        </div>
      </div>
    </form>
    <div class="row">
      <form class="col s6">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">access_time</i>
            <input type="text" class="timepicker">
            <label for="icon_prefix4">Salida</label>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <form class="col s6">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">date_range</i>
          <input type="text" class="datepicker">
          <label for="icon_prefix1">Fecha</label>
        </div>
      </div>
    </form>
    <div class="row">
      <form class="col s6">
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Opcion</option>
            <option value="1">Asistencia</option>
            <option value="2">Inasistencia</option>
            <option value="3">Permiso</option>
            <option value="4">Vacaciones</option>
            <option value="5">Festivo</option>
          </select>
          <label>Asistencia</label>
        </div>
      </form>
    </div>
  </div> 
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="icon_prefix7" class="materialize-textarea"></textarea>
            <label for="icon_prefix7">Observaciones</label>
          </div>
        </div>
        <div class="center">
          <a href="#!" class="modal-close waves-effect green accent-4 btn">Cancelar</a>
          <a href="#!" class="modal-close waves-effect red btn">Borrar Registro</a>
          <a href="#!" class="modal-close waves-effect green accent-4 btn">Aceptar</a>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Otros Ingresos -->
 <div id="modal2" class="modal">
  <div class="modal-content">
    <h4 class="center">Otros Ingresos</h4>
    <p>Acosta Lira Pablo Gabino</p>
    <div class="row">
      <form class="col s6">
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Opcion</option>
            <option value="1">Pago por invitado</option>
            <option value="2">Gasolina 150</option>
            <option value="3">Aplicaciones(x $1)</option>
            <option value="4">Préstamo (x $1)</option>
            <option value="5">Dep x error nómina anterior (x $1)</option>
            <option value="6">Vacaciones (x $1)</option>
            <option value="7">Cosecha Z1 (x $10)</option>
            <option value="8">Deshoje Z1 (x $10)</option>
            <option value="9">Otro Z1 (x $10)</option>
            <option value="10">Limpieza Z1 (x $10)</option>
            <option value="11">Clip, Brote y Raleo Z1 (x $20)</option>
            <option value="12">Bajada Z1 (x $8)</option>
            <option value="13">Cosecha Z6 y 10 (x $15)</option>
            <option value="14">Deshoje Z6 y 10 (x $15)</option>
            <option value="15">Otro Z6 y 10 (x $15)</option>
            <option value="16">Limpieza Z6 y 10 (x $15)</option>
            <option value="17">Tarjetas Z6 y 10 (x $15)</option>
            <option value="18">Composta Z6 y 10 (x $15)</option>
            <option value="19">Clip y Brote y Raleo Z6 y 10 (x $15)</option>
            <option value="20">Bajada Z6 y 10 (x $15)</option>
          </select>
          <label>Registro</label>
        </div>
      </form>
      <div class="row">
        <form class="col s6">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">attach_money</i>
              <input type="number">
              <label for="icon_prefix7">Ingreso</label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect green accent-4 btn">Cancelar</a>
    <a href="#!" class="modal-close waves-effect green accent-4 btn">Aceptar</a>
  </div>
</div>
<!-- Modal Descuentos -->
<div id="modal3" class="modal">
  <div class="modal-content">
    <h4 class="center">Descuentos</h4>
    <p>Acosta Lira Pablo Gabino</p>
    <div class="row">
      <form class="col s6">
        <div class="input-field col s12">
          <select id='select' name='select' multiple>
            <option value="1">Tierras</option>
            <option value="2">Botas</option>
            <option value="3">Uniforme</option>
            <option value="4">Radio</option>
            <option value='div5'>Desc x error</option>
            <option value='div5'>Premios Vac</option>
          </select>
          <label>Descuentos</label>
        </div>
      </form>
      <div class="row">
        <form class="col s6">
          <div class="row">
            <div id='pai'>
            <div id='div5' class="input-field col s12">
              <i class="material-icons prefix">attach_money</i>
              <input type="number" id='form'>
              <label for="icon_prefix7">Descuento</label>
            </div>
          </div>
          </div>
        </form>
      </div>
      <div class="row">
        <form class="col s6 right">
          <div class="row">
            <div id='pai'>
            <div id='div5' class="input-field col s12">
              <i class="material-icons prefix">attach_money</i>
              <input type="number" id='form'>
              <label for="icon_prefix7">Descuento</label>
            </div>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect green accent-4 btn">Cancelar</a>
    <a href="#!" class="modal-close waves-effect green accent-4 btn">Aceptar</a>
  </div>
</div>
<!-- Modal Faltas de inocuidad -->
<div id="modal4" class="modal">
  <div class="modal-content">
    <h4 class="center">Faltas de inocuidad</h4>
    <p>Acosta Lira Pablo Gabino</p>
    <div class="row">
      <form class="col s12">
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Opcion</option>
            <option value="1">Menor (25% de los premios)</option>
            <option value="2">Media (50% de los premios)</option>
            <option value="3">Mayor (100% de los premios)</option>
            <option value="4">Ninguna</option>
          </select>
          <label>Faltas</label>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect green accent-4 btn">Cancelar</a>
    <a href="#!" class="modal-close waves-effect green accent-4 btn">Aceptar</a>
  </div>
</div>
<!--Modal Zonas -->
<div id="modal5" class="modal">
  <div class="modal-content">
   <h4 class="center">Personal Destajo</h4>
   <h6>Acosta Lira Pablo Gabino</h6>
   <p>Nave: Z4 N6</p>
   <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-content black-text">
          <span class="card-title">Zona 1</span>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s2">
                  <i class="material-icons small prefix">arrow_upward</i>
                </div>
                <div class="input-field col s2">
                  <label for="">01</label>
                  <input id="01" type="number" class="validate">
                </div>
                <div class="input-field col s2">
                  <label for="">02</label>
                  <input id="02" type="number" class="validate">
                </div>
                <div class="input-field col s2">
                  <label for="">03</label>
                  <input id="03" type="number" class="validate">
                </div>
                <div class="input-field col s2">
                  <label for="">04</label>
                  <input id="04" type="number" class="validate">
                </div>
                <div class="input-field col s2">
                  <label for="">05</label>
                  <input id="05" type="number" class="validate">
                </div>
              </div>
            </form>
          </div>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s2">
                  <i class="material-icons small prefix">arrow_downward</i>
                </div>
                <div class="input-field col s2">
                  <label for="">01</label>
                  <input id="01" type="number" class="validate">
                </div>
                <div class="input-field col s2">
                  <label for="">02</label>
                  <input id="02" type="number" class="validate">
                </div>
                <div class="input-field col s2">
                  <label for="">03</label>
                  <input id="03" type="number" class="validate">
                </div>
                <div class="input-field col s2">
                  <label for="">04</label>
                  <input id="04" type="number" class="validate">
                </div>
                <div class="input-field col s2">
                  <label for="">05</label>
                  <input id="05" type="number" class="validate">
                </div>
              </div>
            </form>
          </div>    
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-content black-text">
            <span class="card-title">Zona 16</span>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s2">
                    <i class="material-icons small prefix">arrow_upward</i>
                  </div>
                  <div class="input-field col s2">
                    <label for="">16</label>
                    <input id="16" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">17</label>
                    <input id="17" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">18</label>
                    <input id="18" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">19</label>
                    <input id="19" type="number" class="validate">
                  </div>
                </div>
              </form>
            </div>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s2">
                    <i class="material-icons small prefix">arrow_downward</i>
                  </div>
                  <div class="input-field col s2">
                    <label for="">16</label>
                    <input id="16" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">17</label>
                    <input id="17" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">18</label>
                    <input id="18" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">19</label>
                    <input id="19" type="number" class="validate">
                  </div>
                </div>
              </form>
            </div> 
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-content black-text">
            <span class="card-title">Zona 6</span>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s2">
                    <i class="material-icons small prefix">arrow_upward</i>
                  </div>
                  <div class="input-field col s2">
                    <label for="">06</label>
                    <input id="06" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">07</label>
                    <input id="07" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">08</label>
                    <input id="08" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">09</label>
                    <input id="09" type="number" class="validate">
                  </div>
                </div>
              </form>
            </div>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s2">
                    <i class="material-icons small prefix">arrow_downward</i>
                  </div>
                  <div class="input-field col s2">
                    <label for="">06</label>
                    <input id="06" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">07</label>
                    <input id="07" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">08</label>
                    <input id="08" type="number" class="validate">
                  </div>
                  <div class="input-field col s2">
                    <label for="">09</label>
                    <input id="09" type="number" class="validate">
                  </div>
                </div>
              </form>
            </div> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-content black-text">
              <span class="card-title">Zona 20</span>
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s2">
                      <i class="material-icons small prefix">arrow_upward</i>
                    </div>
                    <div class="input-field col s2">
                      <label for="">20</label>
                      <input id="20" type="number" class="validate">
                    </div>
                    <div class="input-field col s2">
                      <label for="">21</label>
                      <input id="21" type="number" class="validate">
                    </div>
                    <div class="input-field col s2">
                      <label for="">22</label>
                      <input id="23" type="number" class="validate">
                    </div>
                    <div class="input-field col s2">
                      <label for="">24</label>
                      <input id="24" type="number" class="validate">
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s2">
                      <i class="material-icons small prefix">arrow_downward</i>
                    </div>
                    <div class="input-field col s2">
                      <label for="">20</label>
                      <input id="20" type="number" class="validate">
                    </div>
                    <div class="input-field col s2">
                      <label for="">21</label>
                      <input id="21" type="number" class="validate">
                    </div>
                    <div class="input-field col s2">
                      <label for="">22</label>
                      <input id="23" type="number" class="validate">
                    </div>
                    <div class="input-field col s2">
                      <label for="">24</label>
                      <input id="24" type="number" class="validate">
                    </div>
                  </div>
                </form>
              </div> 
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m3">
          <div class="card">
            <div class="card-content black-text">
              <span class="card-title">Zona 10</span>
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s4">
                      <i class="material-icons small prefix">arrow_upward</i>
                    </div>
                    <div class="input-field col s4">
                      <label for="">10</label>
                      <input id="10" type="number" class="validate">
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s4">
                      <i class="material-icons small prefix">arrow_downward</i>
                    </div>
                    <div class="input-field col s4">
                      <label for="">10</label>
                      <input id="10" type="number" class="validate">
                    </div>
                  </div>
                </form>
              </div> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m3">
            <div class="card">
              <div class="card-content black-text">
                <span class="card-title">Zona 14</span>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s4">
                        <i class="material-icons small prefix">arrow_upward</i>
                      </div>
                      <div class="input-field col s4">
                        <label for="">14</label>
                        <input id="14" type="number" class="validate">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s4">
                        <i class="material-icons small prefix">arrow_downward</i>
                      </div>
                      <div class="input-field col s4">
                        <label for="">14</label>
                        <input id="14" type="number" class="validate">
                      </div>
                    </div>
                  </form>
                </div> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6">
              <div class="card">
                <div class="card-content black-text">
                  <span class="card-title">Observaciones</span>
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">mode_edit</i>
                          <textarea id="icon_prefix8" class="materialize-textarea"></textarea>
                          <label for="icon_prefix8">Observaciones</label>
                        </div>
                      </div>
                      <div class="center">
                        <a href="#!" class="modal-close waves-effect green accent-4 btn">Cancelar</a>
                        <a href="#!" class="modal-close waves-effect green accent-4 btn">Aceptar</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- Modal Añadir Empleados -->
<div id="modal6" class="modal">
  <div class="modal-content">
    <h4 class="center">Agregar Empleado</h4>
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s4">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Nombre</label>
          </div>
          <div class="input-field col s4">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Apellidos</label>
          </div>
          <div class="input-field col s4">
            <input id="numero" type="text" class="validate">
            <label for="numero">No. Nomina</label>
          </div>
          <div class="input-field col s4">
            <input id="codigo" type="text" class="validate">
            <label for="codigo">Codigo</label>
          </div>
          <div class="input-field col s4">
            <input id="departamento" type="text" class="validate">
            <label for="departamento">Departamento</label>
          </div>
          <div class="input-field col s4">
            <input id="puesto" type="text" class="validate">
            <label for="puesto">Puesto</label>
          </div>
          <div class="input-field col s4">
            <input id="estatus" type="text" class="validate">
            <label for="estatus">Estatus</label>
          </div>
          <div class="input-field col s4">
            <input id="direccion" type="text" class="validate">
            <label for="direccion">Dirección</label>
          </div>
          <div class="input-field col s4">
            <input id="localidad" type="text" class="validate">
            <label for="localidad">Localidad</label>
          </div>
          <div class="input-field col s4">
            <input id="poblacion" type="text" class="validate">
            <label for="poblacion">Población</label>
          </div>
          <div class="input-field col s4">
            <input id="codigo_postal" type="text" class="validate">
            <label for="codigo_postal">Codigo Postal</label>
          </div>
          <div class="input-field col s4">
            <input id="estado" type="text" class="validate">
            <label for="estado">Estado</label>
          </div>
          <div class="input-field col s4">
            <input id="fecha" type="text" class="validate">
            <label for="fecha">Fecha Alta</label>
          </div>
          <div class="input-field col s4">
            <input id="nss" type="text" class="validate">
            <label for="nss">NSS</label>
          </div>
          <div class="input-field col s4">
            <input id="curp" type="text" class="validate">
            <label for="curp">Curp</label>
          </div>
          <div class="input-field col s4">
            <input id="rfc" type="text" class="validate">
            <label for="rfc">RFC</label>
          </div>
          <div class="input-field col s4">
            <input id="nacimiento" type="text" class="validate">
            <label for="nacimiento">Fecha de Nacimiento</label>
          </div>
          <div class="input-field col s4">
            <input id="sexo" type="text" class="validate">
            <label for="sexo">Sexo</label>
          </div>
          <div class="input-field col s4">
            <input id="transporte" type="text" class="validate">
            <label for="transporte">Transporte</label>
          </div>
          <div class="input-field col s4">
            <input id="looker" type="text" class="validate">
            <label for="looker">Looker Asignado</label>
          </div>
        </div>
        <div class="center">
          <a href="#!" class="modal-close waves-effect green accent-4 btn">Cancelar</a>
          <a href="#!" class="modal-close waves-effect green accent-4 btn">Registrar</a>
        </div>
      </form>
    </div>  
  </div>
</div>
<!--Modal Añadir Usuario-->
<div id="modal8" class="modal" style="width: 40%; height: 100%;">
  <div class="modal-content">
   <h4 class="center">Registro de Usuario</h4>
   <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
            <select>
              <option value="" disabled selected>Tipo de Usuario</option>
              <option value="1">Produción</option>
              <option value="2">Capturista</option>
            </select>
            <label>Materialize Select</label>
          </div>        
       <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Nombre</label>
        </div>   
        <div class="input-field col s6">
          <i class="material-icons prefix">assignment_ind</i>
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Apellidos</label>
        </div>   
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">no_encryption</i>
          <input id="password" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
        
      </div>
      <div class="file-field input-field">
        <div class="btn green accent-4">
          <span>Imagen</span>
          <input type="file">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
        </div>
      </div>
    </form>
    <div class="center">
      <a href="#!" class="modal-close waves-effect green accent-4 waves-light btn">Registrar</a>
    </div>
  </div>
  
  </div>
</div>

   <!--Tablas-->
   <table class="centered responsive-table">
    <thead>
      <tr>
          <th>Actions</th>
          <th>No.</th>
          <th>No.Nomina</th>
          <th>Código</th>
          <th>Puesto</th>
          <th>Departamento</th>
          <th>Nombre</th>
          <th>Lunes</th>
          <th>Martes</th>
          <th>Miercoles</th>
          <th>Jueves</th>
          <th>Viernes</th>
          <th>Sabado</th>
          <th>Domingo</th>
          <th>Destajo</th>
          <th>Sueldo Base</th>
          <th>Destajo</th>
          <th>Horas Extras</th>
          <th>Septimo Dia</th>
          <th>Domingo Trabajo</th>
          <th>Premio</th>
          <th>Bono A</th>
          <th>Bono P</th>
          <th>Otras Percepciones</th>
          <th>Total Percepciones</th>
          <th>Retardo</th>
          <th>Salidas Temprano</th>
          <th>Otras Deduciones</th>
          <th>INFONAVIT</th>
          <th>FONACOT</th>
          <th>Prestamo</th>
          <th>Faltas de inocuidad</th>
          <th>Total Deduciones</th>
          <th>Total</th>
          <th>Observaciones</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>1</td>
        <td>2149</td>
        <td>P2B04</td>
        <td>Operativo Arriba</td>
        <td>Z2 N6</td>
        <td>Acosta Lira Pablo Gabino</td>
        <td class="modal-trigger" href="#modal1">A</td>
        <td class="modal-trigger" href="#modal1">A</td>
        <td class="modal-trigger" href="#modal1">A</td>
        <td class="modal-trigger" href="#modal1">A</td>
        <td class="modal-trigger" href="#modal1">A</td>
        <td class="modal-trigger" href="#modal1">A</td>
        <td></td>
        <td class="modal-trigger" href="#modal5">Capturado</td>
        <td></td>
        <td>$1,633.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$200.00</td>
        <td>$100.00</td>
        <td class="modal-trigger" href="#modal2">$(400.00)</td>
        <td>$1,533.00</td>
        <td></td>
        <td></td>
        <td class="modal-trigger" href="#modal3"></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="modal-trigger" href="#modal4"></td>
        <td></td>
        <td>$1,533.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>3</td>
        <td>1084</td>
        <td>P4B04</td>
        <td>Operativo Arriba</td>
        <td>Z4 N14</td>
        <td>Aguilar Diaz Javier</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td>Capturado</td>
        <td></td>
        <td>$1,810.50</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$200.00</td>
        <td>$100.00</td>
        <td></td>
        <td>$2,110.50</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$2,110.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>4</td>
        <td>2505</td>
        <td>P2A09</td>
        <td>Operativo Arriba</td>
        <td>Z2 N6</td>
        <td>Aleman Aleman Eulalio</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td>Capturado</td>
        <td></td>
        <td>$1,140.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$230.00</td>
        <td>$100.00</td>
        <td>$10.00</td>
        <td>$1,480.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,480.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>5</td>
        <td>8130</td>
        <td>GSB03</td>
        <td>Apoyo de Intendencia</td>
        <td>Perifericos</td>
        <td>Aleman Aleman Ramiro</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td></td>
        <td>$831.43</td>
        <td></td>
        <td></td>
        <td>$138.57</td>
        <td></td>
        <td>$230.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,200.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,200.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>6</td>
        <td>2342</td>
        <td>VO111</td>
        <td>Trabajador de Viñedo</td>
        <td>Viñedo</td>
        <td>Aleman Chavez Guadalupe de Jesus</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td></td>
        <td>$814.29</td>
        <td></td>
        <td></td>
        <td>$135.71</td>
        <td></td>
        <td>$300.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,250.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,250.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>7</td>
        <td>8308</td>
        <td>P5A06</td>
        <td>Operativo Abajo</td>
        <td>Z5 N16</td>
        <td>Aleman Rico Alexis</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td>Capturado</td>
        <td></td>
        <td>$1,015.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$230.00</td>
        <td>$100.00</td>
        <td>$75.00</td>
        <td>$1,420.00</td>
        <td></td>
        <td></td>
        <td>$150.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$150.00</td>
        <td>$1,270.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>8</td>
        <td>1677</td>
        <td>P1B06</td>
        <td>Operativo Arriba</td>
        <td>Z1 N4</td>
        <td>Aleman Torres Omar Edelmiro</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td>Capturado</td>
        <td></td>
        <td>$2,128.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$200.00</td>
        <td>$100.00</td>
        <td>$1440.00</td>
        <td>$3,868.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$100.00</td>
        <td>$100.00</td>
        <td>$3,768.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>9</td>
        <td>1085</td>
        <td>GD301</td>
        <td>Chofer1</td>
        <td>Perifericos</td>
        <td>Alfaro Padilla Marco Antoni</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td></td>
        <td>$1500.00</td>
        <td></td>
        <td></td>
        <td>$250.00</td>
        <td></td>
        <td>$350.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td>$2,100.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$2,100.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>10</td>
        <td>8451</td>
        <td>PFG12</td>
        <td>Desinfecion Niel 2B</td>
        <td>Fitosanidad</td>
        <td>Alferez Castañeda Gerardo</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td></td>
        <td>$900.00</td>
        <td></td>
        <td></td>
        <td>$150.00</td>
        <td></td>
        <td>250.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,300.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,300.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>11</td>
        <td>8155</td>
        <td>P1CO2</td>
        <td>Acarreador</td>
        <td>Z1 N2</td>
        <td>Aparicio Zamarron Miguel</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td></td>
        <td>$900.00</td>
        <td></td>
        <td></td>
        <td>$150.00</td>
        <td></td>
        <td>250.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,300.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,300.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>12</td>
        <td>8425</td>
        <td>P1A09</td>
        <td>Operativo Abajo</td>
        <td>Z1 N3</td>
        <td>Badillo Hernandez Yesenia</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td>Capturado</td>
        <td></td>
        <td>1,176.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$230.00</td>
        <td>$100.00</td>
        <td></td>
        <td>$1,506.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,506.00</td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a class="small material-icons  green-text">border_color</a>
        </td>
        <td>13</td>
        <td>2840</td>
        <td>PF105</td>
        <td>Monitoreo Nivel 1B</td>
        <td>Fitosanidad</td>
        <td>Barboza Diaz Isela Jovana</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td>A</td>
        <td></td>
        <td></td>
        <td>$900.00</td>
        <td></td>
        <td></td>
        <td>$150.00</td>
        <td></td>
        <td>$250.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td>$1,300.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>$100.00</td>
        <td>$100.00</td>
        <td>$1,200,00</td>
        <td></td>
      </tr>
    </tbody>
  </table> 
  </body>
</html>