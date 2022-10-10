@extends('layouts.template')
@section('titulo','Unit 44 | Poses Dinâmicas')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade44" data-etapa="poses_dinamicas">
			<h3 class="barlow">UNIT 44</h3>
			<h5 class="barlow upper">Poses Dinâmicas</h5>
            <p>Personagens de videogame também devem adotar poses para comunicar sua mudança de
estado emocional e físico . No e ntanto, poses de personagem dinâmicas são extremamente
complexas e demoradas para implementar em um contexto de jogo ao lidar com uma estética
realista, o que os torna muito caros.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit44/imagem06.png') }}" alt="guia1" style="width:100%;">
</figure>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit44/imagem07.png') }}" alt="guia1" style="width:70%;">
</figure>
<p style="margin-top:20px;">As formas primárias nos permitem avaliar o design dos personagens de forma objetiva, enquanto
o detalhes - a escolha de roupas e adereços, por exemplo - tendem a ser específicos
da cultura , portanto, subjetivo. De jogos independentes/autofi nanciados a jogos de grande
orçamento, personagens com profundidade e complexidade é vital para elevar o nível da narrativa em jogos digitais.</p>
<p>O desenvolvimento de personagens com profundidade emocional vão além do jogo , no entanto,
considerando o ritmo acelerado de muitos jogos, muitas vezes é benéfico ser explícito
e evitar confundir jogadores com personagens ambíguos. Conceitos de forma também podem
ser combinado para maior variedade.</p>

<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit44/imagem08.png') }}" alt="guia1" style="width:70%;">
</figure>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit44/imagem09.png') }}" alt="guia1" style="width:100%;">
</figure>
<p style="margin-top:20px;">
Como os personagens jogáveis estão sempre visíveis na tela, tais considerações de design têm
um efeito emocional poderoso e continuo no público/jogador ao longo do jogo. Como artista
você pode complementar cada conceito de forma com considerações para texturas (texturas
suaves, retas e ásperas) e cores (esquemas de cores análogos, monocromáticos e complementares).
</p>

</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
