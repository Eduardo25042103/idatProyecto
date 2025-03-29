<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Comprobar si existe el archivo JSON
        if (Storage::exists('clientes.json')) {
            $jsonData = Storage::get('clientes.json');
            $clientes = json_decode($jsonData, true);
            
            foreach ($clientes as $cliente) {
                Cliente::updateOrCreate(
                    ['id_cliente' => $cliente['dni']],
                    [
                        'nombre' => $cliente['nombre'],
                        'apellido' => $cliente['apellido'],
                        'fecha_nacimiento' => $cliente['fecha_nacimiento'],
                        'email' => $cliente['email'],
                        'telefono' => $cliente['telefono'],
                        'direccion' => $cliente['direccion'],
                        'preferencia_juego' => $cliente['preferencia_juego'],
                        'fecha_creacion' => $cliente['fecha_creacion'],
                        'fecha_modificacion' => $cliente['fecha_modificacion']
                    ]
                );
            }
        }
    }
}
