<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressesController
{
   /**
     * Display a listing of the resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Address::paginate(8);
        
        return response()->json($items);
    }

    /**
     * Display the specified resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request, $id)
    {
        if($item = Address::find($id)){
            
            return response()->json($item);
        
        }else{

            return response()->json(null, 404);

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $item = Address::create($request->all());

        return response()->json($item, 201);
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
        if ($item = Address::find($id)) {

            $item->update($request->all());
            
            return response()->json($item, 200);

        }else{
            
            return response()->json(null, 404);

        }
    }

    /**
     * Sotf Deletes the specified resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, $id)
    {
        if ($item = Address::find($id)) {

            $item->destroy();
            
            return response()->json(null, 204);

        } else {
            
            return response()->json(null, 404);

        }
    }

    /**
     * Restore the specified resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function restore(Request $request, $id)
    {
        if ($item = Address::find($id)) {

            $item->restore();
            
            return response()->json(null, 200);
        
        } else {
        
            return response()->json(null, 404);

        }
    }
}