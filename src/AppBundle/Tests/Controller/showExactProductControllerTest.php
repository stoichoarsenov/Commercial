<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class showExactProductControllerTest extends WebTestCase
{
    public function testShowexactproduct()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showExactProduct');
    }

}
