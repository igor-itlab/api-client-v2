<?php


namespace ApiClient\EventSubscriber;

use ApiClient\Events\ApiClientEvents;
use ApiClient\Events\RequestFailedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class RequestFailedEventSubscriber
 * @package ItlabStudio\ApiClient\EventSubscriber
 */
class RequestFailedEventSubscriber implements EventSubscriberInterface
{

    /**
     * @return array|string[]
     */
    public static function getSubscribedEvents(): array
    {
        return [
            ApiClientEvents::REQUEST_FAILED => 'onRequestFailedEvent',
        ];
    }

    /**
     * @param RequestFailedEvent $event
     */
    public function onRequestFailedEvent(RequestFailedEvent $event)
    {
        $test = 1;
    }
}
