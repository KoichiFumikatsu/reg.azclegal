<!DOCTYPE html>
<html lang="es">
<?php
	include('header.php');
	switch ($_GET['apply']) {
		case 'AB':  //Case para los Abogados Bilingues - seleccion de preguntas y envio para Santi y Marisol
		?>
			<main id="" class="">
			 	<section id="sectionCustom" class="sectionCustom">
			 		<div class="container">
			      		<div class="row">
			        		<div class="col-lg-12">
			          			<div class="card">
			            			<div class="card-body">
			              				<h5 class="card-title">Abogado Bilingue</h5>
			              					<!-- Vertical Form -->
							                <div class="col-md-12">Personal Information</div>
			              					<hr>
							            <form class="row g-3" method="POST" action="success.php">
							                <div class="col-md-6">
							                	<input type="text" class="form-control" placeholder="firstName" name="firstName">
							                </div>
							                <div class="col-md-6">
							                  	<input type="text" class="form-control" placeholder="secondName" name="secondName">
							                </div>
							                <div class="col-md-6">
							                  	<input type="text" class="form-control" placeholder="firstLastName" name="firstLastName">
							                </div>
							                <div class="col-md-6">
							                  	<input type="text" class="form-control" placeholder="secondLastName" name="secondLastName">
							                </div>
							                <div class="col-md-3">
							                  	<input type="text" class="form-control" placeholder="country" name="country">
							                </div>
							                <div class="col-md-3">
								                <select id="inputState" class="form-select" name="city">
								                	<option selected>selectCity</option>
								                    <option value="1">Cali</option>
								                    <option value="2">Medellin</option>
								                    <option value="3">Bogota?</option>
								                </select>
							                </div>
							                <div class="col-md-3">
							                  	<input type="text" class="form-control" placeholder="mail" name="mail">
							                </div>
							                <div class="col-md-3">
							                  	<input type="text" class="form-control" placeholder="phoneNumber" name="phoneNumber">
							                </div>
							                <div class="col-md-12">Documentacion</div>
							                <hr>
							                <div class="col-md-3">
							                	<label>choose type of ID</label>
							                </div>
							                <div class="col-md-2">
								                <select id="inputState" class="form-select" name="typeIdentification">
								                	<option selected>typeIdentification</option>
								                    <option value="1">Cedula de Ciudadania</option>
								                    <option value="2">Documento de Extranjeria</option>
								                    <option value="3">Pasaporte</option>
								                    <option value="4">NIT</option>
								                </select>
							                </div>
							                <div class="col-md-3">
							                	<label>choose english's Level</label>
							                </div>
							                <div class="col-md-2">
								                <select id="inputState" class="form-select" name="level">
								                	<option selected>Level English</option>
								                    <option value="1">Native C2</option>
								                    <option value="2">Advanced B2/C1</option>
								                    <option value="3">Intermedium B1</option>
								                </select>
							                </div>
							                    <div class="col-md-3">
							                	<label>Upload File of ID</label>
							                </div>
							                <div class="col-md-9">
							                  	<input type="file" class="form-control" placeholder="identificationPDF" name="identificationPDF">
							                </div>
							                <div class="col-md-3">
							                	<label>Upload File of English's Level</label>
							                </div>
							                <div class="col-md-9">
							                  	<input type="file" class="form-control" placeholder="levelEnglish" name="levelPDF">
							                </div>
							                <div class="col-md-3">
							                	<label>photo</label>
							                </div>
							                <div class="col-md-9">
							                  	<input type="file" class="form-control" placeholder="photo" name="photo">
							                </div>
							                <div class="col-md-3">
							                	<label>curriculum</label>
							                </div>
							                <div class="col-md-9">
							                  	<input type="file" class="form-control" placeholder="curriculum" name="curriculum">
							                </div>
							                <div class="col-md-3">
							                	<label>study</label>
							                </div>
							                <div class="col-md-9">
							                  	<input type="file" class="form-control" placeholder="study" name="study">
							                </div>
							                <div class="col-md-3">
							                	<label>bank</label>
							                </div>
							                <div class="col-md-9">
							                  	<input type="file" class="form-control" placeholder="bank" name="bank">
							                </div>	
							                <div class="col-md-3">
							                	<label>eps</label>
							                </div>
							                <div class="col-md-9">
							                  	<input type="file" class="form-control" placeholder="eps" name="eps">
							                </div>	
							                <div class="col-md-3">
							                	<label>pension</label>
							                </div>
							                <div class="col-md-9">
							                  	<input type="file" class="form-control" placeholder="pension" name="pension">
							                </div>	
							                <div class="col-md-3">
							                	<label>procard</label>
							                </div>	
							                <div class="col-md-9">
							                  	<input type="file" class="form-control" placeholder="procard" name="procard">
							                </div>						                
							                <div class="text-center">
							                  	<button type="submit" class="btn btn-primary" name="request">Submit</button>
							                  	<button type="reset" class="btn btn-secondary">Reset</button>
							                </div>
							            </form><!-- End No Labels Form -->
						            </div>
						        </div>
			        		</div>
			          	</div>
			      	</div>
			    </section>
			</main>
		<?php
			break;
		case 'AS': //Case para los Agentes de Servicio - seleccion de preguntas y envio para joshua
		?>
			<main id="" class="">
			 	<section id="sectionCustom" class="sectionCustom">
			 		<div class="container">
			      		<div class="row">
			        		<div class="col-lg-12">
			          			<div class="card">
			            			<div class="card-body">
			              				<h5 class="card-title">Agente de Servicio</h5>
			              					<!-- Vertical Form -->
							            <form class="row g-3">
							                <div class="col-md-12">
							                	<input type="text" class="form-control" placeholder="Your Name">
							                </div>
							                <div class="col-md-6">
							                  	<input type="email" class="form-control" placeholder="Email">
							                </div>
							                <div class="col-md-6">
							                  	<input type="password" class="form-control" placeholder="Password">
							                </div>
							                <div class="col-12">
							                  	<input type="text" class="form-control" placeholder="Address">
							                </div>
							                <div class="col-md-6">
							                  	<input type="text" class="form-control" placeholder="City">
							                </div>
							                <div class="col-md-4">
								                <select id="inputState" class="form-select">
								                    <option selected>Choose...</option>
								                    <option>...</option>
								                </select>
							                </div>
							                <div class="col-md-2">
							                  	<input type="text" class="form-control" placeholder="Zip">
							                </div>
							                <div class="text-center">
							                  	<button type="submit" class="btn btn-primary">Submit</button>
							                  	<button type="reset" class="btn btn-secondary">Reset</button>
							                </div>
							            </form><!-- End No Labels Form -->
						            </div>
						        </div>
			        		</div>
			          	</div>
			      	</div>
			    </section>
			</main>
		<?php
			break;
		case 'AL': //Case para los Abogados Legales (Nacional) - seleccion de preguntas y envio para Valle
		?>
			<main id="" class="">
			 	<section id="sectionCustom" class="sectionCustom">
			 		<div class="container">
			      		<div class="row">
			        		<div class="col-lg-12">
			          			<div class="card">
			            			<div class="card-body">
			              				<h5 class="card-title">Abogado Nacional</h5>
			              					<!-- Vertical Form -->
							            <form class="row g-3">
							                <div class="col-md-12">
							                	<input type="text" class="form-control" placeholder="Your Name">
							                </div>
							                <div class="col-md-6">
							                  	<input type="email" class="form-control" placeholder="Email">
							                </div>
							                <div class="col-md-6">
							                  	<input type="password" class="form-control" placeholder="Password">
							                </div>
							                <div class="col-12">
							                  	<input type="text" class="form-control" placeholder="Address">
							                </div>
							                <div class="col-md-6">
							                  	<input type="text" class="form-control" placeholder="City">
							                </div>
							                <div class="col-md-4">
								                <select id="inputState" class="form-select">
								                    <option selected>Choose...</option>
								                    <option>...</option>
								                </select>
							                </div>
							                <div class="col-md-2">
							                  	<input type="text" class="form-control" placeholder="Zip">
							                </div>
							                <div class="text-center">
							                  	<button type="submit" class="btn btn-primary">Submit</button>
							                  	<button type="reset" class="btn btn-secondary">Reset</button>
							                </div>
							            </form><!-- End No Labels Form -->
						            </div>
						        </div>
			        		</div>
			          	</div>
			      	</div>
			    </section>
			</main>
		<?php
			break;
		
		default:
			// code...
			break;
	}
 ?>