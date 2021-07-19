<?php


namespace ApiClient;


interface RequestBuilderInterface
{
    /**
     * @return Response
     */
    public function send(): Response;
}
