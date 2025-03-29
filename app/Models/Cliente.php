<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    // Especificar el nombre de la tabla
    protected $table = 'clientes';
    
    // Especificar la clave primaria
    protected $primaryKey = 'id_cliente';
    
    // Desactivar timestamps de Laravel (ya que usamos nuestros propios campos de fecha)
    public $timestamps = false;
    
    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'id_cliente',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'email',
        'telefono',
        'direccion',
        'preferencia_juego',
        'fecha_creacion',
        'fecha_modificacion'
    ];
}
