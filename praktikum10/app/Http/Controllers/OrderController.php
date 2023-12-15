<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class OrderController extends Controller
{
public function showFormPesan()
{
    return view('pesan');
    }
    public function submitOrder(Request $request)
    {
        $data = [
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'provinsi' => $request->input('provinsi'),
            'kota' => $request->input('kota'),
            'no' => $request->input('no'),
            ];
        return view('dashboardAdmin', compact('data'));
    }
}
