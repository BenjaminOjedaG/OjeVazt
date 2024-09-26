<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <div class="contenedor">
        <div class="navegar">
            <ul>
                <li>
                    <a href="">
                        <span class="icono"><img src="/Proyecto/Iconos/Menu.svg"></span>
                        <span class="titulo">Menú</span>
                    </a>
                </li>
                <li>
                    <a href="/Proyecto/cobros.php">
                        <span class="icono"><img src="/Proyecto/Iconos/Cobros.svg"></span>
                        <span class="titulo">Cobros</span>
                    </a>
                </li>
                <li>
                    <a href="/Proyecto/pagos.php">
                        <span class="icono"><img src="/Proyecto/Iconos/Pagos.svg"></span>
                        <span class="titulo">Pagos</span>
                    </a>
                </li>
                <li>
                    <a href="/Proyecto/Proveedores/proveedores.php">
                        <span class="icono"><img src="/Proyecto/Iconos/Proveedores.svg"></span>
                        <span class="titulo">Proveedores</span>
                    </a>
                </li>
                <li>
                    <a href="/Proyecto/Productos/productos.php">
                        <span class="icono"><img src="/Proyecto/Iconos/Productos.svg"></span>
                        <span class="titulo">Productos</span>
                    </a>
                </li>
                <li>
                    <a href="/Proyecto/Clientes/clientes.php">
                        <span class="icono"><img src="/Proyecto/Iconos/Clientes.svg"></span>
                        <span class="titulo">Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="/Proyecto/Resumen/resumen.php">
                        <span class="icono"><img src="/Proyecto/Iconos/Resumen.svg"></span>
                        <span class="titulo">Resumen</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icono"><img src="/Proyecto/Iconos/Sorteos.svg"></span>
                        <span class="titulo">Sorteos</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        let lista = document.querySelector('.navegar li');
    function enlaceActivo() {
        lista.forEach((item) =>
            item.classList.remove(''));
        this.classList.add('hovered');
    }
    lista.forEach((item) =>
        item.addEventListener('mouseover', enlaceActivo));
    </script>
</body>
</html>
