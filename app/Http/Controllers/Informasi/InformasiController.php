<?php

namespace App\Http\Controllers\Informasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InformasiController extends Controller
{
    public function nambahinformasi()
    {
        return view("informasi.nambahinformasi");
    }

    public function postInformasi(Request $request)
    {
        if ($files = $request->file('gambar')) {
            // Define upload path
            $destinationPath = public_path('/gambar/'); // upload path
            // Upload Orginal Image
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";

            DB::table('informasi_sampahs')->insert([
                    'judul' => $request->judul,
                    'informasi' => $request->informasi,
                    'gambar' => "$profileImage",
                ]);
        }

        return redirect('/admin/informasi/overview-informasi');
    }
}
