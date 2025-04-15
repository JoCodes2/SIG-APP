<?php

namespace App\Interfaces;

use App\Http\Requests\ContentRequest;
use Illuminate\Http\Request;

interface  ContentInterfaces
{
    public function getAllData($category);
    public function createData(ContentRequest $request);
    public function getDataById($id);
    public function updateDataById(ContentRequest $request, $id);
    public function deleteDataById($id);
}
