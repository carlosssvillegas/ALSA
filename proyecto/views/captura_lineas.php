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
  <!-- Captura Lunes-->
  <div id="test-swipe-1" class="col s12">
    <div class="container">
      <h4 class="center">Captura parametros Zona</h4>
        <div class="valign-wrapper center">
        </div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                            <select name="zona" id="zona" onchange="seleccionarZona();">
                            <option value="" disabled selected>Zona</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <label for="banda">Zona</label>
                    </div>
                    <div class="input-field col s3" id="linea" style="display: none">
                        <select>
                        <option value="" disabled selected>Lineas</option>
                            <option value="1">Z01-01-AR</option>
                            <option value="2">Z01-02-AR</option>
                            <option value="3">Z01-03-AR</option>
                            <option value="3">Z01-04-AR</option>
                            <option value="3">Z01-05-AR</option>
                            <option value="1">Z01-01-AB</option>
                            <option value="2">Z01-02-AB</option>
                            <option value="3">Z01-03-AB</option>
                            <option value="3">Z01-04-AB</option>
                            <option value="3">Z01-05-AB</option>
                            <option value="1">Z06-06-AR</option>
                            <option value="2">Z06-07-AR</option>
                            <option value="3">Z06-08-AR</option>
                            <option value="3">Z06-09-AR</option>
                            <option value="3">Z06-06-AB</option>
                            <option value="1">Z06-07-AB</option>
                            <option value="2">Z06-08-AB</option>
                            <option value="3">Z06-09-AB</option>
                            <option value="3">Z10-10-AR</option>
                            <option value="2">Z10-10-AB</option>
                            <option value="3">Z14-14-AR</option>
                            <option value="3">Z14-14-AB</option>
                        </select>
                         <label for="banda">Lineas</label>
                      </div>
                        <div class="input-field col s3" id="cosechaa" style="display: none">
                           <input id="cosecha" type="text" class="validate" name="cosecha">
                           <label for="cosecha">Cosecha</label>
                         </div>
                         <div class="input-field col s3" id="deshojee" style="display: none">
                           <input id="deshoje" type="text" class="validate" name="deshoje">
                           <label for="deshoje">Deshoje</label>
                         </div>
                         <div class="input-field col s3" id="otroo" style="display: none">
                           <input id="otro" type="text" class="validate" name="otro">
                           <label for="otro">Otro</label>
                         </div>
                         <div class="input-field col s3" id="limpiezaa" style="display: none">
                           <input id="limpieza" type="text" class="validate" name="limpieza">
                           <label for="limpieza">Limpieza</label>
                         </div>
                         <div class="input-field col s3" id="clipp" style="display: none">
                           <input id="clip" type="text" class="validate" name="clip">
                           <label for="clip">Clip</label>
                         </div>
                         <div class="input-field col s3" id="bajadaa" style="display: none">
                           <input id="bajada" type="text" class="validate" name="bajada">
                           <label for="bajada">Bajada</label>
                         </div>
                         <div class="input-field col s3" id="tarjetaa" style="display: none">
                           <input id="tarjeta" type="text" class="validate" name="tarjeta">
                           <label for="tarjeta">Tarjeta</label>
                         </div>
                         <div class="input-field col s3" id="compostaa" style="display: none">
                           <input id="composta" type="text" class="validate" name="composta">
                           <label for="composta">Composta</label>
                         </div>

                </div>
                </div>
                <div>
                    <div class="center">
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Cancelar</a>
                         <a href="lista_fertirriego.php" class="modal-close waves-effect green accent-4 btn ">Aceptar</a>
                    </div>
            </form>
         </div>
    </div>
  <script src="../js/javascript.js"></script>
  <script>
    function seleccionarZona(){
      getSelectValue = document.getElementById("zona").value;
      if(getSelectValue=="1"){
        document.getElementById("linea").style.display = "inline-block";
        document.getElementById("cosechaa").style.display = "inline-block";
        document.getElementById("deshojee").style.display = "inline-block";
        document.getElementById("otroo").style.display = "inline-block";
        document.getElementById("limpiezaa").style.display = "inline-block";
        document.getElementById("clipp").style.display = "inline-block";
        document.getElementById("bajadaa").style.display = "inline-block";
        document.getElementById("tarjetaa").style.display = "none";
        document.getElementById("compostaa").style.display = "none";
      }else if(getSelectValue=="2"){
        document.getElementById("linea").style.display = "inline-block";
        document.getElementById("cosechaa").style.display = "inline-block";
        document.getElementById("deshojee").style.display = "inline-block";
        document.getElementById("otroo").style.display = "inline-block";
        document.getElementById("limpiezaa").style.display = "inline-block";
        document.getElementById("clipp").style.display = "inline-block";
        document.getElementById("bajadaa").style.display = "inline-block";
        document.getElementById("tarjetaa").style.display = "none";
        document.getElementById("compostaa").style.display = "none";
      }else if(getSelectValue=="3"){
        document.getElementById("linea").style.display = "inline-block";
        document.getElementById("cosechaa").style.display = "inline-block";
        document.getElementById("deshojee").style.display = "inline-block";
        document.getElementById("otroo").style.display = "inline-block";
        document.getElementById("limpiezaa").style.display = "inline-block";
        document.getElementById("clipp").style.display = "inline-block";
        document.getElementById("bajadaa").style.display = "inline-block";
        document.getElementById("tarjetaa").style.display = "inline-block";
        document.getElementById("compostaa").style.display = "inline-block";
      }else if(getSelectValue=="4"){
        document.getElementById("linea").style.display = "inline-block";
        document.getElementById("cosechaa").style.display = "inline-block";
        document.getElementById("deshojee").style.display = "inline-block";
        document.getElementById("otroo").style.display = "inline-block";
        document.getElementById("limpiezaa").style.display = "inline-block";
        document.getElementById("clipp").style.display = "inline-block";
        document.getElementById("bajadaa").style.display = "inline-block";
        document.getElementById("tarjetaa").style.display = "inline-block";
        document.getElementById("compostaa").style.display = "inline-block";
      }else if(getSelectValue=="5"){
        document.getElementById("linea").style.display = "inline-block";
        document.getElementById("cosechaa").style.display = "inline-block";
        document.getElementById("deshojee").style.display = "inline-block";
        document.getElementById("otroo").style.display = "inline-block";
        document.getElementById("limpiezaa").style.display = "inline-block";
        document.getElementById("clipp").style.display = "inline-block";
        document.getElementById("bajadaa").style.display = "inline-block";
        document.getElementById("tarjetaa").style.display = "none";
        document.getElementById("compostaa").style.display = "none";
      }else if(getSelectValue=="6"){
        document.getElementById("linea").style.display = "inline-block";
        document.getElementById("cosechaa").style.display = "inline-block";
        document.getElementById("deshojee").style.display = "inline-block";
        document.getElementById("otroo").style.display = "inline-block";
        document.getElementById("limpiezaa").style.display = "inline-block";
        document.getElementById("clipp").style.display = "inline-block";
        document.getElementById("bajadaa").style.display = "inline-block";
        document.getElementById("tarjetaa").style.display = "none";
        document.getElementById("compostaa").style.display = "none";
      }
    }
  </script>
  </body>
</html>
