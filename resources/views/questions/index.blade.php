
@extends('template.layout') 

@section('content')
    <a href="{{route('questions.create')}}" class="btn btn-lg btn-success">Adicionar Pergunta</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Enunciado</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $q)
                <tr>
                    <td>{{$q->id}}</td>
                    <td>{{$q->question}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-primary">EDITAR</a>

                            <form action="#" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger">REMOVER</button>
                            </form>

                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection