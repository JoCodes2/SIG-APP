<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Repositories\MemberRepositories;
use Illuminate\Http\Request;

class MemberController
{
    protected $MemberRepo;
    public function __construct(MemberRepositories $MemberRepo)
    {
        $this->MemberRepo = $MemberRepo;
    }
    public function getAllData()
    {
        return $this->MemberRepo->getAllData();
    }
    public function createData(MemberRequest $request)
    {
        return $this->MemberRepo->createData($request);
    }
    public function getDataById($id)
    {
        return $this->MemberRepo->getDataById($id);
    }
    public function updateDataById(MemberRequest $request, $id)
    {
        return $this->MemberRepo->updateDataById($request, $id);
    }
    public function deleteDataById($id)
    {
        return $this->MemberRepo->deleteDataById($id);
    }
}
