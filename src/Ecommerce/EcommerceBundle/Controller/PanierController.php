<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcommerceBundle:Panier:index.html.twig');
    }
}
