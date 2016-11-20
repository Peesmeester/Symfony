<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectReponse;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function viewAction($id)
  {
    $url = $this->get('router')->generate('oc_platform_home');
    
    return new RedirectResponse($url);
  }
}