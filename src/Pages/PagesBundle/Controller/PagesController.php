<?php

namespace Pages\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function pageAction($id)
    {
        return $this->render('PagesBundle:Default:pages/layout/pages.html.twig');
    }
}
