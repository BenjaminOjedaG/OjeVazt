<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="acceso.css">
</head>
<body>
<div class="login">
        <h1>Acceso</h1>

        <form action="autenticacion.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username"
            placeholder="Usuario" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password"
            placeholder="Contraseña" id="password" required>
            <input type="submit" value="Acceder">
        </form>
    </div>
<?php include("footer.php"); ?>
</body>
</html>
