<?php include 'header.php';?>

<div class="col-md-12 pull-right">
	<div class="col-md-6">
		<ol class="breadcrumb">
			<li><a href="">Inicio</a></li>
			<li class="active"><a href="#">Propiedades</a></li>
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

<div class="col-md-12 pull-right" style="padding:20px 5px 20px 0;">
	<div class="col-md-6"></div>
	<div class="col-md-6 pull-right input-group">
		<div class="col-md-5">
			<input type="text" class="form-control col-md-6" placeholder="Buscar una propiedad" name="srch-term" id="srch-term">
		</div>
		
		
		<div class="col-md-1 input-group-btn" style="margin-left:-33px;">
			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		</div>
		
		<div class="col-md-6">
			<select name="" class="col-md-4 form-control box-shadow" style="margin-left:40px;">
				<option>Ordernar por...</option>
				<option>Nombre</option>
				<option>Dueño</option>
				<option>Inquilino</option>
			</select>
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="col-md-11 col-md-offset-1 propiedad-table section-propiedad">
		<div class="col-md-12 border-bottom">
			<div class="col-md-4">
				<div class="col-md-1"><div class="propiedad-libre"></div></div>
				
				<div class="col-md-5">
					<a href="" title="Propiedad">
						<img src="css/images/img-propiedad.png" alt="Propiedad" class="img-propiedad"/>
					</a>
				</div>
				
				<div class="col-md-5 link-propiedad">
					<a href="" class="nombre-propiedad OpenSansBold">
						Casa de Monterrey en Satélite Número 1-A
					</a>
				</div>
			</div>
			<div class="col-md-4 text-propiedad">
				Calle paseo del acueducto, #6519<br/>
				Colonia Ciudad Satelite<br/>
				Monterrey, 64960
			</div>
			<div class="col-md-4 text-propiedad">
				<p>Dueño: <a href="" title="Dueño">Daniela Alejandra Araico García</a></p>
				<p>Inquilino:</p>
			</div>
		</div>
		<div class="col-md-12 border-bottom">
			<div class="col-md-4">
				<div class="col-md-1"><div class="propiedad-libre"></div></div>
				
				<div class="col-md-5">
					<a href="" title="Propiedad">
						<img src="css/images/img-propiedad.png" alt="Propiedad" class="img-propiedad"/>
					</a>
				</div>
				
				<div class="col-md-5 link-propiedad">
					<a href="" class="nombre-propiedad OpenSansBold">
						Propiedad 2
					</a>
				</div>
			</div>
			<div class="col-md-4 text-propiedad">
				Calle paseo del acueducto, #6519<br/>
				Colonia Ciudad Satelite<br/>
				Monterrey, 64960
			</div>
			<div class="col-md-4 text-propiedad">
				<p>Dueño: <a href="" title="Dueño">Daniela Alejandra Araico García</a></p>
				<p>Inquilino:</p>
			</div>
		</div>
		<div class="col-md-12 border-bottom">
			<div class="col-md-4">
				<div class="col-md-1"></div>
				
				<div class="col-md-5">
					<a href="" title="Propiedad">
						<img src="css/images/img-propiedad.png" alt="Propiedad" class="img-propiedad"/>
					</a>
				</div>
				
				<div class="col-md-5 link-propiedad">
					<a href="" class="nombre-propiedad OpenSansBold">
						Propiedad 3
					</a>
				</div>
			</div>
			<div class="col-md-4 text-propiedad">
				Calle paseo del acueducto, #6519<br/>
				Colonia Ciudad Satelite<br/>
				Monterrey, 64960
			</div>
			<div class="col-md-4 text-propiedad">
				<p>Dueño: <a href="" title="Dueño">Daniela Alejandra Araico García</a></p>
				<p>Inquilino: <a href="" title="Inquilino">Daniela Alejandra Araico García</a></p>
			</div>
		</div>
		<div class="col-md-12 border-bottom">
			<div class="col-md-4">
				<div class="col-md-1"></div>
				
				<div class="col-md-5">
					<a href="" title="Propiedad">
						<img src="css/images/img-propiedad.png" alt="Propiedad" class="img-propiedad"/>
					</a>
				</div>
				
				<div class="col-md-5 link-propiedad">
					<a href="" class="nombre-propiedad OpenSansBold">
						Propiedad 4
					</a>
				</div>
			</div>
			<div class="col-md-4 text-propiedad">
				Calle paseo del acueducto, #6519<br/>
				Colonia Ciudad Satelite<br/>
				Monterrey, 64960
			</div>
			<div class="col-md-4 text-propiedad">
				<p>Dueño: <a href="" title="Dueño">Daniela Alejandra Araico García</a></p>
				<p>Inquilino: <a href="" title="Inquilino">Daniela Alejandra Araico García</a></p>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php';?>
