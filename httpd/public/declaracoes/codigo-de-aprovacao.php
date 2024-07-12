<h5 class="card-title fw-semibold mb-4">Retirada de Documentos</h5>
<div class="card">
  <div class="row">
    <div class="col-md">
      <div class="card-body">
        <!-- Form -->
        <form id="formnovo" method="POST" enctype="multipart/form-data">
          
          <input type="hidden" name="acao" id="acao" value="documentacao.resgatar"/>

          <div class="mb-3">
            <label>Insira o cógido para resgate do documento: </label>
            <input type="text" class="form-control" id="codigo" name="codigo">
          </div>

          <input type="hidden" id="formulario" value="doc-controller"/>
          <input type="hidden" id="local" value="#retirar"/>

          <button type="submit" class="btn btn-primary"><i class="ti ti-plus fs-6"></i> Requerer</button>
        </form>
      </div>
    </div>
  </div>
</div>

