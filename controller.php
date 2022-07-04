<?php
require "view.php";
require "model.php";

class Controle{

    public function indexPHP (){
        $view = new View();
        $model = new Perfil();
        $model->PrimeiraBusca();
        $model->SegundaBusca();
        $model->Calculo_ProjecaoVendas();
       // $model->MapaPerfil();
        $view->exibicao($model);
        
    }
}