<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class SeederUsers extends Seeder
{
	public function run()
	{
		helper('date');

    $data = Array();

    for ($i = 1; $i <= 20; $i++) {
      $data[$i] = [
        'username' => "darth{$i}",
        'useremail' => "darth{$i}@theempire.com",
        'active'    => 1,
        'created_at' => Time::now('Asia/Jakarta', 'en_US'),
        'updated_at' => Time::now('Asia/Jakarta', 'en_US'),
      ];
    }

		// Simple Queries
		// $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
			// $data
		// );

		// Using Query Builder
    for ($i = 1; $i <= count($data); $i++) {
      $this->db->table('users')->insert($data[$i]);
    }
	}
}
