@extends('layouts.template')

@section('conteudo')

<div class="card bg-success">

  <div class="card-header">

    Imugi - Tecnologia e Educação

  </div>

  <div class="card-body">

    <blockquote class="blockquote mb-0">

    <p>Esta e a minha Unidade de Interesse {{ $data['unidade'] }}.</p>

      <footer class="blockquote-footer">

          <p> Nome : <strong> {{ $data['nome'] }} </strong> </p>

          <p> Telefone : <strong> {{ $data['telefone'] }} </strong> </p>

      </footer>

    </blockquote>

  </div>

</div>

@endsection