@extends('layouts.template')
@section('titulo','Unit 34 | Asset Store')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade34" data-etapa="asset_store">
			<h3 class="barlow">UNIT 34</h3>
			<h5 class="barlow upper">Asset Store</h5>
			    <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit34/imagem5.png') }}" alt="guia1" style="width:75%;">
				</figure>
				<p style="margin-top:20px;">Unity Asset Store
Asset Store é um mercado online criado pela Unity para que desenvolvedores de jogos independentes
comprem e vendam assets reutilizáveis para criação de jogos.</p>
<p>Todos os assets comprados ou baixados da Asset Store serão mostrados no seu editor e podem
ser acessados no Navegador da janela project.</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
