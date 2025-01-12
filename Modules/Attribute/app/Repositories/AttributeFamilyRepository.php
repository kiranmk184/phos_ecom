<?php

namespace Modules\Attribute\Repositories;

use Modules\Attribute\Models\AttributeFamily;

class AttributeFamilyRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new AttributeFamily();
    }

    public function index()
    {
    }

    public function store()
    {
        dd($this->model);
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}