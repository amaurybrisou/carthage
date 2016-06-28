<?php
namespace AymardBundle\EventListener;

// ...

use Avanzu\AdminThemeBundle\Event\ShowUserEvent;
use AymardBundle\Entity\User;

class ShowUserListener {

    private $context;
    
    public function __construct($context){
        $this->context = $context;
    }

    public function onShowUser(ShowUserEvent $event) {

        $user = $this->getUser();
        $event->setUser($user);

    }

    protected function getUser() {
        return $this->context->getToken()->getUser();
    }

}