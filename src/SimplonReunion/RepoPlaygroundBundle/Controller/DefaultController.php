<?php

namespace SimplonReunion\RepoPlaygroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimplonReunionRepoPlaygroundBundle:Default:index.html.twig');
    }
}
