<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

/**
 * Menus Controller
 * Handle all function required by Menus
 **/
class Menus extends ResourceController
{
    protected $modelName = 'App\Models\MenusModel';
    protected $format    = 'json';

    /**
     * Index function.
     *
     * @return void
     **/
    public function index()
    {
      return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $record = $this->model->find($id);
        if (! $record)
        {
            return $this->failNotFound(sprintf(
                'menu with id %d not found',
                $id
            ));
        }

        return $this->respond($record);
    }

    public function create()
    {
        $data = $this->request->getPost();
        if (! $this->model->save($data))
        {
            return $this->fail($this->model->errors());
        }

        return $this->respondCreated($data, 'menu created');
    }

    public function update($id = null)
    {
        $data  = $this->request->getRawInput();
        $data['id'] = $id;

        if (! $this->model->save($data))
        {
            return $this->fail($this->model->errors());
        }

        return $this->respond($data, 200, 'menu updated');
    }

    public function delete($id = null)
    {
        $delete = $this->model->delete($id);
        if ($this->model->db->affectedRows() === 0)
        {
            return $this->failNotFound(sprintf(
                'menu with id %d not found or already deleted',
                $id
            ));
        }

        return $this->respondDeleted(['id' => $id], 'menu deleted');
    }

}
