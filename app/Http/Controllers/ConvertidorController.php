<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertidorController extends Controller
{

    public function index()
    {
        return view('convertidor'); 
    }

    
    public function convert(Request $request)
    {
       
        $validatedData = $request->validate([
            'inputValue' => 'required|numeric',
            'conversionType' => 'required|string',
        ]);

        $valor = floatval($validatedData['inputValue']);
        $tipo_conversion = $validatedData['conversionType'];
        $resultado = null;

        
        switch ($tipo_conversion) {
            case 'mb_to_gb':
                $resultado = $valor / 1024; // MB a GB
                break;
            case 'gb_to_mb':
                $resultado = $valor * 1024; // GB a MB
                break;
            case 'gb_to_tb':
                $resultado = $valor / 1024; // GB a TB
                break;
            case 'tb_to_gb':
                $resultado = $valor * 1024; // TB a GB
                break;
            default:
                $resultado = 'Tipo de conversión no válido';
                break;
        }

        return back()->with('resultado', $resultado); // 
    }
}
