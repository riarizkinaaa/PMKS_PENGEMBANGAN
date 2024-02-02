<?php

namespace App\Http\Controllers;

use App\Models\Anak;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try{

            $alamat = Anak::anak();
            $data = [
                'anak'     => Anak::tampiljumlah(),
                'datak' => json_encode($alamat),
                'data' => $alamat,
                'Bk' => $alamat[0],
                'Bku' => $alamat[1],
                'jnp' => $alamat[2],
                'jgt' => $alamat[3],
                'kpg' => $alamat[4],
                'pry' => $alamat[5],
                'prb' => $alamat[6],
                'pbd' => $alamat[7],
                'prt' => $alamat[8],
                'pti' => $alamat[9],
                'prg' => $alamat[10],
                'pjt' => $alamat[11],
            ];
        }catch(\Exception $e){
            dd($e->getMessage()) ; 
        }

        return view('./maps/map')->with('data', $data);
    }

    public function peta()
    {
        $alamat = Anak::anak();
        $data = [
            'datak' => json_encode($alamat),
            'data' => $alamat,
            'Bk' => $alamat[0],
            'Bku' => $alamat[1],
            'jnp' => $alamat[2],
            'jgt' => $alamat[3],
            'kpg' => $alamat[4],
            'pry' => $alamat[5],
            'prb' => $alamat[6],
            'pbd' => $alamat[7],
            'prt' => $alamat[8],
            'pti' => $alamat[9],
            'prg' => $alamat[10],
            'pjt' => $alamat[11],
        ];

        return view('./maps/map')->with('data', $data);

    }
}
