<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NotasModel;

class NotaController extends Controller
{
    public function index(){

        $resultado = [
            "media" => "",
            "faixa" => ""
        ];
        return view('nota.index') ->with('resultado',$resultado);
  
    }

    public function calcular(Request $request){
       
        $data = $request->all();

        $media = $data["media"];
        $resultado = $data["faixa"];


        $resultado["imc"] = round($imc, 2);


        switch (true) {
            case ($media <= 5.9):
                $resultado["faixa"] = "VocÊ está APROVADO!!!!!!";
                break;
            case ($media >= 6):
                $resultado["faixa"] = "VAGABUNDO, não passou!";
                break;
        }

        return view("nota.resultado", compact('resultado'));

    }

    public function store(Request $request){

        $data = $request->all();
        $media = $data['media'];
        $resultado = $data['resultado'];

        $notas = new NotasModel();
        $notas->media=$media;
        $notas->resultado=$resultado;

        $notas->save();
        
        return redirect()->route('imc.calcular', $data);
        
    }
}
