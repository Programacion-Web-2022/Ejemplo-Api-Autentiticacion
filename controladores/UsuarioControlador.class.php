<?php 
    require "../utils/autoload.php";

    class UsuarioControlador {
        public static function Alta($context){
            $u = new UsuarioModelo();
            $u -> Nombre = $context['post']['usuario'];
            $u -> Password = $context['post']['password'];
            $u -> Guardar();

            $respuesta = [
                "Resultado" => "true",
                "Mensaje" => "Usuario creado"
            ];
            echo json_encode($respuesta);
            return;
        }

        public static function Listar($context){
            $u = new UsuarioModelo();
            $usuarios = $u -> ObtenerTodos();
            $resultado = [];
            foreach($usuarios as $usuario){
                $t = [
                    'id' => $usuario -> Id,
                    'nombre' => $usuario -> Nombre,
                    'password' => $usuario -> Password
                ];
                
                array_push($resultado,$t);
            }
            echo json_encode($resultado);
            return;
        }
    }

