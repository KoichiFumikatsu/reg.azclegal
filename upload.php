<?php 
include('conexion.php');
include("header.php");

$id = $id_t_employee = $act_fijo = $benchmark = $model = $ram = $process = $disc_drive = $touch = $ac_adapter = $watts_ac = $link_reference = $assigned = "";

// Si se envió un ID, obtenemos los datos para editar
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conex->query("SELECT * FROM t_system WHERE id = $id");
    $row = $result->fetch_assoc();

    if ($row) {
        extract($row);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_t_employee = $_POST['id_t_employee'];
    $act_fijo = $_POST['act_fijo'];
    $benchmark = $_POST['benchmark'];
    $model = $_POST['model'];
    $ram = $_POST['ram'];
    $process = $_POST['process'];
    $disc_drive = $_POST['disc_drive'];
    $touch = isset($_POST['touch']) ? 1 : 0;
    $ac_adapter = isset($_POST['ac_adapter']) ? 1 : 0;
    $watts_ac = $_POST['watts_ac'];
    $link_reference = $_POST['link_reference'];
    $assigned = isset($_POST['assigned']) ? 1 : 0;

    if ($id) {
        // Actualizar equipo existente
        $sql = "UPDATE t_system SET id_t_employee='$id_t_employee', act_fijo='$act_fijo', benchmark='$benchmark', 
                model='$model', ram='$ram', process='$process', disc_drive='$disc_drive', touch='$touch', 
                ac_adapter='$ac_adapter', watts_ac='$watts_ac', link_reference='$link_reference', assigned='$assigned' 
                WHERE id=$id";
    } else {
        // Insertar nuevo equipo
        $sql = "INSERT INTO t_system (id_t_employee, act_fijo, benchmark, model, ram, process, disc_drive, touch, ac_adapter, watts_ac, link_reference, assigned) 
                VALUES ('$id_t_employee', '$act_fijo', '$benchmark', '$model', '$ram', '$process', '$disc_drive', '$touch', '$ac_adapter', '$watts_ac', '$link_reference', '$assigned')";
    }

    if ($conex->query($sql) === TRUE) {
        header('Location: storage.php');
        exit();
    } else {
        echo "Error: " . $conex->error;
    }
}
?>
<form action="" method="POST">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Formulario de Equipos</h5>

      <!-- Floating Labels Form -->
      <div class="row g-3">
        <!-- ID Empleado -->
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingIdEmployee" name="id_t_employee" value="<?php echo $id_t_employee; ?>" placeholder="ID Empleado">
            <label for="floatingIdEmployee">ID Empleado</label>
          </div>
        </div>

        <!-- Activo Fijo -->
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingActivoFijo" name="act_fijo" value="<?php echo $act_fijo; ?>" placeholder="Activo Fijo">
            <label for="floatingActivoFijo">Activo Fijo</label>
          </div>
        </div>

        <!-- Benchmark -->
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingBenchmark" name="benchmark" value="<?php echo $benchmark; ?>" placeholder="Benchmark">
            <label for="floatingBenchmark">Benchmark</label>
          </div>
        </div>

        <!-- Modelo -->
        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingModel" name="model" value="<?php echo $model; ?>" placeholder="Modelo">
            <label for="floatingModel">Modelo</label>
          </div>
        </div>
		<!-- RAM -->
		<div class="col-md-4">
		  <div class="form-floating">
		    <select class="form-select" id="floatingRam" name="ram" aria-label="RAM">
		      <option value="0" <?php echo ($ram == 0) ? 'selected' : ''; ?>>Seleccione RAM</option>
		      <option value="4" <?php echo ($ram == 4) ? 'selected' : ''; ?>>4 GB</option>
		      <option value="8" <?php echo ($ram == 8) ? 'selected' : ''; ?>>8 GB</option>
		      <option value="12" <?php echo ($ram == 12) ? 'selected' : ''; ?>>12 GB</option>
		      <option value="16" <?php echo ($ram == 16) ? 'selected' : ''; ?>>16 GB</option>
		      <option value="32" <?php echo ($ram == 32) ? 'selected' : ''; ?>>32 GB</option>
		    </select>
		    <label for="floatingRam">RAM</label>
		  </div>
		</div>

		<!-- Procesador -->
		<div class="col-md-4">
		  <div class="form-floating">
		    <select class="form-select" id="floatingProcess" name="process" aria-label="Procesador">
		      <option value="0" <?php echo ($process == 0) ? 'selected' : ''; ?>>Seleccione Procesador</option>
		      <option value="1" <?php echo ($process == 1) ? 'selected' : ''; ?>>Intel i5 6ta</option>
		      <option value="2" <?php echo ($process == 2) ? 'selected' : ''; ?>>Intel i5 7ma</option>
		      <option value="3" <?php echo ($process == 3) ? 'selected' : ''; ?>>Intel i5 8va</option>
		      <option value="4" <?php echo ($process == 4) ? 'selected' : ''; ?>>Intel i7 7ma</option>
		      <option value="5" <?php echo ($process == 5) ? 'selected' : ''; ?>>Intel i7 8va</option>
		    </select>
		    <label for="floatingProcess">Procesador</label>
		  </div>
		</div>

		<!-- Disco Duro -->
		<div class="col-md-4">
		  <div class="form-floating">
		    <select class="form-select" id="floatingDiscDrive" name="disc_drive" aria-label="Disco Duro">
		      <option value="0" <?php echo ($disc_drive == 0) ? 'selected' : ''; ?>>Seleccione Disco Duro</option>
		      <option value="1" <?php echo ($disc_drive == 1) ? 'selected' : ''; ?>>SSD 120 GB</option>
		      <option value="2" <?php echo ($disc_drive == 2) ? 'selected' : ''; ?>>SSD 250 GB</option>
		      <option value="3" <?php echo ($disc_drive == 3) ? 'selected' : ''; ?>>SSD 500 GB</option>
		      <option value="4" <?php echo ($disc_drive == 4) ? 'selected' : ''; ?>>SSD 1 TB</option>
		      <option value="5" <?php echo ($disc_drive == 5) ? 'selected' : ''; ?>>SSD 2 TB</option>
		    </select>
		    <label for="floatingDiscDrive">Disco Duro</label>
		  </div>
		</div>


        <!-- Touch -->
        <div class="col-md-6 form-check">
          <input class="form-check-input" type="checkbox" id="floatingTouch" name="touch" <?php echo ($touch ? 'checked' : ''); ?>>
          <label class="form-check-label" for="floatingTouch">Pantalla Táctil</label>
        </div>

        <!-- Adaptador AC -->
        <div class="col-md-6 form-check">
          <input class="form-check-input" type="checkbox" id="floatingAcAdapter" name="ac_adapter" <?php echo ($ac_adapter ? 'checked' : ''); ?>>
          <label class="form-check-label" for="floatingAcAdapter">Adaptador AC</label>
        </div>

		<!-- Watts AC -->
		<div class="col-md-6">
		  <div class="form-floating">
		    <select class="form-select" id="floatingWattsAC" name="watts_ac" aria-label="Watts AC">
		      <option value="0" <?php echo ($disc_drive == 0) ? 'selected' : ''; ?>>Seleccione AC</option>
		      <option value="1" <?php echo ($disc_drive == 1) ? 'selected' : ''; ?>>45 Watts</option>
		      <option value="2" <?php echo ($disc_drive == 2) ? 'selected' : ''; ?>>60 Watts</option>
		      <option value="3" <?php echo ($disc_drive == 3) ? 'selected' : ''; ?>>130 Watts</option>
		    </select>
		    <label for="floatingWattsAC">Watts AC</label>
		  </div>
		</div>

        <!-- Link Referencia -->
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingLinkReference" name="link_reference" value="<?php echo $link_reference; ?>" placeholder="Link Referencia">
            <label for="floatingLinkReference">Link Referencia</label>
          </div>
        </div>

        <!-- Asignado -->
        <div class="col-md-6 form-check">
          <input class="form-check-input" type="checkbox" id="floatingAssigned" name="assigned" <?php echo ($assigned ? 'checked' : ''); ?>>
          <label class="form-check-label" for="floatingAssigned">Asignado</label>
        </div>

        <!-- Botón de Envío -->
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>
