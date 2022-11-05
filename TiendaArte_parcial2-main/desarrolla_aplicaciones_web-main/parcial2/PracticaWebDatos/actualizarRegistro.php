<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Arte</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM usuarios WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form method="post" action="guardarRegistro.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $registro["nombre"]; ?>" type="text" class="form-control" name="nombre" placeholder="Teclea el nombre del producto">
                    </div>

                    <div class="form-group">
                        <label for="">cantidad:</label>
                        <input value="<?php echo $registro["cantidad"]; ?>" type="number" class="form-control" name="cantidad" placeholder="Teclea la cantidad">
                    </div>

                    <div class="form-group">
                    <?php
                        if($registro["sexo"]){
                            echo "<input type='radio' name='sexo' value='1' checked> envio local <br>";
                            echo "<input type='radio' name='sexo' value='0'> envio nacional <br>";
                        } else {
                            echo "<input type='radio' name='sexo' value='1'> envio local <br>";
                            echo "<input type='radio' name='sexo' value='0' checked> envio nacional <br>";
                        }
                    ?>
                    </div>

                    <div class="form-group">
                        <label for="">Domicilio:</label>
                        <textarea name="domicilio" id="" cols="30" rows="10" class="form-control"><?php echo $registro["domicilio"] ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de nacimiento:</label>
                        <input value="<?php echo $registro["fecha_pedido"]; ?>" type="date" class="form-control" name="fecha_pedido">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Ortiz Urrea Jesus Isaac Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>