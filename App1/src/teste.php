<?php

class Tela {

    public $cor;

    public function set_valor($cor){
        $this->cor=$cor;
    }
    public function acess($cor){
        echo "$cor";
    }

}