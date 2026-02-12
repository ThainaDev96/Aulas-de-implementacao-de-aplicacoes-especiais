<?php
class conta{
    var $saldo;
    function saldo(){
        return $this->saldo;
    }
    function credito($valor){
        $this->saldo+=$valor;
    }
}
?> 