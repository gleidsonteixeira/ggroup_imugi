@extends('layouts.template')
@section('titulo','Unit 43 | Composição Dinâmica')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade43" data-etapa="composicao_dinamica">
			<h3 class="barlow">UNIT 43</h3>
			<h5 class="barlow upper">O espectro da forma e a composição dinâmica</h5>
            <p>O valor emocional dos elementos do videogame, incluindo elementos visuais e não-visuais,
são igualmente influenciados pelo conceito de forma ao qual são alinhados. A consistência
com a qual o círculo, o quadrado e o triângulo podem ser usados e expressar certos temas nos
permite orientar as formas primárias ao longo do nosso tema.</p>

<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit43/imagem02.png') }}" alt="guia1" style="width:100%;">
</figure>
<p style="margin-top:20px;">Nosso espectro de formas trabalha lado a lado com a composição dinâmica. "Composição"
refere-se ao ato de combinar partes ou elementos para formar um todo. Em termos de videogame,
isso se refere às partes componentes de um jogo que ocorrem a qualquer momento
em uma experiência interativa. "Composição dinâmica" implica que esses elementos de jogo
podem ser variados de momento a momento para servir ao requisitos estéticos da história.</p>
<p>Ao contrário das formas de arte tradicionais, a interatividade significa que as ações do jogador
são intimamente ligado à experiência visual e artistica e também deve ser considerado no
contexto da composição, mesmo que ocorram fora do quadro.</p>
<p>Os oito elementos da composição dinâmica incluem formas e poses de personagens, linhas de
movimento, formas do ambiente, caminhos, diálogo, enquadramento, áudio.</p>
<p>Você pode pensar na composição dinâmica como os elementos fundamentais necessário para
o estágio de desenvolvimento do protótipo preliminar do jogo, em que os principais elementos
do jogo são elaborados com formas simples e marcadores de posição para testar se o
design básico suporta a jogabilidade desejada, experiência antes de os assets artisticos serem
criados. É sobre esta base de composição dinâmica que camadas de detalhes serão adicionadas
(luz, cor, voz ,personagem, animação, etc.).</p>
<p>A base tátil do mundo real das formas primárias significa que elas são característica da arte
atemporais, permitindo-nos encontrar relações entre ,aparentemente, elementos artisticos
diferentes que incluem até mesmo comunicação sonora e não visual.</p>
</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
