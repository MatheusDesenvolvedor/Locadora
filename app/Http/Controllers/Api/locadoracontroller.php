<?php

namespace App\Http\Controllers\Api;

use App\Models\locadora as locadora;
use App\Http\Resources\locadora as locadoraResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{

    public function index()
    {
        $locadora = locadora::paginate(1);
        return locadoraResource::collection($locadora);
    }

    public function show($id)
    {
        $locadora = locadora::findOrFail($id);
        return new locadoraResource($locadora);
    }

    public function store(Request $request)
    {
        $locadora = new locadora;
        $locadora->titulo = $request->input('titulo');
        $locadora->nome = $request->input('nome');

        if ($locadora->save()) {
            return new locadoraResource($locadora);
        }
    }

    public function update(Request $request)
    {
        $locadora = locadora::findOrFail($request->id);
        $locadora->titulo = $request->input('titulo');
        $locadora->nome = $request->input('nome');

        if ($locadora->save()) {
            return new locadoraResource($locadora);
        }
    }

    public function destroy($id)
    {
        $locadora = locadora::findOrFail($id);
        if ($locadora->delete()) {
            return new locadoraResource($locadora);
        }
    }
}
