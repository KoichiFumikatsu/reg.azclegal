<?php 
	require("header.php");
  include('conexion.php');
$result = $conex->query("SELECT * FROM t_system");
 ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Hardware Description</h1>
    </div><!-- End Page Title -->

    <section class="section contact">

      <div class="row gy-4">

        <div class="col-m-6">

          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-geo-alt"></i>
                <h3>Specs</h3>
                <p>process<br>si</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-telephone"></i>
                <h3>Asignado a</h3>
                <p>Nombre<br>Cargo</p>
                <p>firma<br>Locacion</p>
                <p>firma<br>Locacion</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-envelope"></i>
                <h3>Historial</h3>
                <p>descripcion: <br>contact@example.com</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-clock"></i>
                <h3>Date</h3>
                <p>Fecha de Compra<br>DD/MM/AAAA</p>
                <p>Fecha de asignacion<br>DD/MM/AAAA</p>
                <p>Fecha de ultimo mantenimiento<br>DD/MM/AAAA</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->
