<?php

namespace App\Interfaces;

use App\Http\Requests\MemberRequest;
use Illuminate\Http\Request;

interface  MemberInterfaces
{
    public function getAllData();
    public function createData(MemberRequest $request);
    public function getDataById($id);
    public function updateDataById(MemberRequest $request, $id);
    public function deleteDataById($id);
}
