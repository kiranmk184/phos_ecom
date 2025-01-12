<?php

namespace Modules\Attribute\Services;

use Modules\Attribute\Repositories\AttributeFamilyRepository;

class AttributeFamilyService
{
    public function __construct(protected AttributeFamilyRepository $attributeFamilyRepository)
    {
    }

    public function index()
    {

    }

    public function store(): mixed
    {
        return $this->attributeFamilyRepository->store();
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}