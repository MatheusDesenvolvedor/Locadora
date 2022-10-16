<?php

namespace App\Http\Controllers\Api;

use App\Models\genero as genero;
use App\Http\Resources\genero as generoResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class generoController extends Controller
{

    public function index()
    {
        $genero = genero::paginate(1);
        return generoResource::collection($genero);
    }

    public function show($id)
    {
        $genero = genero::findOrFail($id);
        return new generoResource($genero);
    }

    public function store(Request $request)
    {
        $genero = new genero;
        $genero->genero = $request->input('genero');

        if ($genero->save()) {
            return new generoResource($genero);
        }
    }

    public function update(Request $request)
    {
        $genero = genero::findOrFail($request->id);
        $genero->genero = $request->input('genero');

        if ($genero->save()) {
            return new generoResource($genero);
        }
    }

    public function destroy($id)
    {
        $genero = genero::findOrFail($id);
        if ($genero->delete()) {
            return new generoResource($genero);
        }
    }
}
