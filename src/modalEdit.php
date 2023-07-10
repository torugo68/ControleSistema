<div class="modal fade" id="editUsuarioModal" tabindex="-1" aria-labelledby="editUsuarioModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUsuarioModalLabel">Editar Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" id="edit-usuario-form">
          <input type="hidden" name="id" id="editid">

          <div class="col-12">
            <label for="edit-grupo" class="form-label">Grupo</label>
            <select id="input-value" name="grupo" class="form-select">
              <option value="">Selecione o grupo</option>
              <?php
              $gruposPermitidos = array("Procurador", "Servidor", "Tercerizado", "Estagiário", "Advogado");
              foreach ($gruposPermitidos as $grupoPermitido) {
                echo "<option value='$grupoPermitido'>$grupoPermitido</option>";
              }
              ?>
            </select>
          </div>
          
          <div class="col-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Sistemas</th>
                  <th>Permissão</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td id="sistemasEdit"></td>
                  <td class="permissao-list" id="permissaoEdit"></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="col-12">
            <input type="submit" class="btn btn-outline-warning btn-sm" id="edit-usuario-btn" value="Salvar">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
