<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
     /**
     * @Route("/zamowienia", name="zamowienia")
     */
    public function zamowieniaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/zamowienia.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
     /**
     * @Route("/platnosci", name="platnosci")
     */
    public function platnosciAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/platnosci.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
     /**
     * @Route("/logowanie", name="logowanie")
     */
    public function LogowanieAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/LoginPage.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    
}
