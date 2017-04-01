<?php

require '../config.php';
require '../header_css.php';

?>

<div class="container mt-20">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login text-center">
                <h4>Bienvenido Administrador</h4>
                <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="Usuario" />
                </br>
                <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Contraseña" />
                </br>
                <div class="wrapper">
            <span class="group-btn">
                <a href="#" class="btn btn-primary btn-md">Iniciar sesión <i class="fa fa-sign-in"></i></a>
            </span>
                </div>
            </div>

        </div>
    </div>
</div>

<?php

require '../footer_js.php';

?>