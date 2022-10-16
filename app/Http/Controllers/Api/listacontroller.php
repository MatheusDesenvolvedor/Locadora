<?php

namespace App\Http\Controllers\Api;

use App\Models\lista as lista;
use App\Http\Resources\lista as listaResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class listaController extends Controller
{

    public function index()
    {
        $lista = lista::paginate(1);
        return listaResource::collection($lista);
    }

    public function show($id)
    {
        $lista = lista::findOrFail($id);
        return new listaResource($lista);
    }

    public function store(Request $request)
    {
        $lista = new lista;
        $lista->nome = $request->input('nome');
        $lista->sobrenome = $request->input('sobrenome');

        if ($lista->save()) {
            return new listaResource($lista);
        }
    }

    public function update(Request $request)
    {
        $lista = lista::findOrFail($request->id);
        $lista->nome = $request->input('nome');
        $lista->sobrenome = $request->input('sobrenome');

        if ($lista->save()) {
            return new listaResource($lista);
        }
    }

    public function destroy($id)
    {
        $lista = lista::findOrFail($id);
        if ($lista->delete()) {
            return new listaResource($lista);
        }
    }
}
