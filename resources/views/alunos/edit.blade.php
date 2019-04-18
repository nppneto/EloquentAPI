@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')

<div class="container">

    {{-- {{ dd($aluno) }} --}}
    <h3>Atualizar Aluno - {{ ucwords($aluno->nome) }}</h3>
    <form action="{{ Route('alunos.update', $aluno->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome" value="{{ ucwords($aluno->nome) }}">
        </div>
        <div class="form-group">
            <label>E-mail:</label>
            <input type="mail" class="form-control" name="email" value="{{ $aluno->email }}">
        </div>
        <div class="form-group">
            <label>Data de Nascimento:</label>
            <input type="date" class="form-control" name="dt_nascimento" value="{{ $aluno->dt_nascimento->format('Y-m-d') }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="submit">Salvar</button>
        </div>
    </form>
</div>

@endsection