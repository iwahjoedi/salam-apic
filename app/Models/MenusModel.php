<?php namespace App\Models;

use App\Entities\Menus;
use CodeIgniter\Model;

class MenusModel extends Model
{
  protected $table           = 'menus';

    protected $returnType      = 'object';

    protected $allowedFields   = [
        'menuid',
        'menuname',
    ];

    protected $validationRules =[];

    /**
    protected $validationRules = [
        'menuid' => 'required|alpha_numeric|exact_length[5]|is_unique[product.product_code,id,{id}]',
        'menuname' => 'required|alpha_numeric_space|min_length[3]|max_length[255]|is_unique[product.product_name,id,{id}]',
    ];
     **/
}
