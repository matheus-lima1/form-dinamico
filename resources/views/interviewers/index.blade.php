
@extends('template.layout') 

@section('content')
    <a href="{{route('interviewers.create')}}" class="btn btn-lg btn-success">Adicionar Entrevistador</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($interviewers as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->name}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('interviewers.edit',['interviewer' => $i->id])}}" class="btn btn-sm btn-primary">EDITAR</a>

                            <form action="{{route('interviewers.destroy',['interviewer' => $i->id])}}" method="POST">
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

    {{$interviewers->links()}}

@endsection