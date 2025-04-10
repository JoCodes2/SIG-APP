<?php

namespace App\Interfaces;

use App\Http\Requests\TimetableRequest;
use Illuminate\Http\Request;

interface  TimetableInterfaces
{
    public function getAllData();
    public function createData(TimetableRequest $request);
    public function getDataById($id);
    public function updateDataById(TimetableRequest $request, $id);
    public function deleteDataById($id);
}
