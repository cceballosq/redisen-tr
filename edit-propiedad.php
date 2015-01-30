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
		
		<a href="" class="a-edit-propiedad edit-active pull-right">
			<img src="css/images/editar.png" alt="Editar Propiedad"/>
		</a>
	</div>
</div>
<!-- /Nombre, Editar y eliminar -->

<!-- Datos -->
<form name="editar-propiedad" id="editar-propeidad">
	<div class="col-md-12" style="padding:20px;">
		<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Datos</div>
		<div class="col-md-10" id="section-datos-propiedad">
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-2 title-datos text-gray-pad">Calle</div>
				<div class="col-md-4">
					<input type="text" class="form-control" name="calle-propiedad" id="calle-propiedad" required>
				</div>
				<div class="col-md-1 title-datos text-gray-pad">#Ext.</div>
				<div class="col-md-2 title-datos">
					<input type="text" class="form-control" name="n-ext-propiedad" id="n-ext-propiedad" required>
				</div>
				<div class="col-md-1 title-datos text-gray-pad">#Int.</div>
				<div class="col-md-2 title-datos">
					<input type="text" class="form-control" name="n-int-propiedad" id="n-int-propiedad">
				</div>
			</div>
			
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-2 title-datos text-gray-pad">Colonia</div>
				<div class="col-md-10">
					<input type="text" class="form-control" name="colonia-propiedad" id="colonia-propiedad" required>
				</div>
			</div>
			
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-2 title-datos text-gray-pad">Municipio</div>
				<div class="col-md-4">
					<input type="text" class="form-control" name="municipio-propiedad" id="municipio-propiedad" required>
				</div>
				<div class="col-md-1 title-datos text-gray-pad">Estado</div>
				<div class="col-md-2 title-datos">
					<input type="text" class="form-control" name="estado-propiedad" id="estado-propiedad" required>
				</div>
				<div class="col-md-1 title-datos text-gray-pad">C.P</div>
				<div class="col-md-2 title-datos">
					<input type="text" class="form-control" name="cp-propiedad" id="cp-propiedad">
				</div>
			</div>
			
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-2 title-datos text-gray">Due&ntilde;o</div>
				<div class="col-md-10 data-datos"><a href="">Nombre del dueño</a></div>
			</div>
			
			<div class="col-md-12 block-datos-propiedad collapse" id="collapse-datos-1">
				<div class="col-md-12 block-datos-propiedad">
					<div class="col-md-2 title-datos text-gray-pad">Cta. Predial</div>
					<div class="col-md-4">
						<input type="text" class="form-control" name="cta-predial-propiedad" id="cta-predial-propiedad">
					</div>
					<div class="col-md-2 title-datos text-gray-pad">Costo Predial</div>
					<div class="col-md-4 title-datos">
						<input type="text" class="form-control" name="costo-predial-propiedad" id="costo-predial-propiedad">
					</div>
				</div>
				<div class="col-md-12 block-datos-propiedad">
					<div class="col-md-4 title-datos text-gray-pad">Metros Cuadrados (m2)</div>
					<div class="col-md-2">
						<input type="text" class="form-control" name="metros-cuadrados-propiedad" id="metros-cuadrados-propiedad">
					</div>
					<div class="col-md-4 title-datos text-gray-pad">Número de Cuartos</div>
					<div class="col-md-2 title-datos">
						<input type="text" class="form-control" name="numero-cuartos-propiedad" id="numero-cuartos-propiedad">
					</div>
				</div>
				<div class="col-md-12 block-datos-propiedad">
					<div class="col-md-4 title-datos text-gray-pad">Metros Cuadrados (m2) Constr.</div>
					<div class="col-md-2">
						<input type="text" class="form-control" name="metros-cuadrados-constr-propiedad" id="metros-cuadrados-constr-propiedad">
					</div>
					<div class="col-md-4 title-datos text-gray-pad">Número de Baños</div>
					<div class="col-md-2 title-datos">
						<input type="text" class="form-control" name="numero-banos-propiedad" id="numero-banos-propiedad">
					</div>
				</div>
				<div class="col-md-12 block-datos-propiedad">
					<div class="col-md-4 title-datos text-gray-pad">Mantenimento Mensual</div>
					<div class="col-md-5">
						<input type="text" class="form-control" name="mantenimiento-propiedad" id="mantenimiento-propiedad">
					</div>
				</div>
				<div class="col-md-12 block-datos-propiedad">
					<div class="col-md-4 title-datos text-gray-pad">Comentarios</div>
					<div class="col-md-8">
						<textarea name="comentarios-propiedad" id="comentarios-propiedad" class="form-control" rows="3"></textarea>
					</div>
				</div>
				
				<div class="col-md-12 block-datos-propiedad">
					<div class="col-md-4 title-datos text-gray-pad">Documentos</div>
					
					<div class="col-md-6 input-group">
						<input type="text" class="form-control" readonly>
						<span class="input-group-btn">
							<span class="btn btn-file btn-finish no-decoration" style="border:1px solid #ccc;">
								Seleccionar <input type="file" multiple>
							</span>
						</span>
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
			
			<div class="col-md-6 pull-right">
				<h4 class="pull-right">
					<a title="Guardar Cambios" class="btn-blue no-decoration" id="save-propiedad">
						<span class="label label-blue">Guardar Cambios</span>
					</a>
				</h4>
				
				<h4 class="pull-right" style="margin-right:20px;">
					<a title="Cancelar" class="btn-finish no-decoration" id="cancel-propiedad">
						<span class="label label-finish">Cancelar</span>
					</a>
				</h4>
			</div>
			
			<div class="col-md-6 ver-mas">
				<a class="pull-right" data-toggle="collapse" href="#collapse-datos-1" aria-expanded="true" aria-controls="collapse-datos-1">
					<span class="caret"></span> Vér mas
				</a>
			</div>
		</div>
	</div>
</form>
<!-- /Datos -->

<!-- Contrato -->
<form name="editar-contrato" id="editar-contrato">
	<div class="col-md-12 section-propiedad" style="padding:20px;">
		<div class="col-md-2 pull-right" style="margin-top: -15px;">
			<a href="" class="a-trash left-10px pull-right">
				<img src="css/images/trash.png" alt="Borrar Contrato"/>
			</a>
			
			<a href="" class="a-edit-propiedad edit-active pull-right">
				<img src="css/images/editar.png" alt="Editar Contrato"/>
			</a>
		</div>
		
		<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-contrato-propiedad">Contrato</div>
		<div class="col-md-10" id="section-contrato-propiedad" >
			<div class="col-md-12">
				<div class="col-md-12 block-datos-propiedad">
					<div class="col-md-2 title-datos text-gray-pad">Fecha de Inicio</div>
					<div class="col-md-4">
						<input type="text" class="form-control" name="fecha-inicio-contrato" id="fecha-inicio-contrato">
					</div>
					
					<div class="col-md-2 title-datos text-gray-pad">Fecha de Fin</div>
					<div class="col-md-4 title-datos">
						<input type="text" class="form-control" name="fecha-fin-contrato" id="fecha-fin-contrato">
					</div>
				</div>
			</div>
			<div class="col-md-12" style="padding-top:25px;">
				<div class="col-md-2 text-gray">Inquilino</div>
				<div class="col-md-4"><a href="" title="" class="color-link underline">Nombre completo del inquilino</a></div>
				
				<div class="col-md-2 title-datos text-gray-pad">Monto</div>
				<div class="col-md-4 title-datos">
					<input type="text" class="form-control" name="monto-contrato" id="monto-contrato">
				</div>
			</div>
			
			<div class="col-md-12 collapse" id="collapse-contrato-1" style="margin-top:40px; border-top:1px solid #b3b3b3;">
				<div class="col-md-12" style="padding:20px 0 0 0;">
					<div class="col-md-3 text-gray">Multa moratoria</div>
					<div class="col-md-3"><input type="text" class="form-control" name="multa-contrato" id="multa-contrato"></div>
					
					<div class="col-md-3 text-gray">Días para aplicar multa</div>
					<div class="col-md-3"><input type="text" class="form-control" name="dias-multa-contrato" id="dias-multa-contrato"></div>
				</div>
				
				<div class="col-md-12" style="padding:20px 0 0 0;">
					<div class="col-md-3 text-gray">Tasa de interés moratoria</div>
					<div class="col-md-3">
						<div class="col-md-7" style="padding:initial;">
							<input type="text" class="form-control" name="tasa-interes-contrato" id="tasa-interes-contrato">
						</div>
						<div class="col-md-3" style="padding:initial;">
							<input type="text" class="form-control" value="%" placeholder="%" name="porcentaje-contrato" disabled>
						</div>
					</div>
					
					<div class="col-md-3 text-gray">Periodicidad de tasa</div>
					<div class="col-md-3">
						<select name="periodicidad-tasa-contrato" id="periodicidad-tasa-contrato" class="form-control box-shadow">
							<option>Mensual</option>
							<option>Semestral</option>
							<option selected="selected">Anual</option>
						</select>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:20px 0 0 0;">
					<div class="col-md-3 text-gray">Días para aplicar interés</div>
					<div class="col-md-3"><input type="text" class="form-control" name="dias-interes-contrato" id="dias-interes-contrato"></div>
				</div>
				
				<div class="col-md-12" style="padding:20px 0 0 0;">
					<div class="col-md-3 text-gray">Adeudo anterior</div>
					<div class="col-md-3"><input type="text" class="form-control" name="aduedo-contrato" id="aduedo-contrato"></div>
					
					<div class="col-md-3 text-gray">Fiador</div>
					<div class="col-md-3"><input type="text" class="form-control" name="fiador-contrato" id="fiador-contrato"></div>
				</div>
				
				<div class="col-md-12 block-datos-propiedad">
					<div class="col-md-3 title-datos text-gray-pad">Comentarios</div>
					<div class="col-md-9">
						<textarea name="comentarios-propiedad" id="comentarios-propiedad" class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class="col-md-12 block-datos-propiedad">
					<div class="col-md-3 title-datos text-gray-pad">Documentos</div>
					<div class="col-md-9">
						<input type="file" name="documento-propiedad" id="documento-propiedad" class="form-control"/>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-3 title-datos text-gray-pad"></div>
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
					<div class="col-md-3 title-datos text-gray-pad"></div>
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
			
			<div class="col-md-6 pull-right">
				<h4 class="pull-right">
					<a title="Guardar Cambios" class="btn-blue no-decoration" id="save-propiedad">
						<span class="label label-blue">Guardar Cambios</span>
					</a>
				</h4>
				
				<h4 class="pull-right" style="margin-right:20px;">
					<a title="Cancelar" class="btn-finish no-decoration" id="cancel-propiedad">
						<span class="label label-finish">Cancelar</span>
					</a>
				</h4>
			</div>
			
			<div class="col-md-6 ver-mas">
				<a class="pull-right" data-toggle="collapse" href="#collapse-contrato-1" aria-expanded="true" aria-controls="collapse-contrato-1">
					<span class="caret"></span> Vér mas
				</a>
			</div>
		</div>
	</div>
</form>
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

<!-- Eliminar Propiedad -->
<div class="col-md-12" style="padding:60px 0 10px 0px;">
	<div class="col-md-12 text-center">
		<a href="" class="text-gray" title="Eliminar propiedad">Eliminar esta Propiedad</a>
	</div>
</div>
<!-- /Eliminar Propiedad -->

<?php include 'footer.php';?>
<script>
	$(document).ready(function() {
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});
		
		$(function(){
			$("#title-recibos-propiedad, #title-cuenta-propiedad, #title-historial-propiedad").click();
		});
		
		$(document).on('change', '.btn-file :file', function() {
			var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [numFiles, label]);
		});

		$(document).ready( function() {
			$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
				var input = $(this).parents('.input-group').find(':text'),
				log = numFiles > 1 ? numFiles + ' files selected' : label;

				if( input.length ) {
					input.val(log);
				} else {
					if( log ) alert(log);
				}
			});
		});
	});
</script>
