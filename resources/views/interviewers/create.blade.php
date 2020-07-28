@extends('template.layout')

@section('content')
<form action="{{route('interviewers.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

        @error('name')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Senha</label>
        <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}">

        @error('password')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-lg btn-success">Adicionar Entrevistador</button>
    </div>
</form>
@endsection