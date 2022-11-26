<?php
Class Functions {
    public function verificaSessao($status){
        if($status != 'ativo'){
            header('Location: ../../index.php');
        }else {
            return true;
        }
    }
}
