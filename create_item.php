<?php
// create_item.php

// Configuración de la base de datos
$servername = "localhost";
$username = "root"; // Cambiar si es necesario
$password = ""; // Cambiar si es necesario
$dbname = "tu_base_de_datos"; // Cambiar por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$item = [
    'id' => '',
    'name' => '',
    'category' => '',
    'price' => '',
    'stock' => '',
    'sku' => '',
    'status' => '',
    'description' => '',
];

// Verificar si es edición
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM items WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $item = $result->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($item['id']) ? 'Editar Ítem' : 'Crear Ítem' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4"><?= isset($item['id']) ? 'Editar Ítem' : 'Crear Nuevo Ítem' ?></h1>
        <form class="row g-3" method="POST" action="save_item.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $item['id'] ?>">
            <div class="col-md-12">
                <label for="itemName" class="form-label">Nombre del Ítem</label>
                <input type="text" class="form-control" id="itemName" placeholder="Nombre del Ítem" name="itemName" value="<?= htmlspecialchars($item['name']) ?>" required>
            </div>
            <div class="col-md-6">
                <label for="itemCategory" class="form-label">Categoría</label>
                <select id="itemCategory" class="form-select" name="itemCategory" required>
                    <option value="" disabled <?= empty($item['category']) ? 'selected' : '' ?>>Seleccionar Categoría</option>
                    <option value="equipos" <?= $item['category'] == 'equipos' ? 'selected' : '' ?>>Equipos</option>
                    <option value="cargadores" <?= $item['category'] == 'cargadores' ? 'selected' : '' ?>>Cargadores</option>
                    <option value="perifericos" <?= $item['category'] == 'perifericos' ? 'selected' : '' ?>>Periféricos</option>
                    <option value="otros" <?= $item['category'] == 'otros' ? 'selected' : '' ?>>Otros</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="itemPrice" class="form-label">Precio</label>
                <input type="number" class="form-control" id="itemPrice" placeholder="Precio" name="itemPrice" step="0.01" value="<?= $item['price'] ?>" required>
            </div>
            <div class="col-md-4">
                <label for="itemStock" class="form-label">Cantidad en Stock</label>
                <input type="number" class="form-control" id="itemStock" placeholder="Stock" name="itemStock" value="<?= $item['stock'] ?>" required>
            </div>
            <div class="col-md-4">
                <label for="itemSKU" class="form-label">SKU (Código de Producto)</label>
                <input type="text" class="form-control" id="itemSKU" placeholder="SKU" name="itemSKU" value="<?= htmlspecialchars($item['sku']) ?>">
            </div>
            <div class="col-md-4">
                <label for="itemStatus" class="form-label">Estado</label>
                <select id="itemStatus" class="form-select" name="itemStatus" required>
                    <option value="" disabled <?= empty($item['status']) ? 'selected' : '' ?>>Seleccionar Estado</option>
                    <option value="available" <?= $item['status'] == 'available' ? 'selected' : '' ?>>Disponible</option>
                    <option value="unavailable" <?= $item['status'] == 'unavailable' ? 'selected' : '' ?>>No Disponible</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="itemDescription" class="form-label">Descripción</label>
                <textarea class="form-control" id="itemDescription" placeholder="Descripción del Ítem" name="itemDescription" rows="3"><?= htmlspecialchars($item['description']) ?></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="<?= isset($item['id']) ? 'updateItem' : 'createItem' ?>">
                    <?= isset($item['id']) ? 'Guardar Cambios' : 'Crear Ítem' ?>
                </button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$conn->close();
?>
