<?php

namespace App\Controllers;

use App\Models\apiMod;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Member extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\apiMod';

    use ResponseTrait;

    public function index()
    {
        $model = new apiMod();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
}
