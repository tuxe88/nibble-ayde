<?php

namespace AydeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AydeBundle\Utils\CostReportGenerator;
use AydeBundle\Entity\Imputation;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/carga", name="_carga")
     */
    public function cargaAction(Request $request)
    {
        //TODO
        if ($request->getMethod() == 'POST') {
            
            $fecha = $request->query->get('datepicker-dia-carga');
            $user = $request->query->get('select-user');
            $projects = $this->getDoctrine()->getManager()->getRepository('AydeBundle:Project')->findAll();
            $em = $this->getDoctrine()->getManager();
            
            foreach($projects as $actualProject){
                
                $imputation = new Imputation();
                $imputation->setDate($date);
                $imputation->setProject();
                $imputation->setUser();
                $imputation->setDedication();
                
                //busco los datos, creo la entidad y la persisto
                $em->persist($imputation);
                //$em->flush();
            }
            
            
            return $this->render('AydeBundle:Default:carga_exitosa.html.twig');
        
        }
        
        $usuarios= $this->getDoctrine()->getManager()->getRepository('AydeBundle:User')->findAll();
        
        $proyectos= $this->getDoctrine()->getManager()->getRepository('AydeBundle:Project')->findAll();
        
        
        return $this->render('AydeBundle:Default:carga_proyectos.html.twig',array("proyectos"=>$proyectos,
                                                                                    "usuarios"=>$usuarios));                        
    }
    
    
    /**
     * @Route("/consulta_resumen", name="_consulta_resumen" )
     */
    public function consultaResumenAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            
            $fechaInicial = $request->query->get('datepicker-inicio');
            $fechaFinal = $request->query->get('datepicker-fin');
            $projects = $this->getDoctrine()->getManager()->getRepository('AydeBundle:Imputation')->findAll();
            
            //$crg = new CostReportGenerator();
            //$crg->generateCostReport($projects, $fechaInicial, $fechaFinal);
        
            foreach($projects as $actualProject){
              
                $imputations = $this->getDoctrine()->getManager()->getRepository('AydeBundle:Imputation')->findBy(array("project"=>$actualProject,
                                                                                                                        ));
                
                
            }
            
            return $this->render('AydeBundle:Default:resumen.html.twig');
        
        }
        
        return $this->render('AydeBundle:Default:consulta_resumen.html.twig');
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
