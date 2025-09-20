<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products/index');
    }

    public function add(){
        return view('products/add');
    }

    public function save(Request $request){
        $request->validate([
            'nombre'      => 'required|string|max:100',
            'precio'      => 'required|numeric',
            'descripcion' => 'nullable|string|max:100',
            'imagen'      => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        $path = null;
        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('productos', 'public');
        }

        Product::create([
            'nombre'      => $request->nombre,
            'precio'      => $request->precio,
            'descripcion' => $request->descripcion,
            'imagen'      => $path,
        ]);

        return redirect('/product/index')->with('success', 'Producto guardado correctamente');

    }

    public function edit(){
        return view('products/edit');
    }

    public function update(){
        return view('products/index');
    }

    public function delete(){
        return view('products/index');
    }
}
