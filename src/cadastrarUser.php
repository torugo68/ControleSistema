<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>"> <!-- Voltar uma pasta e pegar o style.css   -->
    <link rel="stylesheet" href="../style/telaCadastro.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../style/popup.css?v=<?php echo time(); ?>">
    <script src="../script/popup.js"></script>
    <title>Cadastar Usuário</title>
</head>

<body>
    <header>
        <a href="../index.php">Voltar para Filtro</a>
    </header>

    <div id="area-form">
        <form id="form" method="POST" action="">
        <h1>Cadastrar Usuário</h1><br>
            <label >Nome:</label>
            <input class="input-value" placeholder="nome" name="nome" type="text" required><br>
            <label>E-mail:</label>
            <input class="input-value" placeholder="usuario@pge.pr.gov.br" name="email" type="text" required><br>
            <label >Gerenciar Permissões:</label>
            <button  onclick="openPopup()" id="button-permissao" type="button">Permissões</button> <br>
            <button id="button-submit"type="submit">Cadastrar</button>
        </form>
    </div>

</body>

</html>
