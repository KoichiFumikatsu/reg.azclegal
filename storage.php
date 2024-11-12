<?php 
include("header.php");
include('conexion.php');

$result = $conex->query("SELECT * FROM t_system");
// Arreglo para mapear el valor de RAM
$ram_options = [
    4 => '4 GB',
    8 => '8 GB',
    12 => '12 GB',
    16 => '16 GB',
    32 => '32 GB'
];

// Arreglo para mapear el valor del procesador
$process_options = [
    1 => 'Intel i5 6ta',
    2 => 'Intel i5 7ma',
    3 => 'Intel i5 8va',
    4 => 'Intel i7 7ma',
    5 => 'Intel i7 8va'
];

// Arreglo para mapear el valor del disco duro
$disc_drive_options = [
    1 => 'SSD 120 GB',
    2 => 'SSD 250 GB',
    3 => 'SSD 500 GB',
    4 => 'SSD 1 TB',
    5 => 'SSD 2 TB'
];

// Arreglo para mapear el valor de Watts AC
$watts_ac_options = [
    1 => '45 Watts',
    2 => '60 Watts',
    3 => '130 Watts'
];

 ?> 
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ID Empleado</th>
                    <th scope="col">Activo Fijo</th>
                    <th scope="col">Benchmark</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">RAM</th>
                    <th scope="col">Procesador</th>
                    <th scope="col">Disco Duro</th>
                    <th scope="col">Touch</th>
                    <th scope="col">Adaptador AC</th>
                    <th scope="col">Watts AC</th>
                    <th scope="col">Link Referencia</th>
                    <th scope="col">Asignado</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $result->fetch_assoc()): 
                      // Convertir los números a texto usando los arreglos
                        $ram = $ram_options[$row['ram']] ?? 'Desconocido';
                        $process = $process_options[$row['process']] ?? 'Desconocido';
                        $disc_drive = $disc_drive_options[$row['disc_drive']] ?? 'Desconocido';
                        $watts_ac = $watts_ac_options[$row['watts_ac']] ?? 'Desconocido'; ?>

                      <tr>
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['id_t_employee']; ?></td>
                          <td><?php echo $row['act_fijo']; ?></td>
                          <td><?php echo $row['benchmark']; ?></td>
                          <td><?php echo $row['model']; ?></td>
                          <td><?php echo $ram; ?></td>
                          <td><?php echo $process; ?></td>
                          <td><?php echo $disc_drive; ?></td>
                          <td><?php echo $row['touch'] ? 'Sí' : 'No'; ?></td>
                          <td><?php echo $row['ac_adapter'] ? 'Sí' : 'No'; ?></td>
                          <td><?php echo $watts_ac; ?></td>
                          <td><?php echo $row['link_reference']; ?></td>
                          <td><?php echo $row['assigned'] ? 'Sí' : 'No'; ?></td>
                          <td><a href="upload.php?id=<?php echo $row['id']; ?>">Editar</a></td>
                      </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->