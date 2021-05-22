<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page{

    /**
     * Método responsável por retornar o conteúdo (view) da nossa home
     */
    public static function getHome(){
        $obOrganization = new Organization;

        // echo "<pre>";
        // print_r($obOrganization);
        // echo "</pre>";exit;

        //VIEW DA HOME
        $content = View::render('pages/home', [
            'name' => $obOrganization->name,
        ]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('HOME > WDEV', $content);
    }



}
?>