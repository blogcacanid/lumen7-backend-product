<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function index_page()
    {
        $products = Product::paginate(10); // 10 records per page
        return response()->json($products);
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
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
          'product_name'    => 'required',
          'product_price'   => 'required',
        ]);
        $project = Product::create([
          'product_name'    => $validatedData['product_name'],
          'product_price'   => $validatedData['product_price'],
        ]);
        $msg = [
            'success' => true,
            'message' => 'Product Update Successfully!'
        ];
        return response()->json($msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        return response()->json($products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return response()->json($product);
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
        $validatedData = $this->validate($request, [
          'product_name'    => 'required',
          'product_price'   => 'required',
        ]);
        $products = Product::find($id);
        $products->product_name = $validatedData['product_name'];
        $products->product_price = $validatedData['product_price'];
        $products->save();
        $msg = [
            'success' => true,
            'message' => 'Product updated successfully'
        ];
        return response()->json($msg);
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return response()->json('Product Deleted Successfully');
    }

    public function delete($id)
    {
        $products = Product::find($id);
        if(!empty($products)){
            $products->delete();
            $msg = [
                'success' => true,
                'message' => 'Product deleted successfully!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'Product deleted failed!'
            ];
            return response()->json($msg);
        }
    }    
}