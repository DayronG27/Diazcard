<?php

//clase u objeto
class usuarios
{
    // atributos
    public $tipodocumento;
    public $documento;
    public $nombre;
    public $celular;
    public $correo;

    //metodos 
    //getters (obtener  inforamcion de la base de datos)
    
    public function getdocumento()
    {
        return $this->documento;
    }
    public function getnombre()
    {
        return $this->nombre;
    }
    public function getcelular()
    {
        return $this->celular;
    }
    public function getcorreo()
    {
        return $this->correo;
    }
    //setters (modificar informacion de la base de datos)
    public function settipodocumento($new_tipodocumento)
    {
        return $this->tipodocumento = $new_tipodocumento;
    }
    public function setdocumento($new_documento)
    {
        return $this->documento = $new_documento;
    }
    public function setnombre($new_nombre)
    {
        return $this->nombre = $new_nombre;
    }
    public function setcelular($new_celular)
    {
        return $this->celular = $new_celular;
    }
    public function setcorreo($new_correo)
    {
        return $this->correo = $new_correo;
    }
}
//instanciamiento
