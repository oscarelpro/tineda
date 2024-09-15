<?php 
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <div class="container">
    <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Producto</label>
    <input type="text" class="form-control" id="validationCustom01"  required>
    
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="validationCustom02"  required>
  
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Procesar</button>
  </div>
</form>
    </div>
</body>
</html>