<?php 
session_start();
$logged= $_SESSION['logged'];

if(!$logged){
  echo "Ingreso no autorizado";
  die();
}
unset($msg);


$conn = mysqli_connect("localhost","admin_ceiba","121212","admin_suwebya");

if(isset($_POST['name_device'])&& isset($_POST['code_device'])&& isset($_POST['machine_device'])&& isset($_POST['observations_device'])){
    $msg="";
    $device=strip_tags($_POST['name_device']);
    $code=strip_tags($_SESSION['user_id']);
    $machine=strip_tags($_POST['machine_device']);
    $observations=strip_tags($_POST['observations_device']);
    
    $result = $conn->query("SELECT * FROM `devices` WHERE `name_device` = '".$device."'  ");
    $users = $result->fetch_all(MYSQLI_ASSOC);
    //cuento cuantos elementos tiene $tabla,
    $count = count($users);
    if ($count == 0){       
      $conn->query("INSERT INTO `devices` (`name_device`, `code_device`, `machine_device`,`observations_device`) VALUES ('".$device."', '".$code."', '".$machine."','".$observations."');");
      $msg="Formulario llenado correctamente";
      unset($_POST['name_device']);     
      unset($_POST['machine_device']);
      unset($_POST['observations_device']);
     
    }else{
        $msg="Nombre o Id ya existen";
    }
}else{
    $msg="Formulario incompleto";
  }
    
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dispositivos - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <!-- build:css assets/styles/app.min.css -->
    <link rel="stylesheet" href="assets/styles/app.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />
</head>

<body>
    <div class="app" id="app">

        <!-- ############ LAYOUT START-->

        <!-- aside -->
        <div id="aside" class="app-aside modal fade folded md nav-expand  mx-0">
            <div class="left navside indigo-900 dk" layout="column">
                <div class="navbar navbar-md no-radius ">
                    <!-- brand -->
                    <a class="navbar-brand">
                        <div ui-include="'assets/images/logo.svg'"></div>
                        <img src="assets/images/logo.png" alt="." class="hide">
                        <span class="hidden-folded inline text-sm">Suwebya</span>
                    </a>
                    <!-- / brand -->
                </div>
                <div flex class="hide-scroll">
                    <nav class="scroll nav-active-primary">

                        <ul class="nav" ui-nav>
                            <li class="nav-header hidden-folded">
                                <small class="text-muted">Menu</small>
                            </li>

                            <li>
                                <a href="dashboard.php">
                                    <span class="nav-icon">
                                        <i class="material-icons">&#xe3fc;
                                            <span ui-include="'assets/images/i_0.svg'"></span>
                                        </i>
                                    </span>
                                    <span class="nav-text">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a>
                                    <span class="nav-caret">
                                        <i class="fa fa-caret-down"></i>
                                    </span>
                                    <span class="nav-label">
                                        <b class="label rounded label-sm primary">5</b>
                                    </span>
                                    <span class="nav-icon">
                                        <i class="material-icons">&#xe5c3;
                                            <span ui-include="'assets/images/i_1.svg'"></span>
                                        </i>
                                    </span>
                                    <span class="nav-text">Apps</span>
                                </a>
                                <ul class="nav-sub">
                                    <li>
                                        <a href="inbox.html">
                                            <span class="nav-text">Inbox</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="nav-text">Contacts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="calendar.html">
                                            <span class="nav-text">Calendar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>



                            <li class="nav-header hidden-folded">
                                <small class="text-muted">Components</small>
                            </li>



                            <li>
                                <a>
                                    <span class="nav-caret">
                                        <i class="fa fa-caret-down"></i>
                                    </span>
                                    <span class="nav-label"><b class="label no-bg">9</b></span>
                                    <span class="nav-icon">
                                        <i class="material-icons">&#xe3e8;
                                            <span ui-include="'assets/images/i_5.svg'"></span>
                                        </i>
                                    </span>
                                    <span class="nav-text">Paginas</span>
                                </a>
                                <ul class="nav-sub nav-mega">
                                    <li>
                                        <a href="Dispositivos.php">
                                            <span class="nav-text">Dispositivos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="setting.html">
                                            <span class="nav-text">Setting</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search.html">
                                            <span class="nav-text">Search</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="faq.html">
                                            <span class="nav-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery.html">
                                            <span class="nav-text">Gallery</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a>
                                    <span class="nav-caret">
                                        <i class="fa fa-caret-down"></i>
                                    </span>
                                    <span class="nav-icon">
                                        <i class="material-icons">&#xe39e;
                                            <span ui-include="'assets/images/i_6.svg'"></span>
                                        </i>
                                    </span>
                                    <span class="nav-text">Formularios</span>
                                </a>
                                <ul class="nav-sub">
                                    <li>
                                        <a href="form.layout.html">
                                            <span class="nav-text">Form. Materia P</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form.element.html">
                                            <span class="nav-text">Form. Operario</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form.validation.html">
                                            <span class="nav-text">Form. turnos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form.select.html">
                                            <span class="nav-text">Form. Maquinas</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a>
                                    <span class="nav-caret">
                                        <i class="fa fa-caret-down"></i>
                                    </span>
                                    <span class="nav-icon">
                                        <i class="material-icons">&#xe896;
                                            <span ui-include="'assets/images/i_7.svg'"></span>
                                        </i>
                                    </span>
                                    <span class="nav-text">Tablas</span>
                                </a>
                                <ul class="nav-sub">
                                    <li>
                                        <a href="static.html">
                                            <span class="nav-text">Acumulado anual</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="datatable.html">
                                            <span class="nav-text">Acumulado mensual</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="footable.html">
                                            <span class="nav-text">Proyeccion</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a>
                                    <span class="nav-caret">
                                        <i class="fa fa-caret-down"></i>
                                    </span>
                                    <span class="nav-label hidden-folded">
                                        <b class="label label-sm info">N</b>
                                    </span>
                                    <span class="nav-icon">
                                        <i class="material-icons">&#xe1b8;
                                            <span ui-include="'assets/images/i_8.svg'"></span>
                                        </i>
                                    </span>
                                    <span class="nav-text">Graficas</span>
                                </a>
                                <ul class="nav-sub">

                                    <li>
                                        <a>
                                            <span class="nav-caret">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <span class="nav-text">Produccion</span>
                                        </a>
                                        <ul class="nav-sub">
                                            <li>
                                                <a href="echarts-line.html">
                                                    <span class="nav-text">Maquina</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="echarts-bar.html">
                                                    <span class="nav-text">Operario</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="echarts-pie.html">
                                                    <span class="nav-text">Materia Prima</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="echarts-scatter.html">
                                                    <span class="nav-text">Referencia</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-header hidden-folded">
                                <small class="text-muted">Ayuda</small>
                            </li>

                            <li class="hidden-folded">
                                <a href="docs.html">
                                    <span class="nav-text">Documentacion</span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div flex-no-shrink>
                    <div ui-include="'views/blocks/aside.bottom.0.html'"></div>
                </div>
            </div>
        </div>
        <!-- / aside -->

        <!-- content -->
        <div id="content" class="app-content box-shadow-z0" role="main">
            <div class="app-header white box-shadow navbar-md">
                <div class="navbar navbar-toggleable-sm flex-row align-items-center">
                    <!-- Open side - Naviation on mobile -->
                    <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
                        <i class="material-icons">&#xe5d2;</i>
                    </a>
                    <!-- / -->

                    <!-- Page title - Bind to $state's title -->
                    <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

                    <!-- navbar collapse -->
                    <div class="collapse navbar-collapse" id="collapse">
                        <!-- link and dropdown -->
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href data-toggle="dropdown">
                                    <i class="fa fa-fw fa-plus text-muted"></i>
                                    <span>Dispositivos</span>
                                </a>
                                <div ui-include="'views/blocks/dropdown.new.html'"></div>
                            </li>
                        </ul>

                        <div ui-include="'views/blocks/navbar.form.html'"></div>
                        <!-- / -->
                    </div>
                    <!-- / navbar collapse -->

                    <!-- navbar right -->
                    <ul class="nav navbar-nav ml-auto flex-row">
                        <li class="nav-item dropdown pos-stc-xs">
                            <a class="nav-link mr-2" href data-toggle="dropdown">
                                <i class="material-icons">&#xe7f5;</i>
                                <span class="label label-sm up warn">3</span>
                            </a>
                            <div ui-include="'views/blocks/dropdown.notification.html'"></div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                                <span class="avatar w-32">
                                    <img src="assets/images/a5.jpg" alt="...">
                                    <i class="on b-white bottom"></i>
                                </span>
                            </a>
                            <div ui-include="'views/blocks/dropdown.user.html'"></div>
                        </li>
                        <li class="nav-item hidden-md-up">
                            <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                                <i class="material-icons">&#xe5d4;</i>
                            </a>
                        </li>
                    </ul>
                    <!-- / navbar right -->
                </div>
            </div>
            <div class="app-footer">
                <div class="p-2 text-xs">
                    <div class="pull-right text-muted py-1">
                        &copy; Copyright <strong>Suwebya</strong> <span class="hidden-xs-down">-Pasion por la Ingenieria
                            v1.1.3</span>
                        <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
                    </div>
                    <div class="nav">
                        <a class="nav-link" href="">Nosotros</a>
                        <a class="nav-link"
                            href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Informacion</a>
                    </div>
                </div>
            </div>
            <div ui-view class="app-body" id="view">
                <!-- ############ PAGE START-->

                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                            <h2>Formulario de dispositivos</h2>
                            <small> En este formulario aparecen todos los dispositivos que estan instalados en su
                                proyecto </small>
                        </div>
                        <div class="box-divider m-0"></div>
                        <div class="box-body">
                            <form role="form" name="form_devices" method="POST" target="Dispositivos.php">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 form-control-label">Serie
                                        Dispositivo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name_device" name="name_device" placeholder="Nombre de dispositivo" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 form-control-label">Usuario
                                        dispositivo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" name="code_device" value=" <?php echo $_SESSION['user_id'] ?>"readonly
                                            >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 form-control-label">Maquina a
                                        censar</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="machine_device"  placeholder="identificacion de Maquina" REQUIRED>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 form-control-label">Observaciones
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="2" name="observations_device"
                                            placeholder="caracteristicas del dispositivo" REQUIRED></textarea>
                                    </div>
                                </div>
                                <div class="form-group row m-t-md">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn white">Guardar</button>
                                    </div>
                                </div>
                                <div class="text-danger">
                                    <?php echo $msg?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header">
                        <h3>Tabla de Dispositivos</h3>
                    </div>
                    <div class="row p-a">
                        <div class="col-sm-5">
                            <select class="input-sm form-control w-sm inline v-middle">
                                <option value="0">Editar</option>
                                <option value="1">Eliminar</option>
                                
                            </select>
                            <button class="btn btn-sm white">Aplicar</button>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn b-a white" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php 

                    $result = $conn->query("SELECT * FROM `devices` ");
                    $devices = $result->fetch_all(MYSQLI_ASSOC);
                    
                    ?>
                    <div class="table-responsive">
                        <table class="table table-striped b-t">
                            <thead>
                                <tr>
                                    <th style="width:20px;">
                                        <label class="ui-check m-0">
                                            <input type="checkbox"><i></i>
                                        </label>
                                    </th>
                                    <th>Dispositivo</th>
                                    <th>usuario_dispositivo</th>
                                    <th>Fecha</th>
                                    <th>Maquina</th>
                                    <th>Observaciones</th>
                                    <th style="width:50px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($devices as $device){ ?>
                                <tr>
                                    <td><label class="ui-check m-0"><input type="checkbox" name="<?php echo $device['id_device'] ?>   "><i
                                                class="dark-white"></i></label></td>
                                    <td><?php echo $device['name_device'] ?></td>
                                    <td><?php echo $device['code_device'] ?></td>
                                    <td><?php echo $device['date_device'] ?></td>
                                    <td><?php echo $device['machine_device'] ?></td>
                                    <td><?php echo $device['observations_device'] ?></td>
                                    <td>
                                        <a href class="active" ui-toggle-class><i
                                                class="fa fa-check text-success none"></i><i
                                                class="fa fa-times text-danger inline"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                               
                            </tbody>
                        </table>
                    </div>
                    <!-- ############ PAGE END-->

                </div>
            </div>
            <!-- / -->

            <!-- theme switcher -->
            <div id="switcher">
                <div class="switcher box-color dark-white text-color " id="sw-theme">
                    <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
                        <i class="fa fa-gear"></i>
                    </a>
                    <div class="box-header ">
                        <a href="suwebya_info.php"
                            class="btn btn-xs rounded danger pull-right">SWY</a>
                        <h2>Temas Suwebya</h2>
                    </div>
                    <div class="box-divider"></div>
                    <div class="box-body">
                        <p class="hidden-md-down">
                            <label class="md-check m-y-xs" data-target="folded">
                                <input type="checkbox">
                                <i class="green"></i>
                                <span class="hidden-folded">Folded Aside</span>
                            </label>
                            <label class="md-check m-y-xs" data-target="boxed">
                                <input type="checkbox">
                                <i class="green"></i>
                                <span class="hidden-folded">Boxed Layout</span>
                            </label>
                            <label class="m-y-xs pointer" ui-fullscreen>
                                <span class="fa fa-expand fa-fw m-r-xs"></span>
                                <span>Fullscreen Mode</span>
                            </label>
                        </p>
                        
                        <p>Fondos:</p>
                        <div data-target="bg" class="row no-gutter text-u-c text-center _600 clearfix">
                            <label class="p-a col-sm-6 light pointer m-0">
                                <input type="radio" name="theme" value="" hidden>
                                Luminoso
                            </label>
                            <label class="p-a col-sm-6 grey pointer m-0">
                                <input type="radio" name="theme" value="grey" hidden>
                                Gris
                            </label>
                            <label class="p-a col-sm-6 dark pointer m-0">
                                <input type="radio" name="theme" value="dark" hidden>
                                Verde 
                            </label>
                            <label class="p-a col-sm-6 black pointer m-0">
                                <input type="radio" name="theme" value="black" hidden>
                                Azulosc
                            </label>
                        </div>
                    </div>
                </div>



                <!-- / -->

                <!-- ############ LAYOUT END-->

            </div>
            <!-- build:js scripts/app.html.js -->
            <!-- jQuery -->
            <script src="libs/jquery/jquery/dist/jquery.js"></script>
            <!-- Bootstrap -->
            <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
            <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
            <!-- core -->
            <script src="libs/jquery/underscore/underscore-min.js"></script>
            <script src="libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
            <script src="libs/jquery/PACE/pace.min.js"></script>

            <script src="scripts/config.lazyload.js"></script>

            <script src="scripts/palette.js"></script>
            <script src="scripts/ui-load.js"></script>
            <script src="scripts/ui-jp.js"></script>
            <script src="scripts/ui-include.js"></script>
            <script src="scripts/ui-device.js"></script>
            <script src="scripts/ui-form.js"></script>
            <script src="scripts/ui-nav.js"></script>
            <script src="scripts/ui-screenfull.js"></script>
            <script src="scripts/ui-scroll-to.js"></script>
            <script src="scripts/ui-toggle-class.js"></script>

            <script src="scripts/app.js"></script>

            <!-- ajax -->
            <script src="libs/jquery/jquery-pjax/jquery.pjax.js"></script>
            <script src="scripts/ajax.js"></script>
            <!-- endbuild -->
</body>

</html>