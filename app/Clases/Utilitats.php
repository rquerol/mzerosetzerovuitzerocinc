<?php

namespace App\Clases;

class Utilitats
{
    public static function errorMessage($e){
        if(!empty($e->errorInfo[1]))
        {
            switch($e->errorInfo[1])
            {
                case 1062:
                    $mensaje = "Regsitre duplicat";
                    break;
                case 1451:
                    $mensaje = "Registre amb elements relacionats";
                    break;
                default:
                    $mensaje = $e->errorInfo[1] . ' - ' . $e->errorInfo[2];
            }
        }
        else{
            switch($e->getCode())
            {
                case 1044:
                    $mensaje = "Usuari i/o password incorrecte";
                    break;
                case 1049:
                    $mensaje = "Base de dades desconeguda";
                    break;
                case 2002:
                    $mensaje = "No es troba el servidor";
                    break;
                default:
                    $mensaje = $e->getCode() . " - " . $e.getMessage();
                    break;
            }
        }
        return $mensaje;
    }
}
