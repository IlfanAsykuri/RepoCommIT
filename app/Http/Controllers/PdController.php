<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Pedatren;
use Illuminate\Http\Request;

class PdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodata = Biodata::get();
        return($biodata);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('input.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:30',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:50',
            'nik' => 'required|string|size:16|unique:biodata,nik',
            'no_kk' => 'required|string|size:16',
            'no_telpon' => 'required|string|max:15',
            'email' => 'required|email|max:100|unique:biodata,email',
            'jenjang_pendidikan_terakhir' => 'required|in:SD,SMP,SMA,D3,S1,S2,S3',
            'anak_keberapa' => 'required|integer|min:1',
            'berapa_bersaudara' => 'required|integer|min:1',
            'kewarganegaraan' => 'required|in:WNI,WNA',
            'no_paspor' => 'nullable|integer|unique:biodata,no_paspor',
        ]);

        $biodata = Biodata::create([
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'nik' => $request->input('nik'),
            'no_kk' => $request->input('no_kk'),
            'no_telpon' => $request->input('no_telpon'),
            'email' => $request->input('email'),
            'jenjang_pendidikan_terakhir' => $request->input('jenjang_pendidikan_terakhir'),
            'kewarganegaraan' => $request->input('kewarganegaraan'),
            'no_paspor' => $request->input('no_paspor'),
        ]);
        Pedatren::create([
            'id_biodata' => $biodata->id,
            'anak_keberapa' => $request->input('anak_keberapa'),
            'berapa_bersaudara' => $request->input('berapa_bersaudara'),
        ]);

        return redirect('input')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}