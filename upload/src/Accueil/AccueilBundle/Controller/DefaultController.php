<?php

namespace Accueil\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Images\ImagesBundle\Entity\Mur;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AccueilBundle:Default:index.html.twig');
    }
    public function vueAction($message)
    {
        return $this->render('AccueilBundle:Default:vue.html.twig', array(
        	'message' => $message
        ));
    }
    public function vueAjaxAction(Request $request)
    {
        $message = $request->request->get('resultat');
        if($message == '') {
        	return $this->redirect($this->generateUrl('accueil_homepage'));
        }
        $answer['html'] = $this->forward('AccueilBundle:Default:vue', array('message' => $message))->getContent(); 
		$response = new Response();                                                
		$response->headers->set('Content-type', 'application/json; charset=utf-8');
		$response->setContent(json_encode($answer));
		return $response;
    }
    public function enregistreAction(Request $request)
    {
        $message = $request->request->get('message');
        if(is_object($this->container->get('security.context')->getToken()->getUser())) {
        	$utilisateur = $this->container->get('security.context')->getToken()->getUser()->getUsername();
        }
        else {
        	$utilisateur = 'anonyme';
        }
        $mur = new Mur();
        $mur->setAuteur($utilisateur);
        $mur->setMessage($message);
        $em = $this->getDoctrine()->getManager();
        $em->persist($mur);
        $em->flush();
        
        return $this->redirect($this->generateUrl('index_mur'));
    }
}