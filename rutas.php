<?php 
    require "../utils/autoload.php";

    Routes::Add("/login","post","SesionControlador::IniciarSesion");
    Routes::Add("/usuario","post","UsuarioControlador::Alta");
    Routes::Add("/usuario","get","UsuarioControlador::Listar");
    Routes::Run();

       