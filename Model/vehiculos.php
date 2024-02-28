<?php

//clase u objeto
class vehiculos
{
    // atributos
    public $marcas;
    public $modelos;
    public $referencias;

    //metodos
    public function getmarcas()
     {
        return $this->marcas;
     }
    public function getmodelos()
    {
        return $this->modelos;
    }
    public function getreferencias ()
    { 
        return $this->referencias;
    }    //setters
    public function setmarcas($new_marcas)
    {
        return $this->marcas = $new_marcas;
    }
    public function setmodelos($new_modelos)
    {
        return $this->modelos= $new_modelos;
    }public function setreferencias($new_referencias)
    {
        return $this->referencias=($new_referencias);
    }
}
//instanciamiento
