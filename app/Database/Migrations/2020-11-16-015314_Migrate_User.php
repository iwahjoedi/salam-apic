<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrateUser extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'userid'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'unique' => TRUE,
			],
			'useremail'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'unique' => TRUE,
			],
			'active'       => [
				'type'           => 'TINYINT',
				'constraint'     => '1',
			],
			'created_at' => [
				'type'           => 'TIMESTAMP',
			],
			'updated_at' => [
				'type'           => 'TIMESTAMP',
			],
			'deleted_at' => [
				'type'           => 'TIMESTAMP',
				'null'           => true,
			],
		]);
		$this->forge->addKey('userid', true);
		$this->forge->createTable('users');
		//
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
