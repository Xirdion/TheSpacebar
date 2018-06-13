<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 13.06.18
 * Time: 15:07
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function homepage(): Response
    {
        return new Response('OMG! My first Symfony 4 Page');
    }

    /**
     * @Route("/news/{slug}")
     *
     * @param string $slug
     *
     * @return Response
     */
    public function show(string $slug): Response
    {
        return new Response(sprintf('Future page to show the article: "%s"', $slug));
    }
}