<?php

namespace AydeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AydeBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/carga")
     */
    public function cargaAction()
    {
        
        $usuarios= $this->getDoctrine()->getManager()->getRepository('AydeBundle:User')->findAll();
        
        $proyectos= $this->getDoctrine()->getManager()->getRepository('AydeBundle:Project')->findAll();
        
        
        return $this->render('AydeBundle:Default:carga_proyectos.html.twig',array("proyectos"=>$proyectos,
                                                                                    "usuarios"=>$usuarios));
    }
    
    /**
     * @Route("/resumen")
     */
    public function resumenAction()
    {
        return $this->render('AydeBundle:Default:resumen.html.twig');
    }
    
    /**
     * @Route("/testing")
     */
    public function testingAction()
    {
        $crg = new \AydeBundle\Utils\CostReportGenerator();
        
        die('dd');
    }
    
    
}
