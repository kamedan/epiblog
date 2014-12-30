<?php

namespace Blog\CoreBundle\Tests\Controller;

use Blog\ModelBundle\Entity\Author;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthorControllerTest extends WebTestCase
{
    public function testShow()
    {
        $client = static::createClient();
        
        $author = $client->getContainer()->get('doctrine')->getManager()>getRepository('ModelBundle:Author')->findFirst();

        $crawler = $client->request('GET', '/author/'.$author->getSlug());
        $authorPostCount = $author->getPosts()->count();
        
        $this->assertTrue($client->getResponse()->isSuccessful(), 'The response is not successful');
        
        $this->assertCount($authorPostCount, $crawler->filter('h2'), 'should be '.$authorPostCount.' posts');
    }

}
