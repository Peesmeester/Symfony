<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectReponse;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function viewAction($id, Request $request)
  {
    // On récupère notre paramètre tag
    $tag = $request->query->get('tag');

    return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'id'  => $id,
      'tag' => $tag,
    ));
  }
}