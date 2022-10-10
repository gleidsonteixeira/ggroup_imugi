@extends('layouts.template')
@section('titulo','Unit 45 | Velocidade, tensão da linha de movimento e continuidade de movimento')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade45" data-etapa="velocidade_tensao_movimento">
			<h3 class="barlow">UNIT 45</h3>
			<h5 class="barlow upper">Velocidade, tensão da linha de movimento e continuidade de movimento</h5>
            <p>Os arcos de salto em jogos de plataforma,também estão alinhados ao conceito de formato
de círculo. Isso coloca esses personagens na mesma estética categoria como personagem. No
entanto, um fator contribuinte para a aparência do movimento é a velocidade, a tensão da
linha e a continuidade do movimento. Nós podemos ver que a tensão da linha do arco de salto
curvo é muito mais apertado e seus movimentos mais rápidos. Escalonado ou intermitente os
movimentos adicionam mais modulação estética, em contraste com o movimento continuo.</p>

<p>Linhas de movimento que fazem referência ao conceito de formato quadrado tendem a ser
encontradas em jogos de plataforma side-scrolling. Um exemplo progressivo desse gênero é
INSIDE, se passa em um mundo distópico apresentado por meio de sessões de jogo que requerem
movimentos lineares conformistas ao longo caminhos horizontais ou verticais.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit45/imagem04.png') }}" alt="guia1" style="width:100%;">
</figure>

</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
