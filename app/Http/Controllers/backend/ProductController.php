<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['product'] = Product::all();
        return view('backend.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['cats'] = Category::all();
        return view('backend.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name ,
            'description' => $request->desc ,
            'price' => $request->price ,
            'category_id' => $request->cats ,
        ] ;

        $model = new Product();
        if( $model->insert($data) ){
            return redirect('/product')->with('msg' , 'successfully inserted');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $data2['cats'] = Category::all();
        $data['product'] = $product ;
        return view('backend.products.edit', compact('data', 'data2' )) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id) ;

        $validate = $request->validate([
            'name' => 'required|min:2|max:20'
        ]);

        if ($validate){
            $data = [
                'name' => $request->name ,
                'description' => $request->desc ,
                'price' => $request->price ,
                'category_id' => $request->cats ,
            ] ;
            // print_r($data);
            $product->update($data);
            return redirect('/product')->with('msg', 'data updated successfully') ;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
