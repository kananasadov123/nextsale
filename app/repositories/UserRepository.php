<?php

namespace app\repositories;

use app\models\User;
use app\repositories\Interfaces\DbInterface;
use app\repositories\Interfaces\RepositoryInterface;

class UserRepository implements RepositoryInterface
{
    protected $db;

    public function __construct(DbInterface $db)
    {
        $this->db = $db;
    }

    public function all()
    {
        return $this->db->select("user");
    }

    public function insert(User $user)
    {
        $data = $this->getData($user);

        return $this->db->insert('user', $data);
    }

    public function getData(User $user)
    {
        return [
            'name' => $user->getName(),
            'surname' => $user->getSurname(),
            'email' => $user->getEmail(),
            'phone' => $user->getPhone()
        ];
    }
}
