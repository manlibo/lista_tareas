<?php

    class Conexion 
    {
        private static $link;

        private function __construct()
        {}

        static function conectar()
        {
            $link = new PDO(
                'mysql:host=localhost;dbname=lista_tareas',
                'root',
                '' 
                );
                return $link;
        }

    }