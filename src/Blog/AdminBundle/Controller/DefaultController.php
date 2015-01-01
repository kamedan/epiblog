<?php

namespace Blog\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use \Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * class default controller
 */
class DefaultController extends Controller
{
   /**
    * Redirection
    * 
    * @return RedirectResponse
    * 
    * @Route("/")
    */
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('blog_admin_post_index'));
    }
}
