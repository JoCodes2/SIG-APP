<?php

namespace App\Repositories;

use App\Http\Requests\MemberRequest;
use App\Interfaces\MemberInterfaces;
use App\Interfaces\ProductInterfaces;
use App\Models\MemberModel;
use App\Models\ProductModel;
use App\Traits\HttpResponseTraits;
use Illuminate\Support\Str;



use Illuminate\Support\Facades\Hash;

class MemberRepositories implements MemberInterfaces
{
    use HttpResponseTraits;
    protected $MemberModel;
    public function __construct(MemberModel $MemberModel)
    {
        $this->MemberModel = $MemberModel;
    }

    public function getAllData()
    {
        $data = $this->MemberModel::all();
        if (!$data) {
            return $this->dataNotFound();
        } else {
            return $this->success($data);
        }
    }


    public function createData(MemberRequest $request)
    {
        try {
            $data = new $this->MemberModel;
            $data->name = $request->input('name');
            $data->date_birth = $request->input('date_birth');
            $data->place_birth = $request->input('place_birth');
            $data->work = $request->input('work');
            $data->address = $request->input('address');
            $data->status = $request->input('status');
            $data->status_member = $request->input('status_member');

            $data->save();

            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }

    public function getDataById($id)
    {
        $data = $this->MemberModel::where('id', $id)->first();
        if ($data) {
            return $this->success($data);
        } else {
            return $this->dataNotFound();
        }
    }

    public function updateDataById(MemberRequest $request, $id)
    {
        try {
            // Cari data berdasarkan ID
            $data = $this->MemberModel::where('id', $id)->first();
            if (!$data) {
                return $this->dataNotFound();
            }

            $data->name = $request->input('name');
            $data->date_birth = $request->input('date_birth');
            $data->place_birth = $request->input('place_birth');
            $data->work = $request->input('work');
            $data->address = $request->input('address');
            $data->status = $request->input('status');
            $data->status_member = $request->input('status_member');
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
            $data = $this->MemberModel::findOrFail($id);

            $data->delete();

            return $this->success("Data berhasil dihapus.");
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }

    public function getTotalAnggota()
    {
        // Total Anggota Pemuda, Pendeta, Pengurus
        $totalPemuda = $this->MemberModel::where('status_member', 'youth')->count();
        $totalPendeta = $this->MemberModel::where('status_member', 'pastor')->count();
        $totalPengurus = $this->MemberModel::where('status_member', 'administrator')->count();
        $totalwanita = $this->MemberModel::where('status_member', 'girl')->count();
        $totalpria = $this->MemberModel::where('status_member', 'man')->count();
        $totalchild = $this->MemberModel::where('status_member', 'child')->count();
        $totalJemaat = $this->MemberModel::count();

        // Return sebagai response JSON
        return response()->json([
            'total_pemuda' => $totalPemuda,
            'total_pendeta' => $totalPendeta,
            'total_pengurus' => $totalPengurus,
            'total_wanita' => $totalwanita,
            'total_pria' => $totalpria,
            'total_child' => $totalchild,
            'total_jemaat' => $totalJemaat
        ]);
    }
}
