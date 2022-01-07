<!doctype html>
<html lang="es_MX">
<head>
  <meta charset="utf-8">
  <title>Rastrea tu paquete</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/public.min.css" rel="stylesheet">
  <style>
  body { background-color: #EFF3F6; padding: 20px; }
  .legend { margin-top: 0 }
  .g-recaptcha { min-height: 78px; }
  .panel-body { padding: 5px; }
  .form-container { padding: 20px; border-radius: 0 0 4px 4px; }
    /*********** Theme Designer **********/
.form-container {
}
#form-app {
}
#form-app .form-group {
}
#form-app .form-control {
}
#form-app .form-control:focus {
}
#form-app .btn.btn-primary {
}
#form-app .btn.btn-primary:hover, #form-app .btn.btn-primary:active, #form-app .btn.btn-primary:focus {
}
#form-app .btn.btn-default {
}
#form-app .btn.btn-default:hover, #form-app .btn.btn-default:active, #form-app .btn.btn-default:focus {
}
#form-app .btn.btn-warning {
}
#form-app .btn.btn-warning:hover, #form-app .btn.btn-warning:active, #form-app .btn.btn-warning:focus {
}
#form-app .btn.btn-danger {
}
#form-app .btn.btn-danger:hover, #form-app .btn.btn-danger:active, #form-app .btn.btn-danger:focus {
}
#form-app .btn.btn-info:hover, #form-app .btn.btn-info:active, #form-app .btn.btn-info:focus {
}
#form-app .control-label {
}
#form-app ::placeholder {
}
#form-app h1, #form-app h2, #form-app h3, #form-app h4, #form-app h5, #form-app h6, #form-app .legend {
}
#form-app p {
}
#form-app .help-block {
}
#form-app a {
}
#form-app a:hover {
}
#form-app .steps .step .stage, #form-app .steps .step:before, #form-app .steps .step:after {
}
#form-app .steps .step .stage {
}
#form-app .steps .step:after, #form-app .steps .step:before {
}
#form-app .steps .step.current .stage, #form-app .steps .step.current:after, #form-app .steps .step.current:before {
}
#form-app .steps .step.success .stage, #form-app .steps .step.success:after, #form-app .steps .step.success:before {
}
#form-app .steps .step .title {
}
#form-app .steps .step.current .title {
}
#form-app .steps .step.success .title {
}
.alert {
}
.alert-success {
}
.alert-danger {
}
.alert-info {
}
.alert-warning {
}
.has-error .form-control {
}
.has-error .help-block, .has-error .control-label, .has-error .radio, .has-error .checkbox, .has-error .radio-inline, .has-error .checkbox-inline, .has-error.radio label, .has-error.checkbox label, .has-error.radio-inline label, .has-error.checkbox-inline label {
}
.required .control-label:after, .required-control .control-label:after {
}
#recaptcha, .g-recaptcha {
}
.signature-pad {
}
.signature-pad canvas {
}
input[type=checkbox] {
}
.checkbox-inline {
}
input[type=radio] {
}
.radio-inline {
}
.custom-control .checkbox label::before, .custom-control .inline-control-checkbox label::before {
}
.custom-control .checkbox label::after, .custom-control .inline-control-checkbox label::after {
}
.custom-control .checkbox input:checked+label::before, .custom-control .inline-control-checkbox input:checked+label::before {
}
.custom-control .checkbox input:checked+label::after, .custom-control .inline-control-checkbox input:checked+label::after {
}
.custom-control .radio label::before, .custom-control .inline-control-radio label::before {
}
.custom-control .radio label::after, .custom-control .inline-control-radio label::after {
}
.custom-control .radio input:checked+label::before, .custom-control .inline-control-radio input:checked+label::before {
}
.custom-control .radio input:checked+label::after, .custom-control .inline-control-radio input:checked+label::after {
}
.btn.prev {
}
#form-app .btn.prev:hover, #form-app .btn.prev:active, #form-app .btn.prev:focus {
}
.btn.next {
}
#form-app .btn.next:hover, #form-app .btn.next:active, #form-app .btn.next:focus {
}
.progress {
}
.progress-bar {
}
.table {
}
.well {
}

  </style>
  <script>
  
  </script>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="panel-body">
                        <div class="form-container">
                            <div id="messages"></div>
                            <form action="" method="post" enctype="multipart/form-data" accept-charset="UTF-8" id="form-app">
<fieldset class="row">

<!-- Heading -->
<div class="col-xs-12">
    <h3 class="legend">Rastreo de Paquetes</h3>
</div>


<!-- Select List -->
<div class="col-xs-12">
    <div class="form-group required-control">
        <label  class="control-label" for="carrier">Paquetería</label>
        <select id="carrier" name="carrier" data-alias=""  class="form-control" required  >
            <option value="" >Seleccione una opción</option>
            <option value="UPS" >UPS</option>
            <option value="Redpack" >Redpack</option>
            <option value="Estafeta" >Estafeta</option>
            <option value="DHL" >DHL</option>
            <option value="Paquetexpress" >Paquetexpress</option>
            <option value="99 Minutos" >99 Minutos</option>
            <option value="Tresguerras" >Tresguerras</option>
			<option value="Ampm" >Ampm</option>
			<option value="Sendex" >Sendex</option>
			<option value="FedEx" >FedEx</option>
			<option value="Treggo" >Treggo</option>
			<option value="Deprisa" >Deprisa</option>
			<option value="Four72" >4-72</option>
			<option value="iVoy" >iVoy</option>
			<option value="Pickit" >Pickit</option>
			<option value="Zubut" >Zubut</option>
			<option value="Borzo" >Borzo</option>
        </select>
    </div>
</div>

<!-- Number -->
<div class="col-xs-12">
    <div class="form-group required-control">
        <label  class="control-label" for="number">Número de guía</label>
        <input type="text" id="shipment" name="shipment" value="" data-alias="" data-integer-only="true"  class="form-control"  required>
    </div>
</div>

<!-- Button -->
<div class="col-xs-12">
     <div class="form-action">
        <button type="submit" id="button_1" name="button_1" class="btn btn-primary">Enviar</button>
    </div>
</div>
</fieldset>
<div class="" style="display:none"><label class="control-label" for="_email">Disculpe, pero deje este campo en blanco</label><input type="text" id="_email" class="form-control" name="_email"></div> </form>
<div id="respuesta">
<?php

//Verificar si el POST está configurado
if (isset($_POST["carrier"])) {

//Obtener el valor de los campos
include_once "key.php";
$shipment_number=$_POST["shipment"];
$carrier=$_POST["carrier"];

//Crear una nueva instancia de la clase
$params = array(
  "api_key" => $API_KEY,
  "carrier" => $carrier,
  "shipment_number" => $shipment_number
);

$headers = array(
  "api_key=".$API_KEY
);
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://envios.corporativomarva.mx/api/v1/trackings",
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_RETURNTRANSFER => 1
));

//Ejecutar la petición
$response = curl_exec($ch);
curl_close($ch);

//Mostrar la respuesta
$respuesta = json_decode($response);
     //Si el event_description es null mostrar error Ayuda a evitar que escoja una opción incorrecta en la paqueteria
    if($respuesta->event_description==null){
      echo "<div class='alert alert-danger' role='alert'>";
      echo "<h4 class='alert-heading'>¡Envío no encontrado!</h4>";
      echo "<p>El envío con número de guía <strong>".$shipment_number."</strong> no fue encontrado o se selecciono la paquetería incorrecta.</p>";
      echo "<hr>";
      echo "<p class='mb-0'>Por favor, intente de nuevo verificando todos los datos.</p>";
      echo "</div>";
    }
    else {
//Mostrar la respuesta en formato HTML con tablas alidando si el status es SUCCESS 

if($respuesta->status=="SUCCESS"){
  echo "<div class='alert alert-success' role='alert'>";
  echo "<h4 class='alert-heading'>¡Envío encontrado!</h4>";
  echo "<p>El envío con número de guía <strong>".$shipment_number."</strong> fue encontrado con éxito.</p>";
  
//Mostrar logotipo de la paquetería seleccionada si no hay logo se muestra logo de Soluciones Marva

  if($carrier=="UPS"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/ups.svg' width='150' class='d-inline-block align-top' alt='UPS'><br>";
  }
  elseif($carrier=="Redpack"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/redpack.svg' width='150' class='d-inline-block align-top' alt='Redpack'><br>";
  }
  elseif($carrier=="Estafeta"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/estafeta.svg' width='150' class='d-inline-block align-top' alt='Estafeta'><br>";
  }
  elseif($carrier=="DHL"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/dhl.svg' width='150' class='d-inline-block align-top' alt='DHL'><br>";
  }
  elseif($carrier=="Paquetexpress"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/paquetexpress.svg' width='150' class='d-inline-block align-top' alt='Paquetexpress'><br>";
  }
  elseif($carrier=="99 Minutos"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/99minutos.svg' width='150' class='d-inline-block align-top' alt='99 Minutos'><br>";
  }
  elseif($carrier=="Tresguerras"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/tresguerras.svg' width='150' class='d-inline-block align-top' alt='Tresguerras'><br>";
  }
  elseif($carrier=="Ampm"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/ampm.svg' width='150' class='d-inline-block align-top' alt='Ampm'><br>";
  }
  elseif($carrier=="Sendex"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/sendex.svg' width='150' class='d-inline-block align-top' alt='Sendex'><br>";
  }
  elseif($carrier=="FedEx"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/fedex.svg' width='150' class='d-inline-block align-top' alt='FedEx'><br>";
  }
  elseif($carrier=="Treggo"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/treggo.svg' width='150' class='d-inline-block align-top' alt='Treggo'><br>";
  }
  elseif($carrier=="Deprisa"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/deprisa.svg' width='150' class='d-inline-block align-top' alt='Deprisa'><br>";
  }
  elseif($carrier=="Four72"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/4-72.svg' width='150' class='d-inline-block align-top' alt='4-72'><br>";
  }
  elseif($carrier=="iVoy"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/ivoy.svg' width='150' class='d-inline-block align-top' alt='iVoy'><br>";
  }
  elseif($carrier=="Pickit"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/pickit.svg' width='150' class='d-inline-block align-top' alt='Pickit'><br>";
  }
  elseif($carrier=="Zubut"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/zubut.svg' width='150' class='d-inline-block align-top' alt='Zubut'><br>";
  }
  elseif($carrier=="Borzo"){
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/borzo.svg' width='150' class='d-inline-block align-top' alt='Borzo'><br>";
  }
  else{
    echo "<br><img src='https://cdn-principal.solucionesmarva.com/assets/carriers/marva.svg' width='150' class='d-inline-block align-top' alt='Marva'><br>";
  }

echo "<br>";
echo "<table border='1'>";

//Mostrar estado del envio, color del estado cambia dependiendo el estado del mismo

if($respuesta->status_code=="1"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #00B3FC; color: white;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="2"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #E6E645; color: black;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="3"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #E6E645; color: black;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="13"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #00B3FC; color: white;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="14"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #02AA30; color: white;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="15"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #E6E645; color: black;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="16"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #00B3FC; color: white;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="17"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #E6E645; color: black;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="40"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #E6E645; color: black;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="50"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #02AA30; color: white;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="51"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #E6E645; color: black;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="90"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #FF1A1A; color: white;'>".$respuesta->shipment_status."</td></tr>";
}
elseif($respuesta->status_code=="98"){
  echo "<tr><td>Estado del envío</td><td style='background-color: #FF1A1A; color: white;'>".$respuesta->shipment_status."</td></tr>";
}
else{
  echo "<tr><td>Estado del envío</td><td style='background-color: #E6E645; color: black;'>".$respuesta->shipment_status."</td></tr>";
}

//Se muestran el resto de datos en formato de tabla

echo "<tr><td>Fecha estimada de entrega</td><td>".$respuesta->expected_delivery_date."</td></tr>";
echo "<tr><td>Evento</td><td>".$respuesta->event_description."</td></tr>";
echo "<tr><td>Guía</td><td>".$respuesta->carrier_tracking_number."</td></tr>";
echo "<tr><td>ID de envio</td><td>".$respuesta->enviaya_shipment_number."</td></tr>";
echo "<tr><td>Fecha de envio</td><td>".date("d/m/Y H:i:s A", strtotime($respuesta->pickup_date))."</td></tr>";

//Mostrar los detalles del envio en una tabla HTML y cambiar el formato de fecha a dd/mm/yyyy HH:MM:SS AM/PM
echo "<tr><td>Seguimiento</td><td><table border='1'>";
echo "<tr><td>Fecha</td><td>Descripción</td><td>Comentarios</td></tr>";
foreach($respuesta->checkpoints as $checkpoint){
  echo "<tr><td>".date("d/m/Y H:i:s A", strtotime($checkpoint->date))."</td><td>".$checkpoint->description."</td><td>".$checkpoint->comments."</td></tr>";
}
echo "</table></td></tr>";
echo "</table>";
}else{
    echo "<div class='alert alert-danger' role='alert'>";
    echo "<h4 class='alert-heading'>¡Envío no encontrado!</h4>";
    echo "<p>El envío con número de guía <strong>".$shipment_number."</strong> no fue encontrado.</p>";
    echo "<hr>";
    echo "<p class='mb-0'>Por favor, intente de nuevo.</p>";
    echo "</div>";
    }
    }
}

?>
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