<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\ToDoListService;
use App\Entity\Item;
use Symfony\Component\Mailer\MailerInterface;




class ToDoListServiceTest extends TestCase
{
    public function testAddItem()
    {
        $mailer= $this->createMock(MailerInterface::class);
        $list = new ToDoListService($mailer);
        $item = new Item();
        $item->setName('khaled');
        $item->setContent('abdulhalim');
        $this->assertInstanceOf('App\Entity\ToDoListService' ,$list->addItem($item));     
    }

    public function testAddItemExceptionName()
    {
        $mailer= $this->createMock(MailerInterface::class);
        $list = new ToDoListService($mailer);
        $item = new Item();
        $item->setName('khaled');
        $item->setContent('abdulhalim');
        $this->expectException('LogicException');
        $list->addItem($item);
        $list->addItem($item);   
    
    }


    public function testAddItemExceptionEmail()
    {
            $faker = \Faker\Factory::create('fr-FR');
            $mailer= $this->createMock(MailerInterface::class);
            $list = new ToDoListService($mailer);
            $mailer
            ->method('send')
            ->will($this->returnValue(true));

            for ($i = 0; $i <= 8; $i++) {
            $item = new Item();
            $item->setName($faker->name());
            $item->setContent($faker->email());
            $this->assertInstanceOf('App\Entity\ToDoListService' ,$list->addItem($item));
            }

    }

   
}
