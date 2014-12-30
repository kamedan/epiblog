<?php

namespace Blog\CoreBundle\Controller;

use Blog\ModelBundle\Entity\Author;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * class AuthorController
 */
class AuthorController extends Controller
{
    /**
     * show post by author
     * 
     * @param string $slug
     * 
     * @throws NotFoundHttpException
     * @return array
     * 
     * @Route("/author/{slug}")
     * @Template()
     */
    public function showAction($slug)
    {
        $author = $this->getDoctrine()->getRepository('ModelBundle:Author')->findOneBy(
                array(
                    'slug' => $slug
                )
                );
                if (null === $author)
                {
                    throw $this->createNotFoundException('author not found');
                }
                
                $posts = $this->getDoctrine()->getRepository('ModelBundle:Post')->findBy(
                 array(
                    'author' => $author
                )
                );
                return array(
                    'posts'  => $posts,
                    'author' => $author
                    
                        );
    }

}
