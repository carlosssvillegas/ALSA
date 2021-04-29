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
    <div class="container section center">
      <div class="row">
        <div class="col s6 offset-s3">
          <div class="card">
            <div class="card-content">
            <span class="card-title">Editar Empleado</span>
               <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">code</i>
                      <input id="email" type="email" class="validate">
                      <label for="email">Codigo</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">settings_overscan</i>
                      <input id="password" type="password" class="validate">
                      <label for="password">Zona</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">navigation</i>
                      <input id="password" type="password" class="validate">
                      <label for="password">Nave</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">contact_mail</i>
                      <input id="password" type="password" class="validate">
                      <label for="password">Puesto</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">format_list_numbered</i>
                      <input id="password" type="password" class="validate">
                      <label for="password">Linea</label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-action">
              <a class="waves-effect waves-light green accent-4 btn" href="../views/avances_produccion.php">Guardar Cambios</a>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </body>
</html>