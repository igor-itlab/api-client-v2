<?php


namespace ApiClient\EventSubscriber;

use ApiClient\Events\ApiClientEvents;
use ApiClient\Events\BeforeRequestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class BeforeRequestEventSubscriber
 * @package ApiClient\EventSubscriber
 */
class BeforeRequestEventSubscriber implements EventSubscriberInterface
{

    /**
     * @return array|string[]
     */
    public static function getSubscribedEvents(): array
    {
        return [
            ApiClientEvents::BEFORE_REQUEST => 'onBeforeRequestEvent',
        ];
    }

    /**
     * @param BeforeRequestEvent $event
     */
    public function onBeforeRequestEvent(BeforeRequestEvent $event)
    {
        $test = 1;
    }
}
