<?php $webroot = $this->request->getAttribute('webroot'); ?>
<script src="<?=$webroot?>assets/js/pages/form-elements.init.js"></script>
<script src="<?=$webroot?>assets/js/pages/form-ajax-actions.init.js"></script>
<?= $this->Form->create($user, ["id" => "formActions"]) ?>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name" class="control-label">Nombre</label>
            <?= $this->Form->control('name', ["label" => false, "class" => "form-control","placeholder" => "Nombres"]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="surname" class="control-label">Apellido</label>
            <?= $this->Form->control('surname', ["label" => false, "class" => "form-control","placeholder" => "Apellidos"]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <?= $this->Form->control('email', ["label" => false, "class" => "form-control", "placeholder" => "Ingresa tu Correo electrónico"]);?>
        </div>
    </div>
</div>
<div class="row">    
    <div class="col-md-4">
        <div class="form-group">
            <label for="movil" class="control-label">Movil</label>
            <?= $this->Form->control('movil', ["label" => false, "class" => "form-control","placeholder" => "Movil"]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="address" class="control-label">Dirección</label>
            <?= $this->Form->control('address', ["label" => false, "class" => "form-control","placeholder" => "Dirección"]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="birth-date" class="control-label">Fecha de Nacimiento</label>
            <!--<input type="text" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">-->
            <?= $this->Form->control('birth_date', ["label" => false, 'type' => 'text', "class" => "form-control","placeholder" => "AAAA-MM-DD", 'readonly' => "readonly"]);?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="password" class="control-label">Contraseña</label>
            <?= $this->Form->control('password', ["label" => false, "class" => "form-control", "placeholder" => "Ingresa tu Contraseña"]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="confirm_password" class="control-label">Confirmar contraseña</label>
            <?= $this->Form->control('confirm_password', ["label" => false, "type" => "password", "class" => "form-control", "placeholder" => "Confirma tu Contraseña"]);?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="profile-id" class="control-label">Perfil</label>
            <?= $this->Form->control('profile_id', ["label" => false, 'options' => $profiles, "class" => "form-control", "data-toggle" => "select2", "placeholder" => "Selecciona el Perfil"]);?>
        </div>
    </div>    
</div>
<div class="row">
    <div class="col-md-4">
        <div class="custom-control custom-checkbox">            
            <input type="checkbox" class="custom-control-input" name="active" id="active" checked="checked" value=""> 
            <label class="custom-control-label" for="active">Activo</label>           
        </div>
    </div>
</div>
<div class="form-group mb-0 text-right">
    <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
    <button class="btn btn-secondary waves-effect m-l-5" data-dismiss="modal" aria-hidden="true">Cancelar</button>
</div>
<?= $this->Form->end() ?>