<?php

class Celular
{
    var $modelo;
    var $processador;
    var $marca;
    var $cor;
    var $estado;

    function verificacao(){
        if ($this->estado == true){
            echo "Ligando Sistema";

        }else{
            echo"Desigando Sistema";

        }

    }

    function jogar(){

    }



}