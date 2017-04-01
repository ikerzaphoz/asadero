<?php

session_start();

require '../config.php';
require '../header_css.php';

print_r($_SESSION);

?>

<?php if(!empty($_SESSION) && $_SESSION['admin'] == 1):

    echo "Bienvenido->".$_SESSION['login_name'];

else: ?>

<div class="container mt-20">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login text-center">
                <h4>Bienvenido Administrador</h4>
                <form action="ini_login.php" method="post" name="admin_login">
                    <input name="admin_user_login" type="text" id="userName" class="form-control input-sm chat-input" placeholder="Usuario" />
                    </br>
                    <input name="admin_pass_login" type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Contraseña" />
                    </br>
                    <div class="wrapper">
                        <span class="group-btn">
                            <button type="submit" href="#" class="btn btn-primary btn-md">Iniciar sesión <i class="fa fa-sign-in"></i></button>
                    </span>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php endif;?>

<?php

require '../footer_js.php';

?>