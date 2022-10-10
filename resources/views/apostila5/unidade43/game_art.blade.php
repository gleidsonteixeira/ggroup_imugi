@extends('layouts.template')
@section('titulo','Unit 43 | Game Art')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade43" data-etapa="game_art">
			<h3 class="barlow">UNIT 43</h3>
			<h5 class="barlow upper">Game Art</h5>
            <p>A partir deste capítulo, exploraremos as mais eficazes ferramentas de design que temos para
moldar a experiência estética de um videogame: formas e composição dinâmica.</p>
<p>O objetivo é encontrar um design de linguagem universal que é entendida por indivíduos de
todos os cantos da indústria, incluindo desenvolvedores, estudiosos e consumidores.</p>
<h5 class="barlow upper">Três formas primárias</h5>
<p>No centro desta linguagem estão as três formas primárias - o círculo, o quadrado e triângulo,
que também pode ser representado como linhas (curvas, retas e angulares) e formas (os sólidos
platônicos: esferas e cilindros, caixas e pirâmides).</p>
<p>Para simplificar, vamos nos referir a eles coletivamente como formas primárias, a menos que
um referência específica seja necessária.</p>
<h5 class="barlow upper">Formas primárias e temas emocionais</h5>
<p>O que é especialmente interessante sobre as formas primárias é que cada uma corre sponde a
um conjunto particular de temas emocionais de alto nível que permaneceram constantes ao
longo história da arte.</p>
<h5 class="barlow upper">Temas Associados</h5>
<p>Independentemente do valor simbólico de um objeto, alinhando seu conceito de forma mais
amplo ao círculo, quadrado ou triângulo irá consequentemente alinhá-lo com um dos seguintes
temas:</p>
<p><strong>Círculo</strong>: inocência, juventude, energia, movimento, positividade, liberdade, relaxamento</p>
<p><strong>Quadrado</strong>: maturidade, equilíbrio, teimosia, força, descanso, contenção,
racional, conservador, calmo.</p>
<p><strong>Triângulo</strong>: agressão, força, instabilidade, dor, tristeza, tensão</p>
<p>Porque associamos essas formas com seus temas correspondentes têm a ver com nossas experiências
da vida real e o sentido do tato. O toque é o primeiro sistema sensorial que os fetos
se desenvolvem no útero mais de um ano antes que o sentido da visão se torne ativo e totalmente
maduro. Muito do que interpretamos sobre o mundo ao nosso redor durante a infância
é aprendida por meio de nossos sentidos do toque. Sentindo objetos e comparando texturas,
desenvolvemos rapidamente uma abreviatura mental para avaliar o características de objetos
com base em nossas experiências táteis. Esses instintos aprendidos às formas primárias são
parte do mecanismo de sobrevivência da humanidade. Formas triangulares bem definidas
são as mais atraentes porque nossos instintos de sobrevivência evoluíram para ficar atento a
qualquer coisa que seja potencialmente prejudicial ao nosso bem-estar.</p>

<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit43/imagem01.png') }}" alt="guia1" style="width:100%;">
</figure>

</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
