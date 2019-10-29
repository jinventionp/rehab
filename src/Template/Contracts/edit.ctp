<?php $webroot = $this->request->getAttribute('webroot'); ?>
<script src="<?=$webroot?>assets/js/pages/form-elements.init.js"></script>
<script src="<?=$webroot?>assets/js/pages/form-ajax-actions.init.js"></script>
<?= $this->Form->create($contract, ["id" => "formActions"]) ?>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="typecontract-id" class="control-label">Tipo de contrato</label>
            <?= $this->Form->control('typecontract_id', ['options' => $typecontracts, "label" => false, "class" => "form-control", "data-toggle" => "select2", "placeholder" => "Selecciona el Tipo de contrato"]);?>
        </div>
    </div>   
    <div class="col-md-4">
        <div class="form-group">
            <label for="name" class="control-label">Nombre</label>
            <?= $this->Form->control('name', ["label" => false, "class" => "form-control","placeholder" => "Nombres"]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="price" class="control-label">Precio</label>
            <?= $this->Form->control('price', ["label" => false, "class" => "form-control","placeholder" => "Precio"]);?>
        </div>
    </div>    
</div>
<div class="row">  
    <div class="col-md-4">
        <div class="form-group">
            <label for="number_classes" class="control-label">Numero de Clases</label>
            <?= $this->Form->control('number_classes', ["label" => false, "class" => "form-control", "placeholder" => "Numero de Clases"]);?>
        </div>
    </div>    
    <div class="col-md-4">
        <div class="form-group">
            <label for="contract_frequency" class="control-label">Frecuencia de contrato</label>
            <?= $this->Form->control('contract_frequency', ["label" => false, "class" => "form-control","placeholder" => "Dirección"]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="number_contract_frecuency" class="control-label">Num. de frecuencia de contrato</label>
            <!--<input type="text" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">-->
            <?= $this->Form->control('number_contract_frecuency', ["label" => false, 'type' => 'text', "class" => "form-control","placeholder" => "0"]);?>
        </div>
    </div>
</div>
<div class="row">    
    <div class="col-md-3">
        <div class="form-group">
            <label for="time_to_recur" class="control-label">Tiempo de recurrencia</label>
            <?= $this->Form->control('time_to_recur', ["label" => false, "class" => "form-control","placeholder" => "Tiempo de recurrencia"]);?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="custom-control custom-checkbox">            
            <?=$this->Form->control('payment_recur', ['label' => false, 'class' => 'custom-control-input', 'checked' => 'checked', 'templates' => [
        'inputContainer' => '{{content}}'
    ]])?>
            <label class="custom-control-label" for="payment-recur">Pago recurrente</label>   
        </div>
    </div>  
    <div class="col-md-3">
        <div class="custom-control custom-checkbox">            
            <?=$this->Form->control('customer_can_cancel', ['label' => false, 'class' => 'custom-control-input', 'checked' => 'checked', 'templates' => [
        'inputContainer' => '{{content}}'
    ]])?>
            <label class="custom-control-label" for="customer_can_cancel">Cliente puede cancelar</label>   
        </div>
    </div>  
    <div class="col-md-3">
        <div class="custom-control custom-checkbox">            
            <?=$this->Form->control('active', ['label' => false, 'class' => 'custom-control-input', 'checked' => 'checked', 'templates' => [
        'inputContainer' => '{{content}}'
    ]])?>
            <label class="custom-control-label" for="active">Activo</label>   
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="description" class="control-label">Descripción</label>
            <!--<input type="text" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">-->
            <?= $this->Form->control('description', ["label" => false, "class" => "form-control","placeholder" => "Desripción"]);?>
        </div>
    </div>    
</div>
<div class="form-group mb-0 text-right">
    <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
    <button class="btn btn-secondary waves-effect m-l-5" data-dismiss="modal" aria-hidden="true">Cancelar</button>
</div>
<?= $this->Form->end() ?>