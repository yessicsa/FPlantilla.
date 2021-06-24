<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/validaciones.js"></script>

    <title>SALES ABARROTES - Alta de Clientes</title>
    <link rel="icon" type="image/png" href="img/ic_logo.png"/>

    <!--Estilos barra lateral--->
    <style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
        }
        @import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
        .fa-2x {
        font-size: 2em;
        }
        .fa {
        position: relative;
        display: table-cell;
        width: 60px;
        height: 36px;
        text-align: center;
        vertical-align: middle;
        font-size:20px;
        }


        .main-menu:hover,nav.main-menu.expanded {
        width:250px;
        overflow:visible;
        }

        .main-menu {
        background:#212121;
        position:fixed;
        top:0;
        bottom:0;
        height:100%;
        left:0;
        width:60px;
        overflow:hidden;
        -webkit-transition:width .05s linear;
        transition:width .05s linear;
        -webkit-transform:translateZ(0) scale(1,1);
        z-index:1000;
        }

        .main-menu>ul {
        margin:7px 0;
        }

        .main-menu li {
        position:relative;
        display:block;
        width:250px;
        }

        .main-menu li>a {
        position:relative;
        display:table;
        border-collapse:collapse;
        border-spacing:0;
        color:#999;
         font-family: arial;
        font-size: 14px;
        text-decoration:none;
        -webkit-transform:translateZ(0) scale(1,1);
        -webkit-transition:all .1s linear;
        transition:all .1s linear;
          
        }

        .main-menu .nav-icon {
        position:relative;
        display:table-cell;
        width:60px;
        height:36px;
        text-align:center;
        vertical-align:middle;
        font-size:18px;
        }

        .main-menu .nav-text {
        position:relative;
        display:table-cell;
        vertical-align:middle;
        width:190px;
          font-family: 'Titillium Web', sans-serif;
        }

        .main-menu>ul.logout {
        position:absolute;
        left:0;
        bottom:0;
        }

        .no-touch .scrollable.hover {
        overflow-y:hidden;
        }

        .no-touch .scrollable.hover:hover {
        overflow-y:auto;
        overflow:visible;
        }

        a:hover,a:focus {
        text-decoration:none;
        }

        nav {
        -webkit-user-select:none;
        -moz-user-select:none;
        -ms-user-select:none;
        -o-user-select:none;
        user-select:none;
        }

        nav ul,nav li {
        outline:0;
        margin:0;
        padding:0;
        }
        .main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
        color:#fff;
        background-color:MediumSeaGreen;
        }
        .area {
        float: left;
        background: #e2e2e2;
        width: 100%;
        height: 100%;
        }
        @font-face {
          font-family: 'Titillium Web';
          font-style: normal;
          font-weight: 300;
          src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!--Estilos barra superior--->
    <style>
        body {
          background: white;
        }
        /* main-header start */
        [data-target="#mainMenu"] {
          position: relative;
          z-index: 999;
        }

        #mainMenu li > a {
          font-size: 12px;
          letter-spacing: 1px;
          color: gray;
          font-weight: 400;
          position: relative;
          z-index: 1;
          text-decoration: none;
        }

        .main-header.fixed-nav #mainMenu li > a {
          color: black;
          text-decoration: none;
        }

        #mainMenu li:not(:last-of-type) {
          margin-right: 30px;
        }

        #mainMenu li > a::before {
          position: absolute;
          content: "";
          width: calc(100% - 1px);
          height: 1px;
          background: black;
          bottom: -6px;
          left: 0;

          -webkit-transform: scale(0, 1);
          -ms-transform: scale(0, 1);
          transform: scale(0, 1);
          -webkit-transform-origin: right center;
          -ms-transform-origin: right center;
          transform-origin: right center;
          z-index: -1;

          -webkit-transition: transform 0.5s ease;
          transition: transform 0.5s ease;
        }

        #mainMenu li > a:hover::before,
        #mainMenu li > a.active::before {
          -webkit-transform: scale(1, 1);
          -ms-transform: scale(1, 1);
          transform: scale(1, 1);
          -webkit-transform-origin: left center;
          -ms-transform-origin: left center;
          transform-origin: left center;
        }

        .main-header.fixed-nav #mainMenu li > a::before {
          background: black;
        }

        .main-header {
          position: fixed;
          top: 0px;
          padding-top: 25px;
          left: 0;
          z-index: 99;
          width: 100%;
          -webkit-transition: all 0.4s ease;
          transition: all 0.4s ease;
          background: white;
        }

        .main-header.fixed-nav {
          top: 0;
          background: black;
          -webkit-box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
          box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
          -webkit-transition: all 0.4s ease;
          transition: all 0.4s ease;
        }

        .main-header.fixed-nav .navbar-brand > img:last-of-type {
          display: block;
        }

        .main-header.fixed-nav .navbar-brand > img:first-of-type {
          display: none;
        }
        .navbar-brand {
          color: #fff;
        }
        .main-header .navbar-brand img {
          max-width: 40px;
          animation: fadeInLeft 0.4s both 0.4s;
        }
        /* main-header end */
        @media (max-width: 991px) {
          /*header starts*/

          .collapse.in {
            display: block !important;
            padding: 0;
            clear: both;
          }

          .navbar-toggler {
            margin: 0;
            padding: 0;
            width: 40px;
            height: 40px;
            position: absolute;
            top: 25px;
            right: 0;
            border: none;
            border-radius: 0;
            outline: none !important;
          }

          .main-header .navbar {
            float: none;
            width: 100%;
            padding-left: 0;
            padding-right: 0;
            text-align: center;
          }

          .main-header .navbar-nav {
            margin-top: 70px;
          }

          .main-header .navbar-nav li .nav-link {
            text-align: center;
            padding: 20px 15px;
            border-radius: 0px;
          }

          /**/
          .main-header .navbar-toggler .icon-bar {
            background-color: black;
            margin: 0 auto 6px;
            border-radius: 0;
            width: 30px;
            height: 3px;
            position: absolute;
            right: 0;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
          }

          .main-header .navbar .navbar-toggler .icon-bar:first-child {
            margin-top: 3px;
          }

          .main-header .navbar-toggler .icon-bar-1 {
            width: 10px;
            top: 0px;
          }

          .main-header .navbar-toggler .icon-bar-2 {
            width: 16px;
            top: 12px;
          }

          .main-header .navbar-toggler .icon-bar-3 {
            width: 20px;
            top: 21px;
          }

          .main-header .current .icon-bar {
            margin-bottom: 5px;
            border-radius: 0;
            display: block;
          }

          .main-header .current .icon-bar-1 {
            width: 18px;
          }

          .main-header .current .icon-bar-2 {
            width: 30px;
          }

          .main-header .current .icon-bar-3 {
            width: 10px;
          }

          .main-header .navbar-toggler:hover .icon-bar {
            background-color: black;
          }

          .main-header .navbar-toggler:focus .icon-bar {
            background-color: black;
          }

        }
    </style>

    <!--Modal información del usuario--->
    <style>
        body{
            margin-top:20px;
            color: #1a202c;
            text-align: left;
        }
        .main-body {
            padding: 15px;
        }
        .card {
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col, .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }
        .mb-3, .my-3 {
            margin-bottom: 1rem!important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }
        .h-100 {
            height: 100%!important;
        }
        .shadow-none {
            box-shadow: none!important;
        }
    </style>

    <style>
        [class*="col-"] {
            float: left;
        }
    </style>

</head>
<body>
    <!--Cuerpo de la pagina (contenido)--->
    <div class="col-sm-12" style="margin-top:100px; padding-left:60px;">
        <div class="col-sm-4" style="padding-top: 4%; position: fixed;">
            @if ( session('respuesta') )
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <b>{{ session('respuesta') }}</b>
                </div>
            @endif
            @if ( session('respuestaerror') )
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <b>{{ session('respuestaerror') }}</b>
                </div>
            @endif
            <h2 align="center"><span>Registro Clientes</span></h2>
            <br>
            <hr>
            <br>
            <form action="" method="post" class="was-validated" style="margin-right: 3%; margin-left: 3%; text-align: center;" autocomplete="off">
                @csrf
                <div class="form-group" style="text-align: left;">
                    <label for="uname"><b>Nombre:</b></label>
                    <input onkeypress="return soloLetras(event)" type="text" class="form-control" placeholder="Cargo del empleado dentro de la empresa" name="cargo" required>
                    <div class="invalid-feedback">El campo no puede estar vacío.</div>
                </div>
                <div class="form-group" style="text-align: left;">
                    <label for="uname"><b>Apellido Paterno:</b></label>
                    <input onkeypress="return soloLetras(event)" type="text" class="form-control" placeholder="Cargo del empleado dentro de la empresa" name="cargo" required>
                    <div class="invalid-feedback">El campo no puede estar vacío.</div>
                </div>
                <div class="form-group" style="text-align: left;">
                    <label for="uname"><b>Apellido Materno:</b></label>
                    <input onkeypress="return soloLetras(event)" type="text" class="form-control" placeholder="Cargo del empleado dentro de la empresa" name="cargo" required>
                    <div class="invalid-feedback">El campo no puede estar vacío.</div>
                </div>
                <div class="form-group" style="text-align: left;">
                    <label for="uname"><b>Correo Electronico:</b></label>
                    <input onkeypress="return soloLetras(event)" type="text" class="form-control" placeholder="Cargo del empleado dentro de la empresa" name="cargo" required>
                    <div class="invalid-feedback">El campo no puede estar vacío.</div>
                </div>
                <div class="form-group" style="text-align: left;">
                    <label for="uname"><b>Direccion:</b></label>
                    <input onkeypress="return soloLetras(event)" type="text" class="form-control" placeholder="Cargo del empleado dentro de la empresa" name="cargo" required>
                    <div class="invalid-feedback">El campo no puede estar vacío.</div>
                </div>
                <div class="form-group" style="text-align: left;">
                    <label for="uname"><b>Telefono:</b></label>
                    <input maxlength="15" onkeypress="return soloNumeros(event)" type="text" class="form-control" placeholder="Salario del empleado" name="salario" required>
                    <div class="invalid-feedback">El campo no puede estar vacío.</div>
                </div>
                <hr>
                <br>
                <button type="submit" class="btn" style="background: MediumAquamarine; color: white;"><b>Registrar</b></button>
            </form>
        </div>
        <div class="col-sm-8" style="float: right; padding-left: 3%; padding-right: 3%;">
            <br>
            <h3 align="center"><span>Clientes Registrados</span></h3>
           
            <br><hr>
            <input type="text" class="form-control" id="search" placeholder="Buscar cliente registrado">
            <br>
            <table class="table" id="mytable">
                <thead class="thead-light">
                    <tr>
                        <th style="text-align:center;">nombre</th>
                        <th style="text-align:center;">apaterno</th>
                        <th style="text-align:center;">amaterno</th>
                        <th style="text-align:center;">correo electronico</th>
                        <th style="text-align:center;">direccion</th>
                        <th style="text-align:center;">Estado</th>
                        <th style="text-align:center;">Modificar</th>
                        <th style="text-align:center;">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
               
                        
                        <td style="text-align:left;"><a href="#" data-toggle="modal" data-target="" style="text-decoration: none; color:gray;"><img src="img/pro.png" alt="" width="39px">&nbsp; </a></td>
                          
                        <td style="text-align:center;"><a href="#"><img src="img/snp.png" alt="" width="39px"></a></td>
                       
                        
                        <td style="text-align:center;"></td>
                        <td style="text-align:center;"></td>
                        <td style="text-align:center;"></td>
                        
                                <td style="text-align:center;"></td>
                           
                                    <td style="text-align:center;"><a href=""><button class="btn" style="background:#FE8240; color:white;"><b>Desactivar</b></button></a></td>
                              
                                <td style="text-align:center;"><a href=""><button class="btn" style="background:#FE8240; color:white;"><b>Desactivar</b></button></a></td>
                           
                                    <td style="text-align:center;"><a href=""><button class="btn btn-info"><b>Activar</b></button></td></a>
                               
                                <td style="text-align:center;"><a href=""><button class="btn btn-info"><b>Activar</b></button></td></a>
                         
                       
                                <td style="text-align:center;"><a href="#"><img src="img/editar.png" alt="" width="39px" data-toggle="modal" data-target=""></a></td>

  
                                <td style="text-align:center;"><a href=""><img src="img/trash.png" alt="" width="39px"></a></td>
                              
                                <td style="text-align:center;"><a href=""><img src="img/trash.png" alt="" width="39px"></a></td>
                            
                    </tr>
                    <!-- Detalles de emlpeado -->
                    
                    <div class="modal" id="">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <!-- Modal body -->
                                <div class="modal-body" style="text-align:center;">
                                    <br><br>
                                    <img src="img/dem.png" alt="" width="75%">
                                    <br><br><br>
                                    <h5>Nombre completo:</h5>
                                    
                                    <br><br>
                                    <h5>Teléfono:</h5>
                                    
                                    <br><br>
                                    <h5>Correo:</h5>
                                    
                                    <br><br><br>
                                    <button type="button" class="btn btn-warning" data-dismiss="modal"><b>Cerrar</b></button>
                                    <br><br>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                   

                    <!-- Actualizar datos del emlpeado -->
                    <div class="modal" id="">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="col-sm-6" style="text-align:center;">
                                        <br><br>
                                        <img src="img/modal.png" alt="" width="80%">
                                    </div>
                                    <div class="col-sm-6" style="text-align:center;">
                                        
                                            
                                                <form action="" method="post" autocomplete="off">        
                                        
                                                <form action="" method="post" autocomplete="off">
                                        
                                            @csrf
                                            <br>
                                            <h2 style="color:#289EF0;">Modificar datos de empleado</h2>
                                            <hr>
                                            <br>
                                            <div class="form-group" style="text-align: left;">
                                                <label for="uname"><b>Número de empleado:</b></label>
                                                <input type="text" class="form-control" placeholder="" value="" name="noEmpleado" required onkeypress="return soloNumeros(event)">
                                            </div>
                                            <div class="form-group" style="text-align: left;">
                                                <label for="uname"><b>Cargo:</b></label>
                                                <input type="text" class="form-control" placeholder="" value="" name="cargo" required onkeypress="return solo(event)">
                                            </div>
                                            <div class="form-group" style="text-align: left;">
                                                <label for="uname"><b>Salario:</b></label>
                                                <input onkeypress="return soloNumeros(event)" type="text" class="form-control" placeholder="" value="" name="salario" required>
                                            </div>
                                            <div class="form-group" style="text-align: left;">
                                                <label for="uname"><b>Empresa:</b></label>
                                                <select class="form-control" name="idEmpresa" required>
                                                   
                                                </select>
                                            </div>
                                            <br>
                                            <button class="btn" style="background:#FE8240; color:white;"><b>Guardar cambios</b></button>
                                            <br><br>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                </tbody>
            </table>
        </div>
    </div>  

    <!--Modal de información--->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body" style="background:#343a40">
                    <div class="container">
                        <div class="main-body">
                        
                            <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img src="img/admin.png" alt="Admin" class="rounded-circle" width="150">
                                                <div class="mt-3">
                                                   
                                                    <p class="text-secondary mb-1">Administrador de Predey</p>
                                                    <p class="text-muted font-size-sm">Desarrollador y diseñador</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-3">
                                        <div class="card-body" style="text-align:center;">
                                            
                                                <form action="" method="post" autocomplete="off">
                                                    @csrf
                                                    <h5 align="center">Editar información</h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Nombre</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            <input type="text" class="form-control" value="" placeholder="" name="nombre" onkeypress="return soloLetras(event)" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Apellido Paterno</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            <input type="text" class="form-control" value="" placeholder="" name="apaterno" onkeypress="return soloLetras(event)" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Apellido Materno</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            <input type="text" class="form-control" value="" placeholder="" name="amaterno" onkeypress="return soloLetras(event)" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Teléfono</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            <input type="text" class="form-control" value="" placeholder="" name="telefono" maxlength="10" onkeypress="return soloNumeros(event)" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Correo</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            <input type="email" class="form-control" value="" placeholder="" name="correo" required><span style="color:#FFB3A3;">para el cambio de correo una vez se haya realizado el cambio se debe iniciar sesión de nuevo</span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h5 align="center">Cambio de contraseña</h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Actual contraseña</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            <input type="password" class="form-control" id="contraseña" placeholder="Colocar la contraseña actual" name="contraseña">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row" style="display:none;" id="ca1">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Nueva contraseña</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            <input type="password" class="form-control" id="c1" placeholder="Colocar la contraseña nueva" name="ncontraseña">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row" style="display:none;" id="ca2">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Confirmar nueva contraseña</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            <input type="password" class="form-control" id="c2" placeholder="Confirmar la contraseña nueva">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <br>
                                                    <button class="btn btn-info" id="act"><b>Actualizar información</b></button>
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
</body>
</html>