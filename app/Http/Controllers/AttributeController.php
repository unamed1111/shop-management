<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Services\AttributeService;
use App\Http\Requests\StoreAttribute;
use Illuminate\Http\Response;

class AttributeController extends Controller
{
    /**
     * @var service
     */
    private $service;

    public function __construct(AttributeService $service)
    {
        $this->service = $service;
        // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attribute::all()->toJson();
        return view('products.attributes.attributes',compact('attributes'));
    }           

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttribute $request)
    {
        Attribute::create([
            'name' => $request->name
        ]);
        $attributes = Attribute::all();
        return Response()->json($attributes);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(StoreAttribute $request, $id)
    {
        $edit = Attribute::find($id);
        $edit->name = $request->name;
        $edit->save();
        $attributes = Attribute::all();
        return Response()->json($attributes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Attribute::find($id);
        $delete->delete();
        $attributes = Attribute::all();
        return Response()->json($attributes);
    }
}
