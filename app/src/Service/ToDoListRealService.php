<?php

namespace App\Service;
use Doctrine\ORM\EntityManagerInterface;

class ToDoListRealService {
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function serializeToDoList($toDoList){
        $array = [];
        foreach ($toDoList as  $item) {
                $Object = [ 
                    'id' => $item->getId(),
                    'name' => $item->getName(),
                ];
                $array[] = $Object;
        }
        return $array;
    }

}
