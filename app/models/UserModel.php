<?php

class UserModel extends MainModel
{

	public function __construct()
	{
		parent::__construct();
	}


//admin table all get select
	public function getSelectAll()
	{
		try {
			$users = $this->db->queryFetchAllAssoc("Select * from user");
			return $users;

		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}


// add user
	public function addUser($data)
	{
		try {
			$insert = $this->db->prepare(" Insert into user(name,surname,email,phone) VALUES (:name, :surname, :email, :phone)");

			$insert->execute($data);

		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

}