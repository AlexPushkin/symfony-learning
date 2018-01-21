<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/", name="home", methods={"get"})
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \InvalidArgumentException
     */
    public function homepage(): Response
    {
        return new Response('OMG! My first page!');
    }

    /**
     * @Route("/news/{slug}", name="show_article", methods={"get"})
     * @param string $slug
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \InvalidArgumentException
     */
    public function show(string $slug): Response
    {
        return new Response(sprintf('Slug: %s', $slug));
    }
}