<?php

    class Tarea 
    {
        //ATRIBUTOS################################################################
        
        private $nombre;
        private $descripcion;
        private $prioridad;

        
        //CONSTRUCTOR################################################################
        public function __construct()
        {
            
        }

        //METODOS################################################################
        public function listarTareas()
        {
            $link = Conexion::conectar();
            $sql = "SELECT *
                        FROM todo";
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $resultado = $stmt->fetchAll();

            return $resultado;
            //También podemos retornar directamente $stmt->fetchAll();
        }

        public function verTarea()
        {
            
        }

        public function agregarTarea()
        {
            
        }

        public function modificarTarea()
        {
            
        }

        public function eliminarTarea()
        {
                /*$link = Conexion::conectar();
                $sql = "DELETE *
                                FROM todo";
                $stmt = $link->prepare($sql);
                $stmt->execute();

                $resultado = $stmt->fetchAll();

                return $resultado;*/
        }




        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of prioridad
         */ 
        public function getPrioridad()
        {
                return $this->prioridad;
        }

        /**
         * Set the value of prioridad
         *
         * @return  self
         */ 
        public function setPrioridad($prioridad)
        {
                $this->prioridad = $prioridad;

                return $this;
        }
    }