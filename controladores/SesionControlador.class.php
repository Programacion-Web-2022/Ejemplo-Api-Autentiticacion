<?php 
    require "../utils/autoload.php";

    class SesionControlador {
        public static function IniciarSesion($context){
            $u = new UsuarioModelo();
            $u -> Nombre = $context['post']['usuario'];
            $u -> Password = $context['post']['password'];
            if($u -> Autenticar($u -> Nombre, $u -> Password)){
                $respuesta = [
                    "Resultado" => "true",
                    "Mensaje" => "Credenciales validas"
                ];
                echo json_encode($respuesta);
                return;
            }

            $respuesta = [
                "Resultado" => "false",
                "Mensaje" => "Credenciales invalidas"
            ];
            echo json_encode($respuesta);
            return;
        }

        

       
    }

