<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreNasabahRequest;
use App\Http\Requests\UpdateNasabahRequest;

use App\Models\Nasabah;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
        $nasabahs = Nasabah::all();

        return response(view('nasabahs.index', ['nasabahs' => $nasabahs]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
        return response(view('nasabahs.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNasabahRequest $request): RedirectResponse
    {
        if (Nasabah::create($request->validated())) {
            return redirect(route('nasabahs.index'))->with('success', 'Nasabah berhasil disimpan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        xx('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        $nasabah = Nasabah::findOrFail($id);

        return response(view('nasabahs.edit', ['nasabah' => $nasabah]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNasabahRequest $request, string $id): RedirectResponse
    {
        $nasabah = Nasabah::findOrFail($id);

        if ($nasabah->update($request->validated())) {
            return redirect(route('nasabahs.index'))->with('success', 'Data berhasil diubah!'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $nasabah = Nasabah::findOrFail($id);

        if ($nasabah->delete()) {
            return redirect(route('nasabahs.index'))->with('success', 'Data terhapus!');
        }

        return redirect(route('nasabahs.index'))->with('error', 'Maaf, data tidak bisa dihapus!');
    }
}
