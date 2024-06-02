<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('cast.tampil', compact('casts'));
    }

    public function create()
    {
        return view('cast.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:45',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);

        Cast::create($request->all());

        return redirect()->route('cast.index')
                        ->with('success', 'Cast created successfully.');
    }

    public function show($id)
    {
        $cast = Cast::find($id);
        return view('cast.detail', compact('cast'));
    }

    public function edit($id)
    {
        $cast = Cast::find($id);
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:45',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);

        $cast = Cast::find($id);
        $cast->update($request->all());

        return redirect()->route('cast.index')
                        ->with('success', 'Cast updated successfully.');
    }

    public function destroy($id)
    {
        $cast = Cast::find($id);
        $cast->delete();

        return redirect()->route('cast.index')
                        ->with('success', 'Cast deleted successfully.');
    }
}