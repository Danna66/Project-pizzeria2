<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INSERTAR PRODUCTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">INGRESO DE PRODUCTOS</h3>
                <div class="col-md-12 text-center">
				<a href="welcome.php">VOLVER A BIENVENIDA</a>
</div>
            </div>
            <div class="col-md-12">
                <form method="post" accept-charset="utf-8" action="save_products.php" class="form-group" enctype="multipart/form-data">
                    <div class="form-group">
                        <br>
                        <label class="control-label" for="producto">PRODUCTO</label>
                        <input id="producto" name="producto" placeholder="PRODUCTO" class="form-control" required="" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="precio">PRECIO</label>
                        <input id="precio" name="precio" placeholder="PRECIO" class="form-control" required="" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="categoria">CATEGORIA</label>
                        <select id="categoria" name="categoria" class="form-control">
                            <!-- Las categorias seran cargadas de la db -->
                            <?php
                            include_once("config_products.php");
                            include_once("db.class.php");
                            $link = new Db();
                            $sql = "select id_category,category_name from categories order by category_name";
                            $stmt = $link->run($sql, NULL);
                            $data = $stmt->fetchAll();
                            foreach ($data as $row) {
                            ?>
                                <option value="<?php echo $row['id_category'] ?>"><?php echo $row['category_name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="file">Seleccione la imagen a subir</label>
                        <input type="file" id="imagen" class="form-control" name="imagen" size="30" />
                    </div>
                    <br>
                    <div class="text-center">
                        <input type="submit" class="btn btn-success" value="Añadir Producto" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</body>