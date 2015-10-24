<?php

namespace CestomLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext; 
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if($this->get('security.context')->isGranted('ROLE_ADMIN')){
                return $this->redirect($this->generateUrl('cestom_admin_homepage'));
    } else if($this->get('security.context')->isGranted('ROLE_USER')){
                     return $this->redirect($this->generateUrl('cestom_user_homepage'));
    } else {
                     return $this->redirect($this->generateUrl('cestom_home'));
}
    }
}
