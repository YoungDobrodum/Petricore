<?php

namespace Core;
class View
{
    const VIEWS_DIR = 'Views';
//    /**
//     * name of template file
//     * @var string
//     */
//    protected $template = 'default';

//    /**
//     *
//     * @param ?string $template
//     */
//    public function __construct(string $template = null)
//    {
//        if($template !== null){
//            $this->template = $template;
//        }
//    }

    public static function render(string $pageTemplate, array $data = []){
        extract($data);
        include_once 'vendor'.DIRECTORY_SEPARATOR.self::VIEWS_DIR.DIRECTORY_SEPARATOR.$pageTemplate.'.php';
    }
}