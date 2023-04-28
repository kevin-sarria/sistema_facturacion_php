<?php !isAuth() ? header('Location: /') : ''; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Sistema Facturacion -
        <?php echo $titulo; ?>
    </title>
</head>

<body class="dashboard">



    <?php include_once __DIR__ . '/templates/sidebar.php'; ?>

    <main class="dashboard__contenido">

        <div class="dashboard__contenido--header">
            <div class="icon-menu">
                <div class="square"></div>
                <div class="square"></div>
                <div class="square"></div>
                <div class="square"></div>
            </div>
            <p>
                <?php echo $titulo; ?>
            </p>
        </div>

        <?php
        echo $contenido;
        ?>
    </main>



    <script src="/js/dashboard.js"></script>

</body>

</html>