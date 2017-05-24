<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JobControllerTest extends WebTestCase
{
	/**
	 * Test fonctionnel du controleur Job et de l'action index
	 */
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/job/');

        // 2 asserts
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Jobs list', $crawler->filter('h1')->text());
    }
}
