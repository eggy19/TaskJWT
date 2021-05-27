<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataToken extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'uid' => [
				'type' => 'INT',
				'constraint' => 11,
				'primary_key' => TRUE
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'phone' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			]
		]);
		$this->forge->addKey('uid');
		$this->forge->createTable('data_token');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
