<?php

//clase u objeto
class estados
{
    // atributos
    public $nombre;
    public $documento;
    public $estado;
   
    //metodos
    public function getnombre()
     {
        return $this->nombre;
     }
    public function getdocumento()
    {
        return $this->documento;
    }
    public function getestado()
    {
        return $this->estado;
    }
    //setters
    public function setnombre($new_nombre)
    {
        return $this->nombre= $new_nombre;
    }
    public function setdocumento($new_documento)
    {
        return $this->documento=$new_documento;
    }
    //setting
    public function setestado($new_estado)
    {
        return $this->estado = $new_estado;
    }
    
}
//instanciamiento
