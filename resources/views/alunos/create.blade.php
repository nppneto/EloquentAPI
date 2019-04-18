@extends('layouts.app')

@section('title', 'Novo Aluno')

@section('content')

<div class="container">
    <h3>Cadastro de Aluno</h3>
    <form action="{{ Route('alunos.store') }}" method="POST">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="form-group">
            <label>E-mail:</label>
            <input type="mail" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Data de Nascimento:</label>
            <input type="date" class="form-control" name="dt_nascimento">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="submit">Salvar</button>
        </div>
    </form>
</div>
    
@endsection