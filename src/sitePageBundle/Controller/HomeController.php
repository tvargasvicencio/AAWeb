<?php

namespace sitePageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
        $Shop = $em->getRepository('sitePageBundle:Shop')->findOneBy(array('idShop' => '1'));
    	$CorpInfo = $em->getRepository('sitePageBundle:CorpInfo')->findOneBy(array( 'shop' => $Shop ));
    	$Homepage = $em->getRepository('sitePageBundle:Homepage')->findOneBy(array('shop' => $Shop ));
        $Contact = $em->getRepository('sitePageBundle:Contact')->findOneBy(array('shop' => $Shop ));
        $ProductLines = $em->getRepository('sitePageBundle:ProductLine')->findBy(array('shop' => $Shop ));
    	$description = $CorpInfo->getDescription();
        return $this->render('sitePageBundle:Default:'.($Homepage->getTemplate()), array(
        	'description' => $description,
        	'Homepage' => $Homepage,
            'Shop' => $Shop,
            'Contact' => $Contact,
            'ProductLines' => $ProductLines));
    }
}
