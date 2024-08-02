@extends('layouts.master')

@section('content')
<div>
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Nome" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Descrição" aria-label="Last name">
  </div>
</div>
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Preço" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Quantidade" aria-label="Last name">
  </div>
</div>

<div class="container">
        <h1>Produtos</h1>
        <a href="" class="btn btn-primary">Adicionar Produto</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>
                            <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>