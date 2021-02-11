<?php

namespace App\Service;
use App\Entity\Item;
use Doctrine\ORM\EntityManagerInterface;
class UserService {
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function serializeUsers($users){
        $array = [];
        foreach( $users as  $item){
                $Object = [ 
                    'id' => $item->getId(),
                    'nom' => $item->getNom(),
                    'prenom' => $item->getPrenom(),
                    'email' =>$item->getEmail(),
                    'password' => $item->getPassword(),
                    'age'  => $item->getAge(),
                    'dateNaissance' => $item->getDateNaissance(),
                ];
                $array[]= $Object;
        }
        return $array;
    }

}
