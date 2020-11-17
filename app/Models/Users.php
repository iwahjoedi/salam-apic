<?php namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'userid';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

		protected $allowedFields = [
			'username',
			'useremail',
			'active',
			'created_at',
			'updated_at',
			'deleted_at'
		];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

		public $userid;
		public $username;
		public $useremail;
		public $active;
		public $created_at;
		public $updated_at;
		public $deleted_at;



}
