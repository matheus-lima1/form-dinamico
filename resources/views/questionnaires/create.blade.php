@extends('template.layout')

@section('content')
<form action="{{route('questionnaires.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Título do Questionário</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">

        @error('title')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Audio</label>
        <input type="text" name="audio" class="form-control @error('audio') is-invalid @enderror" value="{{old('audio')}}">

        @error('audio')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Perguntas deste Questionário</label>
        
    </div>

    <div class="form-group">
        <label>Perguntas Cadastradas</label>
        <select name="questions[]" class="form-control" multiple>
            @foreach ($questions as $q)
                 <option value="{{$q->id}}" @if($q->id == 1) selected @endif>
                    {{$q->question}}
                 </option>
            @endforeach
            
        </select>
    </div>

    <div class="form-group">
        <label>Adicionar Perguntas</label>
        <a href="{{route('questions.create')}}" class="form-control btn btn-primary">Pergunta Aberta</a>
        <a href="{{route('questions.create')}}" class="form-control btn btn-primary">Pergunta Aberta</a>
    </div>

    <div>
        <button type="submit" class="btn btn-lg btn-success">Criar Questionário</button>
    </div>
</form>
@endsection