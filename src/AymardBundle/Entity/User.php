<?php
// src/AppBundle/Entity/User.php

namespace AymardBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Avanzu\AdminThemeBundle\Model\UserInterface;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->is_online = true;
    }
    
    public function getAvatar(){}
    
    
    public function getName(){
        return $this->username;
    }
    
    public function getMemberSince(){
        return $this->created_at;
    }
    
    /**
     * @ORM\Column(name="is_online", type="integer", length=1)
     */
    private $is_online;
    
    public function setIsOnline($value){
        $this->is_online = $value;
    }
    
    public function isOnline(){
        return $this->last_login;
    }
    
    public function getIdentifier(){
        return $this->id;
    }
    
    public function getTitle(){
        return $this->username;
    }
}