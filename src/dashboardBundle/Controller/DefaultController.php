<?php

namespace dashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
        $Shop = $em->getRepository('sitePageBundle:Shop')->findOneBy(array('idShop' => '1'));
    	$CorpInfo = $em->getRepository('sitePageBundle:CorpInfo')->findOneBy(array( 'shop' => $Shop ));
    	$Homepage = $em->getRepository('sitePageBundle:Homepage')->findOneBy(array('shop' => $Shop ));
    	$description = nl2br($CorpInfo->getDescription());
    	$Contact = $em->getRepository('sitePageBundle:Contact')->findOneBy(array('shop' => $Shop ));
    	$ProductLines = $em->getRepository('sitePageBundle:ProductLine')->findBy(array('shop' => $Shop ));
        return $this->render('dashboardBundle:Default:index.html.twig', array(
        	'description' => $description,
        	'Homepage' => $Homepage,
            'Shop' => $Shop,
            'Contact' => $Contact,
            'CorpInfo' => $CorpInfo,
            'ProductLines' => $ProductLines));
    }

    public function saveCorpInfoAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $shop = $em->getRepository('sitePageBundle:Shop')->findOneBy(array( 'idShop' => ($request->get('idShop')) ));
        $shop->setTitle($request->get('title'));
        $corpInfo = $em->getRepository('sitePageBundle:CorpInfo')->findOneBy(array( 'idCorpInfo' => ($request->get('idCorpInfo')) ));
        $corpInfo->setDescription($request->get('description'));
        $corpInfo->setMission($request->get('mission'));
        $corpInfo->setVision($request->get('vision'));
        $em->flush();
    	$response = new JsonResponse();
        $response->setData(array(
            'result' => "Guardado correctamente"
        ));
        return $response;
    }

    public function saveContactAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $contact = $em->getRepository('sitePageBundle:Contact')->findOneBy(array( 'idContacts' => ($request->get('idContacts')) ));
        $contact->setDirection($request->get('direction'));
        $contact->setPhone($request->get('phone'));
        $em->flush();
        $response = new JsonResponse();
        $response->setData(array(
            'result' => "Guardado correctamente"
        ));
        return $response;
    }

    public function saveDesignAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $homepage = $em->getRepository('sitePageBundle:Homepage')->findOneBy(array( 'idHomepage' => ($request->get('idHomepage')) ));
        $homepage->setMenuColor($request->get('menuColor'));
        $homepage->setTitleColor($request->get('titleColor'));
        $homepage->setBackgroundColor($request->get('backgroundColor'));
        $homepage->setTemplate($request->get('template'));
        $em->flush();
        $file = $request->files->get('logo');
        $status = array('status' => "success","fileUploaded" => false);

        // If a file was uploaded
        if(!is_null($file)){
            // generate a random name for the file but keep the extension
            $filename = "logo_Up".".".$file->getClientOriginalExtension();
            $path = "/wamp/www/AAWeb/web/img";
            $file->move($path,$filename); // move the file to a path
            $status = array('status' => "success","fileUploaded" => true);
        }

        return new JsonResponse($status);
    }

    public function saveProductLineAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $productLine = $em->getRepository('sitePageBundle:ProductLine')->findOneBy(array( 'idProductLine' => ($request->get('idProductLine')) ));
        $productLine->setTitle($request->get('title'));
        $productLine->setDescription($request->get('description'));
        $em->flush();
        $response = new JsonResponse();
        $response->setData(array(
            'result' => "Guardado correctamente"
        ));
        return $response;
    }
}
