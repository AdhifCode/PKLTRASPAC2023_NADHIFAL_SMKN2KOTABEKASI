<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        //Menampiplkan Data sesuai limit
        // $products = Product::limit(10);
        //Menampilkan Seluruh data
        $products = Product::all();
        return response()->json($products);
    }
    

    public function store(Request $request)
    {
        //Validasi

        // $this->validate($request,[
        //     'title' => 'required',
        //     'price' => 'required',
        //     'photo' => 'required',
        //     'description' => 'required',
        // ]);

        $product = new Product();

        // Data Gambar
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $allowedFileExtension = ['pdf','jpg','png','jpeg'];
            $extention = $file->getClientOriginalExtension();
            $check = in_array($extention, $allowedFileExtension);

            if($check){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $product->photo = $name;
            }
        }

        // Data teks
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();
        return response()->json($product);
    }

    public function show($id)
    {
        //Memberi 1 item dari Products Table
        $product = Product::find($id);

        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        //Update - ID
        //Validasi

        $this->validate($request,[
            'title' => 'required',
            'price' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ]);

        $product = Product::find($id);

        // Data Gambar
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $allowedFileExtension = ['pdf','jpg','png','jpeg'];
            $extention = $file->getClientOriginalExtension();
            $check = in_array($extention, $allowedFileExtension);

            if($check){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $product->photo = $name;
            }
        }

        // Data teks
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json("Product  Sudah Ter-Delete");
        
    }
}
