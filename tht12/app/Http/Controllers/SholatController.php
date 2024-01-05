<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SholatController extends Controller
{
    protected $url = "https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/adzan/semarang/2019/12.json";
    
    public function getJadwalSholat(){
        $client  = new Client();
        $respons = $client->get($this->url);
        $data = json_decode($respons->getBody(), true);
        return $data;
        
    }

    public function index(){
        return view('sholat', [
            'title' => 'Jadwal Sholat Bulan Desember Tahun 2019',
            'data' => $this->getJadwalSholat()
        ]);
    }
}
