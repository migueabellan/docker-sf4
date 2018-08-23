<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{
    private $client = null;

    protected function setUp()
	{
        $this->client = static::createClient();
    }

    public function test_GET_index_HTTP_OK()
    {
        $client = $this->client;
        $client->request('GET', '/');
        $response = $client->getResponse();
        $content = json_decode($response->getContent(), true);
        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());
    }
}