<?php


class MainController
{
    protected $validator;

    protected $load;

    protected $json;

    public function __construct()
    {
        require_once CONTROLLER_PATH . 'Validator.php';

        $this->load = new MainView();

        $this->validator = new Validator();

        $this->json = new JsonResponse();


    }


}