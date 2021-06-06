<?php 

namespace App\Controller\Admin;

use \App\Utils\View;

class Page{

    /**
     * Método responsável por retornar o conteúdo (view) da estrutura genéricaa de página do painel
     * @param string $title
     * @param string $content
     * @return string
     */
    public static function getPage($title, $content){
        return View::render('admin/page',[
            'title'   => $title,
            'content' => $content
        ]);
    }


}