<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
</head>
<body>
    <?php
        include_once 'TEMPLATES/topo.php';
        include_once 'TEMPLATES/menu.php';

        // Carregar página dinamicamente com base na query string
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page == 'faleconosco') {
                include 'faleconosco.php';
            } elseif ($page == 'principal') {
                include 'principal.php';
            } else {
                echo "<h1>Página não encontrada!</h1>";
            }
        } else {
            include 'principal.php'; // Página padrão
        }

        include_once 'TEMPLATES/rodape.php';
    ?>
</body>
</html>
