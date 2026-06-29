<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamentos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MedicamentoController extends Controller
{
    static function store(Request $request){


        try {

        $validatedData = $request->validate([
            'codigo_barras' => 'required|string|max:100',
            'nombre_comercial' => 'required|string|max:100',
            'nombre_generico' => 'required|string|max:100',
            'concentracion' => 'required|string|max:100',
            'id_forma_farmaceutica' => 'required|integer',
            'numero_lote' => 'required|string|max:100',
            'fecha_vencimiento' => 'required|date',
            'registro_sanitario' => 'required|string|max:100',
            'stock_actual' => 'required|integer',
            'stock_minimo' => 'required|integer',
            'stock_maximo' => 'required|integer',
            'id_ubicacion_fisica' => 'required|integer',
            'precio_compra' => 'required|numeric|min:0',
            'precio_venta' => 'required|numeric|min:0',
            'requiere_receta' => 'required|boolean',
            'estado' => 'required|boolean',
        ]);
  
        db::beginTransaction();
            // Create a new Medicamentos instance and save it to the database
            $medicamento = new Medicamentos();
            $medicamento->codigo_barras = $validatedData['codigo_barras'];
            $medicamento->nombre_comercial = $validatedData['nombre_comercial'];
            $medicamento->nombre_generico = $validatedData['nombre_generico'];
            $medicamento->concentracion = $validatedData['concentracion'];
            $medicamento->id_forma_farmaceutica = $validatedData['id_forma_farmaceutica'];
            $medicamento->numero_lote = $validatedData['numero_lote'];
            $medicamento->fecha_vencimiento = $validatedData['fecha_vencimiento'];
            $medicamento->registro_sanitario = $validatedData['registro_sanitario'];
            $medicamento->stock_actual = $validatedData['stock_actual'];
            $medicamento->stock_minimo = $validatedData['stock_minimo'];
            $medicamento->stock_maximo = $validatedData['stock_maximo'];
            $medicamento->id_ubicacion_fisica = $validatedData['id_ubicacion_fisica'];
            $medicamento->precio_compra = $validatedData['precio_compra'];
            $medicamento->precio_venta = $validatedData['precio_venta'];
            $medicamento->requiere_receta = $validatedData['requiere_receta'];
            $medicamento->estado = $validatedData['estado'];
            $medicamento->save();
            db::commit();
            return response()->json(['message' => 'Medicamento creado exitosamente', 'data' => $medicamento], 201);
        } catch (\Exception $e) {
            db::rollBack();
            log::error('Error al crear el medicamento: ' . $e->getMessage());
            return response()->json(['message' => 'Error al verificar la existencia del medicamento', 'error' => $e->getMessage()], 500);
        }

        
    }


}
