
@extends('template.layout') 

@section('content')
    <a href="{{route('questionnaires.create')}}" class="btn btn-lg btn-success">Adicionar Questionário</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questionnaires as $q)
                <tr>
                    <td>{{$q->id}}</td>
                    <td>{{$q->title}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('questionnaires.edit',['questionnaire' => $q->id])}}" class="btn btn-sm btn-primary">EDITAR</a>

                            <form action="{{route('questionnaires.destroy',['questionnaire' => $q->id])}}" method="POST">
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

    {{$questionnaires->links()}}

@endsection