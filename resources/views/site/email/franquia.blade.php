@extends('layouts.template')
@section('conteudo')
<div class="card bg-success">
  <div class="card-header">
    Imugi - Tecnologia e Educação
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <p>Interesse Franquia Imugi.</p>
      <footer class="blockquote-footer">
          <p> Nome : <strong> {{ $data['nome'] }} </strong> </p>
          <p> Email : <strong> {{ $data['email'] }} </strong> </p>
          <p> Telefone : <strong> {{ $data['telefone'] }} </strong> </p>
      </footer>
    </blockquote>
  </div>
</div>
@endsection