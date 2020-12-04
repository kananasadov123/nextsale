<?php
namespace app\libs;

class MainController
{
    protected $json;

    public function __construct()
    {
        $this->json = new JsonResponse();

    }


}