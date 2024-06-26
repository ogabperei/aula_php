<x-layout title="Calcular IMC">

<form method="get" action="/imc/store">

<div class="mb-3">
    @csrf
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="textl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
</div>
<div class="mb-3">
    @csrf
    <label for="exampleInputEmail1" class="form-label">Altura</label>
    <input type="textl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="altura">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Peso</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="peso">
</div>
  <button type="submit" class="btn btn-primary">Calcular</button>

</form>

    <label>RESULTADO:</label><br> 
    <label>IMC: {{$resultado["imc"]}}</label><br> 
    <label>Faixa: {{$resultado["faixa"]}}</label><br> 
    <br><br><br>



</x-layout>