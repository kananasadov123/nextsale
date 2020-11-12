<?php

class User extends MainController
{
    protected $users;
	protected $userModel;

    public function __construct()
    {
		require_once MODEL_PATH . 'UserModel.php';
		$this->userModel = new UserModel();
        parent::__construct();
    }


    //get view users
    public function userView()
    {
        $this->load->view('user_view');
    }

    public function addUser()
    {
        $token = self::generateToken();

        $this->load->view('user_add', ['token' => $token]);
    }

    public function generateToken()
    {
        return md5(uniqid());
    }

//API

    //get users
    public function userData()
    {
        try {
            $this->getUserData();

            echo $this->json->response(200, 'success', $this->users);

        } catch (Exception $e) {
            echo $this->json->response(404, $e->getMessage() . ' - ' . $e->getLine());
        }
    }

    // get user table data from model
    public function getUserData()
    {
        $this->users = $this->userModel->getSelectAll();
    }

    public function postAddUser()
    {
        try {
            if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST)) {
                if (!$data = $this->validator->validate($_POST)) {
                    die($this->json->response(403, 'Fill inputs'));
                }

                //remove token in data
                unset($data['token']);

                $this->userModel->addUser($data);

                echo $this->json->response(200, 'User successfully added');

            } else {
                echo $this->json->response(405, 'Method not allowed');
            }
        } catch (Exception $e) {
            echo $this->json->response(404, $e->getMessage() . ' - ' . $e->getLine());
        }
    }
}