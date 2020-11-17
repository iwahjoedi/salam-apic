<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
	protected $modelName = 'App\Models\Users';
	protected $format    = 'json';

	public function index()
	{
    return $this->response->setStatusCode(200)->setJSON($this->model->findAll());
	}

	public function create()
	{
		// TODO
		return $this->response(
			array(
				'status' => 'success',
				'function' => 'create'
			)
		);
	}

	public function new()
	{
		// $model = new Users();
		// $data = [
			// 'product_name' => $this->request->getPost('product_name'),
			// 'product_price' => $this->request->getPost('product_price')
		// ];
		// $data = json_decode(file_get_contents("php://input"));
		// $data = $this->request->getPost();
		// $model->insert($data);

		$response = [
			'status'   => 201,
			'error'    => null,
			'messages' => [
				'success' => 'Data Saved'
			]
		];

		return $this->respondCreated($data, 201);
	}

	public function show($id = null)
	{
		// TODO
		$data = $this->model->getWhere(['userid' => $id])->getResult();
		if($data){
			return $this->respond($data);
		}else{
			return $this->failNotFound('No Data Found with id '.$id);
		}

	}

	public function edit($id = null)
	{
		// TODO
		return $this->response(
			array(
				'status' => 'success',
				'function' => 'edit'
			)
		);
	}

	public function update($id = null)
	{
		// TODO
		return $this->response(
			array(
				'status' => 'success',
				'function' => 'update'
			)
		);
	}

	public function delete($id = null)
	{
		// TODO
		return $this->response(
			array(
				'status' => 'success',
				'function' => 'delete'
			)
		);

	}

}
