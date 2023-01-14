<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemEstoqueDependencia;

class ItemEstoqueDependenciaController extends Controller
{
 /**
 * @OA\Get(
 *      path="/item_dependente/{item_estoque}",
 *      summary="Get list of items",
 *  @OA\Parameter(
 *          name="item_estoque",
 *          in="query",
 *          description="Item id",
 *          required=true,
 *          @OA\Schema(
 *              type="int"
 *          )
 *      ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation"
 *       ),
 *      @OA\Response(response=400, description="Bad request"),
 *      @OA\Response(response=404, description="Resource Not Found"),
 * )
 */

    public function index($item_estoque)
    
    {
            return ItemEstoqueDependencia::select('empresa','revenda','item_principal', 'item_dependente')
                                         ->where('item_principal', $item_estoque)
                                         ->get()
                                         ->toJson();
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
