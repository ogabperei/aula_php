<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NotasModel;

class NotaController extends Controller
{
    public function index(){

        $resultado = [
            "nota" => "",
            "faixa" => ""
        ];
        return view('nota.index') ->with('resultado',$resultado);
  
    }

    public function calcular(Request $request){
       
        $data = $request->all();

        $nota = $data["nota"];
        $faixa = $data["faixa"];


        switch (true) {
            case ($nota <= 5.9):
                $faixa["faixa"] = "VocÊ está APROVADO!!!!!!";
                break;
            case ($nota >= 6):
                $faixa["faixa"] = "VAGABUNDO, não passou!";
                break;
        }

        return view("nota.resultado", compact('faixa'));

    }

    public function store(Request $request){

        $data = $request->all();
        $nome = $data['nome'];
        $nota = $data['nota'];

        $nota = new NotaModel();
        $nota->nome=$nome;
        $nota->nota=$nota;
        
        $nota->save();
        
        return redirect()->route('notas.calcular', $data);
        
    }
}

