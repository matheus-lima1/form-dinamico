@extends('template.layout')

@section('content')

<!---
    <div class="card mb-4">
        <div class="card-body">
            <h1 class="card-title" style="text-align: center;">
                Adicionar Pergunta aberta
                <h5 class="card-subtitle m-2 text-muted">
                    Para cadastrar a pergunta aberta/dissertativa, informe apenas o seu enunciado.O campo de texto para a resposta do usuário sera mostrado no menu de "responder"
                </h5>
            </h2>
        </div>
    </div>
-->

<label>Qual tipo de pergunta você quer adicionar?</label>
<select class="form-control form-control-lg mb-4" id="type_question">
    <option value="0">Pergunta Aberta</option>
    <option value="1">Pergunta Fechada</option>
    <option value="2">Pergunta Múltiplaescolha</option>
  </select>

  <script>
      
  </script>

<form action="#" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Enunciado da pergunta</label>
        <input type="text" name="question" class="form-control @error('question') is-invalid @enderror" value="{{old('question')}}">

        @error('question')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div>
        <button type="submit" class="btn btn-lg btn-success">Criar Pergunta</button>
    </div>
</form>
@endsection