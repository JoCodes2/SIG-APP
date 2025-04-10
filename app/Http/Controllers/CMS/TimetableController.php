<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\TimetableRequest;
use App\Repositories\TimetableRepositories;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    protected $TimetableRepo;
    public function __construct(TimetableRepositories $TimetableRepo)
    {
        $this->TimetableRepo = $TimetableRepo;
    }
    public function getAllData()
    {
        return $this->TimetableRepo->getAllData();
    }
    public function createData(TimetableRequest $request)
    {
        return $this->TimetableRepo->createData($request);
    }
    public function getDataById($id)
    {
        return $this->TimetableRepo->getDataById($id);
    }
    public function updateDataById(TimetableRequest $request, $id)
    {
        return $this->TimetableRepo->updateDataById($request, $id);
    }
    public function deleteDataById($id)
    {
        return $this->TimetableRepo->deleteDataById($id);
    }
}
