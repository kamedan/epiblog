<?php

namespace Blog\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * class PostControllerTest
 * 
 */
class PostControllerTest extends WebTestCase
{
    /**
     * tests post index
     * 
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        
        $this->assertTrue($client->getResponse()->isSuccessful(), 'The response is not successful');
        $this->assertCount(3, $crawler->filter('h2'), 'should be 3 posts');
    }

}
