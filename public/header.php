<header>
    <a href="../public/pageFiltro.php">
        <img class="imgHeader" src="..\public\assets\img\logo-govpr-white.png" alt="Descrição da imagem">
    </a>
    <nav class="navbar">
        <li class="list-header"><a class="a1"
                <?php if ($pageTitle === 'Cadastrar Usuários') echo 'id="botao-filtro-a"'; ?>
                href="../public/pageCadastro.php">Cadastrar Usuários</a></li>
        <li class="list-header"><a class="a1"
                <?php if ($pageTitle === 'Filtrar Usuários') echo 'id="botao-filtro-a"'; ?>
                href="../public/pageFiltro.php">Filtrar Usuários</a></li>
        <li class="list-header"><a class="a1"
                <?php if ($pageTitle === 'Lista de Usuários') echo 'id="botao-filtro-a"'; ?>
                href="../public/pageLista.php">Lista de Usuários</a></li>
        <li class="list-header"><a class="a1" <?php if ($pageTitle === 'Logs de Usuário') echo 'id="botao-filtro-a"'; ?>
                href="../public/pageLogs.php">Logs de Usuário</a></li>
        <li class="list-header"><a onclick="openModalSistema()" class="a1">Editar Sistema</a></li>
        <div class="dropdown">
            <button class="dropbtn"><img src="../public/assets/img/icon-profile.png" alt="Descrição da Imagem"></button>
            <div class="dropdown-content">
                <p id="username"><?php echo $_SESSION['nome']; ?></p>
                <a href="../admin/public/pageAdmin.php">Admin</a>
                <a href="../public/pageDocs.php">Documentação</a> 
               <!--  <a href="../pdf/pageRelatorio.php">Relatórios</a>-->

                <a href="#" onclick="openModalAlterSenha()">Alterar Senha</a>
                <a href="?logout=1">Sair</a>
            </div>
        </div>
    </nav>
</header>

<?php
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ../index.php");
    exit();
}
?>

<script>
function openModalAlterSenha() {


    const alterSenha = new bootstrap.Modal(
        document.getElementById("alterPasswordModal")
    );
    alterSenha.show();


}
</script>