<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $productos = Product::all();
        return view('products/index', compact('productos'));
    }

    public function add(){
        return view('products/add');
    }

    public function save(Request $request){

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

    public function edit($id){
        $producto = Product::findOrFail($id);
        return view('products/edit', compact('producto'));
    }

    public function update(Request $request, $id){

        $producto = Product::findOrFail($id);
        $path = $producto->imagen;
        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('productos', 'public');
        }

    $producto->update([
        'nombre'      => $request->nombre,
        'precio'      => $request->precio,
        'descripcion' => $request->descripcion,
        'imagen'      => $path,
    ]);

    return redirect('/product/index')->with('success', 'Producto actualizado correctamente');
}

    public function delete($id){
        $producto = Product::findOrFail($id);
        $producto->delete();
        return redirect('/product/index')->with('success', 'Producto eliminado correctamente');
    }
}
