<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::latest()->paginate(10);

        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_kelas' => ['required', 'max:30', 'unique:kelas,kode_kelas'],
            'nama_kelas' => ['required', 'max:100'],
            'tingkat' => ['required', 'integer', 'min:1', 'max:12'],
            'kapasitas' => ['required', 'integer', 'min:1', 'max:100'],
        ]);

        Kelas::create($validated);

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kela)
    {
        return view('kelas.show', ['kelas' => $kela]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kela)
    {
        return view('kelas.edit', ['kelas' => $kela]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kela)
    {
        $validated = $request->validate([
            'kode_kelas' => [
                'required',
                'max:30',
                Rule::unique('kelas', 'kode_kelas')->ignore($kela->id),
            ],
            'nama_kelas' => ['required', 'max:100'],
            'tingkat' => ['required', 'integer', 'min:1', 'max:12'],
            'kapasitas' => ['required', 'integer', 'min:1', 'max:100'],
        ]);

        $kela->update($validated);

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kela)
    {
        $kela->delete();

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil dihapus.');
    }
}
