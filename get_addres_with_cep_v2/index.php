<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/styles.css">
    <title>MEU CEP</title>
</head>
<body>
    <div class="container">
        <form action="index.php" method="post">
            <label>Insira o CEP:</label>
            <input type="text" name="cep">
            <input type="submit" value="Enviar">
        </form>

        <?php
        if (!empty($_POST['cep'])) {
            $cep = $_POST['cep'];

            require_once 'entities/Address.php';

            $addressObj = new Entities\Address();

            $address = $addressObj->get_address($cep);

            echo "<div class='result'>";
            echo "<br><br>CEP Informado: $address->cep<br>";
            echo "Rua: {$address->logradouro}<br>";
            echo "Bairro: {$address->bairro}<br>";
            echo "Estado: {$address->uf}<br>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
