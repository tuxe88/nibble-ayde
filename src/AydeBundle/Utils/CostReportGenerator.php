<?php

namespace AydeBundle\Utils;

class CostReportGenerator {

    public function generateCostReport($projects,$dateFrom,$dateTo){
        
        $em = $this->getDoctrine()->getManager();
        
        
        $repo = $em->getRepository('AydeBundle:Project')->findAll();
    }
    
    
}
