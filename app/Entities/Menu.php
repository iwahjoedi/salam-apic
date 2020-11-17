<?php namespace App\Entities;

use CodeIgniter\Entity;

class Menu extends Entity
{
    protected $attributes = [
        'menuid' => null,
        'menuname' => null,
    ];

    // filter on create/update data if necessary
    public function setMenuId(string $menuId): self
    {
        $this->attributes['menuid'] = ($menuId);
        return $this;
    }

        // filter on create/update data if necessary
    public function setMenuName(string $menuName): self
    {
        $this->attributes['menuname'] = ucwords($menuName);
        return $this;
    }
}
