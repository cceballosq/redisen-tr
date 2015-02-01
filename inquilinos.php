<?php include 'header.php';?>

<div class="col-md-12 pull-right">
	<div class="col-md-6">
		<ol class="breadcrumb">
			<li><a href="">Inicio</a></li>
			<li class="active"><a href="#">Inquilinos</a></li>
			
		</ol>
	</div>
	
	<div class="col-md-6">
		<h3 class="pull-right">
			<a href="#" title="Agregar Inquilino" class="btn-add-propiedad no-decoration">
				<span class="label label-warning">Agregar Inquilino</span>
			</a>
		</h3>
	</div>
</div>

<div class="col-md-12 pull-right" style="padding:20px 5px 20px 0;">
	<div class="col-md-6"></div>
	<div class="col-md-6 pull-right input-group">
		<div class="col-md-5">
			<input type="text" class="form-control col-md-6" placeholder="Buscar un inquilino" name="srch-term" id="srch-term">
		</div>
		
		
		<div class="col-md-1 input-group-btn" style="margin-left:-33px;">
			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		</div>
		
		<div class="col-md-6">
			<select name="" class="col-md-4 form-control box-shadow" style="margin-left:40px;">
				<option>Ordernar por...</option>
				<option>Nombre</option>
				<option>Contrato</option>
			</select>
		</div>
	</div>
</div>

<!-- Inquilinos -->
<div class="col-md-12 section-inquilinos" style="padding:initial; margin-top:10px;">
	
	<div class="col-md-12 border-bottom">
		<div class="col-md-12 title-section-inquilino" id="title-recibos-propiedad" data-toggle="collapse" href="#collapse-recibos-propiedad" aria-expanded="true" aria-controls="#collapse-recibos-propiedad">
			<div class="col-md-5">
				<div class="arrow-left"></div> <span class="pointer underline OpenSansBold">Nombre completo del inquilino</span>
			</div>
			<div class="col-md-2">
				<img style="" src="css/images/inquilinos-contacto-tel.png" alt="Conacto inquilino telefono" 
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 &nbsp;&nbsp;&nbsp;&nbsp; Celular: 044 81 15 43 99 62 &nbsp;&nbsp;&nbsp; Correo: caarloshugo@gmail.com"/>
				
				<img style="margin-left:40px;" src="css/images/inquilinos-contacto-correo.png" alt="Conacto inquilino telefono" 
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 Celular: 044 81 15 43 99 62 Correo: caarloshugo@gmail.com"/>
			</div>
			<div class="col-md-5">
				Contrato: <a href="" title="Contrato" class="color-link underline">Oficinas en rio bravo #45</a>
			</div>
		</div>
		
		<div class="col-md-12 collapse" id="collapse-recibos-propiedad" style="margin-top:20px;">
			<div class="col-md-12" style="padding:0 20px 20px 20px;">
				Hola
			</div>
		</div>
	</div>
	
	<div class="col-md-12 border-bottom">
		<div class="col-md-12 title-section-inquilino" id="title-cuenta-propiedad" data-toggle="collapse" href="#collapse-cuenta-propiedad" aria-expanded="true" aria-controls="#collapse-cuenta-propiedad">
			<div class="col-md-5">
				<div class="arrow-left"></div> <span class="pointer underline OpenSansBold">Nombre completo del inquilino</span>
			</div>
			<div class="col-md-2">
				<img style="" src="css/images/inquilinos-contacto-tel.png" alt="Conacto inquilino telefono"
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 &nbsp;&nbsp;&nbsp;&nbsp Celular: 044 81 15 43 99 62 &nbsp;&nbsp;&nbsp;&nbsp Correo: caarloshugo@gmail.com"/>
				<img style="margin-left:40px;" src="css/images/inquilinos-contacto-correo.png" alt="Conacto inquilino telefono"
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 Celular: 044 81 15 43 99 62 Correo: caarloshugo@gmail.com"/>
			</div>
			<div class="col-md-5">
				Contrato: <a href="" title="Contrato" class="color-link underline">Oficinas en rio bravo #45</a>
			</div>
		</div>
		
		<div class="col-md-12 collapse" id="collapse-cuenta-propiedad" style="padding:5px 20px 5px 20px;">	
			<div class="col-md-11" style="border-bottom:1px solid #ccc; padding:20px 0 20px 0;">
				<div class="col-md-12" style="padding:initial;">
					<div class="col-md-2 ">
						<span class="text-gray">Contrato 1:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">Casa de monterrey en romero de terreros</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2 ">
						<span class="text-gray">Contrato 2:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">Casa en Colima, Colima</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-1 pull-right">
				<a href="" class="a-trash left-10px pull-right">
					<img src="css/images/trash.png" alt="Borrar Propiedad"/>
				</a>
				
				<a href="" class="a-edit-propiedad pull-right">
					<img src="css/images/editar.png" alt="Editar Propiedad"/>
				</a>
			</div>
			
			<div class="col-md-11" style="border-bottom:1px solid #ccc; padding:20px 0 20px 0;">
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2 ">
						<span class="text-gray">Tel. Casa:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">565589752</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Celular:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">0443121138379</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Tel Oficina:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black"></span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Correo 1:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">caarloshugo@gmail.com</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Correo 2:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black"></span>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			
			<div class="col-md-11" style="border-bottom:1px solid #ccc; padding:20px 0 20px 0;">
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2 ">
						<span class="text-gray">RFC:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">GOCC880405789</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Dirección:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">
							Paseo del Acueducto, #6519<br/>
							Col. Ciudad Satélite, C.P. 64960<br/>
							Monterrey, Nuevo León,<br/>
							México
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			
			<div class="col-md-11" style="border-bottom:1px solid #ccc; padding:20px 0 20px 0;">
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2 ">
						<span class="text-gray">Comentarios:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">Comentarios sobre el inquilino.</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:20px;">
					<div class="col-md-2">
						<span class="text-gray">Documentos:</span>
					</div>
					<div class="col-md-4" style="margin-left:-50px; padding-right:0px;">
						<input type="text" class="form-control" readonly>
					</div>
					<div class="col-md-2" style="padding:initial;">
						<span class="input-group-btn">
							<span class="btn btn-file btn-finish no-decoration" style="border:1px solid #ccc;">
								Seleccionar <input type="file" multiple>
							</span>
						</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-2"></div>
					<div class="col-md-4 title-datos" style="margin-left:-50px;">
						<a href="" title="Documento">Escrituras_casa_monterrey.pdf</a>
					</div>
					<div class="col-md-3">
						<a href=""><img src="css/images/vista-previa.png" alt="Vista previa"/></a>
						<a href="" style="margin-left:15px;"><img src="css/images/descargar.png" alt="Descargar"/></a>
						<a href="" style="margin-left:15px;"><img src="css/images/eliminar.png" alt="Eliminar"/></a>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="col-md-2"></div>
					<div class="col-md-4 title-datos" style="margin-left:-50px;">
						<a href="" title="Documento">Escrituras_casa_monterrey.pdf</a>
					</div>
					<div class="col-md-3">
						<a href=""><img src="css/images/vista-previa.png" alt="Vista previa"/></a>
						<a href="" style="margin-left:15px;"><img src="css/images/descargar.png" alt="Descargar"/></a>
						<a href="" style="margin-left:15px;"><img src="css/images/eliminar.png" alt="Eliminar"/></a>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:30px;">
					<div class="col-md-8" style="padding:initial;">
						<div class="table-responsive">
							<table class="table table-regular-2">
								<tbody>
									<tr>
										<td class="text-gray">
											Inquilino de <a href="" title="" class="color-link underline">Nombre de la propiedad de 01/02/2013 a 01/02/2014</a>
											<a href="" title="Borrar historial" class="pointer close-x pull-right">x</a>
										</td>
									</tr>
									<tr>
										<td class="text-gray">
											Inquilino de <a href="" title="" class="color-link underline">Nombre de la propiedad de 01/02/2013 a 01/02/2014</a>
											<a href="" title="Borrar historial" class="pointer close-x pull-right">x</a>
										</td>
									</tr>
									<tr class="text-gray">
										<td>
											Inquilino de <a href="" title="" class="color-link underline">Nombre de la propiedad de 01/02/2013 a 01/02/2014</a>
											<a href="" title="Borrar historial" class="pointer close-x pull-right">x</a>
										</td>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	<div class="col-md-12 border-bottom">
		<div class="col-md-12 title-section-inquilino pointer" id="title-historial-propiedad"  data-toggle="collapse" href="#collapse-historial-propiedad" aria-expanded="true" aria-controls="#collapse-historial-propiedad">
			<div class="col-md-5">
				<div class="arrow-left"></div> <span class="pointer underline OpenSansBold">Nombre completo del inquilino</span>
			</div>
			<div class="col-md-2">
				<img style="" src="css/images/inquilinos-contacto-tel.png" alt="Conacto inquilino telefono" 
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 &nbsp;&nbsp;&nbsp;&nbsp; Celular: 044 81 15 43 99 62 &nbsp;&nbsp;&nbsp; Correo: caarloshugo@gmail.com"/>
				
				<img style="margin-left:40px;" src="css/images/inquilinos-contacto-correo.png" alt="Conacto inquilino telefono" 
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 Celular: 044 81 15 43 99 62 Correo: caarloshugo@gmail.com"/>
			</div>
			<div class="col-md-5">
				Contrato:
			</div>
		</div>
		
		<div class="col-md-12 collapse" id="collapse-historial-propiedad" style="margin-top:20px;">
			<div class="col-md-12" style="padding:0 20px 20px 20px;">
				Hola 3
			</div>
		</div>
	</div>
</div>
<!-- /Inquilinos -->

<?php include 'footer.php';?>
