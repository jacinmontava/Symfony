<?php

namespace Desymfony\DesymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	public function estaticaAction($nombre){
		return $this->render('DesymfonyBundle:Estaticas:'.$nombre.'.html.twig');
	}
}
