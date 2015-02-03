<!DOCTYPE HTML>
<head>
	<html lang = "es">
	<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>	
	
	<title>modal</title>
	<style type="text/css">
		@media screen and (min-width: 768px) {
	
			#addinquilino .modal-dialog  {width:920px;}

		}
		
	</style>
</head>
<body>

</body>
</html>

<?php //include 'header.php';?>


<hr>
<a data-toggle="modal" href="#addinquilino" class="btn btn-primary btn-large">Launch demo modal</a></p> 

<div class="modal fade in" id="addinquilino" data-backdrop="static"  >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nuevo Inquilino</h4>
      </div>
      <div class="modal-body">
      	<!-- cabecera -->
      	<form class="form-horizontal" role="form">
      		<div>

      		</div>
       	<!-- cuerpo -->
       	
			<div class="form-group">
			    <label for="ejemplo_email_3" class="col-lg-2 control-label">Nombre*</label>
			    <div class="col-lg-10">
			    	<div class="col-xs-3"><input type="text" class="form-control" id="niNombres"  placeholder="Nombres(s)"></div>
			    	<div class="col-xs-3"><input type="text" class="form-control" id="niapepaterno"  placeholder="Apellido Paterno"></div>
			    	<div class="col-xs-3"><input type="text" class="form-control" id="niapematerno"  placeholder="Apellido Materno"></div>	      	
			       	
			    	
			    </div>
			</div>

			<!-- footer -->


  		</form>	

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--


-->


<script type="text/javascript">
$(function(){
	$('#addinquilino').modal({
        show: 'true'
    }); 

})
function GetInputValue () {
    var input = document.getElementById ("fileToUpload");
    alert (input.value);
}

</script>

<!-- /Inquilinos -->

<?php //include 'footer.php';?>
