<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Ítem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Crear Nuevo Ítem</h1>
        <form class="row g-3" method="POST" action="save_item.php" enctype="multipart/form-data">
            <div class="col-md-12">
                <label for="itemName" class="form-label">Nombre del Ítem</label>
                <input type="text" class="form-control" id="itemName" placeholder="Nombre del Ítem" name="itemName" required>
            </div>
            <div class="col-md-6">
                <label for="itemCategory" class="form-label">Categoría</label>
                <select id="itemCategory" class="form-select" name="itemCategory" required>
                    <option selected>Seleccionar Categoría</option>
                    <option value="electronics">Electrónica</option>
                    <option value="clothing">Ropa</option>
                    <option value="furniture">Muebles</option>
                    <option value="others">Otros</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="itemPrice" class="form-label">Precio</label>
                <input type="number" class="form-control" id="itemPrice" placeholder="Precio" name="itemPrice" step="0.01" required>
            </div>
            <div class="col-md-4">
                <label for="itemStock" class="form-label">Cantidad en Stock</label>
                <input type="number" class="form-control" id="itemStock" placeholder="Stock" name="itemStock" required>
            </div>
            <div class="col-md-4">
                <label for="itemSKU" class="form-label">SKU (Código de Producto)</label>
                <input type="text" class="form-control" id="itemSKU" placeholder="SKU" name="itemSKU">
            </div>
            <div class="col-md-4">
                <label for="itemStatus" class="form-label">Estado</label>
                <select id="itemStatus" class="form-select" name="itemStatus">
                    <option selected>Seleccionar Estado</option>
                    <option value="available">Disponible</option>
                    <option value="unavailable">No Disponible</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="itemDescription" class="form-label">Descripción</label>
                <textarea class="form-control" id="itemDescription" placeholder="Descripción del Ítem" name="itemDescription" rows="3"></textarea>
            </div>
            <div class="col-md-6">
                <label for="itemImage" class="form-label">Imagen del Ítem</label>
                <input type="file" class="form-control" id="itemImage" name="itemImage" accept="image/*">
            </div>
            <div class="col-md-6">
                <label for="itemManual" class="form-label">Manual o Documento (opcional)</label>
                <input type="file" class="form-control" id="itemManual" name="itemManual" accept=".pdf,.doc,.docx">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="createItem">Crear Ítem</button>
                <button type="reset" class="btn btn-secondary">Resetear</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
