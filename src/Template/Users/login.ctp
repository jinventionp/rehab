<?php
$webroot = $this->request->getAttribute('webroot');
?>
<div class="card bg-pattern">

    <div class="card-body p-4">
        
        <div class="text-center w-75 m-auto">
            <a href="index.html">
                <span><img src="<?=$webroot?>assets/images/logo-dark.png" alt="" height="22"></span>
            </a>
            <p class="text-muted mb-4 mt-3">Ingrese su email y contraseña para acceder al panel de administración.</p>
        </div>

        <form action="#">

            <div class="form-group mb-3">
                <label for="email">Email</label>                

                <?= $this->Form->control('email', ["label" => false, "type " => "email", "class" => "form-control", "required" => "required", "placeholder" => "Ingrese su Correo electrónico"]);?>
            </div>

            <div class="form-group mb-3">
                <label for="password">Contraseña</label>
                <?= $this->Form->control('password', ["label" => false, "type " => "password", "class" => "form-control", "required" => "required", "placeholder" => "Ingrese su Contraseña"]);?>
            </div>

            <div class="form-group mb-0 text-center">
                <button class="btn btn-primary btn-block" type="submit"> Inicias Sesión</button>
            </div>

        </form>

    </div> <!-- end card-body -->
</div>
<!-- end card -->

<div class="row mt-3">
    <div class="col-12 text-center">
        <p> <a href="pages-recoverpw.html" class="text-white-50 ml-1">Recodar contraseña?</a></p>
        <p class="text-white-50">Si no tienes cuenta? <a href="pages-register.html" class="text-white ml-1"><b>Regístrate</b></a></p>
    </div> <!-- end col -->
</div>
<!-- end row -->