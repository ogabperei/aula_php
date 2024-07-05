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
        return view('nota.index')->with('resultado', $resultado);
  
    }

    public function calcular(Request $request){

        $data = $request->all();

        $nome = $data["nome"];
        $nota = $data["nota"];


        $resultado["nota"] = $nota;


        switch (true) {
            case ($nota <= 5):
                $resultado["faixa"] = "REPROVADO";
                break;
            case ($nota >= 6):
                $resultado["faixa"] = "APROVADO";
                break;
        }

        return view("nota.resultado")->with('resultado', $resultado);

    }

     public function store(Request $request){

         $data = $request->all();
         $nome = $data['nome'];
         $nota = $data['nota'];
       
         

         $notas = new NotasModel();
         $notas->nome=$nome;
         $notas->nota=$nota;
        
        
         $notas->save();
        
         return redirect()->route('notas.calcular', $data);
        
   }
}

