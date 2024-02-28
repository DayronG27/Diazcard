<?php

//clase u objeto
class pedidos
{
    // atributos
    public $usuarios;
    public $vehiculos;
    public $materiales;
    public $colores;
    public $estados;
    


    //metodos
    public function getusuarios()
     {
        return $this->usuarios;
     }
    public function getvehiculos()
    {
        return $this->vehiculos;
    }
    //setters
    public function getmateriales()
    {
        return $this->materiales;
    }
    public function getcolores()
    {
        return $this->colores;
    }
    public function getestados()
    {
        return $this->estados;
    }
    //setters
    public function setusuarios($new_usuarios)
    {
        return $this ->usuarios=($new_usuarios);
    }
    public function setvehiculos($new_vehiculos)
    {
        return $this->vehiculos=($new_vehiculos);
    }
    public function setmateriales($new_materiales)
    {
         return $this ->materiales =($new_materiales);
    }
    public function setcolores($new_colores)
    {
        return $this->colores=($new_colores);
    }
    public function setestados($new_estados)
    {
        return $this->estados=($new_estados);
    }

}