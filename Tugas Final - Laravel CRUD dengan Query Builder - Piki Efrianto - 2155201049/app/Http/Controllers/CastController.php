<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index()
    {
        $cast = DB::table('cast')->get();
        return view('cast.index', compact('cast'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        // Validasi form
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        DB::table('cast')->insert([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
        ]);

        return redirect('cast')->with('success', 'Data berhasil disimpan');
    }

    public function show($id)
{
$cast = DB::table('cast')->where('id', $id)->first();
return view('cast.show', compact('cast'));
}

    public function edit($id)
    {
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        DB::table('cast')->where('id', $id)->update([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
        ]);

        return redirect('/cast')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast')->with('success', 'Data berhasil dihapus');
    }
}