<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Suwebya - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
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
<?php 
session_start();
$logged= $_SESSION['logged'];
$pagina= "TABLERO PRINCIPAL";
if(!$logged){
  echo "Ingreso no autorizado";
  die();
}



?>


<body>
  <div class="app" id="app">

<?php require_once 'menu.php' ?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="margin">
		<h5 class="mb-0 _300">Suwebya, Bienvenido</h5>
		<small class="text-muted">Tablero de control Principal</small>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-5 col-lg-4">
			<div class="row">
				<div class="col-sm-6">
			        <div class="box p-a">
			          <div class="pull-left m-r">
			          	<i class="fa fa-tachometer text-2x text-danger m-y-sm"></i>
			          </div>
			          <div class="clear">
			          	<div class="text-muted">RPM</div>
			            <h4 class="m-0 text-md _600"><a href>26</a></h4>
			          </div>
			        </div>
			    </div>
			    <div class="col-sm-6">
			        <div class="box p-a">
			          <div class="pull-left m-r">
			          	<i class="fa fa-line-chart text-2x text-info m-y-sm"></i>
			          </div>
			          <div class="clear">
			          	<div class="text-muted">kls/hr</div>
			            <h4 class="m-0 text-md _600"><a href>63</a></h4>
			          </div>
			        </div>
			    </div>
			    <div class="col-sm-6">
			        <div class="box p-a">
			          <div class="pull-left m-r">
                  <i class="fa fa-fire text-2x text-accent m-y-sm"></i>
                  
			          </div>
			          <div class="clear">
			          	<div class="text-muted">Temperatura</div>
			            <h4 class="m-0 text-md _600"><a href>46</a></h4>
			          </div>
			        </div>
			    </div>
			    <div class="col-sm-6">
			        <div class="box p-a">
			          <div class="pull-left m-r">
			          	<i class="fa fa-bolt text-2x text-success m-y-sm"></i>
			          </div>
			          <div class="clear">
			          	<div class="text-muted">Estado</div>
			            <h4 class="m-0 text-md _600"><a href>ON</a></h4>
			          </div>
			        </div>
			    </div>
			    <div class="col-sm-12">
			        <div class="row no-gutter box-color text-center  ">
			          <div class="col-sm-6 p-a primary">
			            Operario
			            <h6 class="m-0 text-sm _600 "><a href>Andres Cardona</a></h6>
			          </div>
			          <div class="col-sm-6 p-a dker info">
			            Referencia
			            <h4 class="m-0 text-md _600"><a href>F1919</a></h4>
			          </div>
			        </div>
			    </div>
		    </div>
	    </div>
	    <div class="col-sm-12 col-md-7 col-lg-8">
	    	<div class="row no-gutter box dark bg">
		        <div class="col-sm-8">
	        		<div class="box-header">
			          <h3>Actividad</h3>
			          <small>Actividad en las ultimas 8 horas vs dia anterior</small>
			        </div>
			        <div class="box-body">
			            <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
			              [
			                { 
			                  data: [[1, 6.1], [2, 6.3], [3, 6.4], [4, 6.6], [5, 7.0], [6, 7.7], [7, 8.3]], 
			                  points: { show: true, radius: 0}, 
			                  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 } 
			                },
			                { 
			                  data: [[1, 5.5], [2, 5.7], [3, 6.4], [4, 7.0], [5, 7.2], [6, 7.3], [7, 7.5]], 
			                  points: { show: true, radius: 0}, 
			                  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 } 
			                }
			              ], 
			              {
			                colors: ['#0cc2aa','#fcc100'],
			                series: { shadowSize: 3 },
			                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
			                yaxis:{ show: true, font: { color: '#ccc' }},
			                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
			                tooltip: true,
			                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
			              }
			            " style="height:162px" >
			            </div>
			        </div>
		        </div>
		        <div class="col-sm-4 dker">
					<div class="box-header">
						<h3>Reports</h3>
					</div>
					<div class="box-body">
						<p class="text-muted">Aqui encontraras los datos consolidados comparados con otras Maquinas ,Referencias ,Operarios y materias Primas</p>
						<a href class="btn btn-sm btn-outline rounded b-success">Consolidados</a>
					</div>
		        </div>
		    </div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12 col-xl-4">
	        <div class="box">
	          <div class="box-header">
	            <h3>Datos Rendimiento</h3>
	            <small>Calculo ultimos 7 dias</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18">&#xe863;</i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18">&#xe5d4;</i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href>dia</a>
		              <a class="dropdown-item" href>semana</a>
		              <a class="dropdown-item" href>mes</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">hoy</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="text-center b-t">
	            <div class="row-col">
	              <div class="row-cell p-a">
	                <div class="inline m-b">
	                  <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw='true' data-percent="55" ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#0cc2aa',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
	                    <div>
	                      <h5>55%</h5>
	                    </div>
	                  </div>
	                </div>
	                <div>
	                	Terminado
	                	<small class="block m-b">320</small>
	                	<a href class="btn btn-sm white rounded">Gestion</a>
	                </div>
	              </div>
	              <div class="row-cell p-a dker">
	                <div class="inline m-b">
	                  <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw='true' data-percent="45" ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#fcc100',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
	                    <div>
	                      <h5>45%</h5>
	                    </div>
	                  </div>
	                </div>
	                <div>
	                	Parcial
	                	<small class="block m-b">205</small>
	                	<a href class="btn btn-sm white rounded">Gestion</a>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	    </div>
	    <div class="col-md-6 col-xl-4">
	    	<div class="box">
	          <div class="box-header">
	            <h3>Maquina 21</h3>
	            <small>Calculo ultimos 30 dias</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18">&#xe863;</i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18">&#xe5d4;</i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href>Diario</a>
		              <a class="dropdown-item" href>Mensual</a>
		              <a class="dropdown-item" href>Anual</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">Today</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="box-body">
	            <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]], 
	                  points: { show: true, radius: 0}, 
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0.2 } 
	                },
	                { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]], 
	                  points: { show: true, radius: 0}, 
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0.1 } 
	                }
	              ], 
	              {
	                colors: ['#fcc100','#0cc2aa'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' },  min: 2},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height:200px" >
	            </div>
	          </div>
	        </div>
	    </div>
	    <div class="col-md-6 col-xl-4">
	        <div class="box">
	          <div class="box-header">
	            <h3>Rendimiento</h3>
	            <small>Escala ultimos 7 dias</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18">&#xe863;</i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18">&#xe5d4;</i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href>This week</a>
		              <a class="dropdown-item" href>This month</a>
		              <a class="dropdown-item" href>This week</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">Today</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="box-body">
	            <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] },
	                { data: [[1, 2], [2, 3], [3, 2], [4, 5], [5, 4], [6, 3], [7, 4], [8, 2]] }
	              ], 
	              {
	                bars: { show: true, fill: true,  barWidth: 0.3, lineWidth: 2, order: 1, fillColor: { colors: [{ opacity: 0.2 }, { opacity: 0.2}] }, align: 'center'},
	                colors: ['#0cc2aa','#fcc100'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' }},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height:200px" >
	            </div>
	          </div>
	        </div>
	    </div>
	</div>
	
<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

 <?php require_once 'Theme.php' ?>
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
  <script src="../libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>
  <script type="text/javascript">

id="Tablero Principal"
            window.onload = function() {
                document.getElementById('identificacion').innerHTML=id;
            }
</script>
<!-- endbuild -->
</body>
</html>
