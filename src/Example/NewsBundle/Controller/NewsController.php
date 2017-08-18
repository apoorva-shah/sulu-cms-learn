<?php

namespace Example\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/news", name="news_index")
     */
    public function indexAction(Request $request)
    {
        var_dump("yes action created successfully!");
    }
}