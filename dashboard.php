<?php include 'header.php';?>

<div class="col-md-12 pull-right">
	<h3 class="pull-right">
		<a href="/propiedades/agregar" title="Agregar propiedad" class="btn-add-propiedad no-decoration">
			<span class="label label-warning">Agregar Propiedad</span>
		</a>
	</h3>
</div>

<!-- Conunter Bar -->
<div class="col-md-12" id="counter-bar">
	<div class="col-md-2 col-md-offset-1">
		<div class="col-md-12 center">Propiedades<br/>Totales</div>
		<div class="col-md-12 center number-counter-bar">
			03 <img src="css/images/dashboard-propiedades.png" alt="Propiedades totales">
		</div>
	</div>
	<div class="col-md-2">
		<div class="col-md-12 center">Propiedades<br/>Rentadas</div>
		<div class="col-md-12 center number-counter-bar">
			01 <img src="css/images/dashboard-rentadas.png" alt="Propiedades rentadas">
		</div>
	</div>
	<div class="col-md-2">
		<div class="col-md-12 center">Rentas<br/>Atrasadas</div>
		<div class="col-md-12 center number-counter-bar">
			02 <img src="css/images/dashboard-atrasadas.png" alt="Rentas atrasadas">
		</div>
	</div>
	<div class="col-md-2">
		<div class="col-md-12 center">Adeudos<br/>Totales</div>
		<div class="col-md-12 center money-counter-bar">
			$900,000.00 <img src="css/images/dashboard-adeudos.png" alt="Rentas atrasadas">
		</div>
	</div>
	<div class="col-md-2">
		<div class="col-md-12 center">Ingresos<br/>Totales</div>
		<div class="col-md-12 center money-counter-bar">
			$120,000.00 <img src="css/images/dashboard-ingresos.png" alt="Rentas atrasadas">
		</div>
	</div>
</div>
<!-- Fin Conunter Bar -->

<div class="col-md-12" id="dsb-renta-adeudo">
	<!-- Rentas Pagadas/Por Pagar -->
	<div class="col-md-5 col-md-offset-1" style="padding:initial;">
		<div class="col-md-11" style="border:1px solid #ccc; padding:initial;">
			<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px;">
				<div class="section-header">
					<img src="css/images/dashborad-tabla-rentas-pagadas.png" alt="Rentas Pagadas/Por Pagar"/>
					<span>Rentas Pagadas/Por Pagar</span>
					<img src="css/images/dashboard-info-tooltip.png" class="info-icon pull-right" alt="Información" data-toggle="tooltip" data-placement="bottom" title="Visualiza tus rentas pagadas y por pagar por monto ($) o cantidad (#)."/>
				</div>
			</div>
			
			<div class="col-md-12 select-control-ds">
				<div class="col-md-6"></div>
				<div class="col-md-6">
					<select name="chart-rentas" id="chart-rentas" class="form-control box-shadow">
						<option value="chart-montos" selected="selected">Montos ($)</option>
						<option value="chart-propiedades" > Propiedades (#)</option>
					</select>
				</div>
			</div>
			
			<div class="col-md-12" style="padding:20px;">
				<div id="chart-propiedades" class="col-md-12" style="min-width: 310px; height: 250px; margin: 0 auto;"></div>
				<div id="chart-montos" class="col-md-12" style="min-width: 310px; height: 250px; margin: 0 auto"></div>
			</div>
		</div>
	</div>
	
	<!-- Adeudos -->
	<div class="col-md-5" style="padding:initial;">
		<div class="col-md-1"></div>
		<div class="col-md-11" style="border:1px solid #ccc; padding:initial;">
			<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px;">
				<div class="section-header">
					<img src="css/images/dashboard-tabla-adeudos.png" alt="Adeudos"/>
					<span>Adeudos</span>
					<img src="css/images/dashboard-info-tooltip.png" class="info-icon pull-right" alt="Información" data-toggle="tooltip" data-placement="bottom" title="Visualiza tus adeudos por inquilino. Expande para ver el detalle."/>
				</div>
			</div>
			
			<div class="col-md-12" style="padding:initial;"  id="dsb-table-adeudos">
				<div class="table-responsive">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<div class="pointer" data-toggle="collapse" href="#collapse-adeudo-1" aria-expanded="true" aria-controls="collapse-adeudo-1">
										<div class="arrow-left"></div>
										<span class="underline">Inquilino 1</span>
										<span class="pull-right">$999,999.99</span>
									</div>
									<div class="collapse text-center span-10" id="collapse-adeudo-1">
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span><br/>
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span><br/>
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="pointer" data-toggle="collapse" href="#collapse-adeudo-2" aria-expanded="true" aria-controls="collapse-adeudo-2">
										<div class="arrow-left"></div>
										<span class="underline">Inquilino 1</span>
										<span class="pull-right">$999,999.99</span>
									</div>
									<div class="collapse text-center span-10" id="collapse-adeudo-2">
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span><br/>
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span><br/>
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="pointer" data-toggle="collapse" href="#collapse-adeudo-3" aria-expanded="true" aria-controls="collapse-adeudo-3">
										<div class="arrow-left"></div>
										<span class="underline">Inquilino 1</span>
										<span class="pull-right">$999,999.99</span>
									</div>
									<div class="collapse text-center span-10" id="collapse-adeudo-3">
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span><br/>
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span><br/>
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span>
									</div>
								</td>
							</tr>
								<tr>
								<td>
									<div class="pointer" data-toggle="collapse" href="#collapse-adeudo-4" aria-expanded="true" aria-controls="collapse-adeudo-4">
										<div class="arrow-left"></div>
										<span class="underline">Inquilino 1</span>
										<span class="pull-right">$999,999.99</span>
									</div>
									<div class="collapse text-center span-10" id="collapse-adeudo-4">
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span><br/>
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span><br/>
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span>
									</div>
								</td>
							</tr>
								<tr>
								<td>
									<div class="pointer" data-toggle="collapse" href="#collapse-adeudo-5" aria-expanded="true" aria-controls="collapse-adeudo-5">
										<div class="arrow-left"></div>
										<span class="underline">Inquilino 1</span>
										<span class="pull-right">$999,999.99</span>
									</div>
									<div class="collapse text-center span-10" id="collapse-adeudo-5">
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span><br/>
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span><br/>
										<span>DD/MM/AA</span> <span>Propiedad 1</span> <span>$999,999.00</span>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="col-md-12 table-goto-link">
				<a href="" class="pull-right">Ir a Inquilinos ></a>
			</div>
		</div>
	</div>
</div>

<!-- Recibos y Pagos -->
<div class="col-md-12" id="dsb-recibos-pagos">
	<div class="col-md-10 col-md-offset-1" style="border:1px solid #ccc; padding:initial; ">
		<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px;">
			<div class="section-header section-header-2">
				<img src="css/images/dashboard-tabla-recibos-pagos.png" alt="Recibos y Pagos"/>
				<span>Recibos y Pagos</span>
				<img src="css/images/dashboard-info-tooltip.png" class="info-icon pull-right" alt="Información" data-toggle="tooltip" data-placement="bottom" title="Registra pagos y genera los recibos/facturas de las propiedades que requieras."/>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="col-md-1"></div>
			<div class="col-md-11" style="padding:20px;">
				<div class="col-md-1 ver-select">Ver: </div>
				
				<div class="col-md-3">
					<select name="" class="form-control box-shadow">
						<option>Facturas</option>
						<option>Recibos</option>
						<option>Todos</option>
					</select>
				</div>
				<div class="col-md-4">
					<select name="" class="form-control box-shadow">
						<option>Mensual</option>
						<option>Semestral</option>
						<option selected="selected">Anual</option>
					</select>
				</div>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="col-md-12" style="padding:0 20px 20px 20px;">
				<div class="col-md-12" style="border:2px solid #e7e7e7; padding:initial;" id="dsb-table-recibos-pagos">
					<div class="table-responsive">
						<table class="table table-regular">
							<thead>
								<tr class="text-center">
									<td>Folio</td>
									<td>Propiedad</td>
									<td>Periodo</td>
									<td>Subtotal</td>
									<td>Total</td>
									<td></td>
									<td>Pagos</td>
									<td>Facturas</td>
								</tr>
							</thead>
							<tbody>
								<tr class="text-center tr-last">
									<td>TR00001</td>
									<td><a href="" title="Propiedad">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="bottom" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/editar.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border">Generar factura</a>
										<a href="" class="a-edit">
											<img src="css/images/eliminar.png" alt="Eiminar Pago"/>
										</a>
									</td>
								</tr>
								<tr class="text-center tr-last">
									<td>TR00001</td>
									<td><a href="" title="Propiedad" class="underline">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/editar.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border">Generar factura</a>
										<a href="" class="a-edit">
											<img src="css/images/eliminar.png" alt="Eiminar Pago"/>
										</a>
									</td>
								</tr>
								<tr class="text-center">
									<td>TR00001</td>
									<td><a href="" title="Propiedad" class="underline">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Generar factura</a>
									</td>
								</tr>
								<tr class="text-center">
									<td>TR00001</td>
									<td><a href="" title="Propiedad" class="underline">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Generar factura</a>
									</td>
								</tr>
								<tr class="text-center">
									<td>TR00001</td>
									<td><a href="" title="Propiedad" class="underline">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Generar factura</a>
									</td>
								</tr>
								<tr class="text-center">
									<td>TR00001</td>
									<td><a href="" title="Propiedad" class="underline">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Generar factura</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12" id="dsb-contratos-ingresos">
	<!-- Contratos proximos a vencer -->
	<div class="col-md-5 col-md-offset-1" style="padding:initial;">
		<div class="col-md-11" style="border:1px solid #ccc; padding:initial;">
			<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px;">
				<div class="section-header section-header-2">
					<img src="css/images/dashboard-tabla-contratos.png" alt="Contratos proximos a vencer"/>
					<span>Contratos Pr&oacute;ximos a Vencer</span>
					<img src="css/images/dashboard-info-tooltip.png" class="info-icon pull-right" alt="Información" data-toggle="tooltip" data-placement="bottom" title="Visualiza tus próximos contratos a vencer."/>
				</div>
			</div>
			
			<div class="col-md-12 select-control-ds">
				<div class="col-md-5"></div>
				<div class="col-md-7">
					<select name="" class="form-control box-shadow">
						<option>En los próximos 3 meses</option>
						<option>En los próximos 6 meses</option>
						<option>En los próximos 12 meses</option>
					</select>
				</div>
			</div>
			
			<div class="col-md-12" style="padding:initial;"  id="dsb-table-contratos">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr class="text-center">
								<td>Vence</td>
								<td>Propiedad</td>
								<td>Inquilio</td>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center">
								<td>01/02/2015</td>
								<td>Propiedad 1</td>
								<td>Inquilino 1</td>
							</tr>
							<tr class="text-center">
								<td>01/02/2015</td>
								<td>Propiedad 1</td>
								<td>Inquilino 1</td>
							</tr>
							<tr class="text-center">
								<td>01/02/2015</td>
								<td>Propiedad 1</td>
								<td>Inquilino 1</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Ingresos -->
	<div class="col-md-5" style="padding:initial;">
		<div class="col-md-1"></div>
		<div class="col-md-11" style="border:1px solid #ccc; padding:initial;">
			<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px;">
				<div class="section-header">
					<img src="css/images/dashboard-tabla-ingresos.png" alt="Ingresos"/>
					<span>Ingresos</span>
					<img src="css/images/dashboard-info-tooltip.png" class="info-icon pull-right" alt="Información" data-toggle="tooltip" data-placement="bottom" title="Visualiza tus ingresos y ordénalos por mes o por inquilino."/>
				</div>
			</div>
			
			<div class="col-md-12" style="padding:20px; ">
				<div class="col-md-1" style="margin:8px 0 0 0;">Ver: </div>
				
				<div class="col-md-5">
					<select name="" class="form-control box-shadow">
						<option>Facturas</option>
						<option>Recibos</option>
						<option>Todos</option>
					</select>
				</div>
				
				<div class="col-md-6">
					<select name="" class="form-control box-shadow">
						<option>&Uacute;ltimos 3 meses</option>
						<option>&Uacute;ltimos 6 meses</option>
						<option>&Uacute;ltimos 12 meses</option>
					</select>
				</div>
			</div>
			
			<div class="col-md-12" style="padding:initial;"  id="dsb-table-ingresos">
				<div class="table-responsive">
					<table class="table table-striped tablesorter">
						<thead>
							<tr class="pointer">
								<td>Mes</td>
								<td>Inquilio</td>
								<td>Total</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Dic</td>
								<td>Inquilio 1</td>
								<td>
									<div>
										<span aria-controls="collapse-ingresos-1" href="#collapse-ingresos-1" class="pointer underline"  aria-expanded="true" data-toggle="collapse">
											$10,000.00
										</span><br/>
										<p class="collapse collapse-ingresos" id="collapse-ingresos-1">
											Importe - 1<br/>
											IVA - 1<br/>
											Retención ISR - 1<br/>
											Retención IVA - 1
										</p>
									</div>
								</td>
							</tr>
							<tr>
								<td>Ene</td>
								<td>Inquilio 2</td>
								<td>
									<div>
										<span aria-controls="collapse-ingresos-2" href="#collapse-ingresos-2" class="underline pointer"  aria-expanded="true" data-toggle="collapse">
											$90,000.00
										</span>
										<div class="collapse collapse-ingresos" id="collapse-ingresos-2">
											Importe - 9<br/>
											IVA - 100<br/>
											Retención ISR - 9<br/>
											Retención IVA - 9
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Oct</td>
								<td>Inquilio 3</td>
								<td>
									<div>
										<span aria-controls="collapse-ingresos-3" href="#collapse-ingresos-3" class="pointer underline"  aria-expanded="true" data-toggle="collapse">
											$2,000.00
										</span>
										<div class="collapse collapse-ingresos" id="collapse-ingresos-3">
											Importe - 2<br/>
											IVA - 2<br/>
											Retención ISR - 2<br/>
											Retención IVA - 2
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-11" id="dsb-utils">
	<div class="col-md-2 col-md-offset-1 pull-right">
		<a title="Descargar PDF">
			<img src="css/images/descargarPDF.png" alt="Descargar PDF" />
		</a>
		<a title="Imprimir">
			<img src="css/images/imprimir.png" alt="Imprimir" />
		</a>
	</div>
</div>

<?php include 'footer.php';?>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>
$(document).ready(function() {
	$(function(){
		$(".tablesorter").tablesorter();
	});
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});
	
	$(function () {
		$("#chart-rentas").change( function () {
			$("#chart-montos").hide();
			$("#chart-propiedades").hide();
			
			$("#" + $( "#chart-rentas option:selected" ).val()).show();
		});
		
		$('#chart-propiedades').highcharts({
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			colors: ['#afafaf', '#db2a2a'],
			xAxis: {
				categories: ['Jul 15', 'Ago 15', 'Sep 15', 'Oct 15', 'Nov 15', 'Dic 15']
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Por Propiededes (#)'
				}/*,
				stackLabels: {
					enabled: true,
					style: {
						fontWeight: 'bold',
						color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
					}
				}*/
			},
			tooltip: {
				formatter: function () {
					return '<b>' + this.x + '</b><br/>' + this.series.name + ': ' + this.y + '<br/>' +
					'Total: ' + this.point.stackTotal;
				}
			},
			plotOptions: {
				column: {
					stacking: 'normal',
					dataLabels: {
						enabled: true,
						color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
						style: {
							textShadow: '0 0 3px black'
						}
					}
				}
			},
			series: [
				{
					name: 'Pagada',
					data: [5, 3, 4, 7, 2, 1]
				}, {
					name: 'Por pagar',
					data: [2, 2, 3, 2, 1, 6]
				}
			],
			credits: {
				enabled: false
			}
		});
		
		$('#chart-montos').highcharts({
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			colors: ['#afafaf', '#db2a2a'],
			xAxis: {
				categories: ['Jul 15', 'Ago 15', 'Sep 15', 'Oct 15', 'Nov 15', 'Dic 15']
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Por Montos ($)'
				}/*,
				stackLabels: {
					enabled: true,
					style: {
						fontWeight: 'bold',
						color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
					}
				}*/
			},
			tooltip: {
				formatter: function () {
					return '<b>' + this.x + '</b><br/>' + this.series.name + ': $' + this.y + '<br/>' +
					'Total: $' + this.point.stackTotal;
				}
			},
			plotOptions: {
				column: {
					stacking: 'normal',
					dataLabels: {
						enabled: true,
						color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
						style: {
							textShadow: '0 0 3px black'
						}
					}
				}
			},
			series: [
				{
					name: 'Pagada',
					data: [10, 2, 3, 5, 12, 3]
				}, {
					name: 'Por pagar',
					data: [10, 4, 5, 2, 3, 8]
				}
			],
			credits: {
				enabled: false
			}
		});
		
		$("#chart-propiedades").hide();
	});
});
</script>
