<?php


namespace Blog\ModelBundle\DataFixtures\ORM;

use Blog\ModelBundle\Entity\Comment;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


/**
 * Fixtures for the Comment entity
 */
class Comments extends AbstractFixture implements OrderedFixtureInterface {
    
    /**
     * 
     * @{inheritDoc}
     */
    public function getOrder()
    {
        return 20;
    }
    
    /**
     * 
     * @{inheritDoc}
     */
    
    public function load(ObjectManager $manager)
    {
        $posts = $manager->getRepository('ModelBundle:Post')->findAll();
        
        $comments = array(
            0 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '
                . 'Donec commodo orci a nibh venenatis volutpat. Vestibulum rhoncus vitae libero tincidunt viverra. '
                . 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '
                . 'Nunc sit amet libero lectus. Aenean ultricies pulvinar nisi, et facilisis tellus consectetur at. '
                . 'Sed posuere libero non elit dignissim convallis at nec velit.',
            
            1 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '
                . 'Donec commodo orci a nibh venenatis volutpat. Vestibulum rhoncus vitae libero tincidunt viverra. '
                . 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '
                . 'Nunc sit amet libero lectus. Aenean ultricies pulvinar nisi, et facilisis tellus consectetur at. '
                . 'Sed posuere libero non elit dignissim convallis at nec velit.',
            2 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '
                . 'Donec commodo orci a nibh venenatis volutpat. Vestibulum rhoncus vitae libero tincidunt viverra. '
                . 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '
                . 'Nunc sit amet libero lectus. Aenean ultricies pulvinar nisi, et facilisis tellus consectetur at. '
                . 'Sed posuere libero non elit dignissim convallis at nec velit.',
            
        );
        $i = 0;
        foreach ($posts as $post)
        {
            $comment = new Comment();
            $comment->setAuthorName('Someone');
            $comment->setBody($comments[$i++]);
            $comment->setPost($post);
            
            $manager->persist($comment);
        }
        
        $manager->flush();
           
    }
}