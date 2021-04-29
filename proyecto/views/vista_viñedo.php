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
    <!--Dias de la semana-->
    <!--Lunes-->
    <div class="row">
      <div class="col s4">
        <div class="card">
          <div class="card-content">
            <span class="card-title center">Lunes</span>
            <table class="responsive-table centered">
              <thead>
                <tr>
                  <th>Asistencia</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>A</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--Martes-->
      <div class="row">
        <div class="col s4">
          <div class="card">
            <div class="card-content">
              <span class="card-title center">Martes</span>
              <table class="responsive-table centered">
                <thead>
                  <tr>
                    <th>Asistencia</th>
                    <th>Horas Extra</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A</td>
                    <td>2</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--Miercoles-->
        <div class="row">
          <div class="col s4">
            <div class="card">
              <div class="card-content">
                <span class="card-title center">Miercoles</span>
                <table class="responsive-table centered">
                  <thead>
                    <tr>
                      <th>Asistencia</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>A</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Jueves-->
      <div class="row">
        <div class="col s4">
          <div class="card">
            <div class="card-content">
              <span class="card-title center">Jueves</span>
              <table class="responsive-table centered">
                <thead>
                  <tr>
                    <th>Asistencia</th>
                    <th>Horas Extra</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A</td>
                    <td>2</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--Viernes-->
        <div class="row">
          <div class="col s4">
            <div class="card">
              <div class="card-content">
                <span class="card-title center">Viernes</span>
                <table class="responsive-table centered">
                  <thead>
                    <tr>
                      <th>Asistencia</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>F</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!--Sabado-->
          <div class="row">
            <div class="col s4">
              <div class="card">
                <div class="card-content">
                  <span class="card-title center">Sabado</span>
                  <table class="responsive-table centered">
                    <thead>
                      <tr>
                        <th>Asistencia</th>
                        <th>Horas Extra</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>P</td>
                        <td>2</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Domingo-->
          <div class="row">
            <div class="col s4">
              <div class="card">
                <div class="card-content">
                  <span class="card-title center">Domingo</span>
                  <table class="responsive-table centered">
                    <thead>
                      <tr>
                        <th>Asistencia</th>
                        <th>Horas Extra</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>P</td>
                        <td>2</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
  </body>
</html>