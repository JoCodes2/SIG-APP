<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;
use App\Repositories\ContentRepositories;
use Illuminate\Http\Request;

class ContentController extends Controller
{
   protected $ContentRepo;
    public function __construct(ContentRepositories $ContentRepo)
    {
        $this->ContentRepo = $ContentRepo;
    }
    public function getAllData($category)
    {
        return $this->ContentRepo->getAllData($category);
    }
    public function createData(ContentRequest $request)
    {
        return $this->ContentRepo->createData($request);
    }
    public function getDataById($id)
    {
        return $this->ContentRepo->getDataById($id);
    }
    public function updateDataById(ContentRequest $request, $id)
    {
        return $this->ContentRepo->updateDataById($request, $id);
    }
    public function deleteDataById($id)
    {
        return $this->ContentRepo->deleteDataById($id);
    }
}
