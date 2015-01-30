<?php include 'header.php';?>

<div class="col-md-12 pull-right">
	<div class="col-md-6">
		<ol class="breadcrumb">
			<li><a href="">Inicio</a></li>
			<li><a href="#">Propiedades</a></li>
			<li class="active"><a href="#">Propiedad 1</a></li>
		</ol>
	</div>
	
	<div class="col-md-6">
		<h3 class="pull-right">
			<a href="/propiedades/agregar" title="Agregar propiedad" class="btn-add-propiedad no-decoration">
				<span class="label label-warning">Agregar Propiedad</span>
			</a>
		</h3>
	</div>
</div>

<!-- Nombre, Editar y eliminar -->
<div class="col-md-12">
	<div class="col-md-1"><div class="propiedad-libre"></div></div>
	
	<div class="col-md-2" style="margin-left: -50px;">
		<a href="" title="Propiedad">
			<img src="css/images/img-propiedad.png" alt="Propiedad" class="img-propiedad"/>
		</a>
	</div>
	
	<div class="col-md-3 link-propiedad" style="margin-left: -50px;">
		<a href="" class="nombre-propiedad-2 OpenSansBold">
			Casa de Monterrey en Satélite Número 1-A
		</a>
	</div>
	
	<div class="col-md-2 pull-right">
		<a href="" class="a-trash left-10px pull-right">
			<img src="css/images/trash.png" alt="Borrar Propiedad"/>
		</a>
		
		<a href="" class="a-edit-propiedad pull-right">
			<img src="css/images/editar.png" alt="Editar Propiedad"/>
		</a>
	</div>
</div>
<!-- /Nombre, Editar y eliminar -->

<!-- Datos -->
<div class="col-md-12" style="padding:20px;">
	<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Datos</div>
	<div class="col-md-8" id="section-datos-propiedad">
		<div class="col-md-12 block-datos-propiedad">
			<div class="col-md-2 title-datos text-gray-pad">Calle</div>
			<div class="col-md-4 data-datos">Paseo del Acueducto</div>
			
			<div class="col-md-1 title-datos text-gray-pad">#Ext.</div>
			<div class="col-md-2 data-datos">6519</div>
			
			<div class="col-md-1 title-datos text-gray-pad">#Int.</div>
			<div class="col-md-2 data-datos">10</div>
		</div>
		
		<div class="col-md-12 block-datos-propiedad">
			<div class="col-md-2 title-datos text-gray-pad">Colonia</div>
			<div class="col-md-10 data-datos">Ciudad Satelite</div>
		</div>
		
		<div class="col-md-12 block-datos-propiedad">
			<div class="col-md-2 title-datos text-gray-pad">Municipio</div>
			<div class="col-md-4 data-datos">Monterrey</div>
			
			<div class="col-md-1 title-datos text-gray-pad">Estado</div>
			<div class="col-md-2 data-datos">Nuevo León</div>
				 
			<div class="col-md-1 title-datos text-gray-pad">C.P</div>
			<div class="col-md-2 data-datos">64960</div>
		</div>
		
		<div class="col-md-12 block-datos-propiedad">
			<div class="col-md-2 title-datos text-gray">Due&ntilde;o</div>
			<div class="col-md-10 data-datos"><a href="">Nombre del dueño</a></div>
		</div>
				
		<div class="col-md-12 block-datos-propiedad collapse" id="collapse-datos-1">
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-2 title-datos text-gray-pad">Cta. Predial</div>
				<div class="col-md-4 data-datos">000001578</div>
				<div class="col-md-2 title-datos text-gray-pad">Costo Predial</div>
				<div class="col-md-4 data-datos">$1,000.0</div>
			</div>
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-4 title-datos text-gray-pad">Metros Cuadrados (m2)</div>
				<div class="col-md-2 data-datos">1,256</div>
				<div class="col-md-4 title-datos text-gray-pad">Número de Cuartos</div>
				<div class="col-md-2 data-datos">4</div>
			</div>
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-4 title-datos text-gray-pad">Metros Cuadrados (m2) Constr.</div>
				<div class="col-md-2 data-datos">1,256</div>
				<div class="col-md-4 title-datos text-gray-pad">Número de Baños</div>
				<div class="col-md-2 data-datos">2</div>
			</div>
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-4 title-datos text-gray-pad">Mantenimento Mensual</div>
				<div class="col-md-5 data-datos">$1,500.00</div>
			</div>
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-4 title-datos text-gray-pad">Comentarios</div>
				<div class="col-md-8 data-datos">Comentarios, comentarios varias lineas</div>
			</div>
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-4 title-datos text-gray-pad">Documentos</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-4 title-datos text-gray-pad"></div>
				<div class="col-md-4 title-datos">
					<a href="" title="Documento">Escrituras_casa_monterrey.pdf</a>
				</div>
				<div class="col-md-3">
					<a href=""><img src="css/images/vista-previa.png" alt="Vista previa"/></a>
					<a href="" style="margin-left:15px;"><img src="css/images/descargar.png" alt="Descargar"/></a>
					<a href="" style="margin-left:15px;"><img src="css/images/eliminar.png" alt="Eliminar"/></a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-4 title-datos text-gray-pad"></div>
				<div class="col-md-4 title-datos">
					<a href="" title="Documento">Escrituras_casa_monterrey.pdf</a>
				</div>
				<div class="col-md-3">
					<a href=""><img src="css/images/vista-previa.png" alt="Vista previa"/></a>
					<a href="" style="margin-left:15px;"><img src="css/images/descargar.png" alt="Descargar"/></a>
					<a href="" style="margin-left:15px;"><img src="css/images/eliminar.png" alt="Eliminar"/></a>
				</div>
			</div>
		</div>
		
		<div class="col-md-6 ver-mas">
			<a class="pull-right" data-toggle="collapse" href="#collapse-datos-1" aria-expanded="true" aria-controls="collapse-datos-1">
				<span class="caret"></span> Vér mas
			</a>
		</div>
	</div>
</div>
<!-- /Datos -->

<!-- Contrato -->
<div class="col-md-12 section-propiedad" style="padding:20px;">
	<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-contrato-propiedad-none">Contrato</div>
	<div class="col-md-10" id="section-contrato-propiedad" style="padding-bottom:17px;">
		<h3 class="text-center">
			<a href="/propiedades/agregar" title="Agregar Contrato" class="btn-add-propiedad no-decoration">
				<span class="label label-warning">Agregar Contrato</span>
			</a>
		</h3>
	</div>
</div>
<!-- /Contrato -->

<!-- Recibos y pagos -->
<div class="col-md-12 section-propiedad" style="padding:20px; margin-top:10px;">
	<div class="col-md-12 OpenSansBold title-section-propiedad" id="title-recibos-propiedad" data-toggle="collapse" href="#collapse-recibos-propiedad" aria-expanded="true" aria-controls="#collapse-recibos-propiedad">
		<div class="arrow-down-blue"></div> Facturas y pagos
	</div>
	
	<div class="col-md-12 collapse" id="collapse-recibos-propiedad" style="margin-top:20px;">
		<div class="col-md-12" style="padding:0 20px 20px 20px;">
			<div class="col-md-12" style="border:2px solid #e7e7e7; padding:initial;" id="dsb-table-recibos-pagos">
				<div class="table-responsive">
					<table class="table table-regular">
						<thead>
							<tr class="text-center">
								<td>Folio</td>
								<td>Periodo</td>
								<td>Fecha de pago</td>
								<td>Monto</td>
								<td></td>
								<td>Pagos</td>
								<td>Facturas</td>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center tr-last">
								<td>TR00001</td>
								<td>01/02/2015</td>
								<td>01/02/2015</td>
								<td>$50,000.00</td>
								<td>
									<a href="" class="a-comentarios">
										<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="bottom" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border" title="Deshacer pago">Deshacer pago</a>
									<a href="" class="a-edit">
										<img src="css/images/editar.png" alt="Editar Pago"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border" title="Ver factura">Ver factura</a>
									<a href="" class="a-edit">
										<img src="css/images/eliminar.png" alt="Eiminar Pago"/>
									</a>
								</td>
							</tr>
							<tr class="text-center tr-last">
								<td>TR00001</td>
								<td>01/02/2015</td>
								<td>01/02/2015</td>
								<td>$50,000.00</td>
								<td>
									<a href="" class="a-comentarios">
										<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border" title="Deshacer pago">Deshacer pago</a>
									<a href="" class="a-edit" title="Editar pago">
										<img src="css/images/editar.png" alt="Editar Pago"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border" title="Ver factura">Ver factura</a>
									<a href="" class="a-edit" title="Reactivar factura">
										<img src="css/images/reactivar.png" alt="Rectivar factura"/>
									</a>
								</td>
							</tr>
							<tr class="text-center">
								<td>TR00001</td>
								<td>01/02/2015</td>
								<td>01/02/2015</td>
								<td>$50,000.00</td>
								<td>
									<a href="" class="a-comentarios">
										<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border-none text-white" title="Registrar pago">Registrar pago</a>
									<a href="" class="a-edit">
										<img src="css/images/mensaje.png" alt="Editar Pago"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border-none text-white" title="Ver factura">Ver factura</a>
								</td>
							</tr>
							<tr class="text-center">
								<td>TR00001</td>
								<td>01/02/2015</td>
								<td>01/02/2015</td>
								<td>$50,000.00</td>
								<td>
									<a href="" class="a-comentarios">
										<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border-none text-white" title="Registrar pago">Registrar pago</a>
									<a href="" class="a-edit">
										<img src="css/images/mensaje.png" alt="Editar Pago"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border-none text-white" title="Ver factura">Ver factura</a>
								</td>
							</tr>
							<tr class="text-center">
								<td>TR00001</td>
								<td>01/02/2015</td>
								<td>01/02/2015</td>
								<td>$50,000.00</td>
								<td>
									<a href="" class="a-comentarios">
										<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border-none text-white" title="Registrar pago">Registrar pago</a>
									<a href="" class="a-edit">
										<img src="css/images/mensaje.png" alt="Editar Pago"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border-none text-white" title="Ver factura">Ver factura</a>
								</td>
							</tr>
							<tr class="text-center">
								<td>TR00001</td>
								<td>01/02/2015</td>
								<td>01/02/2015</td>
								<td>$50,000.00</td>
								<td>
									<a href="" class="a-comentarios">
										<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border-none text-white">Registrar pago</a>
									<a href="" class="a-edit">
										<img src="css/images/mensaje.png" alt="Editar Pago"/>
									</a>
								</td>
								<td>
									<a href="" class="a-border-none text-white" title="Ver factura">Ver factura</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Recibos y pagos -->

<!-- Estado de cuenta -->
<div class="col-md-12 section-propiedad" style="padding:20px; margin-top:10px;">
	<div class="col-md-12 OpenSansBold title-section-propiedad" id="title-cuenta-propiedad" data-toggle="collapse" href="#collapse-cuenta-propiedad" aria-expanded="true" aria-controls="#collapse-cuenta-propiedad">
		<div class="arrow-down-blue pointer"></div> <span class="pointer">Estado de cuenta</span>
		<div class="col-md-2 pull-right" id="dsb-utils" style="margin-top:0px;">
			<div class="col-md-12 pull-right">
				<a title="Descargar PDF">
					<img src="css/images/descargarPDF.png" alt="Descargar PDF" />
				</a>
				<a title="Imprimir">
					<img src="css/images/imprimir.png" alt="Imprimir" />
				</a>
			</div>
		</div>
	</div>
	
	<div class="col-md-12 collapse" id="collapse-cuenta-propiedad" style="margin-top:20px;">
		<div class="col-md-12" style="padding:0 20px 20px 20px;">
			<div class="col-md-12" style="border:2px solid #e7e7e7; padding:initial;" id="dsb-table-cuenta-propiedad">
				<div class="table-responsive">
					<table class="table table-regular">
						<thead>
							<tr class="text-center">
								<td>Folio</td>
								<td>Periodo</td>
								<td>Concepto</td>
								<td></td>
								<td>Cargo</td>
								<td>Abono</td>
								<td>Saldo</td>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center">
								<td>TR00001</td>
								<td>01/02/2015</td>
								<td style="width: 340px !important;">Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015</td>
								<td>
									<a href="" class="a-comentarios">
										<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
									</a>
								</td>
								<td>$50,000.00</td>
								<td></td>
								<td>$50,000.00</td>
							</tr>
							<tr class="text-center">
								<td>TR00001</td>
								<td>01/02/2015</td>
								<td>Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015</td>
								<td>
									<a href="" class="a-comentarios">
										<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
									</a>
								</td>
								<td>$50,000.00</td>
								<td></td>
								<td>$50,000.00</td>
							</tr>
							<tr class="text-center">
								<td>TR00001</td>
								<td>01/02/2015</td>
								<td>Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015</td>
								<td>
									<a href="" class="a-comentarios">
										<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
									</a>
								</td>
								<td>$50,000.00</td>
								<td></td>
								<td>$50,000.00</td>
							</tr>
							
							<tr>
								<td colspan="7" class="saldo-total-cuenta">
									<span class="title-cuenta">Saldo Total:</span>
									<span class="amount-cuenta">$200,000.00</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Estado de cuenta -->

<!-- Historial -->
<div class="col-md-12 section-propiedad" style="padding:20px; margin-top:10px;">
	<div class="col-md-12 OpenSansBold title-section-propiedad pointer" id="title-historial-propiedad"  data-toggle="collapse" href="#collapse-historial-propiedad" aria-expanded="true" aria-controls="#collapse-historial-propiedad">
		<div class="arrow-down-blue"></div> Historial
	</div>
	
	<div class="col-md-12 collapse" id="collapse-historial-propiedad" style="margin-top:20px;">
		<div class="col-md-12" style="padding:0 20px 20px 20px;">
			<div class="col-md-12" style="padding:initial;" id="dsb-table-historial-propiedad">
				<div class="table-responsive">
					<table class="table table-regular">
						<tbody>
							<tr>
								<td style="padding-left:30px;">
									Propiedad rentada a <a href="" title="" class="color-link underline">Nombre completo del inquilino de 01/02/2013 a 01/02/2014</a>
									<a href="" title="Borrar historial" class="pointer close-x pull-right">x</a>
								</td>
							</tr>
							<tr>
								<td style="padding-left:30px;">
									Propiedad rentada a <a href="" title="" class="color-link underline">Nombre completo del inquilino de 01/02/2013 a 01/02/2014</a>
									<a href="" title="Borrar historial" class="pointer close-x pull-right">x</a>
								</td>
							</tr>
							<tr>
								<td style="padding-left:30px;">
									Propiedad rentada a <a href="" title="" class="color-link underline">Nombre completo del inquilino de 01/02/2013 a 01/02/2014</a>
									<a href="" title="Borrar historial" class="pointer close-x pull-right">x</a>
								</td>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Historial -->

<?php include 'footer.php';?>
<script>
	$(document).ready(function() {
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});
		
		$(function(){
			$("#title-recibos-propiedad, #title-cuenta-propiedad, #title-historial-propiedad").click();
		});
	});
</script>
