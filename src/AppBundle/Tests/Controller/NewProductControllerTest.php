<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NewProductControllerTest extends WebTestCase
{
    public function testNewproduct()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newProduct');
    }

}
