<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class ItemControllerTest extends WebTestCase
{
    public function testGeTodolistItems()
    {
        $client = static::createClient();
        $client->request('GET', '/items/todolist');
        $this->assertResponseIsSuccessful();
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testPosTodolistItems()
    {

        $client = static::createClient();
        $client->request('POST', '/user/items/todolist/18',[],[], 
        ['CONTENT_TYPE' => 'application/json'],
        '{"name":"matiere","content":"react", "user_id": 41}'
    );
        $this->assertResponseIsSuccessful();
        $this->assertEquals(201, $client->getResponse()->getStatusCode());
    }

    public function testPosTodolistItemsNotFound()
    {

        $client = static::createClient();
        $client->request('POST', '/user/items/todolist/18');
        $this->assertEquals(204, $client->getResponse()->getStatusCode());
    }
}
