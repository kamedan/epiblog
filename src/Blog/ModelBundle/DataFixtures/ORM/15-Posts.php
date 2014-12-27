<?php

namespace Blog\ModelBundle\DataFixtures\ORM;

use Blog\ModelBundle\Entity\Post;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


/**
 * Fixtures for the Post entity
 */
class Posts extends AbstractFixture implements OrderedFixtureInterface {
    
    /**
     * 
     * @{inheritDoc}
     */
    public function getOrder()
    {
        return 15;
    }
    
    /**
     * 
     * @{inheritDoc}
     */
    
    public function load(ObjectManager $manager)
    {
        $p1 = new Post();
        $p1->setTitle('Lorem ipsum dolor sit amet');
        $p1->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. '
                . 'Donec commodo orci a nibh venenatis volutpat. Vestibulum rhoncus vitae libero tincidunt viverra. '
                . 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '
                . 'Nunc sit amet libero lectus. Aenean ultricies pulvinar nisi, et facilisis tellus consectetur at. '
                . 'Sed posuere libero non elit dignissim convallis at nec velit. Suspendisse potenti. Vivamus id elit quis felis faucibus ullamcorper id vel elit. '
                . 'Nam elit nulla, elementum sed sem consectetur, maximus dapibus nulla.');
        $p1->setAuthor($this->getAuthor($manager , 'Amine'));
        
        
        
        $p2 = new Post();
        $p2->setTitle('Lorem ipsum dolor sit amet');
        $p2->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. '
                . 'Donec commodo orci a nibh venenatis volutpat. Vestibulum rhoncus vitae libero tincidunt viverra. '
                . 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '
                . 'Nunc sit amet libero lectus. Aenean ultricies pulvinar nisi, et facilisis tellus consectetur at. '
                . 'Sed posuere libero non elit dignissim convallis at nec velit. Suspendisse potenti. Vivamus id elit quis felis faucibus ullamcorper id vel elit. '
                . 'Nam elit nulla, elementum sed sem consectetur, maximus dapibus nulla.');
        $p2->setAuthor($this->getAuthor($manager , 'Aymen'));
        
        
        $p3 = new Post();
        $p3->setTitle('Lorem ipsum dolor sit amet');
        $p3->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. '
                . 'Donec commodo orci a nibh venenatis volutpat. Vestibulum rhoncus vitae libero tincidunt viverra. '
                . 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '
                . 'Nunc sit amet libero lectus. Aenean ultricies pulvinar nisi, et facilisis tellus consectetur at. '
                . 'Sed posuere libero non elit dignissim convallis at nec velit. Suspendisse potenti. Vivamus id elit quis felis faucibus ullamcorper id vel elit. '
                . 'Nam elit nulla, elementum sed sem consectetur, maximus dapibus nulla.');
        $p3->setAuthor($this->getAuthor($manager , 'Aymen'));
        
        $manager->persist($p1);
        $manager->persist($p2);
        $manager->persist($p3);
        
        $manager->flush();
    }
    /**
     * get an author
     * 
     * @param ObjectManager $manager
     * @param string        $name
     * 
     * @return Author
     */
    private function getAuthor(ObjectManager $manager, $name )
    {
        return $manager->getRepository('ModelBundle:Author')->findOneBy(
                array(
                    'name' => $name
                )
                );
    }
    
}

