<?php

namespace Example\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/news", name="news_index")
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        return new Response('yes action created successfully!');
    }
}