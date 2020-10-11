<?php 
session_start();
$logged= $_SESSION['logged'];

if(!$logged){
  echo "Ingreso no autorizado";
  die();
}



?>

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
                <a href="dashboard.html" >
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
                    <a href="inbox.html" >
                      <span class="nav-text">Inbox</span>
                    </a>
                  </li>
                  <li>
                    <a href="contact.html" >
                      <span class="nav-text">Contacts</span>
                    </a>
                  </li>
                  <li>
                    <a href="calendar.html" >
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
                    <a href="Dispositivos.php" >
                      <span class="nav-text">Dispositivos</span>
                    </a>
                  </li>
                  <li>
                    <a href="setting.html" >
                      <span class="nav-text">Setting</span>
                    </a>
                  </li>
                  <li>
                    <a href="search.html" >
                      <span class="nav-text">Search</span>
                    </a>
                  </li>
                  <li>
                    <a href="faq.html" >
                      <span class="nav-text">FAQ</span>
                    </a>
                  </li>
                  <li>
                    <a href="gallery.html" >
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
                    <a href="form.layout.html" >
                      <span class="nav-text">Form. Materia P</span>
                    </a>
                  </li>
                  <li>
                    <a href="form.element.html" >
                      <span class="nav-text">Form. Operario</span>
                    </a>
                  </li>
                  <li>
                    <a href="form.validation.html" >
                      <span class="nav-text">Form. turnos</span>
                    </a>
                  </li>
                  <li>
                    <a href="form.select.html" >
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
                    <a href="static.html" >
                      <span class="nav-text">Acumulado anual</span>
                    </a>
                  </li>
                  <li>
                    <a href="datatable.html" >
                      <span class="nav-text">Acumulado mensual</span>
                    </a>
                  </li>
                  <li>
                    <a href="footable.html" >
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
                        <a href="echarts-line.html" >
                          <span class="nav-text">Maquina</span>
                        </a>
                      </li>
                      <li>
                        <a href="echarts-bar.html" >
                          <span class="nav-text">Operario</span>
                        </a>
                      </li>
                      <li>
                        <a href="echarts-pie.html" >
                          <span class="nav-text">Materia Prima</span>
                        </a>
                      </li>
                      <li>
                        <a href="echarts-scatter.html" >
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
              
              <li class="hidden-folded" >
                <a href="docs.html" >
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
                    <span>Novedades</span>
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
          &copy; Copyright <strong>Suwebya</strong> <span class="hidden-xs-down">-Pasion por la Ingenieria   v1.1.3</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="">Nosotros</a>
          <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Informacion</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

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

  <!-- theme switcher -->
   <div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
      <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
        <i class="fa fa-gear"></i>
      </a>
      <div class="box-header">
        <a href="https://themeforest.net/item/flatkit-app-ui-kit/13231484?ref=flatfull" class="btn btn-xs rounded danger pull-right">BUY</a>
        <h2>Selector de temas</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <p class="hidden-md-down">
          <label class="md-check m-y-xs"  data-target="folded">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Menu Angosto</span>
          </label>
          <label class="md-check m-y-xs" data-target="boxed">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Pagina en caja</span>
          </label>
          <label class="m-y-xs pointer" ui-fullscreen>
            <span class="fa fa-expand fa-fw m-r-xs"></span>
            <span>Fullscreen Mode</span>
          </label>
        </p>
        <p>Colors:</p>
        <p data-target="themeID">
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'primary', accent:'accent', warn:'warn'}">
            <input type="radio" name="color" value="1">
            <i class="primary"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'accent', accent:'cyan', warn:'warn'}">
            <input type="radio" name="color" value="2">
            <i class="accent"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warn', accent:'light-blue', warn:'warning'}">
            <input type="radio" name="color" value="3">
            <i class="warn"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'success', accent:'teal', warn:'lime'}">
            <input type="radio" name="color" value="4">
            <i class="success"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'info', accent:'light-blue', warn:'success'}">
            <input type="radio" name="color" value="5">
            <i class="info"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'blue', accent:'indigo', warn:'primary'}">
            <input type="radio" name="color" value="6">
            <i class="blue"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warning', accent:'grey-100', warn:'success'}">
            <input type="radio" name="color" value="7">
            <i class="warning"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'danger', accent:'grey-100', warn:'grey-300'}">
            <input type="radio" name="color" value="8">
            <i class="danger"></i>
          </label>
        </p>
        <p>Temas:</p>
        <div data-target="bg" class="row no-gutter text-u-c text-center _600 clearfix">
          <label class="p-a col-sm-6 light pointer m-0">
            <input type="radio" name="theme" value="" hidden>
            Ligero
          </label>
          <label class="p-a col-sm-6 grey pointer m-0">
            <input type="radio" name="theme" value="grey" hidden>
            Gris
          </label>
          <label class="p-a col-sm-6 dark pointer m-0">
            <input type="radio" name="theme" value="dark" hidden>
            Oscuro
          </label>
          <label class="p-a col-sm-6 black pointer m-0">
            <input type="radio" name="theme" value="black" hidden>
            Negro
          </label>
        </div>
      </div>
    </div> 
    
    <div class="switcher box-color black lt" id="sw-demo">
     <!--  <a href ui-toggle-class="active" target="#sw-demo" class="box-color black lt text-color sw-btn">
        <i class="fa fa-list text-white"></i>
      </a> -->
      <div class="box-header">
        <h2>Demos</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <div class="row no-gutter text-u-c text-center _600 clearfix">
          <a href="dashboard.html"
            class="p-a col-sm-6 primary">
            <span class="text-white">Default</span>
          </a>
          <a href="dashboard.0.html"
            class="p-a col-sm-6 success">
            <span class="text-white">Zero</span>
          </a>
          <a href="dashboard.1.html"
            class="p-a col-sm-6 blue">
            <span class="text-white">One</span>
          </a>
          <a href="dashboard.2.html"
            class="p-a col-sm-6 warn">
            <span class="text-white">Two</span>
          </a>
          <a href="dashboard.3.html"
            class="p-a col-sm-6 danger">
            <span class="text-white">Three</span>
          </a>
          <a href="dashboard.4.html"
            class="p-a col-sm-6 green">
            <span class="text-white">Four</span>
          </a>
          <a href="dashboard.5.html"
            class="p-a col-sm-6 info">
            <span class="text-white">Five</span>
          </a>
          <div 
            class="p-a col-sm-6 lter">
            <span class="text">...</span>
          </div>
        </div>
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
  <script src="../libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>
