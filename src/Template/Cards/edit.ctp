<?php $webroot = $this->request->getAttribute('webroot'); ?>
<script src="<?=$webroot?>assets/js/pages/form-elements.init.js"></script>
<script src="<?=$webroot?>assets/js/pages/form-ajax-actions.init.js"></script>
<?= $this->Form->create($card, ["id" => "formActions"]) ?>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="profile-id" class="control-label">Usuario</label>
            <?= $this->Form->control('user_id', ['options' => $users, 'label' => false, "class" => "form-control", "data-toggle" => "select2", "placeholder" => "Selecciona el Usuario"]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="name" class="control-label">Nombre</label>
            <?= $this->Form->control('name', ["label" => false, "class" => "form-control","placeholder" => "Nombre"]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="surname" class="control-label">Numero de Tarjeta</label>
            <?= $this->Form->control('card_number', ["label" => false, "class" => "form-control","placeholder" => "1234 5678 9012 3456"]);?>
        </div>
    </div>    
</div>
<div class="row">    
    <div class="col-md-4">
        <div class="form-group">
            <label for="movil" class="control-label">Codigo de Seguridad</label>
            <?= $this->Form->control('cvv', ["label" => false, "class" => "form-control","placeholder" => "000"]);?>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="email" class="control-label">Mes de Vencimiento</label>
            <?= $this->Form->select('expiry_month', ['01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiempre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'],["default" => date('m'), "class" => "form-control", "placeholder" => "09/2020"]);?>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="email" class="control-label">Año de Vencimiento</label>
            <?= $this->Form->select('expiry_year', ['2019' => '2019', '2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024', '2025' => '2025', '2026' => '2026', '2027' => '2027', '2028' => '2028', '2029' => '2029'],["default" => date('Y'), "class" => "form-control", "placeholder" => date('Y')]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="custom-control custom-checkbox">            
            <?=$this->Form->control('defaulted', ['label' => false, 'class' => 'custom-control-input', 'templates' => [
        'inputContainer' => '{{content}}'
    ]])?>
            <label class="custom-control-label" for="defaulted">Predeterminada</label>   
        </div>
    </div>
</div>
<div class="form-group mb-0 text-right">
    <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
    <button class="btn btn-secondary waves-effect m-l-5" data-dismiss="modal" aria-hidden="true">Cancelar</button>
</div>
<?= $this->Form->end() ?>