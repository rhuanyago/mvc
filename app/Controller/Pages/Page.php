<?php

namespace App\Controller\Pages;
use App\Utils\View;

class Page{
    
    /**
     * Método responsável por renderizar o topo da página
     */
    public static function getHeader(){
        return View::render('pages/header');
    }

    /**
     * Método responsável por retornar o conteúdo (view) da nossa página genérica
     * @return string
     */
    public static function getPage($title, $content){
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
    
    /**
     * Método responsável por renderizar o rodapé da página
     */
    public static function getFooter(){
        return View::render('pages/footer');
    }


}
?>