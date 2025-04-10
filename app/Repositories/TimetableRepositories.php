<?php

namespace App\Repositories;

use App\Http\Requests\TimetableRequest;
use App\Interfaces\TimetableInterfaces;
use App\Interfaces\ProductInterfaces;
use App\Models\TimetableModel;
use App\Models\ProductModel;
use App\Traits\HttpResponseTraits;
use Illuminate\Support\Str;



use Illuminate\Support\Facades\Hash;

class TimetableRepositories implements TimetableInterfaces
{
    use HttpResponseTraits;
    protected $TimetableModel;
    public function __construct(TimetableModel $TimetableModel)
    {
        $this->TimetableModel = $TimetableModel;
    }

    public function getAllData()
    {
        $data = $this->TimetableModel::all();
        if (!$data) {
            return $this->dataNotFound();
        } else {
            return $this->success($data);
        }
    }


    public function createData(TimetableRequest $request)
    {
        try {
            $data = new $this->TimetableModel;
            $data->title = $request->input('title');
            $data->description = $request->input('description');
            $data->day = $request->input('day');
            $data->start_time = $request->input('start_time');
            $data->end_time = $request->input('end_time');
            

            $data->save();

            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }

    public function getDataById($id)
    {
        $data = $this->TimetableModel::where('id', $id)->first();
        if ($data) {
            return $this->success($data);
        } else {
            return $this->dataNotFound();
        }
    }

    public function updateDataById(TimetableRequest $request, $id)
    {
        try {
            // Cari data berdasarkan ID
            $data = $this->TimetableModel::where('id', $id)->first();
            if (!$data) {
                return $this->dataNotFound();
            }

            $data->title = $request->input('title');
            $data->description = $request->input('description');
            $data->day = $request->input('day');
            $data->start_time = $request->input('start_time');
            $data->end_time = $request->input('end_time');
            // Simpan perubahan
            $data->update();

            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }


    public function deleteDataById($id)
    {
        try {
            // Temukan data berdasarkan ID
            $data = $this->TimetableModel::findOrFail($id);

            $data->delete();

            return $this->success("Data berhasil dihapus.");
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
}
