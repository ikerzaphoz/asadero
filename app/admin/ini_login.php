<?php

session_start();

require '../config.php';

$user = $_POST['admin_user_login'];
$pass = $_POST['admin_pass_login'];

$cs = new Customer();
$customer = $cs->login_customer($user,$pass);

if($customer->getId()>0):

    if($customer->getType()==1):

        $_SESSION['admin'] = 1;
        $_SESSION['login_name'] = $customer->getName();

        header("Location:../admin/");

    else:

        $_SESSION['admin'] = 0;
        $_SESSION['login_name'] = $customer->getName();

        header("Location:../web/");

    endif;


    else:

        header("Location:../web/?login=-1");

endif;