<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Mostrar la página principal con la lista de clientes
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('index', compact('clientes'));
    }
    
    /**
     * Obtener clientes en formato JSON (API)
     */
    public function api()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }
    
    /**
     * Importar clientes desde archivo JSON
     */
    public function importar()
    {
        // Leer el archivo JSON
        $jsonData = file_get_contents(storage_path('app/clientes.json'));
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
        
        return response()->json(['mensaje' => 'Clientes importados correctamente'], 200);
    }
}
