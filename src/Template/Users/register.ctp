<?php
$webroot = $this->request->getAttribute('webroot');
?>
<div class="card bg-pattern">

    <div class="card-body p-4">
        
        <div class="text-center w-75 m-auto">
            <a href="index.html">
                <span><img src="<?=$webroot?>assets/images/logo-dark.png" alt="" height="22"></span>
            </a>
            <p class="text-muted mb-4 mt-3">No tienes una cuenta? Crea tu cuenta, esto toma unos minutos.</p>
        </div>

        <form action="#">

            <div class="form-group">
                <label for="name">Nombre completo</label>
                <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Ingrese su nombre completo']);?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <?= $this->Form->control('email', ["label" => false, "type " => "email", "class" => "form-control", "required" => "required", "placeholder" => "Ingrese su Correo electrónico"]);?>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <?= $this->Form->control('password', ["label" => false, "type " => "password", "class" => "form-control", "required" => "required", "placeholder" => "Ingrese su Contraseña"]);?>
            </div>
            <div class="form-group">
                <label for="confrim_password">Confirmar Contrseña</label>
                <?= $this->Form->control('confrim_password', ["label" => false, "type " => "password", "class" => "form-control", "required" => "required", "placeholder" => "Confirmar Contraseña"]);?>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                    <label class="custom-control-label" for="checkbox-signup">Acepto <a href="javascript: void(0);" class="text-dark">Terminos y condiciones</a></label>
                </div>
            </div>
            <div class="form-group mb-0 text-center">
                <button class="btn btn-success btn-block" type="submit"> Registrese </button>
            </div>

        </form>

    </div> <!-- end card-body -->
</div>
<!-- end card -->

<div class="row mt-3">
    <div class="col-12 text-center">
        <p class="text-white-50">Already have account?  <a href="pages-login.html" class="text-white ml-1"><b>Sign In</b></a></p>
    </div> <!-- end col -->
</div>
<!-- end row -->