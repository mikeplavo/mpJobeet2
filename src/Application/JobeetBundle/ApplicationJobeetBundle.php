<?php

namespace Application\JobeetBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use Doctrine\DBAL\Event\Listeners\MysqlSessionInit;

class ApplicationJobeetBundle extends Bundle
{ 
    public function boot()
    {
        $this->container->
            get('doctrine.orm.entity_manager')->
            getEventManager()->
            addEventSubscriber(new MysqlSessionInit('utf8', 'utf8_unicode_ci'));
    }

}
