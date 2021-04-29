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
            <li>    
              <div class="center row">
                <div class="col s12 " >
                  <div class="row">
                    <div class="input-field col s6 s12 black-text" style="margin: 11px; margin-right: -70px;">
                      <select>
                        <option value="1">Semana 5</option>
                        <option value="2">Semana 4</option>
                        <option value="3">Semana 3</option>
                        <option value="4">Semana 2</option>
                        <option value="5">Semana 1</option>
                      </select>
                      </div>
                    </div>
                  </div>
                </div>          
            </li> 
            <li><a class="modal-trigger black-text" href="../views/lista_empleados.php">Ver Empleados</a></li> 
            <li><a class="modal-trigger black-text" href="https://solucionfactible.com/sfic/resources/files/nomina.pdf">Generar reporte</a></li>     
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
    <!-- Lunes -->
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title center">Lunes</span>
              <table class="responsive-table centered">
              <thead>
              <tr>
                <th>Niveles</th>
                <th>Pago Extra</th>
                <th>Horas Extra</th>
                <th>Pago por Guardia</th>
                <th>Pago por dia Festivo</th>
                <th>Permiso por Guardia</th>
                <th>Asistencia</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>1</td>
                  <td>si</td>
                  <td>3</td>
                  <td>no</td>
                  <td>no</td>
                  <td>si</td>
                  <td>A</td>
              </tr>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Martes -->
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title center">Martes</span>
              <table class="responsive-table centered">
              <thead>
              <tr>
                <th>Niveles</th>
                <th>Pago Extra</th>
                <th>Horas Extra</th>
                <th>Pago por Guardia</th>
                <th>Pago por dia Festivo</th>
                <th>Permiso por Guardia</th>
                <th>Asistencia</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>1</td>
                  <td>si</td>
                  <td>3</td>
                  <td>no</td>
                  <td>no</td>
                  <td>si</td>
                  <td>A</td>
              </tr>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Miercoles -->
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title center">Miercoles</span>
              <table class="responsive-table centered">
              <thead>
              <tr>
                <th>Niveles</th>
                <th>Pago Extra</th>
                <th>Horas Extra</th>
                <th>Pago por Guardia</th>
                <th>Pago por dia Festivo</th>
                <th>Permiso por Guardia</th>
                <th>Asistencia</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>1</td>
                  <td>si</td>
                  <td>3</td>
                  <td>no</td>
                  <td>no</td>
                  <td>si</td>
                  <td>A</td>
              </tr>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Jueves -->
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title center">Jueves</span>
              <table class="responsive-table centered">
              <thead>
              <tr>
                <th>Niveles</th>
                <th>Pago Extra</th>
                <th>Horas Extra</th>
                <th>Pago por Guardia</th>
                <th>Pago por dia Festivo</th>
                <th>Permiso por Guardia</th>
                <th>Asistencia</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>1</td>
                  <td>si</td>
                  <td>3</td>
                  <td>no</td>
                  <td>no</td>
                  <td>si</td>
                  <td>A</td>
              </tr>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Viernes -->
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title center">Viernes</span>
              <table class="responsive-table centered">
              <thead>
              <tr>
                <th>Niveles</th>
                <th>Pago Extra</th>
                <th>Horas Extra</th>
                <th>Pago por Guardia</th>
                <th>Pago por dia Festivo</th>
                <th>Permiso por Guardia</th>
                <th>Asistencia</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>1</td>
                  <td>si</td>
                  <td>3</td>
                  <td>no</td>
                  <td>no</td>
                  <td>si</td>
                  <td>A</td>
              </tr>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Sabado -->
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title center">Sabado</span>
              <table class="responsive-table centered">
              <thead>
              <tr>
                <th>Niveles</th>
                <th>Pago Extra</th>
                <th>Horas Extra</th>
                <th>Pago por Guardia</th>
                <th>Pago por dia Festivo</th>
                <th>Permiso por Guardia</th>
                <th>Asistencia</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>1</td>
                  <td>si</td>
                  <td>3</td>
                  <td>no</td>
                  <td>no</td>
                  <td>si</td>
                  <td>A</td>
              </tr>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Domingo -->
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title center">Domingo</span>
              <table class="responsive-table centered">
              <thead>
              <tr>
                <th>Niveles</th>
                <th>Pago Extra</th>
                <th>Horas Extra</th>
                <th>Pago por Guardia</th>
                <th>Pago por dia Festivo</th>
                <th>Permiso por Guardia</th>
                <th>Asistencia</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>1</td>
                  <td>si</td>
                  <td>3</td>
                  <td>no</td>
                  <td>no</td>
                  <td>si</td>
                  <td>A</td>
              </tr>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>