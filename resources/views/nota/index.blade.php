<x-layout title="Inserir Media">

    <form method="get" action="/nota/store">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Seu Nome" name="nome">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Media</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sua Media" name="nota">
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

<!--     
<label>RESULTADO:</label><br>
<label>Nota: {{$resultado["nota"]}}</label><br>
<label>Faixa: {{$resultado["faixa"]}}</label><br>
<br><br><br> -->


</x-layout>