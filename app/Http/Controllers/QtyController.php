<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qty;

class QtyController extends Controller
{
   
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategory=Qty::orderBy('id','desc')->get();
        return view('admin.qty.index',['category'=>$productCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.qty.view'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            "name" => 'required',
                         ]); 

        $sreq = new Qty;
        $sreq->name=$request->name; 
      
        $sreq->save();
        \Session::put('success','Data Add Successfully.');
        return redirect('/quantity');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $editData=Qty::find($id);
     return view('admin.qty.edit',['editData'=>$editData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            "name" => 'required',
                          ]); 

        $sreq=Qty::find($request->input('editId'));
        $sreq->name=$request->name;

        $sreq->update();
        \Session::put('success','Data Update Successfully.');
         return redirect('/quantity'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Qty::find($id)->delete();
     \Session::put('warning','Data Remove Successfully.');
       return redirect('/quantity');
    }

    public function updateQuantityStatus(Request $request){

            $uDocData=Qty::find($request->input('id'));
            $uDocData->status=$request->CatStatus;
            $uDocData->update();
    }

}
