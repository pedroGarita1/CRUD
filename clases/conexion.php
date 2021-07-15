<?php

    class Conectar{
        public function conexion(){
            $servidor = "sql212.epizy.com";
            $usuario = "epiz_28961838";
            $password = "HjtoDMr7lM";
            $base = "epiz_28961838_gestor";

            $conexion = mysqli_connect($servidor,
                                        $usuario,
                                        $password,
                                        $base);
            $conexion->set_charset('utf8mb4');

            return $conexion;
        }
    }
?>