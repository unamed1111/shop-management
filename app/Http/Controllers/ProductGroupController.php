<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductGroupService;
use App\Models\ProductGroup;
use App\Http\Requests\StoreProductGroup;

class ProductGroupController extends Controller
{
    /**
     * @var service
     */
    private $service;

    public function __construct(ProductGroupService $service)
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
        $ProductGroup = ProductGroup::get()->toTree();
        return view('products.groups.productgroups',compact('ProductGroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductGroup $request)
    {
        ProductGroup::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id
        ]);
        $ProductGroup = ProductGroup::get()->toTree();
        return view('products.groups.index',compact('ProductGroup'));
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
    public function update(StoreProductGroup $request, $id)
    {
        $edit = ProductGroup::find($id);
        $edit->name = $request->name;
        $edit->parent_id = $request->parent_id;
        $edit->save();
        $ProductGroup = ProductGroup::get()->toTree();
        return view('products.groups.index',compact('ProductGroup'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ProductGroup::find($id);
        $delete->delete();
        $ProductGroup = ProductGroup::get()->toTree();
        return view('products.groups.index',compact('ProductGroup'));
    }
}