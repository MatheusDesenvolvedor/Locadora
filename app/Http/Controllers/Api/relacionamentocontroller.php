<?php

namespace App\Http\Controllers\Api;

use App\Models\relacionamento as relacionamento;
use App\Http\Resources\relacionamento as relacionamentoResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{

    public function index()
    {
        $relacionamento = relacionamento::paginate(1);
        return relacionamentoResource::collection($relacionamento);
    }

    public function show($id)
    {
        $relacionamento = relacionamento::findOrFail($id);
        return new relacionamentoResource($relacionamento);
    }

    public function store(Request $request)
    {
        $relacionamento = new relacionamento;
        $relacionamento->genero_id = $request->input('genero_id');
        $relacionamento->lista_id = $request->input('lista_id');
        $relacionamento->locadora_id = $request->input('locadora_id');

        if ($relacionamento->save()) {
            return new relacionamentoResource($relacionamento);
        }
    }

    public function update(Request $request)
    {
        $relacionamento = relacionamento::findOrFail($request->id);
        $relacionamento->genero_id = $request->input('genero_id');
        $relacionamento->lista_id = $request->input('genero_id');
        $relacionamento->locadora_id = $request->input('locadora_id');

        if ($relacionamento->save()) {
            return new relacionamentoResource($relacionamento);
        }
    }

    public function destroy($id)
    {
        $relacionamento = relacionamento::findOrFail($id);
        if ($relacionamento->delete()) {
            return new relacionamentoResource($relacionamento);
        }
    }
}
