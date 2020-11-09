<?php 
require_once "conexion.php";
$operarioP = ($_POST['operarioP']);
$machineP = ($_POST['machineP']);
$horaEP = ($_POST['horaEP']);
$horaSP = ($_POST['horaSP']);
$diaEP = ($_POST['diaEP']);
$diaSP = ($_POST['diaSP']);
$observacionP = ($_POST['observacionP']);

if($horaEP>=$horaSP&&$diaEP==$diaSP){
   
   $fecha_actual = $diaSP;
//sumo 1 día
 
$diaSP= date("Y-m-d",strtotime($fecha_actual."+ 1 days"));
}

$diaActual=date("Y/m/d");

$diaX=date("Y-m-d",strtotime($diaEP));
echo $diaActual;
if($diaEP<$diaActual){
    echo false;
}

$validacion=$conn->query("SELECT`diaSP_programacion`FROM`programacion_operarios` WHERE  `operario_programacion`='".$operarioP."' AND `maquina_programacion`='".$machineP."'AND `diaSP_programacion` > '".$diaEP."'");
$valida=$validacion->fetch_all(MYSQLI_ASSOC);
$count = count($valida);

    if($count>0){
        echo false;
    }else{
        $result=$conn->query("INSERT INTO `programacion_operarios` (`operario_programacion`, `maquina_programacion`, `horaEP_programacion`, `horaSP_programacion`,`diaEP_programacion`,`diaSP_programacion`,`observaciones_programacion`) VALUES ('".$operarioP."','".$machineP."', '".$horaEP."', '".$horaSP."','".$diaEP."','".$diaSP."','".$observacionP."') ; ");

         echo $result; 

    }

   
  
?>
