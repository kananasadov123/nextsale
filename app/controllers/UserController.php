<?php

namespace app\controllers;

use app\libs\MainController;
use app\models\User;
use app\repositories\Interfaces\RepositoryInterface;

class UserController extends MainController
{
    private $repository;

    public function __construct(RepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function all()
    {
        echo $this->json->response(200, 'success', $this->repository->all());
    }

    public function insert()
    {
        try {
            if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST)) {

                $data = $_POST;

                $user = new User();
                $user->setName($data['name']);
                $user->setSurname($data['surname']);
                $user->setEmail($data['email']);
                $user->setPhone($data['phone']);

                $this->repository->insert($user);

                echo $this->json->response(200, 'User successfully added');
            }
        } catch (Exception $e) {
            echo $this->json->response(404, $e->getMessage() . ' - ' . $e->getLine());
        }
    }
}
