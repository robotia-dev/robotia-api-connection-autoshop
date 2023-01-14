<?php

namespace App\Http\Controllers;

use App\Models\ItensRelacionados;
use Illuminate\Http\Request;

class ItensRelacionadosController extends Controller{
public function createRelacao(Request $request)
{
    $data = $request->all();

    // $validator = Validator::make($data, [
    //     'empresa' => 'required',
    //     'revenda' => 'required',
    //     'item_estoque_principal' => 'required',
    //     'item_estoque_relacionado' => 'required',
    //     'relacao_multipla' => 'required',
    //     'client' => 'required',
    // ]);

    // if ($validator->fails()) {
    //     return response()->json(['errors' => $validator->errors()], 400);
    // }

   // $relacao = new ItensRelacionados();
  //  $relacao->createRelacao($data);

    return response()->json($data, 201);// response()->json(['message' => 'Relacao criada com sucesso'], 201);
}
}