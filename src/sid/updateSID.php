<?php
include_once "../../db/conexao.php";

$dados = $_GET;

$idUsuario = $dados['id'];
$novoSid = $dados['novoSid'];
$nomeSistema = $dados['nomeSid']; // Adicione o nome do sistema como parâmetro

// Verifica se o novo SID não é vazio
if (empty($novoSid) || $novoSid === "0") {
  echo json_encode(['status' => false, 'msg' => 'O SID não pode ser vazio ou igual a "0".']);
  exit();
}
// Verifique se a string contém pontos e traços
if (!preg_match('/^\d{2}\.\d{3}\.\d{3}-\d$/', $novoSid)) {
  echo json_encode(['status' => false, 'msg' => 'O formato do número do protocolo está incorreto.']);
  exit();
}
// Verifica se o novo SID é diferente do SID existente no banco de dados para o sistema especificado
$sqlCheckSid = "SELECT valorSid FROM sid WHERE id_usuario = $idUsuario AND nomeSid = '$nomeSistema'";
$resultCheckSid = $mysqli->query($sqlCheckSid);

if ($resultCheckSid) {
  $rowCheckSid = $resultCheckSid->fetch_assoc();
  $sidExistente = $rowCheckSid['valorSid'];
  
  if ($novoSid === $sidExistente) {
    echo json_encode(['status' => false, 'msg' => 'O novo SID deve ser diferente do SID existente.']);
    exit();
  }
} else {
  echo json_encode(['status' => false, 'msg' => 'Erro ao verificar o SID existente.']);
  exit();
}

$sqlUpdate = "UPDATE sid SET valorSid = '$novoSid' WHERE id_usuario = $idUsuario AND nomeSid = '$nomeSistema'";
$result = $mysqli->query($sqlUpdate);

if ($result) {
  // Atualização bem-sucedida
  echo json_encode(['status' => true , 'msg' => 'SID atualizado com sucesso.']);
} else {
  // Erro na atualização
  echo json_encode(['status' => false, 'msg' => 'Erro ao atualizar o SID no banco de dados.']);
}
?>
