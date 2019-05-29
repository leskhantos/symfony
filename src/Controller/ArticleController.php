<?php
/**
 * Created by PhpStorm.
 * User: Leskhan
 * Date: 29.05.2019
 * Time: 19:11
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
        public function homepage(){
            return new Response('Hello ');
        }
        /**
         * @Route("/new/{slug}")
         */
        public function newPage($slug){
            return new Response(sprintf('Hi from new route: %s',$slug));
        }
}
