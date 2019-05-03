<?php

namespace App\Repositories;

use App\Models\Transaction;
use App\Repositories\RepositoryInterface;

class DashboardRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = new Transaction;
    }

    public function getProductById($productId)
    {
        // return $this->model->where('id', $productId)->orderBy('id', 'desc')->get();
    }

    public function all()
    {
    }

    public function create(array $data)
    {
    }

    public function update(array $data, $id)
    {
    }

    public function delete($id)
    {
    }

    public function show($id)
    {
    }
}

