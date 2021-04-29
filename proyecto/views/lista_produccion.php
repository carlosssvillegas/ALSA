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
                <li>    
                  <div class="center row">
                    <div class="col s12 " >
                      <div class="row">
                        <div class="input-field col s6 s12 black-text" style="margin: 11px; margin-right: -70px;">
                          <select name="codigo">
                            <option value="" disabled selected>Codigo</option>
                            <option value="VO109">A</option>
                            <option value="VO110">B</option>
                            <option value="VO111">C</option>
                            <option value="VO112">D</option>
                            <option value="VO113">F</option>
                            <option value="VO114">S</option>
                            <option value="VO115">PC</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>          
                </li> 
                <li><a class="modal-trigger black-text" href="../views/lista_empleados.php">Ver Empleados</a></li> 
                <li><a class="modal-trigger black-text" href="#modal3">Importar Excel</a></li> 
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
    <!-- Modal de Gnenerales-->
    <div id="modal6" class="modal">
        <div class="modal-content">
          <div class="row">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s2"><a class="active" href="#test1">Gnenerales</a></li>
                <li class="tab col s2"><a href="#test2">Percepciones</a></li>
                <li class="tab col s2"><a href="#test3">Deducciones</a></li>
                <li class="tab col s3"><a href="#test4">Lineas Trabajadas</a></li>
                <li class="tab col s3"><a href="#test5">Historial Medico</a></li>
              </ul>
            </div>
            <div id="test1" class="col s12">
              <h4 class="center">Gnenerales</h4>
              <div class="row">
                <div class="input-field col s3">
                  <input disabled  id="Numero de Nomina" placeholder="86668" type="number" class="validate">
                  <label for="Numero de Nomina">Numero de Nomina</label>
                </div>  
                <div class="input-field col s3">
                  <input disabled  id="Nombre" placeholder="Francisco perez vargas" type="number" class="validate">
                  <label for="Nombre">Nombre</label>
                </div>        
                <div class="input-field col s3">
                  <input disabled  id="codigo" placeholder="P2B07" type="text" class="validate">
                  <label for="codigo">Codigo</label>
                </div>
                <div class="input-field col s3">
                  <input disabled  id="departamento" placeholder="Mantenimiento" type="number" class="validate">
                  <label for="departamento">Departamento</label>
                </div>
                <div class="input-field col s3">
                  <input disabled  id="puesto" placeholder="Soporte de racimo" type="text" class="validate">
                  <label for="puesto">Puesto</label>
                </div>  
                <div class="input-field col s3">
                  <input disabled  id="area" placeholder="Mantenimiento" type="text" class="validate">
                  <label for="area">Area</label>
                </div>        
                <div class="input-field col s3">
                  <input disabled  id="estatus" placeholder="Activo" type="text" class="validate">
                  <label for="estatus">Estatus</label>
                </div>
                <div class="input-field col s3">
                  <input disabled  id="direccion" placeholder="Corregidor #234" type="text" class="validate">
                  <label for="direccion">Dirección</label>
                </div>
                <div class="input-field col s3">
                  <input disabled  id="localidad" placeholder="GUANAJUATILLO" type="text" class="validate">
                  <label for="localidad">Localidad</label>
                </div>  
                <div class="input-field col s3">
                  <input disabled  id="municipio" placeholder="GUADALUPE ZAC" type="text" class="validate">
                  <label for="municipio">Municipio</label>
                </div>        
                <div class="input-field col s3">
                  <input disabled  id="codigo postal" placeholder="98098" type="text" class="validate">
                  <label for="codigo postal">Codigo Postal</label>
                </div>
                <div class="input-field col s3">
                  <input disabled  id="fecha_alta" placeholder="29/03/2021" type="text" class="validate">
                  <label for="fecha_alta">Fecha de Alta</label>
                </div>
                <div class="input-field col s3">
                  <input disabled  id="nss" placeholder="SDFGH234567" type="text" class="validate">
                  <label for="nss">NSS</label>
                </div>   
                <div class="input-field col s3">
                  <input disabled  id="curp" placeholder="FGHJK45678" type="text" class="validate">
                  <label for="curp">Curp</label>
                </div>  
                <div class="input-field col s3">
                  <input disabled  id="rfc" placeholder="SDFGHJ34567" type="text" class="validate">
                  <label for="rfc">RFC</label>
                </div>        
                <div class="input-field col s3">
                  <input disabled  id="fecha_nacimiento" placeholder="30/09/1998" type="text" class="validate">
                  <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                </div>
                <div class="input-field col s3">
                  <input disabled  id="sexo" placeholder="M" type="text" class="validate">
                  <label for="sexo">Sexo</label>
                </div> 
                <div class="input-field col s3">
                  <input disabled  id="transporte" placeholder="NUEVO MUNDO" type="text" class="validate">
                  <label for="transporte">Transporte</label>
                </div> 
                <div class="input-field col s3">
                  <input disabled  id="locker_asignado" placeholder="23" type="text" class="validate">
                  <label for="locker_asignado">Locker Asignado</label>
                </div> 
                <div class="input-field col s3">
                  <input disabled  id="numero_uniforme" placeholder="45" type="number" class="validate">
                  <label for="numero_uniforme">Numero de Uniforme</label>
                </div>     
                <div class="input-field col s3">
                  <input disabled  id="color" placeholder="Rojo" type="number" class="validate">
                  <label for="color">Color</label>
                </div> 
                <div class="input-field col s3">
                  <input disabled  id="talla" placeholder="34" type="number" class="validate">
                  <label for="talla">Talla</label>
                </div>             
              </div>
            </div>
            <div id="test2" class="col s12">
              <h4 class="center">Percepciones</h4>
              <ul class="collection with-header">
                <li class="collection-header"><h4>Francisco perez vargas</h4></li>
                <li class="collection-item">Invitado: $300</li>
                <li class="collection-item">Bono P: $100</li>
                <li class="collection-item">Bono A: $200</li>
                <li class="collection-item">Premio: $350</li>
                <li class="collection-item">Lineas Hechas: 78</li>
                <li class="collection-item">Dep x error nómina anterior: $200</li>
                <li class="collection-item">Otros Ingresos: </li>
                <li class="collection-item">Ayudas:</li>
                <li class="collection-item">Horas Extra:</li>
                <li class="collection-item">Domingo Trabajado:</li>
                <li class="collection-item">Vacaciones: </li>
              </ul>
            </div>
            <div id="test3" class="col s12">
              <h4 class="center">Deducciones</h4>
                <ul class="collection with-header">
                  <li class="collection-header"><h4>Francisco perez vargas</h4></li>
                  <li class="collection-item">Tijeras:</li>
                  <li class="collection-item">Botas:</li>
                  <li class="collection-item">Uniforme:</li>
                  <li class="collection-item">Radio: </li>
                  <li class="collection-item">Desc x Error: </li>
                  <li class="collection-item">Desc x Falta: </li>
                  <li class="collection-item">INFONAVIT: </li>
                  <li class="collection-item">FONACOT: </li>
                  <li class="collection-item">Préstamo: $200</li>
                  <li class="collection-item">Faltas de inocuidad: $100</li>
                </ul>
            </div>
            <div id="test4" class="col s12">
              <h4 class="center">Lineas Trabajadas</h4>
              <ul class="collection with-header">
                  <li class="collection-header"><h4>Francisco perez vargas</h4></li>
                  <li class="collection-item">Z01-01-AR: 78</li>
                  <li class="collection-item">Z01-02-AR:  </li>
                  <li class="collection-item">Z01-03-AR: </li>
                  <li class="collection-item">Z01-04-AR:</li>
                  <li class="collection-item">Z01-05-AR:</li>
                  <li class="collection-item">Z01-01-AB:</li>
                  <li class="collection-item">Z01-02-AB:</li>
                  <li class="collection-item">Z01-03-AB: </li>
                  <li class="collection-item">Z01-04-AB: </li>
                  <li class="collection-item">Z01-05-AB:</li>
                  <li class="collection-item">Z06-06-AR: </li>
                  <li class="collection-item">Z06-07-AR: </li>
                  <li class="collection-item">Z06-08-AR: </li>
                  <li class="collection-item">Z06-09-AR: </li>
                  <li class="collection-item">Z06-06-AB: </li>
                  <li class="collection-item">Z06-07-AB: </li>
                  <li class="collection-item">Z06-08-AB:</li>
                  <li class="collection-item">Z06-09-AB: </li>
                  <li class="collection-item">Z10-10-AR: </li>
                  <li class="collection-item">Z10-10-AB: </li>
                  <li class="collection-item">Z14-14-AR: </li>
                  <li class="collection-item">Z14-14-AB: </li>
                </ul>
            </div>
            <div id="test5" class="col s12">
              <h4 class="center">Historial Medico</h4>
              <ul class="collapsible">
                <li>
                  <div class="collapsible-header"><i class="material-icons">date_range</i>20/10/2021</div>
                    <div class="collapsible-body center">
                      <h5>Datos Gnenerales</h5>
                      <span>Nombre: Francisco perez vargas</span><br>
                      <span>Fecha de Nacimiento: 30/09/1998</span><br>
                      <span>Sexo: M</span><br>
                      <span>Talla: 34</span><br>
                      <span>Edad: 22</span><br>
                      <h5>Motivo de Consulta</h5>
                      <span>Dolor de Cabeza y Tos</span>
                    </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
    <!-- Modal ayudas -->
    <div id="modal7" class="modal">
      <div class="modal-content">
        <form>
          <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
      </div>
    </div>
    <!--Modal Importar Excel-->
    <div id="modal3" class="modal" style="width: 40%; height: 50%;">
      <div class="modal-content">
        <h4 class="center">Subir Archivo</h4>
        <form action="#">
          <div class="file-field input-field col s6">
            <div class="btn green accent-4">
              <span>Archivo</span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </form>
        <div class="center">
          <a href="#!" class="modal-close waves-effect green accent-4 waves-light btn">Subir</a>
        </div>
      </div>
    </div>
    <!-- ayudas boton-->
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red modal-trigger" href="#modal7">
          <i class="large material-icons">add</i>
        </a>
    </div>
    <!--Tabla 1-->
    <div class="responsive-table">
      <table class="table centered">
        <thead>
          <tr>
            <th scope="col">Actions</th>
            <th scope="col">Codigo</th>
            <th scope="col">Numero de nomina</th>
            <th scope="col">Nombre</th>
            <th scope="col">Zona</th>
            <th scope="col">Nave</th>
            <th scope="col">Puesto</th>
            <th scope="col">Linea</th>
            <th scope="col">Asistencia</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $enlace =  mysqli_connect("localhost", "root", "Alien123", "empleados");
            $conexion = ("SELECT * FROM `tb_empleados` order by idempleado desc");
            $resultado1 = mysqli_query($enlace, $conexion); 
            if (mysqli_num_rows($resultado1) > 0){
            while ($row = mysqli_fetch_assoc($resultado1)){
            ?>
            <tr>
              <td>
                <a class="modal-trigger small material-icons  green-text editbtn" href="editar_produccion.php">border_color</a>
                <a class="modal-trigger small material-icons  green-text editbtn" href="captura_produccion.php">add_circle</a>
                <a class="modal-trigger small material-icons  green-text editbtn" href="vista_produccion.php">more_horiz</a>
              </td> 
              <td class="hidden"><?php echo "".$row['idempleado'].""; ?></td>
              <td><?php echo "".$row['codigo'].""; ?></td>
              <td><?php echo "".$row['numero_de_nomina'].""; ?></td>
              <td class="modal-trigger" href="#modal6"><?php echo "".$row['nombre'].""; ?></td>
              <td>16</td>
              <td>16</td>
              <td>Abajo</td>
              <td>14</td>
              <td>A</td>
            </tr>
              <?php
              }}
              ?>
        </tbody>
      </table>
      <!--Tabla 2 ayudas-->
      <h4 class="center">Ayudas</h4>
      <table class=" centered responsive-table">
        <thead>
          <tr>
            <th>Actions</th>
            <th>Codigo</th>
            <th>Numero de Nomina</th>
            <th>Nombre</th>
            <th>Zona</th>
            <th>Nave</th>
            <th>Puesto</th>
            <th>Linea</th>
            <th>Asistencia</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a class="modal-trigger small material-icons  green-text editbtn" href="editar_produccion.php">border_color</a>
              <a class="modal-trigger small material-icons  green-text editbtn" href="captura_produccion_ayudas.php">add_circle</a>
              <a class="modal-trigger small material-icons  green-text editbtn" href="vista_produccion.php">more_horiz</a>
            </td> 
            <td>P2B04</td>
            <td>1185</td>
            <td>Acosta Lira Pablo Gabino</td>
            <td>14</td>
            <td>14</td>
            <td>Arriba</td>
            <td>16</td>
            <td>A</td>
          </tr>
        </tbody>
      </table>            
    </div>
  </body>
</html>