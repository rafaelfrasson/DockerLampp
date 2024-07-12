<h5 class="card-title fw-semibold mb-4">Solicitar Documentos</h5>
<div class="card">
  <div class="row">
    <div class="col-md">
      <div class="card-body">
        <!-- Form -->
        <form id="formnovo" method="POST" enctype="multipart/form-data">
          
          <input type="hidden" name="acao" id="acao" value="documentacao.solicitar"/>

          <div class="mb-3">
            <label>Selecione o documento requerido: </label>
            <select class="form-control js-example-basic-single" id="id_tipo" name="id_tipo" require>
                <option value="#">Selecione um documento</option>
                <?php
                    include_once $_SESSION['root'] . "controller/doc-tipo-controller.php";
                    $res = $TipoTask->searchAll("ASC");
                    foreach($res as $obj ){   
                    ?>
                        <option value="<?=$obj->id?>"><?=$obj->nome?></option>
                    <?php
                    }
                    ?>
            </select>
          </div>
          
          <div class="mb-3">
            <label>Código do Acadêmico: </label>
            <input type="text" class="form-control" id="uni_id" name="uni_id" require>
          </div>

          <div class="mb-3">
            <label>Nome do Acadêmico: </label>
            <input type="text" class="form-control" id="nome" name="nome" require>
          </div>

          <div class="mb-3">
            <label>E-mail para recebimento do código: </label>
            <input type="e-mail" class="form-control" id="email" name="email" require>
          </div>

          <input type="hidden" id="formulario" value="doc-controller"/>
          <input type="hidden" id="local" value="#formulario"/>

          <button type="submit" class="btn btn-primary"><i class="ti ti-plus fs-6"></i> Solicitar</button>
        </form>
      </div>
    </div>
  </div>
</div>