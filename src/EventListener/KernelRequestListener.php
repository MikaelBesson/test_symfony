<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class KernelRequestListener
{
    public function onKernelRequest(RequestEvent $event)
    {
        if($event->getRequest()->getRealMethod() !== "POST")
        {
            $event->setResponse(new Response("<h1>Requette non autoriser</h1>"));
        }
    }
}