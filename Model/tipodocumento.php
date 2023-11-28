<?php

//clase u objeto
class tipodocumento
{
    // atributos
    public $nombre_documento;
    public $numero_documento;

    //metodos
    public function getnombre_documento()
     {
        return $this->nombre_documento;
     }
    public function getnumero_documento()
    {
        return $this->numero_documento;
    }
    //setters
    public function setnombre_documento($new_nombre_documento)
    {
        return $this->nombre_documento = $new_nombre_documento;
    }
    public function setnumero_documento($new_numero_documento)
    {
        return $this->numero_documento = $new_numero_documento;
    }
}
//instanciamiento
