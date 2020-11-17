<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menus extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'menuid'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'menu'       => [
				'type'           => 'TEXT',
				'null'           => false,
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
			]
		]);
		$this->forge->addKey('menuid', true);
		$this->forge->createTable('menus');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('menus');
	}

}
