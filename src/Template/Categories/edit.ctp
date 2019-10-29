<?php $webroot = $this->request->getAttribute('webroot'); ?>
<script src="<?=$webroot?>assets/js/pages/form-elements.init.js"></script>
<script src="<?=$webroot?>assets/js/pages/form-ajax-actions.init.js"></script>
<?= $this->Form->create($category, ["id" => "formActions"]) ?>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="name" class="control-label">Nombre</label>
            <?= $this->Form->control('name', ["label" => false, "class" => "form-control","placeholder" => "Nombre"]);?>
        </div>
    </div>    
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="surname" class="control-label">Descripción</label>
            <?= $this->Form->control('description', ["label" => false, "class" => "form-control","placeholder" => "Descripción"]);?>
        </div>
    </div>
</div>
<div class="form-group mb-0 text-right">
    <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
    <button class="btn btn-secondary waves-effect m-l-5" data-dismiss="modal" aria-hidden="true">Cancelar</button>
</div>
<?= $this->Form->end() ?>