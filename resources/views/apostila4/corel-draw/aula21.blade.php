@extends('layouts.template')
@section('titulo','Corel Draw | Aula 4 – Linhas')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula21">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 4 – Linhas</h5>
            
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula04/imagem1.png') }}" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula04/imagem2.png') }}" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
        </div>
</main>

<script>
	activeMenu();
</script>

@endsection
