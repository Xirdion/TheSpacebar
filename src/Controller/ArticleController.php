<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 13.06.18
 * Time: 15:07
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
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
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

        return $this->render('article/show.html.twig', [
            'title'    => ucwords(str_replace('-', '', $slug)),
            'comments' => $comments
        ]);
    }
}