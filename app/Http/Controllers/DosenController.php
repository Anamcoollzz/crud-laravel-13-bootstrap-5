<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::latest()->paginate(10);

        return view('dosen.index', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nidn' => ['required', 'max:30', 'unique:dosens,nidn'],
            'nama' => ['required', 'max:100'],
            'email' => ['required', 'email', 'max:255', 'unique:dosens,email'],
            'no_telp' => ['required', 'max:30'],
            'jabatan' => ['required', 'max:100'],
        ]);

        Dosen::create($validated);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $validated = $request->validate([
            'nidn' => [
                'required',
                'max:30',
                Rule::unique('dosens', 'nidn')->ignore($dosen->id),
            ],
            'nama' => ['required', 'max:100'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('dosens', 'email')->ignore($dosen->id),
            ],
            'no_telp' => ['required', 'max:30'],
            'jabatan' => ['required', 'max:100'],
        ]);

        $dosen->update($validated);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus.');
    }
}
