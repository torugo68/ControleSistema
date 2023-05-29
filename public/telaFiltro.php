<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/style/telaFiltro.css?v=<?php echo time(); ?>">
    <title>Sistema de Controle de Permissões</title>
</head>

<body>
    <header>
        <h1>Controle de Sistemas</h1>
        <a href="../public/telaCadastro.php">Cadastrar Usuarios</a>

        <!-- Link para página de lista de usuários -->
        <a href="">Lista de Usuários</a>
    </header>


    <section>
        <h1>Área de Consulta</h1>
        <div>
            <label> Nome:</label> <input class="inputTable" type="text">
            <label> E-mail:</label> <input class="inputTable" type="text">

            <label>Sistemas:</label>
            <select name="permissao">
                <option selected value="0">0</option>
                <option value="1">1</option>
            </select>

            <label>Permissão:</label>
            <select name="permissao">
                <option selected value="0">0</option>
                <option value="1">1</option>
            </select>
            teste
        </div>
    </section>

    <footer>
        Todos os direitos reservados
    </footer>
</body>

</html>