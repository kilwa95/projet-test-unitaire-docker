<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ToDoListControllerTest extends WebTestCase
{
    public function testPostTodolist()
    {
        $client = static::createClient();
        $client->request('POST', '/todolist',[],[], 
        ['CONTENT_TYPE' => 'application/json'],
        '{"name":"matiere"}'
    );

        $this->assertResponseIsSuccessful();
        $this->assertEquals(201, $client->getResponse()->getStatusCode());
    }

    public function testPostTodolistNotFound() 
    {
        $client = static::createClient();
        $client->request('POST', '/todolist');
        $this->assertEquals(204, $client->getResponse()->getStatusCode());
    }


    public function testPatchTodolist()
    {
        $client = static::createClient();
        $client->request('Patch', '/todolist/1',[],[], 
        ['CONTENT_TYPE' => 'application/json'],
        '{"name":"react"}'
    );

        $this->assertResponseIsSuccessful();
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testPatchTodolistNotFound()
    {
        $client = static::createClient();
        $client->request('Patch', '/todolist/1');
        $this->assertEquals(204, $client->getResponse()->getStatusCode());
    }
}
