<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class About extends Page{

    /**
     * Método responsável por retornar o conteúdo (view) da nossa página de Sobre
     */
    public static function getAbout(){
        $obOrganization = new Organization;

        // echo "<pre>";
        // print_r($obOrganization);
        // echo "</pre>";exit;

        //VIEW DA HOME
        $content = View::render('pages/about', [
            'name' => $obOrganization->name,
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('SOBRE > WDEV', $content);
    }



}
?>