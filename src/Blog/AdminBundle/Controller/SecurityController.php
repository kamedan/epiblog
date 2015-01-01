<?php

namespace Blog\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * class SecurityController
 */
class SecurityController extends Controller 
{
    /**
     * login
     * 
     * @return Response
     * 
     * @Route("/login")
     */
    public function loginAction()
    {
        $request= $this->getRequest();
        $session = $request->getSession();
        
        
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else  {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        return $this->render(
            'AdminBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error
            )
        );
    }
    
    /**
     * Login check
     * 
     *  @Route("login_check")
     */
    public function loginCheckAction()
    {
        
    }
    
    /**
     * logout check
     * 
     * @Route("logout")
     */
    public function logoutAction()
    {
        
    }
}
