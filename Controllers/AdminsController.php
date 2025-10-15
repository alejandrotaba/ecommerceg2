<?php

class AdminsController
{
    public function login()
    {
        $mensaje = "";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $email = filter_var(trim($_POST['emailAdmin'] ?? ''), FILTER_SANITIZE_EMAIL);
            $password = trim($_POST['passwordAdmin']);

            if(empty($email) || empty($password)){
                return $mensaje = 'por favor; complete todos los campos';
            }

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                return 'El formato de correo electrónico no es válido.';
            }
        }

        return $mensaje;
    }
}