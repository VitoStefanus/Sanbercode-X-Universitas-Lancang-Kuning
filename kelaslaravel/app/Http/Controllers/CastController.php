<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = Cast::all();
        return view('cast.index', ['cast' => $cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    		'nama' => 'required|min:5',
            'umur' => 'required',
            'bio' => 'required',
        ],
        [
            'nama.required' => 'Nama harus di isi minimal 5 huruf',
            'umur.required' => 'Masukan umur dalam angka',
            'bio.required' => 'Tambahkan isi bio',
            
    	]);

        $cast = new Cast;
        $cast->nama = $request->input('nama');
        $cast->umur = $request->input('umur');
        $cast->bio = $request->input('bio');
 
        $cast->save();
    
        return redirect('/cast');

        // cast::create([
    	// 	'nama' => $request->nama,
    	// 	'umur' => $request->umur,
    	// 	'bio' => $request->bio
    	// ]);
 
    	// return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.show', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
    		'nama' => 'required|min:5',
            'umur' => 'required',
            'bio' => 'required',
        ],
        [
            'nama.required' => 'Nama harus di isi minimal 5 huruf',
            'umur.required' => 'Masukan umur dalam angka',
            'bio.required' => 'Tambahkan isi bio',
            
    	]);

        Cast::where('id', $id)
        -> update([
            'nama'=>$request->input('nama'),
            'umur'=>$request->input('umur'),
            'bio'=>$request->input('bio'),
        ]);

        return redirect('/cast');

        // $cast = Cast::find($id);
        // $cast->nama = $request->nama;
        // $cast->umur = $request->umur;
        // $cast->bio = $request->bio;
        // $cast->update();
        // return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cast::where('id', $id)->delete();

        // $cast = Cast::find($id);
        // $cast->delete();

        return redirect('/cast');
    }
}
