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
                                <option value="GAR01">GAR01</option>
                                <option value="GD101">GD101</option>
                                <option value="GD201">GD201</option>
                                <option value="GD301">GD301</option>
                                <option value="GJT01">GJT01</option>
                                <option value="GME01">GME01</option>
                                <option value="GMT01">GMT01</option>
                                <option value="GSB01">GSB01</option>
                                <option value="GSB02">GSB02</option>
                                <option value="GSB03">GSB03</option>
                                <option value="GSBT1">GSBT1</option>
                                <option value="GSC01">GSC01</option>
                                <option value="GSC02">GSC02</option>
                                <option value="GSCT1">GSCT1</option>
                                <option value="GVA01">GVA01</option>
                                <option value="GVA02">GVA02</option>
                                <option value="GVB01">GVB01</option>
                                <option value="GVD01">GVD01</option>
                                <option value="GVG02">GVG02</option>
                                <option value="GVG03">GVG03</option>
                                <option value="GVG04">GVG04</option>
                                <option value="GVN01">GVN01</option>
                                <option value="GVN03">GVN03</option>
                                <option value="GX201">GX201</option>
                                <option value="GX301">GX301</option>
                                <option value="GX302">GX302</option>
                                <option value="GX401">GX401</option>
                                <option value="GX402">GX402</option>
                                <option value="GX403">GX403</option>
                                <option value="MA101">MA101</option>
                                <option value="MA102">MA102</option>
                                <option value="MA103">MA103</option>
                                <option value="MA104">MA104</option>
                                <option value="MA105">MA105</option>
                                <option value="MA106">MA106</option>
                                <option value="MA107">MA107</option>
                                <option value="MA108">MA108</option>
                                <option value="MA201">MA201</option>
                                <option value="MA204">MA204</option>
                                <option value="MA206">MA206</option>
                                <option value="MA401">MA401</option>
                                <option value="MA402">MA402</option>
                                <option value="MA404">MA404</option>
                                <option value="MA405">MA405</option>
                                <option value="MAS01">MAS01</option>
                                <option value="MS101">MS101</option>
                                <option value="MTS01">MTS01</option>
                                <option value="P1A01">P1A01</option>
                                <option value="P1A02">P1A02</option>
                                <option value="P1A03">P1A03</option>
                                <option value="P1A04">P1A04</option>
                                <option value="P1A05">P1A05</option>
                                <option value="P1A06">P1A06</option>
                                <option value="P1A07">P1A07</option>
                                <option value="P1A08">P1A08</option>
                                <option value="P1A09">P1A09</option>
                                <option value="P1A10">P1A10</option>
                                <option value="P1A11">P1A11</option>
                                <option value="P1A12">P1A12</option>
                                <option value="P1A13">P1A13</option>
                                <option value="P1A14">P1A14</option>
                                <option value="P1A15">P1A15</option>
                                <option value="P1A16">P1A16</option>
                                <option value="P1A17">P1A17</option>
                                <option value="P1A18">P1A18</option>
                                <option value="P1A19">P1A19</option>
                                <option value="P1A20">P1A20</option>
                                <option value="P1A21">P1A21</option>
                                <option value="P1A22">P1A22</option>
                                <option value="P1B01">P1B01</option>
                                <option value="P1B03">P1B03</option>
                                <option value="P1B04">P1B04</option>
                                <option value="P1B05">P1B05</option>
                                <option value="P1B06">P1B06</option>
                                <option value="P1B07">P1B07</option>
                                <option value="P1B08">P1B08</option>
                                <option value="P1B09">P1B09</option>
                                <option value="P1C01">P1C01</option>
                                <option value="P1C02">P1C02</option>
                                <option value="P1C03">P1C03</option>
                                <option value="P1C04">P1C04</option>
                                <option value="P1D01">P1D01</option>
                                <option value="P1D02">P1D02</option>
                                <option value="P1F01">P1F01</option>
                                <option value="P1F02">P1F02</option>
                                <option value="P1F03">P1F03</option>
                                <option value="P1SF1">P1SF1</option>
                                <option value="P2A01">P2A01</option>
                                <option value="P2A02">P2A02</option>
                                <option value="P2A03">P2A03</option>
                                <option value="P2A04">P2A04</option>
                                <option value="P2A05">P2A05</option>
                                <option value="P2A06">P2A06</option>
                                <option value="P2A07">P2A07</option>
                                <option value="P2A08">P2A08</option>
                                <option value="P2A09">P2A09</option>
                                <option value="P2A10">P2A10</option>
                                <option value="P2A11">P2A11</option>
                                <option value="P2A12">P2A12</option>
                                <option value="P2A13">P2A13</option>
                                <option value="P2A14">P2A14</option>
                                <option value="P2A15">P2A15</option>
                                <option value="P2A16">P2A16</option>
                                <option value="P2A17">P2A17</option>
                                <option value="P2A18">P2A18</option>
                                <option value="P2A19">P2A19</option>
                                <option value="P2A20">P2A20</option>
                                <option value="P2A21">P2A21</option>
                                <option value="P2B01">P2B01</option>
                                <option value="P2B02">P2B02</option>
                                <option value="P2B03">P2B03</option>
                                <option value="P2B04">P2B04</option>
                                <option value="P2B05">P2B05</option>
                                <option value="P2B06">P2B06</option>
                                <option value="P2B07">P2B07</option>
                                <option value="P2B08">P2B08</option>
                                <option value="P2C01">P2C01</option>
                                <option value="P2C02">P2C02</option>
                                <option value="P2C03">P2C03</option>
                                <option value="P2D01">P2D01</option>
                                <option value="P2D02">P2D02</option>
                                <option value="P2F02">P2F02</option>
                                <option value="P2F03">P2F03</option>
                                <option value="P2SC1">P2SC1</option>
                                <option value="P2SE1">P2SE1</option>
                                <option value="P3A01">P3A01</option>
                                <option value="P3A02">P3A02</option>
                                <option value="P3A03">P3A03</option>
                                <option value="P3A04">P3A04</option>
                                <option value="P3A05">P3A05</option>
                                <option value="P3A06">P3A06</option>
                                <option value="P3A07">P3A07</option>
                                <option value="P3A08">P3A08</option>
                                <option value="P3A09">P3A09</option>
                                <option value="P3A10">P3A10</option>
                                <option value="P3B01">P3B01</option>
                                <option value="P3B02">P3B02</option>
                                <option value="P3B03">P3B03</option>
                                <option value="P3B04">P3B04</option>
                                <option value="P3C01">P3C01</option>
                                <option value="P3C02">P3C02</option>
                                <option value="P3F01">P3F01</option>
                                <option value="P3SA1">P3SA1</option>
                                <option value="P4A01">P4A01</option>
                                <option value="P4A02">P4A02</option>
                                <option value="P4A03">P4A03</option>
                                <option value="P4A04">P4A04</option>
                                <option value="P4A05">P4A05</option>
                                <option value="P4A06">P4A06</option>
                                <option value="P4A07">P4A07</option>
                                <option value="P4A08">P4A08</option>
                                <option value="P4A09">P4A09</option>
                                <option value="P4A10">P4A10</option>
                                <option value="P4A11">P4A11</option>
                                <option value="P4A12">P4A12</option>
                                <option value="P4A13">P4A13</option>
                                <option value="P4A14">P4A14</option>
                                <option value="P4B01">P4B01</option>
                                <option value="P4B02">P4B02</option>
                                <option value="P4B03">P4B03</option>
                                <option value="P4B04">P4B04</option>
                                <option value="P4C01">P4C01</option>
                                <option value="P4D01">P4D01</option>
                                <option value="P4D02">P4D02</option>
                                <option value="P4F01">P4F01</option>
                                <option value="P4F02">P4F02</option>
                                <option value="P4SF1">P4SF1</option>
                                <option value="P5A02">P5A02</option>
                                <option value="P5A03">P5A03</option>
                                <option value="P5A04">P5A04</option>
                                <option value="P5A05">P5A05</option>
                                <option value="P5A06">P5A06</option>
                                <option value="P5A07">P5A07</option>
                                <option value="P5A08">P5A08</option>
                                <option value="P5A09">P5A09</option>
                                <option value="P5A10">P5A10</option>
                                <option value="P5A11">P5A11</option>
                                <option value="P5A12">P5A12</option>
                                <option value="P5A13">P5A13</option>
                                <option value="P5A14">P5A14</option>
                                <option value="P5A15">P5A15</option>
                                <option value="P5B01">P5B01</option>
                                <option value="P5B02">P5B02</option>
                                <option value="P5B03">P5B03</option>
                                <option value="P5B04">P5B04</option>
                                <option value="P5B05">P5B05</option>
                                <option value="P5C01">P5C01</option>
                                <option value="P5C02">P5C02</option>
                                <option value="P5D01">P5D01</option>
                                <option value="P5D02">P5D02</option>
                                <option value="P5F01">P5F01</option>
                                <option value="P5F02">P5F02</option>
                                <option value="P5SA1">P5SA1</option>
                                <option value="P5SD1">P5SD1</option>
                                <option value="P5SD1">P5SD1</option>
                                <option value="P5SD2">P5SD2</option>
                                <option value="PC001">PC001</option>
                                <option value="PC002">PC002</option>
                                <option value="PC003">PC003</option>
                                <option value="PC004">PC004</option>
                                <option value="PC005">PC005</option>
                                <option value="PC006">PC006</option>
                                <option value="PC007">PC007</option>
                                <option value="PC008">PC008</option>
                                <option value="PC009">PC009</option>
                                <option value="PC010">PC010</option>
                                <option value="PC011">PC011</option>
                                <option value="PC012">PC012</option>
                                <option value="PC013">PC013</option>
                                <option value="PC014">PC014</option>
                                <option value="PC015">PC015</option>
                                <option value="PC016">PC016</option>
                                <option value="PC017">PC017</option>
                                <option value="PC018">PC018</option>
                                <option value="PC019">PC019</option>
                                <option value="PC020">PC020</option>
                                <option value="PC021">PC021</option>
                                <option value="PC022">PC022</option>
                                <option value="PC023">PC023</option>
                                <option value="PC024">PC024</option>
                                <option value="PC025">PC025</option>
                                <option value="PC026">PC026</option>
                                <option value="PC027">PC027</option>
                                <option value="PC028">PC028</option>
                                <option value="PC029">PC029</option>
                                <option value="PC030">PC030</option>
                                <option value="PC031">PC031</option>
                                <option value="PC032">PC032</option>
                                <option value="PC033">PC033</option>
                                <option value="PC034">PC034</option>
                                <option value="PF101">PF101</option>
                                <option value="PF102">PF102</option>
                                <option value="PF103">PF103</option>
                                <option value="PF104">PF104</option>
                                <option value="PF105">PF105</option>
                                <option value="PF106">PF106</option>
                                <option value="PF107">PF107</option>
                                <option value="PF201">PF201</option>
                                <option value="PF202">PF202</option>
                                <option value="PF203">PF203</option>
                                <option value="PF204">PF204</option>
                                <option value="PF205">PF205</option>
                                <option value="PF206">PF206</option>
                                <option value="PF207">PF207</option>
                                <option value="PF208">PF208</option>
                                <option value="PF301">PF301</option>
                                <option value="PF302">PF302</option>
                                <option value="PF303">PF303</option>
                                <option value="PF304">PF304</option>
                                <option value="PF305">PF305</option>
                                <option value="PF306">PF306</option>
                                <option value="PF307">PF307</option>
                                <option value="PF308">PF308</option>
                                <option value="PF309">PF309</option>
                                <option value="PF310">PF310</option>
                                <option value="PFG12">PFG12</option>
                                <option value="PFG21">PFG21</option>
                                <option value="PFG31">PFG31</option>
                                <option value="PFG41">PFG41</option>
                                <option value="PFG51">PFG51</option>
                                <option value="PFI01">PFI01</option>
                                <option value="PFI02">PFI02</option>
                                <option value="PFI03">PFI03</option>
                                <option value="PFI04">PFI04</option>
                                <option value="PFI05">PFI05</option>
                                <option value="PLT01">PLT01</option>
                                <option value="PRA01">PRA01</option>
                                <option value="PRA02">PRA02</option>
                                <option value="PRA03">PRA03</option>
                                <option value="PRA04">PRA04</option>
                                <option value="PRA05">PRA05</option>
                                <option value="PRA06">PRA06</option>
                                <option value="PRA07">PRA07</option>
                                <option value="PRT01">PRT01</option>
                                <option value="PRT02">PRT02</option>
                                <option value="PRT03">PRT03</option>
                                <option value="PRT04">PRT04</option>
                                <option value="VO102">VO102</option>
                                <option value="VO103">VO103</option>
                                <option value="VO104">VO104</option>
                                <option value="VO105">VO105</option>
                                <option value="VO106">VO106</option>
                                <option value="VO108">VO108</option>
                                <option value="VO109">VO109</option>
                                <option value="VO110">VO110</option>
                                <option value="VO111">VO111</option>
                                <option value="VO112">VO112</option>
                                <option value="VO113">VO113</option>
                                <option value="VO114">VO114</option>
                                <option value="VO115">VO115</option>
                                <option value="VO113">VO113</option>
                                <option value="V0114">V0114</option>
                                <option value="VO115">VO115</option>
                                <option value="VO116">VO116</option>
                                <option value="VO117">VO117</option>
                                <option value="VT001">VT001</option>
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
                <li class="tab col s3"><a href="#test4">Cajas Trabajadas</a></li>
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
                <li class="collection-item">Bono P: $50</li>
                <li class="collection-item">Bono A:</li>
                <li class="collection-item">Premio: $200</li>
                <li class="collection-item">Cajas Empacadas: 96</li>
                <li class="collection-item">Horas extra: 7.33</li>
                <li class="collection-item">Dep x error nómina anterior: $200</li>
                <li class="collection-item">Vacaciones: </li>
              </ul>
            </div>
            <div id="test3" class="col s12">
              <h4 class="center">Deducciones</h4>
                <ul class="collection with-header">
                  <li class="collection-header"><h4>Francisco perez vargas</h4></li>
                  <li class="collection-item">Tijeras:</li>
                  <li class="collection-item">Ajuste de Sueldo:</li>
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
              <h4 class="center">Cajas Trabajadas</h4>
              <ul class="collection with-header">
                  <li class="collection-header"><h4>Francisco perez vargas</h4></li>
                  <li class="collection-item">Meshbag 11lbs:</li>
                  <li class="collection-item">Caja 11lbs: 40 </li>
                  <li class="collection-item">Caja 13lbs: 6</li>
                  <li class="collection-item">Caja 15lbs:</li>
                  <li class="collection-item">Caja 17lbs:</li>
                  <li class="collection-item">Meshbag 8lbs:</li>
                  <li class="collection-item">Caja Nacional: 20</li>
                  <li class="collection-item">Cajas tiempo extra: 30</li>
                  <li class="collection-item">Cajas TE y OC:</li>
                  <li class="collection-item">Polybag 11lbs: </li>
                  <li class="collection-item">Polybag 13lbs: </li>
                  <li class="collection-item">8x24oz: </li>
                  <li class="collection-item">malla 15lbs: </li>
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
    <!--Tabla 1-->
    <div class="responsive-table">
      <table class="table centered">
        <thead>
          <tr>
            <th scope="col">Actions</th>
            <th scope="col">Codigo</th>
            <th scope="col">Numero de nomina</th>
            <th scope="col">Nombre</th>
            <th scope="col">Linea</th>
            <th scope="col">Maquina</th>
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
              <a class="modal-trigger small material-icons  green-text editbtn" href="editar_empaque.php">border_color</a>
              <a class="modal-trigger small material-icons  green-text editbtn" href="captura_empaque.php">add_circle</a>
              <a class="modal-trigger small material-icons  green-text editbtn" href="vista_empaque.php">more_horiz</a>
            </td> 
            <td class="hidden"><?php echo "".$row['idempleado'].""; ?></td>
            <td><?php echo "".$row['codigo'].""; ?></td>
            <td><?php echo "".$row['numero_de_nomina'].""; ?></td>
            <td class="modal-trigger" href="#modal6"><?php echo "".$row['nombre'].""; ?></td>
            <td>1</td>
            <td>2</td>
            <td>A</td>
          </tr>
            <?php
            }}
            ?>
        </tbody>
      </table>
    </div>
  </body>
</html>