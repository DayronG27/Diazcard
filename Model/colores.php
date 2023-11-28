<?php

//clase u objeto
class colores
{
    // atributos
    public $nombre;
    public $descripcion;

    //metodos
    public function getnombre()
     {
        return $this->nombre;
     }
    public function getdescripcion()
    {
        return $this->descripcion;
    }
    //setters
    public function setnombre($new_nombre)
    {
        return $this->nombre = $new_nombre;
    }
    public function setdescripcion($new_descripcion)
    {
        return $this->descripcion = $new_descripcion;
    }
}
//instanciamiento
