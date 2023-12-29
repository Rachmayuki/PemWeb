<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarFilm;

class filmControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = DaftarFilm::paginate(10);
        // dd($films);
        return view('films.index', ["films"=>$films]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required',
            'Rating' => 'required',
            'Durasi' => 'required',
        ]);
        DaftarFilm::create($request->all());

        return redirect()->route('films.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $films = DaftarFilm::find($id);
        return view('films.show',["films"=>$films]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $films = DaftarFilm::findOrFail($id);
        return view('films.edit', ["films"=>$films]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Judul' => 'required',
            'Rating' => 'required',
            'Durasi' => 'required',
        ]);

        $films = DaftarFilm::find($id)->update($request->all());

        return redirect()->route('films.index')->with('succes','Film Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $films = DaftarFilm::find($id)->delete();

        return redirect()->route('films.index')->with('succes','Film Berhasil di Hapus');
    }
}
