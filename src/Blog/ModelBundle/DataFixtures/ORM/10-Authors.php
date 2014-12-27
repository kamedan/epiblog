<?php

namespace Blog\ModelBundle\DataFixtures\ORM;

use Blog\ModelBundle\Entity\Author;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


/**
 * Fixtures for the Author entity
 */
class Authors extends AbstractFixture implements OrderedFixtureInterface {
    
    /**
     * 
     * @{inheritDoc}
     */
    public function getOrder()
    {
        return 10;
    }
    
    /**
     * 
     * @{inheritDoc}
     */
    
    public function load(ObjectManager $manager)
    {
        $a1 = new Author();
        $a1->setName('Amine');
        
        $a2 = new Author();
        $a2->setName('Aymen');
        
        $a3 = new Author();
        $a3->setName('Imed');
        
        $manager->persist($a1);
        $manager->persist($a2);
        $manager->persist($a3);
        
        $manager->flush();
    }
    
}