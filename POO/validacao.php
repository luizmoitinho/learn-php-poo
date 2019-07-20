<?php
class Validacao{

    public static function exceptionAtributo($atributo){
        if($atributo == 'titular' || $atributo == 'saldo')
            throw new Exception("O atributo que você está passando continua privado!");
    }

    public static function isNumeric($valor){
        if(!is_numeric($valor))
            throw new Exception("O valor passado não é um número!");
        else
            return true;
    }

}