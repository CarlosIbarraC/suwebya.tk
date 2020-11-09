<?php 
session_start();
$logged= $_SESSION['logged'];

if(!$logged){
  echo "Ingreso no autorizado";
  die();
}

$mensaje="*";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Programacion - HTML Version |Suwebya</title>
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
    <?php 
require 'conexion.php';
require_once 'menu.php';
?>

    <body>
        <div class="app" id="app">
            <?php require_once 'menu.php';

$Ope= $conn->query("SELECT * FROM `operarios` ORDER BY `name_operario`");
$maquinas= $conn->query("SELECT*FROM `Maquinaria` ORDER BY `number_machine`");
$programacion=$conn->query("SELECT*FROM `programacion_operarios`ORDER BY `diaSP_programacion`DESC");

            ?>


            <!-- ############ PAGE START-->
            <div class="padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h2>Formulario de Programacion de Operarios</h2>
                                        <small>Lista de Operarios en Maquinas de la planta</small>
                                    </div>
                                    <div  class="col-6 align-self-center">
                                    <h4 id="reloj"class="text-center text-success"></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="box-divider m-0"></div>
                            <div class="box-body">
                                <form role="form">
                                    <div class="form-group ">
                                        <label for="cars">Seleccionar Operario</label>
                                        <select id="operarioP" name="operarioP" class="form-control ">
                                            <option value="0">Operario</option>
                                            <?php while($operario= $Ope->fetch_assoc()){ ?>
                                            <option class="text-info" value="<?php echo $operario['name_operario']?>">
                                                <?php echo $operario['name_operario']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="maquina">Seleccionar Maquina</label>
                                        <select id="machineP" name="machineP" class="form-control">
                                            <option value="0">Maquina</option>
                                            <?php while($maq= $maquinas->fetch_assoc()){ ?>
                                            <option class="text-info" value="<?php echo $maq['number_machine']?>">
                                                <?php echo $maq['number_machine']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6 col-sm-3">
                                            <label for="exampleInputPassword1">Hora de Entrada</label>
                                            <input type="time" class="form-control" id="horaEP" name="horaEP" REQUIRED>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <label for="exampleInputPassword1">Hora de Salida</label>
                                            <input type="time" class="form-control" id="horaSP" name="horaSP" onchange="nocturno()" REQUIRED>
                                        </div>
                                        <div class="col-10 col-sm-6 my-3">
                                            <i class="fa fa-flag text-warning"></i> <small> Si la hora de entrada es
                                                menor se pregunta si es un horario nocturno que empieza un dia y termina
                                                en el siguiente.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6 col-sm-3">
                                            <label for="exampleInputPassword1">Dia Inicial </label>
                                            <input type="date"  min = "<?php echo date("Y-m-d"); ?>  " class="form-control" id="diaEP" name="diaEP" 
                                                placeholder="serie" REQUIRED >
                                                
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <label for="exampleInputPassword1">Dia final</label>
                                            <input type="date" class="form-control" id="diaSP" name="diaSP"
                                                placeholder="serie" REQUIRED>
                                        </div>
                                        <div class="col-10 col-sm-6 my-3">
                                            <i class="fa fa-flag text-warning"> </i> <small> Indique el dia en que desea
                                                comenzar la programacion, recuerde que se debe iniciar con el dia
                                                actual.</small>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Observaciones">Observaciones</label>
                                        <input type="text" class="form-control" id="ObservacionesP"
                                            name="ObservacionesP" placeholder="Observaciones del dispositivo">
                                        </label>
                                    </div>
                                    <button type="button" class="btn white m-b"
                                        onclick="agregarDatosPro()">Guardar</button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h2>Programacion</h2>
                                        <small>listado de programacion de operarios .</small>
                                    </div>
                                    <div class="box-divider m-0"></div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Operario</th>
                                                <th>Maquina</th>
                                                <th>Entrada</th>
                                                <th>Salida</th>
                                                <th>Periodo</th>
                                                <th>observaciones</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($programacion as $programa){ ?>
                                            <tr>
                                                <td> <?php echo $programa['operario_programacion'] ?> </td>
                                                <td><?php echo $programa['maquina_programacion'] ?> </td>
                                                <td><?php echo date("h:i a",strtotime($programa['horaEP_programacion']))?>
                                                </td>
                                                <td><?php echo date("h:i a",strtotime($programa['horaSP_programacion']))?>
                                                </td>
                                                <td><?php echo date("d-M-y",strtotime($programa['diaEP_programacion']))."/".date("d-M-y",strtotime($programa['diaSP_programacion'])) ?>
                                                </td>
                                                <td><?php echo $programa['observaciones_programacion'] ?> </td>
                                                <td>
                                                    <button type="button" class="btn accent" data-toggle="modal"
                                                        data-target="#eliminarRegistroP"
                                                        onclick="preguntarSiNo(<?php echo $programa['id_programacion'] ?>)">
                                                        <i class="fa fa-close"></i>
                                                    </button></td>
                                                <div class="modal fade" id="eliminarRegistroP" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabelP"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content dark">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Eliminar
                                                                    Registro</h5>
                                                                <button type="button" class="close text-white"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Esta seguro de eliminar registro ?</h5>
                                                                <div class="form-group ">

                                                                    <input type="text" class="form-control"
                                                                        id="ProgramacionEX" name="ProgramacionEX">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn info"
                                                                    data-dismiss="modal">Volver</button>
                                                                <button type="submit" class="btn danger"
                                                                    id="eliminarRE">Eliminar</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- ############ PAGE END-->
                        <?php require_once 'Theme.php' ?>
                        <!-- / -->
                        <!-- ############ LAYOUT END-->
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
                        <script>
                        $(document).ready(fecha());

                         function fecha(){
                            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                             var f=new Date();
                             var fecha=(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear()); 
                           
                            $('#reloj').html(fecha);
                             
                         };
                        
                        </script>
                        <script>
                       
                            function diaMin() {
                            var fecha = new Date();
                            var anio = fecha.getFullYear();
                            var dia = fecha.getDate();
                            var _mes = fecha.getMonth();//viene con valores de 0 al 11
                            _mes = _mes + 1;//ahora lo tienes de 1 al 12
                            if (_mes < 10)//ahora le agregas un 0 para el formato date
                            { var mes = "0" + _mes;}
                            else
                            { var mes = _mes.toString;}
                            let fechaMin=anio+'-'+mes+'-'+dia;
                            document.getElementById("diaEP").setAttribute('min',fechaMin);
                            console.log(fechaMin);
                            }
                             
                            function nocturno(){
                                if ( $('#horaEP').val()>=$('#horaSP').val()){
                                    confirm("Es un turno nocturno? ");
                                }else{
                                    return;
                                }
                            }
                           
                            function agregarDatosPro() {

                                operarioP = $('#operarioP').val();
                                machineP = $('#machineP').val();
                                horaEP = $('#horaEP').val();
                                horaSP = $('#horaSP').val();
                                diaEP = $('#diaEP').val();
                                diaSP = $('#diaSP').val();
                                observacionP = $('#ObservacionesP').val();
                                console.log();
                               
                                if (machineP != 0 && operarioP != 0) {



                                    if (diaEP <= diaSP) {


                                        
                                        cadena = "operarioP=" + operarioP +
                                            "&machineP=" + machineP +
                                            "&horaEP=" + horaEP +
                                            "&horaSP=" + horaSP +
                                            "&diaEP=" + diaEP +
                                            "&diaSP=" + diaSP +
                                            "&observacionP=" + observacionP;

                                        console.log(cadena);

                                        $.ajax({
                                            type: "post",
                                            url: "agregarDatosProgramacion.php",
                                            data: cadena,
                                            success: function (r) {
                                                if (r == 1) {
                                                    location.reload();
                                                    console.log(r);
                                                    console.log('agregado con exito');
                                                } else {

                                                    alert('programacion inconsistente');

                                                    console.log('fallo en el servidor');
                                                }
                                            }
                                        });



                                    } else {
                                        alert("El dia de inicio de la programacion debe ser menor que el dia  final");
                                    }
                                } else {
                                    alert("Complete el formulario por favor");
                                }
                                console.log(horaSP);
                            }

                            function preguntarSiNo(id) {
                                confirm('eliminar Datos', 'Esta seguro qu desea eliminar este registro')

                                eliminarDatos(id);

                            }

                            function eliminarDatos(id) {
                                $('#ProgramacionEX').val(id);


                                cadena = "id=" + id;


                                $.ajax({
                                    type: "POST",
                                    url: "eliminarDatosP.php",
                                    data: cadena,
                                    success: function (r) {
                                        if (r == 1) {
                                            console.log('eliminado con exito');
                                        } else {

                                            console.log('fallo en el servidor');
                                        }
                                    }
                                })

                            }
                        </script>

    </body>
    <?php 
require_once 'Theme.php';
?>