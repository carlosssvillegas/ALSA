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
      <h4 class="center">Parametros Pago</h4>
        <div class="valign-wrapper center">
        </div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <select name="clave" id="clave" onchange="seleccionarClave();">
                        <option value="" disabled selected>Clave</option>
                            <option value="ADM-01">ADM-01</option>
                            <option value="ADM-02">ADM-02</option>
                            <option value="BAN-01">BAN-01</option>
                            <option value="BAN-02">BAN-02</option>
                            <option value="EMP-01">EMP-01</option>
                            <option value="EMP-02">EMP-02</option>
                            <option value="EMP-03">EMP-03</option>
                            <option value="EMP-04">EMP-04</option>
                            <option value="EMP-05">EMP-05</option>
                            <option value="FRI-01">FRI-01</option>
                            <option value="FRI-02">FRI-02</option>
                            <option value="INS-01">INS-01</option>
                            <option value="MAT-01">MAT-01</option>
                            <option value="PER-01">PER-01</option>
                            <option value="PER-02">PER-02</option>
                            <option value="PER-03">PER-03</option>
                            <option value="PER-04">PER-04</option>
                            <option value="PER-05">PER-05</option>
                            <option value="PER-06">PER-06</option>
                            <option value="PER-07">PER-07</option>
                            <option value="SUP-01">SUP-01</option>
                            <option value="SUP-02">SUP-02</option>
                            <option value="SUP-03">SUP-03</option>
                            <option value="TEM-01">TEM-01</option>
                        </select>
                         <label for="banda">Clave</label>
                </div>
                <div class="input-field col s6" id="diaa" style="display: none">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="dia" type="number" class="validate">
                    <label for="dia">Valor Dia</label>
                </div>
                <div class="input-field col s6" id="A" style="display: none">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="bono a" type="number" class="validate">
                    <label for="bono a">Bono A</label>
                </div>
                <div class="input-field col s6" id="P" style="display: none">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="bono p" type="number" class="validate">
                    <label for="bono p">Bono P</label>
                </div>
                <div class="input-field col s6" id="aplicacioon" style="display: none">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="aplicacion" type="number" class="validate">
                    <label for="aplicacion">Pago Aplicación</label>
                </div>
                <div class="input-field col s6" id="invitadoo" style="display: none">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="invitado" type="number" class="validate">
                    <label for="invitado">Pago Invitado</label>
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
  function seleccionarClave(){
      getSelectValue = document.getElementById("clave").value;
      if(getSelectValue=="ADM-01"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="ADM-02"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="BAN-01"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="BAN-02"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="EMP-01"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="EMP-02"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="EMP-03"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="EMP-04"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="EMP-05"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="FRI-01"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="FRI-02"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="INS-01"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="MAT-01"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="PER-01"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="PER-02"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="PER-03"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="PER-04"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="PER-05"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="PER-06"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="PER-07"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="SUP-01"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="SUP-02"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="SUP-03"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }else if(getSelectValue=="TEM-01"){
        document.getElementById("diaa").style.display = "inline-block";
        document.getElementById("A").style.display = "inline-block";
        document.getElementById("P").style.display = "inline-block";
        document.getElementById("aplicacioon").style.display = "inline-block";
        document.getElementById("invitadoo").style.display = "inline-block";
      }
    }
  </script>
  </body>
</html>
