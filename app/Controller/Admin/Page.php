<?php 

namespace App\Controller\Admin;

use \App\Utils\View;

class Page{

    /**
     * Módulos disponíveis no painel
     * @var array
     */
    private static $modules = [
        'home' => [
            'label' => 'Home',
            'link' => URL.'/admin'
        ],
        'testimonies' => [
            'label' => 'Depoimentos',
            'link' => URL . '/testimonies'
        ],
        'users' => [
            'label' => 'Usuários',
            'link' => URL . '/user'
        ]
    ];

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

    /**
     * Método responsável por renderizar a view do menu do painel
     * @param string $currentModule
     * @return string
     */
    private static function getMenu($currentModule){
        //LINKS DO MENU
        $links = '';

        //ITERA OS MÓDULOS

        foreach (self::$modules as $hash => $module) {
            $links .= View::render('admin/menu/link',[
                'label' => $module['label'],
                'link'  => $module['link'],
                'current' => $hash == $currentModule ? 'text-danger' : ''
            ]);
        }
        //RETORNA A RENDERIZAÇÃO DO MENU
        return View::render('admin/menu/box',[
            'links' => $links
        ]);
    }

    /**
     * Método responsável por renderizar a view do painel com conteúdos dinamicos
     * @param string $title
     * @param string $content
     * @param string $currentModule
     * @return string
     */
    public static function getPanel($title, $content, $currentModule){
        //RENDERIZA A VIEW DO PAINEL
        $contentPanel = View::render('admin/panel',[
            'menu' => self::getMenu($currentModule),
            'content' => $content
        ]);


        //RETORNA A PÁGINA RENDERIZADA
        return self::getPage($title, $contentPanel);
    }


}