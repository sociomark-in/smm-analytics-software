<?php

class UserModel extends CI_Model
{
	public $table = [
		'users' => "socioscope_users"
	];
	public function __construct()
	{
		parent::__construct();
	}

	public function get(array $columns, array $conditions)
	{
		if (count($columns) > 0) {
			$this->db->select($columns);
		}
		if (count($conditions) > 0) {
			$this->db->where($conditions);
		}
		return $this->db->get($this->table['users'])->result_array();
	}

	public function authenticate(array $data)
	{
		// $users_authentication = $this->get(['username', 'password'], ['status' => 1, 'active' => true]);
		$users_authentication = [
			[
				'username' => 'admin',
				'password' => 'admin'
			]
		];
		$flag = false;
		foreach ($users_authentication as $user) {
			if (count(array_diff($data, $user)) == 0) {
				$flag = true;
				break;
			}
		}
		if($flag){
			return [
				'username' => 'admin',
				'role' => 'admin',
			];
		} else {
			return $flag;
		}
	}
}
