<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ShowProductControllerTest extends WebTestCase
{
    public function testShowproduct()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/product');
    }

}
