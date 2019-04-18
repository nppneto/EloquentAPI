@extends('layouts.app')

@section('title', 'API Laravel - Todos os Alunos')

@section('content')
    <div>
    {{-- @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif --}}
    <br>
    <h3>Lista de Alunos</h3>

    {{-- {{dd($alunos)}} --}}
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Nascimento</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
            <tr>
                <td>{{ $aluno->id }}</td>
                <td>{{ ucwords($aluno->nome) }}</td>
                <td>{{ $aluno->email }}</td>
                <td>{{ $aluno->dt_nascimento->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection