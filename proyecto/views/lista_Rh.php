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
            <li><a class="modal-trigger black-text" href="../views/Rh_registro.php">Añadir Empleado</a></li> 
            <li><a class="modal-trigger black-text" href="../views/lista_Rh.php">Ver Empleados</a></li> 
            <li><a class="modal-trigger black-text" href="https://solucionfactible.com/sfic/resources/files/nomina.pdf">Generar reporte</a></li>     
            <li><a href="#" class="black-text">John Doe<i class="large sidenav-trigger black-text material-icons right" data-target="mobile-nav">account_circle</i></a></li>
            
          </ul>
      </nav>
    </div>
    </div>
     <!--Sidenav-->
    <ul id="mobile-nav" class="sidenav">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="../images/background.jpg">
          </div>
          <a><img class="circle" src="../images/perfil.jpg"></a>
          <a><span class="white-text name">John Doe</span></a>
          <a><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
      </li>
      <ul class="collapsible">
      <li class="center">
        <div class="collapsible-header">Recursos Humanos</div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empleados.php">Ver Empleados</a></span></div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empleados.php">Agregar Empleado</a></span></div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empleados.php">Editar Empleado</a></span></div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empleados.php">Baja Empleado</a></span></div>
      </li>
      <li class="center">
        <div class="collapsible-header">Labores Culturales</div>
        <div class="collapsible-body"><span><a class="black-text" href="avances_produccion.php">Ver Empleados</a></span></div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empleados.php">Agregar Empleado</a></span></div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empleados.php">Editar Empleado</a></span></div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empleados.php">Baja Empleado</a></span></div>
      </li>
      <li class="center">
        <div class="collapsible-header">Empaque</div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empaque.php">Ver Empleados</a></span></div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empleados.php">Agregar Empleado</a></span></div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empleados.php">Editar Empleado</a></span></div>
        <div class="collapsible-body"><span><a class="black-text" href="lista_empleados.php">Baja Empleado</a></span></div>
      </li>
    </ul>
    </ul>
    <!-- Modal Vacaciones -->
    <div id="modal1" class="modal" style="width: 40%; height: 100%;">
      <div class="modal-content">
        <h4 class="center">Vacaciones</h4>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">date_range</i>
              <input type="text" class="datepicker">
              <label for="icon_prefix">Fecha Inicial</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">date_range</i>
              <input type="text" class="datepicker">
              <label for="icon_prefix">Fecha Final</label>
            </div>
          </div>
          <div class="center">
            <a class="waves-effect waves-light green accent-4 btn" href="../views/lista_Rh.php">Cancelar</a>
            <a class="waves-effect waves-light green accent-4 btn" href="../views/lista_Rh.php">Aceptar</a>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal Baja -->
    <div id="modal2" class="modal" style="width: 40%; height: 100%;">
      <div class="modal-content">
        <h4 class="center">Baja Empleado</h4>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">date_range</i>
              <input type="text" class="datepicker">
              <label for="icon_prefix">Fecha de Baja</label>
            </div>
            <div class="input-field col s6">
              <select name="motivos" id="motivos" onchange="seleccionarMotivo();">
                <option value="" disabled selected>Motivo</option>
                <option value="fallecimiento">Fallecimiento</option>
                <option value="renuncia">Renuncia</option>
                <option value="despido">Despido</option>
              </select>
            </div>
                <input id="andphone" type="text"  style="display: none" placeholder="Renuncia"/>
                <input id="espphone" type="text"  style="display: none" placeholder="Despido"/>
          </div>
          <div class="center">
            <a class="waves-effect waves-light green accent-4 btn" href="../views/lista_Rh.php">Cancelar</a>
            <a class="waves-effect waves-light green accent-4 btn" href="../views/lista_Rh.php"><i class="material-icons left">arrow_downward</i>Baja</a>
          </div>
        </form>
      </div>
    </div>
    <!--Tablas-->
    <div class="responsive-table">
      <table class="table centered">
        <thead>
          <tr>
            <th scope="col">Accciónes.</th>
            <th scope="col">Numero de nomina</th>
            <th scope="col">Nombre</th>
            <th scope="col">Codigo</th>
            <th scope="col">Departamento</th>
            <th scope="col">Puesto</th>
            <th scope="col">Area</th>
            <th scope="col">Estatus</th>
            <th scope="col">Dirección</th>
            <th scope="col">Localidad</th>
            <th scope="col">Municipio</th>
            <th scope="col">Codigo Postal</th>
            <th scope="col">Estado</th>
            <th scope="col">Fecha de Alta</th>
            <th scope="col">NSS</th>
            <th scope="col">Curp</th>
            <th scope="col">RFC</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Sexo</th>
            <th scope="col">Transporte</th>
            <th scope="col">Locker Asignado</th>
            <th scope="col">Numero de Uniforme</th>
            <th scope="col">Color</th>
            <th scope="col">Talla</th>
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
              <a class="modal-trigger small material-icons green-text editbtn" href="Rh_editar.php?editar_empleados=<?=$row['idempleado']?>">border_color</a>
              <a class="modal-trigger small material-icons green-text" href="#modal1">date_range</a>
              <a class="modal-trigger small material-icons red-text editbtn" href="#modal2">arrow_downward</a>
            </td> 
            <td class="hidden"><?php echo "".$row['idempleado'].""; ?></td>
            <td><?php echo "".$row['numero_de_nomina'].""; ?></td>
            <td><?php echo "".$row['nombre'].""; ?></td>
            <td><?php echo "".$row['codigo'].""; ?></td>
            <td><?php echo "".$row['departamento'].""; ?></td>
            <td><?php echo "".$row['puesto'].""; ?></td>
            <td><?php echo "".$row['area'].""; ?></td>
            <td><?php echo "".$row['estatus'].""; ?></td>
            <td><?php echo "".$row['direccion'].""; ?></td>
            <td><?php echo "".$row['localidad'].""; ?></td>
            <td><?php echo "".$row['municipio'].""; ?></td>
            <td><?php echo "".$row['cp'].""; ?></td>
            <td><?php echo "".$row['estado'].""; ?></td>
            <td><?php echo "".$row['fecha_alta'].""; ?></td>
            <td><?php echo "".$row['nss'].""; ?></td>
            <td><?php echo "".$row['curp'].""; ?></td>
            <td><?php echo "".$row['rfc'].""; ?></td>
            <td><?php echo "".$row['fecha_nacimiento'].""; ?></td>
            <td><?php echo "".$row['sexo'].""; ?></td>
            <td><?php echo "".$row['transporte'].""; ?></td>
            <td><?php echo "".$row['locker_asignado'].""; ?></td>
            <td><?php echo "".$row['numero_uniforme'].""; ?></td>
            <td><?php echo "".$row['color'].""; ?></td>
            <td><?php echo "".$row['talla'].""; ?></td>
          </tr>
            <?php
          }}
            ?>
        </tbody>
      </table>
    </div>
  </body>
</html>