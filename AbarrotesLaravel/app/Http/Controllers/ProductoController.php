<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function __construct(){

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::join("presentaciones","productos.presentacion_id","=","presentaciones.id")
        ->join("unidadmedidas", "productos.unidadMedida_id","=","unidadmedidas.id")
        ->select("productos.id", "producto", "presentacion", "cantidad", "unidadMedida", "precio", "productos.presentacion_id","unidadMedida_id")
        ->get();
        
        return response()->json($productos, 200);
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

        $rules = [

            'producto' => 'bail|required|max:100',
            'producto' => Rule::unique('productos','producto')->where(function ($query) {
                return $query->where('deleted_at', null);
            }),

            'cantidad' => 'required',
            'precio' => 'required',
            'presentacion_id' => 'required',
            'unidadMedida_id' => 'required'
        ];

        $messages = [
            'producto.required' => 'La descripción del producto es requerido!',
            'producto.unique' => 'El producto ya esta en el inventario!',
            'cantidad.required' => 'La cantidad del producto es requerido!',
            'precio.required' => 'El precio del producto es requerido!',
            'presentacion_id.required' => 'La presentacion del producto es requerido!',
            'unidadMedida_id.required' => 'La unidad de medida del producto es requerido!',
        ];
        
        $this->validate($request, $rules, $messages);


        $producto = Producto::create($request->all());

        return response()->json(['mensaje' => 'Producto guardado correctamente', 'codigo' => 200], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        
        if(!$producto){
            return response()->json(['mensaje' => 'No se encontró este producto', 'codigo' => 404], 404);
        }

        return response()->json($producto, 200);
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
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->update($request->all());
        
        return response()->json(['mensaje' => 'Producto actualizado correctamente', 'codigo' => 200], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        
        return response()->json(['mensaje' => 'Producto eliminado correctamente', 'codigo' => 200], 200);
    }
}
