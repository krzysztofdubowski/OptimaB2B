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
        return $this->render('default/home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
     /**
     * @Route("/zamowienia", name="zamowienia")
     */
    public function zamowieniaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/zamowienia.html.twig')
        ;
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
     /**
     * @Route("/dokument", name="dokument")
     */
    public function DokumentAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/dokument.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
      /**
     * @Route("/faktury", name="faktury")
     */
    public function FakturyAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/faktury.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
      /**
     * @Route("/towary", name="towary")
     */
    public function TowaryAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/towary.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
     /**
     * @Route("/towar", name="towar")
     */
    public function TowarAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/towar.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    
}
