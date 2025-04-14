<?php

namespace App\Repositories;

use App\Http\Requests\ContentRequest;
use App\Interfaces\ContentInterfaces;
use App\Models\ContentModel;
use App\Traits\HttpResponseTraits;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;



use Illuminate\Support\Facades\Hash;

class ContentRepositories implements ContentInterfaces
{
    use HttpResponseTraits;
    protected $ContentModel;
    public function __construct(ContentModel $ContentModel)
    {
        $this->ContentModel = $ContentModel;
    }

    public function getAllData($category)
    {
        $data = $this->ContentModel::where('category', $category)->get();
        if (!$data) {
            return $this->dataNotFound();
        } else {
            return $this->success($data);
        }
    }


    public function createData(ContentRequest $request)
    {
        try {
            $data = new $this->ContentModel;
            $data->title = $request->input('title');
            $data->description = $request->input('description');
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = 'IMG-content-' . Str::random(15) . '.' . $extension;
                Storage::makeDirectory('uploads/img-content');
                $file->move(public_path('uploads/img-content'), $filename);
                $data->image = $filename;
            }
            $data->link = $request->input('link');
            $data->category = $request->input('category');
            $data->date_upload = $request->input('date_upload');



            $data->save();

            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }

    public function getDataById($id)
    {
        $data = $this->ContentModel::where('id', $id)->first();
        if ($data) {
            return $this->success($data);
        } else {
            return $this->dataNotFound();
        }
    }

    public function updateDataById(ContentRequest $request, $id)
    {
        try {
            // Cari data berdasarkan ID
            $data = $this->ContentModel::where('id', $id)->first();
            if (!$data) {
                return $this->dataNotFound();
            }

            $data->title = $request->input('title');
            $data->description = $request->input('description');
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = 'IMG-content-' . Str::random(15) . '.' . $extension;

                // Buat folder jika belum ada
                $uploadPath = public_path('uploads/img-content');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                // Hapus file lama jika ada dan bukan direktori
                $oldFilePath = public_path('uploads/img-content/' . $data->image);
                if (!empty($data->image) && file_exists($oldFilePath) && is_file($oldFilePath)) {
                    unlink($oldFilePath);
                }

                // Simpan file baru
                $file->move($uploadPath, $filename);

                // Simpan nama file baru di database
                $data->image = $filename;
            }
            $data->link = $request->input('link');
            $data->category = $request->input('category');
            $data->date_upload = $request->input('date_upload');

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
            $data = $this->ContentModel::findOrFail($id);

            $data->delete();

            return $this->success("Data berhasil dihapus.");
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
}
