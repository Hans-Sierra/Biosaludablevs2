<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamentos extends Model
{
    protected $table = 'farmacia.medicamentos';
    protected $fillable = [															
        'codigo_barras',
        'nombre_comercial',
        'nombre_generico',
        'concentracion',
        'id_forma_farmaceutica',
        'numero_lote',              
        'fecha_vencimiento',
        'registro_sanitario',
        'stock_actual',
        'stock_minimo',
        'stock_maximo',
        'id_ubicacion_fisica',
        'precio_compra',
        'precio_venta',
        'requiere_receta',
        'estado',
    ];
}
