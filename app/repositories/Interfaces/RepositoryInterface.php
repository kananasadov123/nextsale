<?php
namespace app\repositories\Interfaces;

use app\models\User;

interface RepositoryInterface
{
    public function all();

    public function insert(User $user);

}